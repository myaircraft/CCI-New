<?php
/**
 * Form builder shared by the Site Content screen and the Page content box.
 *
 * A form is generated from a value's shape: strings become inputs, associative arrays become field
 * groups, lists become repeaters (add / remove / reorder, one sample item as the template), and
 * image fields get a Media Library picker. Posted data is rebuilt against the same shape.
 */

if (!defined('ABSPATH')) exit;

function cc_is_list($value) {
    return is_array($value) && array_keys($value) === range(0, count($value) - 1);
}

/** Same structure with every string emptied; lists keep one item as the template for new rows. */
function cc_blank_shape($value) {
    if (!is_array($value)) return '';
    if (cc_is_list($value)) return [cc_blank_shape($value[0] ?? '')];
    return array_map('cc_blank_shape', $value);
}

function cc_is_empty_value($value) {
    if (is_array($value)) {
        foreach ($value as $v) if (!cc_is_empty_value($v)) return false;
        return true;
    }
    return trim((string) $value) === '';
}

/** Rebuilds a posted value against its shape: re-indexes lists, drops blank rows, keeps every field. */
function cc_sanitize_value($posted, $shape) {
    if (is_array($shape)) {
        if (cc_is_list($shape)) {
            $out = [];
            foreach (is_array($posted) ? $posted : [] as $item) {
                $value = cc_sanitize_value($item, $shape[0]);
                if (!cc_is_empty_value($value)) $out[] = $value;
            }
            return $out;
        }
        $out = [];
        foreach ($shape as $field => $field_shape) {
            $out[$field] = cc_sanitize_value(is_array($posted) ? ($posted[$field] ?? null) : null, $field_shape);
        }
        return $out;
    }
    // Values are escaped when rendered, so text is stored as entered.
    return is_scalar($posted) ? trim(str_replace("\r\n", "\n", (string) $posted)) : '';
}

/** Editor-facing label for a field or section name. */
function cc_label($name) {
    $labels = [
        'seo' => 'SEO (search engines)', 'og_title' => 'Social share title', 'og_description' => 'Social share description',
        'schema_about' => 'Topic for search engines', 'banner' => 'Banner', 'kicker' => 'Small label above the title',
        'eyebrow' => 'Small label above the title', 'lead' => 'Banner text', 'quote_label' => 'Quote button text',
        'call_label' => 'Call button text (the phone number is added after it)', 'explore_label' => 'Category button text',
        'image_alt' => 'Image description (alt text)', 'topic' => 'Section label', 'card_link_label' => 'Card link text',
        'button_label' => 'Button text', 'breadcrumb' => 'Breadcrumb', 'home' => 'Home link text', 'parent' => 'Parent link text',
        'parent_link' => 'Parent link', 'current' => 'Current page text (empty = page title)', 'overview' => 'Introduction',
        'paragraphs' => 'Paragraphs', 'equipment' => 'Equipment cards', 'problems' => 'Problems we solve', 'applications' => 'Applications', 'blocks' => 'Content blocks', 'lineup' => 'Full lineup list', 'layout' => 'Layout (text, cards, rows, people, points or contact)', 'lines' => 'Lines', 'meta' => 'Role or subtitle', 'page_type' => 'Schema page type (empty = WebPage)', 'process' => 'How it works', 'trust' => 'Why us (trust)', 'inquiry' => 'Quote checklist',
        'checklist_title' => 'Checklist heading', 'faq' => 'FAQs', 'related' => 'Related links', 'links' => 'Links',
        'hero' => 'Hero slideshow', 'markets' => 'Markets strip', 'difference' => 'Why us', 'contracting' => 'Government & contracting',
        'credentials' => 'Credentials', 'points' => 'Points', 'hero_line' => 'Slideshow line', 'contracts_label' => 'Contracts button text',
        'certifications_label' => 'Certifications button text', 'cta_title' => 'Heading', 'cta_text' => 'Text',
        'cta_image' => 'Background image', 'cta_image_alt' => 'Background image description (alt text)',
        'cta_primary_label' => 'First button text', 'cta_secondary_label' => 'Second button text',
    ];
    return $labels[$name] ?? ucfirst(str_replace(['_', '-', '.'], ' ', (string) $name));
}

function cc_is_image_field($field) {
    return (bool) preg_match('/(^|_)(image|logo|favicon)$/', (string) $field);
}

/** $key is the row key or "<page kind>.<section>"; $field is the last name segment. */
function cc_field_help($field, $key) {
    $help = [
        'link'        => 'link:contact (any Site Content link), product:Product name, service:Service name, /page-on-this-site/ or a full URL.',
        'parent_link' => 'link:products, product:Product name, /page-on-this-site/ or a full URL.',
        'icon'        => 'One of: zap, circuit-board, shield-check (equipment); facebook, instagram, linkedin, youtube, x-logo (social).',
        'tab'         => 'Tab anchor on the company products/services page (used when there is no path).',
        'path'        => 'Optional page on this site, e.g. /products/power-distribution-transformers/',
        'id'          => 'Unique ID: lowercase letters, numbers and dashes.',
    ];
    $html_fields = ['home.hero.title', 'home.markets.label', 'footer.cta_title'];
    if (in_array($key, $html_fields, true) || in_array("{$key}.{$field}", $html_fields, true)) return 'Use <br> for a line break; <span> highlights text.';
    if ($key === 'footer.copyright') return '{year} is replaced with the current year.';
    return $help[$field] ?? '';
}

/** Renders one value. $name is the input name, $field the last key segment (drives image/help hints). */
function cc_render_field($name, $value, $shape, $field, $key) {
    static $token = 0;

    if (is_array($shape) && cc_is_list($shape)) {
        $item_token = '__i' . (++$token) . '__';
        echo '<div class="cc-list"><div class="cc-items">';
        foreach (cc_is_list($value) ? $value : [] as $i => $item) cc_render_item("{$name}[{$i}]", $item, $shape[0], $field, $key);
        echo '</div><template data-token="' . esc_attr($item_token) . '">';
        cc_render_item("{$name}[{$item_token}]", cc_blank_shape($shape[0]), $shape[0], $field, $key);
        echo '</template><button type="button" class="button" data-cc-add>+ Add item</button></div>';
        return;
    }

    if (is_array($shape)) {
        echo '<div class="cc-group">';
        foreach ($shape as $sub => $sub_shape) {
            $sub_value = is_array($value) && array_key_exists($sub, $value) ? $value[$sub] : cc_blank_shape($sub_shape);
            echo '<div class="cc-field"><label class="cc-label">' . esc_html(cc_label($sub)) . '</label>';
            cc_render_field("{$name}[{$sub}]", $sub_value, $sub_shape, $sub, $key);
            echo '</div>';
        }
        echo '</div>';
        return;
    }

    $value = is_scalar($value) ? (string) $value : '';
    if (cc_is_image_field($field)) {
        echo '<div class="cc-image">';
        echo '<img class="cc-preview" src="' . esc_url($value !== '' ? cc_img($value) : '') . '" alt=""' . ($value === '' ? ' hidden' : '') . '>';
        echo '<input type="text" class="regular-text" name="' . esc_attr($name) . '" value="' . esc_attr($value) . '">';
        echo ' <button type="button" class="button" data-cc-media>Choose image</button>';
        echo '</div>';
    } elseif (strlen($value) > 90 || strpos($value, "\n") !== false || in_array($field, ['description', 'answer', 'lead', 'text', 'paragraphs'], true)) {
        echo '<textarea class="large-text" rows="3" name="' . esc_attr($name) . '">' . esc_textarea($value) . '</textarea>';
    } else {
        echo '<input type="text" class="large-text" name="' . esc_attr($name) . '" value="' . esc_attr($value) . '">';
    }
    $help = cc_field_help($field, $key);
    if ($help) echo '<p class="description">' . esc_html($help) . '</p>';
}

function cc_render_item($name, $value, $shape, $field, $key) {
    echo '<div class="cc-item"><div class="cc-item-tools">';
    echo '<button type="button" class="button-link" data-cc-up aria-label="Move up">↑</button>';
    echo '<button type="button" class="button-link" data-cc-down aria-label="Move down">↓</button>';
    echo '<button type="button" class="button-link button-link-delete" data-cc-remove>Remove</button>';
    echo '</div>';
    cc_render_field($name, $value, $shape, $field, $key);
    echo '</div>';
}

function cc_enqueue_field_assets() {
    $dir = get_template_directory();
    $uri = get_template_directory_uri();
    wp_enqueue_media();
    wp_enqueue_style('cc-admin-content', $uri . '/assets/css/admin-content.css', [], filemtime($dir . '/assets/css/admin-content.css'));
    wp_enqueue_script('cc-admin-content', $uri . '/assets/js/admin-content.js', [], filemtime($dir . '/assets/js/admin-content.js'), true);
}
