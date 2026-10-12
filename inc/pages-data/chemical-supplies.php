<?php
/** Chemical Supplies pages (Category Page template, "product" group), built from compact definitions. */

if (!defined('ABSPATH')) exit;

$build = function ($slug, $order, $d) {
    $pairs = fn($rows, $k1, $k2) => array_map(fn($r) => [$k1 => $r[0], $k2 => $r[1]], $rows);
    return [
        'title' => $d['title'], 'parent' => 'products-and-materials', 'template' => 'category', 'group' => 'product', 'order' => (string) $order,
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
$cc = fn($slug) => '/products-and-materials/' . $slug . '/';

return [
    'enzyme-treatment-maintainers' => $build('enzyme-treatment-maintainers', 21, [
        'title' => 'Enzyme Treatment & Maintainers', 'image' => 'chem-enzyme-banner.jpg',
        'seo' => 'Bio-enzymatic drain, grease trap and odor maintainers for kitchens, restrooms and facilities. Eco-conscious products that digest organic buildup. Request a quote.',
        'og' => 'Bio-enzymatic maintainers that keep drains and grease traps flowing.',
        'banner' => 'Enzyme Treatment & Maintainers for Cleaner, Freer-Flowing Systems', 'lead' => 'Biological products that digest the grease and organic buildup behind clogs, odors and callouts.',
        'overview_title' => 'Biology that does the heavy lifting',
        'overview' => ['Enzyme and bacterial maintainers work with your plumbing instead of against it. They break down fats, oils, grease and organic residue where it collects, so lines stay clear and smells do not take hold.', 'Competitive Choice supplies a focused range of bio-enzymatic products for kitchens, restrooms, floor drains and grease traps, chosen to be effective, plumbing-friendly and practical for busy maintenance teams.'],
        'equip_title' => 'Enzyme and maintainer products we supply', 'equip_desc' => 'Preventive products for the places buildup starts.',
        'equip' => [['Drain Maintainers', 'Liquid and gel bio-enzymatic products that keep floor drains, sinks and traps free of organic buildup.'], ['Grease Trap Treatments', 'Bacterial treatments that digest fats, oils and grease before they reach the trap outlet.'], ['Odor-Digesting Enzymes', 'Products that remove the source of odors rather than masking them.'], ['Application Equipment', 'Dosing tools and dispensers that make routine treatment simple and consistent.']],
        'apps_title' => 'Where enzyme maintainers work best', 'apps_desc' => 'Facilities with heavy use and organic waste.',
        'apps' => [['Kitchens & food service', 'Grease-heavy drains and traps that need regular preventive treatment.'], ['Healthcare & education', 'Restrooms, utility sinks and floor drains in high-use buildings.'], ['Municipal & commercial', 'Lift stations, restrooms and facilities managing odors and backups.']],
        'faq' => [['What do enzyme maintainers do?', 'They use enzymes and beneficial bacteria to digest fats, oils, grease and organic matter in drains and traps, helping prevent clogs and odors.'], ['Are they safe for plumbing?', 'Biological maintainers are non-corrosive and plumbing-friendly. Review product labels and safety data for your application.'], ['How often should they be applied?', 'Frequency depends on usage and the system. Tell us about your facility and we will recommend a schedule.'], $quote],
        'related' => [['Drain & Wastewater Maintenance', $cc('drain-wastewater-maintenance')], ['Drain Maintenance Service', '/services/drain-services/']],
    ]),

    'drain-wastewater-maintenance' => $build('drain-wastewater-maintenance', 22, [
        'title' => 'Drain & Wastewater Maintenance', 'image' => 'chem-drain-banner.jpg',
        'seo' => 'Drain cleaners, digesters, odor neutralizers and treatment chemicals for drains, lift stations, wet wells and sewer lines. Request a quote.',
        'og' => 'Chemicals and maintenance products for drains and wastewater systems.',
        'banner' => 'Drain & Wastewater Maintenance Supplies', 'lead' => 'Products that keep drains, lift stations and collection systems flowing, safe and compliant.',
        'overview_title' => 'Supplies for systems that cannot afford to back up',
        'overview' => ['From a single floor drain to a municipal lift station, wastewater systems need regular maintenance to stay reliable. The right products reduce buildup, control odors and cut down on emergency work.', 'Competitive Choice supplies drain and wastewater maintenance chemicals for facility teams and treatment operators, sourced for performance and ready to ship from Houston.'],
        'equip_title' => 'Drain and wastewater products we supply', 'equip_desc' => 'A focused range for facilities and treatment operations.',
        'equip' => [['Grease Digesters', 'Products that break down fats, oils and grease in lines, traps and wet wells.'], ['Drain Openers & Cleaners', 'Formulations for clearing and maintaining drain lines in routine and urgent situations.'], ['Odor Neutralizers', 'Neutralizers for lift stations, sewer lines and pump stations.'], ['Disinfectants & Treatments', 'Disinfectants and treatment chemicals for plants and collection systems.']],
        'apps_title' => 'Where these products are used', 'apps_desc' => 'Facilities and operators who keep water moving.',
        'apps' => [['Water & wastewater plants', 'Maintenance chemicals for plants, lift stations and wet wells.'], ['Facilities & campuses', 'Floor drains, restrooms and utility lines across large buildings.'], ['Food service & healthcare', 'High-use drains that need dependable, preventive treatment.']],
        'faq' => [['What products do you supply for wastewater maintenance?', 'Grease digesters, odor neutralizers, drain cleaners, disinfectants and related treatment chemicals for facilities and plants.'], ['Can you support lift stations?', 'Yes. We supply products used in lift stations, wet wells and sewer lines. Share your application and we will recommend suitable options.'], ['Do you also offer drain care services?', 'Yes. Our Drain Maintenance service provides preventive treatment programs. See the Services menu.'], $quote],
        'related' => [['Enzyme Treatment & Maintainers', $cc('enzyme-treatment-maintainers')], ['Water & Wastewater Treatment', $cc('water-wastewater-treatment')]],
    ]),

    'hvac-maintenance' => $build('hvac-maintenance', 23, [
        'title' => 'HVAC Maintenance', 'image' => 'chem-hvac-banner.jpg',
        'seo' => 'Coil cleaners, condensate treatments, corrosion inhibitors and filters-care chemicals that protect HVAC efficiency and extend equipment life. Request a quote.',
        'og' => 'HVAC maintenance chemicals that protect performance and equipment life.',
        'banner' => 'HVAC Maintenance Chemicals & Supplies', 'lead' => 'Cleaners and treatments that keep coils, drain pans and systems running efficiently.',
        'overview_title' => 'Protect efficiency where it starts',
        'overview' => ['Dirty coils, slimy drain pans and corrosion quietly raise energy costs and shorten equipment life. Regular maintenance with the right chemistry keeps systems running as designed.', 'Competitive Choice supplies HVAC maintenance chemicals for facility teams and mechanical contractors, selected for performance on commercial equipment and for safe, practical handling.'],
        'equip_title' => 'HVAC maintenance products we supply', 'equip_desc' => 'Chemistry for the components that matter most.',
        'equip' => [['Coil Cleaners', 'Foaming and no-rinse cleaners that remove dirt and buildup from evaporator and condenser coils.'], ['Condensate & Drain Pan Treatments', 'Tablets and liquids that help prevent slime, odors and clogged condensate lines.'], ['Corrosion Inhibitors', 'Protective treatments that help extend the life of coils and metal components.'], ['Deodorizers & Sanitizers', 'Products that freshen and sanitize air-handling components.']],
        'apps_title' => 'Where HVAC maintenance supplies matter', 'apps_desc' => 'Buildings that depend on dependable airflow and comfort.',
        'apps' => [['Hospitals & schools', 'Large systems where air quality and uptime are critical.'], ['Government & commercial buildings', 'Rooftop and package units that need routine care.'], ['Mechanical contractors', 'Reliable supplies for scheduled preventive maintenance.']],
        'faq' => [['What HVAC maintenance products do you supply?', 'Coil cleaners, drain pan and condensate treatments, corrosion inhibitors and deodorizers for commercial HVAC equipment.'], ['Can you supply equipment as well?', 'Yes. See our HVAC & Package Units category for equipment sourcing.'], ['Are products safe for coils?', 'Products are selected for use on commercial coils. Confirm compatibility with your equipment manufacturer.'], $quote],
        'related' => [['Package Units & HVAC', $cc('hvac-package-units')], ['Odor Control', $cc('odor-control-supplies')]],
    ]),

    'odor-control-supplies' => $build('odor-control-supplies', 25, [
        'title' => 'Odor Control', 'image' => 'chem-odor-banner.jpg',
        'seo' => 'Odor neutralizers, digesters and deodorizing products for restrooms, plants, kitchens and facilities. Remove odors at the source. Request a quote.',
        'og' => 'Odor control products that remove the source, not just the smell.',
        'banner' => 'Odor Control Products That Remove the Source', 'lead' => 'Neutralizers and digesters for restrooms, plants, kitchens and public buildings.',
        'overview_title' => 'Eliminate odors instead of covering them up',
        'overview' => ['A fragrance masks an odor for a few minutes. A neutralizer or digester removes what causes it. For schools, healthcare centers, treatment plants and commercial buildings, that difference matters to occupants and to inspections.', 'Competitive Choice supplies odor control products matched to the source, whether it is organic buildup in a drain, a restroom, a trash room or a lift station.'],
        'equip_title' => 'Odor control products we supply', 'equip_desc' => 'Targeted solutions for common odor sources.',
        'equip' => [['Odor Neutralizers', 'Liquids and sprays that chemically neutralize odor-causing compounds.'], ['Bio-Enzymatic Digesters', 'Products that digest the organic matter odors come from.'], ['Deodorizing Blocks & Pods', 'Passive products for restrooms, urinals and waste areas.'], ['Air Fresheners & Scenting', 'Refreshers that complete the job once the source is handled.']],
        'apps_title' => 'Where odor control matters most', 'apps_desc' => 'Places where air quality shapes the experience.',
        'apps' => [['Schools & healthcare centers', 'Restrooms and shared spaces that must stay fresh.'], ['Treatment plants & lift stations', 'Strong, persistent odors at the source.'], ['Commercial & public buildings', 'Lobbies, restrooms and waste areas.']],
        'faq' => [['What is the best way to control odors?', 'Treat the source. Neutralizers and bio-enzymatic digesters work on the cause, with scenting used as a finishing step.'], ['Do you offer odor control as a service?', 'Yes. See Odor Control and Air Scenting in our Services menu.'], ['Are products safe for occupied buildings?', 'Many products are suited to occupied facilities. Review labels and safety data and tell us your requirements.'], $quote],
        'related' => [['Odor Control Services', '/services/odor-control/'], ['Enzyme Treatment & Maintainers', $cc('enzyme-treatment-maintainers')]],
    ]),

    'equipment-maintenance' => $build('equipment-maintenance', 26, [
        'title' => 'Equipment Maintenance', 'image' => 'chem-equipment-banner.jpg',
        'seo' => 'Lubricants, degreasers, cleaners, rust inhibitors and protective coatings that extend equipment life and cut downtime. Request a quote.',
        'og' => 'Maintenance chemicals that extend equipment life and cut downtime.',
        'banner' => 'Equipment Maintenance Chemicals', 'lead' => 'Lubricants, degreasers and protectants that keep pumps, motors and machinery running.',
        'overview_title' => 'Keep critical equipment running longer',
        'overview' => ['Reliable equipment is rarely an accident. It is the result of regular cleaning, lubrication and protection. The right chemicals reduce wear, prevent corrosion and make inspection easier.', 'Competitive Choice supplies high-performance equipment maintenance products for plants, facilities and fleets, helping maintenance teams reduce unplanned downtime.'],
        'equip_title' => 'Equipment maintenance products we supply', 'equip_desc' => 'Everyday products for the shop floor and the plant.',
        'equip' => [['Lubricants & Greases', 'Penetrating oils, greases and dry lubricants for moving parts.'], ['Degreasers & Cleaners', 'Heavy-duty cleaners that remove oil, grease and grime from equipment.'], ['Rust & Corrosion Protection', 'Inhibitors and coatings that protect metal surfaces.'], ['Electrical Contact Cleaners', 'Fast-drying cleaners for electrical and electronic components.']],
        'apps_title' => 'Where equipment maintenance products are used', 'apps_desc' => 'Operations that depend on uptime.',
        'apps' => [['Plants & utilities', 'Pumps, motors and mechanical equipment in continuous service.'], ['Facilities & campuses', 'Building systems and shop equipment.'], ['Fleets & workshops', 'Vehicles and tools that need dependable care.']],
        'faq' => [['What equipment maintenance chemicals do you supply?', 'Lubricants, greases, degreasers, rust and corrosion protection and electrical contact cleaners.'], ['Can you supply tools and MRO items too?', 'Yes. See Facility Maintenance, MRO & Tools.'], ['Do you carry specialty chemicals?', 'Yes. See Specialty Maintenance Chemicals for more options.'], $quote],
        'related' => [['Facility Maintenance, MRO & Tools', $cc('facility-maintenance-mro-tools')], ['Specialty Maintenance Chemicals', $cc('specialty-maintenance-chemicals')]],
    ]),

    'grounds-seasonal-maintenance' => $build('grounds-seasonal-maintenance', 27, [
        'title' => 'Grounds & Seasonal Maintenance', 'image' => 'chem-grounds-banner.jpg',
        'seo' => 'Herbicides, ice melt, fertilizers, sprayers and seasonal maintenance supplies for campuses, municipalities and commercial properties. Request a quote.',
        'og' => 'Grounds and seasonal supplies for campuses, cities and commercial sites.',
        'banner' => 'Grounds & Seasonal Maintenance Supplies', 'lead' => 'Supplies for every season, from spring weed control to winter ice management.',
        'overview_title' => 'Well-kept grounds, every season',
        'overview' => ['Grounds are the first thing visitors see and the first place a safety issue can appear. Seasonal supplies keep walkways safe, landscapes healthy and properties presentable all year.', 'Competitive Choice supplies grounds and seasonal maintenance products for campuses, municipalities and commercial properties, ready when the season turns.'],
        'equip_title' => 'Grounds and seasonal products we supply', 'equip_desc' => 'Supplies matched to the calendar.',
        'equip' => [['Weed & Pest Control', 'Herbicides and treatments for lawns, beds and hardscapes.'], ['Ice Melt & Winter Supplies', 'De-icers and traction products for walkways, lots and entrances.'], ['Fertilizers & Soil Care', 'Products that keep turf and landscaping healthy.'], ['Sprayers & Application Tools', 'Sprayers and spreaders for accurate, efficient application.']],
        'apps_title' => 'Where grounds supplies are used', 'apps_desc' => 'Properties that need to stay safe and presentable.',
        'apps' => [['Schools & universities', 'Large campuses with walkways, fields and entrances.'], ['Municipalities & parks', 'Public properties managed across seasons.'], ['Commercial properties', 'Lots, entrances and landscaped areas.']],
        'faq' => [['What seasonal supplies do you carry?', 'Weed and pest control, ice melt and winter products, fertilizers and application tools.'], ['Can you stock ahead of the season?', 'Tell us your timing and quantities. Availability and delivery are confirmed during quotation.'], ['Can you ship nationally?', 'Yes. We ship across the United States from Houston and through vendor channels.'], $quote],
        'related' => [['Facility Maintenance, MRO & Tools', $cc('facility-maintenance-mro-tools')], ['Safety', $cc('safety-security')]],
    ]),

    'pool-water-treatment' => $build('pool-water-treatment', 28, [
        'title' => 'Pool & Water Treatment', 'image' => 'chem-pool-banner.jpg',
        'seo' => 'Sanitizers, balancers, algaecides, test kits and treatment chemicals for pools, fountains and water systems. Request a quote.',
        'og' => 'Pool and water treatment chemicals and testing supplies.',
        'banner' => 'Pool & Water Treatment Chemicals', 'lead' => 'Sanitizers, balancers and testing supplies for safe, clear and compliant water.',
        'overview_title' => 'Safe, clear water you can count on',
        'overview' => ['Pools, fountains and water features need steady chemistry to stay safe and inviting. Consistent testing and treatment protect swimmers, equipment and your reputation.', 'Competitive Choice supplies pool and water treatment products for schools, municipalities, hotels and commercial facilities, with the testing supplies to keep water within range.'],
        'equip_title' => 'Pool and water treatment products we supply', 'equip_desc' => 'Chemistry and testing for dependable water quality.',
        'equip' => [['Sanitizers & Oxidizers', 'Chlorine and alternative sanitizers that keep water safe.'], ['pH & Alkalinity Balancers', 'Products that keep water chemistry in range.'], ['Algaecides & Clarifiers', 'Treatments that prevent algae and keep water clear.'], ['Test Kits & Strips', 'Testing supplies for routine monitoring and documentation.']],
        'apps_title' => 'Where water treatment products are used', 'apps_desc' => 'Facilities responsible for safe water.',
        'apps' => [['Schools & recreation centers', 'Pools that serve students and the public.'], ['Hotels & hospitality', 'Guest pools, spas and water features.'], ['Municipal facilities', 'Public pools, splash pads and fountains.']],
        'faq' => [['What pool chemicals do you supply?', 'Sanitizers, pH and alkalinity balancers, algaecides, clarifiers and test kits.'], ['Do you supply water treatment for other systems?', 'Yes. See Water & Wastewater Treatment for plant and system products.'], ['Are safe-handling documents available?', 'Safety data sheets are available for products we supply. Ask for them with your inquiry.'], $quote],
        'related' => [['Water & Wastewater Treatment', $cc('water-wastewater-treatment')], ['Specialty Maintenance Chemicals', $cc('specialty-maintenance-chemicals')]],
    ]),
];
