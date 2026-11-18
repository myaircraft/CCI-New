<?php
/** Rewritten Systems and Infrastructure supply pages: Package Units & HVAC, Plumbing & PVF, Fire & Safety, plus Power Distribution. */

if (!defined('ABSPATH')) exit;

$build = function ($order, $d) {
    $pairs = fn($rows, $k1, $k2) => array_map(fn($r) => [$k1 => $r[0], $k2 => $r[1]], $rows);
    $c = [
        'seo' => ['title' => $d['seo_title'], 'description' => $d['seo'], 'og_title' => $d['seo_title'], 'og_description' => $d['og'], 'schema_about' => $d['title']],
        'banner' => ['image' => $d['image'], 'title' => $d['banner'], 'lead' => $d['lead']],
        'overview' => ['title' => $d['overview_title'], 'paragraphs' => $d['overview']],
        'equipment' => ['title' => $d['equip_title'], 'description' => $d['equip_desc'], 'items' => array_map(fn($r) => ['title' => $r[0], 'icon' => '', 'image' => '', 'description' => $r[1], 'items' => []], $d['equip'])],
        'applications' => ['title' => $d['apps_title'], 'description' => $d['apps_desc'], 'items' => $pairs($d['apps'], 'title', 'description')],
        'faq' => ['items' => $pairs($d['faq'], 'question', 'answer')],
        'related' => ['title' => 'Related supply requirements', 'links' => array_merge(array_map(fn($r) => ['label' => $r[0], 'link' => $r[1]], $d['related']), [['label' => 'All Products & Supplies', 'link' => 'link:products']])],
    ];
    if (!empty($d['resources'])) $c['resources'] = $d['resources'];
    return ['title' => $d['title'], 'parent' => 'supplies', 'template' => 'category', 'group' => 'product', 'order' => (string) $order, 'content' => $c];
};
$quote = ['How do I request a quote?', 'Send your product list with quantities, the application and your delivery location and date. Availability and delivery timing are confirmed during quotation.'];

$seed = require __DIR__ . '/../page-seed.php';
$ps = $seed['power-distribution-transformers'];
$pw = fn($f) => 'wp-content/themes/competitive-choice/assets/images/power/' . $f;
$ico_t = fn($f) => 'wp-content/themes/competitive-choice/assets/images/icons/' . $f;
$enz_t = fn($f) => 'wp-content/themes/competitive-choice/assets/images/enzyme/' . $f;
$power = [
    'seo' => $ps['seo'],
    'banner' => ['image' => $pw('hero.jpg'), 'image_alt' => 'Electrical substation yard with power transformers at dusk', 'kicker' => 'PRODUCTS & SUPPLIES', 'title' => 'Power Distribution Equipment<br>& Transformers', 'lead' => 'Reliable power starts with the right equipment. We supply power and<br>distribution transformers, switchgear, panelboards, circuit breakers<br>and fuses for the facilities that keep essential services running.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
    'breadcrumb' => $ps['breadcrumb'],
    'intro' => ['title' => 'Power Distribution Equipment & Transformers for Critical Infrastructure', 'paragraphs' => [
        'Competitive Choice supplies power distribution equipment, including distribution and power transformers, switchgear, panelboards, load centers, circuit breakers and fuses, for organizations that cannot afford unplanned downtime. Whether you are modernizing an electrical system, expanding capacity or equipping a new build, the equipment has to match your voltage, load and installation environment.',
        'We serve utilities, hospitals, data centers, water plants, schools, government facilities and infrastructure contractors from Houston, TX, and source for customers nationwide.']],
    'solutions' => ['kicker' => 'OUR SOLUTIONS', 'title' => 'Power Distribution Products We Supply', 'description' => 'A focused range of power distribution equipment for facility upgrades, infrastructure projects and essential operations.', 'items' => [
        ['title' => 'Distribution & Power Transformers', 'text' => 'Transformer products for electrical distribution and power infrastructure. Discuss your voltage, kVA capacity and installation requirements with our team.', 'image' => $pw('card1.jpg'), 'alt' => 'Pad-mounted distribution transformer'],
        ['title' => 'Switchgear & Distribution Equipment', 'text' => 'Equipment to distribute electrical power across facilities and critical systems, supporting modernization and capacity expansion projects.', 'image' => $pw('card2.jpg'), 'alt' => 'Low-voltage switchgear lineup'],
        ['title' => 'Circuit Protection', 'text' => 'Protective components for electrical distribution systems. Share the specified ratings and application so we can review your requirement.', 'image' => $pw('card3.jpg'), 'alt' => 'Circuit breakers and fuses'],
    ]],
    'fit' => ['title' => 'Power Distribution Equipment<br>for Essential Operations', 'description' => 'Different facilities have different electrical demands. Start with the application, then define the equipment your project requires.', 'image' => $pw('band.jpg'), 'image_alt' => 'Power transformer in a substation yard', 'shift' => '0px', 'tagline' => 'Reliable Power. Matched Ratings. Delivered On Time.', 'items' => [
        ['icon' => 'building', 'icon_img' => $ico_t('transformer.png'), 'title' => 'Utilities & Water Infrastructure', 'text' => 'Distribution equipment and transformers for utilities and water plants, including system modernization and capacity expansion requirements.'],
        ['icon' => 'plus', 'icon_img' => $enz_t('icon-plus.png'), 'title' => 'Healthcare', 'text' => 'Power distribution products for hospitals, where electrical infrastructure supports essential day-to-day operations.'],
        ['icon' => 'building', 'icon_img' => $ico_t('school.png'), 'title' => 'Education', 'text' => 'Power distribution products for schools and campuses, where electrical infrastructure supports essential day-to-day operations.'],
        ['icon' => 'building', 'icon_img' => $ico_t('server.png'), 'title' => 'Data Centers', 'text' => 'Power distribution products for data centers, where electrical infrastructure supports essential day-to-day operations.'],
        ['icon' => 'building', 'icon_img' => $ico_t('equipment.png'), 'title' => 'Infrastructure Contractors', 'text' => 'Equipment sourcing for contractors working on electrical infrastructure projects, with requirements guided by the project specification.'],
    ]],
    'process' => ['title' => 'How Power Distribution & Transformers Sourcing Works With Competitive Choice', 'description' => 'From a one-line diagram to energized equipment, with clear lead times.', 'items' => [
        ['title' => 'Send the one-line, spec or equipment list', 'text' => 'Share voltage, kVA, enclosure, ratings and standards such as UL, ANSI or NEMA, plus your project or outage date.'],
        ['title' => 'We check ratings and lead times', 'text' => 'We match each item to your specification and confirm availability, since switchgear and transformer lead times can make or break a schedule.'],
        ['title' => 'Receive a clear, itemized quote', 'text' => 'Pricing, submittal documents and delivery windows are laid out so your engineer and purchasing team can approve quickly.'],
        ['title' => 'Coordinated delivery to site', 'text' => 'We stage and ship to your yard, plant or job site on the date you need it, and stay on the line until it is received.'],
    ]],
    'inquiry' => $ps['inquiry'],
    'faq' => $ps['faq'],
    'related' => ['title' => 'Related Supplies', 'links' => [['label' => 'Electrical, Lighting, Cable & Wire', 'link' => '/supplies/electrical-lighting-cable/'], ['label' => 'All Products & Supplies', 'link' => 'link:products']]],
];

$el = fn($f) => 'wp-content/themes/competitive-choice/assets/images/electrical/' . $f;
$elec = [
    'seo' => ['title' => 'Electrical, Lighting, Cable & Wire | Competitive Choice', 'description' => 'Cable, wire and datacomm, conduits, panels, raceways and LED commercial lighting for construction and facility projects. Request a quote.', 'og_title' => 'Electrical, Lighting, Cable & Wire | Competitive Choice', 'og_description' => 'Electrical and lighting products for commercial and new construction projects, with responsive support. Send your requirement for a quote.', 'schema_about' => 'Electrical supplies, commercial lighting and cable'],
    'banner' => ['image' => $el('hero.jpg'), 'image_alt' => 'Commercial electrical room with cable trays, conduit and panels', 'kicker' => 'PRODUCTS & SUPPLIES', 'title' => 'Electrical, Lighting,<br>Cable & Wire', 'lead' => 'Cable, conduit, panels, controls and commercial lighting<br>for the technical demands of critical infrastructure projects.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
    'breadcrumb' => ['home' => 'Home', 'parent' => 'Products & Supplies', 'parent_link' => 'link:products', 'current' => 'Electrical, Lighting, Cable & Wire'],
    'intro' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => 'Electrical and lighting supply<br>for commercial and construction projects', 'paragraphs' => [
        'Competitive Choice is a trusted partner in the commercial and new construction sectors, delivering a full range of electrical and lighting products for the technical demands of critical infrastructure projects.',
        'From schools and hospitals to industrial campuses and energy facilities, we help make sure every wire, light and panel supports both function and compliance. Our team works directly with contractors, engineers and facilities teams to provide tailored product guidance and responsive support.'],
        'steps' => [
            ['title' => 'Requirements Take Shape', 'text' => 'Drawings, schedules and specifications define the cable, panels and lighting a project needs.', 'image' => $el('step1.jpg'), 'alt' => 'Electrical drawings and a bill of materials beside a hard hat'],
            ['title' => 'Products Are Sourced', 'text' => 'We check ratings and standards, identify alternates for long-lead items and confirm availability.', 'image' => $el('step2.jpg'), 'alt' => 'Electrician pulling wire into conduit'],
            ['title' => 'Projects Stay on Schedule', 'text' => 'Materials arrive in step with your schedule, whether in one drop or phased releases.', 'image' => $el('step3.jpg'), 'alt' => 'Finished corridor with recessed LED lighting'],
        ]],
    'solutions' => ['kicker' => 'OUR SOLUTIONS', 'title' => 'Electrical & Lighting Products We Supply', 'description' => 'A broad range for contractors, engineers and facility teams.', 'items' => [
        ['title' => 'Cable, Wire & Datacomm', 'text' => 'Cable, wire and datacomm products for power, controls and communications on commercial and new construction projects.', 'image' => $el('card1.jpg'), 'alt' => 'Spools of building wire and data cable'],
        ['title' => 'Conduits, Panels & Raceways', 'text' => 'Conduits, panels and raceways to route and distribute power safely, plus controls, protection and testing tools.', 'image' => $el('card2.jpg'), 'alt' => 'Conduit, raceway, junction boxes and a panelboard'],
        ['title' => 'LED & Commercial Lighting', 'text' => 'LED and high-performance commercial lighting for new construction, retrofits and critical infrastructure.', 'image' => $el('card3.jpg'), 'alt' => 'LED troffer, high bay fixture and tube lamps'],
    ]],
    'fit' => ['title' => 'Supporting Projects<br>of Every Size', 'description' => 'Start with the application, then define the products your project requires.', 'image' => $el('band.jpg'), 'image_alt' => 'Cable spool and conduit on a construction site', 'shift' => '0px', 'tagline' => 'Reliable Wiring. Right Lighting. Projects On Schedule.', 'items' => [
        ['icon' => 'building', 'icon_img' => $ico_t('school.png'), 'title' => 'Schools', 'text' => 'Wiring, lighting and panels for campuses where reliability and compliance come first.'],
        ['icon' => 'plus', 'icon_img' => $enz_t('icon-plus.png'), 'title' => 'Hospitals', 'text' => 'Wiring, lighting and panels for facilities where reliability and compliance come first.'],
        ['icon' => 'building', 'icon_img' => $ico_t('factory.png'), 'title' => 'Industrial Campuses & Energy', 'text' => 'Electrical components and controls for demanding industrial and energy environments.'],
        ['icon' => 'building', 'icon_img' => $ico_t('equipment.png'), 'title' => 'New Construction & Upgrades', 'text' => 'Materials for contractors and engineers lighting new builds or wiring vital upgrades.'],
    ]],
    'process' => ['kicker' => 'A SIMPLE 4-STEP PROCESS', 'title' => 'Your Electrical Sourcing Plan, Made Simple', 'description' => 'Cable, conduit, panels and lighting, sourced for the project you are actually running.', 'items' => [
        ['title' => 'Send Your Bill of Materials', 'text' => 'Share cable types and lengths, conduit, panels, controls and lighting schedules, along with any Trade Agreements Act (TAA) or spec requirements.'],
        ['title' => 'We Review and Source', 'text' => 'We check ratings and standards, identify alternates for long-lead items and confirm availability.'],
        ['title' => 'Receive a Consolidated Quote', 'text' => 'One clear quotation across categories, so you are not managing several suppliers.'],
        ['title' => 'Phased Delivery to Your Site', 'text' => 'We coordinate shipments with your schedule, whether it is a single drop or phased releases.'],
    ]],
    'why' => ['title' => 'Why Choose CCI for Electrical & Lighting?', 'description' => 'From wire and conduit to lighting and panels, we help contractors, engineers and facility teams source products that fit their projects.', 'items' => [
        ['icon' => 'sliders', 'title' => 'Product Selection', 'text' => 'Solutions matched to your project'],
        ['icon' => 'shield', 'title' => 'Preventive Focus', 'text' => 'Alternates for long-lead items'],
        ['icon' => 'box', 'title' => 'Convenient Sourcing', 'text' => 'One consolidated quote'],
        ['icon' => 'calendar', 'title' => 'Routine Support', 'text' => 'Deliveries that follow your schedule'],
    ]],
    'faq' => ['title' => 'Electrical, Lighting, Cable & Wire FAQs', 'description' => 'Answers to common selection, specification and sourcing questions.', 'items' => [
        ['question' => 'What electrical products does Competitive Choice supply?', 'answer' => 'We supply cable, wire and datacomm, conduits, panels and raceways, LED and commercial lighting, power protection, controls and testing tools, and HVAC, automation and utility-grade components.'],
        ['question' => 'Can you help specify products for a project?', 'answer' => 'Our team works directly with contractors, engineers and facilities teams to provide product guidance. Final specification should be confirmed by your project engineer.'],
        ['question' => 'Do you supply power distribution equipment?', 'answer' => 'Yes. See our Power Distribution & Transformers page for switchgear, panelboards, breakers, fuses and transformers.'],
        ['question' => 'How do I request a quote?', 'answer' => 'Send your bill of materials or specification with quantities, drawings if available, and delivery location and date. Availability and timing are confirmed during quotation.'],
        ['question' => 'Do you work with contractors and engineers?', 'answer' => 'Yes. Our team works directly with contractors, engineers and facilities teams to provide product guidance and responsive support.'],
        ['question' => 'Which lighting do you supply?', 'answer' => 'LED and high-performance commercial lighting for new construction, retrofits and critical infrastructure.'],
        ['question' => 'Are cooperative contracts available for electrical supplies?', 'answer' => 'Electrical categories appear on several cooperative contracts, including Good Buy and regional cooperatives. Tell us which vehicle you use and we will confirm.'],
        ['question' => 'Can you supply datacomm and low-voltage cabling?', 'answer' => 'Yes. Cable, wire and datacomm products are part of our electrical range. Share your specification for a quote.'],
    ]],
    'related' => ['title' => 'Related Supplies', 'links' => [['label' => 'Power Distribution & Transformers', 'link' => '/supplies/power-distribution-transformers/'], ['label' => 'All Products & Supplies', 'link' => 'link:products']]],
];

return [
    'electrical-lighting-cable' => ['title' => 'Electrical, Lighting, Cable & Wire', 'parent' => 'supplies', 'template' => 'enzyme', 'group' => 'product', 'order' => '15', 'content' => $elec],
    'power-distribution-transformers' => ['title' => 'Power Distribution & Transformers', 'parent' => 'supplies', 'template' => 'enzyme', 'group' => 'product', 'order' => '11', 'content' => $power],
];
