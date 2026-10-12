<?php
/** Industry pages (Category Page template, "industry" group). Shared blocks are added by cc_page_build(). */

if (!defined('ABSPATH')) exit;

return [
    'federal-government' => [
        'title' => 'Federal Government', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 41,
        'content' => [
            'seo' => [
                'title' => 'MRO Supplies for Federal Agencies | GSA & AbilityOne | Competitive Choice',
                'description' => 'Competitive Choice supplies federal agencies through GSA and AbilityOne with TAA-compliant safety supplies, tools, lighting and facility products. Request a quote.',
                'og_title' => 'MRO Supplies for Federal Agencies | GSA & AbilityOne | Competitive Choice',
                'og_description' => 'Competitive Choice supplies federal agencies through GSA and AbilityOne with TAA-compliant safety supplies, tools, lighting and facility products. Request a quote.',
                'schema_about' => 'Supplies and services for federal government organizations',
            ],
            'banner' => ['image' => 'ind-federal-banner.jpg', 'title' => 'Dependable MRO Supply for Federal Agencies',
                'lead' => 'Quality products through competitively bid contracts and streamlined procurement channels, from a woman-owned small business with experience since 2003.'],
            'overview' => [
                'title' => 'A reliable supply partner for federal facilities and programs',
                'paragraphs' => [
                    'Federal facilities run on compliance, documentation and dependable delivery. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003, and we understand the procurement rules federal buyers work within.',
                    'Through our partnerships with the General Services Administration and AbilityOne, we offer quality products through competitively bid contracts and streamlined procurement channels. That includes TAA-compliant safety supplies, material handling, tools, lighting and AbilityOne items.',
                    'Our team handles sourcing, quoting and delivery so contracting officers and facility managers can keep requirements moving and stay audit-ready.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for federal buyers', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Complex procurement rules', 'description' => 'Federal buying has compliance requirements at every step. We help you buy through established channels such as GSA and AbilityOne.'],
                    ['title' => 'Trade Agreements Act requirements', 'description' => 'Products must meet sourcing rules. We offer TAA-compliant safety supplies and other items suited to federal purchasing.'],
                    ['title' => 'Slow, fragmented sourcing', 'description' => 'Chasing many vendors for one requirement wastes time. We source across categories through a single partner.'],
                    ['title' => 'Small-business and set-aside goals', 'description' => 'Agencies look for qualified small and women-owned suppliers. Competitive Choice holds WOSB certification.'],
                    ['title' => 'Documentation and audit readiness', 'description' => 'Buyers need clear quotes and records. We provide organized quotations and confirm contract vehicle details per purchase.'],
                    ['title' => 'Supply continuity for critical facilities', 'description' => 'Operational readiness depends on stocked, serviceable facilities. Our Houston warehouse supports routine and urgent needs.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{federal agencies and facilities}}', 'description' => 'Categories federal buyers rely on, available through competitively bid channels.',
                'items' => [
                    ['title' => 'GSA Advantage Products', 'icon' => '', 'image' => '', 'description' => 'Quality products offered through our partnership with the General Services Administration and competitively bid contracts.', 'items' => []],
                    ['title' => 'AbilityOne Items', 'icon' => '', 'image' => '', 'description' => 'AbilityOne products that support federal purchasing goals and streamlined procurement.', 'items' => []],
                    ['title' => 'TAA-Compliant Safety Supplies', 'icon' => '', 'image' => '', 'description' => 'Safety supplies suited to federal requirements, from PPE to signs, spill control and emergency equipment.', 'items' => []],
                    ['title' => 'Tools, Lighting & Material Handling', 'icon' => '', 'image' => '', 'description' => 'Tools, lighting and material handling products for maintenance, repair and operations.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Typical federal requirements we support', 'description' => 'Where agencies and programs lean on us most.',
                'items' => [
                    ['title' => 'Facility maintenance and operations', 'description' => 'Day-to-day MRO supply for federal buildings and installations.'],
                    ['title' => 'Safety and readiness programs', 'description' => 'Safety supplies and equipment to meet program and regulatory needs.'],
                    ['title' => 'Recurring and catalog purchasing', 'description' => 'Repeat buying through contract vehicles with consistent pricing and delivery.'],
                ],
            ],
            'process' => [
                'title' => 'How we support federal procurement', 'description' => 'From requirement to compliant delivery.',
                'items' => [
                    ['title' => 'Share your requirement', 'description' => 'Send your item list, specifications, quantities and the contract vehicle you intend to use.'],
                    ['title' => 'We confirm the vehicle and source', 'description' => 'We confirm which contract vehicle applies and source compliant products, including TAA-compliant items where required.'],
                    ['title' => 'Receive a clear quotation', 'description' => 'You get a documented quote with availability and delivery timing confirmed.'],
                    ['title' => 'Order, deliver and support', 'description' => 'We coordinate delivery to your location and support reorders and follow-up.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why federal buyers choose to work with Competitive Choice',
                'paragraphs' => [
                    'We combine federal contract experience with the responsiveness of a small business. Our WOSB certification and partnerships with GSA and AbilityOne help agencies meet both supply and small-business goals.',
                    'Ask our team which contract vehicles and certifications apply to your purchase. We confirm eligibility for each requirement.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'Do you offer GSA and AbilityOne products?', 'answer' => 'Yes. We offer products through our partnerships with the General Services Administration and AbilityOne, including GSA Advantage listings. Contract vehicle details are confirmed for each purchase.'],
                ['question' => 'Can you supply TAA-compliant products?', 'answer' => 'Yes. We offer TAA-compliant safety supplies and can source other compliant items. Tell us your requirement when you request a quote.'],
                ['question' => 'Are you a certified small business?', 'answer' => 'Competitive Choice is a woman-owned business with WOSB certification.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your item list, quantities, delivery location and the contract vehicle you plan to use.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'State & Local Government', 'link' => '/industries/state-local-government/'],
                ['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'],
                ['label' => 'Certifications', 'link' => 'link:certifications'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'state-local-government' => [
        'title' => 'State & Local Government', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 42,
        'content' => [
            'seo' => [
                'title' => 'MRO Supplies for State & Local Government | Competitive Choice',
                'description' => 'One-stop maintenance, repair and operational supplies for state and local government facilities, through contract awards and cooperative purchasing. Request a quote.',
                'og_title' => 'MRO Supplies for State & Local Government | Competitive Choice',
                'og_description' => 'One-stop maintenance, repair and operational supplies for state and local government facilities, through contract awards and cooperative purchasing. Request a quote.',
                'schema_about' => 'Supplies and services for state & local government organizations',
            ],
            'banner' => ['image' => 'ind-state-banner.jpg', 'title' => 'One-Stop MRO Supply for State & Local Government',
                'lead' => 'Contract-ready maintenance, repair and operational supplies for cities, counties and public agencies, delivered by a team that knows public procurement.'],
            'overview' => [
                'title' => 'A dependable partner for the facilities that serve your community',
                'paragraphs' => [
                    'Public works yards, municipal buildings, courthouses and utility facilities all depend on a steady flow of supplies. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003.',
                    'We have been awarded numerous contracts, from specific product awards and commodity contracts to full catalog agreements. We are your one-stop shop for maintenance, repair and operational needs for local and state facilities.',
                    'Our team works within public purchasing requirements and helps you get the right products, with clear quotes and dependable delivery.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for state and local government buyers', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Strict public purchasing rules', 'description' => 'Public buyers need compliant, documented purchasing. We help you buy through contracts and cooperative purchasing programs.'],
                    ['title' => 'Many vendors for many needs', 'description' => 'Public works, buildings and utilities each buy different products. We cover MRO categories through one supplier.'],
                    ['title' => 'Tight budgets', 'description' => 'Every dollar is scrutinized. Strategic sourcing and competitive pricing help stretch budgets.'],
                    ['title' => 'Aging infrastructure', 'description' => 'Older facilities need constant maintenance. We supply the chemicals, tools, parts and equipment to keep them running.'],
                    ['title' => 'Emergency response needs', 'description' => 'Storms, outages and failures cannot wait. Our warehouse and team support urgent requests.'],
                    ['title' => 'Staff time spent on procurement', 'description' => 'Small teams cannot chase every quote. Our eProcurement platform and quoting support ease the workload.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{state and local government facilities}}', 'description' => 'The categories public agencies buy most often.',
                'items' => [
                    ['title' => 'Facility Maintenance & MRO', 'icon' => '', 'image' => '', 'description' => 'Tools, fasteners, lubricants and general maintenance supplies for public buildings.', 'items' => []],
                    ['title' => 'Water & Wastewater Products', 'icon' => '', 'image' => '', 'description' => 'Treatment chemicals and supplies for municipal water and wastewater operations.', 'items' => []],
                    ['title' => 'Safety & Security', 'icon' => '', 'image' => '', 'description' => 'PPE, signs, spill control and emergency communications for public facilities and crews.', 'items' => []],
                    ['title' => 'Custodial & Janitorial', 'icon' => '', 'image' => '', 'description' => 'Cleaners, paper, soap and dispensing systems for municipal buildings.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where public agencies rely on us', 'description' => 'Typical state and local requirements.',
                'items' => [
                    ['title' => 'Public works and utilities', 'description' => 'Chemicals, electrical products and tools for crews and plants.'],
                    ['title' => 'City, county and state buildings', 'description' => 'Janitorial, lighting and maintenance supplies for offices and courthouses.'],
                    ['title' => 'Contract and catalog buying', 'description' => 'Product awards, commodity contracts and full catalog agreements.'],
                ],
            ],
            'process' => [
                'title' => 'How we support public-sector buying', 'description' => 'From requirement to delivery under your purchasing rules.',
                'items' => [
                    ['title' => 'Share your requirement', 'description' => 'Send your item list, specifications, quantities and the contract or purchasing program you plan to use.'],
                    ['title' => 'We confirm and source', 'description' => 'We confirm which contract vehicle applies and source competitively priced, compliant products.'],
                    ['title' => 'Receive a clear quote', 'description' => 'You get a documented quotation with availability and delivery timing.'],
                    ['title' => 'Deliver and support', 'description' => 'We coordinate delivery to your site and support recurring orders and follow-up.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why state and local government teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'Public-sector buyers can ask about our contract vehicles and certifications, including GSA MAS, TIPS, BuyBoard and WOSB. We confirm which apply to each purchase.',
                    'We combine a broad MRO catalog with a team that responds like a partner, not a call queue.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What contracts do you hold?', 'answer' => 'We have been awarded numerous contracts, including specific product awards, commodity contracts and full catalog agreements. Ask our team which apply to your purchase.'],
                ['question' => 'Do you support cooperative purchasing?', 'answer' => 'Yes. Public-sector buyers can ask about our TIPS and BuyBoard contract vehicles when they submit a requirement.'],
                ['question' => 'Can you handle urgent orders?', 'answer' => 'Yes. Our Houston warehouse and hands-on team support urgent needs. Timing is confirmed for each request.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your items, quantities, location and contract details.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Education / SLED', 'link' => '/industries/education-sled/'],
                ['label' => 'Water & Wastewater', 'link' => '/industries/water-wastewater/'],
                ['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'education-sled' => [
        'title' => 'Education / SLED', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 43,
        'content' => [
            'seo' => [
                'title' => 'MRO & Custodial Supplies for Schools & Education | Competitive Choice',
                'description' => 'Maintenance, custodial, odor control and facility supplies and services for school districts and education facilities. Request a quote.',
                'og_title' => 'MRO & Custodial Supplies for Schools & Education | Competitive Choice',
                'og_description' => 'Maintenance, custodial, odor control and facility supplies and services for school districts and education facilities. Request a quote.',
                'schema_about' => 'Supplies and services for education / sled organizations',
            ],
            'banner' => ['image' => 'ind-education-banner.jpg', 'title' => 'Facility Supply and Support for Schools and Education',
                'lead' => 'Clean, safe, well-maintained campuses with a single partner for supplies, odor control, drain care and work order support.'],
            'overview' => [
                'title' => 'Keeping campuses clean, safe and ready for learning',
                'paragraphs' => [
                    'School districts and education facilities manage large buildings, tight budgets and constant demand on restrooms, hallways and shared spaces. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving public-sector and institutional buyers since 2003.',
                    'We are your one-stop shop for maintenance, repair and operational needs for local, state and education facilities, with contract awards ranging from product awards to full catalog agreements.',
                    'Beyond products, our services help campuses stay fresh and responsive, including odor control for restrooms and shared spaces and a work order request call center that gives campuses one point of contact.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for schools and education facilities', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Persistent restroom odors', 'description' => 'High-use restrooms, especially boys’ bathrooms, hold odors that ordinary cleaning does not remove. Targeted odor control solves them at the source.'],
                    ['title' => 'Large campuses with many needs', 'description' => 'Custodial, maintenance and safety supplies are all needed at once. We supply them through one partner.'],
                    ['title' => 'Tight education budgets', 'description' => 'Districts must stretch every dollar. Strategic sourcing and contract buying help control costs.'],
                    ['title' => 'Drains, kitchens and plumbing wear', 'description' => 'Cafeterias and restrooms strain plumbing. Total Drain Care helps prevent clogs, odors and pests.'],
                    ['title' => 'Slow maintenance requests', 'description' => 'Campus staff need one place to report issues. Our call center logs, prioritizes and follows up on every ticket.'],
                    ['title' => 'Public purchasing requirements', 'description' => 'Education buyers need compliant purchasing. We support contract and cooperative vehicles such as TIPS and BuyBoard.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{schools and education facilities}}', 'description' => 'Products and services for campuses of every size.',
                'items' => [
                    ['title' => 'Custodial & Janitorial Supplies', 'icon' => '', 'image' => '', 'description' => 'Cleaners, disinfectants, paper, soap and dispensing systems for classrooms, restrooms and common areas.', 'items' => []],
                    ['title' => 'Odor Control & Air Care', 'icon' => '', 'image' => '', 'description' => 'Odor control for restrooms and shared spaces, plus allergy-tested air scenting.', 'items' => []],
                    ['title' => 'Drain & Plumbing Care', 'icon' => '', 'image' => '', 'description' => 'Total Drain Care programs and plumbing supplies for kitchens, restrooms and utility areas.', 'items' => []],
                    ['title' => 'Maintenance, Safety & Lighting', 'icon' => '', 'image' => '', 'description' => 'Tools, safety supplies and lighting for facility and grounds crews.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where campuses rely on us', 'description' => 'Typical education requirements.',
                'items' => [
                    ['title' => 'School districts', 'description' => 'District-wide supply and one point of contact for campus maintenance needs.'],
                    ['title' => 'Colleges and universities', 'description' => 'Facility supplies and services for academic and residential buildings.'],
                    ['title' => 'Contract and cooperative buying', 'description' => 'Product awards and catalog agreements, with TIPS and BuyBoard vehicles available.'],
                ],
            ],
            'process' => [
                'title' => 'How we support education facilities', 'description' => 'From campus need to dependable delivery.',
                'items' => [
                    ['title' => 'Tell us about your campuses', 'description' => 'Share your facilities, products used, problem areas and any contract or purchasing program.'],
                    ['title' => 'We recommend products and services', 'description' => 'We propose supplies and services, such as odor control or drain care, that fit your sites and budget.'],
                    ['title' => 'Receive a clear quote', 'description' => 'You get a documented quotation with delivery timing confirmed.'],
                    ['title' => 'Deliver and support', 'description' => 'We deliver to your campuses and support reorders, service schedules and follow-up.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why education teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'We understand how schools buy and how campuses run. Our contract experience, small-business responsiveness and service options give districts one partner for products and support.',
                    'Ask about our contract vehicles and certifications, including TIPS, BuyBoard and WOSB. We confirm what applies to each purchase.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'Can you help with restroom odors in schools?', 'answer' => 'Yes. Our odor control solutions are designed to eliminate odors at the source in high-use restrooms and shared spaces.'],
                ['question' => 'Do you offer a single point of contact for maintenance requests?', 'answer' => 'Our Work Order Request Call Center can serve as a centralized hub that logs, prioritizes and follows up on service tickets.'],
                ['question' => 'Do you work with school districts through cooperative contracts?', 'answer' => 'Education buyers can ask about our TIPS and BuyBoard contract vehicles when they submit a requirement.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your products, campuses, quantities and contract details.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Odor Control', 'link' => '/services/odor-control/'],
                ['label' => 'Work Order Request Call Center', 'link' => '/services/work-order-request-call-center/'],
                ['label' => 'Custodial, Janitorial & Sanitation', 'link' => '/products-and-materials/custodial-janitorial-sanitation/'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'healthcare' => [
        'title' => 'Healthcare', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 44,
        'content' => [
            'seo' => [
                'title' => 'Medical, Surge & Facility Supplies for Healthcare | Competitive Choice',
                'description' => 'Med/surge and safety products, wheelchairs and repair parts, drain care and odor control for hospitals, dialysis centers and healthcare facilities. Request a quote.',
                'og_title' => 'Medical, Surge & Facility Supplies for Healthcare | Competitive Choice',
                'og_description' => 'Med/surge and safety products, wheelchairs and repair parts, drain care and odor control for hospitals, dialysis centers and healthcare facilities. Request a quote.',
                'schema_about' => 'Supplies and services for healthcare organizations',
            ],
            'banner' => ['image' => 'ind-healthcare-banner.jpg', 'title' => 'Supplies and Facility Support for Healthcare Providers',
                'lead' => 'A well-organized, fully stocked facility is vital. We help healthcare teams keep supplies and facilities ready for patients and staff.'],
            'overview' => [
                'title' => 'A dependable partner for healthcare facilities',
                'paragraphs' => [
                    'In healthcare, a well-organized, fully stocked facility is vital. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003.',
                    'We help solve day-to-day challenges with med/surge and safety products, wheelchairs and wheelchair repair parts, and thousands of other medical supplies.',
                    'Our services support the facility itself too, with drain care that supports infection control in dialysis centers, odor control for healthcare centers and air scenting suited to sensitive environments.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for healthcare providers', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Stock-outs of everyday supplies', 'description' => 'Running short disrupts care. We supply med/surge and safety products with dependable fulfillment.'],
                    ['title' => 'Wheelchair downtime', 'description' => 'Broken equipment slows patient movement. We supply wheelchairs and wheelchair repair parts.'],
                    ['title' => 'Infection control concerns', 'description' => 'Sanitary conditions are critical. Drain care reduces odor-causing bacteria and backups in dialysis and healthcare settings.'],
                    ['title' => 'Odors in patient and public areas', 'description' => 'Odors affect comfort and perception. Targeted odor control eliminates them at the source.'],
                    ['title' => 'Many suppliers to manage', 'description' => 'Clinical and facility needs span categories. We source thousands of items through one partner.'],
                    ['title' => 'Service requests that slip', 'description' => 'Facility issues need tracking and follow-up. Our call center logs, dispatches and confirms resolution.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{healthcare facilities}}', 'description' => 'Products and services for clinical and facility needs.',
                'items' => [
                    ['title' => 'Med/Surge & Medical Supplies', 'icon' => '', 'image' => '', 'description' => 'Med/surge and safety products and thousands of other medical supplies.', 'items' => []],
                    ['title' => 'Wheelchairs & Repair Parts', 'icon' => '', 'image' => '', 'description' => 'Wheelchairs and wheelchair repair parts to keep patient mobility equipment in service.', 'items' => []],
                    ['title' => 'Drain Care for Dialysis & Healthcare', 'icon' => '', 'image' => '', 'description' => 'Total Drain Care that supports infection control by reducing odor-causing bacteria and backups.', 'items' => []],
                    ['title' => 'Odor Control & Air Scenting', 'icon' => '', 'image' => '', 'description' => 'Odor control and allergy-tested air scenting for waiting rooms, restrooms and patient areas.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where healthcare teams rely on us', 'description' => 'Typical healthcare requirements.',
                'items' => [
                    ['title' => 'Hospital systems', 'description' => 'Tracked service requests and dependable supply across departments.'],
                    ['title' => 'Dialysis centers', 'description' => 'Drain care and odor control for sanitary, comfortable environments.'],
                    ['title' => 'Clinics and care centers', 'description' => 'Everyday medical, safety and facility supplies.'],
                ],
            ],
            'process' => [
                'title' => 'How we support healthcare providers', 'description' => 'From supply need to reliable delivery.',
                'items' => [
                    ['title' => 'Share your needs', 'description' => 'Tell us the supplies, equipment or facility problems involved and your delivery requirements.'],
                    ['title' => 'We source and recommend', 'description' => 'We source products and recommend services, such as drain care or odor control, for your environment.'],
                    ['title' => 'Receive a clear quote', 'description' => 'You get a documented quotation with availability and timing confirmed.'],
                    ['title' => 'Deliver and support', 'description' => 'We coordinate delivery and support reorders, service schedules and follow-up.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why healthcare teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'Healthcare buyers need dependable supply and responsive support. We combine broad product access with services built for sensitive environments.',
                    'Ask about our contract vehicles and certifications. We confirm which apply to each purchase.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What medical supplies can you provide?', 'answer' => 'We provide med/surge and safety products, wheelchairs and wheelchair repair parts, and thousands of other medical supplies.'],
                ['question' => 'Can you support dialysis centers?', 'answer' => 'Yes. Our drain care supports infection control by reducing odor-causing bacteria and preventing backups. Scheduled service helps providers meet stringent standards.'],
                ['question' => 'Do you offer odor control for healthcare centers?', 'answer' => 'Yes. We offer odor control formulated for facilities including healthcare centers.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your items, quantities and delivery locations.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Drain Services', 'link' => '/services/drain-services/'],
                ['label' => 'Odor Control', 'link' => '/services/odor-control/'],
                ['label' => 'Safety & Security', 'link' => '/products-and-materials/safety-security/'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'water-wastewater' => [
        'title' => 'Water & Wastewater', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 45,
        'content' => [
            'seo' => [
                'title' => 'Water & Wastewater Treatment Supplies & Odor Control | Competitive Choice',
                'description' => 'Treatment chemicals, odor control, drain care and supplies for municipal and industrial water and wastewater facilities. Request a quote.',
                'og_title' => 'Water & Wastewater Treatment Supplies & Odor Control | Competitive Choice',
                'og_description' => 'Treatment chemicals, odor control, drain care and supplies for municipal and industrial water and wastewater facilities. Request a quote.',
                'schema_about' => 'Supplies and services for water & wastewater organizations',
            ],
            'banner' => ['image' => 'ind-water-banner.jpg', 'title' => 'Supplies and Odor Control for Water & Wastewater Operations',
                'lead' => 'Reliable products and targeted solutions for treatment plants and systems that communities depend on every day.'],
            'overview' => [
                'title' => 'A practical partner for water and wastewater operators',
                'paragraphs' => [
                    'Water and wastewater facilities run around the clock and have little room for supply gaps. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003.',
                    'We supply grease and odor control, disinfection and sanitizing products, and corrosion, scale and enzyme treatments, backed by a team that understands how plants buy.',
                    'Our services go further, with industrial-strength odor control for sewer gas and Total Drain Care that targets the biofilm and buildup at the heart of wastewater system health.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for water and wastewater operators', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Sewer gas odors', 'description' => 'Odors affect staff and neighbors. Industrial-strength solutions eliminate them at the source in municipal systems.'],
                    ['title' => 'Grease and organic buildup', 'description' => 'Fats, oils and grease clog lines and floor sinks. Biological treatments break them down.'],
                    ['title' => 'Corrosion and scale', 'description' => 'Buildup damages equipment and raises costs. Corrosion, scale and enzyme treatments protect assets.'],
                    ['title' => 'Disinfection requirements', 'description' => 'Facilities must meet sanitary standards. We supply disinfection and sanitizing products.'],
                    ['title' => 'Supply interruptions', 'description' => 'Plants cannot wait on slow ordering. Our Houston warehouse and team support urgent needs.'],
                    ['title' => 'Public purchasing complexity', 'description' => 'Utilities buy under public rules. We support contract-ready purchasing and clear quotes.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{water and wastewater facilities}}', 'description' => 'Products and services built for treatment operations.',
                'items' => [
                    ['title' => 'Grease & Odor Control', 'icon' => '', 'image' => '', 'description' => 'Biological and chemical solutions for grease, odors and drain lines.', 'items' => []],
                    ['title' => 'Disinfection & Sanitizing', 'icon' => '', 'image' => '', 'description' => 'Disinfectants and sanitizers for sanitary operations.', 'items' => []],
                    ['title' => 'Corrosion, Scale & Enzyme Treatments', 'icon' => '', 'image' => '', 'description' => 'Treatments that protect equipment and keep systems flowing.', 'items' => []],
                    ['title' => 'Drain Services & Odor Control Service', 'icon' => '', 'image' => '', 'description' => 'Total Drain Care and targeted odor control programs, delivered as a service.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where operators rely on us', 'description' => 'Typical water and wastewater requirements.',
                'items' => [
                    ['title' => 'Municipal treatment plants', 'description' => 'Odor control and treatment products for resilient municipal systems.'],
                    ['title' => 'Utility districts and city infrastructure', 'description' => 'Supplies and services where odor complaints affect communities.'],
                    ['title' => 'Industrial wastewater systems', 'description' => 'Grease, scale and biofilm control for high-use lines.'],
                ],
            ],
            'process' => [
                'title' => 'How we support water and wastewater operations', 'description' => 'From plant requirement to reliable delivery.',
                'items' => [
                    ['title' => 'Tell us about your facility', 'description' => 'Share the system, problem areas, products used and volumes.'],
                    ['title' => 'We recommend a solution', 'description' => 'We propose products or a service program matched to your treatment process and odor or buildup issues.'],
                    ['title' => 'Receive a clear quote', 'description' => 'You get a documented quotation with availability and timing confirmed.'],
                    ['title' => 'Deliver and support', 'description' => 'We coordinate delivery and support ongoing replenishment and follow-up.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why water and wastewater teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'We combine specialty chemical roots with practical logistics support, so operators get the right products and a partner that responds.',
                    'Ask about our contract vehicles and certifications. We confirm which apply to each purchase.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What products do you offer for wastewater plants?', 'answer' => 'Grease and odor control, disinfection and sanitizing products, and corrosion, scale and enzyme treatments, plus industrial-strength odor control for sewer gas.'],
                ['question' => 'Can you help with odors at our plant?', 'answer' => 'Yes. Our odor control solutions are designed to eliminate sewer gas odors at the source in municipal systems.'],
                ['question' => 'Do you offer drain care for wastewater systems?', 'answer' => 'Yes. Total Drain Care uses biological treatments that break down fats, oils, grease and biofilm.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your facility, products or problem areas, and timing.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Drain & Wastewater Maintenance Products', 'link' => '/products-and-materials/drain-wastewater-maintenance/'],
                ['label' => 'Odor Control', 'link' => '/services/odor-control/'],
                ['label' => 'Drain Services', 'link' => '/services/drain-services/'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'energy-utilities' => [
        'title' => 'Energy & Utilities', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 46,
        'content' => [
            'seo' => [
                'title' => 'Energy & Utilities Supplies | Electrical, Chemicals & Safety | Competitive Choice',
                'description' => 'Electrical, datacomm, valves, pipe, fittings, chemicals and safety supplies for energy, utility and midstream operations. Request a quote.',
                'og_title' => 'Energy & Utilities Supplies | Electrical, Chemicals & Safety | Competitive Choice',
                'og_description' => 'Electrical, datacomm, valves, pipe, fittings, chemicals and safety supplies for energy, utility and midstream operations. Request a quote.',
                'schema_about' => 'Supplies and services for energy & utilities organizations',
            ],
            'banner' => ['image' => 'ind-energy-banner.jpg', 'title' => 'Supplies for Energy and Utility Operations',
                'lead' => 'Our chemicals help facilities get it clean and keep it green, backed by the electrical, piping and safety products energy teams need.'],
            'overview' => [
                'title' => 'A responsive supplier for energy producers and utilities',
                'paragraphs' => [
                    'Energy and utility operations depend on the right equipment arriving on time. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003.',
                    'Our chemicals help facilities worldwide get it clean and keep it green. We meet drilling, completion, production and midstream requirements with electrical, datacomm, valves, pipe, fittings, structural steel, tools, gauges, rod pumps, production equipment and safety supplies.',
                    'For utilities, our power distribution and transformer sourcing supports critical infrastructure with ratings and timing confirmed for each requirement.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for energy and utility operators', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Downtime from missing parts', 'description' => 'Delays at the wellsite or substation are costly. We source electrical, piping and production items quickly.'],
                    ['title' => 'Many categories, many vendors', 'description' => 'Operations buy across electrical, mechanical and safety. We supply them through one partner.'],
                    ['title' => 'Equipment and material specifications', 'description' => 'Ratings and standards matter. Our team checks your specifications before sourcing.'],
                    ['title' => 'Cleaning and maintenance chemistry', 'description' => 'Facilities need effective, responsible chemicals. Our chemicals help keep sites clean and green.'],
                    ['title' => 'Safety compliance', 'description' => 'Crews need dependable safety supplies. We supply PPE, signs, spill control and more.'],
                    ['title' => 'Logistics for remote or fast-moving work', 'description' => 'Staging and delivery matter. Our Houston warehouse and logistics support help meet timelines.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{energy and utility operations}}', 'description' => 'Categories for drilling, completion, production, midstream and utilities.',
                'items' => [
                    ['title' => 'Electrical & Datacomm', 'icon' => '', 'image' => '', 'description' => 'Electrical, datacomm, cable and conduit products for energy facilities and utilities.', 'items' => []],
                    ['title' => 'Valves, Pipe & Fittings', 'icon' => '', 'image' => '', 'description' => 'Valves, pipe, fittings, structural steel and gauges for production and midstream.', 'items' => []],
                    ['title' => 'Production Equipment & Tools', 'icon' => '', 'image' => '', 'description' => 'Rod pumps, production equipment and tools.', 'items' => []],
                    ['title' => 'Chemicals & Safety Supplies', 'icon' => '', 'image' => '', 'description' => 'Maintenance chemicals that get it clean and keep it green, plus safety supplies for crews.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where energy teams rely on us', 'description' => 'Typical energy and utility requirements.',
                'items' => [
                    ['title' => 'Drilling, completion and production', 'description' => 'Equipment and supplies for upstream operations.'],
                    ['title' => 'Midstream facilities', 'description' => 'Valves, pipe, fittings and safety supplies for midstream sites.'],
                    ['title' => 'Utilities and power distribution', 'description' => 'Transformers, switchgear and electrical equipment sourcing.'],
                ],
            ],
            'process' => [
                'title' => 'How we support energy and utility buyers', 'description' => 'From specification to delivery.',
                'items' => [
                    ['title' => 'Share your requirement', 'description' => 'Send your specification, equipment schedule or bill of materials.'],
                    ['title' => 'We review and source', 'description' => 'Our team checks ratings, standards and timing, then looks for suitable products.'],
                    ['title' => 'Receive your quote', 'description' => 'You get a clear quotation with availability and delivery timing confirmed.'],
                    ['title' => 'Order and delivery', 'description' => 'Once you approve, we support the purchase and coordinate delivery to your location.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why energy and utility teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'We bring chemical expertise, broad product access and Houston-based logistics to energy buyers who cannot afford delays.',
                    'Ask about our contract vehicles and certifications. We confirm which apply to each purchase.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What do you supply to energy operations?', 'answer' => 'Electrical, datacomm, valves, pipe, fittings, structural steel, tools, gauges, rod pumps, production equipment, safety supplies and maintenance chemicals.'],
                ['question' => 'Do you support midstream requirements?', 'answer' => 'Yes. We meet drilling, completion, production and midstream requirements with the categories listed above.'],
                ['question' => 'Can you source transformers and switchgear for utilities?', 'answer' => 'Yes. See our Power Distribution & Transformers page, or send your specification for a quote.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your specification, quantities and delivery location.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Power Distribution & Transformers', 'link' => '/products-and-materials/power-distribution-transformers/'],
                ['label' => 'Electrical, Lighting & Cable', 'link' => '/products-and-materials/electrical-lighting-cable/'],
                ['label' => 'Logistics & Procurement', 'link' => '/services/logistics-procurement/'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'commercial-industrial' => [
        'title' => 'Commercial & Industrial', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 47,
        'content' => [
            'seo' => [
                'title' => 'MRO Supplies for Commercial & Industrial Facilities | Competitive Choice',
                'description' => 'Safety supplies, tools, equipment, shelving, lighting, vacuums and carpet cleaners for commercial and industrial facilities. Request a quote.',
                'og_title' => 'MRO Supplies for Commercial & Industrial Facilities | Competitive Choice',
                'og_description' => 'Safety supplies, tools, equipment, shelving, lighting, vacuums and carpet cleaners for commercial and industrial facilities. Request a quote.',
                'schema_about' => 'Supplies and services for commercial & industrial organizations',
            ],
            'banner' => ['image' => 'ind-commercial-banner.jpg', 'title' => 'MRO Supply That Keeps Commercial and Industrial Operations Running',
                'lead' => 'Failure to procure essential MRO products can stall a production line. We help you keep supplies, equipment and facilities ready.'],
            'overview' => [
                'title' => 'A single source for the products your facility runs on',
                'paragraphs' => [
                    'Commercial and industrial facilities cannot afford to wait on missing supplies. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003.',
                    'We are your source for commercial safety supplies, tools, equipment, shelving, lighting, vacuums, carpet cleaners and other items needed to complete commercial projects.',
                    'Our logistics and procurement services add warehousing, eProcurement and contract support, so purchasing runs smoothly across locations.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for commercial and industrial customers', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Production stalls from missing supplies', 'description' => 'A missing part can halt a line. We source MRO products and support urgent requests.'],
                    ['title' => 'Too many vendors', 'description' => 'Chasing separate suppliers for tools, safety and cleaning wastes time. We cover categories through one partner.'],
                    ['title' => 'Safety and compliance gaps', 'description' => 'Workplaces need dependable safety supplies. We supply PPE, signs, spill control and emergency equipment.'],
                    ['title' => 'Facility upkeep', 'description' => 'Lighting, cleaning equipment and storage need steady replenishment. We supply and replenish them.'],
                    ['title' => 'Purchasing overhead', 'description' => 'Manual ordering adds cost. Our eProcurement platform simplifies orders and spend tracking.'],
                    ['title' => 'Multi-site consistency', 'description' => 'Buying across locations is hard to standardize. We provide consistent sourcing and visibility.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{commercial and industrial facilities}}', 'description' => 'The categories commercial and industrial buyers order most.',
                'items' => [
                    ['title' => 'Safety Supplies', 'icon' => '', 'image' => '', 'description' => 'Commercial safety supplies, from PPE to signs and spill control.', 'items' => []],
                    ['title' => 'Tools & Equipment', 'icon' => '', 'image' => '', 'description' => 'Tools and equipment for maintenance, repair and operations.', 'items' => []],
                    ['title' => 'Shelving & Lighting', 'icon' => '', 'image' => '', 'description' => 'Shelving and lighting for warehouses, offices and production areas.', 'items' => []],
                    ['title' => 'Vacuums & Floor Care', 'icon' => '', 'image' => '', 'description' => 'Vacuums, carpet cleaners and floor care supplies.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where commercial teams rely on us', 'description' => 'Typical commercial and industrial requirements.',
                'items' => [
                    ['title' => 'Manufacturing and production', 'description' => 'Supplies and tools that keep lines moving.'],
                    ['title' => 'Office and commercial buildings', 'description' => 'Lighting, janitorial and facility supplies.'],
                    ['title' => 'Warehouses and distribution', 'description' => 'Shelving, safety and material handling products.'],
                ],
            ],
            'process' => [
                'title' => 'How we support commercial and industrial buyers', 'description' => 'From requirement to repeatable supply.',
                'items' => [
                    ['title' => 'Share your requirement', 'description' => 'Send your item list, quantities, locations and ordering frequency.'],
                    ['title' => 'We source and recommend', 'description' => 'We source products and suggest stocking or eProcurement options that fit your operation.'],
                    ['title' => 'Receive a clear quote', 'description' => 'You get a documented quotation with availability and delivery timing.'],
                    ['title' => 'Order, deliver and repeat', 'description' => 'We coordinate delivery and support recurring orders across your sites.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why commercial and industrial teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'We combine broad MRO access with the responsiveness of a hands-on team and the systems of a larger supplier.',
                    'Ask about our contract vehicles and certifications. We confirm which apply to each purchase.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What commercial products do you supply?', 'answer' => 'Commercial safety supplies, tools, equipment, shelving, lighting, vacuums, carpet cleaners and other items needed to complete commercial projects.'],
                ['question' => 'Can you support recurring orders?', 'answer' => 'Yes. Our eProcurement platform and Houston warehouse support recurring and urgent orders.'],
                ['question' => 'Do you serve multiple sites?', 'answer' => 'Yes. We can coordinate sourcing and delivery across locations.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your items, quantities and locations.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Equipment Maintenance', 'link' => '/products-and-materials/equipment-maintenance/'],
                ['label' => 'Safety & Security', 'link' => '/products-and-materials/safety-security/'],
                ['label' => 'Logistics & Procurement', 'link' => '/services/logistics-procurement/'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

    'construction-mep' => [
        'title' => 'Construction & MEP', 'parent' => 'industries', 'template' => 'category', 'group' => 'industry', 'order' => 48,
        'content' => [
            'seo' => [
                'title' => 'Construction & MEP Supplies and Scheduling | Competitive Choice',
                'description' => 'Mechanical, electrical and plumbing supplies, building wire, pipe supports and delivery scheduling for construction and MEP contractors. Request a quote.',
                'og_title' => 'Construction & MEP Supplies and Scheduling | Competitive Choice',
                'og_description' => 'Mechanical, electrical and plumbing supplies, building wire, pipe supports and delivery scheduling for construction and MEP contractors. Request a quote.',
                'schema_about' => 'Supplies and services for construction & mep organizations',
            ],
            'banner' => ['image' => 'ind-construction-banner.jpg', 'title' => 'Supplies and Scheduling for Construction and MEP Teams',
                'lead' => 'Mechanical, electrical and plumbing supplies, delivered in step with your project milestones.'],
            'overview' => [
                'title' => 'A project partner for MEP and general contractors',
                'paragraphs' => [
                    'Construction schedules leave little room for late materials. Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003.',
                    'Choose us for your construction and MEP supply requirements. We can source what your project needs, from building wire, thermometers and smoke detectors to pipe supports, across mechanical, electrical and plumbing supplies.',
                    'Our Program & Scheduling Services use NetSuite Facility Services to track schedules, manage procurement timelines and keep visibility across job sites.',
                ],
            ],
            'problems' => [
                'title' => 'The problems we solve for construction and MEP teams', 'description' => 'The challenges that slow down operations, and how we address each one.',
                'items' => [
                    ['title' => 'Materials that arrive late', 'description' => 'Late deliveries idle crews. We coordinate deliveries to your milestones.'],
                    ['title' => 'Material sprawl across trades', 'description' => 'Mechanical, electrical and plumbing each need different supplies. We source across all three.'],
                    ['title' => 'Urgent field needs', 'description' => 'Unplanned repairs cannot wait. We expedite products for urgent repairs.'],
                    ['title' => 'Staging for phased work', 'description' => 'Phased installs need materials at the right time. We stage materials for phased installation.'],
                    ['title' => 'Poor visibility across job sites', 'description' => 'Tracking inventory across sites is hard. We keep schedules and inventory visible.'],
                    ['title' => 'Too many suppliers to chase', 'description' => 'Project leads lose time on follow-up. We act as an extension of your project team.'],
                ],
            ],
            'equipment' => [
                'title' => 'What we supply to {{construction and MEP teams}}', 'description' => 'Mechanical, electrical and plumbing supplies, plus scheduling support.',
                'items' => [
                    ['title' => 'Electrical Supplies', 'icon' => '', 'image' => '', 'description' => 'Building wire, conduit, panels, lighting and datacomm for electrical contractors.', 'items' => []],
                    ['title' => 'Mechanical & HVAC', 'icon' => '', 'image' => '', 'description' => 'HVAC chemicals and supplies for mechanical and package unit work.', 'items' => []],
                    ['title' => 'Plumbing & Pipe Supports', 'icon' => '', 'image' => '', 'description' => 'Plumbing supplies, pipe supports and related products.', 'items' => []],
                    ['title' => 'Program & Scheduling Support', 'icon' => '', 'image' => '', 'description' => 'Delivery scheduling, procurement timeline management and multi-site visibility.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where contractors rely on us', 'description' => 'Typical construction and MEP requirements.',
                'items' => [
                    ['title' => 'MEP contractors', 'description' => 'Staged materials and coordinated deliveries for mechanical, electrical and plumbing work.'],
                    ['title' => 'General contractors', 'description' => 'A reliable partner aligned with your milestones and communication needs.'],
                    ['title' => 'Phased and urgent work', 'description' => 'Staging for phased installation and expediting for urgent repairs.'],
                ],
            ],
            'process' => [
                'title' => 'How we support construction and MEP projects', 'description' => 'Aligned to your milestones from kickoff to closeout.',
                'items' => [
                    ['title' => 'Share your project and schedule', 'description' => 'Send your bill of materials, milestones, job sites and key contacts.'],
                    ['title' => 'We source and plan', 'description' => 'We source supplies and map procurement timelines and deliveries to your schedule.'],
                    ['title' => 'Stage and deliver', 'description' => 'Materials are staged for phased installation and delivered to match site conditions.'],
                    ['title' => 'Track and adapt', 'description' => 'We monitor inventory and schedules, adjust when plans change and expedite urgent needs.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'trust' => [
                'title' => 'Why construction and MEP teams choose to work with Competitive Choice',
                'paragraphs' => [
                    'We combine broad MEP product access with scheduling support built for construction environments.',
                    'Ask about our contract vehicles and certifications. We confirm which apply to each purchase.',
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What MEP supplies can you source?', 'answer' => 'Mechanical, electrical and plumbing supplies, from building wire, thermometers and smoke detectors to pipe supports.'],
                ['question' => 'Do you help with delivery scheduling?', 'answer' => 'Yes. Our Program & Scheduling Services track project schedules and procurement timelines and coordinate deliveries.'],
                ['question' => 'Can you support urgent repairs?', 'answer' => 'Yes. We expedite products when the schedule demands it.'],
                ['question' => 'How do I request a quote?', 'answer' => 'Contact our team with your bill of materials, milestones and job site locations.'],
            ]],
            'related' => ['title' => 'Related industries and pages', 'links' => [
                ['label' => 'Program & Scheduling Services', 'link' => '/services/program-scheduling/'],
                ['label' => 'Electrical, Lighting & Cable', 'link' => '/products-and-materials/electrical-lighting-cable/'],
                ['label' => 'Plumbing Supplies', 'link' => '/products-and-materials/plumbing-supplies/'],
                ['label' => 'All Industries', 'link' => 'link:industries'],
            ]],
        ],
    ],

];
