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
        'name' => env('LP_SERVICE_NAME', 'カレマ クラス'),
        'tagline' => env('LP_TAGLINE', 'スクール運営を革新するクラウド予約管理システム'),
        'description' => env('LP_DESCRIPTION', '英会話スクール、ダンススタジオ、音楽教室など、あらゆる習い事教室の予約・管理を効率化するマルチテナント対応SaaSプラットフォーム'),
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
        'title' => env('LP_HERO_TITLE', 'スクール運営をもっとスマートに'),
        'subtitle' => env('LP_HERO_SUBTITLE', '予約管理から売上分析まで、教室運営に必要なすべてを一つのプラットフォームで'),
        'cta_primary' => env('LP_CTA_PRIMARY', '無料で始める'),
        'cta_secondary' => env('LP_CTA_SECONDARY', 'ログイン'),
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
            'title' => '簡単予約管理',
            'description' => '生徒の予約・振替・キャンセルを直感的に管理。カレンダー表示で空き状況も一目瞭然。',
        ],
        [
            'icon' => 'shield-check',
            'title' => 'テナント完全分離',
            'description' => 'マルチテナント対応で各スクールのデータを完全に分離。セキュリティも万全。',
        ],
        [
            'icon' => 'users',
            'title' => '生徒・講師管理',
            'description' => '生徒情報や講師スケジュールを一元管理。役割ベースのアクセス制御で安全に運用。',
        ],
        [
            'icon' => 'chart-bar',
            'title' => '売上分析',
            'description' => '予約状況や売上データを可視化。データドリブンな経営判断をサポート。',
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
        'title' => env('LP_CTA_TITLE', '今すぐ始めてみませんか？'),
        'subtitle' => env('LP_CTA_SUBTITLE', '多くのスクールがカレマ クラスで運営を効率化しています'),
        'button_text' => env('LP_CTA_BUTTON', 'テナントを作成'),
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
        'company_name' => env('LP_COMPANY_NAME', 'Calema'),
        'copyright_year' => date('Y'),
        'links' => [
            [
                'text' => 'About',
                'url' => '#',
            ],
            [
                'text' => 'プライバシーポリシー',
                'url' => '#',
            ],
            [
                'text' => '利用規約',
                'url' => '#',
            ],
            [
                'text' => 'お問い合わせ',
                'url' => '#',
            ],
        ],
    ],
];
