<?php
/** Service pages (Category Page template, "service" group). Shared blocks are added by cc_page_build(). */

if (!defined('ABSPATH')) exit;

return [
    'logistics-procurement' => [
        'title' => 'Logistics & Procurement Services', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 21,
        'content' => [
            'seo' => [
                'title' => 'Logistics & Procurement Services | Competitive Choice',
                'description' => 'Supply chain coordination, Houston warehousing and distribution, strategic sourcing, eProcurement and contract support for facilities and critical infrastructure.',
                'og_title' => 'Logistics & Procurement Services | Competitive Choice',
                'og_description' => 'A nimble logistics and procurement partner for organizations that support critical infrastructure. Tell us what you need.',
                'schema_about' => 'Logistics, warehousing and procurement services',
            ],
            'banner' => ['image' => '', 'title' => 'Strategic Logistics & Procurement for Infrastructure-Driven Operations',
                'lead' => 'When a part, a pump or a pallet of supplies arrives late, the whole operation feels it. We make sure it does not, with a hands-on team and a centrally located Houston warehouse.'],
            'overview' => [
                'title' => 'A trusted logistics and procurement partner for critical infrastructure',
                'paragraphs' => [
                    'Competitive Choice is a woman-owned distributor based in Houston, Texas, serving government, commercial and institutional buyers since 2003. Our logistics and procurement services extend what we already do well, sourcing and supplying the products that keep facilities running, into a complete support service.',
                    'With a single, centrally located warehouse and a hands-on team, we offer responsive, dependable solutions built around facility operations, regulatory compliance and rapid response. We combine practical experience with scalable systems to help reduce risk, control costs and maintain operational readiness, even under pressure.',
                    'We may be small in footprint, but we work with a big-picture mindset. Our team delivers reliable, flexible solutions and scales alongside our strategic partners as their needs evolve.',
                ],
            ],
            'problems' => [
                'title' => 'The problems this service solves', 'description' => 'The supply challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Delays that stall operations', 'description' => 'Late or fragmented deliveries leave maintenance and project teams waiting. Coordinated inventory, storage and transportation keep orders moving to your timeline.'],
                    ['title' => 'No visibility into stock', 'description' => 'Not knowing what is on hand or in transit makes planning difficult. Real-time inventory visibility from our Houston warehouse gives you a clear picture.'],
                    ['title' => 'Urgent needs with no buffer', 'description' => 'Emergency repairs and rapid-response work cannot wait on long lead times. Our agile warehouse and team are set up for urgent requests.'],
                    ['title' => 'Too many suppliers to manage', 'description' => 'Chasing vendors for quotes, quality and compliance consumes staff time. We manage supplier relationships to meet your performance, compliance and budget requirements.'],
                    ['title' => 'Heavy purchasing paperwork', 'description' => 'Manual order workflows and scattered records add administrative burden. Our eProcurement platform simplifies purchasing and makes spending easier to track.'],
                    ['title' => 'Contract risk and weak accountability', 'description' => 'Unmanaged terms and performance create exposure. We help track contract terms and delivery so you maximize value and mitigate risk.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our logistics and procurement services include', 'description' => 'Two connected service lines that turn supply chain challenges into strengths.',
                'items' => [
                    ['title' => 'Supply Chain Coordination', 'icon' => '', 'image' => '', 'description' => 'From demand planning to final delivery, we provide streamlined support across inventory, storage and transportation. While compact in scale, our operations are built to adapt, using our team’s expertise and technology tools to improve fulfillment and reduce delays.', 'items' => []],
                    ['title' => 'Warehousing & Distribution', 'icon' => '', 'image' => '', 'description' => 'Our Houston-based warehouse offers secure storage, real-time inventory visibility and responsive distribution. Whether fulfilling routine maintenance orders or urgent project needs, we maintain the agility and precision to meet your timelines.', 'items' => []],
                    ['title' => 'Strategic Sourcing & Supplier Support', 'icon' => '', 'image' => '', 'description' => 'We work closely with trusted suppliers to source quality products at competitive prices, managing vendor relationships to meet performance, compliance and budget requirements.', 'items' => []],
                    ['title' => 'Simplified Purchasing & Contract Support', 'icon' => '', 'image' => '', 'description' => 'Through our integrated eProcurement platform, you can streamline order workflows, track spending and gain better visibility while easing the administrative burden on your teams. We also help manage contract terms, track performance and keep suppliers accountable.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Who we support', 'description' => 'Organizations that keep essential services running.',
                'items' => [
                    ['title' => 'Facility operations teams', 'description' => 'Dependable fulfillment of routine maintenance orders and urgent needs, with the readiness to keep sites running.'],
                    ['title' => 'Public-sector buyers', 'description' => 'Compliance-minded procurement with contract support, organized records and clear visibility.'],
                    ['title' => 'Critical infrastructure operators', 'description' => 'A responsive partner for water, wastewater, utility and institutional facilities where downtime is costly.'],
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What logistics services does Competitive Choice offer?', 'answer' => 'We offer supply chain coordination, covering inventory, storage and transportation, plus warehousing and distribution from our centrally located Houston warehouse, with real-time inventory visibility and responsive delivery.'],
                ['question' => 'What do your procurement services cover?', 'answer' => 'Strategic sourcing and supplier support, simplified purchasing through an integrated eProcurement platform, and contract support that tracks terms and performance.'],
                ['question' => 'Can you support urgent orders?', 'answer' => 'Yes. Our warehouse and hands-on team are set up to respond to urgent project and maintenance needs. Timing is confirmed for each request.'],
                ['question' => 'Do you only work with large organizations?', 'answer' => 'No. We are a small business with the systems and mindset to support large-scale infrastructure operations, and we scale alongside our partners as their needs evolve.'],
                ['question' => 'How do I start?', 'answer' => 'Contact our team with your requirement, locations and timing. We will scope a plan that fits your operation and confirm scope, schedule and pricing in a proposal.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Program & Scheduling Services', 'link' => '/services/program-scheduling/'],
                ['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'program-scheduling' => [
        'title' => 'Program & Scheduling Services', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 22,
        'content' => [
            'seo' => [
                'title' => 'Program & Scheduling Services for MEP Teams | Competitive Choice',
                'description' => 'Program management and scheduling support that keeps materials and equipment on time for MEP and general contractor teams. Request a quote.',
                'og_title' => 'Program & Scheduling Services | Competitive Choice',
                'og_description' => 'Responsive scheduling and delivery coordination for MEP and general contractors. Tell us about your project.',
                'schema_about' => 'Construction program management and scheduling services',
            ],
            'banner' => ['image' => '', 'title' => 'End-to-End Program Management',
                'lead' => 'Personalized scheduling and delivery coordination that keeps MEP and general contractor teams on time, every time.'],
            'overview' => [
                'title' => 'Programs and scheduling built around your construction milestones',
                'paragraphs' => [
                    'Competitive Choice offers personalized, responsive Programs and Scheduling Services for MEP and General Contractor teams. We understand the fast pace of construction and the importance of having the right materials and equipment delivered on time, every time. Our hands-on team works closely with project leads to anticipate needs, manage timelines and stay aligned with changing site conditions.',
                    'We use NetSuite Facility Services to track project schedules, manage procurement timelines and keep clear visibility across multiple job sites. This cloud-based platform lets us coordinate deliveries, monitor inventory and adapt quickly when plans change.',
                    'Whether we are staging materials for phased installation or expediting products for urgent repairs, our services stay in sync with your construction milestones and field operations. Our goal is to be an extension of your project team.',
                ],
            ],
            'equipment' => [
                'title' => 'How we support your project', 'description' => 'Practical coordination from planning through delivery.',
                'items' => [
                    ['title' => 'Delivery Scheduling', 'icon' => '', 'image' => '', 'description' => 'Deliveries timed to your construction milestones and site conditions.', 'items' => []],
                    ['title' => 'Procurement Timeline Management', 'icon' => '', 'image' => '', 'description' => 'Procurement timelines tracked so materials arrive when your crews need them.', 'items' => []],
                    ['title' => 'Multi-Site Visibility', 'icon' => '', 'image' => '', 'description' => 'Clear visibility into inventory and schedules across multiple job sites.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Built for fast-moving projects', 'description' => 'Flexible support for teams with demanding schedules.',
                'items' => [
                    ['title' => 'MEP contractors', 'description' => 'Staged materials and coordinated deliveries for mechanical, electrical and plumbing work.'],
                    ['title' => 'General contractors', 'description' => 'A reliable partner aligned with your milestones and communication needs.'],
                    ['title' => 'Phased and urgent work', 'description' => 'Staging for phased installation and expediting for urgent repairs.'],
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What are Programs and Scheduling Services?', 'answer' => 'Personalized support that tracks project schedules and procurement timelines and coordinates deliveries so materials and equipment arrive when your teams need them.'],
                ['question' => 'Which teams do you serve?', 'answer' => 'We support MEP and general contractor teams on construction and infrastructure projects.'],
                ['question' => 'What platform do you use?', 'answer' => 'We use NetSuite Facility Services to track schedules, procurement timelines and inventory across job sites.'],
                ['question' => 'How do I get started?', 'answer' => 'Contact our team with your project, locations and timeline. We will discuss how we can support your milestones.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Logistics & Procurement Services', 'link' => '/services/logistics-procurement/'],
                ['label' => 'Electrical, Lighting & Cable', 'link' => '/products-and-materials/electrical-lighting-cable/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'drain-services' => [
        'title' => 'Drain Services', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 23,
        'content' => [
            'seo' => [
                'title' => 'Drain Care Services: Wastewater, Kitchen & Dialysis | Competitive Choice',
                'description' => 'Total Drain Care programs that prevent clogs, odors and fruit flies using eco-conscious biological treatments. Request a quote.',
                'og_title' => 'Total Drain Care Services | Competitive Choice',
                'og_description' => 'Preventive, eco-conscious drain maintenance for healthcare, education, government and food service.',
                'schema_about' => 'Drain care and wastewater maintenance services',
            ],
            'banner' => ['image' => '', 'title' => 'Wastewater, Kitchen and Dialysis Drain Services',
                'lead' => 'Preventive, eco-conscious drain care that keeps systems clean, free-flowing and compliant.'],
            'overview' => [
                'title' => 'Total Drain Care that protects your facility',
                'paragraphs' => [
                    'Competitive Choice delivers comprehensive drain care solutions that proactively safeguard your facility against clogs, odors, pest infestations and costly downtime. Our Total Drain Care program is built around preventive maintenance, eco-conscious treatments and customized service plans that keep your systems clean, free-flowing and compliant.',
                    'Our biologically based solutions break down fats, oils, grease and organic matter that accumulate in high-use drain lines, floor sinks and wastewater systems. Unlike corrosive chemicals, our treatments are environmentally safe and plumbing-friendly, so they suit facilities that demand performance without compromising sustainability.',
                    'We go beyond surface-level fixes by addressing the core of wastewater system health, namely biofilm and long-term pipe buildup. The program extends the life of plumbing infrastructure, reduces emergency calls and reinforces your commitment to sustainability.',
                ],
            ],
            'equipment' => [
                'title' => 'What Total Drain Care includes', 'description' => 'Preventive programs tailored to the way your facility runs.',
                'items' => [
                    ['title' => 'Biological Treatments', 'icon' => '', 'image' => '', 'description' => 'Environmentally safe, plumbing-friendly treatments that break down fats, oils, grease and organic matter.', 'items' => []],
                    ['title' => 'Pest Prevention', 'icon' => '', 'image' => '', 'description' => 'Targets the drain buildup where fruit flies and other pests breed, removing the problem at the source.', 'items' => []],
                    ['title' => 'Healthcare Drain Care', 'icon' => '', 'image' => '', 'description' => 'Support for infection control in dialysis centers and healthcare facilities by reducing odor-causing bacteria and backups.', 'items' => []],
                    ['title' => 'Scheduled Service', 'icon' => '', 'image' => '', 'description' => 'Customized service plans with expert support so your team can stay focused on its work.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where drain care matters most', 'description' => 'Facilities with heavy use or strict standards.',
                'items' => [
                    ['title' => 'Kitchens & food service', 'description' => 'Grease-heavy drains and floor sinks that need consistent preventive care.'],
                    ['title' => 'Dialysis & healthcare', 'description' => 'Sanitary conditions that support patient comfort, safety and regulatory standards.'],
                    ['title' => 'Education & government', 'description' => 'Restrooms, utility closets and floor drains across large facilities.'],
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What is Total Drain Care?', 'answer' => 'A preventive drain maintenance program built around biological treatments and customized service plans to prevent clogs, odors and pests.'],
                ['question' => 'Are the treatments safe for plumbing?', 'answer' => 'Our biologically based treatments are environmentally safe and plumbing-friendly, unlike corrosive chemicals.'],
                ['question' => 'Does it help with fruit flies?', 'answer' => 'Yes. The program targets stagnant drains with organic buildup, which are common breeding grounds for fruit flies and other pests.'],
                ['question' => 'Can you support dialysis centers and healthcare facilities?', 'answer' => 'Yes. Drain care supports infection control by reducing odor-causing bacteria and backups. Scheduled service helps providers meet stringent standards.'],
                ['question' => 'How do I get started?', 'answer' => 'Contact our team with your facility type and drain concerns. We will recommend a customized plan.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Odor Control', 'link' => '/services/odor-control/'],
                ['label' => 'Plumbing Supplies', 'link' => '/products-and-materials/plumbing-supplies/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'air-scenting-services' => [
        'title' => 'Air Scenting Services', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 24,
        'content' => [
            'seo' => [
                'title' => 'Commercial Air Scenting Services | Competitive Choice',
                'description' => 'HVAC-integrated and standalone air scenting with allergy-tested fragrances, custom scent profiles and turnkey service. Request a quote.',
                'og_title' => 'Commercial Air Scenting Services | Competitive Choice',
                'og_description' => 'Create a signature scent experience in lobbies, restrooms and breakrooms with turnkey installation and service.',
                'schema_about' => 'Commercial air scenting services',
            ],
            'banner' => ['image' => '', 'title' => 'Enhance Your Facility’s Environment',
                'lead' => 'Advanced air scenting that supports health, comfort and brand experience, with turnkey installation and service.'],
            'overview' => [
                'title' => 'Air scenting that elevates the atmosphere of your facility',
                'paragraphs' => [
                    'Competitive Choice offers advanced air scenting solutions designed to elevate the atmosphere of your facility while supporting health, comfort and brand experience. Our systems integrate into your existing HVAC infrastructure or run as standalone units, delivering consistent, hypoallergenic fragrances throughout high-traffic areas such as lobbies, restrooms, breakrooms and executive suites.',
                    'Our scenting services suit environments that demand cleanliness, sophistication and memorability, from healthcare and education to government and hospitality.',
                    'Let us help you create a signature scent experience that welcomes, reassures and leaves a lasting impression.',
                ],
            ],
            'equipment' => [
                'title' => 'Why our air scenting solutions', 'description' => 'Discreet, consistent and fully supported.',
                'items' => [
                    ['title' => 'Discreet Integration', 'icon' => '', 'image' => '', 'description' => 'HVAC-connected systems or compact standalone units that fit your space.', 'items' => []],
                    ['title' => 'Allergy-Tested Fragrances', 'icon' => '', 'image' => '', 'description' => 'Light, non-intrusive scents that are compliant with indoor air quality standards.', 'items' => []],
                    ['title' => 'Custom Scent Profiles', 'icon' => '', 'image' => '', 'description' => 'Scent profiles that enhance your brand identity and the customer experience.', 'items' => []],
                    ['title' => 'Service & Maintenance', 'icon' => '', 'image' => '', 'description' => 'Turnkey installation, replenishment and ongoing support.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where air scenting works best', 'description' => 'High-traffic spaces that shape first impressions.',
                'items' => [
                    ['title' => 'Lobbies & executive suites', 'description' => 'A welcoming, consistent atmosphere that reinforces your brand.'],
                    ['title' => 'Restrooms & breakrooms', 'description' => 'Fresh, clean air in the spaces visitors and staff notice most.'],
                    ['title' => 'Healthcare, education & government', 'description' => 'Light, allergy-tested fragrances suited to sensitive environments.'],
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'How do your air scenting systems work?', 'answer' => 'They connect to your HVAC infrastructure or run as compact standalone units, delivering consistent fragrance through high-traffic areas.'],
                ['question' => 'Are the fragrances safe for sensitive environments?', 'answer' => 'Our fragrances are allergy-tested, light and non-intrusive, and compliant with indoor air quality standards.'],
                ['question' => 'Can we choose a custom scent?', 'answer' => 'Yes. Custom scent profiles can reinforce your brand identity and improve the customer experience.'],
                ['question' => 'Who handles installation and refills?', 'answer' => 'We provide turnkey installation, replenishment and ongoing support.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Odor Control', 'link' => '/services/odor-control/'],
                ['label' => 'HVAC & HVAC Package Units', 'link' => '/products-and-materials/hvac-package-units/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'odor-control' => [
        'title' => 'Odor Control', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 25,
        'content' => [
            'seo' => [
                'title' => 'Odor Control for Schools, Plants & Facilities | Competitive Choice',
                'description' => 'Targeted odor control for schools, wastewater plants, healthcare centers, trash chutes and commercial buildings. Request a quote.',
                'og_title' => 'Industrial & Institutional Odor Control | Competitive Choice',
                'og_description' => 'Eliminate odors at the source in the most challenging environments. Tell us where you need it.',
                'schema_about' => 'Odor control solutions for institutional and industrial facilities',
            ],
            'banner' => ['image' => '', 'title' => 'Targeted Odor Control for Essential Environments',
                'lead' => 'Eliminate odors at the source in schools, treatment plants, healthcare centers and commercial buildings.'],
            'overview' => [
                'title' => 'Odor control that protects hygiene, safety and reputation',
                'paragraphs' => [
                    'Odor control is about more than comfort. It is about maintaining hygiene, safety and reputation in high-traffic, high-impact spaces. Competitive Choice offers advanced odor control products formulated for critical infrastructure facilities, including schools, wastewater treatment plants, healthcare centers and commercial buildings.',
                    'We provide specialized solutions designed to eliminate odors at the source, for long-lasting freshness in the most challenging environments.',
                    'We also offer mood-enhancing fragrances that elevate customer and employee experiences. These ambient scenting solutions can be customized to reinforce brand identity and turn public spaces into welcoming environments.',
                ],
            ],
            'equipment' => [
                'title' => 'Odor control solutions by environment', 'description' => 'Targeted formulas for the places odors are hardest to beat.',
                'items' => [
                    ['title' => 'Educational Facilities', 'icon' => '', 'image' => '', 'description' => 'Neutralize persistent odors in restrooms and shared spaces, especially high-use areas such as boys’ bathrooms.', 'items' => []],
                    ['title' => 'Wastewater Treatment Plants', 'icon' => '', 'image' => '', 'description' => 'Industrial-strength solutions that eliminate sewer gas odors in resilient municipal systems.', 'items' => []],
                    ['title' => 'Trash Chutes & Utility Rooms', 'icon' => '', 'image' => '', 'description' => 'Control and contain odors in enclosed industrial spaces to improve air quality and working conditions.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Meeting public health and environmental expectations', 'description' => 'Whether you manage a district, city infrastructure or a commercial facility.',
                'items' => [
                    ['title' => 'School districts', 'description' => 'Restrooms and shared spaces that stay fresh through the school day.'],
                    ['title' => 'City infrastructure', 'description' => 'Plants and utility spaces where odor complaints affect communities.'],
                    ['title' => 'Commercial facilities', 'description' => 'Public-facing spaces that benefit from fresh air and a welcoming scent.'],
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What kinds of odors can you treat?', 'answer' => 'We offer targeted solutions for restroom odors in schools, sewer gas odors in wastewater plants, and odors in trash chutes and utility rooms.'],
                ['question' => 'Do you eliminate odors or mask them?', 'answer' => 'Our solutions are designed to eliminate odors at the source for long-lasting freshness.'],
                ['question' => 'Can odor control be paired with scenting?', 'answer' => 'Yes. We also offer customizable ambient scenting to reinforce brand identity.'],
                ['question' => 'Where can I buy odor control products?', 'answer' => 'See our Specialty Maintenance Chemicals and Water & Wastewater pages, or contact our team for a quote.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Air Scenting Services', 'link' => '/services/air-scenting-services/'],
                ['label' => 'Drain Services', 'link' => '/services/drain-services/'],
                ['label' => 'Specialty Maintenance Chemicals', 'link' => '/products-and-materials/specialty-maintenance-chemicals/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'work-order-request-call-center' => [
        'title' => 'Work Order Request Call Center', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 26,
        'content' => [
            'seo' => [
                'title' => 'Facility Work Order Request Call Center | Competitive Choice',
                'description' => 'A dedicated call center that takes in, logs, prioritizes and tracks facility work orders for custodial, electrical, plumbing and HVAC. Request a quote.',
                'og_title' => 'Work Order Request Call Center | Competitive Choice',
                'og_description' => 'Streamlined service ticket management for facility managers, with real-time visibility and reporting.',
                'schema_about' => 'Facility work order call center services',
            ],
            'banner' => ['image' => '', 'title' => 'Streamlined Service Ticket Management',
                'lead' => 'A dedicated call center that takes in, tracks and follows up on facility work orders so your staff can focus on core work.'],
            'overview' => [
                'title' => 'A central hub for facility service requests',
                'paragraphs' => [
                    'Managing day-to-day facility operations takes more than quality products. It demands responsive, coordinated service. That is why Competitive Choice offers a dedicated Work Order Request Call Center that helps facility managers streamline maintenance and service needs.',
                    'The call center acts as a centralized hub, fielding and tracking requests related to custodial, electrical, plumbing, HVAC and general maintenance issues. Our trained team takes in, logs and prioritizes service tickets, dispatches work to the right teams and follows up to confirm resolution.',
                    'By capturing detailed information on each request and keeping real-time visibility into open issues, we reduce response times, increase accountability and provide reporting that supports preventive maintenance planning and regulatory compliance. We customize each program to your organization’s workflow, protocols and performance goals.',
                ],
            ],
            'equipment' => [
                'title' => 'What the call center handles', 'description' => 'Every request captured, prioritized and followed to resolution.',
                'items' => [
                    ['title' => 'Intake & Logging', 'icon' => '', 'image' => '', 'description' => 'Trained staff capture detailed information on each request and log it as a service ticket.', 'items' => []],
                    ['title' => 'Prioritization & Dispatch', 'icon' => '', 'image' => '', 'description' => 'Tickets are prioritized and dispatched to the appropriate teams.', 'items' => []],
                    ['title' => 'Follow-Up & Reporting', 'icon' => '', 'image' => '', 'description' => 'Follow-up to confirm resolution, plus reporting that supports preventive maintenance planning.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Built around your workflow', 'description' => 'Programs customized to your protocols and performance goals.',
                'items' => [
                    ['title' => 'School districts', 'description' => 'One point of contact for campuses reporting custodial and maintenance needs.'],
                    ['title' => 'Hospital systems', 'description' => 'Tracked requests with accountability across departments.'],
                    ['title' => 'Public utilities', 'description' => 'Clear visibility into open issues and response times.'],
                ],
            ],
            'faq' => ['items' => [
                ['question' => 'What types of requests does the call center handle?', 'answer' => 'Custodial, electrical, plumbing, HVAC and general maintenance requests.'],
                ['question' => 'How are requests tracked?', 'answer' => 'Each request is logged as a service ticket, prioritized, dispatched and followed up, with real-time visibility into open issues.'],
                ['question' => 'Can the program match our workflow?', 'answer' => 'Yes. We customize each program to your organization’s workflow, protocols and performance goals.'],
                ['question' => 'What reporting is available?', 'answer' => 'Reporting that supports preventive maintenance planning and regulatory compliance. Scope is confirmed when we design your program.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Logistics & Procurement Services', 'link' => '/services/logistics-procurement/'],
                ['label' => 'Facility Maintenance, MRO & Tools', 'link' => '/products-and-materials/facility-maintenance-mro-tools/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],
];
