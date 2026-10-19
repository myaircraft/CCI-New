<?php
/** Product category pages (Category Page template). Shared blocks are added by cc_page_build(). */

if (!defined('ABSPATH')) exit;

return [
    'electrical-lighting-cable' => [
        'title' => 'Electrical, Lighting, Cable & Wire',
        'parent' => 'supplies',
        'template' => 'category',
        'group' => 'product',
        'order' => '15',
        'content' => [
            'seo' => [
                'title' => 'Electrical Supplies, Lighting & Cable | Competitive Choice',
                'description' => 'Cable, wire and datacomm, conduits, panels, raceways and LED commercial lighting for construction and facility projects. Request a quote.',
                'og_title' => 'Electrical Supplies, Lighting & Cable | Competitive Choice',
                'og_description' => 'Electrical and lighting products for commercial and new construction projects, with responsive support. Send your requirement for a quote.',
                'schema_about' => 'Electrical supplies, commercial lighting and cable',
            ],
            'banner' => [
                'image' => 'product-electrical.jpg',
                'title' => 'Electrical, Lighting, Cable & Wire',
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
                        'title' => 'Cable, Wire & Datacomm',
                        'icon' => '',
                        'image' => 'elec-1.jpg',
                        'description' => 'Cable, wire and datacomm products for power, controls and communications on commercial and new construction projects.',
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
                        'answer' => 'We supply cable, wire and datacomm, conduits, panels and raceways, LED and commercial lighting, power protection, controls and testing tools, and HVAC, automation and utility-grade components.',
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
                        'answer' => 'Yes. Cable, wire and datacomm products are part of our electrical range. Share your specification for a quote.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Power Distribution & Transformers',
                        'link' => '/supplies/power-distribution-transformers/',
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
        'title' => 'Safety',
        'parent' => 'supplies',
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
                'title' => 'Safety',
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
                        'link' => '/supplies/fire-safety/',
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
        'title' => 'Cleaning & Sanitation',
        'parent' => 'supplies',
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
                'image' => 'chem-cleaning-banner-v4.jpg',
                'title' => 'Cleaning & Sanitation Supplies',
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
                        'answer' => 'Yes. Custodial and janitorial categories appear on several cooperative contracts, including TIPS and BuyBoard. See our Co-Ops & Schedules page.',
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
                        'label' => 'Odor Control Services',
                        'link' => '/services/odor-control/',
                    ],
                    [
                        'label' => 'Co-Ops & Schedules',
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
