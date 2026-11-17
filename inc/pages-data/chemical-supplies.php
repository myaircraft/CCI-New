<?php
/** Chemical Supplies pages (Category Page template, "product" group), built from compact definitions. */

if (!defined('ABSPATH')) exit;

$build = function ($slug, $order, $d) {
    $pairs = fn($rows, $k1, $k2) => array_map(fn($r) => [$k1 => $r[0], $k2 => $r[1]], $rows);
    return [
        'title' => $d['title'], 'parent' => 'supplies', 'template' => 'category', 'group' => 'product', 'order' => (string) $order,
        'content' => [
            'seo' => ['title' => $d['title'] . ' | Competitive Choice', 'description' => $d['seo'], 'og_title' => $d['title'] . ' | Competitive Choice', 'og_description' => $d['og'], 'schema_about' => $d['title']],
            'banner' => ['image' => $d['image'], 'title' => $d['banner'], 'lead' => $d['lead']],
            'overview' => ['title' => $d['overview_title'], 'paragraphs' => $d['overview']],
            'equipment' => ['title' => $d['equip_title'], 'description' => $d['equip_desc'], 'items' => array_map(fn($r) => ['title' => $r[0], 'icon' => '', 'image' => '', 'description' => $r[1], 'items' => []], $d['equip'])],
            'applications' => ['title' => $d['apps_title'], 'description' => $d['apps_desc'], 'items' => $pairs($d['apps'], 'title', 'description')],
            'faq' => ['items' => $pairs($d['faq'], 'question', 'answer')],
            'related' => ['title' => 'Related supply requirements', 'links' => array_merge(array_map(fn($r) => ['label' => $r[0], 'link' => $r[1]], $d['related']), [['label' => 'All Products & Supplies', 'link' => 'link:products']])],
        ],
    ];
};
$quote = ['How do I request a quote?', 'Send your product list with quantities, facility type and delivery location. Availability and delivery timing are confirmed during quotation.'];
$enz = fn($f) => 'wp-content/themes/competitive-choice/assets/images/enzyme/' . $f;
$ico = fn($f) => 'wp-content/themes/competitive-choice/assets/images/icons/' . $f;
$cc = fn($slug) => '/supplies/' . $slug . '/';

$enz_def = [
        'title' => 'Enzyme Treatment & Maintainers', 'parent' => 'supplies', 'template' => 'enzyme', 'group' => 'product', 'order' => '21',
        'content' => [
            'seo' => ['title' => 'Enzyme Treatment & Maintainers | Competitive Choice', 'description' => 'Bio-enzymatic drain maintainers, grease trap treatments, odor-digesting enzymes and dosing equipment for kitchens, restrooms and facilities. Request a quote.', 'og_title' => 'Enzyme Treatment & Maintainers | Competitive Choice', 'og_description' => 'Bio-enzymatic maintainers that keep drains and grease traps flowing.', 'schema_about' => 'Enzyme treatment and maintainer products'],
            'banner' => ['image' => $enz('hero.jpg'), 'image_alt' => 'Stainless steel floor drain in a commercial kitchen', 'title' => 'Enzyme Treatments<br>for Cleaner Systems', 'lead' => 'Biological products that break down fats, oils, grease, and organic buildup<br>to maintain clear drains, improve flow, and reduce odors.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'Products & Supplies', 'parent_link' => 'link:products', 'current' => 'Enzyme Treatment & Maintainers'],
            'intro' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => 'Biology that does<br>the heavy lifting', 'paragraphs' => ['Competitive Choice supplies a focused range of bio-enzymatic products for kitchens, restrooms, floor drains and grease traps, chosen to be effective, plumbing-friendly and practical for busy maintenance teams.'],
                'steps' => [
                    ['title' => 'Organic Buildup Collects', 'text' => 'Fats, oils, grease and food waste accumulate in drains, traps and lift stations.', 'image' => $enz('step1.jpg'), 'alt' => 'Cutaway of a plumbing trap clogged with grease'],
                    ['title' => 'Enzymes Break It Down', 'text' => 'Beneficial enzymes and bacteria break down organic material into water-soluble compounds.', 'image' => $enz('step2.jpg'), 'alt' => 'Beneficial bacteria and enzymes breaking down grease in water'],
                    ['title' => 'Cleaner Systems', 'text' => 'Routine treatment controls buildup, prevents clogs, reduces odors and maintains flow.', 'image' => $enz('step3.jpg'), 'alt' => 'Clean plumbing trap with water flowing freely'],
                ]],
            'solutions' => ['kicker' => 'OUR SOLUTIONS', 'title' => 'Enzyme & Maintainer Products We Supply', 'description' => 'Proven bio-enzymatic products for the places where buildup starts.', 'items' => [
                ['title' => 'Drain Maintainers', 'text' => 'Bio-enzymatic liquids and gels that prevent drain buildup.', 'image' => $enz('card1.jpg'), 'alt' => 'Pouring a bio-enzymatic drain maintainer into a floor drain'],
                ['title' => 'Grease Trap Treatments', 'text' => 'Bacterial treatments that digest FOG before it reaches the outlet.', 'image' => $enz('card2.jpg'), 'alt' => 'Technician treating an outdoor grease trap'],
                ['title' => 'Odor-Digesting Enzymes', 'text' => 'Products that eliminate odors at the source.', 'image' => $enz('card3.jpg'), 'alt' => 'Applying an odor-digesting enzyme spray in a restroom'],
                ['title' => 'Application Equipment', 'text' => 'Dosing tools & dispensers for consistent treatment.', 'image' => $enz('card4-prod.jpg'), 'alt' => 'Pump sprayer and wall-mounted two-bottle dispenser'],
                ['title' => 'Related Chemicals', 'text' => 'Cleaners and maintainers for complete drain care.', 'image' => $enz('card5.jpg'), 'alt' => 'Shelf of facility cleaning chemicals'],
            ]],
            'fit' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => 'Where Enzyme<br>Maintainers Work Best', 'description' => 'Facilities with heavy use and organic waste.', 'image' => $enz('band.jpg'), 'image_alt' => 'Pump sprayer applying enzyme foam to a floor drain in a commercial kitchen', 'tagline' => 'Cleaner Systems. Fewer Interruptions. Happier Facilities.', 'items' => [
                ['icon' => 'fork', 'icon_img' => $enz('icon-fork.png'), 'title' => 'Kitchens & Food Service', 'text' => 'Grease-heavy drains and traps that need regular preventive treatment.'],
                ['icon' => 'plus', 'icon_img' => $enz('icon-plus.png'), 'title' => 'Healthcare', 'text' => 'Restrooms, utility sinks and floor drains in clinics and hospitals.'],
                ['icon' => 'building', 'icon_img' => $ico('school.png'), 'title' => 'Education', 'text' => 'Restrooms, utility sinks and floor drains across busy campuses.'],
                ['icon' => 'building', 'icon_img' => $enz('icon-building.png'), 'title' => 'Municipal & Commercial', 'text' => 'Lift stations, restrooms and facilities managing odors and blockages.'],
            ]],
            'process' => ['kicker' => 'A SIMPLE 4-STEP PROCESS', 'title' => 'Your Enzyme Treatment Plan, Made Simple', 'description' => 'From identifying problem drains to selecting the right products and maintaining a consistent treatment routine, Competitive Choice helps simplify every step.', 'items' => [
                ['title' => 'Tell Us Where Problems Start', 'text' => 'Share the kitchens, restrooms, drains or traps causing odor or slow-flow issues.'],
                ['title' => 'We Recommend a Treatment Plan', 'text' => 'We match products and dosing to your system and usage to maximize effectiveness.'],
                ['title' => 'Receive Your Quote', 'text' => 'Clear pricing for products and any dosing equipment, with safety information included.'],
                ['title' => 'Ongoing Replenishment', 'text' => 'We deliver on a schedule that follows your usage so treatment never lapses.'],
            ]],
            'why' => ['title' => 'Why Choose CCI for Enzyme Treatment?', 'description' => 'From grease traps to floor drains, we help facility teams source solutions that fit their maintenance challenges and day-to-day operations.', 'items' => [
                ['icon' => 'sliders', 'title' => 'Product Selection', 'text' => 'Solutions matched to your application'],
                ['icon' => 'shield', 'title' => 'Preventive Focus', 'text' => 'Help manage recurring buildup'],
                ['icon' => 'box', 'title' => 'Convenient Sourcing', 'text' => 'Products for ongoing facility needs'],
                ['icon' => 'calendar', 'title' => 'Routine Support', 'text' => 'Keep maintenance consistent'],
            ]],
            'faq' => ['title' => 'Enzyme Treatment & Maintainers FAQs', 'description' => 'Answers to common selection, specification and sourcing questions.', 'items' => [
                ['question' => 'What do enzyme maintainers do?', 'answer' => 'They use enzymes and beneficial bacteria to digest fats, oils, grease and organic matter in drains and traps, helping prevent clogs and odors.'],
                ['question' => 'Are they safe for plumbing?', 'answer' => 'Biological maintainers are non-corrosive and plumbing-friendly. Review product labels and safety data for your application.'],
                ['question' => 'How often should they be applied?', 'answer' => 'Frequency depends on usage and the system. Tell us about your facility and we will recommend a schedule.'],
                ['question' => 'Can they eliminate existing odors?', 'answer' => 'They work on the source of many drain and trap odors by digesting the organic matter behind them. Severe or structural problems may need additional service, and we can help you decide.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Send your product list with quantities, facility type and delivery location. Availability and delivery timing are confirmed during quotation.'],
            ]],
            'related' => ['title' => 'Related Supplies', 'links' => [['label' => 'Drain & Wastewater Maintenance', 'link' => '/supplies/drain-wastewater-maintenance/'], ['label' => 'Drain Maintenance Service', 'link' => '/services/drain-services/'], ['label' => 'All Products & Supplies', 'link' => 'link:products']]],
        ],
    ];
/** Builds a designed (template "enzyme") supplies page from a compact description. */
$ez_make = function ($slug, $order, $folder, $d) use ($ico, $enz) {
    $img = fn($f) => 'wp-content/themes/competitive-choice/assets/images/' . $folder . '/' . $f;
    $steps = []; foreach ($d['steps'] as $i => $st) $steps[] = ['title' => $st[0], 'text' => $st[1], 'image' => $img('step' . ($i + 1) . '.jpg'), 'alt' => $st[2]];
    $cards = []; foreach ($d['cards'] as $i => $c) $cards[] = ['title' => $c[0], 'text' => $c[1], 'image' => $img('card' . ($i + 1) . '.jpg'), 'alt' => $c[2]];
    $fit = []; foreach ($d['fit'] as $x) $fit[] = ['icon' => 'building', 'icon_img' => $ico($x[0]), 'title' => $x[1], 'text' => $x[2]];
    $why = []; $wi = [['sliders', 'Product Selection'], ['shield', 'Preventive Focus'], ['box', 'Convenient Sourcing'], ['calendar', 'Routine Support']];
    foreach ($wi as $i => $w) $why[] = ['icon' => $w[0], 'title' => $w[1], 'text' => $d['why'][$i]];
    $proc = []; foreach ($d['proc'] as $p) $proc[] = ['title' => $p[0], 'text' => $p[1]];
    $faq = []; foreach ($d['faq'] as $q) $faq[] = ['question' => $q[0], 'answer' => $q[1]];
    $rel = []; foreach ($d['related'] as $r) $rel[] = ['label' => $r[0], 'link' => $r[1]];
    $rel[] = ['label' => 'All Products & Supplies', 'link' => 'link:products'];
    return [
        'title' => $d['title'], 'parent' => 'supplies', 'template' => 'enzyme', 'group' => 'product', 'order' => (string) $order,
        'content' => [
            'seo' => ['title' => ($d['seo_title'] ?? $d['title']) . ' | Competitive Choice', 'description' => $d['seo'], 'og_title' => ($d['seo_title'] ?? $d['title']) . ' | Competitive Choice', 'og_description' => $d['og'], 'schema_about' => $d['title']],
            'banner' => ['image' => $img('hero.jpg'), 'image_alt' => $d['hero_alt'], 'title' => $d['banner'], 'lead' => $d['lead'], 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'Products & Supplies', 'parent_link' => 'link:products', 'current' => $d['title']],
            'intro' => ['kicker' => $d['kicker'] ?? 'BUILT FOR REAL FACILITIES', 'title' => $d['intro_title'], 'paragraphs' => $d['intro'], 'steps' => $steps],
            'solutions' => ['kicker' => 'OUR SOLUTIONS', 'title' => $d['sol_title'], 'description' => $d['sol_desc'], 'items' => $cards],
            'fit' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => $d['fit_title'], 'description' => $d['fit_desc'], 'image' => $img('band.jpg'), 'image_alt' => $d['band_alt'], 'shift' => '0px', 'tagline' => $d['tagline'], 'items' => $fit],
            'process' => ['kicker' => 'A SIMPLE 4-STEP PROCESS', 'title' => $d['proc_title'], 'description' => $d['proc_desc'], 'items' => $proc],
            'why' => ['title' => $d['why_title'], 'description' => $d['why_desc'], 'items' => $why],
            'faq' => ['title' => $d['title'] . ' FAQs', 'description' => 'Answers to common selection, specification and sourcing questions.', 'items' => $faq],
            'related' => ['title' => 'Related Supplies', 'links' => $rel],
        ],
    ];
};
$q_quote = ['How do I request a quote?', 'Send your product list with quantities, facility type and delivery location. Availability and delivery timing are confirmed during quotation.'];
$proc_text = fn($a, $b, $c) => [['Tell Us About Your ' . $a, $b], ['We Recommend Products', $c], ['Receive Your Quote', 'Clear pricing for products and any equipment, with safety information included.'], ['Ongoing Replenishment', 'We deliver on a schedule that follows your usage so supplies never run out.']];
$ez_pages = [];
$ez_pages['custodial-janitorial-sanitation'] = $ez_make('custodial-janitorial-sanitation', 19, 'clean', [
    'title' => 'Cleaning & Sanitation', 'seo_title' => 'Cleaning & Sanitation Supplies',
    'seo' => 'Cleaners, disinfectants, floor care, paper goods, soaps, tools and dispensing systems for hospitals, schools and government buildings. Request a quote.', 'og' => 'Jan/San products for high-traffic, high-compliance facilities.',
    'hero_alt' => 'Bright hospital corridor with a polished floor', 'banner' => 'Cleaning & Sanitation<br>Supplies', 'lead' => 'Janitorial and sanitation products built for<br>high-traffic, high-compliance settings.',
    'intro_title' => 'Clean, safe and<br>inspection-ready', 'intro' => ['Facility hygiene is non-negotiable in any essential environment, especially those serving the public. Competitive Choice helps you create safe, clean and professional spaces with janitorial and sanitation (Jan/San) products built for high-traffic, high-compliance settings.', 'From traditional cleaning tools to advanced formulations in liquid, aerosol and pod formats, we tailor our offering to hospitals, schools, government buildings and commercial facilities.'],
    'steps' => [['Traffic and Soil Build Up', 'Foot traffic, restrooms and shared surfaces collect dirt and germs every day.', 'Soiled commercial restroom floor'], ['Cleaners Go to Work', 'Cleaners and disinfectants remove soil and help control the spread of germs.', 'Disinfectant being sprayed and wiped on a counter'], ['Spaces Stay Inspection-Ready', 'A steady cleaning program keeps facilities clean, stocked and presentable.', 'Clean hospital corridor']],
    'sol_title' => 'Cleaning & Sanitation Products We Supply', 'sol_desc' => 'Everything a custodial program needs, from cleaners to dispensing.',
    'cards' => [['Cleaners & Disinfectants', 'All-purpose and specialty cleaners, disinfectants and deodorizers.', 'Spray bottles and jugs of disinfectant cleaner'], ['Floor Care', 'Floor cleaners, finishes and machines for busy corridors and lobbies.', 'Floor scrubber with a mop and bucket'], ['Paper, Soap & Amenities', 'Bathroom amenities, paper goods, hand soaps and sanitizers.', 'Paper towels, tissue and hand soap'], ['Tools & Waste Receptacles', 'Cleaning tools, carts and waste receptacles for every space.', 'Janitorial cart, mop, broom and waste receptacle'], ['Dispensing Systems', 'Dispensers that control usage and keep supplies consistent.', 'Wall-mounted paper towel and soap dispensers']],
    'fit_title' => 'Where Cleaning Supplies<br>Matter Most', 'fit_desc' => 'High-traffic, high-compliance spaces.', 'tagline' => 'Cleaner Spaces. Safer Users. Inspection-Ready.', 'band_alt' => 'Janitorial cart in a hospital corridor',
    'fit' => [['icon-plus.png', 'Hospitals', 'Disinfectants, cleaners and amenities that support infection control and inspections.'], ['school.png', 'Schools', 'Durable supplies and dispensing for busy campuses and restrooms.'], ['icon-building.png', 'Government Buildings', 'Consistent, professional upkeep for public-facing spaces.'], ['tower.png', 'Commercial Facilities', 'Reliable supplies for offices, retail and shared spaces.']],
    'proc_title' => 'Your Cleaning Program, Made Simple', 'proc_desc' => 'From identifying your cleaning needs to selecting the right products and keeping a steady supply, Competitive Choice helps simplify every step.',
    'proc' => $proc_text('Facility', 'Share your facility type, square footage, traffic and any inspection standards you must meet.', 'We match cleaners, tools and dispensing to your spaces and usage.'),
    'why_title' => 'Why Choose CCI for Cleaning & Sanitation?', 'why_desc' => 'From restrooms to corridors, we help facility teams source products that fit their cleaning programs and day-to-day operations.',
    'why' => ['Solutions matched to your facility', 'Help keep spaces inspection-ready', 'Products for ongoing needs', 'Keep your program consistent'],
    'faq' => [['What Jan/San products do you supply?', 'Cleaners, disinfectants, deodorizers, floor care, bathroom amenities, paper goods, hand soaps, sanitizers, tools, waste receptacles and dispensing systems.'], ['Do you offer different product formats?', 'Yes. We offer liquid, aerosol and pod formulations, along with traditional cleaning tools, to suit different facilities and workflows.'], ['Are there cooperative contracts for custodial supplies?', 'Yes. Custodial and janitorial categories appear on several cooperative contracts, including TIPS and BuyBoard. See our Co-Ops & Schedules page.'], ['Can you help us prepare for a health inspection?', 'Our Jan/San products are chosen for high-compliance settings. Tell us the standards you must meet and we will recommend suitable products.'], $q_quote],
    'related' => [['Odor Control', '/supplies/odor-control-supplies/'], ['Enzyme Treatment & Maintainers', '/supplies/enzyme-treatment-maintainers/']],
]);
$ez_pages['odor-control-supplies'] = $ez_make('odor-control-supplies', 25, 'odor', [
    'title' => 'Odor Control',
    'seo' => 'Odor neutralizers, digesters and deodorizing products for restrooms, plants, kitchens and facilities. Remove odors at the source. Request a quote.', 'og' => 'Odor control products that remove the source, not just the smell.',
    'hero_alt' => 'Clean modern commercial restroom', 'banner' => 'Odor Control Products<br>That Remove the Source', 'lead' => 'Neutralizers and digesters for restrooms, plants,<br>kitchens and public buildings.',
    'intro_title' => 'Eliminate odors instead<br>of covering them up', 'intro' => ['A fragrance only masks an odor for a short time. A neutralizer or digester removes what causes it. For schools, healthcare centers, treatment plants and commercial buildings, that difference matters to occupants and to inspections.', 'Competitive Choice supplies odor control products matched to the source, whether it is organic buildup in a drain, a restroom, a trash room or a lift station.'],
    'steps' => [['The Source Goes Untreated', 'Organic buildup in drains, restrooms and waste areas keeps producing odor.', 'Grimy restroom floor drain and urinal base'], ['Treatment Removes the Cause', 'Neutralizers and digesters break down what the odor comes from.', 'Odor neutralizer sprayed on a floor drain'], ['Spaces Stay Fresh', 'With the source handled, scenting is only a finishing touch.', 'Spotless fresh restroom']],
    'sol_title' => 'Odor Control Products We Supply', 'sol_desc' => 'Targeted solutions for common odor sources.',
    'cards' => [['Odor Neutralizers', 'Liquids and sprays that chemically neutralize odor-causing compounds.', 'Spray bottles and jug of odor neutralizer'], ['Bio-Enzymatic Digesters', 'Products that digest the organic matter odors come from.', 'Jugs of bio-enzymatic digester with a measuring cup'], ['Deodorizing Blocks & Pods', 'Passive products for restrooms, urinals and waste areas.', 'Urinal blocks, screens and deodorizing pods'], ['Air Fresheners & Scenting', 'Refreshers that complete the job once the source is handled.', 'Wall-mounted air freshener dispenser and refills'], ['Dispensers & Sprayers', 'Dosing and spraying tools for consistent treatment.', 'Pump sprayer and wall-mounted dispenser']],
    'fit_title' => 'Where Odor Control<br>Matters Most', 'fit_desc' => 'Places where air quality shapes the experience.', 'tagline' => 'Source Treated. Odors Gone. Spaces Fresh.', 'band_alt' => 'Lift station with an open manhole and a pump sprayer',
    'fit' => [['school.png', 'Schools', 'Restrooms and shared spaces that must stay fresh.'], ['icon-plus.png', 'Healthcare Centers', 'Patient and public areas where air quality matters.'], ['drain.png', 'Treatment Plants & Lift Stations', 'Strong, persistent odors treated at the source.'], ['icon-building.png', 'Commercial & Public Buildings', 'Lobbies, restrooms and waste areas.']],
    'proc_title' => 'Your Odor Control Plan, Made Simple', 'proc_desc' => 'From finding the source to selecting the right products and keeping a steady routine, Competitive Choice helps simplify every step.',
    'proc' => $proc_text('Odor Problem', 'Share the restrooms, drains, waste areas or lift stations where odors start.', 'We match neutralizers, digesters and scenting to the source.'),
    'why_title' => 'Why Choose CCI for Odor Control?', 'why_desc' => 'From restrooms to lift stations, we help facility teams source products that treat odors at the source and fit their day-to-day operations.',
    'why' => ['Solutions matched to the source', 'Stop odors before they return', 'Products for ongoing needs', 'Keep treatment consistent'],
    'faq' => [['What is the best way to control odors?', 'Treat the source. Neutralizers and bio-enzymatic digesters work on the cause, with scenting used as a finishing step.'], ['Do you offer odor control as a service?', 'Yes. See Odor Control and Air Scenting in our Services menu.'], ['Are products safe for occupied buildings?', 'Many products are suited to occupied facilities. Review labels and safety data and tell us your requirements.'], ['Why not just use air fresheners?', 'A fragrance only masks an odor for a short time. Treating the source removes the cause.'], $q_quote],
    'related' => [['Odor Control Services', '/services/odor-control/'], ['Enzyme Treatment & Maintainers', '/supplies/enzyme-treatment-maintainers/']],
]);
$ez_pages['equipment-maintenance'] = $ez_make('equipment-maintenance', 26, 'equip', [
    'title' => 'Equipment Maintenance',
    'seo' => 'Lubricants, degreasers, cleaners, rust inhibitors and protective coatings that extend equipment life and cut downtime. Request a quote.', 'og' => 'Maintenance chemicals that extend equipment life and cut downtime.',
    'hero_alt' => 'Industrial plant floor with motors and pumps', 'banner' => 'Equipment Maintenance<br>Chemicals', 'lead' => 'Lubricants, degreasers and protectants that keep<br>pumps, motors and machinery running.',
    'intro_title' => 'Keep critical equipment<br>running longer', 'intro' => ['Reliable equipment is rarely an accident. It is the result of regular cleaning, lubrication and protection. The right chemicals reduce wear, prevent corrosion and make inspection easier.', 'Competitive Choice supplies high-performance equipment maintenance products for plants, facilities and fleets, helping maintenance teams reduce unplanned downtime.'],
    'steps' => [['Wear and Corrosion Set In', 'Dry bearings, old grease and rust quietly shorten equipment life.', 'Worn, dry and rusty bearing and gear'], ['Maintenance Goes to Work', 'Lubricants, cleaners and protectants restore and protect moving parts.', 'Fresh grease applied with a grease gun'], ['Equipment Keeps Running', 'Well-maintained machines run longer with fewer breakdowns.', 'Clean, well-maintained pump and motor']],
    'sol_title' => 'Equipment Maintenance Products We Supply', 'sol_desc' => 'Everyday products for the shop floor and the plant.',
    'cards' => [['Lubricants & Greases', 'Penetrating oils, greases and dry lubricants for moving parts.', 'Grease gun, grease tubs and oil cans'], ['Degreasers & Cleaners', 'Heavy-duty cleaners that remove oil, grease and grime from equipment.', 'Degreaser jugs and aerosol cans with a brush'], ['Rust & Corrosion Protection', 'Inhibitors and coatings that protect metal surfaces.', 'Rust inhibitor aerosol cans and a coated steel bracket'], ['Electrical Contact Cleaners', 'Fast-drying cleaners for electrical and electronic components.', 'Contact cleaner cans beside a circuit board'], ['Application Equipment', 'Grease guns, oilers and sprayers for accurate application.', 'Grease gun, oil can, pump sprayer and funnel']],
    'fit_title' => 'Where Equipment Maintenance<br>Products Are Used', 'fit_desc' => 'Operations that depend on uptime.', 'tagline' => 'Less Wear. Fewer Breakdowns. Longer Equipment Life.', 'band_alt' => 'Industrial pump station with a grease gun in the foreground',
    'fit' => [['factory.png', 'Plants & Utilities', 'Pumps, motors and mechanical equipment in continuous service.'], ['icon-building.png', 'Facilities & Campuses', 'Building systems and mechanical rooms.'], ['truck.png', 'Fleets', 'Vehicles and heavy equipment that need dependable care.'], ['equipment.png', 'Workshops', 'Shop tools and machinery that need regular upkeep.']],
    'proc_title' => 'Your Maintenance Plan, Made Simple', 'proc_desc' => 'From identifying your equipment needs to selecting the right products and keeping a steady supply, Competitive Choice helps simplify every step.',
    'proc' => $proc_text('Equipment', 'Share the pumps, motors and machines you maintain and how hard they run.', 'We match lubricants, cleaners and protectants to your equipment.'),
    'why_title' => 'Why Choose CCI for Equipment Maintenance?', 'why_desc' => 'From plants to workshops, we help maintenance teams source products that fit their equipment and day-to-day operations.',
    'why' => ['Solutions matched to your equipment', 'Help prevent unplanned downtime', 'Products for ongoing needs', 'Keep maintenance consistent'],
    'faq' => [['What equipment maintenance chemicals do you supply?', 'Lubricants, greases, degreasers, rust and corrosion protection and electrical contact cleaners.'], ['Can you supply tools and MRO items too?', 'Yes. See Facility Maintenance, MRO & Tools.'], ['Do you carry specialty chemicals?', 'Yes. See Specialty Maintenance Chemicals for more options.'], ['How do I pick the right lubricant?', 'It depends on the equipment, load and environment. Tell us what you maintain and we will recommend suitable products.'], $q_quote],
    'related' => [['HVAC Maintenance', '/supplies/hvac-maintenance/'], ['Package Units & HVAC', '/supplies/hvac-package-units/']],
]);
$ez_pages['grounds-seasonal-maintenance'] = $ez_make('grounds-seasonal-maintenance', 27, 'grounds', [
    'title' => 'Grounds & Seasonal Maintenance',
    'seo' => 'Herbicides, ice melt, fertilizers, sprayers and seasonal maintenance supplies for campuses, municipalities and commercial properties. Request a quote.', 'og' => 'Grounds and seasonal supplies for campuses, cities and commercial sites.',
    'hero_alt' => 'Manicured campus lawn and walkway', 'banner' => 'Grounds & Seasonal<br>Maintenance Supplies', 'lead' => 'Supplies for every season, from spring weed control<br>to winter ice management.',
    'intro_title' => 'Well-kept grounds,<br>every season', 'intro' => ['Grounds are the first thing visitors see and the first place a safety issue can appear. Seasonal supplies keep walkways safe, landscapes healthy and properties presentable all year.', 'Competitive Choice supplies grounds and seasonal maintenance products for campuses, municipalities and commercial properties, ready when the season turns.'],
    'steps' => [['Weeds and Weather Take Hold', 'Weeds, patchy turf and winter ice put grounds and walkways at risk.', 'Weeds growing through cracked pavement'], ['Seasonal Treatment Goes On', 'The right products go on at the right time of year.', 'Broadcast spreader applying granular treatment to a lawn'], ['Grounds Stay Safe and Presentable', 'Healthy turf and clear walkways keep properties welcoming all year.', 'Lush manicured campus lawn']],
    'sol_title' => 'Grounds & Seasonal Products We Supply', 'sol_desc' => 'Supplies matched to the calendar.',
    'cards' => [['Weed & Pest Control', 'Herbicides and treatments for lawns, beds and hardscapes.', 'Herbicide jugs with a pump sprayer'], ['Ice Melt & Winter Supplies', 'De-icers and traction products for walkways, lots and entrances.', 'Bucket of ice melt pellets with a scoop and a bag'], ['Fertilizers & Soil Care', 'Products that keep turf and landscaping healthy.', 'Bag of fertilizer with granules and a trowel'], ['Sprayers & Application Tools', 'Sprayers and spreaders for accurate, efficient application.', 'Backpack sprayer and broadcast spreader'], ['Snow & Seasonal Tools', 'Shovels, scrapers, brooms and safety cones for winter work.', 'Snow shovel, ice scraper, push broom and cones']],
    'fit_title' => 'Where Grounds Supplies<br>Are Used', 'fit_desc' => 'Properties that need to stay safe and presentable.', 'tagline' => 'Safe Walkways. Healthy Turf. Ready Every Season.', 'band_alt' => 'Snowy campus walkway with a spreader and ice melt',
    'fit' => [['school.png', 'Schools & Universities', 'Large campuses with walkways, fields and entrances.'], ['grounds.png', 'Municipalities & Parks', 'Public properties maintained year-round.'], ['icon-building.png', 'Commercial Properties', 'Lots, entrances and landscaped areas.']],
    'proc_title' => 'Your Seasonal Plan, Made Simple', 'proc_desc' => 'From identifying your property needs to selecting the right products for each season, Competitive Choice helps simplify every step.',
    'proc' => $proc_text('Property', 'Share your acreage, walkways and the seasons you need covered.', 'We match products and tools to your property and the calendar.'),
    'why_title' => 'Why Choose CCI for Grounds & Seasonal?', 'why_desc' => 'From spring weed control to winter ice management, we help grounds teams source products that fit their properties and schedules.',
    'why' => ['Solutions matched to your property', 'Stay ahead of the season', 'Products for ongoing needs', 'Keep upkeep consistent'],
    'faq' => [['What seasonal supplies do you carry?', 'Weed and pest control, ice melt and winter products, fertilizers and application tools.'], ['Can you stock ahead of the season?', 'Tell us your timing and quantities. Availability and delivery are confirmed during quotation.'], ['Can you ship nationally?', 'Yes. We ship across the United States from Houston and through vendor channels.'], ['Do you supply application tools as well?', 'Yes. Sprayers, spreaders and seasonal hand tools are part of our range.'], $q_quote],
    'related' => [['Equipment Maintenance', '/supplies/equipment-maintenance/'], ['Safety', '/supplies/safety-security/']],
]);
$ez_pages['pool-water-treatment'] = $ez_make('pool-water-treatment', 28, 'pool', [
    'title' => 'Pool & Water Treatment',
    'seo' => 'Sanitizers, balancers, algaecides, test kits and treatment chemicals for pools, fountains and water systems. Request a quote.', 'og' => 'Pool and water treatment chemicals and testing supplies.',
    'hero_alt' => 'Clean blue commercial swimming pool at dusk', 'banner' => 'Pool & Water<br>Treatment Chemicals', 'lead' => 'Sanitizers, balancers and testing supplies for<br>safe, clear and compliant water.',
    'intro_title' => 'Safe, clear water<br>you can count on', 'intro' => ['Pools, fountains and water features need steady chemistry to stay safe and inviting. Consistent testing and treatment protect swimmers, equipment and your reputation.', 'Competitive Choice supplies pool and water treatment products for schools, municipalities, hotels and commercial facilities, with the testing supplies to keep water within range.'],
    'steps' => [['Water Falls Out of Balance', 'Sun, heat and heavy use cloud the water and let algae take hold.', 'Cloudy green pool water with algae'], ['Testing and Treatment', 'Regular testing guides the right sanitizer and balancer doses.', 'Test strip dipped into pool water'], ['Water Stays Clear and Safe', 'Balanced chemistry keeps water clear, safe and inviting.', 'Crystal clear blue pool water']],
    'sol_title' => 'Pool & Water Treatment Products We Supply', 'sol_desc' => 'Chemistry and testing for dependable water quality.',
    'cards' => [['Sanitizers & Oxidizers', 'Chlorine and alternative sanitizers that keep water safe.', 'Tubs of chlorine tablets and granular sanitizer'], ['pH & Alkalinity Balancers', 'Products that keep water chemistry in range.', 'Tubs and jugs of pH and alkalinity balancer'], ['Algaecides & Clarifiers', 'Treatments that prevent algae and keep water clear.', 'Jugs of algaecide and water clarifier'], ['Test Kits & Strips', 'Testing supplies for routine monitoring and documentation.', 'Pool water test kit with vials and strips'], ['Feeders & Pool Tools', 'Chemical feeders, skimmers and poles for daily upkeep.', 'Chemical feeder, skimmer net and pole']],
    'fit_title' => 'Where Water Treatment<br>Products Are Used', 'fit_desc' => 'Facilities responsible for safe water.', 'tagline' => 'Clear Water. Balanced Chemistry. Safe Swimming.', 'band_alt' => 'Commercial pool with a ladder and a test kit on the deck',
    'fit' => [['school.png', 'Schools', 'Pools that serve students and swim teams.'], ['pool.png', 'Recreation Centers', 'Public pools that serve the community.'], ['bed.png', 'Hotels & Hospitality', 'Guest pools, spas and water features.'], ['icon-building.png', 'Municipal Facilities', 'Public pools, splash pads and fountains.']],
    'proc_title' => 'Your Water Treatment Plan, Made Simple', 'proc_desc' => 'From identifying your water needs to selecting the right chemistry and keeping a steady routine, Competitive Choice helps simplify every step.',
    'proc' => $proc_text('Pool', 'Share your pool size, usage and the water problems you are seeing.', 'We match sanitizers, balancers and testing supplies to your water.'),
    'why_title' => 'Why Choose CCI for Pool & Water Treatment?', 'why_desc' => 'From school pools to hotel spas, we help facility teams source chemistry that fits their water and day-to-day operations.',
    'why' => ['Solutions matched to your water', 'Help prevent algae and cloudy water', 'Products for ongoing needs', 'Keep testing consistent'],
    'faq' => [['What pool chemicals do you supply?', 'Sanitizers, pH and alkalinity balancers, algaecides, clarifiers and test kits.'], ['Do you supply water treatment for other systems?', 'Yes. See Drain & Wastewater Maintenance for plant and system products.'], ['Are safe-handling documents available?', 'Safety data sheets are available for products we supply. Ask for them with your inquiry.'], ['How often should water be tested?', 'Public pools are typically tested several times a day. Check your local health code and tell us what you need to document.'], $q_quote],
    'related' => [['Drain & Wastewater Maintenance', '/supplies/drain-wastewater-maintenance/'], ['Chemical Supply Program', '/services/chemical-supply-program/']],
]);

$drn = fn($f) => 'wp-content/themes/competitive-choice/assets/images/drain/' . $f;
$drain_def = [
    'title' => 'Drain & Wastewater Maintenance', 'parent' => 'supplies', 'template' => 'enzyme', 'group' => 'product', 'order' => '22',
    'content' => [
        'seo' => ['title' => 'Drain & Wastewater Maintenance | Competitive Choice', 'description' => 'Drain cleaners, digesters, odor neutralizers and treatment chemicals for drains, lift stations, wet wells and sewer lines. Request a quote.', 'og_title' => 'Drain & Wastewater Maintenance | Competitive Choice', 'og_description' => 'Chemicals and maintenance products for drains and wastewater systems.', 'schema_about' => 'Drain and wastewater maintenance supplies'],
        'banner' => ['image' => $drn('hero.jpg'), 'image_alt' => 'Wastewater treatment plant channel with clear flowing water', 'title' => 'Drain & Wastewater<br>Maintenance Supplies', 'lead' => 'Products that keep drains, lift stations and collection systems<br>flowing, safe and compliant.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
        'breadcrumb' => ['home' => 'Home', 'parent' => 'Products & Supplies', 'parent_link' => 'link:products', 'current' => 'Drain & Wastewater Maintenance'],
        'intro' => ['kicker' => 'KEEP WATER MOVING', 'title' => 'Supplies for systems<br>that cannot back up', 'paragraphs' => ['From a single floor drain to a municipal lift station, wastewater systems need regular maintenance to stay reliable. The right products reduce buildup, control odors and cut down on emergency work.', 'Competitive Choice supplies drain and wastewater maintenance chemicals for facility teams and treatment operators, sourced for performance and ready to ship from Houston.'],
            'steps' => [
                ['title' => 'Buildup and Odors Develop', 'text' => 'Fats, oils, grease and organic matter collect in lines, traps and wet wells.', 'image' => $drn('step1.jpg'), 'alt' => 'Cutaway of a sewer pipe clogged with grease'],
                ['title' => 'Treatment Goes to Work', 'text' => 'Digesters, cleaners and neutralizers break down buildup and control odors at the source.', 'image' => $drn('step2.jpg'), 'alt' => 'Pouring treatment into a wet well'],
                ['title' => 'Systems Keep Flowing', 'text' => 'Routine maintenance keeps lines clear, cuts callouts and avoids emergency work.', 'image' => $drn('step3.jpg'), 'alt' => 'Clean sewer pipe with water flowing freely'],
            ]],
        'solutions' => ['kicker' => 'OUR SOLUTIONS', 'title' => 'Drain & Wastewater Products We Supply', 'description' => 'A focused range for facilities and treatment operations.', 'items' => [
            ['title' => 'Grease Digesters', 'text' => 'Products that break down fats, oils and grease in lines, traps and wet wells.', 'image' => $drn('card1.jpg'), 'alt' => 'Grease digester treatment at an outdoor grease interceptor'],
            ['title' => 'Drain Openers & Cleaners', 'text' => 'Formulations for clearing and maintaining drain lines in routine and urgent situations.', 'image' => $drn('card2.jpg'), 'alt' => 'Pouring drain cleaner into a floor drain'],
            ['title' => 'Odor Neutralizers', 'text' => 'Neutralizers for lift stations, sewer lines and pump stations.', 'image' => $drn('card3.jpg'), 'alt' => 'Worker applying odor neutralizer at a lift station'],
            ['title' => 'Disinfectants & Treatments', 'text' => 'Disinfectants and treatment chemicals for plants and collection systems.', 'image' => $drn('card4.jpg'), 'alt' => 'Chemical room at a water treatment plant'],
            ['title' => 'Dosing Equipment', 'text' => 'Feed pumps, sprayers and dispensers for consistent treatment.', 'image' => $drn('card5-prod.jpg'), 'alt' => 'Chemical dosing pump, feed controller and pump sprayer'],
        ]],
        'fit' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => 'Where These Products<br>Are Used', 'description' => 'Facilities and operators who keep water moving.', 'image' => $drn('band.jpg'), 'shift' => '0px', 'image_alt' => 'Sewer lift station with an open manhole and a pump sprayer', 'tagline' => 'Clear Lines. Fewer Callouts. Safer Systems.', 'items' => [
            ['icon' => 'building', 'icon_img' => $ico('drain.png'), 'title' => 'Water & Wastewater Plants', 'text' => 'Maintenance chemicals for plants, lift stations and wet wells.'],
            ['icon' => 'building', 'icon_img' => $enz('icon-building.png'), 'title' => 'Facilities & Campuses', 'text' => 'Floor drains, restrooms and utility lines across large buildings.'],
            ['icon' => 'fork', 'icon_img' => $enz('icon-fork.png'), 'title' => 'Food Service', 'text' => 'Kitchen drains and grease traps that need dependable, preventive treatment.'],
            ['icon' => 'plus', 'icon_img' => $enz('icon-plus.png'), 'title' => 'Healthcare', 'text' => 'Restrooms, utility sinks and floor drains in clinics and hospitals.'],
        ]],
        'process' => ['kicker' => 'A SIMPLE 4-STEP PROCESS', 'title' => 'Your Drain Maintenance Plan, Made Simple', 'description' => 'From identifying problem lines to selecting the right products and keeping a steady maintenance routine, Competitive Choice helps simplify every step.', 'items' => [
            ['title' => 'Tell Us Where Problems Start', 'text' => 'Share the drains, lift stations, traps or sewer lines causing backups or odors.'],
            ['title' => 'We Recommend Products', 'text' => 'We match digesters, cleaners and neutralizers to your system and usage.'],
            ['title' => 'Receive Your Quote', 'text' => 'Clear pricing for products and any dosing equipment, with safety information included.'],
            ['title' => 'Ongoing Replenishment', 'text' => 'We deliver on a schedule that follows your usage so treatment never lapses.'],
        ]],
        'why' => ['title' => 'Why Choose CCI for Drain & Wastewater Maintenance?', 'description' => 'From floor drains to lift stations, we help facility teams and operators source products that fit their systems and day-to-day operations.', 'items' => [
            ['icon' => 'sliders', 'title' => 'Product Selection', 'text' => 'Solutions matched to your system'],
            ['icon' => 'shield', 'title' => 'Preventive Focus', 'text' => 'Help cut emergency callouts'],
            ['icon' => 'box', 'title' => 'Convenient Sourcing', 'text' => 'Products for ongoing needs'],
            ['icon' => 'calendar', 'title' => 'Routine Support', 'text' => 'Keep maintenance consistent'],
        ]],
        'faq' => ['title' => 'Drain & Wastewater Maintenance FAQs', 'description' => 'Answers to common selection, specification and sourcing questions.', 'items' => [
            ['question' => 'What products do you supply for wastewater maintenance?', 'answer' => 'Grease digesters, odor neutralizers, drain cleaners, disinfectants and related treatment chemicals for facilities and plants.'],
            ['question' => 'Can you support lift stations?', 'answer' => 'Yes. We supply products used in lift stations, wet wells and sewer lines. Share your application and we will recommend suitable options.'],
            ['question' => 'Do you also offer drain care services?', 'answer' => 'Yes. Our Drain Maintenance service provides preventive treatment programs. See the Services menu.'],
            ['question' => 'How do I choose between a digester and a cleaner?', 'answer' => 'Digesters work on buildup over time, while cleaners clear active blockages. Tell us the problem and we will recommend the right product.'],
            ['question' => 'How do I request a quote?', 'answer' => 'Send your product list with quantities, facility type and delivery location. Availability and delivery timing are confirmed during quotation.'],
        ]],
        'related' => ['title' => 'Related Supplies', 'links' => [['label' => 'Enzyme Treatment & Maintainers', 'link' => '/supplies/enzyme-treatment-maintainers/'], ['label' => 'Drain Maintenance Service', 'link' => '/services/drain-services/'], ['label' => 'All Products & Supplies', 'link' => 'link:products']]],
    ],
];

$hv = fn($f) => 'wp-content/themes/competitive-choice/assets/images/hvac/' . $f;
$hvac_def = [
    'title' => 'HVAC Maintenance', 'parent' => 'supplies', 'template' => 'enzyme', 'group' => 'product', 'order' => '23',
    'content' => [
        'seo' => ['title' => 'HVAC Maintenance | Competitive Choice', 'description' => 'Coil cleaners, condensate treatments, corrosion inhibitors and deodorizers that protect HVAC efficiency and extend equipment life. Request a quote.', 'og_title' => 'HVAC Maintenance | Competitive Choice', 'og_description' => 'HVAC maintenance chemicals that protect performance and equipment life.', 'schema_about' => 'HVAC maintenance chemicals and supplies'],
        'banner' => ['image' => $hv('hero.jpg'), 'image_alt' => 'Rooftop HVAC package units on a commercial building', 'title' => 'HVAC Maintenance<br>Chemicals & Supplies', 'lead' => 'Cleaners and treatments that keep coils, drain pans<br>and systems running efficiently.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
        'breadcrumb' => ['home' => 'Home', 'parent' => 'Products & Supplies', 'parent_link' => 'link:products', 'current' => 'HVAC Maintenance'],
        'intro' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => 'Protect efficiency<br>where it starts', 'paragraphs' => ['Dirty coils, slimy drain pans and corrosion quietly raise energy costs and shorten equipment life. Regular maintenance with the right chemistry keeps systems running as designed.', 'Competitive Choice supplies HVAC maintenance chemicals for facility teams and mechanical contractors, selected for performance on commercial equipment and for safe, practical handling.'],
            'steps' => [
                ['title' => 'Buildup Slows the System', 'text' => 'Dust, slime and corrosion collect on coils and in drain pans.', 'image' => $hv('step1.jpg'), 'alt' => 'Dirty HVAC coil clogged with dust and buildup'],
                ['title' => 'Treatment Restores Flow', 'text' => 'Coil cleaners and pan treatments remove buildup and protect metal surfaces.', 'image' => $hv('step2.jpg'), 'alt' => 'Applying foaming coil cleaner to a condenser coil'],
                ['title' => 'Systems Run Efficiently', 'text' => 'Clean coils and clear drains support airflow, comfort and equipment life.', 'image' => $hv('step3.jpg'), 'alt' => 'Clean HVAC coil and condensate pan'],
            ]],
        'solutions' => ['kicker' => 'OUR SOLUTIONS', 'title' => 'HVAC Maintenance Products We Supply', 'description' => 'Chemistry for the components that matter most.', 'items' => [
            ['title' => 'Coil Cleaners', 'text' => 'Foaming and no-rinse cleaners that remove dirt and buildup from coils.', 'image' => $hv('card1.jpg'), 'alt' => 'Foaming coil cleaner on a rooftop condenser coil'],
            ['title' => 'Condensate & Drain Pan Treatments', 'text' => 'Tablets and liquids that help prevent slime, odors and clogged lines.', 'image' => $hv('card2.jpg'), 'alt' => 'Condensate pan treatment tablet in a drain pan'],
            ['title' => 'Corrosion Inhibitors', 'text' => 'Protective treatments that help extend the life of coils and metal parts.', 'image' => $hv('card3.jpg'), 'alt' => 'Applying a protective coating to HVAC coil fins'],
            ['title' => 'Deodorizers & Sanitizers', 'text' => 'Products that freshen and sanitize air-handling components.', 'image' => $hv('card4.jpg'), 'alt' => 'Sanitizing the inside of an air handler'],
            ['title' => 'Application Equipment', 'text' => 'Sprayers and tools for consistent coil and pan treatment.', 'image' => $hv('card5-prod.jpg'), 'alt' => 'Pump sprayer, foaming spray gun and coil fin comb'],
        ]],
        'fit' => ['kicker' => 'BUILT FOR REAL FACILITIES', 'title' => 'Where HVAC Maintenance<br>Supplies Matter', 'description' => 'Buildings that rely on dependable airflow and comfort.', 'image' => $hv('band2.jpg'), 'image_alt' => 'Rooftop HVAC coil being treated with foaming cleaner', 'shift' => '0px', 'tagline' => 'Cleaner Coils. Clear Drains. Longer Equipment Life.', 'items' => [
            ['icon' => 'plus', 'icon_img' => $enz('icon-plus.png'), 'title' => 'Hospitals', 'text' => 'Large systems where air quality and uptime are critical.'],
            ['icon' => 'building', 'icon_img' => $ico('school.png'), 'title' => 'Schools', 'text' => 'Classroom and campus systems that need steady airflow and comfort.'],
            ['icon' => 'building', 'icon_img' => $enz('icon-building.png'), 'title' => 'Government & Commercial Buildings', 'text' => 'Rooftop and package units that need routine care.'],
            ['icon' => 'building', 'icon_img' => $ico('equipment.png'), 'title' => 'Mechanical Contractors', 'text' => 'Reliable supplies for scheduled preventive maintenance.'],
        ]],
        'process' => ['kicker' => 'A SIMPLE 4-STEP PROCESS', 'title' => 'Your HVAC Maintenance Plan, Made Simple', 'description' => 'From identifying problem units to selecting the right products and keeping a steady maintenance routine, Competitive Choice helps simplify every step.', 'items' => [
            ['title' => 'Tell Us About Your Equipment', 'text' => 'Share the unit types, coils or drain pans that need attention and how often they run.'],
            ['title' => 'We Recommend Products', 'text' => 'We match cleaners, treatments and inhibitors to your equipment and usage.'],
            ['title' => 'Receive Your Quote', 'text' => 'Clear pricing for products and any application equipment, with safety information included.'],
            ['title' => 'Ongoing Replenishment', 'text' => 'We deliver on a schedule that follows your maintenance calendar so supplies never run out.'],
        ]],
        'why' => ['title' => 'Why Choose CCI for HVAC Maintenance?', 'description' => 'From rooftop units to air handlers, we help facility teams and contractors source products that fit their equipment and day-to-day operations.', 'items' => [
            ['icon' => 'sliders', 'title' => 'Product Selection', 'text' => 'Solutions matched to your equipment'],
            ['icon' => 'shield', 'title' => 'Preventive Focus', 'text' => 'Protect coils and metal surfaces'],
            ['icon' => 'box', 'title' => 'Convenient Sourcing', 'text' => 'Products for ongoing needs'],
            ['icon' => 'calendar', 'title' => 'Routine Support', 'text' => 'Keep maintenance consistent'],
        ]],
        'faq' => ['title' => 'HVAC Maintenance FAQs', 'description' => 'Answers to common selection, specification and sourcing questions.', 'items' => [
            ['question' => 'What HVAC maintenance products do you supply?', 'answer' => 'Coil cleaners, drain pan and condensate treatments, corrosion inhibitors and deodorizers for commercial HVAC equipment.'],
            ['question' => 'Can you supply equipment as well?', 'answer' => 'Yes. See our Package Units & HVAC category for equipment sourcing.'],
            ['question' => 'Are products safe for coils?', 'answer' => 'Products are selected for use on commercial coils. Confirm compatibility with your equipment manufacturer.'],
            ['question' => 'How often should coils and drain pans be treated?', 'answer' => 'It depends on the equipment, the environment and how heavily it runs. Tell us about your facility and we will recommend a schedule.'],
            ['question' => 'How do I request a quote?', 'answer' => 'Send your product list with quantities, facility type and delivery location. Availability and delivery timing are confirmed during quotation.'],
        ]],
        'related' => ['title' => 'Related Supplies', 'links' => [['label' => 'Package Units & HVAC', 'link' => '/supplies/hvac-package-units/'], ['label' => 'Odor Control', 'link' => '/supplies/odor-control-supplies/'], ['label' => 'All Products & Supplies', 'link' => 'link:products']]],
    ],
];

return [
    'enzyme-treatment-maintainers' => $enz_def,
    'custodial-janitorial-sanitation' => $ez_pages['custodial-janitorial-sanitation'],

    'drain-wastewater-maintenance' => $drain_def,

    'hvac-maintenance' => $hvac_def,

    'odor-control-supplies' => $ez_pages['odor-control-supplies'],
    'equipment-maintenance' => $ez_pages['equipment-maintenance'],
    'grounds-seasonal-maintenance' => $ez_pages['grounds-seasonal-maintenance'],
    'pool-water-treatment' => $ez_pages['pool-water-treatment'],
];
