<?php
/** Service pages (Category Page template, "service" group). Shared blocks are added by cc_page_build(). */

if (!defined('ABSPATH')) exit;

return [
    'logistics-procurement' => [
        'title' => 'Logistics & Procurement', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 21,
        'content' => [
            'seo' => [
                'title' => 'Logistics & Procurement Services | Competitive Choice',
                'description' => 'Supply chain coordination, Houston warehousing and distribution, strategic sourcing, eProcurement and contract support for facilities and critical infrastructure.',
                'og_title' => 'Logistics & Procurement Services | Competitive Choice',
                'og_description' => 'A nimble logistics and procurement partner for organizations that support critical infrastructure. Tell us what you need.',
                'schema_about' => 'Logistics, warehousing and procurement services',
            ],
            'banner' => ['image' => 'svc-logistics-banner-v2.jpg', 'title' => 'Strategic Logistics & Procurement for Infrastructure-Driven Operations',
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
                'title' => 'The problems our Logistics & Procurement services solve', 'description' => 'The supply challenges that slow down facility operations, and how we address each one.',
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
                'title' => 'What our {{logistics and procurement services}} include', 'description' => 'Two connected service lines that turn supply chain challenges into strengths.',
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
            'process' => [
                'title' => 'How our logistics and procurement support works', 'description' => 'From first requirement to dependable, ongoing supply.',
                'items' => [
                    ['title' => 'Share your supply requirements', 'description' => 'Tell us what you buy, how often, where it ships and the contract terms you buy under.'],
                    ['title' => 'We design your supply plan', 'description' => 'We map sourcing, stocking and delivery to your facilities, using our Houston warehouse for stock and urgent needs.'],
                    ['title' => 'Set up purchasing and visibility', 'description' => 'Orders flow through our eProcurement platform, with real-time inventory visibility and spend tracking.'],
                    ['title' => 'Deliver, track and improve', 'description' => 'We fulfill on your timeline, monitor supplier and contract performance, and adjust as your needs grow.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
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
        'title' => 'Program Scheduling & Management', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 22,
        'content' => [
            'seo' => [
                'title' => 'Program & Scheduling Services for MEP Teams | Competitive Choice',
                'description' => 'Program management and scheduling support that keeps materials and equipment on time for MEP and general contractor teams. Request a quote.',
                'og_title' => 'Program & Scheduling Services | Competitive Choice',
                'og_description' => 'Responsive scheduling and delivery coordination for MEP and general contractors. Tell us about your project.',
                'schema_about' => 'Construction program management and scheduling services',
            ],
            'banner' => ['image' => 'svc-program-banner-v2.jpg', 'title' => 'End-to-End Program Management',
                'lead' => 'Personalized scheduling and delivery coordination that keeps MEP and general contractor teams on time, every time.'],
            'overview' => [
                'title' => 'Programs and scheduling built around your construction milestones',
                'paragraphs' => [
                    'Competitive Choice offers personalized, responsive Programs and Scheduling Services for MEP and General Contractor teams. We understand the fast pace of construction and the importance of having the right materials and equipment delivered on time, every time. Our hands-on team works closely with project leads to anticipate needs, manage timelines and stay aligned with changing site conditions.',
                    'We use NetSuite Facility Services to track project schedules, manage procurement timelines and keep clear visibility across multiple job sites. This cloud-based platform lets us coordinate deliveries, monitor inventory and adapt quickly when plans change.',
                    'Whether we are staging materials for phased installation or expediting products for urgent repairs, our services stay in sync with your construction milestones and field operations. Our goal is to be an extension of your project team.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Program & Scheduling services solve', 'description' => 'The challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Missed delivery windows', 'description' => 'Materials that arrive late hold up crews and trades. Deliveries are timed to your construction milestones.'],
                    ['title' => 'Materials on site too early or too late', 'description' => 'Poorly timed deliveries create storage problems or idle labor. We stage materials for phased installation.'],
                    ['title' => 'No visibility across job sites', 'description' => 'Tracking schedules and inventory across multiple sites is hard to do by hand. We maintain clear visibility in one platform.'],
                    ['title' => 'Schedule changes that ripple', 'description' => 'When plans change, procurement has to change with them. Our team and tools adapt quickly to evolving site conditions.'],
                    ['title' => 'Urgent repairs with no fast path', 'description' => 'Unplanned repairs cannot wait on normal lead times. We expedite products when the schedule demands it.'],
                    ['title' => 'Too many moving parts for project leads', 'description' => 'Procurement follow-up pulls leads away from the field. We act as an extension of your project team.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{program and scheduling services}} include', 'description' => 'Practical coordination from planning through delivery.',
                'items' => [
                    ['title' => 'Delivery Scheduling', 'icon' => '', 'image' => '', 'description' => 'Deliveries timed to your construction milestones and site conditions.', 'items' => []],
                    ['title' => 'Procurement Timeline Management', 'icon' => '', 'image' => '', 'description' => 'Procurement timelines tracked so materials arrive when your crews need them.', 'items' => []],
                    ['title' => 'Multi-Site Visibility', 'icon' => '', 'image' => '', 'description' => 'Clear visibility into inventory and schedules across multiple job sites.', 'items' => []],
                    ['title' => 'Staging & Expediting', 'icon' => '', 'image' => '', 'description' => 'Materials staged for phased installation and urgent products expedited for repairs, in step with your field operations.', 'items' => []],
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
            'process' => [
                'title' => 'How our program and scheduling support works', 'description' => 'Aligned to your milestones from kickoff to closeout.',
                'items' => [
                    ['title' => 'Share your project and schedule', 'description' => 'Send your milestones, job sites, bill of materials and key contacts.'],
                    ['title' => 'We build the procurement plan', 'description' => 'We map procurement timelines and deliveries to your schedule in NetSuite Facility Services.'],
                    ['title' => 'Stage and coordinate deliveries', 'description' => 'Materials are staged for phased installation and delivered to match conditions at each job site.'],
                    ['title' => 'Track, adapt and expedite', 'description' => 'We monitor inventory and schedules, adjust when plans change and expedite urgent needs.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
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
        'title' => 'Drain Maintenance', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 23,
        'content' => [
            'seo' => [
                'title' => 'Drain Care Services: Wastewater, Kitchen & Dialysis | Competitive Choice',
                'description' => 'Total Drain Care programs that prevent clogs, odors and fruit flies using eco-conscious biological treatments. Request a quote.',
                'og_title' => 'Total Drain Care Services | Competitive Choice',
                'og_description' => 'Preventive, eco-conscious drain maintenance for healthcare, education, government and food service.',
                'schema_about' => 'Drain care and wastewater maintenance services',
            ],
            'banner' => ['image' => 'svc-drain-banner-v2.jpg', 'title' => 'Wastewater, Kitchen and Dialysis Drain Services',
                'lead' => 'Preventive, eco-conscious drain care that keeps systems clean, free-flowing and compliant.'],
            'overview' => [
                'title' => 'Total Drain Care that protects your facility',
                'paragraphs' => [
                    'Competitive Choice delivers comprehensive drain care solutions that proactively safeguard your facility against clogs, odors, pest infestations and costly downtime. Our Total Drain Care program is built around preventive maintenance, eco-conscious treatments and customized service plans that keep your systems clean, free-flowing and compliant.',
                    'Our biologically based solutions break down fats, oils, grease and organic matter that accumulate in high-use drain lines, floor sinks and wastewater systems. Unlike corrosive chemicals, our treatments are environmentally safe and plumbing-friendly, so they suit facilities that demand performance without compromising sustainability.',
                    'We go beyond surface-level fixes by addressing the core of wastewater system health, namely biofilm and long-term pipe buildup. The program extends the life of plumbing infrastructure, reduces emergency calls and reinforces your commitment to sustainability.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Drain Maintenance services solve', 'description' => 'The challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Clogs and backups', 'description' => 'Fats, oils, grease and organic matter build up in high-use lines. Biological treatments break them down before they block.'],
                    ['title' => 'Foul drain odors', 'description' => 'Odor-causing bacteria thrive in neglected drains. Regular treatment removes the source of the smell.'],
                    ['title' => 'Fruit flies and drain pests', 'description' => 'Stagnant drains with organic buildup become breeding grounds. We remove them at the source.'],
                    ['title' => 'Emergency calls and downtime', 'description' => 'Reactive plumbing work is costly and disruptive. Preventive service reduces emergency calls.'],
                    ['title' => 'Infection control concerns', 'description' => 'In dialysis centers and healthcare facilities, sanitary drains are critical. We help reduce odors and backups that put standards at risk.'],
                    ['title' => 'Pipe buildup and aging plumbing', 'description' => 'Biofilm and long-term buildup shorten the life of plumbing. Our program protects your capital investment.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{Total Drain Care services}} include', 'description' => 'Preventive programs tailored to the way your facility runs.',
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
            'process' => [
                'title' => 'How our Total Drain Care program works', 'description' => 'A preventive plan built around your drains.',
                'items' => [
                    ['title' => 'Tell us about your facility', 'description' => 'Share the drains involved, such as kitchens, restrooms, floor sinks or dialysis lines, and the problems you see today.'],
                    ['title' => 'We recommend a plan', 'description' => 'We assess your needs and propose treatments and a service schedule tailored to the way your facility runs.'],
                    ['title' => 'Scheduled biological treatments', 'description' => 'Environmentally safe treatments break down grease, organic matter and biofilm, and remove pest breeding grounds.'],
                    ['title' => 'Ongoing support and adjustment', 'description' => 'We stay on hand, adjust the plan as use changes and help you keep systems clean and compliant.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
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
        'title' => 'Air Scenting', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 24,
        'content' => [
            'seo' => [
                'title' => 'Commercial Air Scenting Services | Competitive Choice',
                'description' => 'HVAC-integrated and standalone air scenting with allergy-tested fragrances, custom scent profiles and turnkey service. Request a quote.',
                'og_title' => 'Commercial Air Scenting Services | Competitive Choice',
                'og_description' => 'Create a signature scent experience in lobbies, restrooms and breakrooms with turnkey installation and service.',
                'schema_about' => 'Commercial air scenting services',
            ],
            'banner' => ['image' => 'svc-scenting-banner-v2.jpg', 'title' => 'Enhance Your Facility’s Environment',
                'lead' => 'Advanced air scenting that supports health, comfort and brand experience, with turnkey installation and service.'],
            'overview' => [
                'title' => 'Air scenting that elevates the atmosphere of your facility',
                'paragraphs' => [
                    'Competitive Choice offers advanced air scenting solutions designed to elevate the atmosphere of your facility while supporting health, comfort and brand experience. Our systems integrate into your existing HVAC infrastructure or run as standalone units, delivering consistent, hypoallergenic fragrances throughout high-traffic areas such as lobbies, restrooms, breakrooms and executive suites.',
                    'Our scenting services suit environments that demand cleanliness, sophistication and memorability, from healthcare and education to government and hospitality.',
                    'Let us help you create a signature scent experience that welcomes, reassures and leaves a lasting impression.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Air Scenting services solve', 'description' => 'The challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Stale air in high-traffic areas', 'description' => 'Lobbies, restrooms and breakrooms collect odors through the day. Consistent scenting keeps them fresh.'],
                    ['title' => 'Weak first impressions', 'description' => 'Visitors notice how a space smells before they notice anything else. A signature scent welcomes and reassures.'],
                    ['title' => 'Uneven fragrance coverage', 'description' => 'Spot fixes leave some areas covered and others not. HVAC-connected systems deliver consistent coverage.'],
                    ['title' => 'Allergy and sensitivity concerns', 'description' => 'Strong fragrances are a problem in healthcare and education. Our fragrances are light, non-intrusive and allergy-tested.'],
                    ['title' => 'Brand experience gaps', 'description' => 'The atmosphere of a facility should match the brand. Custom scent profiles support your identity.'],
                    ['title' => 'Refill and maintenance burden', 'description' => 'Units that run dry or fail are worse than none. We provide installation, replenishment and ongoing support.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{air scenting services}} include', 'description' => 'Discreet, consistent and fully supported.',
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
            'process' => [
                'title' => 'How our air scenting service works', 'description' => 'From site review to a signature scent.',
                'items' => [
                    ['title' => 'Tell us about your spaces', 'description' => 'Share the areas, your HVAC setup, foot traffic and the atmosphere you want to create.'],
                    ['title' => 'Choose the system and scent', 'description' => 'We recommend HVAC-connected or standalone units and a custom, allergy-tested scent profile.'],
                    ['title' => 'Turnkey installation', 'description' => 'We install the equipment and set coverage and intensity for each area.'],
                    ['title' => 'Replenishment and support', 'description' => 'We keep scent supplies stocked and maintain the system over time.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
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
            'banner' => ['image' => 'svc-odor-banner-v2.jpg', 'title' => 'Targeted Odor Control for Essential Environments',
                'lead' => 'Eliminate odors at the source in schools, treatment plants, healthcare centers and commercial buildings.'],
            'overview' => [
                'title' => 'Odor control that protects hygiene, safety and reputation',
                'paragraphs' => [
                    'Odor control is about more than comfort. It is about maintaining hygiene, safety and reputation in high-traffic, high-impact spaces. Competitive Choice offers advanced odor control products formulated for critical infrastructure facilities, including schools, wastewater treatment plants, healthcare centers and commercial buildings.',
                    'We provide specialized solutions designed to eliminate odors at the source, for long-lasting freshness in the most challenging environments.',
                    'We also offer mood-enhancing fragrances that elevate customer and employee experiences. These ambient scenting solutions can be customized to reinforce brand identity and turn public spaces into welcoming environments.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Odor Control services solve', 'description' => 'The challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Persistent restroom odors in schools', 'description' => 'High-use restrooms, especially boys’ bathrooms, hold odors that ordinary cleaning does not remove.'],
                    ['title' => 'Sewer gas at treatment plants', 'description' => 'Wastewater facilities need industrial-strength solutions that stand up to municipal systems.'],
                    ['title' => 'Trapped odors in trash chutes and utility rooms', 'description' => 'Enclosed spaces concentrate odor and hurt air quality and working conditions.'],
                    ['title' => 'Masking instead of eliminating', 'description' => 'Covering a smell is temporary. Our solutions eliminate odors at the source for lasting freshness.'],
                    ['title' => 'Complaints and reputation risk', 'description' => 'Odor problems in public spaces affect how your facility is seen by staff, students and neighbors.'],
                    ['title' => 'Hygiene and workplace conditions', 'description' => 'Odor control supports the hygiene, safety and comfort of the people who use your space.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{odor control services}} include', 'description' => 'Targeted formulas for the places odors are hardest to beat.',
                'items' => [
                    ['title' => 'Educational Facilities', 'icon' => '', 'image' => '', 'description' => 'Neutralize persistent odors in restrooms and shared spaces, especially high-use areas such as boys’ bathrooms.', 'items' => []],
                    ['title' => 'Wastewater Treatment Plants', 'icon' => '', 'image' => '', 'description' => 'Industrial-strength solutions that eliminate sewer gas odors in resilient municipal systems.', 'items' => []],
                    ['title' => 'Trash Chutes & Utility Rooms', 'icon' => '', 'image' => '', 'description' => 'Control and contain odors in enclosed industrial spaces to improve air quality and working conditions.', 'items' => []],
                    ['title' => 'Healthcare Centers & Commercial Buildings', 'icon' => '', 'image' => '', 'description' => 'Targeted formulas and ambient scenting that keep public-facing and patient spaces fresh and welcoming.', 'items' => []],
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
            'process' => [
                'title' => 'How our odor control service works', 'description' => 'From finding the source to lasting freshness.',
                'items' => [
                    ['title' => 'Tell us where the odor is', 'description' => 'Describe the location, the type of odor and when it occurs, whether restrooms, plant areas, chutes or utility rooms.'],
                    ['title' => 'We identify the source', 'description' => 'We look at what is causing the odor so the solution targets the source, not just the symptom.'],
                    ['title' => 'Apply the right solution', 'description' => 'We supply targeted odor control formulas suited to your environment.'],
                    ['title' => 'Maintain freshness', 'description' => 'We support regular replenishment and can add ambient scenting to keep spaces welcoming.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
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
                ['label' => 'Odor Control Supplies', 'link' => '/products-and-materials/odor-control-supplies/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'work-order-request-call-center' => [
        'title' => 'Facility Call Center and Service Request', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 26,
        'content' => [
            'seo' => [
                'title' => 'Facility Work Order Request Call Center | Competitive Choice',
                'description' => 'A dedicated call center that takes in, logs, prioritizes and tracks facility work orders for custodial, electrical, plumbing and HVAC. Request a quote.',
                'og_title' => 'Work Order Request Call Center | Competitive Choice',
                'og_description' => 'Streamlined service ticket management for facility managers, with real-time visibility and reporting.',
                'schema_about' => 'Facility work order call center services',
            ],
            'banner' => ['image' => 'svc-callcenter-banner-v2.jpg', 'title' => 'Streamlined Service Ticket Management',
                'lead' => 'A dedicated call center that takes in, tracks and follows up on facility work orders so your staff can focus on core work.'],
            'overview' => [
                'title' => 'A central hub for facility service requests',
                'paragraphs' => [
                    'Managing day-to-day facility operations takes more than quality products. It demands responsive, coordinated service. That is why Competitive Choice offers a dedicated Work Order Request Call Center that helps facility managers streamline maintenance and service needs.',
                    'The call center acts as a centralized hub, fielding and tracking requests related to custodial, electrical, plumbing, HVAC and general maintenance issues. Our trained team takes in, logs and prioritizes service tickets, dispatches work to the right teams and follows up to confirm resolution.',
                    'By capturing detailed information on each request and keeping real-time visibility into open issues, we reduce response times, increase accountability and provide reporting that supports preventive maintenance planning and regulatory compliance. We customize each program to your organization’s workflow, protocols and performance goals.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Work Order Request Call Center solves', 'description' => 'The challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Requests lost in emails and phone calls', 'description' => 'Service needs scattered across inboxes and voicemails get missed. A central hub logs every request.'],
                    ['title' => 'No clear priority', 'description' => 'Without triage, urgent issues wait behind routine ones. Every ticket is prioritized and dispatched.'],
                    ['title' => 'Slow response times', 'description' => 'Delays frustrate staff and occupants. Faster intake and dispatch reduce response times.'],
                    ['title' => 'Weak follow-up and accountability', 'description' => 'Work that is never confirmed is never closed. We follow up to confirm resolution.'],
                    ['title' => 'No visibility into open issues', 'description' => 'Managers need to see what is outstanding. Real-time visibility keeps open issues in view.'],
                    ['title' => 'Little data for planning', 'description' => 'Reporting from logged requests supports preventive maintenance planning and regulatory compliance.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{work order request call center}} handles', 'description' => 'Every request captured, prioritized and followed to resolution.',
                'items' => [
                    ['title' => 'Intake & Logging', 'icon' => '', 'image' => '', 'description' => 'Trained staff capture detailed information on each request and log it as a service ticket.', 'items' => []],
                    ['title' => 'Prioritization & Dispatch', 'icon' => '', 'image' => '', 'description' => 'Tickets are prioritized and dispatched to the appropriate teams.', 'items' => []],
                    ['title' => 'Follow-Up & Reporting', 'icon' => '', 'image' => '', 'description' => 'Follow-up to confirm resolution, plus reporting that supports preventive maintenance planning.', 'items' => []],
                    ['title' => 'Custom Program Design', 'icon' => '', 'image' => '', 'description' => 'Each program is customized to your organization’s workflow, protocols and performance goals.', 'items' => []],
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
            'process' => [
                'title' => 'How our work order call center works', 'description' => 'One point of contact from request to resolution.',
                'items' => [
                    ['title' => 'Define your workflow', 'description' => 'Share your request types, priorities, escalation rules and reporting needs.'],
                    ['title' => 'We configure your program', 'description' => 'We customize intake, ticketing and dispatch protocols to your workflow and performance goals.'],
                    ['title' => 'Requests are logged and dispatched', 'description' => 'Our trained team captures the details, prioritizes each ticket and dispatches the work.'],
                    ['title' => 'Follow-up and reporting', 'description' => 'We confirm resolution, track open issues in real time and provide reporting for planning and compliance.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'faq' => ['items' => [
                ['question' => 'What types of requests does the call center handle?', 'answer' => 'Custodial, electrical, plumbing, HVAC and general maintenance requests.'],
                ['question' => 'How are requests tracked?', 'answer' => 'Each request is logged as a service ticket, prioritized, dispatched and followed up, with real-time visibility into open issues.'],
                ['question' => 'Can the program match our workflow?', 'answer' => 'Yes. We customize each program to your organization’s workflow, protocols and performance goals.'],
                ['question' => 'What reporting is available?', 'answer' => 'Reporting that supports preventive maintenance planning and regulatory compliance. Scope is confirmed when we design your program.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Logistics & Procurement Services', 'link' => '/services/logistics-procurement/'],
                ['label' => 'Equipment Maintenance', 'link' => '/products-and-materials/equipment-maintenance/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],
    'chemical-supply-program' => [
        'title' => 'Chemical Supply Program', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 27,
        'content' => [
            'seo' => [
                'title' => 'Chemical Supply Program for Facilities | Competitive Choice',
                'description' => 'A managed janitorial and sanitation chemical supply program: right-sized products, scheduled replenishment, safety documentation and consistent results for facilities. Request a quote.',
                'og_title' => 'Chemical Supply Program | Competitive Choice',
                'og_description' => 'Reliable, compliant chemical supply for facilities, with the right products at the right time.',
                'schema_about' => 'Facility chemical supply program',
            ],
            'banner' => ['image' => 'svc-chemical-banner-v2.jpg', 'title' => 'A Chemical Supply Program Built Around Your Facility',
                'lead' => 'The right products, the right quantities and the right paperwork, delivered on a schedule so your teams never run short.'],
            'overview' => [
                'title' => 'Dependable chemical supply, without the guesswork',
                'paragraphs' => [
                    'Running out of a key cleaner, or storing far more than you need, are two sides of the same problem. Our Chemical Supply Program takes that burden off your team by matching products to your facility, your surfaces and your standards, then keeping them stocked.',
                    'Competitive Choice has supplied government, commercial and institutional buyers from Houston since 2003. We source from trusted manufacturers, confirm that products fit your use, and provide the documentation your safety and compliance teams expect.',
                    'The result is consistent cleaning performance, simpler purchasing and fewer surprises, whether you operate a single building or a portfolio of sites.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Chemical Supply Program solves', 'description' => 'The chemical purchasing challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Stock-outs that stop work', 'description' => 'Running out of a cleaner or disinfectant halts routine tasks. Scheduled replenishment keeps essentials on the shelf.'],
                    ['title' => 'Too many products, too little consistency', 'description' => 'Overlapping products and brands confuse crews. We streamline your lineup to what each task needs.'],
                    ['title' => 'Overstocking and waste', 'description' => 'Excess inventory ties up cash and storage. Right-sized quantities reduce waste and expiration.'],
                    ['title' => 'Safety and compliance paperwork', 'description' => 'Safety data sheets and labeling must be current and on hand. We help keep documentation organized and accessible.'],
                    ['title' => 'Uneven results across sites', 'description' => 'Different products at each site produce different outcomes. A standard program delivers consistent results.'],
                    ['title' => 'Time lost on reordering', 'description' => 'Chasing quotes and orders pulls teams from their work. We manage ordering so you do not have to.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{Chemical Supply Program}} includes', 'description' => 'A practical program that keeps your facility stocked and compliant.',
                'items' => [
                    ['title' => 'Product Selection', 'icon' => '', 'image' => '', 'description' => 'Cleaners, disinfectants, degreasers and specialty chemicals matched to your surfaces, standards and budget.', 'items' => []],
                    ['title' => 'Scheduled Replenishment', 'icon' => '', 'image' => '', 'description' => 'Deliveries planned around your usage so supplies arrive before they run out.', 'items' => []],
                    ['title' => 'Safety Documentation', 'icon' => '', 'image' => '', 'description' => 'Safety data sheets and product information organized for your safety and compliance teams.', 'items' => []],
                    ['title' => 'Program Review', 'icon' => '', 'image' => '', 'description' => 'Regular check-ins to adjust products and quantities as your facility changes.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where our chemical supply program fits', 'description' => 'Facilities that depend on consistent, compliant cleaning.',
                'items' => [
                    ['title' => 'Healthcare & education', 'description' => 'High-touch environments where cleaning standards and documentation matter.'],
                    ['title' => 'Government & municipal', 'description' => 'Multi-site buildings that need standard products and organized records.'],
                    ['title' => 'Commercial & hospitality', 'description' => 'Busy properties that need dependable supply and consistent results.'],
                ],
            ],
            'process' => [
                'title' => 'How our Chemical Supply Program works', 'description' => 'From a quick review of your needs to dependable ongoing supply.',
                'items' => [
                    ['title' => 'Tell us what you use', 'description' => 'Share your current products, quantities, sites and any standards you must meet.'],
                    ['title' => 'We recommend a program', 'description' => 'We propose a streamlined product lineup and right-sized quantities for your facility.'],
                    ['title' => 'Scheduled delivery', 'description' => 'Products are replenished on a schedule that follows your actual usage.'],
                    ['title' => 'Review and adjust', 'description' => 'We check in regularly and adjust the program as your needs change.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'faq' => ['items' => [
                ['question' => 'What is the Chemical Supply Program?', 'answer' => 'A managed program that selects, supplies and replenishes the janitorial and sanitation chemicals your facility uses, with the documentation your teams need.'],
                ['question' => 'Can the program cover multiple sites?', 'answer' => 'Yes. A standard product lineup across sites helps deliver consistent results and simpler purchasing.'],
                ['question' => 'Do you provide safety data sheets?', 'answer' => 'Yes. We help keep product safety documentation organized and available to your team.'],
                ['question' => 'Does it work with dispensing equipment?', 'answer' => 'Yes. It pairs well with our dispensing systems, which help control dosing and reduce waste.'],
                ['question' => 'How do I get started?', 'answer' => 'Contact our team with your products, sites and timing. We will recommend a program and confirm scope and pricing in a proposal.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Dispensing Systems', 'link' => '/services/dispensing-systems/'],
                ['label' => 'Janitorial & Sanitation Supplies', 'link' => 'link:products'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],

    'dispensing-systems' => [
        'title' => 'Dispensing Systems', 'parent' => 'services', 'template' => 'category', 'group' => 'service', 'order' => 28,
        'content' => [
            'seo' => [
                'title' => 'Chemical Dispensing Systems for Facilities | Competitive Choice',
                'description' => 'Wall-mounted and proportioning chemical dispensing systems with installation, training and service support. Accurate dosing, less waste and safer handling. Request a quote.',
                'og_title' => 'Dispensing Systems | Competitive Choice',
                'og_description' => 'Accurate dosing, safer handling and less waste with professionally installed dispensing systems.',
                'schema_about' => 'Chemical dispensing system installation and service',
            ],
            'banner' => ['image' => 'svc-dispensing-banner-v2.jpg', 'title' => 'Dispensing Systems That Dose It Right, Every Time',
                'lead' => 'Accurate dilution, safer handling and less waste, installed, calibrated and supported by our team.'],
            'overview' => [
                'title' => 'Precise dosing that protects your people and your budget',
                'paragraphs' => [
                    'Pouring concentrates by hand leads to over-use, spills and inconsistent results. Properly installed dispensing systems deliver the right dilution every time, which protects your crews, your surfaces and your budget.',
                    'Competitive Choice supplies and supports dispensing systems for facilities of every size. We help select the right equipment, install it, train your staff and keep it running, so the benefits last well beyond day one.',
                    'Paired with our Chemical Supply Program, dispensing systems give you a simple, repeatable way to clean well and control cost.',
                ],
            ],
            'problems' => [
                'title' => 'The problems our Dispensing Systems solve', 'description' => 'The handling and dosing challenges that slow down facility operations, and how we address each one.',
                'items' => [
                    ['title' => 'Over-use of concentrates', 'description' => 'Eyeballing dilution wastes product. Metered dispensing uses only what the task needs.'],
                    ['title' => 'Inconsistent cleaning results', 'description' => 'Varying dilution changes performance. Accurate dosing makes results repeatable.'],
                    ['title' => 'Spills and unsafe handling', 'description' => 'Pouring and mixing by hand exposes staff to risk. Closed dispensing reduces contact and spills.'],
                    ['title' => 'Training gaps', 'description' => 'New staff need simple routines. Clear setups and training make correct use easy.'],
                    ['title' => 'Equipment downtime', 'description' => 'Dispensers that fail leave crews without options. We provide service support to keep them running.'],
                    ['title' => 'Unclear chemical costs', 'description' => 'Hand dosing hides true usage. Metered systems make costs easier to see and control.'],
                ],
            ],
            'equipment' => [
                'title' => 'What our {{dispensing system services}} include', 'description' => 'Equipment, setup and support working together.',
                'items' => [
                    ['title' => 'Equipment Selection', 'icon' => '', 'image' => '', 'description' => 'Wall-mounted and proportioning dispensers matched to your products, water supply and space.', 'items' => []],
                    ['title' => 'Installation & Calibration', 'icon' => '', 'image' => '', 'description' => 'Professional setup and calibration so every dispenser delivers the correct dilution.', 'items' => []],
                    ['title' => 'Staff Training', 'icon' => '', 'image' => '', 'description' => 'Simple, practical instruction so crews use equipment correctly and safely.', 'items' => []],
                    ['title' => 'Service & Support', 'icon' => '', 'image' => '', 'description' => 'Responsive support to keep dispensers working and your teams productive.', 'items' => []],
                ],
            ],
            'applications' => [
                'title' => 'Where dispensing systems matter most', 'description' => 'Facilities that clean at scale and need control.',
                'items' => [
                    ['title' => 'Healthcare & education', 'description' => 'Consistent disinfection and clear usage routines across many rooms.'],
                    ['title' => 'Kitchens & food service', 'description' => 'Reliable dilution for sanitizers and degreasers, with safer handling.'],
                    ['title' => 'Government & commercial buildings', 'description' => 'Standard setups across janitorial closets and multiple sites.'],
                ],
            ],
            'process' => [
                'title' => 'How our Dispensing Systems program works', 'description' => 'From assessment to a dependable, supported setup.',
                'items' => [
                    ['title' => 'Assess your needs', 'description' => 'Share your products, sites and how your crews clean today.'],
                    ['title' => 'We recommend equipment', 'description' => 'We propose dispensers and a layout that fit your products and space.'],
                    ['title' => 'Install and train', 'description' => 'Equipment is installed and calibrated, and your staff is trained to use it.'],
                    ['title' => 'Support and adjust', 'description' => 'We keep systems running and adjust as your facility changes.'],
                ],
                'button_label' => 'REQUEST A QUOTE',
            ],
            'faq' => ['items' => [
                ['question' => 'What are dispensing systems?', 'answer' => 'Equipment that mixes and delivers chemicals at the correct dilution, replacing hand pouring and measuring.'],
                ['question' => 'Do you install the equipment?', 'answer' => 'Yes. We help select, install and calibrate dispensers, and train your staff on correct use.'],
                ['question' => 'Can systems support multiple sites?', 'answer' => 'Yes. Standard setups across sites keep results consistent and simplify training.'],
                ['question' => 'What if a dispenser stops working?', 'answer' => 'Contact our team. We provide service support to get equipment back in operation. Response timing is confirmed in your proposal.'],
                ['question' => 'How do I get started?', 'answer' => 'Contact our team with your products, sites and timing. We will recommend equipment and confirm scope and pricing in a proposal.'],
            ]],
            'related' => ['title' => 'Related services and pages', 'links' => [
                ['label' => 'Chemical Supply Program', 'link' => '/services/chemical-supply-program/'],
                ['label' => 'Drain Maintenance', 'link' => '/services/drain-services/'],
                ['label' => 'All Services', 'link' => 'link:services'],
            ]],
        ],
    ],
];
