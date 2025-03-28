<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('fun.what_do') }}</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('fun.title') }}
            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-8">
            {{-- tokyo disney sea section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/disneysea.png"
                        alt="Tokyo DisneySea">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-4xl font-semibold text-white">
                        {{ __('fun.disneysea') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('fun.disneysea_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- fuji-q section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/fujiq.png" alt="Fuji-Q">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-4xl font-semibold text-white">
                        {{ __('fun.fujiq') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('fun.fujiq_description') }}

                    </p>
                </div>
            </div>
            <br>
            {{-- paragliding section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/paragliding.png"
                        alt="Paragliding">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-4xl font-semibold text-white">
                        {{ __('fun.paragliding') }}
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('fun.paragliding_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- maid cafe section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/maidcafe.png" alt="Maid Cafe">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-4xl font-semibold text-white">
                        {{ __('fun.maid_cafe') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('fun.maid_cafe_description') }}
                    </p>
                </div>
            </div>
            <br>
            {{-- festival section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/festivals.png" alt="Festival">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-4xl font-semibold text-white">
                        {{ __('fun.festival') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('fun.festival_description') }}
                    </p>
                </div>
            </div>
            <br>
        </div>
    </main>

    <div class="mx-auto mb-6 max-w-7xl px-4 py-6">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('fun.closure') }}
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
