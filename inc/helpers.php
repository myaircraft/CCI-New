<?php
/**
 * Markup helpers reproducing the original Button component classes and Lucide icons.
 */

if (!defined('ABSPATH')) exit;

/**
 * Image URL for a value stored in the database: a full URL is used as is, a path containing "/"
 * is relative to the site root (e.g. wp-content/uploads/...), and a bare file name is a theme image.
 */
function cc_img($file) {
    if (preg_match('#^https?://#i', $file)) return $file;
    if (strpos($file, '/') !== false) return home_url('/' . ltrim($file, '/'));
    return get_template_directory_uri() . '/assets/images/' . $file;
}

/** Escaped heading text where {{words}} are marked with a yellow underline. */
function cc_hl($text) {
    return preg_replace('/\{\{(.+?)\}\}/', '<span class="hl">$1</span>', esc_html((string) $text));
}

/** Same class output as the original cva() button variants merged with tailwind-merge. */
function cc_btn($variant = 'default', $size = 'default', $extra = '') {
    $variants = [
        'default'     => 'bg-brand text-on-dark hover:bg-primary hover:text-foreground',
        'shop'        => 'bg-primary text-menu-ink hover:bg-brand hover:text-on-dark hover:font-black',
        'call'        => 'rounded-full bg-background text-brand border border-brand hover:bg-primary hover:text-foreground',
        'heroQuote'   => 'rounded-full bg-brand text-primary border-2 border-primary hover:bg-primary hover:text-brand hover:border-brand',
        'outline'     => 'border border-brand bg-brand text-on-dark hover:bg-primary hover:border-primary hover:text-foreground',
        'heroOutline' => 'border border-brand bg-brand text-on-dark hover:bg-primary hover:border-primary hover:text-foreground',
        'ghost'       => 'hover:bg-primary hover:text-foreground',
    ];
    $sizes = [
        'default' => 'min-h-14 px-7 py-3',
        'lg'      => 'min-h-16 px-8 py-4 text-lg',
        'icon'    => 'h-11 w-11',
    ];
    $base = 'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-none text-base font-bold cursor-pointer transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 disabled:cursor-not-allowed [&_svg]:pointer-events-none [&_svg]:size-5 [&_svg]:shrink-0';
    // Brand button roles (CSS in style.css decides the look from the role and from a dark or white background).
    $roles = ['default' => 'cc-b-primary', 'shop' => 'cc-b-primary', 'heroQuote' => 'cc-b-primary', 'outline' => 'cc-b-secondary', 'heroOutline' => 'cc-b-secondary', 'call' => 'cc-b-tertiary'];
    $role = isset($roles[$variant]) ? 'cc-b ' . $roles[$variant] : '';
    $rest = trim($variants[$variant] . ' ' . $sizes[$size] . ' ' . $role . ' ' . $extra);
    if (strpos(" $rest ", ' rounded-full ') !== false) $base = str_replace(' rounded-none', '', $base);
    if (strpos(" $rest ", ' text-lg ') !== false) $base = str_replace(' text-base', '', $base);
    return esc_attr($base . ' ' . $rest);
}

function cc_icon($name, $class = '') {
    $icons = [
        'menu'          => '<path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path>',
        'x'             => '<path d="M18 6 6 18"></path><path d="m6 6 12 12"></path>',
        'plus'          => '<path d="M5 12h14"></path><path d="M12 5v14"></path>',
        'minus'         => '<path d="M5 12h14"></path>',
        'mail'          => '<path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect>',
        'chevron-down'  => '<path d="m6 9 6 6 6-6"></path>',
        'chevron-right' => '<path d="m9 18 6-6-6-6"></path>',
        'shopping-cart' => '<circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>',
        'arrow-left'    => '<path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path>',
        'arrow-right'   => '<path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path>',
        'arrow-up-right'=> '<path d="M7 7h10v10"></path><path d="M7 17 17 7"></path>',
        'check'         => '<path d="M20 6 9 17l-5-5"></path>',
        'phone'         => '<path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>',
        'map-pin'       => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle>',
        'clock'         => '<circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path>',
        'facebook'      => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>',
        'instagram'     => '<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>',
        'linkedin'      => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle>',
        'youtube'       => '<path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path>',
        'zap'           => '<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>',
        'circuit-board' => '<rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M11 9h4a2 2 0 0 0 2-2V3"></path><circle cx="9" cy="9" r="2"></circle><path d="M7 21v-4a2 2 0 0 1 2-2h4"></path><circle cx="15" cy="15" r="2"></circle>',
        'shield-check'  => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path>',
    ];
    if ($name === 'x-logo') {
        return '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-5-7.6L5.3 22H2.2l8.2-9.4L.8 2h6.5l4.5 6.9L18.9 2Zm-1.1 18h1.7L6.3 3.9H4.5L17.8 20Z"></path></svg>';
    }
    if (!isset($icons[$name])) return '';
    $cls = trim('lucide lucide-' . $name . ' ' . $class);
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="' . esc_attr($cls) . '" aria-hidden="true">' . $icons[$name] . '</svg>';
}

/** Title Case for section headings: small joining words stay lower case, everything else gets a capital. */
function cc_tc($text) {
    $text = trim(preg_replace('/\s+/u', ' ', (string) $text));
    $text = preg_replace('/(?<!\.)\.$/u', '', $text);        // headings carry no closing period
    $text = preg_replace('/\s+and\s+/iu', ' & ', $text);     // headings use "&" throughout
    $minor = ['a', 'an', 'and', 'as', 'at', 'but', 'by', 'for', 'in', 'nor', 'of', 'on', 'or', 'per', 'the', 'to', 'up', 'via', 'vs'];
    if (!preg_match_all('/[\p{L}\p{N}][\p{L}\p{N}\'’]*/u', $text, $m, PREG_OFFSET_CAPTURE)) return $text;
    $words = $m[0];
    $last = count($words) - 1;
    $out = '';
    $pos = 0;
    foreach ($words as $i => [$word, $offset]) {
        $out .= substr($text, $pos, $offset - $pos);
        $pos = $offset + strlen($word);
        $isMinor = $i !== 0 && $i !== $last && in_array(strtolower($word), $minor, true);
        $prev = $offset > 0 ? $text[$offset - 1] : '';
        $afterHyphen = $prev === '-';
        $out .= ($isMinor && !$afterHyphen) ? $word : mb_strtoupper(mb_substr($word, 0, 1)) . mb_substr($word, 1);
    }
    return $out . substr($text, $pos);
}

/** Section intro block used across the homepage. */
function cc_section_title($title, $subtitle, $description = '') {
    echo '<div class="section-intro"><h2 class="section-topic">' . esc_html(cc_tc($title)) . '</h2><p class="section-heading">' . esc_html(cc_tc($subtitle)) . '</p>';
    if ($description) echo '<p class="section-description">' . esc_html($description) . '</p>';
    echo '</div>';
}

/** Wide shop CTA placed after "Related supply requirements" on every category page. */
function cc_shop_materials_cta() {
    echo '<div class="mt-12 flex w-full justify-center"><a href="' . esc_url(cc_url('shop')) . '" target="_blank" rel="noopener noreferrer" class="' . cc_btn('shop', 'lg', 'w-full max-w-2xl rounded-full uppercase tracking-wide') . '">' . cc_icon('shopping-cart') . esc_html(cc_content('category.shop_label')) . cc_icon('arrow-up-right') . '</a></div>';
}


/** Home page category cards built from a header menu's groups: image, group title and links to each sub page. */
function cc_home_groups($menu_id, $images = []) {
    $groups = [];
    foreach (cc_navigation() as $item) if (($item['id'] ?? '') === $menu_id) $groups = $item['groups'] ?? [];
    if (!$groups) return;
    echo '<div class="group-grid">';
    foreach ($groups as $i => $g) {
        echo '<article class="group-card">';
        if (!empty($images[$i])) echo '<div class="group-media"><img src="' . esc_url(cc_img($images[$i])) . '" alt="' . esc_attr($g['title']) . '" width="1200" height="800" loading="lazy" decoding="async"></div>';
        echo '<h3>' . esc_html($g['title']) . '</h3><ul class="group-links' . (count($g['items']) <= 3 ? ' is-single' : '') . '">';
        foreach ($g['items'] as $link) echo '<li><a href="' . esc_url(cc_link($link['link'])) . '"><span>' . esc_html($link['label']) . '</span>' . cc_icon('arrow-right') . '</a></li>';
        echo '</ul></article>';
    }
    echo '</div>';
}


/** Line icon for a menu link or menu column heading. Some icons come from the client's own icon set (PNG masks), the rest are inline SVG. */
function cc_menu_icon($label) {
    static $svg = null, $img = null;
    if ($svg === null) {
        $svg = [
            'droplet' => '<path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>',
            'sparkles' => '<path d="M9.9 14.1 8.5 18l-1.4-3.9L3 12.5l4.1-1.6L8.5 7l1.4 3.9 4.1 1.6z"/><path d="M19 3v4M17 5h4M19 15v4M17 17h4"/>',
            'flask' => '<path d="M10 2v7.5L4.5 19a2 2 0 0 0 1.7 3h11.6a2 2 0 0 0 1.7-3L14 9.5V2"/><path d="M8.5 2h7M7 16h10"/>',
            'bottle' => '<rect x="7" y="10" width="10" height="12" rx="1.5"/><path d="M10 10V7h4v3M14 7h4l-1-2h-3"/>',
            'truck' => '<path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.62l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/>',
            'layers' => '<path d="m12 2 10 5-10 5L2 7z"/><path d="m2 12 10 5 10-5"/><path d="m2 17 10 5 10-5"/>',
            'gear' => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3H9a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.8V9a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"/>',
            'wind' => '<path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/>',
            'thermo' => '<path d="M14 14.8V4a2 2 0 0 0-4 0v10.8a4 4 0 1 0 4 0z"/>',
            'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/>',
            'tree' => '<path d="M12 22v-6"/><path d="M12 16c-4 0-7-2.5-7-6 0-1.5.7-2.8 1.8-3.7C6.6 4.7 8.6 3 12 3s5.4 1.7 5.2 3.3C18.3 7.2 19 8.5 19 10c0 3.5-3 6-7 6z"/>',
            'waves' => '<path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>',
            'zap' => '<path d="M13 2 3 14h9l-1 8 10-12h-9z"/>',
            'plug' => '<path d="M9 2v6M15 2v6M6 8h12v4a6 6 0 0 1-12 0zM12 18v4"/>',
            'pipe' => '<path d="M3 7h10a4 4 0 0 1 4 4v10"/><rect x="2" y="5" width="3" height="4"/><rect x="15" y="19" width="4" height="3"/>',
            'flame' => '<path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.4-.5-2-1-3-1.1-2.1-.2-4.1 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.2.4-2.4 1-3 0 1.4 1 2.5 2.5 2.5z"/>',
            'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
            'building' => '<path d="M3 21h18M5 21V7l7-4 7 4v14M9 9h1M14 9h1M9 13h1M14 13h1M10 21v-4h4v4"/>',
            'heart' => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8l1 1.1L12 21.2l7.8-7.7 1-1.1a5.5 5.5 0 0 0 0-7.8z"/>',
            'award' => '<circle cx="12" cy="8" r="6"/><path d="M15.5 13.5 17 22l-5-3-5 3 1.5-8.5"/>',
            'filecheck' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 15l2 2 4-4"/>',
            'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
            'mail' => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/>',
            'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/>',
        ];
        // Client icon set (assets/images/icons/*.png), drawn as a colour mask so it follows the menu text colour.
        $img = ['leaf' => 'leaf.png', 'jug' => 'jug.png', 'box' => 'box.png', 'headset' => 'headset.png', 'calendar' => 'calendar.png', 'dispenser' => 'dispenser.png', 'waves' => 'waves.png', 'pipe' => 'pipe.png', 'transformer' => 'transformer.png', 'fire' => 'fire.png', 'plumbing' => 'plumbing.png', 'hvac' => 'hvac.png', 'safety' => 'safety.png', 'pool' => 'pool.png', 'grounds' => 'grounds.png', 'equipment' => 'equipment.png', 'odor' => 'odor.png', 'drain' => 'drain.png', 'enzymes' => 'enzymes.png', 'electrical' => 'electrical.png', 'cleaning' => 'cleaning.png'];
    }
    $map = [
        'enzyme treatment & maintainers' => 'img:enzymes', 'drain & wastewater maintenance' => 'img:drain', 'hvac maintenance' => 'img:hvac', 'cleaning & sanitation' => 'img:cleaning',
        'odor control' => 'img:odor', 'equipment maintenance' => 'img:equipment', 'grounds & seasonal maintenance' => 'img:grounds', 'pool & water treatment' => 'img:pool',
        'power distribution & transformers' => 'img:transformer', 'electrical, lighting, cable & wire' => 'img:electrical', 'package units & hvac' => 'img:box', 'plumbing & pvf' => 'img:plumbing',
        'fire & safety' => 'img:fire', 'safety' => 'img:safety',
        'drain maintenance' => 'img:pipe', 'air scenting services' => 'sparkles', 'chemical supply program' => 'img:jug', 'dispensing systems' => 'img:dispenser',
        'logistics & procurement' => 'img:box', 'program scheduling & management' => 'img:calendar', 'work order request and call center service' => 'img:headset',
        'about us' => 'building', 'community & culture' => 'heart', 'certifications' => 'award', 'leadership & team' => 'users', 'co-ops & schedules' => 'filecheck', 'past performances' => 'briefcase', 'contact us' => 'mail',
        'chemical supplies' => 'layers', 'systems and infrastructure supplies' => 'gear', 'product & dispenser services' => 'layers', 'facility operations support services' => 'gear',
    ];
    $key = strtolower(html_entity_decode(trim((string) $label), ENT_QUOTES));
    $name = $map[$key] ?? 'layers';
    if (strpos($name, 'img:') === 0) {
        $file = $img[substr($name, 4)] ?? null;
        if ($file) return '<i class="mi mi-img" aria-hidden="true" style="--m:url(' . esc_url(cc_img('wp-content/themes/competitive-choice/assets/images/icons/' . $file)) . ')"></i>';
        $name = 'layers';
    }
    return '<i class="mi" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">' . $svg[$name] . '</svg></i>';
}
