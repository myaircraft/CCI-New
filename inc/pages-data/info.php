<?php
/** Company and index pages (Info Page template). Each entry carries all of its own blocks. */

if (!defined('ABSPATH')) exit;

return [
    'products-and-materials' => [
        'title' => 'Products & Materials', 'parent' => '', 'template' => 'info', 'order' => 1,
        'content' => [
            'seo' => [
                'title' => 'Products & Supplies for Critical Infrastructure | Competitive Choice',
                'description' => 'Power distribution, water treatment, HVAC, plumbing, electrical, safety, chemicals, MRO and janitorial supplies from one trusted Houston source.',
                'og_title' => 'Products & Supplies | Competitive Choice',
                'og_description' => 'Ten product categories for facilities, utilities, healthcare, education and construction. Request a quote.',
                'schema_about' => 'Industrial, facility maintenance and construction supplies', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'PRODUCTS & SUPPLIES', 'title' => 'Products & Supplies', 'lead' => 'From daily facility needs to complex infrastructure projects, we source the products that keep your operation running.', 'quote_label' => 'REQUEST A QUOTE'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Products & Supplies'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'categories', 'title' => 'Ten categories. One reliable source.', 'description' => 'We specialize in essential materials, from facility and custodial maintenance supplies to electrical components and emergency response products, so you have what you need when you need it.', 'items' => [
                    ['title' => 'Power Distribution & Transformers', 'description' => 'Switchgear, panelboards, breakers, fuses and transformers for critical infrastructure.', 'link' => '/products-and-materials/power-distribution-transformers/'],
                    ['title' => 'Water & Wastewater Treatment', 'description' => 'Maintenance chemicals and cleaning products for plants, lift stations and sewer lines.', 'link' => '/products-and-materials/water-wastewater-treatment/'],
                    ['title' => 'Fire & Safety', 'description' => 'Lithium-ion battery fire protection and added layers of safety for facilities.', 'link' => '/products-and-materials/fire-safety/'],
                    ['title' => 'HVAC & HVAC Package Units', 'description' => 'Coil cleaners, corrosion inhibitors and treatments that protect HVAC performance.', 'link' => '/products-and-materials/hvac-package-units/'],
                    ['title' => 'Plumbing Supplies', 'description' => 'Drain openers, odor control, sealers and bio-enzymatic maintenance products.', 'link' => '/products-and-materials/plumbing-supplies/'],
                    ['title' => 'Electrical, Lighting & Cable', 'description' => 'Cable, conduit, panels, controls and commercial lighting for complex projects.', 'link' => '/products-and-materials/electrical-lighting-cable/'],
                    ['title' => 'Safety & Security', 'description' => 'PPE, first aid, spill control, locks, alarms and emergency communications.', 'link' => '/products-and-materials/safety-security/'],
                    ['title' => 'Specialty Maintenance Chemicals', 'description' => 'High-performance chemicals that extend equipment life and cut downtime.', 'link' => '/products-and-materials/specialty-maintenance-chemicals/'],
                    ['title' => 'Facility Maintenance, MRO & Tools', 'description' => 'Tools, fasteners, adhesives and everyday MRO supplies for frontline teams.', 'link' => '/products-and-materials/facility-maintenance-mro-tools/'],
                    ['title' => 'Custodial, Janitorial & Sanitation', 'description' => 'Cleaners, disinfectants, paper goods and dispensing for inspection-ready facilities.', 'link' => '/products-and-materials/custodial-janitorial-sanitation/'],
                ]],
                ['layout' => 'text', 'id' => 'about-supply', 'title' => 'Can’t find what you need?', 'paragraphs' => ['Tell us what your project or facility requires. Our team can source what you need, and we work with contract vehicles that make public-sector purchasing simple.']],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Services', 'link' => 'link:services'], ['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'services' => [
        'title' => 'Services', 'parent' => '', 'template' => 'info', 'order' => 2,
        'content' => [
            'seo' => [
                'title' => 'Logistics, Procurement & Facility Support Services | Competitive Choice',
                'description' => 'Logistics and warehousing, procurement, program scheduling, drain care, air scenting, odor control and a work order call center.',
                'og_title' => 'Services | Competitive Choice',
                'og_description' => 'Value-added services that improve operational efficiency and continuity. Tell us what you need.',
                'schema_about' => 'Logistics, procurement and facility support services', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'SERVICES', 'title' => 'Services & Solutions', 'lead' => 'Beyond product distribution, a suite of value-added services that enhance operational efficiency and continuity.', 'quote_label' => 'REQUEST A QUOTE'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Services'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'services', 'title' => 'More than a supplier.', 'description' => 'We help organizations source, manage, deliver and support critical operational requirements.', 'items' => [
                    ['title' => 'Logistics & Procurement Services', 'description' => 'Warehousing, distribution, strategic sourcing and eProcurement from our Houston warehouse.', 'link' => '/services/logistics-procurement/'],
                    ['title' => 'Program & Scheduling Services', 'description' => 'Delivery coordination and scheduling for MEP and general contractor teams.', 'link' => '/services/program-scheduling/'],
                    ['title' => 'Drain Services', 'description' => 'Total Drain Care for wastewater, kitchen and dialysis drains.', 'link' => '/services/drain-services/'],
                    ['title' => 'Air Scenting Services', 'description' => 'HVAC-integrated and standalone scenting with allergy-tested fragrances.', 'link' => '/services/air-scenting-services/'],
                    ['title' => 'Odor Control', 'description' => 'Targeted odor control for schools, plants, healthcare centers and commercial buildings.', 'link' => '/services/odor-control/'],
                    ['title' => 'Work Order Request Call Center', 'description' => 'Centralized intake, tracking and follow-up for facility service tickets.', 'link' => '/services/work-order-request-call-center/'],
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

    'who-we-serve' => [
        'title' => 'Who We Serve', 'parent' => '', 'template' => 'info', 'order' => 30,
        'content' => [
            'seo' => [
                'title' => 'MRO Supplier for Government, Healthcare & Energy | Competitive Choice',
                'description' => 'Competitive Choice supports SLED, federal, healthcare, energy, commercial and construction customers with MRO supplies and services.',
                'og_title' => 'Who We Serve | Competitive Choice',
                'og_description' => 'A customer-centric partner for local and state government, federal agencies, healthcare, energy, commercial and construction teams.',
                'schema_about' => 'Industries served by Competitive Choice',
            ],
            'banner' => ['kicker' => 'WHO WE SERVE', 'title' => 'Our Reach and Impact', 'lead' => 'Everything we do is built around one principle: partnership. We take the time to understand your business and respond with agility and purpose.', 'quote_label' => 'REQUEST A QUOTE'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Who We Serve'],
            'blocks' => [
                ['layout' => 'text', 'id' => 'partnership', 'title' => 'Who benefits from our services', 'paragraphs' => ['Our customer-centric model means a dedicated team that tailors solutions to your operational priorities, with exceptional service, transparent communication and continuous improvement.', 'From day-to-day orders to long-term contracts, we deliver results and build relationships that last.']],
                ['layout' => 'cards', 'id' => 'industries', 'title' => 'Industries we support', 'description' => 'Six sectors, one dependable partner.', 'items' => [
                    ['id' => 'sled', 'title' => 'State, Local & Education (SLED)', 'description' => 'We have been awarded numerous contracts, from specific product awards and commodity contracts to full catalog agreements. We are your one-stop shop for maintenance, repair and operational needs for local, state and education facilities.'],
                    ['id' => 'federal', 'title' => 'Federal', 'description' => 'Through our partnerships with the General Services Administration and AbilityOne, we offer quality products through competitively bid contracts and streamlined procurement channels, including TAA-compliant safety supplies, material handling, tools, lighting and AbilityOne items.', 'lines' => ['GSA Advantage', 'AbilityOne']],
                    ['id' => 'healthcare', 'title' => 'Healthcare', 'description' => 'A well-organized, fully stocked facility is vital. We help solve day-to-day challenges with med/surge and safety products, wheelchairs and wheelchair repair parts, and thousands of other medical supplies.'],
                    ['id' => 'energy', 'title' => 'Energy', 'description' => 'Our chemicals help facilities worldwide get it clean and keep it green. We meet drilling, completion, production and midstream requirements with electrical, datacomm, valves, pipe, fittings, structural steel, tools, gauges, rod pumps, production equipment and safety supplies.'],
                    ['id' => 'commercial', 'title' => 'Commercial', 'description' => 'Failure to procure essential MRO products can stall a production line. We are your source for commercial safety supplies, tools, equipment, shelving, lighting, vacuums, carpet cleaners and other items needed to complete commercial projects.'],
                    ['id' => 'construction', 'title' => 'Construction', 'description' => 'Choose us for your construction and MEP supply requirements. We can source what your project needs, from building wire, thermometers and smoke detectors to pipe supports, across mechanical, electrical and plumbing supplies.'],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'], ['label' => 'Past Performances', 'link' => 'link:work'], ['label' => 'Certifications', 'link' => 'link:certifications']]],
        ],
    ],

    'mission-and-values' => [
        'title' => 'Mission & Values', 'parent' => '', 'template' => 'info', 'order' => 31,
        'content' => [
            'seo' => [
                'title' => 'Mission & Values | Trusted MRO Supplier Since 2003 | Competitive Choice',
                'description' => 'Since 2003, Competitive Choice has built long-term value for customers, employees and suppliers. Read our mission, vision, story and commitments.',
                'og_title' => 'Mission & Values | Competitive Choice',
                'og_description' => 'Guided by purpose, driven by vision. Learn how Competitive Choice grew from a specialty chemical supplier into a trusted logistics partner.',
                'schema_about' => 'Mission, vision and values of Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Guided by Purpose, Driven by Vision', 'lead' => 'Since 2003, a commitment to long-term value for the people and institutions that power our communities.'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => 'Mission & Values'],
            'blocks' => [
                ['layout' => 'text', 'id' => 'mission', 'title' => 'Our mission', 'paragraphs' => ['Since 2003, our mission has been rooted in fostering long-term value for the people and institutions that power our communities: our customers, employees and suppliers. We are committed to building sustainable relationships and delivering solutions that elevate resilience, reliability and performance across critical sectors.']],
                ['layout' => 'text', 'id' => 'vision', 'title' => 'Our vision', 'paragraphs' => ['To lead by example as a high-performing distributor that champions innovation, operational excellence and inclusive supply chains. We strive to be the go-to partner for organizations safeguarding the future of infrastructure and essential services.']],
                ['layout' => 'text', 'id' => 'story', 'title' => 'Our story', 'paragraphs' => ['We began as a specialty chemical supplier, serving customers with targeted solutions for facility maintenance. As our reputation grew, so did our reach, and clients began relying on us for a broader range of products and services: MEP supplies, construction materials, power systems and safety equipment.', 'Today, Competitive Choice is a comprehensive supplier and logistics partner trusted by public institutions, infrastructure operators and private sector leaders navigating operational risk and complexity.']],
                ['layout' => 'cards', 'id' => 'commitments', 'title' => 'Our commitments', 'description' => 'How we run our business every day.', 'items' => [
                    ['title' => 'Equal Opportunity', 'description' => 'Competitive Choice is dedicated to equal employment opportunities. We do not discriminate against any potential applicants or current employees.'],
                    ['title' => 'Customer Privacy & Data', 'description' => 'Our e-commerce portal is designed for quick, secure shopping. We use a secure server and SSL encryption for orders and personal information, and adhere to PCI DSS.'],
                    ['title' => 'Vendor Commitment', 'description' => 'Our vendors make customized solutions possible. We build strong relationships with suppliers and value the quality and commitment each brings to our supply chain.'],
                    ['title' => 'Compliance Is Key', 'description' => 'We take full responsibility for regulations related to our government customers, uphold ethics in vendor relations, train employees regularly and handle any required reporting.'],
                    ['title' => 'Environmental Impact', 'description' => 'We keep searching for sustainable ways to do business. Many items in our line are free of petroleum solvents and standard detergents and are fully biodegradable.'],
                    ['title' => 'Continued Growth', 'description' => 'We provide customized solutions for customers across many industries and will keep innovating and diversifying our products and services to meet their needs.'],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Our CEO', 'link' => '/our-ceo/'], ['label' => 'Our Team', 'link' => '/our-team/'], ['label' => 'Certifications', 'link' => 'link:certifications']]],
        ],
    ],

    'community-culture' => [
        'title' => 'Community & Culture', 'parent' => '', 'template' => 'info', 'order' => 32,
        'content' => [
            'seo' => [
                'title' => 'Community & Culture | Houston MRO Supplier | Competitive Choice',
                'description' => 'Purpose, competitiveness, innovation and sustainability define our culture. See how Competitive Choice gives back to the community.',
                'og_title' => 'Community & Culture | Competitive Choice',
                'og_description' => 'Empowering cultures and strengthening community bonds in Houston and beyond.',
                'schema_about' => 'Company culture and community involvement', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Empowering Cultures. Strengthening Community Bonds.', 'lead' => 'A diverse, welcoming company where every voice is valued.'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => 'Community & Culture'],
            'blocks' => [
                ['layout' => 'text', 'id' => 'community', 'title' => 'Where culture is cherished and connections run deep', 'paragraphs' => ['At Competitive Choice, we believe in the power of togetherness and the unique traditions each individual brings. We create a welcoming space where everyone’s voice is valued, and through shared experiences, open discussion and collaborative initiatives we build bridges across cultures.']],
                ['layout' => 'cards', 'id' => 'values', 'title' => 'What drives us', 'description' => 'Six principles that shape how we work.', 'items' => [
                    ['title' => 'Purpose Driven', 'description' => 'From our start in 2003, we strive for excellence in every part of our business through hard work and high standards of customer service. We are the company that performs, your best choice, your Competitive Choice.'],
                    ['title' => 'Competitive', 'description' => 'We chose the name Competitive Choice because we always aim to be better each day. Challenges drive our growth, and competition keeps us creative and relevant.'],
                    ['title' => 'Culture', 'description' => 'A collaborative, innovative culture helps us grow. We are a high-performance organization with a purpose, and our talent and expertise set us apart as an employer and partner.'],
                    ['title' => 'Innovative', 'description' => 'We encourage autonomy and originality, and always look for new ideas and opportunities to achieve our customers’ goals.'],
                    ['title' => 'Sustainability', 'description' => 'We take our carbon footprint seriously and are dedicated to programs, policies and solutions that make a difference to our partners and communities.'],
                    ['title' => 'Empowering Others', 'description' => 'As we grow, our social responsibility grows. Charitable giving has been part of our culture since we began, including our partnership with the No Excuses Foundation and other charitable organizations.'],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Mission & Values', 'link' => '/mission-and-values/'], ['label' => 'Our Team', 'link' => '/our-team/'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'certifications' => [
        'title' => 'Certifications', 'parent' => '', 'template' => 'info', 'order' => 33,
        'content' => [
            'seo' => [
                'title' => 'Woman-Owned MRO Supplier Certifications | Competitive Choice',
                'description' => 'Competitive Choice is a certified woman-owned business with national, state, local and federal certifications including SBA WOSB and EDWOSB.',
                'og_title' => 'Certifications | Competitive Choice',
                'og_description' => 'Certified for success: woman-owned, MBE, SBE, WBE, DBE and SBA WOSB / EDWOSB certifications.',
                'schema_about' => 'Business certifications held by Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Certified for Success', 'lead' => 'Competitive Choice holds certification as a woman-owned business with the following organizations.'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => 'Certifications'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'certifications', 'title' => 'Our certifications', 'description' => 'National, state and local, and federal.', 'items' => [
                    ['title' => 'National Certifications', 'description' => 'Woman-owned business certification at the national level.', 'lines' => ['WBENC']],
                    ['title' => 'State & Local: Austin & San Antonio Area', 'lines' => ['MBE', 'SBE', 'WBE']],
                    ['title' => 'State & Local: Dallas & Fort Worth Area', 'lines' => ['MBE', 'SBE', 'WBE']],
                    ['title' => 'State & Local: Texas', 'lines' => ['HUB']],
                    ['title' => 'Federal: DBE', 'description' => 'Disadvantaged Business Enterprise.', 'lines' => ['Texas', 'Oklahoma', 'Illinois', 'Louisiana']],
                    ['title' => 'Federal: SBA', 'lines' => ['WOSB', 'EDWOSB']],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'], ['label' => 'Who We Serve', 'link' => 'link:industries'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'our-ceo' => [
        'title' => 'Our CEO', 'parent' => '', 'template' => 'info', 'order' => 34,
        'content' => [
            'seo' => [
                'title' => 'Aundrea Young, CEO | Woman-Owned MRO Distributor | Competitive Choice',
                'description' => 'A message from CEO Aundrea Young on 20 years in business and the next chapter for Competitive Choice, a woman-owned MRO distributor in Houston.',
                'og_title' => 'A Message From Our CEO, Aundrea Young | Competitive Choice',
                'og_description' => 'Twenty years in business: growth, resilience and what comes next.',
                'schema_about' => 'Message from the CEO of Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'EXECUTIVE INSIGHTS', 'title' => 'A Message From Our CEO, Aundrea Young', 'lead' => '20 years in business, and a new chapter ahead.'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => 'Our CEO'],
            'blocks' => [
                ['layout' => 'text', 'id' => 'message', 'title' => '20 Years in Business!', 'paragraphs' => [
                    'Over the past two decades, we have grown from a small specialty chemical and facility maintenance supplier into a thriving organization. We offer a diverse range of products and supplies and serve a broad range of industries and customers. It is your trust, loyalty and belief in our products and services that have fueled our growth and success.',
                    'In an environment where nearly 50% of small businesses close within the first five years and only 25% make it to fifteen years, we stand proud as a testament to perseverance and determination. Through hard work, dedication and belief in our vision, we have defied the statistics and celebrate our 20th year in business.',
                    'Our journey has been marked by challenges, both anticipated and unexpected: economic downturns, industry shifts and competitive pressures. We refused to let our small size determine our fate and embraced every obstacle as an opportunity to grow, innovate and adapt.',
                    'To our dedicated employees, past and present, I express my deepest gratitude. Your hard work, expertise and passion have driven our achievements, and together we have built a culture of excellence, collaboration and continuous improvement.',
                    'To our valued customers, thank you for choosing us as your preferred supplier. Your partnership has been instrumental in our growth, and your feedback and support help us refine and expand our offerings.',
                    'As we celebrate the past 20 years, this milestone also marks a new chapter. We remain committed to innovation, sustainability and exceeding customer expectations, embracing emerging technologies and industry best practices, and developing environmentally friendly solutions.',
                    'Thank you for being the best part of Competitive Choice.',
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Our Team', 'link' => '/our-team/'], ['label' => 'Mission & Values', 'link' => '/mission-and-values/'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'our-team' => [
        'title' => 'Our Team', 'parent' => '', 'template' => 'info', 'order' => 35,
        'content' => [
            'seo' => [
                'title' => 'Our Team | Facility Supply & Procurement Experts | Competitive Choice',
                'description' => 'Meet the leadership and solutions team behind Competitive Choice, a Houston facility supply and procurement partner since 2003.',
                'og_title' => 'Our Team | Competitive Choice',
                'og_description' => 'Our products are as diverse as our people. Meet the team.',
                'schema_about' => 'Leadership and team of Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Our Products Are as Diverse as Our People', 'lead' => 'Your best choice. Your Competitive Choice.'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => 'Our Team'],
            'blocks' => [
                ['layout' => 'people', 'id' => 'leadership', 'title' => 'Our leadership team', 'items' => [
                    ['title' => 'Aundrea Young', 'meta' => 'President / CEO', 'description' => 'Under Aundrea’s leadership, Competitive Choice has grown into a market leader in facility maintenance, construction supply and infrastructure resilience, serving water, energy, healthcare and education. She holds a dual degree in Communication and Construction Management, an Executive MBA from the University of Houston C.T. Bauer College of Business, and is an alumna of the Harvard Business School OPM program.'],
                    ['title' => 'Casey Williams', 'meta' => 'Vice President of Sales, Strategic Growth & Development', 'description' => 'Casey spearheads strategic growth initiatives and business advancement for our national accounts, leading a collaborative, high-performance sales team. He studied at Trevecca University and has built his skills through years of hands-on experience in sales.'],
                    ['title' => 'Jillian Williams', 'meta' => 'Director of Operations', 'description' => 'Jillian brings operations, marketing, customer service and sales knowledge to the role. She works to understand client needs and to develop and source new products that meet them. She holds a degree in Marketing.'],
                ]],
                ['layout' => 'people', 'id' => 'solutions-team', 'title' => 'Our solutions team', 'items' => [
                    ['title' => 'Amanda', 'meta' => 'Marketing Manager / Senior Graphic Designer'],
                    ['title' => 'Andre', 'meta' => 'Sales Representative'],
                    ['title' => 'Debra', 'meta' => 'AP/AR Clerk'],
                    ['title' => 'Ugo', 'meta' => 'Web Application Developer'],
                    ['title' => 'Amy', 'meta' => 'Supply Chain Manager & Government Compliance'],
                ]],
                ['layout' => 'text', 'id' => 'journey', 'title' => 'Our journey', 'paragraphs' => [
                    'In 2003, our small business started with a single focus: specialty chemicals for specific industry needs. As our reputation grew, customers asked for advice and support on a broader range of construction and facility maintenance supplies and equipment, so we diversified our portfolio.',
                    'We studied the market, spotted emerging trends and formed strategic partnerships, from tools and safety gear to HVAC systems, electrical components and plumbing fixtures. We invested in our team’s knowledge so we could support customers’ construction and maintenance work.',
                    'Today our customers consider us their trusted one-stop shop. We remain committed to lasting partnerships and the highest quality products, and to innovating and expanding our range to meet changing needs.',
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Our CEO', 'link' => '/our-ceo/'], ['label' => 'Community & Culture', 'link' => '/community-culture/'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'co-ops-and-schedules' => [
        'title' => 'Co-Ops & Schedules', 'parent' => '', 'template' => 'info', 'order' => 36,
        'content' => [
            'seo' => [
                'title' => 'Co-Op Contracts & GSA Schedule | TIPS, BuyBoard | Competitive Choice',
                'description' => 'Competitive Choice holds TIPS, BuyBoard, Good Buy, PCA, Allied State, Choice Partners and GSA MAS contracts for public-sector purchasing.',
                'og_title' => 'Co-Op Contracts & GSA Schedule | Competitive Choice',
                'og_description' => 'Cooperative and federal contract vehicles that make public purchasing simple and compliant.',
                'schema_about' => 'Cooperative purchasing contracts and the GSA Schedule', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Empowering Your Procurement Experience', 'lead' => 'Multiple cooperative and federal contracts give public-sector buyers access to high-quality products and services.', 'quote_label' => 'REQUEST A QUOTE'],
            'breadcrumb' => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => 'Co-Ops & Schedules'],
            'blocks' => [
                ['layout' => 'text', 'id' => 'overview', 'title' => 'Cooperative contracts', 'paragraphs' => ['Competitive Choice has been awarded multiple cooperative contracts, so our customers can access a wide range of products and services with cost-effective, streamlined procurement. Contract numbers and categories are listed below.']],
                ['layout' => 'rows', 'id' => 'cooperatives', 'title' => 'Cooperative contracts', 'description' => 'Texas and national purchasing cooperatives.', 'items' => [
                    ['title' => 'TIPS (Texas Interlocal Purchasing System)', 'description' => 'A cooperative purchasing program that streamlines purchasing for Texas government entities and educational institutions.', 'lines' => ['220605: MRO supplies, equipment, tool rental, sales and services', '230103: Janitorial and sanitation supplies and services', '230903: Industrial and facility equipment, chemicals, supplies and services', '23100201: Energy and water efficiency goods and services (non-JOC)', '240102: Emergency responder supplies, equipment and services', '240402: Office and school supplies, products and services', '250101: Safety equipment, supplies and services', '25020101: Renewable energy and solar solutions (non-JOC)']],
                    ['title' => 'BuyBoard', 'description' => 'A national purchasing cooperative with competitive pricing and streamlined procurement.', 'lines' => ['690-23: Energy saving lighting products', '715-23: Automotive parts, fluids, equipment and maintenance services', '747-24: Custodial supplies and equipment']],
                    ['title' => 'Good Buy', 'description' => 'A cooperative purchasing program supporting public procurement in Texas.', 'lines' => ['24-25 6D000: Office supplies and equipment', '25-26 2B000: Custodial and janitorial cleaning supplies and equipment', '25-26 6M000: Lighting, electrical supplies and installation', '25-26 7A000: MRO maintenance, repair and operating supplies and equipment', '25-26 7D000: HVAC supplies and equipment', '25 7N000: Facility services, building and equipment maintenance and repair', '25-26 7M000: Electrical hardware, supplies, control systems and equipment']],
                    ['title' => 'Purchasing Cooperative of America (PCA)', 'description' => 'Extends our solutions to a broader network of public entities and non-profit organizations.', 'lines' => ['OD-339-21: COVID disinfecting, sanitizing and PPE equipment', 'OD-396-23: Janitorial and custodial products, services and related items', 'OD-400-23: Office supplies and related items', 'OD-414-24: Custodial supplies, equipment and related items']],
                    ['title' => 'Allied State Cooperative', 'description' => 'Serves public entities in various states across the nation.', 'lines' => ['23-7457: MRO equipment, supplies, materials and services', '25-7522: Medical supplies, equipment and related services (supplemental)']],
                    ['title' => 'Choice Partners', 'description' => 'A national cooperative purchasing organization connecting public procurement entities with suppliers.', 'lines' => ['24/023TC-06: MRO parts, equipment and related services']],
                    ['title' => 'Regional Cooperatives (Regions 5, 6 and 7)', 'description' => 'Procurement solutions tailored to specific geographic regions.', 'lines' => ['20240503: Electrical supplies and/or services', '20240504: HVAC capital equipment, supplies and/or services', '20240505: Plumbing supplies and/or services', '20240705: Janitorial equipment, supplies and/or services', '20240709: Personal protection equipment (PPE)', '20250202: Maintenance and operations equipment supplies, rental, sales and/or services', '20250301: Building materials and supplies']],
                    ['title' => 'Additional Cooperative Contracts', 'description' => 'Further contracts held by Competitive Choice.', 'lines' => ['15.22: Office supplies', '26.24: Building materials, hardware, services', '29.22: HVAC parts, supplies, services', '31.22: Plumbing parts, supplies, services', '39.25: MRO of facilities and grounds, supplies, equipment, tool rental, sales and services', '6.23: Janitorial equipment, supplies, services', 'CUS2426: Custodial supplies', 'ELEC2426: Electrical supplies', 'PLUMB2425: Plumbing supplies', 'MAIN2527: Building maintenance and safety supplies']],
                ]],
                ['layout' => 'rows', 'id' => 'federal', 'title' => 'Federal contracts', 'description' => 'Competitively bid contracts for federal buyers.', 'items' => [
                    ['title' => 'GSA Multiple Award Schedule (MAS)', 'description' => 'Contract number 47QSEA20D005G. The GSA Schedule is a long-term governmentwide contract that gives federal buyers access to millions of commercial products and services at fair and reasonable prices. Through GSA Advantage, we supply everything from hospitality and cleaning equipment to foodservice and chemicals.', 'lines' => ['Contract # 47QSEA20D005G']],
                    ['title' => 'AbilityOne', 'description' => 'The AbilityOne Program is one of the nation’s leading employers of people who are blind or have significant disabilities. With GSA and AbilityOne, we offer AbilityOne products and our MAS schedules for industrial and facility products and office supplies to government customers.'],
                ]],
                ['layout' => 'text', 'id' => 'closing', 'title' => 'Procurement made simple', 'paragraphs' => ['These contracts reflect our commitment to a better procurement experience: cost-effective solutions, diverse supplier options, streamlined processes and exceptional service. Contact us to learn how they can benefit your organization.']],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Certifications', 'link' => 'link:certifications'], ['label' => 'Past Performances', 'link' => 'link:work'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'past-performances' => [
        'title' => 'Past Performances', 'parent' => '', 'template' => 'info', 'order' => 37,
        'content' => [
            'seo' => [
                'title' => 'Past Performances | Government & Facility Supply Contracts | Competitive Choice',
                'description' => 'Federal and commercial project experience, including NASA Johnson Space Center, airports, hospitals and universities across Texas.',
                'og_title' => 'Past Performances | Competitive Choice',
                'og_description' => 'A history of successful projects and satisfied customers.',
                'schema_about' => 'Federal and commercial project experience', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'OUR WORK', 'title' => 'Success in Retrospect', 'lead' => 'A history of successful projects and satisfied customers.', 'quote_label' => 'REQUEST A QUOTE'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Past Performances'],
            'blocks' => [
                ['layout' => 'rows', 'id' => 'federal', 'title' => 'Past federal performance', 'items' => [
                    ['title' => 'NASA Johnson Space Center, Houston, Texas', 'description' => 'Multiple Award Indefinite-Delivery, Indefinite-Quantity (IDIQ) contract for general construction and minor projects at NASA Johnson Space Center, Ellington Field and Sonny Carter Training Facility in Houston, and White Sands Test Facility in Las Cruces, New Mexico.', 'lines' => ['Contract amount: $49,000,000', 'Contract No. NNJ09JA19P', 'Contract amount: $82,578']],
                    ['title' => 'Federal Detention Center, Houston, Texas', 'description' => 'HVAC upgrade.', 'lines' => ['Contract amount: $83,000']],
                    ['title' => 'Army Corps of Engineers, Galveston, Texas', 'description' => 'Renovation and reconstruction of office.', 'lines' => ['Contract amount: $23,000']],
                ]],
                ['layout' => 'rows', 'id' => 'tier-two', 'title' => 'Pre-construction and service contract projects', 'description' => 'Competitive Choice has participated as a Tier II supplier on the following projects.', 'items' => [
                    ['title' => 'Houston Independent School District', 'description' => 'Service project.', 'lines' => ['HVAC and plumbing supplies and equipment']],
                    ['title' => 'City of Houston', 'description' => 'Service project.', 'lines' => ['Plumbing supplies and equipment']],
                    ['title' => 'Hobby Airport', 'description' => 'New construction project.', 'lines' => ['HVAC supplies and materials', 'Plumbing supplies and material']],
                    ['title' => 'United Airlines Terminal C', 'description' => 'New construction project.', 'lines' => ['Glass materials', 'Fire protection equipment', 'Electrical supplies and equipment', 'Plumbing supplies and equipment', 'HVAC supplies and equipment']],
                    ['title' => 'Aloft Element Hotel (Clark Contractors)', 'description' => 'New construction project.', 'lines' => ['Plumbing supplies and material']],
                    ['title' => 'Toyota Project, Plano, Texas (Brandt / Dynamic Systems)', 'description' => 'New construction project.', 'lines' => ['Plumbing supplies and material', 'HVAC supplies and equipment']],
                ]],
                ['layout' => 'rows', 'id' => 'projects', 'title' => 'Additional project experience', 'description' => 'Projects supported, grouped by supply category.', 'items' => [
                    ['title' => 'Electrical', 'lines' => ['AT&T, Dallas', 'AT&T Beaumont Victor, Beaumont', 'Hobby Fueling Facility, Houston', 'Houston Methodist Cypress, Houston', 'Lee College, Baytown', 'MD Anderson Cabling, Houston', 'SBP Fair Housing OST, Houston', 'UH College Med BP2, Houston', 'UH Sugarland, Sugarland']],
                    ['title' => 'Generator', 'lines' => ['TDCJ Dominguez, San Antonio', 'TDCJ Holiday, Huntsville', 'TDCJ Luther Unit, Navasota', 'TDCJ Mechler, Tulia', 'UH School of Law, Houston']],
                    ['title' => 'HVAC', 'lines' => ['AT&T Toll Cooling Tower, Dallas', 'Hobby Airport Central, Houston']],
                    ['title' => 'Insulation', 'lines' => ['Killeen/Ft. Hood Airport, Killeen']],
                    ['title' => 'Painting Supplies', 'lines' => ['TSU Library Learning Center, Houston']],
                    ['title' => 'Plumbing', 'lines' => ['American Airlines Hospitality, Fort Worth', 'Baylor Scott & White Irving Patient Bed Tower, Dallas', 'City of Houston', 'City of Houston Westbury Library, Houston', 'DFW Airport, Dallas', 'FIS Renovation & Expansion, Houston', 'Loews Ocho Hotel, Dallas', 'Mickey Leland Airport, Houston', 'Northstar Fire Protection, Austin', 'TCCD SE Campus Bldg 1, Houston', 'Texas Live Entertainment Venue, Arlington', 'Texas Sprinkler, Grapevine', 'U of H Parking Garage 6, Houston', 'United Airlines, Houston', 'UTOC, Houston', 'Wells Fargo, Irving', 'Prairie View A&M University, College Station']],
                    ['title' => 'Sodium Hypochlorite', 'lines' => ['Prairie View A&M University, College Station']],
                ]],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'], ['label' => 'Who We Serve', 'link' => 'link:industries'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'contact-us' => [
        'title' => 'Contact Us', 'parent' => '', 'template' => 'info', 'order' => 38,
        'content' => [
            'seo' => [
                'title' => 'Request a Quote | Contact Competitive Choice, Houston TX',
                'description' => 'Contact Competitive Choice in Houston, TX. Call 713-838-1144 or send a message and our team will help identify the right products and services.',
                'og_title' => 'Contact Competitive Choice | Request a Quote',
                'og_description' => 'Want to know more? Reach out to our Houston team.',
                'schema_about' => 'Contact and quote requests for Competitive Choice', 'page_type' => 'ContactPage',
            ],
            'banner' => ['kicker' => 'CONTACT US', 'title' => 'Want to Know More? Reach Out to Us', 'lead' => 'Tell us what you need. Our team will help identify the right products, services and procurement solution.'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Contact Us'],
            'blocks' => [
                ['layout' => 'contact', 'id' => 'contact', 'title' => 'We’re here to help', 'description' => 'Send us your requirement, or call or email our team.'],
            ],
            'related' => ['title' => 'Related pages', 'links' => [['label' => 'Products & Supplies', 'link' => 'link:products'], ['label' => 'Services', 'link' => 'link:services'], ['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts']]],
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
