<?php
/** Company and index pages (Info Page template). Each entry carries all of its own blocks. */

if (!defined('ABSPATH')) exit;

return [
    'supplies' => [
        'title' => 'Products & Materials', 'parent' => '', 'template' => 'info', 'order' => 1,
        'content' => [
            'seo' => [
                'title' => 'Products & Supplies | Critical Infrastructure Supply | Competitive Choice',
                'description' => 'Power distribution, water treatment, HVAC, plumbing, electrical, safety, chemicals, MRO and janitorial supplies from one trusted Houston source.',
                'og_title' => 'Products & Supplies | Competitive Choice',
                'og_description' => 'Fourteen product categories for facilities, utilities, healthcare, education and construction. Request a quote.',
                'schema_about' => 'Industrial, facility maintenance and construction supplies', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'PRODUCTS & SUPPLIES', 'title' => 'Products & Supplies', 'image' => 'banner-supplies-v4.jpg', 'lead' => 'From daily facility needs to complex infrastructure projects, we source the products that keep your operation running.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Products & Supplies'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'chemical', 'learn' => true, 'title' => 'Chemical Supplies', 'description' => 'Maintenance chemicals and treatments that improve performance, maintain compliance and reduce downtime.', 'items' => [
                    ['title' => 'Enzyme Treatment & Maintainers', 'description' => 'Bio-enzymatic maintainers that digest grease and organic buildup.', 'link' => '/supplies/enzyme-treatment-maintainers/'],
                    ['title' => 'Drain & Wastewater Maintenance', 'description' => 'Digesters, cleaners and treatments for drains, lift stations and sewer lines.', 'link' => '/supplies/drain-wastewater-maintenance/'],
                    ['title' => 'HVAC Maintenance', 'description' => 'Coil cleaners and treatments that protect HVAC efficiency.', 'link' => '/supplies/hvac-maintenance/'],
                    ['title' => 'Cleaning & Sanitation', 'description' => 'Cleaners, disinfectants, paper goods and dispensing for inspection-ready facilities.', 'link' => '/supplies/custodial-janitorial-sanitation/'],
                    ['title' => 'Odor Control', 'description' => 'Neutralizers and digesters that remove odors at the source.', 'link' => '/supplies/odor-control-supplies/'],
                    ['title' => 'Equipment Maintenance', 'description' => 'Lubricants, degreasers and protectants that cut downtime.', 'link' => '/supplies/equipment-maintenance/'],
                    ['title' => 'Grounds & Seasonal Maintenance', 'description' => 'Weed control, ice melt and seasonal supplies for every property.', 'link' => '/supplies/grounds-seasonal-maintenance/'],
                    ['title' => 'Pool & Water Treatment', 'description' => 'Sanitizers, balancers and testing supplies for safe, clear water.', 'link' => '/supplies/pool-water-treatment/'],
                ]],
                ['layout' => 'cards', 'id' => 'systems', 'learn' => true, 'tint' => true, 'title' => 'Systems & Infrastructure Supplies', 'description' => 'Electrical, mechanical, plumbing and safety supplies for complex facilities and infrastructure projects.', 'items' => [
                    ['title' => 'Power Distribution & Transformers', 'description' => 'Switchgear, panelboards, breakers, fuses and transformers for critical infrastructure.', 'link' => '/supplies/power-distribution-transformers/'],
                    ['title' => 'Electrical, Lighting, Cable & Wire', 'description' => 'Cable, conduit, panels, controls and commercial lighting for complex projects.', 'link' => '/supplies/electrical-lighting-cable/'],
                    ['title' => 'Package Units & HVAC', 'description' => 'Package units, HVAC equipment and components for commercial buildings.', 'link' => '/supplies/hvac-package-units/'],
                    ['title' => 'Plumbing & PVF', 'description' => 'Pipe, valves, fittings and plumbing supplies for facilities and projects.', 'link' => '/supplies/plumbing-supplies/'],
                    ['title' => 'Fire Suppression', 'description' => 'Lithium-ion battery fire protection and added layers of safety for facilities.', 'link' => '/supplies/fire-safety/'],
                    ['title' => 'Safety', 'description' => 'PPE, first aid, spill control, locks, alarms and emergency communications.', 'link' => '/supplies/safety-security/'],
                ]],
                ['layout' => 'text', 'id' => 'about-supply', 'button_label' => 'CONTACT US', 'button_link' => 'link:contact', 'title' => 'Can’t find what you need?', 'paragraphs' => ['Tell us what your project or facility requires. Our team can source what you need, and we work with contract vehicles that make public-sector purchasing simple.']],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Services', 'link' => 'link:services'], ['label' => 'Co-Ops & Schedules', 'link' => 'link:contracts'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'services' => [
        'title' => 'Services', 'parent' => '', 'template' => 'info', 'order' => 2,
        'content' => [
            'seo' => [
                'title' => 'Services | Logistics, Procurement & Facility Support | Competitive Choice',
                'description' => 'Logistics and warehousing, procurement, program scheduling, drain care, air scenting, odor control and a work order call center.',
                'og_title' => 'Services | Competitive Choice',
                'og_description' => 'Value-added services that improve operational efficiency and continuity. Tell us what you need.',
                'schema_about' => 'Logistics, procurement and facility support services', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'SERVICES', 'title' => 'Services & Solutions', 'image' => 'banner-services-v4.jpg', 'lead' => 'Beyond product distribution, we offer value-added services that keep your operation efficient and running.', 'quote_label' => 'REQUEST A QUOTE', 'call_label' => 'CALL'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Services'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'product-services', 'learn' => true, 'title' => 'Product & Dispenser Services', 'description' => 'Programs and equipment that keep facilities clean, fresh and running.', 'items' => [
                    ['title' => 'Drain Maintenance', 'description' => 'Preventive drain care for wastewater, kitchen and dialysis drains.', 'link' => '/services/drain-services/'],
                    ['title' => 'Odor Control', 'description' => 'Targeted odor control for schools, plants, healthcare centers and commercial buildings.', 'link' => '/services/odor-control/'],
                    ['title' => 'Air Scenting Services', 'description' => 'HVAC-integrated and standalone scenting with allergy-tested fragrances.', 'link' => '/services/air-scenting-services/'],
                    ['title' => 'Chemical Supply Program', 'description' => 'Right-sized, scheduled chemical supply with the documentation your team needs.', 'link' => '/services/chemical-supply-program/'],
                    ['title' => 'Dispensing Systems', 'description' => 'Installed, calibrated and supported dispensing for accurate dosing.', 'link' => '/services/dispensing-systems/'],
                ]],
                ['layout' => 'cards', 'id' => 'operations-services', 'learn' => true, 'tint' => true, 'title' => 'Facility Operations Support Services', 'description' => 'We help organizations source, manage, deliver and support critical operational requirements.', 'items' => [
                    ['title' => 'Logistics & Procurement', 'description' => 'Warehousing, distribution, strategic sourcing and eProcurement from our Houston warehouse.', 'link' => '/services/logistics-procurement/'],
                    ['title' => 'Program Scheduling & Management', 'description' => 'Delivery coordination and scheduling for MEP and general contractor teams.', 'link' => '/services/program-scheduling/'],
                    ['title' => 'Work Order Request and Call Center Service', 'description' => 'Centralized intake, tracking and follow-up for facility service tickets.', 'link' => '/services/work-order-request-call-center/'],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Products & Supplies', 'link' => 'link:products'], ['label' => 'Who We Serve', 'link' => 'link:industries'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'industries' => [
        'title' => 'Industries We Serve', 'parent' => '', 'template' => 'info', 'order' => 40,
        'content' => [
            'seo' => [
                'title' => 'Industries We Serve | MRO Supplies & Services | Competitive Choice',
                'description' => 'Competitive Choice supports federal and local government, education, healthcare, water and wastewater, energy, commercial and construction customers.',
                'og_title' => 'Industries We Serve | Competitive Choice',
                'og_description' => 'A customer-centric partner for the organizations that keep communities running. Find your industry.',
                'schema_about' => 'Industries served by Competitive Choice', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'INDUSTRIES', 'title' => 'Industries We Serve', 'lead' => 'Everything we do is built around partnership. We take the time to understand your business and respond with agility and purpose.', 'quote_label' => 'REQUEST A QUOTE'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Industries'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'industries', 'title' => 'One dependable partner across eight sectors.', 'description' => 'Choose your industry to see how we support your operation.', 'items' => [
                    ['title' => 'Federal Government', 'description' => 'GSA and AbilityOne contract channels, TAA-compliant safety supplies, tools and lighting.', 'link' => '/industries/federal-government/'],
                    ['title' => 'State & Local Government', 'description' => 'One-stop maintenance, repair and operational supplies for public agencies.', 'link' => '/industries/state-local-government/'],
                    ['title' => 'Education / SLED', 'description' => 'Custodial, odor control, drain care and maintenance support for campuses.', 'link' => '/industries/education-sled/'],
                    ['title' => 'Healthcare', 'description' => 'Med/surge supplies, wheelchair parts, drain care and odor control.', 'link' => '/industries/healthcare/'],
                    ['title' => 'Water & Wastewater', 'description' => 'Treatment chemicals, odor control and drain care for plants and systems.', 'link' => '/industries/water-wastewater/'],
                    ['title' => 'Energy & Utilities', 'description' => 'Electrical, valves, pipe, chemicals and safety supplies for energy operations.', 'link' => '/industries/energy-utilities/'],
                    ['title' => 'Commercial & Industrial', 'description' => 'Safety supplies, tools, equipment, shelving and lighting for facilities.', 'link' => '/industries/commercial-industrial/'],
                    ['title' => 'Construction & MEP', 'description' => 'Mechanical, electrical and plumbing supplies with delivery scheduling.', 'link' => '/industries/construction-mep/'],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Products & Supplies', 'link' => 'link:products'], ['label' => 'Services', 'link' => 'link:services'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'contact-us' => [
        'title' => 'Contact Us', 'parent' => '', 'template' => 'info', 'order' => 38,
        'content' => [
            'seo' => [
                'title' => 'Contact Us | Request a Quote | Competitive Choice, Houston, TX',
                'description' => 'Contact Competitive Choice in Houston, TX. Call 713-838-1144 or send a message and our team will help identify the right products and services.',
                'og_title' => 'Contact Competitive Choice | Request a Quote',
                'og_description' => 'Want to know more? Reach out to our Houston team.',
                'schema_about' => 'Contact and quote requests for Competitive Choice', 'page_type' => 'ContactPage',
            ],
            'banner' => ['plain' => true, 'video' => 'wp-content/themes/competitive-choice/assets/video/contact-header.mp4', 'title' => 'Contact Us', 'type_lead' => 45, 'lead' => 'One conversation is all it takes to put your operation back in motion.'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Contact Us'],
            'blocks' => [
                ['layout' => 'centered', 'id' => 'lets-source', 'title' => 'Let’s Source What Your Operation Needs', 'paragraphs' => ['Tell us what you need. Our team will help identify the right products, services and procurement solutions.']],
                ['layout' => 'contact', 'id' => 'contact', 'map' => true, 'title' => '', 'description' => ''],
            ],
        ],
    ],

    'privacy-policy' => [
        'title' => 'Privacy Policy', 'parent' => '', 'template' => 'info', 'order' => 39,
        'content' => [
            'seo' => [
                'title' => 'Privacy Policy | Competitive Choice',
                'description' => 'How Competitive Choice collects, uses, discloses and protects personal information on its website.',
                'og_title' => 'Privacy Policy | Competitive Choice',
                'og_description' => 'Our privacy practices for website visitors.',
                'schema_about' => 'Website privacy policy',
            ],
            'banner' => ['title' => 'Privacy Policy', 'lead' => 'Effective date: August 11, 2023'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Privacy Policy'],
            'blocks' => [
                ['layout' => 'text', 'id' => 'intro', 'title' => 'Privacy Policy for Competitive Choice', 'paragraphs' => ['Thank you for visiting the website of Competitive Choice. This Privacy Policy outlines how we collect, use, disclose and protect your personal information. By accessing or using our website, you consent to the practices described in this Privacy Policy.']],
                ['layout' => 'text', 'id' => 'collect', 'title' => 'Information we collect', 'paragraphs' => ['We may collect personal information that you provide voluntarily, including but not limited to your name, email address, phone number and any other information you choose to provide through contact forms or other means.', 'We may also collect certain non-personal information automatically when you visit our website, such as your IP address, browser type, operating system and browsing behavior. This information is used for analytical and statistical purposes to improve our website’s functionality and user experience.']],
                ['layout' => 'text', 'id' => 'use', 'title' => 'Use of personal information', 'paragraphs' => ['We use the personal information we collect to respond to your inquiries and provide information about our products and services; to send you promotional materials or newsletters if you have opted in; to improve our website and enhance your browsing experience; and to fulfill any other purpose for which you provide the information.']],
                ['layout' => 'text', 'id' => 'disclosure', 'title' => 'Disclosure of personal information', 'paragraphs' => ['We do not sell, trade or otherwise transfer your personal information to third parties without your consent, except as described in this Privacy Policy. We may share your information with trusted third-party service providers who assist us in operating our website, conducting our business or servicing you, as long as they agree to keep this information confidential.']],
                ['layout' => 'text', 'id' => 'security', 'title' => 'Data security', 'paragraphs' => ['We implement a variety of security measures to protect the confidentiality and integrity of your personal information. However, no method of transmission over the internet is entirely secure, and we cannot guarantee the security of your information.']],
                ['layout' => 'text', 'id' => 'cookies', 'title' => 'Cookies', 'paragraphs' => ['Our website may use cookies and similar technologies to enhance your browsing experience and collect information about how our website is used. You can adjust your browser settings to refuse all or some cookies, or to alert you when cookies are being sent.']],
                ['layout' => 'text', 'id' => 'choices', 'title' => 'Your choices', 'paragraphs' => ['You have the right to access and update your personal information, and you may request to have your information removed from our records. You can also opt out of receiving promotional materials by following the instructions provided in our communications.']],
                ['layout' => 'text', 'id' => 'changes', 'title' => 'Changes to this privacy policy', 'paragraphs' => ['We reserve the right to modify or update this Privacy Policy at any time. Changes will be effective immediately upon posting to our website. We encourage you to review this Privacy Policy periodically.']],
                ['layout' => 'text', 'id' => 'contact', 'title' => 'Contact us', 'paragraphs' => ['If you have any questions or concerns about this Privacy Policy, please contact us at 713-838-1144 or sales@competitivechoice.net.']],
            ],
        ],
    ],
];
