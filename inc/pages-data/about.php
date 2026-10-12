<?php
/**
 * About Us pages (Info Page template): index, mission and values, community and culture, certifications,
 * leadership, co-ops and schedules, past performances. Copy and images come from the company's existing site.
 */

if (!defined('ABSPATH')) exit;

$img = fn($file) => 'wp-content/themes/competitive-choice/assets/images/about/' . $file;
$crumb = fn($current) => ['home' => 'Home', 'parent' => 'About Us', 'parent_link' => 'link:about', 'current' => $current];
$about_links = [['About Us', '/about-us/'], ['Community & Culture', '/about-us/community-culture/'], ['Certifications', '/about-us/certifications/'], ['Leadership & Team', '/about-us/leadership-team/'], ['Co-Ops & Schedules', '/about-us/co-ops-schedules/'], ['Past Performances', '/about-us/past-performances/']];
$about_slugs = ['about-us', 'community-culture', 'certifications', 'leadership-team', 'co-ops-schedules', 'past-performances'];
/** Links to every other page in the About Us group. */
$related = function ($self) use ($about_links, $about_slugs) {
    $links = [];
    foreach ($about_links as $i => $l) {
        if ($about_slugs[$i] !== $self) $links[] = ['label' => $l[0], 'link' => $l[1]];
    }
    return ['title' => 'Explore more of About Us', 'links' => $links];
};

return [
    'about-us' => [
        'title' => 'About Us', 'parent' => '', 'template' => 'info', 'order' => 50,
        'content' => [
            'seo' => [
                'title' => 'About Us | Mission, Vision & Values | Competitive Choice',
                'description' => 'Since 2003, Competitive Choice has built long-term value for customers, employees and suppliers. Read our mission, vision, story and commitments.',
                'og_title' => 'About Us | Competitive Choice',
                'og_description' => 'Fostering long-term value for the people and institutions that power our communities.',
                'schema_about' => 'Mission, vision and values of Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['zoom' => true, 'title' => 'ABOUT US', 'tagline' => "Guided by Purpose\nDriven by Vision", 'lead' => 'People who deliver. Partners you can count on. Since 2003.', 'image' => 'wp-content/themes/competitive-choice/assets/images/about-header.jpg'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'About Us'],
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'Competitive Choice started in Houston in {{2003}}, selling specialty chemicals to a handful of customers who trusted us to get it right.',
                    'Today we are a woman-owned supplier and logistics partner for the schools, cities, hospitals and plants that keep our communities running. The idea behind us has not changed: show up, do the work well, and treat every customer like a partner.',
                ]],
                ['layout' => 'centered', 'id' => 'mission', 'kicker' => 'OUR MISSION', 'title' => 'Long-term value for the people who power our communities', 'paragraphs' => [
                    'Since 2003, our mission has been rooted in fostering long-term value for the people and institutions that power our communities: our customers, employees and suppliers.',
                    'We are committed to building sustainable relationships and delivering solutions that elevate resilience, reliability and performance across critical sectors.',
                ]],
                ['layout' => 'centered', 'id' => 'vision', 'kicker' => 'OUR VISION', 'title' => 'Leading by example', 'paragraphs' => [
                    'To lead by example as a high-performing distributor that champions innovation, operational excellence and inclusive supply chains, and to be the go-to partner for organizations safeguarding the future of infrastructure and essential services.',
                ]],
                ['layout' => 'centered', 'id' => 'story', 'kicker' => 'OUR STORY', 'title' => 'From specialty chemicals to a trusted logistics partner', 'paragraphs' => [
                    'We began as a specialty chemical supplier, serving customers with targeted solutions for facility maintenance. As our reputation grew, so did our reach. Clients began relying on us for MEP supplies, construction materials, power systems and safety equipment.',
                    'Today, Competitive Choice is a comprehensive supplier and logistics partner trusted by public institutions, infrastructure operators and private sector leaders navigating operational risk and complexity.',
                ]],
                ['layout' => 'cards', 'id' => 'commitments', 'tint' => true, 'icons' => true, 'title' => 'Our Commitments', 'description' => 'The principles behind how we work with customers, vendors and communities.', 'items' => [
                    ['title' => 'Equal Opportunity Policy', 'image' => $img('commit-equal.png'), 'description' => 'Competitive Choice is dedicated to equal employment opportunities. We do not discriminate against any potential applicants or current employees.'],
                    ['title' => 'Customer Privacy And Data', 'image' => $img('commit-privacy.png'), 'description' => 'Shop confidently on our e-commerce portal, designed for quick, secure, and hassle-free experiences. Trust and privacy are our priorities. Our website’s comprehensive privacy policy ensures your data is handled with utmost seriousness. Rest easy with our fully secure online purchasing platform. We utilize a secure server for orders and personal information, protecting sensitive details using SSL technology and encryption. Adherence to PCI DSS adds an extra layer of security, safeguarding your information from potential threats.'],
                    ['title' => 'Vendor Commitment', 'image' => $img('commit-vendor.png'), 'description' => 'Our vendors play a critical role in our ability to provide customized solutions for our customers. Our team seeks to establish great relationships with all suppliers and values the hard work and commitment to quality each business in our supply chain provides to us.'],
                    ['title' => 'Compliance is Key', 'image' => $img('commit-compliance.png'), 'description' => 'We take full responsibility for regulatory policies and regulations related to our government customers. We uphold compliance and proper ethics in all aspects of vendor relations, conduct regular training seminars for employees, and handle any required reporting of violations to government regulations.'],
                    ['title' => 'Environmental Impact', 'image' => $img('commit-environment.png'), 'description' => 'We are always searching for new ways to conduct business in a sustainable and environmentally friendly way. We hope that through our line of eco-friendly products, we can create a greener and cleaner environment for our customers. Many items in our Competitive Choice product line are free of petroleum solvents and standard detergents found in other cleaners and are fully biodegradable.'],
                    ['title' => 'Continued Growth', 'image' => $img('commit-growth.png'), 'description' => 'At Competitive Choice, we pride ourselves on our customized solutions for customers across a wide variety of industries. We work closely with businesses across the nation to provide mission-critical supplies and services. As our company grows, we intend to continually innovate, improve, and diversify our products and service offerings to meet the needs of our diverse clientele.'],
                ]],
            ],
            'related' => $related('about-us'),
        ],
    ],

    'community-culture' => [
        'title' => 'Community & Culture', 'parent' => 'about-us', 'template' => 'info', 'order' => 52,
        'content' => [
            'seo' => [
                'title' => 'Community & Culture | Competitive Choice',
                'description' => 'Purpose-driven, competitive and community-minded. Learn how culture, innovation, sustainability and giving shape Competitive Choice.',
                'og_title' => 'Community & Culture | Competitive Choice',
                'og_description' => 'A high-performance organization with a purpose.',
                'schema_about' => 'Culture and community involvement at Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['zoom' => true, 'position' => 'center 64%', 'image' => 'wp-content/themes/competitive-choice/assets/images/about-culture-header.jpg', 'kicker' => 'ABOUT US', 'title' => 'Community & Culture', 'tagline' => "Empowering Cultures\nStrengthening Community Bonds", 'lead' => 'A collaborative, innovative culture built on high standards, service and giving back.'],
            'breadcrumb' => $crumb('Community & Culture'),
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'Culture is not a poster on our wall. It is how we treat one another, our customers and the communities we serve. At Competitive Choice, we believe in the power of togetherness and in the traditions each person brings with them.',
                    'Everyone’s voice is valued here, and that is how meaningful relationships grow.',
                ]],
                ['layout' => 'cards', 'id' => 'culture', 'tint' => true, 'wide' => true, 'title' => 'What drives us', 'description' => 'Six ideas that shape how we work, and who we are.', 'items' => [
                    ['title' => 'Purpose Driven', 'image' => $img('purpose.jpg'), 'description' => 'Since 2003, we have held ourselves to high standards of hard work and customer service. We aim to be the company that performs: your best choice, your Competitive Choice.'],
                    ['title' => 'Competitive', 'image' => $img('competitive-1.jpg'), 'description' => 'We chose the name because we are never done improving. Challenges drive our growth, and healthy competition keeps us creative and relevant.'],
                    ['title' => 'Culture', 'image' => $img('diversity.jpg'), 'description' => 'A collaborative, innovative culture helps us grow and succeed. We are a high-performance organization with a purpose, and our talent sets us apart as both an employer and a business partner.'],
                    ['title' => 'Innovative', 'image' => $img('innovation.jpg'), 'description' => 'We encourage autonomy and originality. We are not afraid to color outside the lines, and we are always looking for new ideas to achieve our customers’ goals.'],
                    ['title' => 'Sustainability', 'image' => $img('sustainability.jpg'), 'description' => 'We take our carbon footprint seriously. Sustainability and responsibility are part of who we are, and we are dedicated to programs and solutions that make a difference to our partners and communities.'],
                    ['title' => 'Empowering Others', 'image' => $img('charity3.jpg'), 'description' => 'As we grow, our social responsibility grows with us. Giving has been part of our culture since our founding, and we partner with the No Excuses Foundation and other charities to serve communities in need.'],
                ]],
            ],
            'related' => $related('community-culture'),
        ],
    ],

    'certifications' => [
        'title' => 'Certifications', 'parent' => 'about-us', 'template' => 'info', 'order' => 53,
        'content' => [
            'seo' => [
                'title' => 'Certifications | WOSB, EDWOSB, DBE, MBE, WBE | Competitive Choice',
                'description' => 'Competitive Choice holds national, state, local and federal certifications including SBA WOSB / EDWOSB, DBE, MBE, SBE and WBE.',
                'og_title' => 'Certifications | Competitive Choice',
                'og_description' => 'National, state, local and federal certifications that support supplier diversity goals.',
                'schema_about' => 'Business certifications held by Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'CERTIFIED FOR SUCCESS', 'tagline' => 'Recognized at the national, state, local and federal levels', 'image' => $img('women6.jpg')],
            'breadcrumb' => $crumb('Certifications'),
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'Competitive Choice is recognized at the national, state, local and federal levels. These certifications reflect how we run our business, and they help our customers meet their supplier diversity goals.',
                ]],
                ['layout' => 'logos', 'id' => 'national', 'title' => 'National Certifications', 'items' => [
                    ['image' => $img('wbenc2.png'), 'title' => 'WBENC'],
                    ['image' => $img('minority2.png'), 'title' => 'HMSDC'],
                    ['image' => $img('chicagocertifications.png'), 'title' => 'Chicago certifications'],
                ]],
                ['layout' => 'logos', 'id' => 'state-local', 'tint' => true, 'title' => 'State & Local Certifications', 'items' => [
                    ['image' => $img('sctrca_2026.png'), 'title' => 'SCTRCA', 'meta' => 'Austin & San Antonio Area'],
                    ['image' => $img('nctrca_2026.png'), 'title' => 'NCTRCA', 'meta' => 'Dallas & Fort Worth Area'],
                    ['image' => $img('hisd_20266.png'), 'title' => 'Houston ISD'],
                    ['image' => $img('cityofhouston.png'), 'title' => 'City of Houston', 'meta' => 'MBE, SBE, WBE'],
                    ['image' => $img('houstonfirst2.png'), 'title' => 'Houston First'],
                    ['image' => $img('cityofaustin_2026.png'), 'title' => 'City of Austin', 'meta' => 'MBE, SBE, WBE'],
                    ['image' => $img('port_houston.png'), 'title' => 'Port Houston'],
                ]],
                ['layout' => 'logos', 'id' => 'federal', 'title' => 'Federal Certifications', 'items' => [
                    ['image' => $img('federal_dbe.png'), 'title' => 'DBE', 'meta' => 'Texas, Oklahoma, Illinois and Louisiana'],
                    ['image' => $img('combined_sba.png'), 'title' => 'SBA WOSB / EDWOSB'],
                ]],
            ],
            'related' => $related('certifications'),
        ],
    ],

    'leadership-team' => [
        'title' => 'Leadership & Team', 'parent' => 'about-us', 'template' => 'info', 'order' => 54,
        'content' => [
            'seo' => [
                'title' => 'Leadership & Team | Aundrea Young, President & CEO | Competitive Choice',
                'description' => 'Meet President & CEO Aundrea Young and the leadership and solutions team driving Competitive Choice forward.',
                'og_title' => 'Leadership & Team | Competitive Choice',
                'og_description' => 'Decades of expertise, operational discipline and a focus on the right customers.',
                'schema_about' => 'Leadership and team of Competitive Choice', 'page_type' => 'AboutPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Leadership & Team', 'lead' => 'Decades of expertise, deep operational discipline and a focus on the right customers.', 'image' => $img('cci_team_new_background_20253.jpg')],
            'breadcrumb' => $crumb('Leadership & Team'),
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'Our products are as diverse as our people. In critical infrastructure supply, experience and discipline matter, and so does working with the right customers. Meet the President & CEO and the team that drives Competitive Choice forward.',
                ]],
                ['layout' => 'split', 'id' => 'ceo', 'person' => true, 'kicker' => 'PRESIDENT / CEO', 'title' => 'Aundrea Young', 'paragraphs' => [
                    'Under Aundrea Young’s leadership, Competitive Choice has grown into a market leader in facility maintenance, construction supply and infrastructure resilience, serving sectors such as water, energy, healthcare and education.',
                    'Her vision puts innovation, customer success and inclusive growth first, so the company can meet today’s challenges and help shape the infrastructure of tomorrow.',
                    'Aundrea holds a dual degree in Communication and Construction Management and an Executive MBA from the University of Houston C.T. Bauer College of Business. She is also a proud alumna of the Harvard Business School OPM program, which further deepened her leadership and strategic insight.',
                ], 'image' => $img('team-aundrea.png'), 'image_alt' => 'Aundrea Young, President and CEO'],
                ['layout' => 'centered', 'id' => 'leaders', 'tint' => true, 'kicker' => 'OUR LEADERSHIP TEAM', 'title' => 'The leaders driving our business forward', 'paragraphs' => []],
                ['layout' => 'split', 'id' => 'casey', 'person' => true, 'tint' => true, 'kicker' => 'VICE PRESIDENT OF SALES', 'title' => 'Casey Williams', 'paragraphs' => [
                    'As Vice President of Sales, Casey’s impact on the company’s growth is undeniable. Tasked with spearheading strategic growth initiatives and business advancement for our national accounts, he is a consistent driving force behind our achievements.',
                    'His leadership style is defined by an unwavering commitment to excellence and a results-driven focus. By fostering a collaborative, high-performance sales team, he ensures the organization consistently meets and exceeds its revenue targets, and his ability to motivate and inspire has built a cohesive, dynamic sales force dedicated to collective success.',
                    'His education at Trevecca University gave him a strong foundation in business principles and management practices. An ambitious individual with a thirst for knowledge, he has honed his skills through years of hands-on sales experience, combining theory with practical expertise.',
                ], 'image' => $img('team-casey.png'), 'image_alt' => 'Casey Williams, Vice President of Sales'],
                ['layout' => 'split', 'id' => 'jillian', 'person' => true, 'tint' => true, 'reverse' => true, 'kicker' => 'DIRECTOR OF OPERATIONS', 'title' => 'Jillian Williams', 'paragraphs' => [
                    'As Director of Operations, Jillian is a driving force behind the success of our organization, bringing a unique blend of operations, marketing and customer service expertise, along with extensive sales knowledge. Her role goes beyond understanding client needs: she proactively develops and sources new products that align perfectly with them.',
                    'A dynamic leader with unparalleled dedication and acumen, Jillian holds a degree in Marketing and is always seeking opportunities to grow and learn, committed to exploring the paths that lead to personal and professional success.',
                ], 'image' => $img('team-jillian.png'), 'image_alt' => 'Jillian Williams, Director of Operations'],
                ['layout' => 'people', 'id' => 'solutions', 'title' => 'Our solutions team', 'description' => 'The people who keep your orders moving.', 'items' => [
                    ['title' => 'Amanda', 'meta' => 'Marketing Manager / Senior Graphic Designer', 'image' => $img('amanda.png')],
                    ['title' => 'Andre', 'meta' => 'Sales Representative', 'image' => $img('andre.png')],
                    ['title' => 'Debra', 'meta' => 'AP/AR Clerk', 'image' => $img('debra.png')],
                    ['title' => 'Ugo', 'meta' => 'Web Application Developer', 'image' => $img('ugo.png')],
                    ['title' => 'Amy', 'meta' => 'Supply Chain Manager & Government Compliance', 'image' => $img('amy.png')],
                ]],
                ['layout' => 'video', 'id' => 'film', 'tint' => true, 'video' => 'wp-content/themes/competitive-choice/assets/video/cci-cartoon.mp4', 'video_label' => 'The Competitive Choice story, animated'],
                ['layout' => 'article', 'id' => 'story', 'kicker' => 'OUR STORY', 'title' => 'From specialty chemicals to your one-stop shop', 'paragraphs' => [
                    'In 2003, our small business embarked on a journey with a singular focus: selling specialty chemicals that catered to specific industry needs. With a clear vision and a passion for providing high-quality solutions, we began building relationships with customers who valued our expertise and trusted our products. Little did we know that this would be the foundation on which we would expand our offerings and broaden our horizons.',
                    'As our reputation grew, so did the demands of our customers. They sought our advice and support not only for specialty chemicals but for a broader range of construction and facility maintenance supplies and equipment. Recognizing the opportunity to serve them more comprehensively, we decided to diversify our product portfolio and expand our business horizons.',
                    'Over the years, we diligently studied the market, identified emerging trends and forged strategic partnerships to source a wide array of construction and facility maintenance supplies and equipment. From tools and safety gear to HVAC systems, electrical components and plumbing fixtures, we curated a selection that catered to the diverse needs of our customers.',
                    'Our transition from specialty chemical supplier to comprehensive provider was driven by a deep understanding of our customers’ evolving requirements. We invested in our team’s knowledge and expertise, so we would have the technical know-how to support them in their construction and maintenance endeavors.',
                    'Today, we take immense pride in being our customers’ trusted one-stop shop for construction and facility maintenance. They appreciate the convenience of a comprehensive range of high-quality products under one roof, backed by our expertise and dedication to exceptional customer service.',
                    'As we reflect on the journey from a small business selling specialty chemicals in 2003 to a comprehensive supplier, we remain grateful for the trust and support of our customers. Their loyalty has been the driving force behind our growth and success, and we look forward to serving them with excellence, expanding our offerings and staying at the forefront of the industry.',
                    'At Competitive Choice, we are committed to building lasting partnerships and providing the highest quality products to ensure the success of our customers’ construction projects and facility maintenance operations. With every order fulfilled and every problem solved, we take pride in contributing to their achievements and being a part of their journey.',
                    'As we look to the future, we are excited about the opportunities ahead. We will continue to innovate, adapt and expand our product range to meet the changing demands of the construction and facility maintenance industries. With unwavering dedication and a customer-centric approach, we are confident that we will not only meet but exceed our customers’ expectations, helping them build and maintain the structures and spaces that shape our world.',
                ]],
            ],
            'related' => $related('leadership-team'),
        ],
    ],

    'co-ops-schedules' => [
        'title' => 'Co-Ops & Schedules', 'parent' => 'about-us', 'template' => 'info', 'order' => 55,
        'content' => [
            'seo' => [
                'title' => 'Cooperative Contracts & Schedules | TIPS, BuyBoard, GSA | Competitive Choice',
                'description' => 'Competitive Choice holds TIPS, BuyBoard, Good Buy, PCA, Allied States, Choice Partners and Region 5, 6 and 7 cooperative contracts, plus GSA and AbilityOne.',
                'og_title' => 'Co-Ops & Schedules | Competitive Choice',
                'og_description' => 'Pre-negotiated cooperative contracts and federal schedules for public-sector buyers.',
                'schema_about' => 'Cooperative purchasing contracts and federal schedules', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Co-Ops & Schedules', 'lead' => 'Multiple cooperative contracts give public-sector customers access to high-quality products and services with cost savings and efficiency.'],
            'breadcrumb' => $crumb('Co-Ops & Schedules'),
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'Competitive Choice has been awarded multiple cooperative contracts, so our customers can reach a wide range of high-quality products and services through pre-negotiated, competitively priced agreements.',
                ]],
                ['layout' => 'coops', 'id' => 'cooperative', 'title' => 'Cooperative contracts', 'description' => 'Open a card to see the contract numbers awarded to Competitive Choice.', 'items' => [
                    ['image' => $img('tips.png'), 'title' => 'TIPS', 'description' => 'Texas Interlocal Purchasing System. Serves public entities in Texas with competitive pricing and efficient procurement.', 'lines' => [
                        '230903 - Industrial and Facility Equipment, Chemicals, Supplies, and Services',
                        '23100201 - Energy and Water Efficiency Goods and Services Non-JOC',
                        '240102 - Emergency Responder Supplies, Equipment and Services',
                        '240402 - Office and School Supplies Products and Services',
                        '250101 - Safety Equipment, Supplies and Services',
                        '25020101 - Renewable Energy and Solar Solutions and Services',
                        '260103 - Janitorial and Sanitation Supplies and Services',
                        '260502 - Electrical and Plumbing Supplies and Equipment',
                        '260504 - MRO Supplies, Equipment, Tool Rental, Sales and Services',
                    ]],
                    ['image' => $img('buyboard.png'), 'title' => 'BuyBoard', 'description' => 'Access to a diverse range of products and services, with cost savings and efficiency.', 'lines' => [
                        '715-23 - Automotive Parts, Fluids, Equipment and Maintenance Services',
                        '747-24 - Custodial Supplies and Equipment',
                        '790-26 - Energy-Saving Lighting Products',
                    ]],
                    ['image' => $img('goood.png'), 'title' => 'Good Buy', 'description' => 'Reliable products and services that meet the specific needs of public entities in Texas.', 'lines' => [
                        '25-26 6D000 - Office: Supplies/Equipment',
                        '26 7N000 - Facility Services: Building / Equipment Maintenance / Repair',
                        '26-27 2B000 - Custodial / Janitorial: Cleaning Supplies / Equipment',
                        '26-27 6M000 - Lighting: Electrical/Supplies/Installation',
                        '26-27 7A000 - MRO: Maintenance / Repair / Operating Supplies / Equipment',
                        '26-27 7D000 - HVAC: Supplies / Equipment',
                        '26-27 7M000 - Electrical: Hardware / Supplies / Control Systems / Equipment',
                    ]],
                    ['image' => $img('pca.png'), 'title' => 'PCA', 'description' => 'Purchasing Cooperative of America. Extends our solutions to a broader network of public entities and non-profit organizations.', 'lines' => [
                        'OD-396-23 - Janitorial and Custodial Products, Services, and Related Items',
                        'OD-400-23 - Office Supplies and Related Items',
                        'OD-414-24 - Custodial Supplies, Equipment, and Related Items',
                    ]],
                    ['image' => $img('allied.png'), 'title' => 'Allied States', 'description' => 'Serves public entities in various states across the nation, so customers outside Texas can benefit from our procurement solutions.', 'lines' => [
                        '23-7457 - MRO Equipment, Supplies, Materials, and Services',
                        '25-7522 - Medical Supplies, Equipment, and Related Services (Supplemental)',
                    ]],
                    ['image' => $img('choicepartners.png'), 'title' => 'Choice Partners', 'description' => 'Easy access to pre-negotiated contracts and the highest quality products and services.', 'lines' => [
                        '24/023TC-06 - MRO Parts, Equipment and Related Services',
                    ]],
                    ['image' => $img('region5.png'), 'title' => 'Region 5', 'description' => 'Serves public entities within Region 5, ensuring efficient and effective procurement.', 'lines' => [
                        '20260103 - Maintenance & Operations Equipment Supplies, Rental Sales and/or Services',
                        '20260202 - Building Materials, Supplies, and Services',
                        '20260403 - Electrical Supplies and/or Services',
                        '20260404 - HVAC Equipment, Supplies, and/or Services',
                        '20260405 - Plumbing Supplies and/or Services',
                        '20260605 - Janitorial Equipment, Supplies, and/or Services',
                        '20260608 - Personal Protective Equipment (PPE)',
                    ]],
                    ['image' => $img('region6.png'), 'title' => 'Region 6', 'description' => 'Serves public entities within Region 6, ensuring efficient and effective procurement.', 'lines' => [
                        '15.25 - Office Supplies',
                        '26.24 - Building Materials, Hardware, Services',
                        '27.25 - Electrical Parts, Equipment, Supplies, Services',
                        '29.25 - HVAC Parts, Supplies, Services',
                        '31.25 - Plumbing Parts, Supplies, Services',
                        '39.25 - MRO of Facilities and Grounds',
                    ]],
                    ['image' => $img('region7.png'), 'title' => 'Region 7', 'description' => 'Serves public entities within Region 7, ensuring efficient and effective procurement.', 'lines' => [
                        'CUS2628 - Custodial Supplies',
                        'ELEC2626 - Electrical Supplies',
                        'MAIN2527 - Building Maintenance & Safety Supplies',
                        'PLUMB2527 - Plumbing Supplies',
                    ]],
                ]],
                ['layout' => 'coops', 'id' => 'federal', 'tint' => true, 'title' => 'Federal schedules', 'description' => 'Meeting the standards and regulatory demands of federal organizations.', 'items' => [
                    ['image' => $img('gsa.png'), 'title' => 'GSA', 'description' => 'Contract # 47QSEA20D005G. As an industry partner of the General Services Administration, we supply a full range of products to government customers, from hospitality and cleaning equipment to foodservice and chemicals, through GSA Advantage.', 'link' => 'https://www.gsaadvantage.gov/advantage/ws/search/advantage_search?q=0:247QSEA20D005G%20&q=10:5ABILITY%20ONE&searchType=1&db=0', 'link_label' => 'SHOP GSA'],
                    ['image' => $img('abilityone.png'), 'title' => 'AbilityOne', 'description' => 'One of the nation’s leading employers of people who are blind or have significant disabilities. Together with GSA and AbilityOne, we offer AbilityOne products and our MAS schedules for industrial and facility products and office supplies.', 'link' => 'https://www.abilityone.gov/', 'link_label' => 'LEARN MORE'],
                ]],
                ['layout' => 'centered', 'id' => 'closing', 'kicker' => 'WORKING WITH US', 'title' => 'A simpler way to buy', 'paragraphs' => ['These contracts reflect our commitment to the best possible procurement experience: cost-effective solutions, diverse supplier options and streamlined processes. Contact us to learn how they can work for your organization.']],
            ],
            'related' => $related('co-ops-schedules'),
        ],
    ],

    'past-performances' => [
        'title' => 'Past Performances', 'parent' => 'about-us', 'template' => 'info', 'order' => 56,
        'content' => [
            'seo' => [
                'title' => 'Past Performances | Federal & Construction Projects | Competitive Choice',
                'description' => 'Federal performance for NASA, the Army Corps of Engineers and a federal detention center, plus Tier II supply on major Texas construction projects.',
                'og_title' => 'Past Performances | Competitive Choice',
                'og_description' => 'Federal and construction projects supplied by Competitive Choice.',
                'schema_about' => 'Past performance and project experience', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['kicker' => 'ABOUT US', 'title' => 'Past Performances', 'lead' => 'Federal contracts and major construction projects supplied by our team.'],
            'breadcrumb' => $crumb('Past Performances'),
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'Our work spans federal agencies and some of the largest construction projects in Texas, from NASA’s Johnson Space Center to airport terminals, hospital towers and university campuses.',
                ]],
                ['layout' => 'cards', 'id' => 'federal', 'tint' => true, 'wide' => true, 'title' => 'Past federal performance', 'description' => 'Contracts delivered for federal agencies.', 'items' => [
                    ['title' => 'NASA Johnson Space Center, Houston, Texas', 'description' => 'Multiple Award IDIQ for General Construction, Minor Projects at NASA Johnson Space Center, Ellington Field and Sonny Carter Training Facility, Houston, TX and White Sands Test Facility, Las Cruces, NM.', 'lines' => ['Contract amount: $49,000,000', 'Contract No. NNJ09JA19P: $82,578']],
                    ['title' => 'Federal Detention Center, Houston, Texas', 'description' => 'HVAC upgrade.', 'lines' => ['Contract amount: $83,000']],
                    ['title' => 'Army Corps of Engineers, Galveston, Texas', 'description' => 'Renovation and reconstruction of office.', 'lines' => ['Contract amount: $23,000']],
                ]],
                ['layout' => 'rows', 'id' => 'tier-two', 'title' => 'Pre-construction and service contract projects', 'description' => 'Competitive Choice has participated as a Tier II supplier on the following projects.', 'items' => [
                    ['title' => 'Houston Independent School District', 'description' => 'Service project', 'lines' => ['HVAC and plumbing supplies and equipment']],
                    ['title' => 'City of Houston', 'description' => 'Service project', 'lines' => ['Plumbing supplies and equipment']],
                    ['title' => 'Hobby Airport', 'description' => 'New construction project', 'lines' => ['HVAC supplies and materials', 'Plumbing supplies and materials']],
                    ['title' => 'United Airlines Terminal C', 'description' => 'New construction project', 'lines' => ['Glass materials', 'Fire protection equipment', 'Electrical, plumbing and HVAC supplies and equipment']],
                    ['title' => 'Aloft Element Hotel (Clark Contractors)', 'description' => 'New construction project', 'lines' => ['Plumbing supplies and materials']],
                    ['title' => 'Toyota Project, Plano, Texas (Brandt / Dynamic Systems)', 'description' => 'New construction project', 'lines' => ['Plumbing supplies and materials', 'HVAC supplies and equipment']],
                ]],
                ['layout' => 'rows', 'id' => 'trades', 'title' => 'Project experience by trade', 'items' => [
                    ['title' => 'Electrical', 'lines' => ['AT&T, Dallas', 'AT&T Beaumont Victor, Beaumont', 'Hobby Fueling Facility, Houston', 'Houston Methodist Cypress, Houston', 'Lee College, Baytown', 'MD Anderson Cabling, Houston', 'SBP Fair Housing OST, Houston', 'UH College Med BP2, Houston', 'UH Sugarland, Sugarland']],
                    ['title' => 'Generator', 'lines' => ['TDCJ Dominguez, San Antonio', 'TDCJ Holiday, Huntsville', 'TDCJ Luther Unit, Navasota', 'TDCJ Mechler, Tulia', 'UH School of Law, Houston']],
                    ['title' => 'HVAC', 'lines' => ['AT&T Toll Cooling Tower, Dallas', 'Hobby Airport Central, Houston']],
                    ['title' => 'Insulation', 'lines' => ['Killeen/Ft. Hood Airport, Killeen']],
                    ['title' => 'Painting supplies', 'lines' => ['TSU Library Learning Center, Houston']],
                    ['title' => 'Plumbing', 'lines' => ['American Airlines Hospitality, Fort Worth', 'Baylor Scott & White Irving Patient Bed Tower, Dallas', 'City of Houston', 'City of Houston Westbury Library, Houston', 'DFW Airport, Dallas', 'FIS Renovation & Expansion, Houston', 'Loews Ocho Hotel, Dallas', 'Mickey Leland Airport, Houston', 'Northstar Fire Protection, Austin', 'TCCD SE Campus Bldg 1, Houston', 'Texas Live Entertainment Venue, Arlington', 'Texas Sprinkler, Grapevine', 'U of H Parking Garage 6, Houston', 'United Airlines, Houston', 'UTOC, Houston', 'Wells Fargo, Irving', 'Prairie View A&M University, College Station']],
                    ['title' => 'Sodium hypochlorite', 'lines' => ['Prairie View A&M University, College Station']],
                ]],
            ],
            'related' => $related('past-performances'),
        ],
    ],
];
