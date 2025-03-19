<x-layout>

    <header class="bg-white shadow-sm">
        <div class="mx-auto flex max-w-7xl justify-center px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="flex font-[Oswald] text-3xl font-bold tracking-tight text-gray-900">Explore the Beauty of Japan
            </h1>
        </div>

        {{-- fix animated slider --}}
        <div class="relative w-full overflow-hidden">
            <div class="animate-scroll flex w-[500%]">
                <img class="h-96 w-1/5 object-cover" src="./img/akihabara.png" alt="Akihabara">
                <img class="h-96 w-1/5 object-cover" src="./img/fuji.png" alt="Mt Fuji">
                <img class="h-96 w-1/5 object-cover" src="./img/kyoto.png" alt="Kyoto">
                <img class="h-96 w-1/5 object-cover" src="./img/onsen.png" alt="Onsen">
                <img class="h-96 w-1/5 object-cover" src="./img/osaka.png" alt="Osaka">
            </div>
        </div>
    </header>
    <main>
        {{-- fix spacing --}}
        <div class="">
            <div class="flex items-center justify-between bg-red-600">
                <p class="max-w-md flex-1 rounded-md px-8 font-[Oswald] text-4xl leading-normal text-white">
                    Whether you're looking for fun, food, history, or all that Japan has
                    to offer, we
                    can help you plan
                    the perfect travel schedule!</p>
                <img class="ml-6 max-h-96 max-w-md" src="./img/japan-scenery.png" alt="Scenery in Japan">
            </div>
            <br>

            <div class="">
                <h1 class="text-center font-[Oswald] text-6xl">What are you looking for?</h1>
                <div class="flex items-center justify-center py-8">
                    <div class="relative mx-4 inline-block">
                        <a class="block" href="{{ route('places') }}">
                            <img class="h-72 w-72" src="./img/tokyo.png" alt="Tokyo">
                            <span
                                class="absolute inset-0 flex items-center justify-center text-2xl font-semibold text-white">
                                Places to Visit
                            </span>
                        </a>
                    </div>
                    <div class="relative mx-4 inline-block">
                        <a class="block" href="{{ route('food') }}">
                            <img class="h-72 w-72" src="./img/ramen.png" alt="Tokyo">
                            <span
                                class="absolute inset-0 flex items-center justify-center text-2xl font-semibold text-white">
                                Best Food to Eat
                            </span>
                        </a>
                    </div>
                    <div class="relative mx-4 inline-block">
                        <a class="block" href="{{ route('fun') }}">
                            <img class="h-72 w-72" src="./img/paragliding.png" alt="Tokyo">
                            <span
                                class="absolute inset-0 flex items-center justify-center text-2xl font-semibold text-white">
                                Fun Activities
                            </span>
                        </a>
                    </div>
                    <div class="relative mx-4 inline-block">
                        <a class="block" href="{{ route('history') }}">
                            <img class="h-72 w-72" src="./img/history.png" alt="Tokyo">
                            <span
                                class="absolute inset-0 flex items-center justify-center text-2xl font-semibold text-white">
                                Historical Places
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>

</x-layout>
