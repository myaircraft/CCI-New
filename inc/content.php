<?php
/**
 * Database-backed site content.
 *
 * Content shared by every page (company details, links, header, navigation, footer, product lists)
 * lives in the {prefix}cc_content table, one row per key. Plain values use value_type "text"; lists
 * and structured values use "json". It is edited in wp-admin under "Site Content"
 * (inc/admin-content.php). Each page's own content is in its post meta (inc/pages.php).
 */

if (!defined('ABSPATH')) exit;

// 2: homepage and Power Distribution content moved from this table to each page's post meta.
const CC_CONTENT_VERSION = '2';

function cc_content_table() {
    global $wpdb;
    return $wpdb->prefix . 'cc_content';
}

/**
 * Creates the table and inserts any missing keys from inc/content-seed.php.
 * Existing rows are never overwritten, so database edits always win over the seed.
 */
function cc_content_install() {
    global $wpdb;
    $table = cc_content_table();
    $wpdb->query("CREATE TABLE IF NOT EXISTS {$table} (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        content_key varchar(191) NOT NULL,
        content_value longtext NOT NULL,
        value_type varchar(10) NOT NULL DEFAULT 'text',
        updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY content_key (content_key)
    ) {$wpdb->get_charset_collate()}");

    foreach (require __DIR__ . '/content-seed.php' as $key => $value) {
        $is_json = is_array($value);
        $stored = $is_json ? wp_json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) : $value;
        $wpdb->query($wpdb->prepare(
            "INSERT IGNORE INTO {$table} (content_key, content_value, value_type) VALUES (%s, %s, %s)",
            $key, $stored, $is_json ? 'json' : 'text'
        ));
    }
    cc_migrate_page_content();
    update_option('cc_content_version', CC_CONTENT_VERSION);
}
add_action('after_switch_theme', 'cc_content_install');
add_action('init', function () {
    if (get_option('cc_content_version') !== CC_CONTENT_VERSION) cc_content_install();
}, 1);

/** Inserts or updates one row; arrays are stored as JSON. */
function cc_content_save($key, $value) {
    global $wpdb;
    $is_json = is_array($value);
    $stored = $is_json ? wp_json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) : (string) $value;
    $wpdb->query($wpdb->prepare(
        'INSERT INTO ' . cc_content_table() . ' (content_key, content_value, value_type) VALUES (%s, %s, %s)
         ON DUPLICATE KEY UPDATE content_value = VALUES(content_value), value_type = VALUES(value_type)',
        $key, $stored, $is_json ? 'json' : 'text'
    ));
}

/** All content rows, loaded with a single query per request. */
function cc_content_all() {
    static $rows = null;
    if ($rows !== null) return $rows;

    global $wpdb;
    $rows = [];
    $results = $wpdb->get_results('SELECT content_key, content_value, value_type FROM ' . cc_content_table(), ARRAY_A);
    foreach ((array) $results as $row) {
        if ($row['value_type'] !== 'json') {
            $rows[$row['content_key']] = $row['content_value'];
            continue;
        }
        $decoded = json_decode($row['content_value'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log('cc_content: invalid JSON in key "' . $row['content_key'] . '": ' . json_last_error_msg());
            continue;
        }
        $rows[$row['content_key']] = $decoded;
    }
    return $rows;
}

function cc_content($key, $default = '') {
    $all = cc_content_all();
    return $all[$key] ?? $default;
}

/** A JSON list value; always an array so templates can loop safely. */
function cc_list($key) {
    $value = cc_content($key, []);
    return is_array($value) ? $value : [];
}

/** Echoes a text value, escaped. */
function cc_e($key) {
    echo esc_html(cc_content($key));
}

/** A value that may contain line breaks or spans, e.g. headings split over two lines. */
function cc_html($value) {
    return wp_kses($value, ['br' => [], 'span' => ['class' => []], 'strong' => [], 'em' => []]);
}
