<?php
/**
 * wp-admin "Site Content" screen: a form over the cc_content table for content shared by every page
 * (company details, links, header, navigation, footer, product and service lists, SEO fallback, 404).
 * Content of individual pages is edited on each page's own screen (inc/admin-pages.php).
 */

if (!defined('ABSPATH')) exit;

const CC_CONTENT_CAP = 'edit_pages';

/** Tabs and the key prefixes they contain, in display order. */
function cc_content_groups() {
    return [
        'general'  => ['label' => 'Company & Links', 'prefixes' => ['company.', 'links.', 'assets.', 'social']],
        'header'   => ['label' => 'Header & Navigation', 'prefixes' => ['header.', 'navigation']],
        'catalog'  => ['label' => 'Products & Services', 'prefixes' => ['products', 'services', 'industries']],
        'footer'   => ['label' => 'Footer', 'prefixes' => ['footer.']],
        'category' => ['label' => 'Category Pages (shared)', 'prefixes' => ['category.']],
        'seo'      => ['label' => 'SEO Fallback', 'prefixes' => ['seo.']],
        'page404'  => ['label' => '404 Page', 'prefixes' => ['page404.']],
        'other'    => ['label' => 'Other', 'prefixes' => []],
    ];
}

function cc_content_seed() {
    static $seed = null;
    if ($seed === null) $seed = require __DIR__ . '/content-seed.php';
    return $seed;
}

function cc_content_group_of($key) {
    foreach (cc_content_groups() as $id => $group) {
        foreach ($group['prefixes'] as $prefix) {
            if ($key === rtrim($prefix, '.') || strpos($key, $prefix) === 0) return $id;
        }
    }
    return 'other';
}

/** Keys of one tab: seed order first, then any rows added directly in the database. */
function cc_content_keys($group) {
    $keys = array_unique(array_merge(array_keys(cc_content_seed()), array_keys(cc_content_all())));
    return array_values(array_filter($keys, fn($k) => cc_content_group_of($k) === $group));
}

/** The structure a key's value must have, used to build the form and to rebuild posted data. */
function cc_content_shape($key) {
    $seed = cc_content_seed();
    return cc_blank_shape(array_key_exists($key, $seed) ? $seed[$key] : cc_content($key));
}

/** Splits "footer.cta_title" into a section ("Footer") and a field label ("Heading"). */
function cc_key_labels($key) {
    $parts = explode('.', $key);
    if (count($parts) >= 3) return [cc_label($parts[1]), cc_label(implode('_', array_slice($parts, 2)))];
    if (count($parts) === 2) return [cc_label($parts[0]), cc_label($parts[1])];
    return [cc_label($parts[0]), ''];
}

add_action('admin_menu', function () {
    add_menu_page('Site Content', 'Site Content', CC_CONTENT_CAP, 'cc-site-content', 'cc_render_content_page', 'dashicons-admin-site-alt3', 3);
});

add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook === 'toplevel_page_cc-site-content') cc_enqueue_field_assets();
});

function cc_render_content_page() {
    $groups = array_filter(cc_content_groups(), fn($id) => cc_content_keys($id), ARRAY_FILTER_USE_KEY);
    $current = sanitize_key($_GET['tab'] ?? 'general');
    if (!isset($groups[$current])) $current = array_key_first($groups);
    ?>
    <div class="wrap cc-content">
      <h1>Site Content</h1>
      <p>Content shared by every page: header, navigation, footer, company details and the product list. Each page's own content is edited on that page under <a href="<?php echo esc_url(admin_url('edit.php?post_type=page')); ?>">Pages</a>.</p>
      <?php if (!empty($_GET['updated'])) : ?><div class="notice notice-success is-dismissible"><p>Content saved.</p></div><?php endif; ?>
      <nav class="nav-tab-wrapper">
        <?php foreach ($groups as $id => $group) : ?>
          <a href="<?php echo esc_url(admin_url('admin.php?page=cc-site-content&tab=' . $id)); ?>" class="nav-tab<?php echo $id === $current ? ' nav-tab-active' : ''; ?>"><?php echo esc_html($group['label']); ?></a>
        <?php endforeach; ?>
      </nav>
      <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="cc_save_content">
        <input type="hidden" name="group" value="<?php echo esc_attr($current); ?>">
        <?php wp_nonce_field('cc_save_content'); ?>
        <?php
        $section = null;
        foreach (cc_content_keys($current) as $key) {
            [$heading, $label] = cc_key_labels($key);
            if ($heading !== $section) {
                if ($section !== null) echo '</div>';
                echo '<div class="cc-section"><h2>' . esc_html($heading) . '</h2>';
                $section = $heading;
            }
            $field = substr($key, strrpos($key, '.') === false ? 0 : strrpos($key, '.') + 1);
            echo '<div class="cc-field">';
            if ($label !== '') echo '<label class="cc-label">' . esc_html($label) . '</label>';
            cc_render_field('cc[' . $key . ']', cc_content($key, cc_content_shape($key)), cc_content_shape($key), $field, $key);
            echo '</div>';
        }
        if ($section !== null) echo '</div>';
        submit_button('Save changes');
        ?>
      </form>
    </div>
    <?php
}

add_action('admin_post_cc_save_content', function () {
    if (!current_user_can(CC_CONTENT_CAP)) wp_die('You are not allowed to edit site content.', 403);
    check_admin_referer('cc_save_content');

    $group = sanitize_key($_POST['group'] ?? '');
    $posted = wp_unslash($_POST['cc'] ?? []);
    foreach (cc_content_keys($group) as $key) {
        cc_content_save($key, cc_sanitize_value($posted[$key] ?? null, cc_content_shape($key)));
    }
    wp_safe_redirect(admin_url('admin.php?page=cc-site-content&tab=' . $group . '&updated=1'));
    exit;
});
