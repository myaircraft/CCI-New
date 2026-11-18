<?php
/** Product category pages (Category Page template). Shared blocks are added by cc_page_build(). */

if (!defined('ABSPATH')) exit;

return [
    'safety-security' => [
        'title' => 'Safety',
        'parent' => 'supplies',
        'template' => 'category',
        'group' => 'product',
        'order' => '16',
        'content' => [
            'seo' => [
                'title' => 'Safety & Security Supplies | PPE, Spill Control | Competitive Choice',
                'description' => 'PPE, first aid kits, safety signs, spill control, locks, safes, alarms and emergency radios for healthcare, utilities and education. Request a quote.',
                'og_title' => 'Safety & Security Supplies | Competitive Choice',
                'og_description' => 'Safety and security products that protect people, assets and operations. Send your requirement for a quote.',
                'schema_about' => 'Workplace safety and security supplies',
            ],
            'banner' => [
                'image' => 'safe-banner.jpg',
                'title' => 'Safety',
                'lead' => 'PPE, emergency response tools and security products that protect people, assets and operations.',
            ],
            'overview' => [
                'title' => 'Safety and security supplies for critical environments',
                'paragraphs' => ['Safety is foundational to operational resilience, especially within critical infrastructure. Competitive Choice supplies a full suite of safety and security products that protect people, assets and operations.', 'From personal protective equipment (PPE) to emergency response tools, our inventory supports compliance, risk mitigation and peace of mind in high-demand environments.', 'Our solutions are designed for healthcare, utilities, construction and education, helping prevent incidents, support regulatory compliance and strengthen workplace safety culture.'],
            ],
            'equipment' => [
                'title' => 'Safety and security products we supply',
                'description' => 'Protection and response tools for people, property and operations.',
                'items' => [
                    [
                        'title' => 'PPE & First Aid',
                        'icon' => '',
                        'image' => 'safe-1.jpg',
                        'description' => 'Personal protective equipment and first aid kits for staff and contractors.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Signs & Spill Control',
                        'icon' => '',
                        'image' => 'safe-2.jpg',
                        'description' => 'Safety signs and spill control products that help prevent and contain incidents.',
                        'items' => [],
                    ],
                    [
                        'title' => 'Locks, Safes & Emergency Communications',
                        'icon' => '',
                        'image' => 'safe-3.jpg',
                        'description' => 'Locks, safes and alarm systems, plus emergency radios and secure communication devices for rapid response.',
                        'items' => [],
                    ],
                ],
            ],
            'applications' => [
                'title' => 'Designed for demanding sectors',
                'description' => 'Different environments carry different risks. Start with where the products will be used.',
                'items' => [
                    [
                        'title' => 'Healthcare',
                        'description' => 'PPE, first aid and secure storage for clinical and support areas.',
                    ],
                    [
                        'title' => 'Utilities & construction',
                        'description' => 'Protective equipment, signage and spill control for field and plant work.',
                    ],
                    [
                        'title' => 'Education',
                        'description' => 'First aid, signage, alarms and communication tools for campuses and districts.',
                    ],
                ],
            ],
            'faq' => [
                'items' => [
                    [
                        'question' => 'What safety and security products do you supply?',
                        'answer' => 'We supply PPE and first aid kits, safety signs and spill control, locks, safes and alarm systems, and emergency radios and secure communication devices.',
                    ],
                    [
                        'question' => 'Can you supply to a standard or specification?',
                        'answer' => 'Include any required standards, ratings or certifications in your inquiry. Compliance is confirmed for each specific product before purchase.',
                    ],
                    [
                        'question' => 'Do you supply fire protection too?',
                        'answer' => 'See our Fire & Safety page for lithium-ion battery fire protection.',
                    ],
                    [
                        'question' => 'How do I request a quote?',
                        'answer' => 'Send your product list with quantities, the environment and your delivery location and date. Availability and delivery timing are confirmed during quotation.',
                    ],
                    [
                        'question' => 'Do you supply healthcare and education customers?',
                        'answer' => 'Yes. Our safety and security range is designed for healthcare, utilities, construction and education.',
                    ],
                    [
                        'question' => 'Is PPE available through cooperative contracts?',
                        'answer' => 'PPE and safety equipment appear on several cooperative contracts, including TIPS and regional cooperatives. Tell us which vehicle you use and we will confirm.',
                    ],
                    [
                        'question' => 'Can you supply emergency radios and secure communications?',
                        'answer' => 'Yes. Emergency radios and secure communication devices are part of our range. Include your coverage and quantity needs in your inquiry.',
                    ],
                    [
                        'question' => 'Can you help with signage and spill control for compliance?',
                        'answer' => 'We supply safety signs and spill control products. Confirm the specific standards your facility must meet and include them in your inquiry.',
                    ],
                ],
            ],
            'related' => [
                'title' => 'Related supply requirements',
                'links' => [
                    [
                        'label' => 'Fire & Safety',
                        'link' => '/supplies/fire-safety/',
                    ],
                    [
                        'label' => 'All Products & Supplies',
                        'link' => 'link:products',
                    ],
                ],
            ],
        ],
    ],
];
