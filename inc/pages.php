<?php
/**
 * Per-page content. Each designed page stores its content as an array in its own "_cc_content"
 * post meta, edited in the "Page content" box on the page's edit screen (inc/admin-pages.php).
 *
 * Page kinds: "home" (the front page) and "category" (pages using the Category Page template).
 */

if (!defined('ABSPATH')) exit;

const CC_CATEGORY_TEMPLATE = 'template-category.php';

function cc_page_kind($post) {
    $post = get_post($post);
    if (!$post || $post->post_type !== 'page') return null;
    if ((int) get_option('page_on_front') === $post->ID) return 'home';
    if (get_page_template_slug($post) === CC_CATEGORY_TEMPLATE) return 'category';
    return null;
}

function cc_page_seed() {
    static $seed = null;
    if ($seed === null) $seed = require __DIR__ . '/page-seed.php';
    return $seed;
}

/** Starting content for a page with nothing saved: its seed by slug, otherwise generic labels for the kind. */
function cc_page_defaults($kind, $slug = '') {
    $seed = cc_page_seed();
    if ($kind === 'home') return $seed['home'];
    if ($kind !== 'category') return [];
    if ($slug !== '' && $slug !== 'home' && isset($seed[$slug])) return $seed[$slug];
    return [
        'banner'     => ['kicker' => 'PRODUCTS & SUPPLIES', 'quote_label' => 'REQUEST A PROJECT QUOTE', 'call_label' => 'CALL'],
        'breadcrumb' => ['home' => 'Home', 'parent' => 'Products & Supplies', 'parent_link' => 'link:products'],
        'inquiry'    => ['checklist_title' => 'Details to include with your inquiry', 'button_label' => 'DISCUSS YOUR REQUIREMENT'],
        'faq'        => ['description' => 'Answers to common equipment selection, specification and sourcing questions.'],
        'related'    => ['title' => 'Related supply requirements', 'links' => [['label' => 'All Products & Supplies', 'link' => 'link:products']]],
    ];
}

function cc_page_data($post_id = 0) {
    static $cache = [];
    $post_id = $post_id ?: get_queried_object_id();
    if (!isset($cache[$post_id])) {
        $saved = get_post_meta($post_id, '_cc_content', true);
        $post = get_post($post_id);
        $cache[$post_id] = is_array($saved) && $saved ? $saved : cc_page_defaults(cc_page_kind($post), $post ? $post->post_name : '');
    }
    return $cache[$post_id];
}

/** A value of the current page by dotted path, e.g. cc_page('banner.title'). */
function cc_page($path, $default = '') {
    $value = cc_page_data();
    foreach (explode('.', $path) as $segment) {
        if (!is_array($value) || !array_key_exists($segment, $value)) return $default;
        $value = $value[$segment];
    }
    return $value;
}

function cc_page_list($path) {
    $value = cc_page($path, []);
    return is_array($value) ? $value : [];
}

function cc_page_e($path) {
    echo esc_html(cc_page($path));
}

/** True when a section has anything to show, so empty sections are skipped on new pages. */
function cc_page_has($path) {
    $value = cc_page($path, []);
    if (!is_array($value)) return trim((string) $value) !== '';
    foreach ($value as $v) {
        if (is_array($v) ? $v : trim((string) $v) !== '') return true;
    }
    return false;
}

/**
 * One-time move of homepage and Power Distribution content from the cc_content table (where the
 * previous version kept it) into each page's own post meta. Values edited there are kept.
 */
function cc_migrate_page_content() {
    global $wpdb;
    $targets = [(int) get_option('page_on_front') => ['home.' => '', 'seo.home.' => 'seo.']];
    $power = get_page_by_path('products/power-distribution-transformers');
    if ($power) {
        update_post_meta($power->ID, '_wp_page_template', CC_CATEGORY_TEMPLATE);
        $targets[$power->ID] = ['power.' => '', 'seo.power.' => 'seo.'];
    }

    $rows = cc_content_all();
    foreach ($targets as $post_id => $prefixes) {
        if (!$post_id || get_post_meta($post_id, '_cc_content', true)) continue;
        $data = cc_page_defaults(cc_page_kind($post_id), get_post_field('post_name', $post_id));
        foreach ($rows as $key => $value) {
            foreach ($prefixes as $from => $to) {
                if (strpos($key, $from) !== 0) continue;
                $ref = &$data;
                foreach (explode('.', $to . substr($key, strlen($from))) as $segment) $ref = &$ref[$segment];
                $ref = $value;
                unset($ref);
            }
        }
        update_post_meta($post_id, '_cc_content', wp_slash($data));
    }

    $wpdb->query('DELETE FROM ' . cc_content_table() . " WHERE content_key LIKE 'home.%' OR content_key LIKE 'power.%' OR content_key LIKE 'seo.home.%' OR content_key LIKE 'seo.power.%'");
}
