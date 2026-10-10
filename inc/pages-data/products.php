<?php
/** Product category pages (Category Page template). Shared blocks are added by cc_page_build(). */

if (!defined('ABSPATH')) exit;

return [
    'water-wastewater-treatment' => [
        'title' => 'Water & Wastewater Treatment',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '11',
        'content' => [
            'seo' => [
                'title' => 'Water & Wastewater Treatment Chemicals | Competitive Choice',
                'description' => 'Grease digesters, odor neutralizers, disinfectants and corrosion and scale inhibitors for water and wastewater plants and lift stations. Request a quote.',
                'og_title' => 'Water & Wastewater Treatment Chemicals | Competitive Choice',
                'og_description' => 'Maintenance chemicals and cleaning products for treatment plants, lift stations, wet wells and sewer lines. Send your requirement for a quote.',
                'schema_about' => 'Water and wastewater treatment maintenance chemicals',
            ],
            'banner' => [
                'image' => 'product-water.jpg',
                'title' => 'Water & Wastewater Treatment Solutions',
                'lead' => 'Maintenance chemicals and cleaning products that keep treatment plants, lift stations and sewer lines running efficiently, safely and in compliance.',
            ],
            'overview' => [
                'title' => 'Treatment solutions for resilient water infrastructure',
                'paragraphs' => ['Competitive Choice supplies targeted products that support the daily operations of water and wastewater treatment facilities. We specialize in essential maintenance chemicals and cleaning products that help keep systems running efficiently, safely and in line with regulatory standards.', 'Our range includes grease digesters, odor neutralizers, disinfectants, corrosion and scale inhibitors and enzyme-based treatments for lift stations, sewer lines, wet wells and plant maintenance. These products help reduce buildup, improve flow and extend the life of critical system components while limiting environmental impact.', 'We work closely with maintenance teams to identify practical, cost-effective options for each operation, whether you are tackling a persistent odor or grease problem or confirming a disinfection protocol.'],
            ],
            'equipment' => [
                'title' => 'Products for water and wastewater operations',
                'description' => 'A focused range of treatment and maintenance products for plants, pump stations and collection systems.',
                'items' => [
                    [
                        'title' => 'Grease & Odor Control',
                        'icon' => '',
                        'image' => 'water-1.jpg',
                        'description' => 'Grease digesters and odor neutralizers that break down fats, oils and grease and remove odors at the source in lift stations and sewer lines.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Disinfection & Sanitizing',
                        'icon' => '',
                        'image' => 'water-2.jpg',
                        'description' => 'Disinfectants and sanitizing products that support proper disinfection protocols across plant and field maintenance.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Corrosion, Scale & Enzyme Treatments',
                        'icon' => '',
                        'image' => 'water-3.jpg',
                        'description' => 'Corrosion and scale inhibitors protect equipment, while enzyme-based treatments control buildup and improve flow in wet wells, sewer lines and plant systems.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Built for the places water systems struggle',
                'description' => 'Start with the application, then choose the treatment your operation needs.',
                'items' => [
                    [
                        'title' => 'Lift stations & wet wells',
                        'description' => 'Treatments that control grease, odor and buildup in pump stations where problems build quickly.',
                    ],
                    [
                        'title' => 'Sewer lines & collection systems',
                        'description' => 'Products that help keep lines flowing, reduce blockages and limit odor complaints along the system.',
                    ],
                    [
                        'title' => 'Treatment plants',
                        'description' => 'Disinfectants, inhibitors and maintenance chemicals for day-to-day plant upkeep and compliance.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What water and wastewater products does Competitive Choice supply?',
                        'answer' => 'We supply grease digesters, odor neutralizers, disinfectants, corrosion and scale inhibitors and enzyme-based treatments for lift stations, sewer lines, wet wells and plant maintenance. Share your application and our team will review options.',
                    ],
                    [
                        'question' => 'How do enzyme-based treatments help wastewater systems?',
                        'answer' => 'Enzyme and biological treatments help break down fats, oils, grease and organic matter that build up in lines and wet wells. This can improve flow and reduce odor. The right product depends on your system and conditions.',
                    ],
                    [
                        'question' => 'Can you help with persistent odor or grease problems?',
                        'answer' => 'Yes. Our team works with maintenance staff to identify practical options for odor and grease issues. Describe the location, the problem and what you have already tried so we can recommend a suitable approach.',
                    ],
                    [
                        'question' => 'Are eco-friendly options available?',
                        'answer' => 'Many products in our line are free of petroleum solvents and standard detergents and are biodegradable. Availability varies by product, so ask about environmental requirements when you submit your inquiry.',
                    ],
                    [
                        'question' => 'What information is needed to request a quote?',
                        'answer' => 'Include the product type, the application, quantities, any safety data sheet or compliance requirements, and your delivery location and timing. Product suitability and availability are confirmed during the quotation process.',
                    ],
                    [
                        'question' => 'Which facilities use these products?',
                        'answer' => 'Water and wastewater treatment plants, lift stations, wet wells, pump stations and sewer collection systems use them for daily maintenance. Tell us about your site and we will review options.',
                    ],
                    [
                        'question' => 'Do you supply safety data sheets?',
                        'answer' => 'Include safety data sheet and compliance needs in your inquiry so we can confirm documentation for the products you choose.',
                    ],
                    [
                        'question' => 'Can these products be bought through cooperative contracts?',
                        'answer' => 'Cooperative contracts such as TIPS and BuyBoard cover related facility, chemical and janitorial categories. Tell us which vehicle you use and we will confirm what applies.',
                    ],
                    [
                        'question' => 'How quickly can I receive product?',
                        'answer' => 'Availability and delivery timing are confirmed during quotation. Share your required date early so our team can plan around it.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Specialty Maintenance Chemicals',
                        'link' => '/products/specialty-maintenance-chemicals/',
                    ],
                    [
                        'label' => 'Odor Control Services',
                        'link' => '/services/odor-control/',
                    ],
                    [
                        'label' => 'Drain Services',
                        'link' => '/services/drain-services/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'fire-safety' => [
        'title' => 'Fire & Safety',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '12',
        'content' => [
            'seo' => [
                'title' => 'Lithium-Ion Battery Fire Protection | Competitive Choice',
                'description' => 'FCLX adds a layer of protection where lithium-ion batteries are stored, charged or used. For facilities, warehouses and schools. Ask for details.',
                'og_title' => 'Lithium-Ion Battery Fire Protection (FCLX) | Competitive Choice',
                'og_description' => 'Proactive fire protection for lithium-ion battery storage and charging areas. Learn how FCLX supports safer facilities.',
                'schema_about' => 'Fire and safety products, including lithium-ion battery fire protection',
            ],
            'banner' => [
                'image' => 'product-fire.jpg',
                'title' => 'Fire & Safety: Protecting What Matters',
                'lead' => 'Lithium-ion batteries power many essential tools, but damage, poor storage or overheating can create serious fire risks. FCLX adds a layer of protection.',
            ],
            'overview' => [
                'title' => 'Lithium-ion battery fire protection built in, not bolted on',
                'paragraphs' => ['Lithium-ion batteries power many of today’s essential tools and technologies. When they are damaged, improperly stored or overheated, they can pose serious fire and safety risks.', 'FCLX is designed to help mitigate those risks by providing an added layer of protection where lithium-ion batteries are stored, charged or used. Engineered for environments that demand safety and reliability, it supports proactive fire prevention by addressing early-stage thermal events before they escalate.', 'It suits facilities, warehouses, schools, transportation hubs and industrial settings. Protection should not be reactive, it should be built in.'],
            ],
            'equipment' => [
                'title' => 'Where FCLX fits in your safety plan',
                'description' => 'Added protection for the places lithium-ion batteries are kept and used.',
                'items' => [
                    [
                        'title' => 'Battery Storage',
                        'icon' => '',
                        'image' => 'fire-1.jpg',
                        'description' => 'An extra layer of protection where lithium-ion batteries and battery-powered equipment are kept between uses.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Charging Areas',
                        'icon' => '',
                        'image' => 'fire-2.jpg',
                        'description' => 'Support for charging rooms and stations, where heat and electrical load raise the chance of a thermal event.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Everyday Use',
                        'icon' => '',
                        'image' => 'fire-3.jpg',
                        'description' => 'Protection that addresses early-stage thermal events before they escalate where batteries and cordless tools are used every day.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Designed for demanding environments',
                'description' => 'Facilities that store or charge batteries in volume benefit most from proactive protection.',
                'items' => [
                    [
                        'title' => 'Warehouses & industrial sites',
                        'description' => 'Battery-powered equipment, forklifts and tools are stored and charged in volume.',
                    ],
                    [
                        'title' => 'Schools & public facilities',
                        'description' => 'Devices and equipment are charged and stored where many people gather.',
                    ],
                    [
                        'title' => 'Transportation hubs',
                        'description' => 'Fleets, chargers and passenger devices create concentrated battery storage and charging areas.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What is FCLX?',
                        'answer' => 'FCLX is designed to add a layer of protection where lithium-ion batteries are stored, charged or used. It supports proactive fire prevention by addressing early-stage thermal events before they escalate.',
                    ],
                    [
                        'question' => 'Where is lithium-ion battery fire protection most useful?',
                        'answer' => 'It is useful wherever batteries are stored, charged or used, including facilities, warehouses, schools, transportation hubs and industrial settings.',
                    ],
                    [
                        'question' => 'Does this replace fire code requirements or other fire protection?',
                        'answer' => 'No. It is an added layer of protection and does not replace code requirements, detection or suppression systems. Confirm requirements with your fire authority and safety professionals.',
                    ],
                    [
                        'question' => 'How do I get more information or a quote?',
                        'answer' => 'Contact our team with your facility type, where batteries are stored or charged, and your quantities. We will share details and discuss next steps.',
                    ],
                    [
                        'question' => 'What risks do lithium-ion batteries create?',
                        'answer' => 'When damaged, improperly stored or overheated, lithium-ion batteries can pose serious fire and safety risks. Protection should be proactive, not reactive.',
                    ],
                    [
                        'question' => 'Who should consider FCLX?',
                        'answer' => 'Any facility that stores, charges or uses lithium-ion batteries, including warehouses, schools, transportation hubs and industrial settings.',
                    ],
                    [
                        'question' => 'Does it work alongside other safety measures?',
                        'answer' => 'It is designed as an added layer of protection. Keep your detection, suppression and storage practices in place and confirm requirements with your fire authority.',
                    ],
                    [
                        'question' => 'What should I include when I ask about FCLX?',
                        'answer' => 'Describe your facility, where batteries are stored, charged or used, the quantities involved and any code or insurance requirements. Our team will share details and next steps.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Safety & Security',
                        'link' => '/products/safety-security/',
                    ],
                    [
                        'label' => 'Facility Maintenance, MRO & Tools',
                        'link' => '/products/facility-maintenance-mro-tools/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'hvac-package-units' => [
        'title' => 'HVAC & HVAC Package Units',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '13',
        'content' => [
            'seo' => [
                'title' => 'HVAC Maintenance Chemicals & Coil Cleaners | Competitive Choice',
                'description' => 'Non-acidic coil cleaners, corrosion inhibitors, condensate pan treatments and degreasers for commercial HVAC and package units. Request a quote.',
                'og_title' => 'HVAC Coil Cleaners & Maintenance Chemicals | Competitive Choice',
                'og_description' => 'Field-proven HVAC maintenance products that protect uptime, airflow and efficiency. Send your requirement for a quote.',
                'schema_about' => 'HVAC and package unit maintenance products',
            ],
            'banner' => [
                'image' => 'product-hvac.jpg',
                'title' => 'HVAC & HVAC Package Unit Solutions',
                'lead' => 'Maintenance products that protect performance in sensitive environments, from coil cleaners to corrosion inhibitors and condensate pan treatments.',
            ],
            'overview' => [
                'title' => 'Protecting performance in sensitive environments',
                'paragraphs' => ['In mission-critical environments, the performance of HVAC and packaged HVAC units matters. These systems protect occupant comfort, sensitive equipment and regulatory compliance, and keeping them running takes a complete maintenance approach with products made to improve efficiency, extend service life and cut downtime.', 'Our HVAC maintenance range includes high-performance coil cleaners, corrosion inhibitors, condensate pan treatments, degreasers and disinfectants for commercial and industrial systems. Non-acidic coil cleaners restore airflow and heat exchange by removing dirt, biological buildup and particulate matter, and non-rinsing evaporative cleaners suit hard-to-reach or in-service units.', 'Routine use helps prevent odor, coil fouling, microbial growth and corrosion, which are common causes of system failure and wasted energy. Cleaner systems reduce the risk of outages, improve indoor air quality and protect high-value infrastructure.'],
            ],
            'equipment' => [
                'title' => 'HVAC maintenance products we supply',
                'description' => 'Field-proven products for commercial and industrial HVAC systems and package units.',
                'items' => [
                    [
                        'title' => 'Coil Cleaners',
                        'icon' => '',
                        'image' => 'hvac-1.jpg',
                        'description' => 'Non-acidic coil cleaners that restore airflow and heat exchange, plus non-rinsing evaporative cleaners for in-service units.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Corrosion Inhibitors',
                        'icon' => '',
                        'image' => 'hvac-2.jpg',
                        'description' => 'Protective products that slow corrosion on coils, cabinets and components to extend the life of package units.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Condensate Pan Treatments',
                        'icon' => '',
                        'image' => 'hvac-3.jpg',
                        'description' => 'Treatments, degreasers and disinfectants that limit microbial growth, odor and clogging in pans and drain lines.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Built for uptime-critical systems',
                'description' => 'Different facilities depend on HVAC in different ways. Start with the application.',
                'items' => [
                    [
                        'title' => 'Healthcare & laboratories',
                        'description' => 'Clean, well-maintained systems support indoor air quality and the protection of sensitive spaces.',
                    ],
                    [
                        'title' => 'Schools & public buildings',
                        'description' => 'Routine maintenance products that keep large buildings comfortable and reduce unplanned outages.',
                    ],
                    [
                        'title' => 'Commercial & industrial sites',
                        'description' => 'Package units and rooftop systems benefit from regular coil cleaning and corrosion protection.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What HVAC maintenance products does Competitive Choice supply?',
                        'answer' => 'We supply non-acidic coil cleaners, non-rinsing evaporative cleaners, corrosion inhibitors, condensate pan treatments, degreasers and disinfectants for commercial and industrial HVAC systems.',
                    ],
                    [
                        'question' => 'Why clean HVAC coils?',
                        'answer' => 'Dirt, biological buildup and particulate matter on coils reduce airflow and heat exchange. Regular cleaning helps restore efficiency, reduce energy waste and lower the risk of system failure.',
                    ],
                    [
                        'question' => 'Can coils be cleaned while the unit is running?',
                        'answer' => 'Non-rinsing evaporative cleaners are available for hard-to-access or in-service units to reduce disruption. Follow the manufacturer instructions and your safety procedures.',
                    ],
                    [
                        'question' => 'How do condensate pan treatments help?',
                        'answer' => 'They help limit microbial growth, odor and clogging in condensate pans and drain lines, which are common sources of water damage and indoor air complaints.',
                    ],
                    [
                        'question' => 'What do you need to quote HVAC products?',
                        'answer' => 'Share the product type, the equipment and application, quantities, any safety data sheet requirements and your delivery location and timing.',
                    ],
                    [
                        'question' => 'What is the difference between acidic and non-acidic coil cleaners?',
                        'answer' => 'Non-acidic cleaners are formulated to remove dirt and biological buildup without the harshness of acid-based products. Always follow the manufacturer guidance for your equipment.',
                    ],
                    [
                        'question' => 'How often should coils and condensate pans be treated?',
                        'answer' => 'It depends on the environment, runtime and local conditions. Routine treatment prevents odor, fouling and microbial growth; follow your equipment manufacturer and maintenance plan.',
                    ],
                    [
                        'question' => 'Do you supply HVAC equipment itself?',
                        'answer' => 'This page focuses on HVAC maintenance products. For HVAC equipment or package units, contact our team with your specification and we will review sourcing options.',
                    ],
                    [
                        'question' => 'Which facilities benefit most from HVAC maintenance products?',
                        'answer' => 'Healthcare, schools, public buildings, laboratories and commercial or industrial sites where uptime, indoor air quality and energy use matter.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Specialty Maintenance Chemicals',
                        'link' => '/products/specialty-maintenance-chemicals/',
                    ],
                    [
                        'label' => 'Plumbing Supplies',
                        'link' => '/products/plumbing-supplies/',
                    ],
                    [
                        'label' => 'Air Scenting Services',
                        'link' => '/services/air-scenting-services/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'plumbing-supplies' => [
        'title' => 'Plumbing Supplies',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '14',
        'content' => [
            'seo' => [
                'title' => 'Plumbing Maintenance Supplies & Drain Products | Competitive Choice',
                'description' => 'Drain openers, odor control, sealers, professional cleaners and bio-enzymatic formulas for commercial plumbing maintenance. Request a quote.',
                'og_title' => 'Commercial Plumbing Maintenance Supplies | Competitive Choice',
                'og_description' => 'Products that clear clogs, control odor and protect against leaks in critical facilities. Send your requirement for a quote.',
                'schema_about' => 'Commercial plumbing maintenance supplies',
            ],
            'banner' => [
                'image' => 'product-plumbing.jpg',
                'title' => 'Specialized Plumbing Solutions',
                'lead' => 'Drain openers, odor control, sealers and professional cleaners that keep plumbing running in demanding environments.',
            ],
            'overview' => [
                'title' => 'Plumbing products for facilities that cannot afford disruption',
                'paragraphs' => ['Clogged drains, persistent odors and leaks can disrupt operations, safety and regulatory compliance. Our specialized range of plumbing maintenance products is built for the demanding standards of critical facilities.', 'The range includes powerful drain openers for high-traffic systems, industrial-strength odor control, and durable sealers that protect against leaks and water intrusion. Professional-grade cleaners keep restrooms, kitchens and mechanical rooms sanitary, and bio-enzymatic formulas offer environmentally responsible ways to break down organic matter and prevent buildup in pipes and traps.', 'Together these products support proactive maintenance programs that cut downtime, reduce emergency repairs and extend the life of plumbing infrastructure, for routine upkeep or urgent intervention.'],
            ],
            'equipment' => [
                'title' => 'Plumbing products we supply',
                'description' => 'Maintenance products for commercial, institutional and industrial plumbing.',
                'items' => [
                    [
                        'title' => 'Drain Openers',
                        'icon' => '',
                        'image' => 'plumb-1.jpg',
                        'description' => 'Fast-acting products that clear clogs in high-traffic drains and help restore flow.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Odor Control & Cleaners',
                        'icon' => '',
                        'image' => 'plumb-2.jpg',
                        'description' => 'Industrial-strength odor control and professional cleaners for restrooms, kitchens and mechanical rooms.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Sealers & Bio-Enzymatics',
                        'icon' => '',
                        'image' => 'plumb-3.jpg',
                        'description' => 'Durable sealers that protect against leaks and water intrusion, and bio-enzymatic formulas that break down organic buildup.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Where plumbing maintenance matters most',
                'description' => 'High-use and high-compliance spaces depend on dependable plumbing.',
                'items' => [
                    [
                        'title' => 'Restrooms & kitchens',
                        'description' => 'Clean, free-flowing fixtures and drains in the spaces that see the heaviest use.',
                    ],
                    [
                        'title' => 'Mechanical rooms',
                        'description' => 'Sealers and cleaners that protect equipment spaces from leaks and buildup.',
                    ],
                    [
                        'title' => 'Schools, hospitals & public buildings',
                        'description' => 'Proactive programs that reduce emergency repairs and keep facilities inspection-ready.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What plumbing maintenance products do you supply?',
                        'answer' => 'We supply drain openers, industrial-strength odor control, sealers, professional-grade cleaners and bio-enzymatic formulas for commercial and institutional plumbing.',
                    ],
                    [
                        'question' => 'What are bio-enzymatic drain products?',
                        'answer' => 'They use enzymes and beneficial microbes to break down organic matter such as fats, oils and grease, helping prevent buildup in pipes and traps in a more environmentally responsible way.',
                    ],
                    [
                        'question' => 'Do you offer drain care as a service?',
                        'answer' => 'Yes. Our Drain Services program supports wastewater, kitchen and dialysis drains with preventive maintenance and customized plans.',
                    ],
                    [
                        'question' => 'How do I request a quote for plumbing supplies?',
                        'answer' => 'Send your product list or specification with quantities, the application and your delivery location and date. Availability and delivery are confirmed during quotation.',
                    ],
                    [
                        'question' => 'How do I choose a drain opener?',
                        'answer' => 'The right product depends on the pipe material, the type of clog and your safety rules. Tell us the application and our team will recommend suitable options.',
                    ],
                    [
                        'question' => 'Can odor control products be used in restrooms and kitchens?',
                        'answer' => 'Yes. Industrial-strength odor control and professional cleaners are available for restrooms, kitchens and mechanical rooms.',
                    ],
                    [
                        'question' => 'Do you supply plumbing fixtures and fittings?',
                        'answer' => 'Our focus is plumbing supplies and maintenance products. Send your specification or bill of materials for fixtures and fittings and we will review sourcing.',
                    ],
                    [
                        'question' => 'Are there cooperative contracts for plumbing supplies?',
                        'answer' => 'Plumbing categories appear on several cooperative contracts. See our Co-Ops and Schedules page and tell us which vehicle you use.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Drain Services',
                        'link' => '/services/drain-services/',
                    ],
                    [
                        'label' => 'Odor Control Services',
                        'link' => '/services/odor-control/',
                    ],
                    [
                        'label' => 'Specialty Maintenance Chemicals',
                        'link' => '/products/specialty-maintenance-chemicals/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'electrical-lighting-cable' => [
        'title' => 'Electrical, Lighting & Cable',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '15',
        'content' => [
            'seo' => [
                'title' => 'Electrical Supplies, Lighting & Cable | Competitive Choice',
                'description' => 'Cable wire and datacomm, conduits, panels, raceways and LED commercial lighting for construction and facility projects. Request a quote.',
                'og_title' => 'Electrical Supplies, Lighting & Cable | Competitive Choice',
                'og_description' => 'Electrical and lighting products for commercial and new construction projects, with responsive support. Send your requirement for a quote.',
                'schema_about' => 'Electrical supplies, commercial lighting and cable',
            ],
            'banner' => [
                'image' => 'product-electrical.jpg',
                'title' => 'Electrical & Lighting Solutions for Complex Projects',
                'lead' => 'Cable, conduit, panels, controls and commercial lighting for the technical demands of critical infrastructure projects.',
            ],
            'overview' => [
                'title' => 'Electrical and lighting supply for commercial and construction projects',
                'paragraphs' => ['Competitive Choice is a trusted partner in the commercial and new construction sectors, delivering a full range of electrical and lighting products for the technical demands of critical infrastructure projects.', 'From schools and hospitals to industrial campuses and energy facilities, we help make sure every wire, light and panel supports both function and compliance. Our team works directly with contractors, engineers and facilities teams to provide tailored product guidance and responsive support.', 'Whether you are lighting new construction or wiring a vital upgrade, we deliver the materials, precision and support to keep your project moving.'],
            ],
            'equipment' => [
                'title' => 'Electrical and lighting products we supply',
                'description' => 'A broad range for contractors, engineers and facility teams.',
                'items' => [
                    [
                        'title' => 'Cable Wire & Datacomm',
                        'icon' => '',
                        'image' => 'elec-1.jpg',
                        'description' => 'Cable wire and datacomm products for power, controls and communications on commercial and new construction projects.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Conduits, Panels & Raceways',
                        'icon' => '',
                        'image' => 'elec-2.jpg',
                        'description' => 'Conduits, panels and raceways to route and distribute power safely, plus controls, protection and testing tools.',
                        'items' => [],
                    ],
                    [
                        'title' => 'LED & Commercial Lighting',
                        'icon' => '',
                        'image' => 'elec-3.jpg',
                        'description' => 'LED and high-performance commercial lighting for new construction, retrofits and critical infrastructure.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Supporting projects of every size',
                'description' => 'Start with the application, then define the products your project requires.',
                'items' => [
                    [
                        'title' => 'Schools & hospitals',
                        'description' => 'Wiring, lighting and panels for facilities where reliability and compliance come first.',
                    ],
                    [
                        'title' => 'Industrial campuses & energy',
                        'description' => 'Electrical components and controls for demanding industrial and energy environments.',
                    ],
                    [
                        'title' => 'New construction & upgrades',
                        'description' => 'Materials for contractors and engineers lighting new builds or wiring vital upgrades.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What electrical products does Competitive Choice supply?',
                        'answer' => 'We supply cable wire and datacomm, conduits, panels and raceways, LED and commercial lighting, power protection, controls and testing tools, and HVAC, automation and utility-grade components.',
                    ],
                    [
                        'question' => 'Can you help specify products for a project?',
                        'answer' => 'Our team works directly with contractors, engineers and facilities teams to provide product guidance. Final specification should be confirmed by your project engineer.',
                    ],
                    [
                        'question' => 'Do you supply power distribution equipment?',
                        'answer' => 'Yes. See our Power Distribution & Transformers page for switchgear, panelboards, breakers, fuses and transformers.',
                    ],
                    [
                        'question' => 'How do I request a quote?',
                        'answer' => 'Send your bill of materials or specification with quantities, drawings if available, and delivery location and date. Availability and timing are confirmed during quotation.',
                    ],
                    [
                        'question' => 'Do you work with contractors and engineers?',
                        'answer' => 'Yes. Our team works directly with contractors, engineers and facilities teams to provide product guidance and responsive support.',
                    ],
                    [
                        'question' => 'Which lighting do you supply?',
                        'answer' => 'LED and high-performance commercial lighting for new construction, retrofits and critical infrastructure.',
                    ],
                    [
                        'question' => 'Are cooperative contracts available for electrical supplies?',
                        'answer' => 'Electrical categories appear on several cooperative contracts, including Good Buy and regional cooperatives. Tell us which vehicle you use and we will confirm.',
                    ],
                    [
                        'question' => 'Can you supply datacomm and low-voltage cabling?',
                        'answer' => 'Yes. Cable wire and datacomm products are part of our electrical range. Share your specification for a quote.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Power Distribution & Transformers',
                        'link' => '/products/power-distribution-transformers/',
                    ],
                    [
                        'label' => 'Facility Maintenance, MRO & Tools',
                        'link' => '/products/facility-maintenance-mro-tools/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'safety-security' => [
        'title' => 'Safety & Security',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '16',
        'content' => [
            'seo' => [
                'title' => 'Safety & Security Supplies | PPE, Spill Control | Competitive Choice',
                'description' => 'PPE, first aid kits, safety signs, spill control, locks, safes, alarms and emergency radios for healthcare, utilities and education. Request a quote.',
                'og_title' => 'Safety & Security Supplies | Competitive Choice',
                'og_description' => 'Safety and security products that protect people, assets and operations. Send your requirement for a quote.',
                'schema_about' => 'Workplace safety and security supplies',
            ],
            'banner' => [
                'image' => 'safe-banner.jpg',
                'title' => 'Safety & Security Solutions for High-Stakes Environments',
                'lead' => 'PPE, emergency response tools and security products that protect people, assets and operations.',
            ],
            'overview' => [
                'title' => 'Safety and security supplies for critical environments',
                'paragraphs' => ['Safety is foundational to operational resilience, especially within critical infrastructure. Competitive Choice supplies a full suite of safety and security products that protect people, assets and operations.', 'From personal protective equipment (PPE) to emergency response tools, our inventory supports compliance, risk mitigation and peace of mind in high-demand environments.', 'Our solutions are designed for healthcare, utilities, construction and education, helping prevent incidents, support regulatory compliance and strengthen workplace safety culture.'],
            ],
            'equipment' => [
                'title' => 'Safety and security products we supply',
                'description' => 'Protection and response tools for people, property and operations.',
                'items' => [
                    [
                        'title' => 'PPE & First Aid',
                        'icon' => '',
                        'image' => 'safe-1.jpg',
                        'description' => 'Personal protective equipment and first aid kits for staff and contractors.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Signs & Spill Control',
                        'icon' => '',
                        'image' => 'safe-2.jpg',
                        'description' => 'Safety signs and spill control products that help prevent and contain incidents.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Locks, Safes & Emergency Communications',
                        'icon' => '',
                        'image' => 'safe-3.jpg',
                        'description' => 'Locks, safes and alarm systems, plus emergency radios and secure communication devices for rapid response.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Designed for demanding sectors',
                'description' => 'Different environments carry different risks. Start with where the products will be used.',
                'items' => [
                    [
                        'title' => 'Healthcare',
                        'description' => 'PPE, first aid and secure storage for clinical and support areas.',
                    ],
                    [
                        'title' => 'Utilities & construction',
                        'description' => 'Protective equipment, signage and spill control for field and plant work.',
                    ],
                    [
                        'title' => 'Education',
                        'description' => 'First aid, signage, alarms and communication tools for campuses and districts.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What safety and security products do you supply?',
                        'answer' => 'We supply PPE and first aid kits, safety signs and spill control, locks, safes and alarm systems, and emergency radios and secure communication devices.',
                    ],
                    [
                        'question' => 'Can you supply to a standard or specification?',
                        'answer' => 'Include any required standards, ratings or certifications in your inquiry. Compliance is confirmed for each specific product before purchase.',
                    ],
                    [
                        'question' => 'Do you supply fire protection too?',
                        'answer' => 'See our Fire & Safety page for lithium-ion battery fire protection.',
                    ],
                    [
                        'question' => 'How do I request a quote?',
                        'answer' => 'Send your product list with quantities, the environment and your delivery location and date. Availability and delivery timing are confirmed during quotation.',
                    ],
                    [
                        'question' => 'Do you supply healthcare and education customers?',
                        'answer' => 'Yes. Our safety and security range is designed for healthcare, utilities, construction and education.',
                    ],
                    [
                        'question' => 'Is PPE available through cooperative contracts?',
                        'answer' => 'PPE and safety equipment appear on several cooperative contracts, including TIPS and regional cooperatives. Tell us which vehicle you use and we will confirm.',
                    ],
                    [
                        'question' => 'Can you supply emergency radios and secure communications?',
                        'answer' => 'Yes. Emergency radios and secure communication devices are part of our range. Include your coverage and quantity needs in your inquiry.',
                    ],
                    [
                        'question' => 'Can you help with signage and spill control for compliance?',
                        'answer' => 'We supply safety signs and spill control products. Confirm the specific standards your facility must meet and include them in your inquiry.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Fire & Safety',
                        'link' => '/products/fire-safety/',
                    ],
                    [
                        'label' => 'Facility Maintenance, MRO & Tools',
                        'link' => '/products/facility-maintenance-mro-tools/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'specialty-maintenance-chemicals' => [
        'title' => 'Specialty Maintenance Chemicals',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '17',
        'content' => [
            'seo' => [
                'title' => 'Specialty Maintenance Chemicals Supplier | Competitive Choice',
                'description' => 'Corrosion inhibitors, HVAC coil cleaners, drain and enzymatic cleaners, degreasers and odor control for facilities. Request a quote today.',
                'og_title' => 'Specialty Maintenance Chemicals | Competitive Choice',
                'og_description' => 'High-performance chemicals that extend equipment life and cut downtime for healthcare, utilities, education and municipal facilities.',
                'schema_about' => 'Specialty maintenance chemicals for facilities and infrastructure',
            ],
            'banner' => [
                'image' => 'chem-banner.jpg',
                'title' => 'Specialty Maintenance Chemicals for Critical Operations',
                'lead' => 'From corrosion protection to HVAC performance, chemicals designed to extend equipment life, improve efficiency and support compliance.',
            ],
            'overview' => [
                'title' => 'Maintenance chemicals engineered for mission-critical environments',
                'paragraphs' => ['Competitive Choice delivers specialty maintenance chemicals made for mission-critical environments and essential trades. From corrosion protection to HVAC performance, our products extend equipment life, improve operational efficiency and support regulatory compliance across the infrastructure that powers our communities.', 'Whether you manage facilities in healthcare, utilities, education or municipal services, our chemical solutions support electricians, plumbers, HVAC technicians and custodial professionals. They reduce downtime, prevent costly repairs and help you get ahead of maintenance problems before they disrupt service.', 'Many products in our line are free of petroleum solvents and standard detergents and are biodegradable, supporting a greener, cleaner environment for customers.'],
            ],
            'equipment' => [
                'title' => 'Chemicals we supply for every trade',
                'description' => 'A broad lineup, from daily upkeep to long-term asset protection.',
                'items' => [
                    [
                        'title' => 'Corrosion & HVAC Chemicals',
                        'icon' => '',
                        'image' => 'chem-1.jpg',
                        'description' => 'Corrosion inhibitors that protect infrastructure and coil cleaners that restore airflow, cut energy use and extend system life.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Drain & Enzymatic Cleaners',
                        'icon' => '',
                        'image' => 'chem-2.jpg',
                        'description' => 'Drain, grease trap and enzymatic cleaners that dissolve grease, hair and buildup and control odor.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Degreasers & Lubricants',
                        'icon' => '',
                        'image' => 'chem-3.jpg',
                        'description' => 'Industrial degreasers, adhesives, lubricants and grease for daily upkeep and long-term asset protection.',
                        'items' => [],
                    ],
                ],
            ],
            'lineup' => [
                'title' => 'Our full lineup of maintenance chemicals',
                'points' => ['Adhesives, lubricants & grease', 'Drain, grease trap & wastewater solutions', 'Disinfectants & deodorizers', 'Enzymatic cleaners', 'HVAC maintenance chemicals', 'Floor & surface care', 'Industrial degreasers', 'Mold & mildew control', 'Odor control solutions', 'Pool & water treatment', 'Insecticides & grounds maintenance', 'Wet wipes & personal care', 'Winterization products', 'Dispensing systems & sprayers'],
            ],
            'applications' => [
                'title' => 'Built for trades and facilities',
                'description' => 'Start with the job, then choose the chemistry.',
                'items' => [
                    [
                        'title' => 'Healthcare & education',
                        'description' => 'Disinfectants, deodorizers and cleaners for high-compliance, high-traffic buildings.',
                    ],
                    [
                        'title' => 'Utilities & municipal services',
                        'description' => 'Corrosion, odor and wastewater products for plants, poles and public works.',
                    ],
                    [
                        'title' => 'Maintenance & trades teams',
                        'description' => 'Electricians, plumbers, HVAC technicians and custodial staff get the products their work needs.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What specialty maintenance chemicals do you supply?',
                        'answer' => 'Our lineup includes adhesives, lubricants and grease, drain and wastewater solutions, disinfectants and deodorizers, enzymatic cleaners, HVAC chemicals, floor and surface care, degreasers, mold and mildew control, odor control and more.',
                    ],
                    [
                        'question' => 'Are your chemicals environmentally friendly?',
                        'answer' => 'Many items are free of petroleum solvents and standard detergents and are biodegradable. Ask about environmental requirements when you inquire.',
                    ],
                    [
                        'question' => 'Do you provide safety data sheets?',
                        'answer' => 'Include safety data sheet and compliance needs in your inquiry so we can confirm documentation for the products you choose.',
                    ],
                    [
                        'question' => 'Can you help me choose the right product?',
                        'answer' => 'Yes. Describe the surface, equipment or problem and our team will recommend options. Final suitability should be confirmed against your safety and facility requirements.',
                    ],
                    [
                        'question' => 'How do I request a quote?',
                        'answer' => 'Share the products, quantities, application and your delivery location and date. Availability and delivery are confirmed during quotation.',
                    ],
                    [
                        'question' => 'Which trades use these chemicals?',
                        'answer' => 'Electricians, plumbers, HVAC technicians and custodial professionals, across healthcare, utilities, education and municipal services.',
                    ],
                    [
                        'question' => 'Do you offer pool and water treatment products?',
                        'answer' => 'Yes. Pool and water treatment products are part of our full lineup. Ask about your application.',
                    ],
                    [
                        'question' => 'Do you supply dispensing systems and sprayers?',
                        'answer' => 'Yes. Dispensing systems and sprayers are part of the lineup, so products can be applied consistently.',
                    ],
                    [
                        'question' => 'Are there cooperative contracts for chemicals?',
                        'answer' => 'Industrial and facility chemicals appear on cooperative contracts such as TIPS. Tell us which vehicle you use and we will confirm what applies.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Water & Wastewater Treatment',
                        'link' => '/products/water-wastewater-treatment/',
                    ],
                    [
                        'label' => 'HVAC & HVAC Package Units',
                        'link' => '/products/hvac-package-units/',
                    ],
                    [
                        'label' => 'Custodial, Janitorial & Sanitation',
                        'link' => '/products/custodial-janitorial-sanitation/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'facility-maintenance-mro-tools' => [
        'title' => 'Facility Maintenance, MRO & Tools',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '18',
        'content' => [
            'seo' => [
                'title' => 'Facility Maintenance & MRO Supplies | Competitive Choice',
                'description' => 'Hand and power tools, fasteners, adhesives, electrical components, janitorial and safety gear for facilities and construction. Request a quote.',
                'og_title' => 'Facility Maintenance, MRO & Tools | Competitive Choice',
                'og_description' => 'One source for MRO supplies, tools and specialty chemicals, with responsive service and timely fulfillment.',
                'schema_about' => 'Facility maintenance, repair and operations (MRO) supplies and tools',
            ],
            'banner' => [
                'image' => 'mro-banner.jpg',
                'title' => 'Facility Maintenance & MRO for Mission-Critical Operations',
                'lead' => 'Tools, supplies and specialty products for construction teams, facility managers and maintenance crews.',
            ],
            'overview' => [
                'title' => 'MRO supplies and tools for frontline teams',
                'paragraphs' => ['Competitive Choice provides a comprehensive range of materials and supplies that support the essential work of construction teams, facility managers and maintenance crews. From routine operations to emergency repairs, we help make sure you have the tools and products to keep critical infrastructure safe, operational and compliant.', 'Our offering includes everyday MRO (maintenance, repair and operations) supplies such as hand and power tools, fasteners, adhesives, electrical components, janitorial products, lighting and safety gear. We also supply specialty chemicals, lubricants, degreasers and odor control solutions for commercial buildings, industrial facilities and public sector environments.', 'Whether you manage a school, hospital, utility plant, office complex or construction project, we support your frontline teams with responsive service and timely fulfillment. We work hard to make procurement simple, efficient and reliable, because every delay affects your bottom line.'],
            ],
            'equipment' => [
                'title' => 'MRO products we supply',
                'description' => 'Everyday supplies and specialty products under one roof.',
                'items' => [
                    [
                        'title' => 'Tools & Fasteners',
                        'icon' => '',
                        'image' => 'mro-1.jpg',
                        'description' => 'Hand and power tools, fasteners and adhesives for repair and installation work.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Electrical & Safety Gear',
                        'icon' => '',
                        'image' => 'mro-2.jpg',
                        'description' => 'Electrical components, lighting and safety gear that keep teams and spaces protected.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Lubricants & Janitorial Supplies',
                        'icon' => '',
                        'image' => 'mro-3.jpg',
                        'description' => 'Specialty chemicals, lubricants, degreasers, odor control and janitorial products for commercial and industrial buildings.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Supporting every kind of facility',
                'description' => 'From routine upkeep to emergency repairs.',
                'items' => [
                    [
                        'title' => 'Schools & hospitals',
                        'description' => 'Reliable supplies for maintenance teams that cannot afford delays.',
                    ],
                    [
                        'title' => 'Utility plants & offices',
                        'description' => 'Tools and consumables that keep buildings and plants operating.',
                    ],
                    [
                        'title' => 'Construction projects',
                        'description' => 'Materials and tools for crews working to schedule.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What MRO supplies does Competitive Choice carry?',
                        'answer' => 'We supply hand and power tools, fasteners, adhesives, electrical components, janitorial products, lighting, safety gear, specialty chemicals, lubricants, degreasers and odor control solutions.',
                    ],
                    [
                        'question' => 'Can you source items you do not list?',
                        'answer' => 'Reach out with the item or specification. Our team can often source what your project or facility needs.',
                    ],
                    [
                        'question' => 'Do you support government and school purchasing?',
                        'answer' => 'Yes. Cooperative and federal contract vehicles, including TIPS, BuyBoard and GSA, may apply. See our Co-Ops and Schedules page.',
                    ],
                    [
                        'question' => 'How do I get a quote?',
                        'answer' => 'Send your item list with quantities, delivery location and date. Availability and timing are confirmed during quotation.',
                    ],
                    [
                        'question' => 'Do you supply specialty chemicals with MRO items?',
                        'answer' => 'Yes. We carry specialty chemicals, lubricants and degreasers alongside tools and everyday MRO supplies, so one order can cover more of your needs.',
                    ],
                    [
                        'question' => 'Can you support emergency repair needs?',
                        'answer' => 'Our goal is to give teams what they need from routine operations to emergency repairs. Share your urgency and delivery location when you inquire.',
                    ],
                    [
                        'question' => 'Which industries use your MRO supplies?',
                        'answer' => 'Schools, hospitals, utility plants, office complexes and construction projects, in the private and public sector.',
                    ],
                    [
                        'question' => 'Do you offer eProcurement?',
                        'answer' => 'Yes. Our integrated eProcurement platform streamlines order workflows and spend tracking for customers who want easier purchasing.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Specialty Maintenance Chemicals',
                        'link' => '/products/specialty-maintenance-chemicals/',
                    ],
                    [
                        'label' => 'Custodial, Janitorial & Sanitation',
                        'link' => '/products/custodial-janitorial-sanitation/',
                    ],
                    [
                        'label' => 'Co-Ops & Contract Vehicles',
                        'link' => 'link:contracts',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
    'custodial-janitorial-sanitation' => [
        'title' => 'Custodial, Janitorial & Sanitation',
        'parent' => 'products-and-materials',
        'template' => 'category',
        'group' => 'product',
        'order' => '19',
        'content' => [
            'seo' => [
                'title' => 'Custodial, Janitorial & Sanitation Supplies | Competitive Choice',
                'description' => 'Cleaners, disinfectants, floor care, paper goods, soaps, tools and dispensing systems for hospitals, schools and government buildings. Request a quote.',
                'og_title' => 'Custodial, Janitorial & Sanitation Supplies | Competitive Choice',
                'og_description' => 'Jan/San products for high-traffic, high-compliance facilities. Send your requirement for a quote.',
                'schema_about' => 'Custodial, janitorial and sanitation supplies',
            ],
            'banner' => [
                'image' => 'jan-banner.jpg',
                'title' => 'Custodial & Jan/San Supplies for Operational Excellence',
                'lead' => 'Janitorial and sanitation products built for high-traffic, high-compliance settings.',
            ],
            'overview' => [
                'title' => 'Janitorial and sanitation supplies for clean, inspection-ready facilities',
                'paragraphs' => ['Facility hygiene is non-negotiable in any essential environment, especially those serving the public. Competitive Choice helps you create safe, clean and professional spaces with a comprehensive selection of janitorial and sanitation (Jan/San) products built for high-traffic, high-compliance settings.', 'Our inventory supports hospitals, schools, government buildings and commercial facilities. From traditional cleaning tools to advanced formulations in liquid, aerosol and pod formats, we tailor our offering to the needs of diverse industries.', 'Whether you are preparing for a health inspection, protecting staff or improving the guest experience, our Jan/San solutions help keep your facility consistently clean and inspection-ready.'],
            ],
            'equipment' => [
                'title' => 'Jan/San products we supply',
                'description' => 'Everything a custodial program needs, from cleaners to dispensing.',
                'items' => [
                    [
                        'title' => 'Cleaners & Disinfectants',
                        'icon' => '',
                        'image' => 'jan-1.jpg',
                        'description' => 'All-purpose and specialty cleaners, disinfectants, deodorizers and floor care products.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Paper, Soap & Amenities',
                        'icon' => '',
                        'image' => 'jan-2.jpg',
                        'description' => 'Bathroom and personal care amenities, paper goods, hand soaps and sanitizers.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Tools & Dispensing Systems',
                        'icon' => '',
                        'image' => 'jan-3.jpg',
                        'description' => 'Cleaning tools, waste receptacles and dispensing systems that control usage and keep supplies consistent.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Built for high-traffic, high-compliance spaces',
                'description' => 'Start with the facility, then choose the program.',
                'items' => [
                    [
                        'title' => 'Hospitals & clinics',
                        'description' => 'Disinfectants, cleaners and amenities that support infection control and inspections.',
                    ],
                    [
                        'title' => 'Schools & universities',
                        'description' => 'Durable supplies and dispensing for busy campuses and restrooms.',
                    ],
                    [
                        'title' => 'Government & commercial buildings',
                        'description' => 'Consistent, professional upkeep for public-facing spaces.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What Jan/San products do you supply?',
                        'answer' => 'We supply all-purpose and specialty cleaners, disinfectants, deodorizers, floor care, bathroom and personal care amenities, paper goods, hand soaps and sanitizers, tools, waste receptacles and dispensing systems.',
                    ],
                    [
                        'question' => 'Do you offer different product formats?',
                        'answer' => 'Yes. We offer liquid, aerosol and pod formulations, along with traditional cleaning tools, to suit different facilities and workflows.',
                    ],
                    [
                        'question' => 'Are there cooperative contracts for custodial supplies?',
                        'answer' => 'Yes. Custodial and janitorial categories appear on several cooperative contracts, including TIPS and BuyBoard. See our Co-Ops and Schedules page.',
                    ],
                    [
                        'question' => 'How do I request a quote?',
                        'answer' => 'Send your product list with quantities, facility type and delivery location. Availability and delivery timing are confirmed during quotation.',
                    ],
                    [
                        'question' => 'Can you help us prepare for a health inspection?',
                        'answer' => 'Our Jan/San products are chosen for high-compliance settings. Tell us the standards you must meet and we will recommend suitable products.',
                    ],
                    [
                        'question' => 'Do you supply dispensing systems?',
                        'answer' => 'Yes. Dispensing systems, waste receptacles and tools are part of our range.',
                    ],
                    [
                        'question' => 'Which facilities do you serve?',
                        'answer' => 'Hospitals, schools, government buildings and commercial facilities.',
                    ],
                    [
                        'question' => 'Are eco-friendly products available?',
                        'answer' => 'Many items in our line are free of petroleum solvents and standard detergents and are biodegradable. Ask about environmental requirements in your inquiry.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Specialty Maintenance Chemicals',
                        'link' => '/products/specialty-maintenance-chemicals/',
                    ],
                    [
                        'label' => 'Odor Control Services',
                        'link' => '/services/odor-control/',
                    ],
                    [
                        'label' => 'Co-Ops & Contract Vehicles',
                        'link' => 'link:contracts',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
];
