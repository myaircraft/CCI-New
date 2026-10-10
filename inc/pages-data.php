<?php
/**
 * Definitions of the site's inner pages (products, services and company pages), used to create them and
 * to give each its starting content. The content itself is stored per page in the "_cc_content" post meta
 * and edited in the page's "Page content" box; this file only seeds pages that have nothing saved yet.
 *
 * Product and service pages ("category" template) share the trust, process and inquiry blocks below.
 * Company pages ("info" template) carry their own blocks. The data lives in inc/pages-data/*.php.
 */

if (!defined('ABSPATH')) exit;

/** All page definitions keyed by slug. */
function cc_pages_data() {
    static $pages = null;
    if ($pages === null) {
        $pages = array_merge(
            require __DIR__ . '/pages-data/products.php',
            require __DIR__ . '/pages-data/services.php',
            require __DIR__ . '/pages-data/info.php'
        );
    }
    return $pages;
}

/** Blocks every product or service page shows after its own content. */
function cc_page_shared($group) {
    $points = ['Serving buyers since 2003', 'Based in Houston, Texas', 'Nationwide sourcing', 'GSA MAS, TIPS and BuyBoard contract vehicles', 'WOSB certification'];
    $trust = [
        'title'        => $group === 'service' ? 'Why organizations work with Competitive Choice' : 'Why buyers source through Competitive Choice',
        'paragraphs'   => [
            'Competitive Choice has supported government, commercial and institutional buyers since 2003. Our strategic sourcing and procurement experience helps you handle your requirements without chasing multiple suppliers.',
            'Public-sector buyers can ask about our contract vehicles and certifications, including GSA MAS, TIPS, BuyBoard and WOSB, when they submit a requirement. We confirm which vehicles apply to each purchase.',
        ],
        'points'       => $points,
        'button_label' => 'CO-OPS & CONTRACT VEHICLES',
    ];
    if ($group === 'service') {
        $process = [
            'title' => 'How working with Competitive Choice works', 'description' => 'A simple path from requirement to ongoing support.',
            'items' => [
                ['title' => 'Tell us your requirement', 'description' => 'Share the facility, the problem or goal and the details listed below.'],
                ['title' => 'We scope the service', 'description' => 'Our team reviews your needs and shapes a plan that fits your site and workflow.'],
                ['title' => 'Review the proposal', 'description' => 'You receive a clear proposal, with scope, schedule and pricing confirmed.'],
                ['title' => 'Service begins', 'description' => 'Once you approve, we start the service and stay on hand for ongoing support.'],
            ],
        ];
        $inquiry = [
            'title' => 'Let’s scope your service requirement.',
            'paragraphs' => ['Tell us about your facility and what you need. Our team can discuss the right approach and the next steps.', 'Include the details below where available. Scope, schedule and pricing are confirmed during your inquiry.'],
            'checklist_title' => 'Details to include with your inquiry',
            'items' => [
                ['title' => 'Scope of work', 'description' => 'What you need done, the areas or systems involved and any problems you are seeing today.'],
                ['title' => 'Site & access', 'description' => 'Facility type, locations, site access rules and any safety or compliance requirements.'],
                ['title' => 'Schedule & frequency', 'description' => 'Whether the work is one-time or recurring, and your preferred start date and service windows.'],
                ['title' => 'Contract & compliance', 'description' => 'Purchasing vehicle, approvals, reporting needs and any documentation your organization requires.'],
            ],
            'button_label' => 'DISCUSS YOUR REQUIREMENT',
        ];
    } else {
        $process = [
            'title' => 'How sourcing works with Competitive Choice', 'description' => 'A simple path from requirement to delivery.',
            'items' => [
                ['title' => 'Send your requirement', 'description' => 'Share your specification, equipment schedule or bill of materials, along with the details listed below.'],
                ['title' => 'We review and source', 'description' => 'Our team checks your ratings, standards and timing, then looks for suitable equipment.'],
                ['title' => 'Receive your quote', 'description' => 'You get a clear quotation, with availability and delivery timing confirmed.'],
                ['title' => 'Order and delivery', 'description' => 'Once you approve, we support the purchase and coordinate delivery to your location.'],
            ],
        ];
        $inquiry = [
            'title' => 'Let’s define the right supply requirement.',
            'paragraphs' => ['Send your product list, specification or bill of materials. Our team can discuss your needs and the next steps for sourcing.', 'Include the details below where available. Product suitability, availability and delivery requirements should be confirmed during your inquiry.'],
            'checklist_title' => 'Details to include with your inquiry',
            'items' => [
                ['title' => 'Product specifications', 'description' => 'Product type, brand or specification, sizes, ratings or concentrations, and any data sheets or standards.'],
                ['title' => 'Application & environment', 'description' => 'Facility type, how the product will be used, and any safety or regulatory requirements.'],
                ['title' => 'Quantity & documentation', 'description' => 'Required quantities, safety data sheets, certifications and any documentation your organization needs.'],
                ['title' => 'Project timing & delivery', 'description' => 'Delivery location, requested date and any site access or receiving requirements.'],
            ],
            'button_label' => 'DISCUSS YOUR REQUIREMENT',
        ];
    }
    return ['trust' => $trust, 'process' => $process, 'inquiry' => $inquiry];
}

/** Final content for a definition: its own content plus the shared blocks and defaults. */
function cc_page_build($def) {
    $c = $def['content'];
    if (($def['template'] ?? 'category') === 'category') {
        $group = $def['group'] ?? 'product';
        $c += cc_page_shared($group);
        $c['banner'] = ($c['banner'] ?? []) + ['kicker' => $group === 'service' ? 'SERVICES' : 'PRODUCTS & SUPPLIES', 'quote_label' => 'REQUEST A PROJECT QUOTE', 'call_label' => 'CALL'];
        $c['breadcrumb'] = ($c['breadcrumb'] ?? []) + ['home' => 'Home', 'parent' => $group === 'service' ? 'Services' : 'Products & Supplies', 'parent_link' => $group === 'service' ? 'link:services' : 'link:products', 'current' => $def['title']];
        $c['related'] = $c['related'] ?? ['title' => 'Related supply requirements', 'links' => [['label' => 'All Products & Supplies', 'link' => 'link:products']]];
        $c['faq'] = ($c['faq'] ?? []) + ['title' => $def['title'] . ' FAQs', 'description' => 'Answers to common selection, specification and sourcing questions.'];
    } else {
        $c['breadcrumb'] = ($c['breadcrumb'] ?? []) + ['home' => 'Home', 'current' => $def['title']];
    }
    return $c;
}

/**
 * Creates every defined page (parents first) with its template and starting content. Pages that already
 * have saved content are left alone unless $force is true. Returns a log of what was done.
 */
function cc_install_pages($force = false) {
    $log = [];
    $defs = cc_pages_data();
    uasort($defs, fn($a, $b) => ($a['order'] ?? 0) <=> ($b['order'] ?? 0));
    foreach ($defs as $slug => $def) {
        $parent_id = 0;
        $path = $slug;
        if (!empty($def['parent'])) {
            $parent = get_page_by_path($def['parent']);
            if (!$parent) { $log[] = "skip {$slug}: parent missing"; continue; }
            $parent_id = $parent->ID;
            $path = $def['parent'] . '/' . $slug;
        }
        $page = get_page_by_path($path);
        $id = $page ? $page->ID : wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_title' => $def['title'], 'post_name' => $slug, 'post_parent' => $parent_id, 'menu_order' => (int) ($def['order'] ?? 0)]);
        if (is_wp_error($id) || !$id) { $log[] = "fail {$slug}"; continue; }
        update_post_meta($id, '_wp_page_template', ($def['template'] ?? 'category') === 'info' ? CC_INFO_TEMPLATE : CC_CATEGORY_TEMPLATE);
        $existing = get_post_meta($id, '_cc_content', true);
        if ($force || !is_array($existing) || !$existing) {
            update_post_meta($id, '_cc_content', wp_slash(cc_page_build($def)));
            $log[] = ($page ? 'updated ' : 'created ') . $path;
        } else {
            $log[] = 'kept ' . $path;
        }
    }
    return $log;
}
