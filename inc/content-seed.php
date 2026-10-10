<?php
/**
 * Initial rows for the cc_content table, inserted once by cc_content_install().
 *
 * This is NOT read at runtime: the site renders only what is in the database. Changing a value
 * here has no effect on a site that is already installed — edit the database row instead.
 * Arrays are stored as JSON rows; strings as text rows.
 *
 * Link references used in "link" fields:
 *   link:<name>     the links.<name> row          product:<name>  a product category page
 *   service:<name>  a service category tab        /path/          a page on this site
 *   https://...     any absolute URL
 */

if (!defined('ABSPATH')) exit;

return [
    // Company details
    'company.name'          => 'Competitive Choice',
    'company.legal_name'    => 'Competitive Choice, Inc.',
    'company.tagline'       => 'The company that performs. Since 2003.',
    'company.phone'         => '713-838-1144',
    'company.phone_href'    => 'tel:+17138381144',
    'company.email'         => 'sales@competitivechoice.net',
    'company.address_line1' => '9030 Kirby Dr.',
    'company.address_line2' => 'Houston, TX 77054',
    'company.hours_days'    => 'Monday–Friday',
    'company.hours_time'    => '8am–5pm',
    'company.website'       => 'https://competitivechoice.net/',

    // Destinations on the company's existing site
    'links.contact'        => 'https://competitivechoice.net/contact-us',
    'links.shop'           => 'https://shopcompetitivechoice.net/',
    'links.products'       => 'https://competitivechoice.net/cci-services-materials-supplies',
    'links.services'       => 'https://competitivechoice.net/cci-services-services',
    'links.industries'     => 'https://competitivechoice.net/who-we-serve',
    'links.work'           => 'https://competitivechoice.net/cci-past-performances',
    'links.about'          => 'https://competitivechoice.net/mission-vision',
    'links.contracts'      => 'https://competitivechoice.net/cci-co-ops-and-schedules',
    'links.certifications' => 'https://competitivechoice.net/cci-certifications',
    'links.privacy'        => 'https://competitivechoice.net/privacy-policy',

    // Images: a bare file name is served from the theme's assets/images folder;
    // a path such as wp-content/uploads/2026/10/logo.webp or a full URL is used as given.
    'assets.logo'    => 'cci-logo.webp',
    'assets.favicon' => 'favicon.png',

    // Catalog. "tab" is the tab anchor on links.products / links.services; "path" makes it a page on this site.
    'products' => [
        ['name' => 'Power Distribution & Transformers', 'image' => 'product-power.jpg', 'description' => 'Essential equipment for electrical distribution and infrastructure.', 'hero_line' => 'Transformers and distribution gear sourced to spec so your power stays online.', 'tab' => 'powerdistributionandtransformers', 'path' => '/products/power-distribution-transformers/'],
        ['name' => 'Water & Wastewater Treatment', 'image' => 'product-water.jpg', 'description' => 'Products and solutions for critical water treatment operations.', 'hero_line' => 'Treatment equipment and consumables for plants that cannot afford a miss.', 'tab' => 'water/wastewatertreatment'],
        ['name' => 'Fire & Sprinkler', 'image' => 'product-fire.jpg', 'description' => 'Fire protection and sprinkler supplies for your facilities.', 'hero_line' => 'Sprinkler and fire-protection stock kept ready for inspection day and emergency day.', 'tab' => 'fire&safety'],
        ['name' => 'HVAC & HVAC Package Units', 'image' => 'product-hvac.jpg', 'description' => 'Heating, ventilation and cooling equipment for demanding environments.', 'hero_line' => 'Packaged units and HVAC components matched to the load, the climate and the schedule.', 'tab' => 'hvac/hvacpackageunits'],
        ['name' => 'Plumbing Supplies', 'image' => 'product-plumbing.jpg', 'description' => 'Plumbing products to keep construction and facility projects moving.', 'hero_line' => 'Fittings, valves and fixtures that keep plumbing jobs moving on site.', 'tab' => 'plumbingsupplies'],
        ['name' => 'Electrical, Lighting & Cable', 'image' => 'product-electrical.jpg', 'description' => 'Electrical supplies, lighting and cable for your next requirement.', 'hero_line' => 'Wire, cable and lighting supplies delivered with the right spec the first time.', 'tab' => 'electrical/lighting/cablewire'],
    ],
    'services' => [
        ['name' => 'Logistics & Procurement', 'tab' => 'logistics&procurementservices'],
        ['name' => 'Program & Project Management', 'tab' => 'program&schedulingservices'],
        ['name' => 'Drain Services', 'tab' => 'drainservices'],
        ['name' => 'Air Scenting Services', 'tab' => 'airscentingservices'],
        ['name' => 'Odor Control', 'tab' => 'odorcontrol'],
        ['name' => 'Work Order Request Call Center', 'tab' => 'workorderrequestcallcenter'],
    ],
    'industries' => ['Federal Government', 'State & Local Government', 'Education / SLED', 'Healthcare', 'Water & Wastewater', 'Energy & Utilities', 'Commercial & Industrial', 'Construction & MEP'],

    // Header
    'navigation' => [
        ['label' => 'PRODUCTS & SUPPLIES', 'id' => 'products-supplies', 'items' => [
            ['label' => 'Power Distribution & Transformers', 'link' => 'product:Power Distribution & Transformers'],
            ['label' => 'Water & Wastewater Treatment', 'link' => 'product:Water & Wastewater Treatment'],
            ['label' => 'Fire & Sprinkler', 'link' => 'product:Fire & Sprinkler'],
            ['label' => 'HVAC & HVAC Package Units', 'link' => 'product:HVAC & HVAC Package Units'],
            ['label' => 'Plumbing Supplies', 'link' => 'product:Plumbing Supplies'],
            ['label' => 'Electrical, Lighting & Cable', 'link' => 'product:Electrical, Lighting & Cable'],
            ['label' => 'Safety & Security', 'link' => 'link:products'],
            ['label' => 'Specialty Maintenance Chemicals', 'link' => 'link:products'],
            ['label' => 'Facility Maintenance, MRO & Tools', 'link' => 'link:products'],
            ['label' => 'Custodial, Janitorial & Sanitation', 'link' => 'link:products'],
        ]],
        ['label' => 'SERVICES', 'id' => 'services', 'items' => [
            ['label' => 'Logistics & Procurement', 'link' => 'service:Logistics & Procurement'],
            ['label' => 'Program & Project Management', 'link' => 'service:Program & Project Management'],
            ['label' => 'Drain Services', 'link' => 'service:Drain Services'],
            ['label' => 'Air Scenting Services', 'link' => 'service:Air Scenting Services'],
            ['label' => 'Odor Control', 'link' => 'service:Odor Control'],
            ['label' => 'Work Order Request Call Center', 'link' => 'service:Work Order Request Call Center'],
        ]],
        ['label' => 'INDUSTRIES', 'id' => 'industries', 'items' => [
            ['label' => 'Federal Government', 'link' => 'link:industries'],
            ['label' => 'State & Local Government', 'link' => 'link:industries'],
            ['label' => 'Education / SLED', 'link' => 'link:industries'],
            ['label' => 'Healthcare', 'link' => 'link:industries'],
            ['label' => 'Water & Wastewater', 'link' => 'link:industries'],
            ['label' => 'Energy & Utilities', 'link' => 'link:industries'],
            ['label' => 'Commercial & Industrial', 'link' => 'link:industries'],
            ['label' => 'Construction & MEP', 'link' => 'link:industries'],
        ]],
        ['label' => 'OUR WORK', 'id' => 'our-work', 'items' => [
            ['label' => 'Past Performance', 'link' => 'link:work'],
            ['label' => 'Federal Projects', 'link' => 'link:work'],
            ['label' => 'Commercial & Construction Projects', 'link' => 'link:work'],
            ['label' => 'Electrical Projects', 'link' => 'link:work'],
        ]],
        ['label' => 'ABOUT US', 'id' => 'about', 'items' => [
            ['label' => 'Our Company', 'link' => 'link:about'],
            ['label' => 'Mission, Vision & Story', 'link' => 'link:about'],
            ['label' => 'Leadership', 'link' => 'link:about'],
            ['label' => 'Our Team', 'link' => 'link:about'],
            ['label' => 'Community & Culture', 'link' => 'link:about'],
            ['label' => 'Certifications', 'link' => 'link:certifications'],
            ['label' => 'Co-Ops & Contract Vehicles', 'link' => 'link:contracts'],
            ['label' => 'Contact Us', 'link' => 'link:contact'],
        ]],
    ],
    'header.shop_label'  => 'SHOP NOW',
    'header.quote_label' => 'REQUEST A QUOTE',

    // Footer
    'footer.cta_image'           => 'team-contact-banner.jpg',
    'footer.cta_image_alt'       => 'Illustrative group photograph outside a single-story industrial office building',
    'footer.cta_title'           => 'Let’s source what<br>your operation needs.',
    'footer.cta_text'            => 'Tell us what you need. Our team will help identify the right products, services and procurement solution.',
    'footer.cta_primary_label'   => 'REQUEST A QUOTE',
    'footer.cta_secondary_label' => 'CONTACT OUR TEAM',
    'footer.columns' => [
        ['title' => 'PRODUCTS & SUPPLIES', 'links' => [
            ['label' => 'Power & Transformers', 'link' => 'product:Power Distribution & Transformers'],
            ['label' => 'Water & Wastewater', 'link' => 'link:products'],
            ['label' => 'HVAC & Plumbing', 'link' => 'link:products'],
            ['label' => 'Electrical & Lighting', 'link' => 'link:products'],
            ['label' => 'View All Products', 'link' => 'link:products'],
        ]],
        ['title' => 'SERVICES', 'links' => [
            ['label' => 'Logistics & Procurement', 'link' => 'link:services'],
            ['label' => 'Project Management', 'link' => 'link:services'],
            ['label' => 'Drain & Odor Control', 'link' => 'link:services'],
            ['label' => 'View All Services', 'link' => 'link:services'],
        ]],
        ['title' => 'INDUSTRIES', 'links' => [
            ['label' => 'Federal Government', 'link' => 'link:industries'],
            ['label' => 'State, Local & Education', 'link' => 'link:industries'],
            ['label' => 'Healthcare & Energy', 'link' => 'link:industries'],
            ['label' => 'Commercial & Industrial', 'link' => 'link:industries'],
            ['label' => 'Construction & MEP', 'link' => 'link:industries'],
        ]],
        ['title' => 'COMPANY & OUR WORK', 'links' => [
            ['label' => 'About Competitive Choice', 'link' => 'link:about'],
            ['label' => 'Past Performance', 'link' => 'link:work'],
            ['label' => 'GSA & Contract Vehicles', 'link' => 'link:contracts'],
            ['label' => 'Co-Ops & Schedules', 'link' => 'link:contracts'],
            ['label' => 'Certifications', 'link' => 'link:certifications'],
        ]],
    ],
    'footer.location_title' => 'VISIT US',
    'footer.contact_label'  => 'Contact our team',
    'footer.copyright'      => '© {year} Competitive Choice, Inc. All rights reserved.',
    'footer.privacy_label'  => 'Privacy Policy',
    'footer.bottom_text'    => 'Houston, Texas · Serving critical requirements nationwide.',
    'social' => [
        ['name' => 'Facebook', 'url' => 'https://www.facebook.com/competitivechoice', 'icon' => 'facebook'],
        ['name' => 'X', 'url' => 'https://x.com/competitivec?lang=en', 'icon' => 'x-logo'],
        ['name' => 'Instagram', 'url' => 'https://www.instagram.com/competitivechoicesupply/', 'icon' => 'instagram'],
        ['name' => 'LinkedIn', 'url' => 'https://www.linkedin.com/company/competitivechoice', 'icon' => 'linkedin'],
        ['name' => 'YouTube', 'url' => 'https://www.youtube.com/@CompetitiveChoice', 'icon' => 'youtube'],
    ],

    // SEO fallback for pages without their own SEO fields
    'seo.default.title'       => 'Competitive Choice | Products, Procurement & Services',
    'seo.default.description' => 'Competitive Choice supplies products, procurement solutions and services for government, commercial and institutional organizations.',

    // Shared by category pages
    'category.shop_label' => 'Shop Materials and Supplies',

    // 404 page
    'page404.code'         => '404',
    'page404.title'        => 'Page not found',
    'page404.text'         => "The page you're looking for doesn't exist or has been moved.",
    'page404.button_label' => 'Go home',
];
