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
            'banner' => ['zoom' => 'fit', 'image' => $fire('firehero_image.jpg'), 'title' => 'FIRE SUPPRESSION', 'tagline' => 'Innovative, water-based lithium-ion battery fire extinguishing agent engineered to cool, neutralize and help prevent re-ignitions.', 'tagline_speed' => 40],
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
            'banner' => ['video' => 'wp-content/themes/competitive-choice/assets/video/whoweserve.mp4', 'title' => 'WHO WE SERVE'],
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
            ],
            'related' => ['title' => 'More from Competitive Choice', 'links' => [['label' => 'Supplies', 'link' => 'link:products'], ['label' => 'Services', 'link' => 'link:services'], ['label' => 'Contact Our Team', 'link' => 'link:contact']]],
        ],
    ],
];
