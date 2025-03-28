<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('food.what_eat') }}</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('food.description') }}

            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-8">
            {{-- sushi section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/sushi.png" alt="Sushi">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('food.sushi') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('food.sushi_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- udon section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/udon.png" alt="Udon">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('food.udon') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('food.udon_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- tempura section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/tempura.png" alt="Tempura">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('food.tempura') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('food.tempura_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- yakitori section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/yakitori.png" alt="Yakitori">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('food.yakitori') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('food.yakitori_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- sashimi section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/sashimi.png" alt="Sashimi">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('food.sashimi') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('food.sashimi_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- ramen section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/ramen.png" alt="Ramen">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('food.ramen') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('food.ramen_description') }}
                    </p>
                </div>
            </div>
            <br>
        </div>
    </main>
    <div class="mx-auto mb-4 max-w-7xl px-4 py-6">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('food.closure') }}
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
