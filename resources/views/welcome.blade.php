<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business Intellect</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Navigation remains the same -->
    <nav class="bg-[#af7aff] shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img width="300" src="{{ asset('images/logo.png') }}" alt="logo">
                </div>
                <div class="hidden md:flex items-center space-x-4 gap-4">
                    <a href="#" class="text-white hover:text-green-500">ยืม</a>
                    <a href="#" class="text-white hover:text-green-500">คืน</a>
                    <a href="#" class="text-white hover:text-green-500">นำเข้า</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative h-[500px] overflow-hidden">
        <!-- Slides -->
        <div class="slides-container relative h-full">
            <!-- Slide 1 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0"></div>
                <img src="https://dummyimage.com/1920x1080/cccccc/fff" alt="Business 1" class="w-full h-full object-cover">
                <div class="relative h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4">
                        <h1 class="text-5xl font-bold text-white mb-4 slide-content translate-x-[-100%]">BUSINESS INTELLECT</h1>
                        <p class="text-xl text-white slide-content translate-y-[100%] delay-200">We Create Best Opportunities</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0"></div>
                <img src="https://dummyimage.com/1920x1080/cccccc/a3ff57" alt="Business 2" class="w-full h-full object-cover">
                <div class="relative h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4">
                        <h1 class="text-5xl font-bold text-white mb-4 slide-content translate-x-[-100%]">INNOVATIVE SOLUTIONS</h1>
                        <p class="text-xl text-white slide-content translate-y-[100%] delay-200">Building Tomorrow's Success</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0"></div>
                <img src="https://dummyimage.com/1920x1080/cccccc/af1de0" alt="Business 3" class="w-full h-full object-cover">
                <div class="relative h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4">
                        <h1 class="text-5xl font-bold text-white mb-4 slide-content translate-x-[-100%]">GLOBAL EXPERTISE</h1>
                        <p class="text-xl text-white slide-content translate-y-[100%] delay-200">Your Partner in Growth</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <!-- <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 z-10" data-slide-nav="-1">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 z-10" data-slide-nav="1">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button> -->

            <!-- Dots Navigation -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" data-slide-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" data-slide-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" data-slide-index="2"></button>
            </div>
        </div>
    </div>

    <!-- Top Read -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Sci-fi</h2>
            <div class="relative">
                <div class="overflow-x-auto scrollbar-hide py-8 flex gap-6 snap-x snap-mandatory scroll-div">
                <div class="snap-start flex-none"></div>
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="snap-start flex-none w-72 bg-white rounded-lg shadow-lg transform transition-transform hover:scale-105 cursor-pointer">
                        <div class="h-40 bg-gray-200 rounded-t-lg overflow-hidden">
                            <img src="https://via.placeholder.com/400x250" alt="TopRead {{ $i }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">ชื่อเรื่อง {{ $i }}</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-green-500 font-semibold">อ่านต่อ →</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <!-- Scroll Buttons -->
                <button class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-3 rounded-full shadow-lg -ml-5 hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-3 rounded-full shadow-lg -mr-5 hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Sci-fi -->
    <section class="py-16 bg-green-500">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-white mb-8">Sci-fi</h2>
            <div class="relative">
                <div class="overflow-x-auto scrollbar-hide py-8 flex gap-6 snap-x snap-mandatory scroll-div">
                <div class="snap-start flex-none"></div>
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="snap-start flex-none w-72 bg-white rounded-lg shadow-lg transform transition-transform hover:scale-105 cursor-pointer">
                        <div class="h-40 bg-gray-200 rounded-t-lg overflow-hidden">
                            <img src="https://via.placeholder.com/400x250" alt="TopRead {{ $i }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">ชื่อเรื่อง {{ $i }}</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-green-500 font-semibold">อ่านต่อ →</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <!-- Scroll Buttons -->
                <button class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-3 rounded-full shadow-lg -ml-5 hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-3 rounded-full shadow-lg -mr-5 hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
</body>
</html>