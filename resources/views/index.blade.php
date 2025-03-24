<x-layout>

    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 text-center">
            <h1 class="font-[Montserrat] text-4xl tracking-tight text-gray-900">
                Explore the Beauty of Japan
            </h1>
        </div>

        <x-carousel>

        </x-carousel>
    </header>

    <!-- Main Content -->
    <main class="px-6 lg:px-12">
        <!-- Featured Sections -->
        <div class="grid grid-cols-2 gap-6 py-12">
            <div>
                <img class="h-[25rem] rounded-xl object-cover" src="./img/tokyo.png" alt="">
            </div>
            <div class="p-6 text-center">
                <p class="mb-2 font-[Montserrat] text-4xl">Cultural Immersion</p>
                <div class="mt-6">
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        Explore the serene beauty of temples and shrines, like Kyoto's Fushimi Inari Shrine or Tokyo's
                        Meiji
                        Shrine,
                        offering a glimpse into Japan's rich history and spiritual traditions.
                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        Experience vibrant festivals, tea ceremonies, and other cultural events that showcase Japan's
                        unique
                        traditions.
                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        Japan is the birthplace of anime and manga, and you can explore themed attractions, conventions,
                        and
                        stores dedicated to these popular forms of entertainment.
                    </li>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-6 py-12">

            <div class="p-6 text-center">
                <p class="mb-2 font-[Montserrat] text-4xl">Natural Beauty</p>
                <div class="mt-6">
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        From the majestic snow-capped peaks of Mount Fuji to the pristine beaches of Okinawa, Japan
                        boasts diverse and breathtaking natural landscapes.
                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        Witness the iconic beauty of cherry blossoms during spring, when Japan transforms into a sea of
                        pink.
                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        Relax and rejuvenate in Japan's natural hot springs, an essential Japanese experience.
                    </li>
                </div>
            </div>
            <div class="ml-auto">
                <img class="h-[25rem] rounded-xl object-cover" src="./img/onsen.png" alt="">
            </div>
        </div>

        <!-- What Are You Looking For Section -->
        <section class="py-6 text-center">
            <h1 class="mb-8 font-[Montserrat] text-5xl">What are you looking for?</h1>
            <div class="grid grid-cols-4 gap-6">
                <div class="group relative">
                    <a href="{{ route('places') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/tokyo.png" alt="Tokyo">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Places to Visit
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('food') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/ramen_jp.png" alt="Ramen">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Best Food to Eat
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('fun') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/paragliding.png" alt="Paragliding">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Fun Activities
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('history') }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/history.png" alt="History">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            Historical Places
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <div class="py-12 text-center">
            <h1 class="mb-8 font-[Montserrat] text-3xl">Worried about how much money to bring? Check out our
                <a class="font-semibold" href="{{ route('travel-calculator') }}">Travel Calculator</a> here!
            </h1>
            </h1>
        </div>

    </main>

    <x-contact-footer>
    </x-contact-footer>

</x-layout>
