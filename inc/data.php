<?php
/**
 * Accessors for the catalog, navigation and link destinations stored in the cc_content table.
 */

if (!defined('ABSPATH')) exit;

function cc_products() {
    return cc_list('products');
}

function cc_services() {
    return cc_list('services');
}

function cc_industries() {
    return cc_list('industries');
}

function cc_navigation() {
    return cc_list('navigation');
}

function cc_social_links() {
    return cc_list('social');
}

/** A destination from the links.* rows, e.g. cc_url('contact'). */
function cc_url($name) {
    $value = (string) cc_content('links.' . $name);
    return strpos($value, '/') === 0 ? home_url($value) : $value;
}

/** Product or service destination: a local page when the entry has a path, otherwise its tab on the company site. */
function cc_category_destination($name, $kind) {
    $entries = $kind === 'product' ? cc_products() : cc_services();
    $base = cc_url($kind === 'product' ? 'products' : 'services');
    foreach ($entries as $entry) {
        if (($entry['name'] ?? '') !== $name) continue;
        if (!empty($entry['path'])) return home_url($entry['path']);
        if (!empty($entry['tab'])) return $base . '#fusion-tab-' . $entry['tab'];
    }
    return $base;
}

/** Resolves a "link" field from the database. See inc/content-seed.php for the formats. */
function cc_link($ref) {
    $ref = (string) $ref;
    if (strpos($ref, 'link:') === 0) return cc_url(substr($ref, 5));
    if (strpos($ref, 'product:') === 0) return cc_category_destination(substr($ref, 8), 'product');
    if (strpos($ref, 'service:') === 0) return cc_category_destination(substr($ref, 8), 'service');
    if (strpos($ref, '/') === 0) return home_url($ref);
    return $ref;
}
