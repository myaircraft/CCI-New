<?php
/**
 * Structured data for Category Page template pages. The visible FAQ and the FAQPage schema are
 * both generated from the page's faq.items so they always stay identical.
 */

if (!defined('ABSPATH')) exit;

function cc_is_category_page() {
    return is_page() && cc_page_kind(get_queried_object_id()) === 'category';
}

/** Organization and WebSite nodes shared by the page's structured data. */
function cc_site_schema_nodes() {
    $site = rtrim(cc_content('company.website'), '/') . '/';
    $same_as = array_values(array_filter(array_map(fn($s) => $s['url'] ?? '', cc_list('social'))));
    $org = [
        '@type'        => 'Organization',
        '@id'          => $site . '#organization',
        'name'         => cc_content('company.name'),
        'legalName'    => cc_content('company.legal_name'),
        'url'          => $site,
        'logo'         => ['@type' => 'ImageObject', 'url' => cc_img(cc_content('assets.logo'))],
        'foundingDate' => '2003',
        'slogan'       => cc_content('company.tagline'),
        'email'        => cc_content('company.email'),
        'telephone'    => '+1-713-838-1144',
        'address'      => ['@type' => 'PostalAddress', 'streetAddress' => cc_content('company.address_line1'), 'addressLocality' => 'Houston', 'addressRegion' => 'TX', 'postalCode' => '77054', 'addressCountry' => 'US'],
        'contactPoint' => [['@type' => 'ContactPoint', 'contactType' => 'sales', 'telephone' => '+1-713-838-1144', 'email' => cc_content('company.email'), 'areaServed' => 'US', 'availableLanguage' => 'English']],
    ];
    if ($same_as) $org['sameAs'] = $same_as;
    $website = ['@type' => 'WebSite', '@id' => home_url('/#website'), 'url' => home_url('/'), 'name' => cc_content('company.name'), 'inLanguage' => 'en-US', 'publisher' => ['@id' => $site . '#organization']];
    return [$org, $website, $site . '#organization'];
}

function cc_category_schema() {
    $meta = cc_page_meta();
    $url = $meta['url'];
    [$org, $website, $org_id] = cc_site_schema_nodes();
    $about = cc_page('seo.schema_about') ?: get_the_title();
    $page = [
        '@type' => 'CollectionPage', '@id' => $url . '#webpage', 'url' => $url, 'name' => $meta['title'], 'description' => $meta['description'], 'inLanguage' => 'en-US',
        'isPartOf' => ['@id' => $website['@id']], 'about' => ['@type' => 'Thing', 'name' => $about], 'publisher' => ['@id' => $org_id],
        'breadcrumb' => ['@id' => $url . '#breadcrumb'],
        'datePublished' => get_the_date('c', get_queried_object_id()), 'dateModified' => get_the_modified_date('c', get_queried_object_id()),
    ];
    if (!empty($meta['image'])) {
        $page['primaryImageOfPage'] = ['@type' => 'ImageObject', 'url' => $meta['image'], 'caption' => $meta['image_alt'] ?? ''];
        $page['image'] = $meta['image'];
    }
    $graph = [
        $org, $website, $page,
        ['@type' => 'BreadcrumbList', '@id' => $url . '#breadcrumb', 'itemListElement' => array_values(array_filter([
            ['@type' => 'ListItem', 'position' => 1, 'name' => cc_page('breadcrumb.home'), 'item' => home_url('/')],
            cc_page('breadcrumb.parent') ? ['@type' => 'ListItem', 'position' => 2, 'name' => cc_page('breadcrumb.parent'), 'item' => cc_link(cc_page('breadcrumb.parent_link'))] : null,
            ['@type' => 'ListItem', 'position' => cc_page('breadcrumb.parent') ? 3 : 2, 'name' => cc_page('breadcrumb.current') ?: get_the_title(), 'item' => $url],
        ]))],
    ];
    $equipment = cc_page_list('equipment.items');
    if ($equipment) {
        $graph[] = ['@type' => 'ItemList', '@id' => $url . '#equipment', 'name' => cc_page('equipment.title'), 'itemListElement' => array_map(fn($e, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $e['title'] ?? '', 'description' => $e['description'] ?? ''], $equipment, array_keys($equipment))];
        $graph[2]['mainEntity'] = ['@id' => $url . '#equipment'];
    }
    $faqs = cc_page_list('faq.items');
    if ($faqs) {
        $graph[] = ['@type' => 'FAQPage', '@id' => $url . '#faq', 'isPartOf' => ['@id' => $url . '#webpage'], 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f['question'] ?? '', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['answer'] ?? '']], $faqs)];
    }
    echo '<link rel="canonical" href="' . esc_url($url) . '">' . "\n";
    echo '<script type="application/ld+json">' . wp_json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}

// WordPress prints its own canonical tag for pages; the schema hook above outputs the same URL.
add_action('wp', function () {
    if (cc_is_category_page()) remove_action('wp_head', 'rel_canonical');
});
