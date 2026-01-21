<section class="relative bg-gradient-to-br from-{{ $theme['primary_color'] }}-600 to-{{ $theme['secondary_color'] }}-700 text-white">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="text-center">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-6">
                {{ $hero['title'] }}
            </h1>
            <p class="text-xl sm:text-2xl text-{{ $theme['primary_color'] }}-100 mb-10 max-w-3xl mx-auto">
                {{ $hero['subtitle'] }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ $routes['signup'] }}"
                   class="inline-flex items-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-{{ $theme['primary_color'] }}-600 bg-white hover:bg-gray-50 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    {{ $hero['cta_primary'] }}
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="{{ $routes['signin'] }}"
                   class="inline-flex items-center px-8 py-4 border-2 border-white text-base font-medium rounded-lg text-white hover:bg-white hover:text-{{ $theme['primary_color'] }}-600 transition-all duration-200">
                    {{ $hero['cta_secondary'] }}
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
        </svg>
    </div>
</section>
