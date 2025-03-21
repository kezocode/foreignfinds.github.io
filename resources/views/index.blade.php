<x-layout>

    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 text-center sm:px-6 lg:px-8">
            <h1 class="font-[Oswald] text-4xl font-bold tracking-tight text-gray-900">
                Explore the Beauty of Japan
            </h1>
        </div>

        <!-- Animated Slider -->

        <div class="relative w-full" id="default-carousel" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="active duration-700 ease-in-out" data-carousel-item>
                    <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                        src="./img/akihabara.png" alt="Akihabara">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                        src="./img/fuji.png" alt="Mt. Fuji">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                        src="./img/kyoto-street.png" alt="Kyoto">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                        src="./img/onsen.png" alt="Onsen">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                        src="./img/osaka.png" alt="Osaka">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                <button class="h-3 w-3 rounded-full" data-carousel-slide-to="0" type="button" aria-current="true"
                    aria-label="Slide 1"></button>
                <button class="h-3 w-3 rounded-full" data-carousel-slide-to="1" type="button" aria-current="false"
                    aria-label="Slide 2"></button>
                <button class="h-3 w-3 rounded-full" data-carousel-slide-to="2" type="button" aria-current="false"
                    aria-label="Slide 3"></button>
                <button class="h-3 w-3 rounded-full" data-carousel-slide-to="3" type="button" aria-current="false"
                    aria-label="Slide 4"></button>
                <button class="h-3 w-3 rounded-full" data-carousel-slide-to="4" type="button" aria-current="false"
                    aria-label="Slide 5"></button>
            </div>
            <!-- Slider controls -->
            <button
                class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                data-carousel-prev type="button">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                    <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button
                class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                data-carousel-next type="button">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                    <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="px-6 lg:px-12">

        <!-- What Are You Looking For Section -->
        <section class="py-12 text-center">
            <h1 class="mb-8 font-[Oswald] text-5xl">What are you looking for?</h1>
            <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
                <div class="group relative">
                    <a href="{{ route('places') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/tokyo.png" alt="Tokyo">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Places to Visit
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('food') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/ramen_jp.png" alt="Ramen">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Best Food to Eat
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('fun') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/paragliding.png" alt="Paragliding">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Fun Activities
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('history') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/history.png" alt="History">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Historical Places
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Featured Sections -->
        <div class="grid grid-cols-1 gap-6 py-12 md:grid-cols-3">
            <div class="rounded-xl border-4 border-red-600 p-6 text-center">
                <p class="mb-2 font-[Oswald] text-4xl">Cultural Immersion</p>
                <p class="text-lg text-gray-700">
                    Explore the serene beauty of temples and shrines, like Kyoto's Fushimi Inari Shrine or Tokyo's Meiji
                    Shrine,
                    offering a glimpse into Japan's rich history and spiritual traditions.
                </p>
            </div>
            <div class="rounded-xl border-4 border-red-600 p-6 text-center">
                <p class="mb-2 font-[Oswald] text-4xl">Natural Beauty</p>
                <p class="text-lg text-gray-700">
                    Marvel at the diverse landscapes, from the majestic peaks of Mount Fuji to the serene beauty of the
                    Japanese Alps and the vibrant coastline.
                </p>
            </div>
            <div class="rounded-xl border-4 border-red-600 p-6 text-center">
                <p class="mb-2 font-[Oswald] text-4xl">Delicious Cuisine</p>
                <p class="text-lg text-gray-700">
                    Indulge in the diverse and flavorful Japanese cuisine, from fresh sushi and ramen to delicate sweets
                    and regional specialties.
                </p>
            </div>
        </div>

    </main>

    <!-- Footer Section -->
    <footer class="bg-white py-12 text-center shadow-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="font-[Oswald] text-3xl font-bold text-gray-900">
                Want to learn something about Japan that we haven't written? Contact us!
            </h1>
        </div>
        <div class="mt-6">
            <a class="rounded-lg bg-red-600 px-10 py-4 text-2xl font-medium text-white transition-transform duration-300 hover:scale-105 hover:bg-red-700"
                href="{{ route('contact') }}">
                Contact
            </a>
        </div>
    </footer>

</x-layout>
