<?php
/**
 * Pages behind the header menu items "Fire Suppression" and "Who We Serve" (Info Page template).
 * Copy and imagery follow the company's existing pages for each.
 */

if (!defined('ABSPATH')) exit;

$fire = fn($file) => 'wp-content/themes/competitive-choice/assets/images/fire/' . $file;
$who = fn($file) => 'wp-content/themes/competitive-choice/assets/images/who/' . $file;
$shop_fclx = 'https://shopcompetitivechoice.net/fclx-2-5-gal-extinguisher';

return [
    'fire-suppression' => [
        'title' => 'Fire Suppression', 'parent' => '', 'template' => 'info', 'order' => 20,
        'content' => [
            'seo' => [
                'title' => 'Lithium-Ion Battery Fire Suppression | FCL-X | Competitive Choice',
                'description' => 'FCL-X lithium-ion fire suppression: extinguishers, bulk and recharge, and municipal and industrial agent. PFAS-free and water-based, for fires water alone cannot stop.',
                'og_title' => 'Lithium-Ion Fire Suppression | Competitive Choice',
                'og_description' => 'FCL-X penetrates the battery, cools and neutralizes, and helps prevent re-ignition.',
                'schema_about' => 'Lithium-ion battery fire suppression products', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['zoom' => 'fit', 'image' => $fire('firehero_image.jpg'), 'title' => 'FIRE SUPPRESSION', 'tagline' => 'Innovative, water-based lithium-ion battery fire extinguishing agent engineered to cool, neutralize and help prevent re-ignitions.', 'tagline_speed' => 40, 'lead' => 'FCL-X is the PFAS-free, water-based lithium-ion fire suppressant, available as extinguishers, refills and concentrate.', 'shop_url' => $shop_fclx, 'shop_label' => 'SHOP NOW'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Fire Suppression'],
            'blocks' => [
                ['layout' => 'intro', 'id' => 'intro', 'paragraphs' => [
                    'A lithium-ion fire does not play by the rules of an ordinary fire. It heats itself from the inside, spreads from cell to cell and can flare up again long after the flames are gone.',
                    'Competitive Choice brings FCL-X, a PFAS-free, water-based suppressant built for exactly that problem, to the facilities, fleets and first responders who cannot afford to guess.',
                ]],
                ['layout' => 'cards', 'id' => 'why', 'tint' => true, 'icons' => true, 'size' => 'lg', 'caps' => true, 'title' => 'Why Lithium Fires Are Different', 'description' => 'Lithium-ion battery fires behave differently from ordinary combustible fires. Heat can propagate from cell to cell, releasing hazardous gases and creating an ongoing risk of re-ignition.', 'items' => [
                    ['title' => 'Thermal Runaway', 'image' => $fire('thermal_icon.png'), 'description' => 'Cell failure can trigger rapidly escalating heat, even without oxygen.'],
                    ['title' => 'Toxic Off-Gases', 'image' => $fire('toxic_icon.png'), 'description' => 'Damaged cells can release hazardous vapors and particulates.'],
                    ['title' => 'Re-Ignition Risk', 'image' => $fire('risk_icon.png'), 'description' => 'Residual heat can cause repeated flare-ups hours or days later.'],
                ]],
                ['layout' => 'steps', 'id' => 'how', 'title' => 'How FCL-X Works?', 'items' => [
                    ['title' => 'Penetrates Battery', 'image' => $fire('penetrates_icon.png'), 'description' => 'Reaches into the cell structure instead of remaining only on the surface.'],
                    ['title' => 'Cools + Neutralizes', 'image' => $fire('cools_icon.png'), 'description' => 'Absorbs heat while helping reduce hazardous off-gases.'],
                    ['title' => 'Prevents Re-Ignition', 'image' => $fire('prevention_icon.png'), 'description' => 'Continues cooling the battery after visible flames are extinguished.'],
                ]],
                ['layout' => 'split', 'id' => 'built', 'tint' => true, 'title' => 'Built for the Fire That Water Alone Can’t Stop.', 'paragraphs' => [
                    'Performance focused on the conditions that make lithium-ion incidents difficult to control.',
                ], 'lines' => ['Deep Cell Penetration', 'Rapidly Cool and Lowers Temperature', 'Reduced Re-ignition and Flashovers Risk'], 'image' => $fire('fclx_demo_poster.png'), 'gif' => $fire('fclx_demo.gif'), 'image_alt' => 'FCL-X demonstration'],
                ['layout' => 'cards', 'id' => 'industries', 'icons' => true, 'size' => 'md', 'caps' => true, 'title' => 'Lithium Battery Fire Suppression by Industry', 'items' => [
                    ['title' => 'Manufacturing & Warehousing', 'image' => $fire('manufacture_icon.png')],
                    ['title' => 'Energy Storage System', 'image' => $fire('energy_icon.png')],
                    ['title' => 'EVs & Charging Infrastructure', 'image' => $fire('ev_icon.png')],
                    ['title' => 'Data Centers & Telecom', 'image' => $fire('datacenter_icon.png')],
                    ['title' => 'Micro-mobility & Consumer Electronics', 'image' => $fire('mobility_icon.png')],
                    ['title' => 'Healthcare & Industrial Equipment', 'image' => $fire('healthcare_icon.png')],
                ]],
                ['layout' => 'cards', 'id' => 'products', 'tint' => true, 'size' => 'product', 'caps' => true, 'title' => 'FCL-X Fire Suppressant Solutions', 'description' => 'Products', 'items' => [
                    ['title' => 'FCL-X Extinguishers', 'image' => $fire('fireextinguisher_image.png'), 'description' => 'Ready-to-use lithium-ion fire extinguisher designed for first responders, facilities, and high-risk environments such as EV bays and battery storage areas.', 'url' => $shop_fclx, 'button_label' => 'SHOP NOW'],
                    ['title' => 'Bulk + Recharge', 'image' => $fire('bulkrecharge_image.png'), 'description' => 'FCL-X refill solution for the FCL-X 2.5 Gallon Extinguisher. PFAS-free, water-based agent designed for lithium-ion fire suppression.', 'url' => $shop_fclx, 'button_label' => 'SHOP NOW'],
                    ['title' => 'Municipal + Industrial', 'image' => $fire('fireextinguisher_image.png'), 'description' => 'A concentrated lithium-ion fire suppression agent engineered exclusively for fire departments and large-scale industrial emergencies.', 'url' => $shop_fclx, 'button_label' => 'SHOP NOW'],
                ]],
                ['layout' => 'faq', 'id' => 'faq', 'title' => 'Fire Suppression FAQs', 'description' => 'Straight answers to the questions facilities, fleets and fire departments ask about lithium-ion fires and FCL-X.', 'items' => [
                    ['question' => 'Why can’t a standard fire extinguisher stop a lithium-ion battery fire?', 'answer' => 'A lithium-ion fire does not depend on outside oxygen the way an ordinary fire does. When a cell fails, it can heat itself from the inside in a chain reaction called thermal runaway, passing heat to neighboring cells. Surface-only agents can knock down visible flames while the cells underneath stay hot, which is why these fires can flare up again. FCL-X is designed to reach into the cell structure and keep cooling, not just coat the surface.'],
                    ['question' => 'What is FCL-X and how does it work?', 'answer' => 'FCL-X is an innovative, water-based lithium-ion battery fire extinguishing agent engineered to cool, neutralize and help prevent re-ignition. It works in three steps: it penetrates the battery, it cools the cells and helps neutralize hazardous off-gases, and it keeps cooling after visible flames are out so the risk of re-ignition is reduced.'],
                    ['question' => 'What does PFAS-free mean, and why does it matter?', 'answer' => 'PFAS are persistent chemicals used in some traditional firefighting foams, and many organizations are now moving away from them because of environmental, health and regulatory concerns. FCL-X is PFAS-free and water-based, which helps facilities, fire departments and municipalities protect people and property without adding a PFAS burden to their programs.'],
                    ['question' => 'Which FCL-X product is right for my situation?', 'answer' => 'It depends on who is using it and where. The FCL-X 2.5 Gallon Extinguisher is a ready-to-use unit for facilities, first responders and high-risk areas such as EV bays and battery storage rooms. Bulk + Recharge is the refill agent for that extinguisher. Municipal + Industrial is a concentrated agent engineered exclusively for fire departments and large-scale industrial emergencies. If you are not sure, tell us about your site and we will point you to the right one.'],
                    ['question' => 'Where should lithium-ion fire suppression be placed?', 'answer' => 'Wherever lithium-ion batteries are stored, charged or used in volume. Common locations include manufacturing and warehouse floors, energy storage systems, EV and fleet charging areas, data centers and telecom rooms, micro-mobility and consumer electronics storage, and healthcare and industrial equipment areas. We can help you think through placement for your layout, and your local fire authority and insurer should be part of the decision.'],
                    ['question' => 'Can I use FCL-X in place of my existing fire protection program?', 'answer' => 'FCL-X is intended to add a layer of protection specifically for lithium-ion battery fires, not to replace your fire code, sprinkler or alarm requirements. Requirements vary by jurisdiction and facility, so confirm how it fits with your authority having jurisdiction, insurer and fire protection engineer. We are glad to supply product information to support that conversation.'],
                    ['question' => 'Can I refill or recharge the extinguisher myself?', 'answer' => 'Bulk + Recharge is the FCL-X refill solution built for the FCL-X 2.5 Gallon Extinguisher, so you can restore a unit to service after use without replacing it. Follow the product instructions and your organization’s safety procedures, and contact our team if you want guidance on refill quantities for a fleet of units.'],
                    ['question' => 'Do you supply fire departments and municipalities?', 'answer' => 'Yes. The Municipal + Industrial concentrate is engineered exclusively for fire departments and large-scale industrial emergencies. Competitive Choice also holds cooperative and federal contract vehicles, including GSA MAS, TIPS and BuyBoard, so public-sector buyers can ask which vehicle applies to their purchase.'],
                    ['question' => 'How do I order, and how fast can it ship?', 'answer' => 'Use the SHOP NOW button on any product above to order online, or contact our team for quantity pricing, public-sector purchasing or a site consultation. Availability and delivery timing depend on the product and your location, so we confirm them with your order or quote.'],
                ]],
            ],
            'related' => ['title' => 'More from Competitive Choice', 'links' => [['label' => 'Fire & Safety Supplies', 'link' => '/products-and-materials/fire-safety/'], ['label' => 'Who We Serve', 'link' => 'link:industries'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],

    'who-we-serve' => [
        'title' => 'Who We Serve', 'parent' => '', 'template' => 'info', 'order' => 40,
        'content' => [
            'seo' => [
                'title' => 'Industries We Serve | Healthcare, Government, Energy & More | Competitive Choice',
                'description' => 'Competitive Choice serves healthcare, water and wastewater, energy, education, government, state and municipal, commercial, correctional and hospitality customers nationwide.',
                'og_title' => 'Who We Serve | Competitive Choice',
                'og_description' => 'Houston-based. National reach. Industries where infrastructure cannot fail.',
                'schema_about' => 'Industries served by Competitive Choice', 'page_type' => 'CollectionPage',
            ],
            'banner' => ['video' => 'wp-content/themes/competitive-choice/assets/video/whoweserve.mp4', 'title' => 'OUR REACH & IMPACT', 'lead' => 'From Houston to all 50 states, we keep the facilities communities depend on supplied, serviced and running.', 'quote_label' => 'REQUEST A PROJECT QUOTE', 'call_label' => 'CALL'],
            'breadcrumb' => ['home' => 'Home', 'current' => 'Who We Serve'],
            'blocks' => [
                ['layout' => 'cards', 'id' => 'industries', 'icons' => true, 'size' => 'md', 'caps' => true, 'title' => 'Industries We Serve', 'description' => 'CCI serves industries where infrastructure cannot fail and operational discipline is non-negotiable. We ship nationally, and our certifications fit federal, state, municipal, and commercial procurement workflows.', 'items' => [
                    ['id' => 'healthcare', 'title' => 'Healthcare', 'image' => $who('healthcare_icon.jpg'), 'description' => 'Hospitals, clinics, urgent care, long-term care, medical office buildings.'],
                    ['id' => 'water-wastewater', 'title' => 'Water & Wastewater', 'image' => $who('water_icon.jpg'), 'description' => 'Municipal water authorities, treatment plants, pumping stations and more.'],
                    ['id' => 'energy-utilities', 'title' => 'Energy & Utilities', 'image' => $who('energy_icon.jpg'), 'description' => 'Power generation, distribution, BESS. FCL-X fire suppression for energy storage.'],
                    ['id' => 'education', 'title' => 'Education', 'image' => $who('education_icon.jpg'), 'description' => 'K-12 ISDs, Universities, college campuses.'],
                    ['id' => 'government', 'title' => 'Government', 'image' => $who('government_icon.jpg'), 'description' => 'GSA Scheduled, capital, city halls, courthouse, agencies, military, and more.'],
                    ['id' => 'state-municipal', 'title' => 'State & Municipal', 'image' => $who('statemunicipal_icon.jpg'), 'description' => 'State agencies, city governments, county facilities.'],
                    ['id' => 'commercial', 'title' => 'Commercial', 'image' => $who('commercial_icon.jpg'), 'description' => 'Data centers, office, retail, industrial, and more.'],
                    ['id' => 'correctional-facilities', 'title' => 'Correctional Facilities', 'image' => $who('correctionalinstitution_icon.jpg'), 'description' => 'Jails, prisons, transitional centers, detention centers, corrections facilities.'],
                    ['id' => 'hospitality', 'title' => 'Hospitality', 'image' => $who('hospitality_icon.jpg'), 'description' => 'Hotels, motels, and multi-family.'],
                ]],
                ['layout' => 'stat', 'id' => 'footprint', 'tint' => true, 'kicker' => 'NATIONAL FOOTPRINT', 'title' => 'Houston-Based. National Reach.', 'paragraphs' => [
                    'We ship nationally. Our Houston operations base gives us logistical reach into the Gulf Coast, Texas, and the Southwest – and through our vendor channels (Ferguson, Graybar, and direct manufacturer relationships), we deliver across all 50 states.',
                ], 'number' => '50', 'number_label' => 'STATE FOOTPRINT'],
                ['layout' => 'trust', 'id' => 'why-industries', 'title' => 'Why Various Industries Source Through Competitive Choice', 'paragraphs' => [
                    'Hospitals, school districts, utilities and city governments run very different operations, yet they ask the same thing of a supplier: do what you said you would do. Competitive Choice began in Houston in 2003, selling specialty chemicals to a few customers who trusted us to get it right, and that standard has followed us into every industry we serve since.',
                    'Our credentials make procurement easier, not harder. As a certified woman-owned business with national, state, local and federal recognition, and with GSA MAS, TIPS, BuyBoard, Good Buy, Choice Partners and AbilityOne vehicles in place, we help your purchase meet competitive bidding and supplier diversity requirements without starting from scratch.',
                    'And when an order matters, you will talk to people who know your account. A Houston warehouse, vendor channels reaching all 50 states and a team that treats your deadline as its own keep supply moving, whatever your sector.',
                ], 'stats' => [['2003', 'Serving buyers since'], ['50', 'States reached nationwide'], ['WOSB', 'Certified woman-owned business'], ['4', 'Levels of certification: national, state, local and federal']],
                    'image' => 'wp-content/themes/competitive-choice/assets/images/who-team.jpg', 'image_alt' => 'The Competitive Choice team outside the Houston office',
                    'points' => ['GSA MAS, TIPS, BuyBoard, Good Buy and Choice Partners contract vehicles', 'SBA WOSB / EDWOSB, DBE, MBE, SBE and WBE certified', 'Centrally located Houston warehouse', 'Hands-on team that knows your account']],
                ['layout' => 'faq', 'id' => 'faq', 'tint' => true, 'title' => 'Who We Serve FAQs', 'description' => 'Answers to the questions buyers in each industry ask us most.', 'items' => [
                    ['question' => 'Which industries does Competitive Choice serve?', 'answer' => 'We serve healthcare, water and wastewater, energy and utilities, education, government, state and municipal agencies, commercial properties, correctional facilities and hospitality. What these customers share is infrastructure that cannot fail and procurement rules that must be followed, and our supplies, services and contract vehicles are built around both.'],
                    ['question' => 'Do you only serve customers near Houston?', 'answer' => 'No. We are based in Houston, Texas, and our warehouse gives us strong reach into the Gulf Coast, Texas and the Southwest, but we ship nationally. Through our vendor channels, including Ferguson, Graybar and direct manufacturer relationships, we deliver to customers in all 50 states.'],
                    ['question' => 'Can we buy through a cooperative or government contract?', 'answer' => 'Yes. We hold contract vehicles including GSA MAS, TIPS, BuyBoard, Good Buy, Choice Partners, Allied States Cooperative and AbilityOne. Which one applies depends on your organization and the product, so include your preferred contract with your request and we will confirm what can be purchased under it.'],
                    ['question' => 'Does working with you help us meet supplier diversity goals?', 'answer' => 'It can. Competitive Choice is a certified woman-owned business, holding SBA WOSB / EDWOSB status, DBE certification in Texas, Oklahoma, Illinois and Louisiana, and MBE, SBE and WBE recognition from local agencies such as the City of Houston and the City of Austin. Our certifications page lists each one.'],
                    ['question' => 'What can we buy from Competitive Choice?', 'answer' => 'Three things, from one team. Supplies include chemicals, janitorial and sanitation products, electrical, plumbing, HVAC, power distribution, safety and MRO items. Services include drain maintenance, odor control, air scenting, dispensing systems, logistics and procurement support and a facility call center. We also supply FCL-X lithium-ion fire suppression.'],
                    ['question' => 'How quickly can you respond when something is urgent?', 'answer' => 'Our centrally located Houston warehouse and hands-on team are set up to respond to urgent maintenance and project needs. Availability and delivery timing depend on the item and your location, so we confirm them in writing with your quote rather than promise a number up front.'],
                    ['question' => 'We are a federal or military buyer. How do you support us?', 'answer' => 'Our GSA MAS contract (47QSEA20D005G) and AbilityOne participation let federal buyers source supplies through established channels. Tell us about any TAA, small business or set-aside requirements on your acquisition and we will confirm which items and vehicles fit.'],
                    ['question' => 'I do not see my industry listed. Can you still help?', 'answer' => 'Very likely. Many of our customers sit between categories, such as a hospital that is also a campus or a plant that is also a public utility. Describe your facility and what you need, and our team will tell you honestly whether and how we can support it.'],
                    ['question' => 'How do I request a quote?', 'answer' => 'Use the Contact page or call our team. Send the products or services you need, quantities, delivery location and any contract vehicle you buy through. You will receive a clear quotation with availability and delivery timing confirmed before you commit.'],
                ]],
            ],
            'related' => ['title' => 'More from Competitive Choice', 'links' => [['label' => 'Supplies', 'link' => 'link:products'], ['label' => 'Services', 'link' => 'link:services'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],
];
