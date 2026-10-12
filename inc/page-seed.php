<?php
/**
 * Initial page content, keyed by page slug. Used once: when a page with this slug has no saved
 * content yet (a fresh install), or by the one-time migration from the cc_content table.
 * After that, each page's content lives in its own "_cc_content" post meta, edited on the page screen.
 */

if (!defined('ABSPATH')) exit;

return [
    'home' => [
        'seo' => [
            'title'          => 'Competitive Choice | Critical Supplies, Services & Procurement',
            'description'    => 'Since 2003, Competitive Choice has supplied essential products, procurement solutions and services for government, commercial, construction and institutional clients.',
            'og_title'       => 'Competitive Choice | Critical Supplies, Services & Procurement',
            'og_description' => 'Your single source for critical supplies, services and solutions. Explore products, government contracting and proven procurement support.',
        ],
        'hero' => [
            'eyebrow'       => 'PROCUREMENT / PRODUCTS / SERVICES / SOLUTIONS',
            'title'         => 'Your single source for Critical Supplies, Services & Solutions.',
            'quote_label'   => 'REQUEST A QUOTE',
            'explore_label' => 'EXPLORE CATEGORY',
        ],
        'markets' => [
            'label' => 'Supporting the government, commercial, industrial, construction and facility organizations with supplies and services since 2003.',
            'items' => [],
        ],
        'products' => [
            'topic'           => 'PRODUCTS & SUPPLIES',
            'heading'         => 'Critical supplies. One reliable source.',
            'description'     => 'From daily facility needs to complex infrastructure projects, we source the products that keep your operation running.',
            'card_link_label' => 'VIEW CATEGORY',
            'button_label'    => 'VIEW ALL PRODUCTS & SUPPLIES',
        ],
        'services' => [
            'topic'        => 'SERVICES & SOLUTIONS',
            'heading'      => 'More than a supplier.',
            'description'  => 'We help organizations source, manage, deliver and support critical operational requirements. From procurement to ongoing service, we bring the right support to the job.',
            'image'        => 'services-banner.jpg',
            'image_alt'    => 'Industrial procurement and logistics warehouse',
            'button_label' => 'VIEW ALL SERVICES',
        ],
        'industries' => [
            'topic'        => 'INDUSTRIES WE SERVE',
            'heading'      => 'Built around the environments you operate in.',
            'description'  => 'Different environments. Critical requirements. A partner who understands the complexity behind every purchase.',
            'button_label' => 'VIEW ALL INDUSTRIES',
        ],
        'difference' => [
            'topic'     => 'THE COMPETITIVE CHOICE DIFFERENCE',
            'heading'   => 'One partner. Thousands of critical requirements.',
            'image'     => 'difference-warehouse.jpg',
            'image_alt' => 'Colorful industrial equipment and supplies in a warehouse',
            'points'    => ['Strategic sourcing', 'Reliable procurement', 'Complex project support', 'Government contracting experience', 'Responsive service', 'National sourcing capability'],
        ],
        'contracting' => [
            'topic'                => 'GOVERNMENT & CONTRACTING',
            'heading'              => 'Ready for complex procurement.',
            'description'          => 'Established contract vehicles, cooperative purchasing options and verified business certifications.',
            'credentials'          => ['GSA MAS', 'TIPS', 'BuyBoard', 'WOSB'],
            'contracts_label'      => 'CO-OPS & CONTRACT VEHICLES',
            'certifications_label' => 'VIEW OUR CERTIFICATIONS',
        ],
        'about' => [
            'topic'        => 'ABOUT COMPETITIVE CHOICE',
            'heading'      => 'A responsive partner. Built for serious work.',
            'image'        => 'cci-team.jpg',
            'image_alt'    => 'The Competitive Choice team together in a group photograph',
            'paragraphs'   => [
                'Since 2003, Competitive Choice has helped organizations meet their product, procurement and service needs. Based in Houston, we work with government, commercial and institutional clients to support the requirements that matter.',
                'We’re the company that performs.',
            ],
            'button_label' => 'ABOUT COMPETITIVE CHOICE',
        ],
    ],

    'power-distribution-transformers' => [
        'seo' => [
            'title' => 'Power Transformers & Switchgear | Competitive Choice',
            'description' => 'Source power and distribution transformers, switchgear, panelboards, circuit breakers and fuses for critical infrastructure. Request a quote today.',
            'og_title' => 'Power Distribution Equipment & Transformers | Competitive Choice',
            'og_description' => 'Transformers, switchgear, panelboards, circuit breakers and fuses for utilities, hospitals, data centers and government. Send your specification for a quote.',
            'schema_about' => 'Power distribution equipment and transformers',
        ],
        'banner' => [
            'image' => 'product-power.jpg',
            'kicker' => 'PRODUCTS & SUPPLIES',
            'title' => 'Power Distribution Equipment & Transformers',
            'lead' => 'Reliable power starts with the right equipment. We supply power and distribution transformers, switchgear, panelboards, circuit breakers and fuses for the facilities that keep essential services running.',
            'quote_label' => 'REQUEST A PROJECT QUOTE',
            'call_label' => 'CALL',
        ],
        'breadcrumb' => [
            'home' => 'Home',
            'parent' => 'Products & Supplies',
            'parent_link' => 'link:products',
            'current' => 'Power Distribution & Transformers',
        ],
        'overview' => [
            'title' => 'Power distribution equipment and transformers for critical infrastructure',
            'paragraphs' => ['Competitive Choice supplies power distribution equipment, including distribution and power transformers, switchgear, panelboards, load centers, circuit breakers and fuses, for organizations that cannot afford unplanned downtime. Whether you are modernizing an electrical system, expanding capacity or equipping a new build, the equipment has to match your voltage, load and installation environment.', 'We serve utilities, hospitals, data centers, water plants, schools, government facilities and infrastructure contractors from Houston, Texas, and source for customers nationwide. Bring us your project specifications and we will help you move from an identified requirement to a clear procurement conversation, with product suitability, availability and delivery confirmed during your inquiry.'],
            'image' => '',
            'image_alt' => '',
        ],
        'equipment' => [
            'title' => 'Power distribution products we supply',
            'description' => 'A focused range of power distribution equipment for facility upgrades, infrastructure projects and essential operations.',
            'items' => [
                [
                    'title' => 'Distribution & Power Transformers',
                    'icon' => 'zap',
                    'image' => 'equip-transformers.jpg',
                    'description' => 'Transformer products for electrical distribution and power infrastructure. Discuss your voltage, kVA capacity and installation requirements with our team.',
                    'items' => [],
                ],
                [
                    'title' => 'Switchgear & Distribution Equipment',
                    'icon' => 'circuit-board',
                    'image' => 'equip-switchgear.jpg',
                    'description' => 'Equipment to distribute electrical power across facilities and critical systems, supporting modernization and capacity expansion projects.',
                    'items' => [],
                ],
                [
                    'title' => 'Circuit Protection',
                    'icon' => 'shield-check',
                    'image' => 'equip-protection.jpg',
                    'description' => 'Protective components for electrical distribution systems. Share the specified ratings and application so we can review your requirement.',
                    'items' => [],
                ],
            ],
        ],
        'applications' => [
            'title' => 'Power distribution equipment for essential operations.',
            'description' => 'Different facilities have different electrical demands. Start with the application, then define the equipment your project requires.',
            'items' => [
                [
                    'title' => 'Utilities & water infrastructure',
                    'description' => 'Distribution equipment and transformers for utilities and water plants, including system modernization and capacity expansion requirements.',
                ],
                [
                    'title' => 'Healthcare, education & data centers',
                    'description' => 'Power distribution products for hospitals, schools and data centers where electrical infrastructure supports essential day-to-day operations.',
                ],
                [
                    'title' => 'Infrastructure contractors',
                    'description' => 'Equipment sourcing for contractors working on electrical infrastructure projects, with requirements guided by the project specification.',
                ],
            ],
        ],
        'trust' => [
            'title' => 'Why buyers source power equipment through Competitive Choice',
            'paragraphs' => ['Competitive Choice has supported government, commercial and institutional buyers since 2003. Our strategic sourcing and procurement experience helps you handle equipment requirements without chasing multiple suppliers.', 'Public-sector buyers can ask about our contract vehicles and certifications, including GSA MAS, TIPS, BuyBoard and WOSB, when they submit a requirement. We confirm which vehicles apply to each purchase.'],
            'points' => ['Serving buyers since 2003', 'Based in Houston, Texas', 'Nationwide sourcing', 'GSA MAS, TIPS and BuyBoard contract vehicles', 'WOSB certification'],
            'button_label' => 'CO-OPS & CONTRACT VEHICLES',
        ],
        'process' => [
            'title' => 'How sourcing works with Competitive Choice',
            'description' => 'A simple path from requirement to delivery.',
            'items' => [
                [
                    'title' => 'Send your requirement',
                    'description' => 'Share your specification, equipment schedule or bill of materials, along with the details listed below.',
                ],
                [
                    'title' => 'We review and source',
                    'description' => 'Our team checks your ratings, standards and timing, then looks for suitable equipment.',
                ],
                [
                    'title' => 'Receive your quote',
                    'description' => 'You get a clear quotation, with availability and delivery timing confirmed.',
                ],
                [
                    'title' => 'Order and delivery',
                    'description' => 'Once you approve, we support the purchase and coordinate delivery to your location.',
                ],
            ],
        ],
        'inquiry' => [
            'title' => 'Let’s define the right supply requirement.',
            'paragraphs' => ['Send your equipment schedule, specification or bill of materials. Our team can discuss your power distribution needs and the next steps for sourcing.', 'Include the details below where available. Product suitability, availability and delivery requirements should be confirmed during your inquiry.'],
            'checklist_title' => 'Details to include with your inquiry',
            'items' => [
                [
                    'title' => 'Electrical specifications',
                    'description' => 'Equipment type, voltage, phase, frequency and capacity or current rating; include the project specification if available.',
                ],
                [
                    'title' => 'Installation & application',
                    'description' => 'Facility type, operating environment, installation location and any required enclosure or configuration details.',
                ],
                [
                    'title' => 'Quantity & documentation',
                    'description' => 'Required quantities, equipment schedules, drawings and any applicable project standards or documentation requirements.',
                ],
                [
                    'title' => 'Project timing & delivery',
                    'description' => 'Delivery location, requested date and any site access or receiving requirements.',
                ],
            ],
            'button_label' => 'DISCUSS YOUR REQUIREMENT',
        ],
        'faq' => [
            'title' => 'Power Distribution & Transformers FAQs',
            'description' => 'Answers to common equipment selection, specification and sourcing questions.',
            'items' => [
                [
                    'question' => 'What power distribution products does Competitive Choice supply?',
                    'answer' => 'Our offerings include distribution and power transformers, switchgear, distribution panels, load centers, panelboards, circuit breakers and fuses. Share your equipment schedule or specification so our team can review your sourcing requirements.',
                ],
                [
                    'question' => 'What information is needed to request a transformer quote?',
                    'answer' => 'Include the primary and secondary voltages, kVA rating, phase, frequency, quantity and installation environment. Provide drawings, enclosure requirements, applicable standards, delivery location and your requested delivery date where available.',
                ],
                [
                    'question' => 'How do I determine the right transformer kVA rating?',
                    'answer' => 'Transformer capacity depends on the connected load, demand, starting currents and planned expansion. Have a qualified electrical engineer calculate the required kVA and confirm compatibility with the system before requesting equipment.',
                ],
                [
                    'question' => 'What is the difference between dry-type and liquid-filled transformers?',
                    'answer' => 'Dry-type transformers use air and solid insulation, while liquid-filled transformers use an insulating liquid for cooling and insulation. Selection depends on voltage, load, ventilation, installation location and fire or environmental requirements; your project engineer should specify the appropriate type.',
                ],
                [
                    'question' => 'How do switchgear and panelboards differ?',
                    'answer' => 'Switchgear provides switching, protection and isolation for electrical circuits and is commonly used at major distribution points. Panelboards distribute power to branch circuits. The correct equipment depends on the system voltage, current, fault levels and project specification.',
                ],
                [
                    'question' => 'What should I check when sourcing circuit breakers or fuses?',
                    'answer' => 'Confirm the voltage, current rating, interrupting rating, poles and compatibility with the existing equipment. Protective devices must suit the available fault current and protection scheme; a qualified electrical professional should verify the selection.',
                ],
                [
                    'question' => 'Can equipment be sourced to meet specified electrical standards?',
                    'answer' => 'Include all required standards, listings and documentation in your inquiry, such as applicable ANSI, IEEE, NEMA or UL requirements. Compliance and supporting documentation must be confirmed for the specific product before purchase; requirements vary by project and jurisdiction.',
                ],
                [
                    'question' => 'What affects availability and delivery times for transformers and switchgear?',
                    'answer' => 'Lead times depend on the equipment type, ratings, configuration, manufacturer availability and delivery destination. Share your required date early. Our team can discuss sourcing options, with availability and delivery timing confirmed during the quotation process.',
                ],
                [
                    'question' => 'Does Competitive Choice supply power distribution equipment to government agencies?',
                    'answer' => 'Yes. We support federal, state and local government, education and healthcare buyers. Contract vehicles including GSA MAS, TIPS and BuyBoard may apply; tell us the vehicle you need in your inquiry and we will confirm what applies to your purchase.',
                ],
                [
                    'question' => 'Where is Competitive Choice located, and do you source nationwide?',
                    'answer' => 'We are based at 9030 Kirby Dr., Houston, TX 77054 and source equipment for customers across the United States. Delivery location and timing are confirmed during the quotation process.',
                ],
                [
                    'question' => 'What is the difference between a panelboard and a load center?',
                    'answer' => 'Both distribute power to branch circuits. Load centers are typically lighter-duty units for residential and light commercial use, while panelboards are built for commercial and industrial loads with higher ratings and more configuration options. Your engineer should specify the right type.',
                ],
            ],
        ],
        'related' => [
            'title' => 'Related supply requirements',
            'links' => [
                [
                    'label' => 'Electrical, Lighting & Cable',
                    'link' => 'product:Electrical, Lighting & Cable',
                ],
                [
                    'label' => 'All Products & Supplies',
                    'link' => 'link:products',
                ],
                [
                    'label' => 'Co-Ops & Contract Vehicles',
                    'link' => 'link:contracts',
                ],
                [
                    'label' => 'Our Certifications',
                    'link' => 'link:certifications',
                ],
                [
                    'label' => 'Contact Our Team',
                    'link' => 'link:contact',
                ],
            ],
        ],
    ],
];
