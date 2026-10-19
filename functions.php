<?php
if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/inc/content.php';
require_once __DIR__ . '/inc/data.php';
require_once __DIR__ . '/inc/helpers.php';
require_once __DIR__ . '/inc/pages.php';
require_once __DIR__ . '/inc/category-page.php';
require_once __DIR__ . '/inc/pages-data.php';
require_once __DIR__ . '/inc/contact.php';
if (is_admin()) {
    require_once __DIR__ . '/inc/admin-fields.php';
    require_once __DIR__ . '/inc/admin-content.php';
    require_once __DIR__ . '/inc/admin-pages.php';
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
    $ver = wp_get_theme()->get('Version');
    $dir = get_template_directory();
    wp_enqueue_style('cc-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&family=Roboto:wght@400;500;700&display=swap', [], null);
    wp_enqueue_style('cc-app', get_template_directory_uri() . '/assets/css/app.css', [], $ver . '.' . filemtime($dir . '/assets/css/app.css'));
    wp_enqueue_style('cc-theme', get_stylesheet_uri(), ['cc-app'], $ver . '.' . filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_script('cc-site', get_template_directory_uri() . '/assets/js/site.js', [], $ver . '.' . filemtime($dir . '/assets/js/site.js'), ['in_footer' => true, 'strategy' => 'defer']);

    // The designed templates render no block content, so drop core block styles that would alter them.
    // Pages and posts created in the editor keep the styles their blocks need.
    if (is_front_page() || cc_is_category_page()) {
        foreach (['wp-block-library', 'wp-block-library-theme', 'classic-theme-styles', 'global-styles'] as $handle) {
            wp_dequeue_style($handle);
        }
    }
}, 20);

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
add_filter('show_recent_comments_widget_style', '__return_false');

/** Page metadata from the page's own SEO fields, falling back to its title and the Site Content SEO fallback. */
function cc_page_meta() {
    $m = cc_page_meta_raw();
    foreach ($m as $k => $v) if (is_string($v) && $k !== 'url' && $k !== 'image') $m[$k] = html_entity_decode(html_entity_decode($v, ENT_QUOTES), ENT_QUOTES);
    if (!empty($m['url'])) $m['url'] = cc_public_url($m['url']);
    return $m;
}

/** Address on the live domain for canonical and share tags, so the staging host never competes with the real site. */
function cc_public_url($url) {
    $base = rtrim((string) get_option('cc_canonical_base', 'https://competitivechoice.net'), '/');
    return $base === '' ? $url : $base . (string) wp_parse_url($url, PHP_URL_PATH);
}
add_filter('get_canonical_url', function ($url) { return $url ? cc_public_url($url) : $url; });

function cc_page_meta_raw() {
    if (is_front_page()) {
        return [
            'title'       => cc_page('seo.title'),
            'description' => cc_page('seo.description'),
            'og_title'    => cc_page('seo.og_title'),
            'og_desc'     => cc_page('seo.og_description'),
        ];
    }
    $site_title = cc_content('seo.default.title');
    $page_title = is_singular() ? get_the_title() . ' | ' . cc_content('company.name') : $site_title;
    if (cc_is_category_page()) {
        $t = cc_page('seo.title') ?: $page_title;
        $d = cc_page('seo.description') ?: (cc_page('banner.lead') ?: cc_content('seo.default.description'));
        $img = cc_page('banner.image');
        return ['title' => $t, 'description' => $d, 'og_title' => cc_page('seo.og_title') ?: $t, 'og_desc' => cc_page('seo.og_description') ?: $d, 'url' => get_permalink(get_queried_object_id()), 'twitter' => true, 'image' => $img ? cc_img($img) : '', 'image_alt' => cc_page('banner.title') ?: get_the_title()];
    }
    return [
        'title'       => is_404() ? $site_title : $page_title,
        'description' => cc_content('seo.default.description'),
    ];
}

add_filter('pre_get_document_title', function () {
    return cc_page_meta()['title'];
});

add_action('wp_head', function () {
    $m = cc_page_meta();
    echo '<meta name="description" content="' . esc_attr($m['description']) . '">' . "\n";
    echo '<meta name="author" content="' . esc_attr(cc_content('company.legal_name')) . '">' . "\n";
    if (!empty($m['og_title'])) echo '<meta property="og:title" content="' . esc_attr($m['og_title']) . '">' . "\n";
    if (!empty($m['og_desc'])) echo '<meta property="og:description" content="' . esc_attr($m['og_desc']) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(cc_content('company.name')) . '">' . "\n";
    echo '<meta property="og:locale" content="en_US">' . "\n";
    if (!empty($m['image'])) {
        echo '<meta property="og:image" content="' . esc_url($m['image']) . '">' . "\n";
        echo '<meta property="og:image:alt" content="' . esc_attr($m['image_alt'] ?? '') . '">' . "\n";
    }
    $og_url = !empty($m['url']) ? $m['url'] : cc_public_url(home_url(add_query_arg([])));
    echo '<meta property="og:url" content="' . esc_url($og_url) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    if (!empty($m['twitter'])) {
        echo '<meta name="twitter:title" content="' . esc_attr($m['og_title']) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($m['og_desc']) . '">' . "\n";
        if (!empty($m['image'])) echo '<meta name="twitter:image" content="' . esc_url($m['image']) . '">' . "\n";
    }
    echo '<link rel="icon" href="' . esc_url(cc_img(cc_content('assets.favicon'))) . '" type="image/png">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    if (cc_is_category_page()) cc_category_schema();
}, 1);

// The supplies pages live under /supplies/; earlier addresses (/products/ and /products-and-materials/) redirect permanently.
add_action('template_redirect', function () {
    $path = trim((string) wp_parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $retired = ['water-wastewater-treatment' => 'drain-wastewater-maintenance', 'specialty-maintenance-chemicals' => 'equipment-maintenance', 'facility-maintenance-mro-tools' => 'equipment-maintenance'];
    foreach (['products-and-materials', 'products'] as $old) {
        if ($path !== $old && strpos($path, $old . '/') !== 0) continue;
        $rest = trim(substr($path, strlen($old)), '/');
        if (isset($retired[$rest])) $rest = $retired[$rest];
        wp_safe_redirect(home_url('/supplies/' . ($rest !== '' ? $rest . '/' : '')), 301);
        exit;
    }
});

/** Creates the pages and reading/permalink settings the theme expects. Safe to run repeatedly. */
function cc_setup_site() {
    $ensure = function ($slug, $title, $parent = 0) {
        $existing = get_page_by_path($parent ? get_post_field('post_name', $parent) . '/' . $slug : $slug);
        if ($existing) return $existing->ID;
        return wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => $title, 'post_name' => $slug, 'post_parent' => $parent]);
    };
    $home = $ensure('home', 'Home');
    $products = $ensure('products', 'Products');
    $power = $ensure('power-distribution-transformers', 'Power Distribution & Transformers', $products);
    update_post_meta($power, '_wp_page_template', CC_CATEGORY_TEMPLATE);

    update_option('show_on_front', 'page');
    update_option('page_on_front', $home);
    update_option('blogname', 'Competitive Choice');
    update_option('blogdescription', 'The company that performs. Since 2003.');
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    flush_rewrite_rules();
}
// Runs before cc_content_install (priority 10) so the pages exist when their content is set up.
add_action('after_switch_theme', 'cc_setup_site', 5);

/**
 * Accessibility safety net: any image that reaches the page without alt text gets one from its context,
 * the heading that follows it inside the same card, else the closest heading above it, else the page title.
 */
function cc_fill_alt_text($html) {
    if (stripos($html, '<img') === false) return $html;
    $heading = function ($chunk) {
        if (preg_match('#<h[1-4][^>]*>(.*?)</h[1-4]>#is', $chunk, $m)) {
            $t = trim(html_entity_decode(wp_strip_all_tags(preg_replace('#<span class="category-faq-number".*?</span>#is', '', $m[1])), ENT_QUOTES));
            return preg_replace('/\s+/', ' ', $t);
        }
        return '';
    };
    $page = trim(wp_strip_all_tags(wp_get_document_title()));
    $out = ''; $pos = 0;
    if (!preg_match_all('#<img\b[^>]*>#i', $html, $all, PREG_OFFSET_CAPTURE)) return $html;
    foreach ($all[0] as [$tag, $offset]) {
        $fixed = $tag;
        $has = preg_match('#\salt=(["\'])(.*?)\1#is', $tag, $m);
        if (!$has || trim($m[2]) === '') {
            if (strpos($tag, 'aria-hidden') === false) {
                $after = substr($html, $offset + strlen($tag), 700);
                $next_img = stripos($after, '<img');
                if ($next_img !== false) $after = substr($after, 0, $next_img);
                $alt = $heading($after);
                if ($alt === '') {
                    $before = substr($html, max(0, $offset - 1800), min($offset, 1800));
                    preg_match_all('#<h[1-4][^>]*>.*?</h[1-4]>#is', $before, $hs);
                    $alt = $hs[0] ? $heading(end($hs[0])) : '';
                }
                if ($alt === '') $alt = $page;
                $attr = ' alt="' . esc_attr($alt) . '"';
                $fixed = $has ? preg_replace('#\salt=(["\']).*?\1#is', $attr, $tag, 1) : preg_replace('#<img\b#i', '<img' . $attr, $tag, 1);
            }
        }
        $out .= substr($html, $pos, $offset - $pos) . $fixed;
        $pos = $offset + strlen($tag);
    }
    return $out . substr($html, $pos);
}
add_action('template_redirect', function () {
    if (!is_admin() && !wp_doing_ajax()) ob_start('cc_fill_alt_text');
}, 0);
