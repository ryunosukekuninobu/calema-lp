<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $service['description'] }}">
    <title>{{ $service['name'] }} - {{ $service['tagline'] }}</title>

    <!-- Tailwind CSS (assuming Vite is used in the main application) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional styles for animations -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="absolute top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-white hover:text-gray-100 transition-colors">
                        {{ $service['name'] }}
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ $routes['signin'] }}"
                       class="text-white hover:text-gray-100 px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Sign In
                    </a>
                    <a href="{{ $routes['signup'] }}"
                       class="bg-white text-{{ $theme['primary_color'] }}-600 hover:bg-gray-50 px-6 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-lg hover:shadow-xl">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    @include('calema-lp::partials.hero')

    <!-- Features Section -->
    @include('calema-lp::partials.features')

    <!-- CTA Section -->
    @include('calema-lp::partials.cta')

    <!-- Footer -->
    @include('calema-lp::partials.footer')

    <!-- Smooth scroll behavior -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
