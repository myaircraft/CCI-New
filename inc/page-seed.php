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
            'title'         => 'Your single source for critical supplies.<br><span>Services & solutions.</span>',
            'quote_label'   => 'REQUEST A QUOTE',
            'explore_label' => 'EXPLORE CATEGORY',
        ],
        'markets' => [
            'label' => 'Supporting the organizations<br>that keep the world moving.',
            'items' => ['GOVERNMENT', 'COMMERCIAL', 'INDUSTRIAL', 'CONSTRUCTION', 'FACILITIES'],
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
            'title'        => 'Power Distribution & Transformers | Competitive Choice',
            'description'  => 'Source power transformers, switchgear, panelboards, circuit breakers and fuses from Competitive Choice for critical infrastructure. Request a project quote.',
            'schema_about' => 'Power distribution equipment and transformers',
        ],
        'banner' => [
            'image'       => 'product-power.jpg',
            'kicker'      => 'PRODUCTS & SUPPLIES',
            'title'       => 'Power Distribution & Transformers',
            'lead'        => 'Reliable power starts with the right equipment. We supply transformers, switchgear and circuit protection for the facilities that keep essential services running.',
            'quote_label' => 'REQUEST A PROJECT QUOTE',
            'call_label'  => 'CALL',
        ],
        'breadcrumb' => [
            'home'        => 'Home',
            'parent'      => 'Products & Supplies',
            'parent_link' => 'link:products',
            'current'     => 'Power Distribution & Transformers',
        ],
        'overview' => [
            'title'      => 'Power solutions for critical infrastructure.',
            'paragraphs' => [
                'From electrical system modernization to capacity expansion, your project depends on equipment selected for its operating requirements. We supply distribution and power transformers, switchgear, distribution panels and circuit protection products for mission-critical systems.',
                'Our power distribution solutions serve utilities, hospitals, data centers, water plants, schools and infrastructure contractors. Bring us your project specifications so we can help you move from an identified requirement to a clear procurement conversation.',
            ],
            'image'     => 'power-distribution-equipment.jpg',
            'image_alt' => 'Dry-type transformer cabinets and electrical switchgear in a dedicated power distribution room',
        ],
        'equipment' => [
            'title'       => 'Equipment for your electrical requirements.',
            'description' => 'A focused range of power distribution products for facility upgrades, infrastructure projects and essential operations.',
            'items' => [
                ['title' => 'Distribution & power transformers', 'icon' => 'zap', 'description' => 'Transformer products for electrical distribution and power infrastructure. Discuss your voltage, capacity and installation requirements with our team.', 'items' => ['Distribution transformers', 'Power transformers']],
                ['title' => 'Switchgear & distribution equipment', 'icon' => 'circuit-board', 'description' => 'Equipment to distribute electrical power across facilities and critical systems, supporting modernization and capacity expansion projects.', 'items' => ['Switchgear and distribution panels', 'Load centers and panelboards']],
                ['title' => 'Circuit protection', 'icon' => 'shield-check', 'description' => 'Protective components for electrical distribution systems. Share the specified ratings and application so we can review your requirement.', 'items' => ['Circuit breakers', 'Fuses']],
            ],
        ],
        'applications' => [
            'title'       => 'Built around essential operations.',
            'description' => 'Different facilities have different electrical demands. Start with the application, then define the equipment your project requires.',
            'items' => [
                ['title' => 'Utilities & water infrastructure', 'description' => 'Distribution equipment and transformers for utilities and water plants, including system modernization and capacity expansion requirements.'],
                ['title' => 'Healthcare, education & data centers', 'description' => 'Power distribution products for hospitals, schools and data centers where electrical infrastructure supports essential day-to-day operations.'],
                ['title' => 'Infrastructure contractors', 'description' => 'Equipment sourcing for contractors working on electrical infrastructure projects, with requirements guided by the project specification.'],
            ],
        ],
        'inquiry' => [
            'title'      => 'Let’s define the right supply requirement.',
            'paragraphs' => [
                'Send your equipment schedule, specification or bill of materials. Our team can discuss your power distribution needs and the next steps for sourcing.',
                'Include the details below where available. Product suitability, availability and delivery requirements should be confirmed during your inquiry.',
            ],
            'checklist_title' => 'Details to include with your inquiry',
            'items' => [
                ['title' => 'Electrical specifications', 'description' => 'Equipment type, voltage, phase, frequency and capacity or current rating; include the project specification if available.'],
                ['title' => 'Installation & application', 'description' => 'Facility type, operating environment, installation location and any required enclosure or configuration details.'],
                ['title' => 'Quantity & documentation', 'description' => 'Required quantities, equipment schedules, drawings and any applicable project standards or documentation requirements.'],
                ['title' => 'Project timing & delivery', 'description' => 'Delivery location, requested date and any site access or receiving requirements.'],
            ],
            'button_label' => 'DISCUSS YOUR REQUIREMENT',
        ],
        'faq' => [
            'title'       => 'Power Distribution & Transformers FAQs',
            'description' => 'Answers to common equipment selection, specification and sourcing questions.',
            'items' => [
                ['question' => 'What power distribution products does Competitive Choice supply?', 'answer' => 'Our offerings include distribution and power transformers, switchgear, distribution panels, load centers, panelboards, circuit breakers and fuses. Share your equipment schedule or specification so our team can review your sourcing requirements.'],
                ['question' => 'What information is needed to request a transformer quote?', 'answer' => 'Include the primary and secondary voltages, kVA rating, phase, frequency, quantity and installation environment. Provide drawings, enclosure requirements, applicable standards, delivery location and your requested delivery date where available.'],
                ['question' => 'How do I determine the right transformer kVA rating?', 'answer' => 'Transformer capacity depends on the connected load, demand, starting currents and planned expansion. Have a qualified electrical engineer calculate the required kVA and confirm compatibility with the system before requesting equipment.'],
                ['question' => 'What is the difference between dry-type and liquid-filled transformers?', 'answer' => 'Dry-type transformers use air and solid insulation, while liquid-filled transformers use an insulating liquid for cooling and insulation. Selection depends on voltage, load, ventilation, installation location and fire or environmental requirements; your project engineer should specify the appropriate type.'],
                ['question' => 'How do switchgear and panelboards differ?', 'answer' => 'Switchgear provides switching, protection and isolation for electrical circuits and is commonly used at major distribution points. Panelboards distribute power to branch circuits. The correct equipment depends on the system voltage, current, fault levels and project specification.'],
                ['question' => 'What should I check when sourcing circuit breakers or fuses?', 'answer' => 'Confirm the voltage, current rating, interrupting rating, poles and compatibility with the existing equipment. Protective devices must suit the available fault current and protection scheme; a qualified electrical professional should verify the selection.'],
                ['question' => 'Can equipment be sourced to meet specified electrical standards?', 'answer' => 'Include all required standards, listings and documentation in your inquiry, such as applicable ANSI, IEEE, NEMA or UL requirements. Compliance and supporting documentation must be confirmed for the specific product before purchase; requirements vary by project and jurisdiction.'],
                ['question' => 'What affects availability and delivery times for transformers and switchgear?', 'answer' => 'Lead times depend on the equipment type, ratings, configuration, manufacturer availability and delivery destination. Share your required date early. Our team can discuss sourcing options, with availability and delivery timing confirmed during the quotation process.'],
            ],
        ],
        'related' => [
            'title' => 'Related supply requirements',
            'links' => [
                ['label' => 'Electrical, Lighting & Cable', 'link' => 'product:Electrical, Lighting & Cable'],
                ['label' => 'All Products & Supplies', 'link' => 'link:products'],
            ],
        ],
    ],
];
