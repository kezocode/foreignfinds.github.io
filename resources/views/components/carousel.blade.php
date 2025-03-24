<!-- Animated Slider -->

<div class="relative w-full" id="default-carousel" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-96 overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="active duration-700 ease-in-out" data-carousel-item>
            <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                src="./img/akihabara.png" alt="Akihabara">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" src="./img/fuji.png"
                alt="Mt. Fuji">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                src="./img/kyoto-street.png" alt="Kyoto">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" src="./img/onsen.png"
                alt="Onsen">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" src="./img/osaka.png"
                alt="Osaka">
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
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
            <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
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
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
            <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
