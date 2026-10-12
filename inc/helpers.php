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
    $rest = trim($variants[$variant] . ' ' . $sizes[$size] . ' ' . $extra);
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
    $text = (string) $text;
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
