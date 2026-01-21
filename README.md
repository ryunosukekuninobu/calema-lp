# Calema LP - Landing Page Module for Laravel

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Laravel](https://img.shields.io/badge/Laravel-11%2B%20%7C%2012%2B-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://php.net)

A beautiful, customizable landing page module for Laravel applications with multi-tenancy support. Perfect for SaaS applications, multi-tenant systems, and any Laravel project that needs a professional landing page.

## Features

- 🎨 **Beautiful Design** - Modern, responsive design built with Tailwind CSS
- ⚙️ **Highly Customizable** - Configure colors, content, and features via config file
- 🚀 **Easy Integration** - Install and configure in minutes
- 📱 **Mobile Responsive** - Looks great on all devices
- 🎯 **SaaS Ready** - Built-in support for tenant signup and login flows
- 🔧 **Extendable** - Easy to customize views and add new sections
- 📦 **Zero Dependencies** - Works with standard Laravel and Tailwind CSS

## Screenshots

The landing page includes:
- Hero section with customizable title and CTA buttons
- Features showcase section
- Call-to-action section
- Professional footer with social links

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or 12.0
- Tailwind CSS configured in your Laravel application

## Installation

### 1. Install via Composer

```bash
composer require calema/lp
```

### 2. Publish Configuration

```bash
php artisan vendor:publish --tag=calema-lp-config
```

This will create a `config/calema-lp.php` file where you can customize your landing page.

### 3. (Optional) Publish Views

If you want to customize the views:

```bash
php artisan vendor:publish --tag=calema-lp-views
```

Views will be published to `resources/views/vendor/calema-lp/`.

## Configuration

Edit `config/calema-lp.php` to customize your landing page:

```php
return [
    'service' => [
        'name' => 'Your Service Name',
        'tagline' => 'Transform your business with our innovative solution',
        'description' => 'A powerful platform designed to help you...',
    ],

    'hero' => [
        'title' => 'Welcome to the Future',
        'subtitle' => 'Streamline your workflow and boost productivity',
        'cta_primary' => 'Get Started',
        'cta_secondary' => 'Sign In',
    ],

    'features' => [
        [
            'icon' => 'bolt',
            'title' => 'Fast & Reliable',
            'description' => 'Lightning-fast performance...',
        ],
        // Add more features...
    ],

    'routes' => [
        'signup' => '/tenants/create',
        'signin' => '/login',
        'dashboard' => '/dashboard',
    ],

    'theme' => [
        'primary_color' => 'blue',
        'secondary_color' => 'indigo',
    ],
];
```

### Environment Variables

You can also configure via `.env`:

```env
LP_SERVICE_NAME="My Awesome SaaS"
LP_TAGLINE="Your business transformation starts here"
LP_HERO_TITLE="Welcome to Innovation"
LP_PRIMARY_COLOR=blue
LP_ROUTE_SIGNUP=/tenants/create
LP_ROUTE_SIGNIN=/login
```

## Usage

### Basic Usage

After installation, the landing page will be automatically available at your application's root URL (`/`).

The module registers the following route:

```php
Route::get('/', [LandingController::class, 'index'])->name('landing');
```

### Customizing Features

Edit the `features` array in `config/calema-lp.php`:

```php
'features' => [
    [
        'icon' => 'bolt',  // Available icons: bolt, shield-check, users, chart-bar
        'title' => 'Your Feature Title',
        'description' => 'Your feature description...',
    ],
    // Add up to 4 features for best layout
],
```

### Customizing Routes

Point the CTA buttons to your application's routes:

```php
'routes' => [
    'signup' => route('tenants.create'),  // Tenant registration
    'signin' => route('login'),            // User login
    'dashboard' => route('dashboard'),     // Dashboard after login
],
```

### Customizing Colors

Change the color scheme using Tailwind CSS color names:

```php
'theme' => [
    'primary_color' => 'blue',      // blue, indigo, purple, pink, red, etc.
    'secondary_color' => 'indigo',
],
```

### Customizing Views

1. Publish the views:
   ```bash
   php artisan vendor:publish --tag=calema-lp-views
   ```

2. Edit the published views in `resources/views/vendor/calema-lp/`:
   - `landing.blade.php` - Main layout
   - `partials/hero.blade.php` - Hero section
   - `partials/features.blade.php` - Features section
   - `partials/cta.blade.php` - Call-to-action section
   - `partials/footer.blade.php` - Footer section

## Integration with Multi-Tenancy

This module works seamlessly with multi-tenant applications:

1. Set your tenant creation route:
   ```php
   'routes' => [
       'signup' => '/tenants/create',
   ],
   ```

2. Users clicking "Get Started" will be directed to your tenant registration page.

## Tailwind CSS Setup

Make sure Tailwind CSS is properly configured in your Laravel application. If not already set up:

1. Install Tailwind CSS:
   ```bash
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init -p
   ```

2. Configure `tailwind.config.js`:
   ```js
   export default {
     content: [
       "./resources/**/*.blade.php",
       "./resources/**/*.js",
       "./vendor/calema/lp/resources/views/**/*.blade.php",
     ],
     theme: {
       extend: {},
     },
     plugins: [],
   }
   ```

3. Add to `resources/css/app.css`:
   ```css
   @tailwind base;
   @tailwind components;
   @tailwind utilities;
   ```

4. Build assets:
   ```bash
   npm run build
   ```

## Advanced Customization

### Adding New Sections

1. Create a new partial view in `resources/views/vendor/calema-lp/partials/`.
2. Include it in `landing.blade.php`:
   ```blade
   @include('calema-lp::partials.your-section')
   ```

### Overriding the Controller

Create your own controller extending the base:

```php
use Calema\Lp\Http\Controllers\LandingController as BaseLandingController;

class LandingController extends BaseLandingController
{
    public function index()
    {
        // Add custom logic
        $customData = $this->getCustomData();

        return view('calema-lp::landing', array_merge(
            parent::getData(),
            ['customData' => $customData]
        ));
    }
}
```

## Examples

### Minimal Configuration

```php
// config/calema-lp.php
return [
    'service' => [
        'name' => 'MyApp',
        'tagline' => 'Simplify your workflow',
    ],
    'routes' => [
        'signup' => '/register',
        'signin' => '/login',
    ],
];
```

### Full Customization

See the published config file for all available options.

## Troubleshooting

### Landing page doesn't show up

1. Clear cache: `php artisan optimize:clear`
2. Make sure Tailwind CSS is properly configured
3. Check if the route conflicts with your existing routes

### Styles not applying

1. Rebuild assets: `npm run build`
2. Make sure `calema-lp` views are included in `tailwind.config.js` content array
3. Clear browser cache

### Colors not working

Make sure you're using valid Tailwind CSS color names (blue, indigo, purple, pink, red, orange, yellow, green, teal, cyan, etc.)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).

## Support

For support, please open an issue on GitHub or contact us at dev@calema.tech.

## Credits

Built with ❤️ by the Calema Team

---

**Made for Laravel developers who want beautiful landing pages without the hassle.**
