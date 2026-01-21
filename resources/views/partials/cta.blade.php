<section class="relative py-20 bg-gradient-to-r from-{{ $theme['primary_color'] }}-600 to-{{ $theme['secondary_color'] }}-700 text-white">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-1/2 -right-1/4 w-96 h-96 bg-white opacity-5 rounded-full"></div>
        <div class="absolute -bottom-1/2 -left-1/4 w-96 h-96 bg-white opacity-5 rounded-full"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
            {{ $cta['title'] }}
        </h2>
        <p class="text-xl text-{{ $theme['primary_color'] }}-100 mb-8 max-w-2xl mx-auto">
            {{ $cta['subtitle'] }}
        </p>
        <a href="{{ $routes['signup'] }}"
           class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-lg text-{{ $theme['primary_color'] }}-600 bg-white hover:bg-gray-50 transition-all duration-200 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
            {{ $cta['button_text'] }}
            <svg class="ml-3 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>

        <div class="mt-8 flex items-center justify-center space-x-6 text-sm text-{{ $theme['primary_color'] }}-100">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                No credit card required
            </div>
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Free trial available
            </div>
        </div>
    </div>
</section>
