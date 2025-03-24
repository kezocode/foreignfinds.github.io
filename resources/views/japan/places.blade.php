<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-center font-[Montserrat] text-3xl font-bold tracking-tight text-gray-900">Where to Visit?
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
                Japan is full of wonderful places, so much so that it's hard to choose with limited traveling time.
                Get a head start on planning the best destination!
            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-8">
            {{-- kyoto section --}}
            <div class="mb-6 flex flex-row items-center justify-center space-x-8 space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/kyoto.png" alt="Kyoto">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 font-[Montserrat] text-5xl font-semibold text-white">
                        Kyoto
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        Kyoto is the old capital of Japan that greatly represents Japan's history and culture.
                        It's best known for its numerous Buddhist temples, Shinto shrines, palaces, and gardens,
                        which have been designated collectively as a World Heritage Site by UNESCO.
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">Top Kyoto Attractions:</p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://nijo-jocastle.city.kyoto.lg.jp/?lang=en">Nijo Castle</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.kyotorailwaymuseum.jp/en/">Kyoto Railway Museum</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://sankan.kunaicho.go.jp/english/guide/sento.html">Sento Palace</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.japan.travel/en/spot/1174/">Nishiki Market</a></li>
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
                        Tokyo
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        Tokyo is the #1 most visited place in Japan, and for a good reason!
                        It offers an unlimited choice of shopping, entertainment, culture, and dining.
                        In addition to the exciting city life, it also has historical places such as Asakusa, with many
                        museums, historic temples, and gardens.
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">Top Tokyo Attractions:</p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-red-600 hover:text-red-800"
                                href="https://www.gotokyo.org/en/destinations/central-tokyo/akihabara/index.html">Akihabara</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.tsukiji.or.jp/english/">Tsukiji Outer Market</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.gotokyo.org/en/spot/24/index.html">Koishikawa Korakuen</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://sankan.kunaicho.go.jp/english/guide/koukyo.html">Imperial Palace</a></li>
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
                        Osaka
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        Osaka is the second largest metropolitan area after Tokyo.
                        People from Osaka speak with Kansai Ben, famous for it's comedic qualities.
                        With all the delicious Takoyaki and Okonomiyaki available, you'll never want to leave!
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">Top Osaka Attractions:</p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.usj.co.jp/web/en/us">Universal Studios</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.japan-guide.com/e/e4001.html">Minami Namba</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://www.japan-guide.com/e/e4004.html">Osaka Aquarium</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://osaka-info.jp/en/discover-kansai/osaka-castle/">Osaka Castle</a></li>
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
                        Kanazawa
                    </span>
                </div>
                <div class="max-w-xl text-left">
                    <p class="mb-4 font-[playfair-display] text-xl text-gray-700">
                        Kanazawa is an important city in its region and serves as the capital of Ishikawa Prefecture.
                        The city boasts many historical attractions such as restored residences and districts, as well
                        as modern museums.
                        But Kanazawa's unchallenged main attraction is Kenrokuen, one of Japan's "three best landscape
                        gardens" and by many considered the most beautiful of them all.
                    </p>
                    <p class="mb-2 font-[Montserrat] text-xl font-semibold text-gray-800">Top Kanazawa Attractions:</p>
                    <ul class="list-disc space-y-2 pl-5 text-gray-700">
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_10106.html">Kenrokuen</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_50022.html">Ninjadera</a></li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_10212.html">Higashi Chaya District</a>
                        </li>
                        <li><a class="font-[playfair-display] text-lg text-red-600 hover:text-red-800"
                                href="https://visitkanazawa.jp/en/spot/detail_10030.html">Omicho Market</a></li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </main>
    <div class="mx-auto mb-6 max-w-7xl px-4 py-4">
        <p class="text-center font-[Montserrat] text-2xl tracking-tight text-gray-900">
            Now that you know the best places to visit, pack your bags and jump on a flight!
        </p>
    </div>

    <x-contact-footer>
    </x-contact-footer>
</x-layout>
