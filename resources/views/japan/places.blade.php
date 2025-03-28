<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">
                {{ __('places.where_visit') }}
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                {{ __('places.opening') }}

            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-8">
            {{-- kyoto section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/kyoto.png" alt="Kyoto">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('places.kyoto') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('places.kyoto_description') }}
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">{{ __('places.top_kyoto') }}
                    </p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://nijo-jocastle.city.kyoto.lg.jp/?lang=en">{{ __('places.nijo') }}</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.kyotorailwaymuseum.jp/en/">{{ __('places.railway') }}</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://sankan.kunaicho.go.jp/english/guide/sento.html">{{ __('places.sento') }}</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.japan.travel/en/spot/1174/">{{ __('places.nishiki') }}</a></li>
                    </ul>
                </div>
            </div>
            <br>
            {{-- tokyo section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/tokyo.png" alt="Tokyo">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('places.tokyo') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('places.tokyo_description') }}
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">{{ __('places.top_tokyo') }}
                    </p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-red-600 hover:text-red-800"
                                href="https://www.gotokyo.org/en/destinations/central-tokyo/akihabara/index.html">{{ __('places.akihabara') }}</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.tsukiji.or.jp/english/">{{ __('places.tsukiji') }}</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.gotokyo.org/en/spot/24/index.html">{{ __('places.korakuen') }}</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://sankan.kunaicho.go.jp/english/guide/koukyo.html">{{ __('places.imperial') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            {{-- osaka section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/osaka.png" alt="Osaka">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('places.osaka') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('places.osaka_description') }}
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">{{ __('places.top_osaka') }}
                    </p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.usj.co.jp/web/en/us">{{ __('places.universal') }}</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.japan-guide.com/e/e4001.html">{{ __('places.minami') }}</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.japan-guide.com/e/e4004.html">{{ __('places.aquarium') }}</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://osaka-info.jp/en/discover-kansai/osaka-castle/">{{ __('places.osaka_castle') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            {{-- kanazawa section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/ishikawa.png" alt="Kanazawa">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        {{ __('places.kanazawa') }}
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        {{ __('places.kanazawa_description') }}
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">
                        {{ __('places.top_kanazawa') }}</p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_10106.html">{{ __('places.kenrokuen') }}</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_50022.html">{{ __('places.ninjadera') }}</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_10212.html">{{ __('places.higashi') }}</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_10030.html">{{ __('places.omicho') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </main>
    <div class="mx-auto mb-6 max-w-7xl px-4 py-4">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            {{ __('places.closing') }}
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
