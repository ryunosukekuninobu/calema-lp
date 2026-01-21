<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Service Information
    |--------------------------------------------------------------------------
    |
    | Configure your service's basic information displayed on the landing page.
    |
    */

    'service' => [
        'name' => env('LP_SERVICE_NAME', 'Your Service Name'),
        'tagline' => env('LP_TAGLINE', 'Transform your business with our innovative solution'),
        'description' => env('LP_DESCRIPTION', 'A powerful platform designed to help you manage your business efficiently with multi-tenancy support.'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Hero Section
    |--------------------------------------------------------------------------
    |
    | Configure the hero section at the top of the landing page.
    |
    */

    'hero' => [
        'title' => env('LP_HERO_TITLE', 'Welcome to the Future'),
        'subtitle' => env('LP_HERO_SUBTITLE', 'Streamline your workflow and boost productivity'),
        'cta_primary' => env('LP_CTA_PRIMARY', 'Get Started'),
        'cta_secondary' => env('LP_CTA_SECONDARY', 'Sign In'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Define the key features to display on the landing page.
    | You can customize icons using Heroicons (https://heroicons.com/)
    |
    */

    'features' => [
        [
            'icon' => 'bolt',
            'title' => 'Fast & Reliable',
            'description' => 'Lightning-fast performance with 99.9% uptime guarantee. Your data is always accessible when you need it.',
        ],
        [
            'icon' => 'shield-check',
            'title' => 'Secure by Default',
            'description' => 'Enterprise-grade security with multi-tenant data isolation. Your data is encrypted and protected.',
        ],
        [
            'icon' => 'users',
            'title' => 'Team Collaboration',
            'description' => 'Work together seamlessly with real-time collaboration tools and role-based access control.',
        ],
        [
            'icon' => 'chart-bar',
            'title' => 'Analytics & Insights',
            'description' => 'Make data-driven decisions with comprehensive analytics and customizable reports.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Call-to-Action
    |--------------------------------------------------------------------------
    |
    | Configure the CTA section settings.
    |
    */

    'cta' => [
        'title' => env('LP_CTA_TITLE', 'Ready to get started?'),
        'subtitle' => env('LP_CTA_SUBTITLE', 'Join thousands of teams already using our platform'),
        'button_text' => env('LP_CTA_BUTTON', 'Create Your Account'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Configure the routes used in the landing page.
    |
    */

    'routes' => [
        'signup' => env('LP_ROUTE_SIGNUP', '/tenants/create'),
        'signin' => env('LP_ROUTE_SIGNIN', '/login'),
        'dashboard' => env('LP_ROUTE_DASHBOARD', '/dashboard'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | Customize the color scheme using Tailwind CSS color classes.
    |
    */

    'theme' => [
        'primary_color' => env('LP_PRIMARY_COLOR', 'blue'),
        'secondary_color' => env('LP_SECONDARY_COLOR', 'indigo'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    |
    | Configure footer information.
    |
    */

    'footer' => [
        'company_name' => env('LP_COMPANY_NAME', 'Your Company'),
        'copyright_year' => date('Y'),
        'links' => [
            [
                'text' => 'About',
                'url' => '#',
            ],
            [
                'text' => 'Privacy Policy',
                'url' => '#',
            ],
            [
                'text' => 'Terms of Service',
                'url' => '#',
            ],
            [
                'text' => 'Contact',
                'url' => '#',
            ],
        ],
    ],
];
