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
        ['icon' => 'plus', 'icon_img' => $enz_t('icon-plus.png'), 'title' => 'Healthcare, Education & Data Centers', 'text' => 'Power distribution products for hospitals, schools and data centers where electrical infrastructure supports essential day-to-day operations.'],
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

    'fire-safety' => $build(12, [
        'title' => 'Fire & Safety', 'image' => 'product-fire.jpg',
        'seo_title' => 'Fire & Safety Supplies | Competitive Choice',
        'seo' => 'Fire extinguishers, sprinkler and fire protection components, fire alarm and detection products, and emergency lighting and signage for facilities. Request a quote.',
        'og' => 'Fire and safety supplies for facilities, sourced through Competitive Choice. Looking for lithium-ion fire suppression? See FCL-X.',
        'banner' => 'Fire & Safety Supplies', 'lead' => 'Extinguishers, fire protection components and emergency products for facilities that need to be ready when it counts.',
        'overview_title' => 'Fire protection built in, not bolted on',
        'overview' => ['Fire and life safety work best when they are planned into a building from the start and maintained after it opens. That means the right extinguishers on the wall, sprinkler and alarm components that match the system, and emergency lighting and signage that people can see when they need it.', 'Competitive Choice sources fire and safety products for facility teams, contractors and public-sector buyers. We purchase from established national distributors, so you get a wide range of fire protection products through one supplier. Protection should not be reactive. It should be built in.', 'Looking for protection against lithium-ion battery fires? See our FCL-X fire suppression page.'],
        'equip_title' => 'Fire and safety products we source', 'equip_desc' => 'Common categories for facility upgrades, new construction and routine replacement.',
        'equip' => [['Fire Extinguishers & Cabinets', 'Portable extinguishers, cabinets, brackets and signs for offices, schools, warehouses and mechanical rooms.'], ['Sprinkler & Fire Protection Components', 'Sprinkler heads, valves, gauges and fittings used to install, repair and maintain wet and dry fire protection systems.'], ['Fire Alarm & Detection', 'Detectors, pull stations, horns, strobes and related components for alarm and detection systems.'], ['Emergency Lighting & Signage', 'Exit signs, emergency lights and safety signage that help people find the way out.'], ['Fire Fabrication Products', 'Pipe, fittings and fabrication products for fire protection piping projects.']],
        'apps_title' => 'Where fire and safety supplies matter most', 'apps_desc' => 'Buildings with many occupants, valuable assets or strict inspections.',
        'apps' => [['Schools & public buildings', 'Extinguishers, alarms and signage that keep inspections on track and occupants safe.'], ['Healthcare & institutions', 'Reliable fire and life safety products for facilities that cannot simply close.'], ['Commercial & industrial sites', 'Protection for warehouses, plants and campuses with equipment and stored materials.']],
        'resources' => ['title' => 'Browse Fire Protection Products and Guidance', 'description' => 'We purchase from Ferguson. Use these catalog pages for product details and guidance, then send us your list for a quote.', 'links' => [['label' => 'Fire Protection Products', 'url' => 'https://www.ferguson.com/category/safety-security/fire-protection/'], ['label' => 'Fire Fabrication Products', 'url' => 'https://www.ferguson.com/category/fire-fabrication-products/'], ['label' => 'Lithium-Ion Fire Suppression (FCL-X)', 'url' => '/fire-suppression/']]],
        'faq' => [['What fire and safety products can you source?', 'We source fire extinguishers and cabinets, sprinkler and fire protection components, fire alarm and detection products, emergency lighting and signage, and fire fabrication products. Send your list or specification and we will review availability.'], ['Where can I see the full product range?', 'Use the Ferguson catalog links on this page for product details and guidance. We purchase from Ferguson, so you can send us the items you want to quote.'], ['Do you offer protection for lithium-ion battery fires?', 'Yes. FCL-X is our lithium-ion fire suppression line, with its own page that covers how it works, the products and common questions. See Fire Suppression in the main menu.'], ['Can you supply to a specific code or standard?', 'Include the codes, listings or approvals your project requires when you inquire. Requirements vary by jurisdiction, so confirm them with your fire authority and project engineer.'], ['Do you supply fire protection piping and fittings?', 'Yes. Fire fabrication products, including pipe and fittings for fire protection systems, are part of what we source. Share your take-off and we will quote it.'], ['Are cooperative contracts available for these products?', 'Tell us which contract vehicle you buy through and we will confirm what can be purchased under it.'], $quote],
        'related' => [['Safety', '/supplies/safety-security/'], ['FCL-X Fire Suppression', '/fire-suppression/']],
    ]),

    'hvac-package-units' => $build(13, [
        'title' => 'Package Units & HVAC', 'image' => 'product-hvac.jpg',
        'seo_title' => 'HVAC Package Units & Equipment | Competitive Choice',
        'seo' => 'Source HVAC package units, rooftop equipment, replacement parts, controls and filters for commercial and public buildings. Send your specification for a quote.',
        'og' => 'HVAC package units and equipment for schools, healthcare, commercial and industrial buildings. Send your equipment schedule for a quote.',
        'banner' => 'HVAC Package Units & Equipment', 'lead' => 'Package units, rooftop equipment and the parts that keep them running, sourced to your specification.',
        'overview_title' => 'Package units sized for your building',
        'overview' => ['A package unit combines cooling, heating and air handling in one factory-assembled cabinet. That makes it a common choice for commercial roofs, schools, retail and light industrial buildings. Choosing the right one means matching capacity, voltage, efficiency and controls to the building, and having replacement parts available when a unit goes down.', 'Competitive Choice sources HVAC package units, rooftop equipment and related components for facility teams, mechanical contractors and public-sector buyers. Send your equipment schedule or specification and we will check ratings and availability and confirm lead times in your quote.', 'Looking for coil cleaners, condensate pan treatments or corrosion inhibitors? Those are on our HVAC Maintenance page.'],
        'equip_title' => 'Package unit products we source', 'equip_desc' => 'Equipment, parts and accessories for new installations, replacements and repairs.',
        'equip' => [['Package Units & Rooftop Equipment', 'Packaged cooling, gas and electric heating, and heat pump units for commercial rooftops and slab installations, matched to your load and electrical service.'], ['Replacement Parts', 'Common repair parts such as compressors, motors, capacitors, contactors and belts, to get a down unit back in service.'], ['Controls & Thermostats', 'Thermostats, sensors and controls that match the equipment and your building automation.'], ['Filters & Accessories', 'Filters, roof curbs and accessories that complete the installation and protect airflow.']],
        'apps_title' => 'Where package units are used', 'apps_desc' => 'Buildings that rely on dependable heating and cooling.',
        'apps' => [['Schools & public buildings', 'Rooftop units sized for classrooms, gyms, offices and community buildings.'], ['Healthcare & laboratories', 'Equipment and parts for spaces where comfort and air quality are part of the mission.'], ['Retail, commercial & light industrial', 'Package units for storefronts, warehouses and offices where space is limited.']],
        'faq' => [['What types of package units can you source?', 'We source packaged cooling, gas and electric heating, and heat pump units for commercial buildings. Tell us the manufacturer, model or specification you need and we will review options.'], ['What do you need to quote a package unit?', 'Send the capacity or tonnage, voltage and phase, efficiency requirements, heating type, controls and any accessories such as roof curbs. Include your project or outage dates.'], ['How long does equipment take to arrive?', 'Lead times vary by manufacturer and model. We confirm availability and delivery timing in your quote.'], ['Can you supply replacement parts?', 'Yes. Compressors, motors, capacitors, contactors, belts, filters and other common parts are part of our range. Send the unit model and part details for a quote.'], ['Can you match an existing manufacturer or specification?', 'Yes. Share the manufacturer, model or engineer’s specification, and we will check the equipment against it. Your project engineer confirms any substitutions.'], ['Do you install the equipment?', 'We supply equipment and coordinate delivery. Installation is handled by your mechanical contractor.'], ['Do you also supply HVAC maintenance chemicals?', 'Yes. Coil cleaners, condensate pan treatments and corrosion inhibitors are on our HVAC Maintenance page.'], $quote],
        'related' => [['HVAC Maintenance', '/supplies/hvac-maintenance/'], ['Plumbing & PVF', '/supplies/plumbing-supplies/'], ['Electrical, Lighting, Cable & Wire', '/supplies/electrical-lighting-cable/']],
    ]),

    'plumbing-supplies' => $build(14, [
        'title' => 'Plumbing & PVF', 'image' => 'product-plumbing.jpg',
        'seo_title' => 'Plumbing & PVF Supplies: Pipe, Valves & Fittings | Competitive Choice',
        'seo' => 'Pipe, valves and fittings (PVF) for commercial and public projects, plus drain openers, sealers and other chemicals plumbers rely on. Request a quote.',
        'og' => 'Plumbing and PVF supplies, including pipe, valves, fittings and plumbing chemicals. Send your take-off for a quote.',
        'banner' => 'Plumbing & PVF', 'lead' => 'Pipe, valves and fittings for facilities and projects, plus the chemicals plumbers rely on.',
        'overview_title' => 'Pipe, valves and fittings for real projects',
        'overview' => ['PVF stands for pipe, valves and fittings, the core of any plumbing or piping system. Projects move faster when the right sizes, materials and ratings arrive together, and facilities stay running when common repair parts are easy to find.', 'Competitive Choice sources PVF products for contractors, facility maintenance teams and public-sector buyers. Send your take-off or bill of materials and we will check specifications and availability and quote it as one order.', 'We also supply the chemicals plumbers use every day, including drain openers, odor control, sealers and bio-enzymatic formulas.'],
        'equip_title' => 'Plumbing and PVF products we source', 'equip_desc' => 'Piping products for installation and repair, plus chemicals for maintenance.',
        'equip' => [['Pipe & Tube', 'Copper, PVC, CPVC and steel pipe and tube in the sizes and schedules your project calls for.'], ['Valves', 'Ball, gate, check and butterfly valves, plus pressure-reducing and backflow prevention products.'], ['Fittings & Couplings', 'Elbows, tees, couplings, unions, adapters and flanges to complete the run.'], ['Hangers, Supports & Accessories', 'Hangers, supports, gaskets, fasteners and other accessories that finish an installation.'], ['Chemicals for Plumbers', 'Drain openers, odor control, sealers and bio-enzymatic formulas for everyday plumbing maintenance.']],
        'apps_title' => 'Where plumbing and PVF supplies are used', 'apps_desc' => 'Projects and facilities that depend on dependable piping.',
        'apps' => [['Construction & MEP projects', 'Pipe, valves and fittings delivered to match your installation schedule.'], ['Facility maintenance teams', 'Repair parts and chemicals that keep restrooms, kitchens and mechanical rooms in service.'], ['Water, wastewater & utilities', 'Piping products and treatment chemicals for plants, lift stations and distribution systems.']],
        'faq' => [['What does PVF mean?', 'PVF stands for pipe, valves and fittings. It covers the products used to build and repair plumbing and piping systems.'], ['What PVF products can you source?', 'We source pipe and tube, valves, fittings and couplings, and hangers, supports and accessories. Send your list with sizes, materials and ratings for a quote.'], ['Do you sell plumbing chemicals?', 'Yes. We supply drain openers, odor control, sealers, professional cleaners and bio-enzymatic formulas for commercial and institutional plumbing.'], ['What do you need to quote pipe, valves and fittings?', 'Send your take-off or bill of materials with material, size, pressure rating or schedule, applicable standards, quantities and your delivery location and date.'], ['Can you help with substitutions?', 'Yes. If an item is hard to find, we can suggest equivalents. Your engineer confirms any substitution against the specification.'], ['Can you deliver to a construction schedule?', 'Yes. Tell us your milestones and we can plan deliveries around them. Our Program Scheduling & Management service supports phased projects.'], ['How do I choose a drain opener?', 'The right product depends on the pipe material, the type of clog and your safety rules. Tell us the application and our team will recommend suitable options.'], ['Do you offer drain care as a service?', 'Yes. Our Drain Maintenance service supports wastewater, kitchen and dialysis drains with preventive maintenance and customized plans.'], $quote],
        'related' => [['Drain Maintenance', '/services/drain-services/'], ['Drain & Wastewater Maintenance', '/supplies/drain-wastewater-maintenance/'], ['Odor Control', '/services/odor-control/']],
    ]),
];
