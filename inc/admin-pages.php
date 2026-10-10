<?php
/**
 * "Page content" box for the front page and Category Page template pages.
 * These pages use the classic screen with the box instead of the block editor, since their
 * editor body is not displayed. Pages → Add Category Page and the Duplicate row action speed up
 * creating many category pages.
 */

if (!defined('ABSPATH')) exit;

/** Form structure per page kind. Lists hold one sample item; SEO comes last. */
function cc_page_shape($kind) {
    if ($kind === 'home') {
        $shape = cc_blank_shape(cc_page_seed()['home']);
        $seo = $shape['seo'];
        unset($shape['seo']);
        return $shape + ['seo' => $seo];
    }
    return [
        'banner'       => ['title' => '', 'kicker' => '', 'lead' => '', 'image' => '', 'quote_label' => '', 'call_label' => ''],
        'breadcrumb'   => ['home' => '', 'parent' => '', 'parent_link' => '', 'current' => ''],
        'overview'     => ['title' => '', 'paragraphs' => [''], 'image' => '', 'image_alt' => ''],
        'equipment'    => ['title' => '', 'description' => '', 'items' => [['title' => '', 'icon' => '', 'description' => '', 'items' => ['']]]],
        'guide'        => ['title' => '', 'description' => '', 'items' => [['title' => '', 'description' => '']]],
        'applications' => ['title' => '', 'description' => '', 'items' => [['title' => '', 'description' => '']]],
        'trust'        => ['title' => '', 'paragraphs' => [''], 'points' => [''], 'button_label' => ''],
        'process'      => ['title' => '', 'description' => '', 'items' => [['title' => '', 'description' => '']]],
        'inquiry'      => ['title' => '', 'paragraphs' => [''], 'checklist_title' => '', 'items' => [['title' => '', 'description' => '']], 'button_label' => ''],
        'faq'          => ['title' => '', 'description' => '', 'items' => [['question' => '', 'answer' => '']]],
        'related'      => ['title' => '', 'links' => [['label' => '', 'link' => '']]],
        'seo'          => ['title' => '', 'description' => '', 'og_title' => '', 'og_description' => '', 'schema_about' => ''],
    ];
}

add_filter('use_block_editor_for_post', function ($use, $post) {
    return cc_page_kind($post) ? false : $use;
}, 10, 2);

add_action('load-post.php', function () {
    $post_id = absint($_GET['post'] ?? 0);
    if ($post_id && cc_page_kind($post_id)) remove_post_type_support('page', 'editor');
});

// Pages → Add Category Page: a new page that already uses the Category Page template.
add_action('admin_menu', function () {
    add_submenu_page('edit.php?post_type=page', 'Add Category Page', 'Add Category Page', 'edit_pages', 'post-new.php?post_type=page&cc_template=category');
});

add_action('load-post-new.php', function () {
    if (($_GET['post_type'] ?? '') !== 'page' || ($_GET['cc_template'] ?? '') !== 'category') return;
    remove_post_type_support('page', 'editor');
    add_action('wp_insert_post', function ($post_id, $post) {
        if ($post->post_status === 'auto-draft') update_post_meta($post_id, '_wp_page_template', CC_CATEGORY_TEMPLATE);
    }, 10, 2);
});

add_action('add_meta_boxes_page', function ($post) {
    $kind = cc_page_kind($post);
    if (!$kind) return;
    add_meta_box('cc-page-content', $kind === 'home' ? 'Homepage content' : 'Page content', 'cc_page_content_box', 'page', 'normal', 'high');
    cc_enqueue_field_assets();
});

function cc_page_content_box($post) {
    $kind = cc_page_kind($post);
    $data = cc_page_data($post->ID);
    wp_nonce_field('cc_page_content', 'cc_page_nonce');
    echo '<div class="cc-content">';
    echo '<p class="description">' . esc_html($kind === 'home'
        ? 'Everything shown on the homepage is edited here. The header, footer and product slideshow are shared and edited under Site Content.'
        : 'Everything shown on this page is edited here. Leave the banner title empty to use the page title. Empty sections are hidden.') . '</p>';
    foreach (cc_page_shape($kind) as $section => $shape) {
        echo '<div class="cc-section"><h3>' . esc_html(cc_label($section)) . '</h3>';
        cc_render_field("cc_page[{$section}]", $data[$section] ?? cc_blank_shape($shape), $shape, $section, "{$kind}.{$section}");
        echo '</div>';
    }
    echo '</div>';
}

add_action('save_post_page', function ($post_id) {
    if (!isset($_POST['cc_page_nonce'], $_POST['cc_page']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['cc_page_nonce'])), 'cc_page_content')) return;
    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || wp_is_post_revision($post_id) || !current_user_can('edit_post', $post_id)) return;
    $kind = cc_page_kind($post_id);
    if (!$kind) return;
    $data = cc_sanitize_value(wp_unslash($_POST['cc_page']), cc_page_shape($kind));
    update_post_meta($post_id, '_cc_content', wp_slash($data));
});

add_filter('display_post_states', function ($states, $post) {
    if (cc_page_kind($post) === 'category') $states['cc_category'] = 'Category Page';
    return $states;
}, 10, 2);

add_filter('page_row_actions', function ($actions, $post) {
    if (cc_page_kind($post) === 'category' && current_user_can('edit_pages')) {
        $url = wp_nonce_url(admin_url('admin.php?action=cc_duplicate_page&post=' . $post->ID), 'cc_duplicate_' . $post->ID);
        $actions['cc_duplicate'] = '<a href="' . esc_url($url) . '">Duplicate</a>';
    }
    return $actions;
}, 10, 2);

// Copies a category page (parent, template and page content) into a new draft.
add_action('admin_action_cc_duplicate_page', function () {
    $source_id = absint($_GET['post'] ?? 0);
    check_admin_referer('cc_duplicate_' . $source_id);
    $source = get_post($source_id);
    if (!$source || !current_user_can('edit_pages') || cc_page_kind($source) !== 'category') wp_die('This page cannot be duplicated.');

    $new_id = wp_insert_post([
        'post_type'     => 'page',
        'post_status'   => 'draft',
        'post_title'    => $source->post_title . ' (copy)',
        'post_parent'   => $source->post_parent,
        'menu_order'    => $source->menu_order,
        'page_template' => CC_CATEGORY_TEMPLATE,
    ], true);
    if (is_wp_error($new_id)) wp_die($new_id);

    // Page-specific titles are cleared so they follow the new page's title until edited.
    $data = cc_page_data($source_id);
    $data['banner']['title'] = '';
    $data['breadcrumb']['current'] = '';
    $data['faq']['title'] = '';
    $data['seo'] = ['title' => '', 'description' => '', 'og_title' => '', 'og_description' => '', 'schema_about' => ''];
    update_post_meta($new_id, '_cc_content', wp_slash($data));
    wp_safe_redirect(admin_url('post.php?action=edit&post=' . $new_id));
    exit;
});
