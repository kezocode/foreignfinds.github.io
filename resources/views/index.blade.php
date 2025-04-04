<x-layout>
    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 text-center">
            <h1 class="font-[Montserrat] text-4xl tracking-tight text-gray-900 font-semibold">
                {{ __('home.title') }}
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
                <p class="mb-2 font-[Montserrat] text-4xl">
                    {{ __('home.immersion') }}</p>
                <div class="mt-6">
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        {{ __('home.description_beauty') }}

                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        {{ __('home.description_festival') }}

                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        {{ __('home.description_anime') }}

                    </li>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-6 py-12">

            <div class="p-6 text-center">
                <p class="mb-2 font-[Montserrat] text-4xl">{{ __('home.natural_beauty') }}</p>
                <div class="mt-6">
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        {{ __('home.natural_fuji') }}

                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        {{ __('home.natural_blossom') }}

                    </li>
                    <li class="pb-6 font-[playfair-display] text-xl text-gray-700">
                        {{ __('home.natural_springs') }}
                    </li>
                </div>
            </div>
            <div class="ml-auto">
                <img class="h-[25rem] rounded-xl object-cover" src="./img/onsen.png" alt="">
            </div>
        </div>

        <!-- What Are You Looking For Section -->
        <section class="py-6 text-center">
            <h1 class="mb-8 font-[Montserrat] text-5xl">{{ __('home.looking_for') }}</h1>
            <div class="grid grid-cols-4 gap-6">
                <div class="group relative">
                    <a href="{{ route('places') }}?lang={{ app()->getLocale() }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/tokyo.png" alt="Tokyo">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            {{ __('home.places') }}
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('food') }}?lang={{ app()->getLocale() }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/ramen_jp.png" alt="Ramen">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            {{ __('home.best_food') }}
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('fun') }}?lang={{ app()->getLocale() }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/paragliding.png" alt="Paragliding">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            {{ __('home.fun_activities') }}
                        </span>
                    </a>
                </div>
                <div class="group relative">
                    <a href="{{ route('history') }}?lang={{ app()->getLocale() }}">
                        <img class="h-72 rounded-xl object-cover transition-transform duration-300 group-hover:scale-105"
                            src="./img/history.png" alt="History">
                        <span
                            class="absolute inset-0 flex items-center justify-center rounded-xl bg-black bg-opacity-50 font-[Montserrat] text-2xl font-semibold text-white transition-transform duration-300 group-hover:scale-105">
                            {{ __('home.historical_places') }}
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <div class="py-12 text-center">
            <h1 class="mb-8 font-[Montserrat] text-3xl">{{ __('home.worried_money') }}
                <a class="font-semibold" href="{{ route('travel-calculator') }}?lang={{ app()->getLocale() }}">
                    {{ __('home.travel_calculator') }}</a>
                {{ __('home.here') }}
            </h1>
            </h1>
        </div>

    </main>

    <x-contact-footer>
    </x-contact-footer>

</x-layout>
