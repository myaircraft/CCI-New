<?php
/**
 * Structured data for Category Page template pages. The visible FAQ and the FAQPage schema are
 * both generated from the page's faq.items so they always stay identical.
 */

if (!defined('ABSPATH')) exit;

function cc_is_category_page() {
    return is_page() && cc_page_kind(get_queried_object_id()) === 'category';
}

function cc_category_schema() {
    $meta = cc_page_meta();
    $url = $meta['url'];
    $graph = [
        ['@type' => 'CollectionPage', '@id' => $url . '#webpage', 'url' => $url, 'name' => $meta['title'], 'description' => $meta['description'], 'inLanguage' => 'en-US', 'about' => ['@type' => 'Thing', 'name' => cc_page('seo.schema_about') ?: get_the_title()], 'publisher' => ['@type' => 'Organization', 'name' => cc_content('company.name'), 'url' => cc_content('company.website')]],
        ['@type' => 'BreadcrumbList', 'itemListElement' => array_values(array_filter([
            ['@type' => 'ListItem', 'position' => 1, 'name' => cc_page('breadcrumb.home'), 'item' => home_url('/')],
            cc_page('breadcrumb.parent') ? ['@type' => 'ListItem', 'position' => 2, 'name' => cc_page('breadcrumb.parent'), 'item' => cc_link(cc_page('breadcrumb.parent_link'))] : null,
            ['@type' => 'ListItem', 'position' => cc_page('breadcrumb.parent') ? 3 : 2, 'name' => cc_page('breadcrumb.current') ?: get_the_title(), 'item' => $url],
        ]))],
    ];
    $faqs = cc_page_list('faq.items');
    if ($faqs) {
        $graph[] = ['@type' => 'FAQPage', '@id' => $url . '#faq', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f['question'] ?? '', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['answer'] ?? '']], $faqs)];
    }
    echo '<link rel="canonical" href="' . esc_url($url) . '">' . "\n";
    echo '<script type="application/ld+json">' . wp_json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}

// WordPress prints its own canonical tag for pages; the schema hook above outputs the same URL.
add_action('wp', function () {
    if (cc_is_category_page()) remove_action('wp_head', 'rel_canonical');
});
