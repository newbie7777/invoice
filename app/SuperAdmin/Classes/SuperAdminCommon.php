<?php

namespace App\SuperAdmin\Classes;

use App\Classes\Common;
use App\Models\Lang;
use App\SuperAdmin\Models\GlobalSettings;
use App\SuperAdmin\Models\GlobalCompany;
use App\Models\SuperAdmin;
use App\Scopes\CompanyScope;

class SuperAdminCommon
{
    public static function createWebsiteSetting($langKey)
    {
        $globalCompany = GlobalCompany::first();

        // Landing Website
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'website_settings';
        $websiteSetting->name = 'Website Settings';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            'lang_key' => $langKey,
            'app_name' => 'Stockifly SAAS',
            'header_logo' => 'website_uezrmoqgwiaqnkeuzsur.png',
            'header_logo_url' => 'https://saas.stockifly.in/uploads/website/website_uezrmoqgwiaqnkeuzsur.png',
            'header_sidebar_logo' => 'website_ot1adrzwmzrdz5ae2alw.png',
            'header_sidebar_logo_url' => 'https://saas.stockifly.in/uploads/website/website_ot1adrzwmzrdz5ae2alw.png',
            'home_text' => 'Home',
            'features_text' => 'Features',
            'pricing_text' => 'Pricing',
            'contact_text' => 'Contact',
            'register_text' => 'Register',
            'login_button_show' => '1',
            'login_button_text' => 'Login',
            'register_button_show' => '1',
            'register_button_text' => 'Register',

            'header_title' => 'Billing & Inventory Management with POS and Online Store',
            'header_sub_title' => 'Manage Your inventory In Easy Way',
            'header_description' => 'Best-rated  billing and inventory management application for small to large scale business. It’s built using Vue and Laravel. Stockifly have all major features related to inventory  managed to improve your business growth',
            'header_button1_show' => '1',
            'header_button1_text' => 'Start Free Trail',
            'header_button1_url' => 'https://saas.stockifly.in/register',
            'header_button2_show' => '1',
            'header_button2_text' => 'Explore All Features',
            'header_button2_url' => 'https://saas.stockifly.in/features',
            'header_features' => [
                'No hidden fees',
                'Start with a free account',
                'Edit online, no software needed',
                'Multiple Language Support',
                'Safe and Secure',
            ],
            'header_background_image' => 'website_7rgngbhkbjvayw5jfbrk.png',
            'header_background_image_url' => 'https://saas.stockifly.in/uploads/website/website_7rgngbhkbjvayw5jfbrk.png',
            'header_client_show' => '0',
            'header_client_image' => '',
            'header_client_image_url' => '',
            'header_client_name' => 'Denny Jones, founder of Growthio',
            'header_client_text' => '“You made it so simple. My new team is so much faster and easier to work with than my old site. I just choose the page, make the change.”',

            'contact_details' => 'Contact Details',
            'contact_title' => 'Get connected',
            'contact_description' => 'Lorem ipsum dolor sit amet, to the con adipiscing. Volutpat tempor to the condimentum vitae vel purus.',
            'contact_email_text' => 'Send Email',
            'contact_phone_text' => 'Call Us',
            'contact_address_text' => 'Address',
            'contact_email' => 'contact@stockifly.com',
            'contact_phone' => '123456789',
            'contact_address' => '1 Stree City State Country TN, 38401',
            'contact_form_title' => 'Get connected',
            'contact_form_description' => 'Contact Us',
            'contact_form_heading' => 'Send us a message to know more about us or just chit-chat.',
            'contact_form_name_text' => 'Name',
            'contact_form_email_text' => 'Email',
            'contact_form_message_text' => 'Message',
            'contact_form_send_message_text' => 'Send Message',
            'contact_form_background_image' => 'website_rb88clwpdgy6kewgwvkm.jpeg',
            'contact_form_background_image_url' => 'https://saas.stockifly.in/uploads/website/website_rb88clwpdgy6kewgwvkm.jpeg',
            'contact_us_submit_message_text' => 'Thanks for contacting us. We will catch you soon.',

            'register_title' => 'Join Stockifly for free',
            'register_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada tellus vestibulum, commodo pulvinar.',
            'register_background' => 'website_xcbwwmgnljvby2wsyald.svg',
            'register_background_url' => 'https://saas.stockifly.in/uploads/website/website_xcbwwmgnljvby2wsyald.svg',
            'register_company_name_text' => 'Company Name',
            'register_email_text' => 'Email',
            'register_password_text' => 'Password',
            'register_confirm_password_text' => 'Confirm Passwrod',
            'register_submit_button_text' => 'SIGN UP FOR Free',
            'register_agree_text' => 'I agree to the Terms & Conditions of Stockifly',
            'register_agree_url' => 'I agree to the Terms & Conditions of Stockifly',
            'error_contact_support' => 'Some error occurred when inserting the data. Please try again or contact support',
            'register_success_text' => 'Thank you for registration. Please login to get started',

            'call_to_action_title' => 'Connect with experts',
            'call_to_action_description' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.',
            'call_to_action_widgets' => [
                [
                    'title' => 'Successful Projects',
                    'value' => '195+',
                ],
                [
                    'title' => 'Experienced Experts',
                    'value' => '23 years',
                ],
                [
                    'title' => 'Success Rate',
                    'value' => '98.99%',
                ],
            ],
            'call_to_action_no_email_sell_text' => 'We don’t share or sell your email address publicly',
            'call_to_action_email_text' => 'Enter email to get started',
            'call_to_action_submit_button_text' => 'Join Now',

            'feature_title' => 'Features which will increase your business growth and increase your business profit...',
            'feature_description' => 'Great & Powerful Features',
            'home_feature_points' => [
                'Accounting Management',
                'Billing Management',
                'Multiple Warehouses',
                'Product Management',
                'Stock Management',
                'POS',
                'Online Stores',
                'Expenses',
                'Users',
                'Roles',
                'Permissions',
                'Reports',
                'Multi Languages',
                'Invoices',
                'Payment In',
                'Taxes',
                'Units',
                'Currencies',
                'Payment Modes',
                'Suppliers',
                'Customers',
            ],

            'price_title' => 'Choose a Plan',
            'price_description' => 'Manage your projects and your talent in a single system, resulting in empowered teams.',
            'price_card_title' => 'Trusted by secure payment service',
            'pricing_free_text' => 'Free',
            'pricing_no_card_text' => 'No credit card required',
            'pricing_billed_monthly_text' => 'Billed Monthly',
            'pricing_billed_yearly_text' => 'Billed Yearly',
            'pricing_monthly_text' => 'Monthly',
            'pricing_yearly_text' => 'Yearly',
            'pricing_month_text' => 'month',
            'pricing_year_text' => 'year',
            'pricing_get_started_button_text' => 'Get Started Now',
            'most_popular_image' => 'website_clesobqaxv8w3xatjdpm.png',
            'most_popular_image_url' => 'https://saas.stockifly.in/uploads/website/website_clesobqaxv8w3xatjdpm.png',

            'testimonial_title' => 'Loved by Meat Processors and Butcher shops across America',
            'testimonial_description' => '',

            'favourite_apps_title' => '',
            'favourite_apps_description' => '',

            'faq_sub_title' => 'HAVE ANY QUESTIONS?',
            'faq_title' => 'Frequently Asked Questions',
            'faq_still_have_question_text' => 'Still have any questions?',
            'faq_contact_us_text' => 'Contact Us',
            'faq_background_image' => 'website_xxcoofeeyzr6fmcn9xkh.svg',
            'faq_background_image_url' => 'https://saas.stockifly.in/uploads/website/website_xxcoofeeyzr6fmcn9xkh.svg',

            'client_title' => 'Trusted by Companies around the World',
            'client_description' => 'Vetted by leaders within the Meat Processing Industry.',

            'footer_description' => "Don't hesitate, Our experts will show you how our application can streamline the way your team works.",
            'footer_copyright_text' => 'Copyright 2021 @ Stockifly, All rights reserved',
            'footer_logo' => 'website_iy19ihodfyi0wl6m2j0d.png',
            'footer_logo_url' => 'https://saas.stockifly.in/uploads/website/website_iy19ihodfyi0wl6m2j0d.png',
            'footer_links_text' => 'Links',
            'footer_pages_text' => 'Pages',
            'footer_contact_us_text' => 'Contact Us',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'instagram_url' => '#',
            'youtube_url' => '#',
        ];
        $websiteSetting->save();

        // Landing Website Clients
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'website_clients';
        $websiteSetting->name = 'Website Clients Settings';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            0 => [
                'id' => '1hexby4e6ap',
                'name' => 'Client 1',
                'logo' => 'website_3mkib7dkr78l7i2nnlfv.png',
                'logo_url' => 'https://saas.stockifly.in/uploads/website/website_3mkib7dkr78l7i2nnlfv.png',
            ],
            1 => [
                'id' => '2hexby4e6ap',
                'name' => 'Client 2',
                'logo' => 'website_0tya02afangkvitpiyym.png',
                'logo_url' => 'https://saas.stockifly.in/uploads/website/website_0tya02afangkvitpiyym.png',
            ],
            2 => [
                'id' => '3hexby4e6ap',
                'name' => 'Client 3',
                'logo' => 'website_wqif3ehxtpg0se6jf1jw.png',
                'logo_url' => 'https://saas.stockifly.in/uploads/website/website_wqif3ehxtpg0se6jf1jw.png',
            ],
            3 => [
                'id' => '4hexby4e6ap',
                'name' => 'Client 4',
                'logo' => 'website_emhobiedaspfgtqzqki1.png',
                'logo_url' => 'https://saas.stockifly.in/uploads/website/website_emhobiedaspfgtqzqki1.png',
            ],
            4 => [
                'id' => '5hexby4e6ap',
                'name' => 'Client 5',
                'logo' => 'website_opyhhazhk0hbezei8oid.png',
                'logo_url' => 'https://saas.stockifly.in/uploads/website/website_opyhhazhk0hbezei8oid.png',
            ],
        ];
        $websiteSetting->save();

        // Header Features
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'header_features';
        $websiteSetting->name = 'Header Features';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            0 => [
                'id' => '21hexby4e6ap',
                'name' => 'Reports',
                'description' => 'All Business Reports',
                'image' => 'website_23qptd5jcxsuqowl2yh8.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_23qptd5jcxsuqowl2yh8.png',
            ],
            1 => [
                'id' => '22hexby4e6ap',
                'name' => 'Units',
                'description' => 'Manage Multi Units',
                'image' => 'website_uvdi40suchj0z6p7noja.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_uvdi40suchj0z6p7noja.png',
            ],
            2 => [
                'id' => '23hexby4e6ap',
                'name' => 'Taxes',
                'description' => 'Create Taxes On Demand',
                'image' => 'website_yj9odfthox0f49vbjqqf.png',
                'image_url' => 'http://stockifly-saas.test/uploads/website/website_yj9odfthox0f49vbjqqf.png',
            ],
            3 => [
                'id' => '24hexby4e6ap',
                'name' => 'Multi Users',
                'description' => 'Staff, Customers, Suppliers',
                'image' => 'website_pimjrznrmufvzzwzvj4d.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_pimjrznrmufvzzwzvj4d.png',
            ],
            4 => [
                'id' => '25hexby4e6ap',
                'name' => 'Expense Management',
                'description' => 'Manage Your Expenses',
                'image' => 'website_zj70irusqpl2oqljuejt.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_zj70irusqpl2oqljuejt.png',
            ],
            5 => [
                'id' => '26hexby4e6ap',
                'name' => 'POS',
                'description' => 'Simple But Effective POS',
                'image' => 'website_52uhwkvnxvc5jj5pqggv.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_52uhwkvnxvc5jj5pqggv.png',
            ],
            6 => [
                'id' => '27hexby4e6ap',
                'name' => 'Multi Languages',
                'description' => 'Multi Languages Support',
                'image' => 'website_x19vn36yjxp4gxi6lkqk.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_x19vn36yjxp4gxi6lkqk.png',
            ],
            7 => [
                'id' => '28hexby4e6ap',
                'name' => 'Multi Warehouse/Store',
                'description' => 'Manage Multiple Stores',
                'image' => 'website_jvx3wj6b5zd9c5kcyxv5.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_jvx3wj6b5zd9c5kcyxv5.png',
            ],
        ];
        $websiteSetting->save();

        // Features Page
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'features_page';
        $websiteSetting->name = 'Features Page';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            [
                "id" => "pu6o43vpo9",
                "title" => "Accounting & Billing",
                "description" => "It is a long established fact that a reader will",
                "features" => [
                    [
                        "id" => "b5e58xp1h6m",
                        "title" => "Payments In / Out",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_sblj6lstmymylc7hdbw7.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_sblj6lstmymylc7hdbw7.png"
                    ],
                    [
                        "id" => "omlc24r338",
                        "title" => "Expenses",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_c3sqg4ssykxrtguj8cgt.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_c3sqg4ssykxrtguj8cgt.png"
                    ],
                    [
                        "id" => "musykhbq37",
                        "title" => "Cash & Bank",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_qpdg3umuvomwqxfrc02x.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_qpdg3umuvomwqxfrc02x.png"
                    ]
                ]
            ],
            [
                "id" => "uz2fpijzmk",
                "title" => "Inventory Management",
                "description" => "Mange your stock and manage your inventory",
                "features" => [
                    [
                        "id" => "gki0xl9xwl",
                        "title" => "Purchase, Sales and Returns",
                        "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,",
                        "image" => "website_f2876ph6sdrwtm1ab4kz.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_f2876ph6sdrwtm1ab4kz.png"
                    ],
                    [
                        "id" => "8y1suzijyb",
                        "title" => "POS",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_gg38pfkupmswmv3m1ukf.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_gg38pfkupmswmv3m1ukf.png"
                    ],
                    [
                        "id" => "bsfitmrezvu",
                        "title" => "Stock Transfer",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_tq8bxhhyzy9r1v6xiefw.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_tq8bxhhyzy9r1v6xiefw.png"
                    ]
                ]
            ],
            [
                "id" => "u5kx5li1zwk",
                "title" => "Product Management",
                "description" => "Manage your business products, brands, categories in simple and easy steps",
                "features" => [
                    [
                        "id" => "app8vxzlk3",
                        "title" => "Product Management",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_lsitkya08ein8muezkgj.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_lsitkya08ein8muezkgj.png"
                    ],
                    [
                        "id" => "gkmyw3ppqxv",
                        "title" => "Brand Management",
                        "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,",
                        "image" => "website_yibft8oof3xzak3h5pxk.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_yibft8oof3xzak3h5pxk.png"
                    ],
                    [
                        "id" => "91hq9yjf38",
                        "title" => "Category Management",
                        "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is tha",
                        "image" => "website_sn0ndon40xxzw5xi97of.png",
                        "image_url" => "https://saas.stockifly.in/uploads/website/website_sn0ndon40xxzw5xi97of.png"
                    ]
                ]
            ]
        ];
        $websiteSetting->save();

        // Landing Website Testimonials
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'website_testimonials';
        $websiteSetting->name = 'Website Testimonials Settings';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = array(
            0 =>
            array(
                'id' => 'jbcfuvor1ef',
                'name' => 'Mitch',
                'image' => 'website_k8w4nqkrykntks7kwo8y.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_k8w4nqkrykntks7kwo8y.png',
                'comment' => 'The easy of the Grazr software allowed me to migrate out current workflow into the system along with train our employees without hardship.',
                'rating' => 5,
            ),
            1 =>
            array(
                'id' => '8i20kbnxkrh',
                'name' => 'Aaron',
                'image' => 'website_cgcoxmhdw0osserh7tln.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_cgcoxmhdw0osserh7tln.png',
                'comment' => 'Leveraging modern technology and passion for supporting local Ag, Grazr is the next evolutionary stage in the procurement of software to streamline workflow for processors.',
                'rating' => 5,
            ),
            2 =>
            array(
                'id' => 'y8h9ukt9fxm',
                'name' => 'William',
                'image' => 'website_opuyi9u0bkr6zvabxbuj.png',
                'image_url' => 'https://saas.stockifly.in/uploads/website/website_opuyi9u0bkr6zvabxbuj.png',
                'comment' => 'Having the ability to streamline my teams from processing to retail with one system has changed the way we do business.',
                'rating' => 5,
            ),
        );
        $websiteSetting->save();

        // Landing Website Features
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'website_features';
        $websiteSetting->name = 'Website Features Settings';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            [
                "id" => "8jzmhcpnshn",
                "title" => "Multiple Warehouse / Shopes",
                "description" => "Manage your multiple store or warehouse. You can directly receive your warehouse order from online url.",
                "image" => "website_uzcxpe1wr0cw1sk5vul6.webp",
                "image_url" => "https://saas.stockifly.in/uploads/website/website_uzcxpe1wr0cw1sk5vul6.webp",
                "features" => [
                    "Add Multiple Stores",
                    "Powerful Dashboard According To Stores",
                    "Filter Purchases, Sales, Returns, Expenses According To Stores",
                    "Receive Online Order From Multiple Stores"
                ]
            ],
            [
                "id" => "k8u7cwrwnt",
                "title" => "Inventory / Stock Management",
                "description" => "Now manage your stock purchase, sales, sales return, and purchase returns in easy steps... Also record your payment in and out so that you can find your profit and loss...",
                "image" => "website_2h7yildjthysi91jijkc.webp",
                "image_url" => "https://saas.stockifly.in/uploads/website/website_2h7yildjthysi91jijkc.webp",
                "features" => [
                    "Purchase, Sales, Sales Return, Purchase Returns",
                    "Manage Paid / Due Amount For Your Customers And Suppliers",
                    "Get Inventory Stock Details",
                    "Sales Products Using POS"
                ]
            ],
            [
                "id" => "vfxekis7pcd",
                "title" => "Powerful Reports System",
                "description" => "Stockifly comes with powerful reporting tools which will help you to control your business. You can download reports in multiple formats so that you can use them later",
                "image" => "website_nuidqnba2gd55mzmfsfq.webp",
                "image_url" => "https://saas.stockifly.in/uploads/website/website_nuidqnba2gd55mzmfsfq.webp",
                "features" => [
                    "View Reports and Download Them",
                    "Payment, User, Store Wise Reports",
                    "Profit & Loss reports",
                    "View Warehouse Reports Using FilterAnd Search"
                ]
            ]
        ];
        $websiteSetting->save();

        // Landing Website FAQ
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'website_faqs';
        $websiteSetting->name = 'Website Faq Settings';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            [
                "id" => "ly41sgvy9hh",
                "question" => "Why do I need your software solutions?",
                "answer" => "We love this question because it does two things: it allows you to tell people why they can benefit from SaaS, and it allows you to sell your services specifically. Notice that we don’t ask “if” people need SaaS,"
            ],
            [
                "id" => "uxt7phaojq",
                "question" => "How can I check compatibility?",
                "answer" => "Here’s a common logistics and tech issue: compatibility. People want to make sure that your software solutions are compatible with the tools that they already use. Some might be investing in a new tool and want to make sure it works with their existing SaaS solutions from you."
            ],
            [
                "id" => "1z7cdfd25vz",
                "question" => "What is Software-as-a-Service (SaaS)?",
                "answer" => "This is always number one. So many people don’t understand SaaS or what it means to their business. Others just aren’t sure how it differs from a typical software product or company. There’s a lot to cover here, but even addressing the question shows your audience that you are ready to do so and be transparent about what you offer."
            ]
        ];
        $websiteSetting->save();

        // Landing Website Pricing Cards
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'pricing_cards';
        $websiteSetting->name = 'Pricing Cards';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials =  [
            [
                "id" => "aogu39r25jr",
                "name" => "Stripe",
                "logo" => "website_pxgkwqgqx7uffjmzu4dz.svg",
                "logo_url" => "https://saas.stockifly.in/uploads/website/website_pxgkwqgqx7uffjmzu4dz.svg"
            ],
            [
                "id" => "hojcguj4k9j",
                "name" => "MasterCard",
                "logo" => "website_texx0yfx4hs1soc4rwiw.svg",
                "logo_url" => "https://saas.stockifly.in/uploads/website/website_texx0yfx4hs1soc4rwiw.svg"
            ]
        ];


        $websiteSetting->save();

        // Landing Footers Pages
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'footer_pages';
        $websiteSetting->name = 'Footers Pages';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [];
        $websiteSetting->save();

        // Landing Pages SEO
        $websiteSetting = new GlobalSettings();
        $websiteSetting->is_global = 1;
        $websiteSetting->company_id = $globalCompany->id;
        $websiteSetting->setting_type = 'website_seo';
        $websiteSetting->name = 'SEO Details';
        $websiteSetting->name_key = $langKey;
        $websiteSetting->credentials = [
            [
                'id' => '1jzmhcpnshn',
                'page_key' => 'home',
                'seo_title' => 'Home',
                'seo_author' => 'stockifly',
                'seo_keywords' => 'stockifly saas',
                'seo_description' => 'stockifly saas',
                'seo_image' => 'website_cldv2lidmrtm4uxqwz42.png',
                'seo_image_url' => 'https://saas.stockifly.in/uploads/website/website_1n9yoq8bbmnq2e1ejoza.png',
            ],
            [
                'id' => '2jzmhcpnshn',
                'page_key' => 'register',
                'seo_title' => 'Register',
                'seo_author' => 'stockifly',
                'seo_keywords' => 'register, stockifly',
                'seo_description' => 'stockifly saas register',
                'seo_image' => 'website_cldv2lidmrtm4uxqwz42.png',
                'seo_image_url' => 'https://saas.stockifly.in/uploads/website/website_1n9yoq8bbmnq2e1ejoza.png',
            ],
            [
                'id' => '3jzmhcpnshn',
                'page_key' => 'features',
                'seo_title' => 'Features',
                'seo_author' => 'stockifly',
                'seo_keywords' => 'features',
                'seo_description' => 'stockifly features page',
                'seo_image' => 'website_cldv2lidmrtm4uxqwz42.png',
                'seo_image_url' => 'https://saas.stockifly.in/uploads/website/website_1n9yoq8bbmnq2e1ejoza.png',
            ],
            [
                'id' => '4jzmhcpnshn',
                'page_key' => 'contact',
                'seo_title' => 'Contact Us',
                'seo_author' => 'stockifly',
                'seo_keywords' => 'contact us',
                'seo_description' => 'stockifly contact us page',
                'seo_image' => 'website_cldv2lidmrtm4uxqwz42.png',
                'seo_image_url' => 'https://saas.stockifly.in/uploads/website/website_1n9yoq8bbmnq2e1ejoza.png',
            ],
            [
                'id' => '5jzmhcpnshn',
                'page_key' => 'pricing',
                'seo_title' => 'Pricing',
                'seo_author' => 'stockifly',
                'seo_keywords' => 'pricing',
                'seo_description' => 'stockifly pricing page',
                'seo_image' => 'website_cldv2lidmrtm4uxqwz42.png',
                'seo_image_url' => 'https://saas.stockifly.in/uploads/website/website_1n9yoq8bbmnq2e1ejoza.png',
            ],
        ];
        $websiteSetting->save();
    }

    public static function createGlobalPaymentSettings($company)
    {
        if ($company->is_global == 1) {
            // For Superadmin Payment Gateway
            // Paypal
            $paypal = new GlobalSettings();
            $paypal->is_global = 1;
            $paypal->company_id = $company->id;
            $paypal->setting_type = 'payment_settings';
            $paypal->name = 'Paypal Payment Settings';
            $paypal->name_key = 'paypal';
            $paypal->credentials = [
                'paypal_client_id' => '',
                'paypal_secret' => '',
                'paypal_mode' => 'sandbox',
                'paypal_status' => 'active',
            ];
            $paypal->status = 1; // Also Remove this
            $paypal->save();

            // Stripe
            $stripe = new GlobalSettings();
            $stripe->is_global = 1;
            $stripe->company_id = $company->id;
            $stripe->setting_type = 'payment_settings';
            $stripe->name = 'Stripe Payment Settings';
            $stripe->name_key = 'stripe';
            $stripe->credentials = [
                'stripe_api_key' => '',
                'stripe_api_secret' => '',
                'stripe_webhook_key' => '',
                'stripe_status' => 'active',
            ];
            $stripe->status = 1; // Also Remove this
            $stripe->save();

            // Razorpay
            $razorpay = new GlobalSettings();
            $razorpay->is_global = 1;
            $razorpay->company_id = $company->id;
            $razorpay->setting_type = 'payment_settings';
            $razorpay->name = 'Razorpay Payment Settings';
            $razorpay->name_key = 'razorpay';
            $razorpay->credentials = [
                'razorpay_key' => '',
                'razorpay_secret' => '',
                'razorpay_webhook_secret' => '',
                'razorpay_status' => 'active',
            ];
            $razorpay->status = 1; // Also Remove this
            $razorpay->save();

            // Paystack
            $paystack = new GlobalSettings();
            $paystack->is_global = 1;
            $paystack->company_id = $company->id;
            $paystack->setting_type = 'payment_settings';
            $paystack->name = 'Paystack Payment Settings';
            $paystack->name_key = 'paystack';
            $paystack->credentials = [
                'paystack_client_id' => '',
                'paystack_secret' => '',
                'paystack_merchant_email' => '',
                'paystack_status' => 'inactive',
            ];
            $paystack->save();

            // Mollie
            $mollie = new GlobalSettings();
            $mollie->is_global = 1;
            $mollie->company_id = $company->id;
            $mollie->setting_type = 'payment_settings';
            $mollie->name = 'Mollie Payment Settings';
            $mollie->name_key = 'mollie';
            $mollie->credentials = [
                'mollie_api_key' => '',
                'mollie_status' => 'inactive',
            ];
            $mollie->save();

            // Authorize
            $authorize = new GlobalSettings();
            $authorize->is_global = 1;
            $authorize->company_id = $company->id;
            $authorize->setting_type = 'payment_settings';
            $authorize->name = 'Authorize Payment Settings';
            $authorize->name_key = 'authorize';
            $authorize->credentials = [
                'authorize_api_login_id' => '',
                'authorize_transaction_key' => '',
                'authorize_signature_key' => '',
                'authorize_environment' => 'sandbox',
                'authorize_status' => 'inactive',
            ];
            $authorize->save();
        }
    }

    public static function addWebsiteImageUrl($settingData, $keyName)
    {
        if ($settingData && array_key_exists($keyName, $settingData)) {
            if ($settingData[$keyName] != '') {
                $imagePath = Common::getFolderPath('websiteImagePath');

                $settingData[$keyName . '_url'] = Common::getFileUrl($imagePath, $settingData[$keyName]);
            } else {
                $settingData[$keyName] = null;
                $settingData[$keyName . '_url'] = asset('images/website.png');
            }
        }

        return $settingData;
    }

    public static function addUrlToAllSettings($allSettings, $keyName)
    {
        $allData = [];

        foreach ($allSettings as $allSetting) {
            $allData[] = self::addWebsiteImageUrl($allSetting, $keyName);
        }

        return $allData;
    }

    public static function getAppPaymentSettings($showType = 'limited')
    {
        $allPaymentMethods = GlobalSettings::withoutGlobalScope(CompanyScope::class)->where('setting_type', 'payment_settings')
            ->where('status', 1)
            ->get();

        if ($showType == 'limited') {
            foreach ($allPaymentMethods as $allPaymentMethod) {
                if ($allPaymentMethod->name_key == 'paypal') {
                    $allPaymentMethod->credentials = [
                        'paypal_client_id' => $allPaymentMethod->credentials['paypal_client_id'],
                        'paypal_mode' => $allPaymentMethod->credentials['paypal_mode'],
                        'paypal_status' => $allPaymentMethod->credentials['paypal_status'],
                    ];
                } else if ($allPaymentMethod->name_key == 'stripe') {
                    $allPaymentMethod->credentials = [
                        'stripe_api_key' => $allPaymentMethod->credentials['stripe_api_key'],
                        'stripe_status' => $allPaymentMethod->credentials['stripe_status'],
                    ];
                } else if ($allPaymentMethod->name_key == 'razorpay') {
                    $allPaymentMethod->credentials = [
                        'razorpay_key' => $allPaymentMethod->credentials['razorpay_key'],
                        'razorpay_status' => $allPaymentMethod->credentials['razorpay_status'],
                    ];
                } else if ($allPaymentMethod->name_key == 'paystack') {
                    $allPaymentMethod->credentials = [
                        'paystack_client_id' => $allPaymentMethod->credentials['paystack_client_id'],
                        'paystack_status' => $allPaymentMethod->credentials['paystack_status'],
                    ];
                } else if ($allPaymentMethod->name_key == 'mollie') {
                    $allPaymentMethod->credentials = [
                        'mollie_api_key' => $allPaymentMethod->credentials['mollie_api_key'],
                        'mollie_status' => $allPaymentMethod->credentials['mollie_status'],
                    ];
                } else if ($allPaymentMethod->name_key == 'authorize') {
                    $allPaymentMethod->credentials = [
                        'authorize_api_login_id' => $allPaymentMethod->credentials['authorize_api_login_id'],
                        'authorize_environment' => $allPaymentMethod->credentials['authorize_environment'],
                        'authorize_status' => $allPaymentMethod->credentials['authorize_status'],
                    ];
                }
            }
        }


        return $allPaymentMethods;
    }

    public static function createSuperAdmin($resetAdminCompany = false)
    {
        $enLang = Lang::where('key', 'en')->first();

        // Global Company for superadmin
        // Added here because on creating company observer will call
        // And on observer currency will be created
        $globalCompany = new GlobalCompany();
        $globalCompany->is_global = 1;
        $globalCompany->name = 'Stockifly SAAS';
        $globalCompany->short_name = 'Stockifly';
        $globalCompany->email = 'superadmin_company@example.com';
        $globalCompany->phone = '+9199999999';
        $globalCompany->address = '7 street, city, state, 762782';
        $globalCompany->verified = true;
        $globalCompany->primary_color = '#80cbc4';
        $globalCompany->lang_id = $enLang->id;
        $globalCompany->save();

        // Common::addCurrencies($globalCompany);

        // Creating SuperAdmin
        $superAdmin = SuperAdmin::create([
            'company_id' => $globalCompany->id,
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => '12345678',
            'is_superadmin' => true,
            'user_type' => 'super_admins',
            'status' => 'enabled',
        ]);

        $globalCompany->admin_id = $superAdmin->id;
        $globalCompany->save();

        // Settings
        Common::insertInitSettings($globalCompany);

        // Creating Landing Website Page Settings
        // For en language
        self::createWebsiteSetting("en");

        self::createGlobalPaymentSettings($globalCompany);
    }

    public static function formatAmountCurrency($amount)
    {
        $newAmount = $amount;
        $superAdminCurrency = GlobalCompany::select('id', 'currency_id')->with('currency')->first();

        if ($superAdminCurrency->currency->position == "front") {
            $newAmountString = $superAdminCurrency->currency->symbol . '' . $newAmount;
        } else {
            $newAmountString = $newAmount . '' . $superAdminCurrency->currency->symbol;
        }

        return $newAmountString < 0 ? '-' . $newAmountString : $newAmountString;
    }
}
