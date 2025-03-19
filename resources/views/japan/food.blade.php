<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-center font-[Oswald] text-3xl font-bold tracking-tight text-gray-900">What to Eat?</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="text-center font-[Oswald] text-2xl tracking-tight text-gray-900">
                Japan offers an abundance of delicious food, with a variety of regional and seasonal dishes.
                Whether it be mobile food stands, atmospheric drinking places, or inexpensive chain shops, there's
                definitely a food you'll fall in love with!
            </p>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            {{-- sushi section --}}
            <div class="mb-6 flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/sushi.png" alt="Sushi">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 text-5xl font-semibold text-white">
                        Sushi
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 text-lg text-gray-700">
                        Sushi is one of the first foods that comes to mind when thinking about Japanese cuisine.
                        The word ‘sushi’ refers to any dish made with Japanese rice that has been seasoned with rice
                        vinegar.
                        Common varieties of sushi include makizushi (sushi rice and fillings rolled up in nori
                        seaweed), nigiri sushi (shaped, bite-size mounds of sushi rice with single slices of raw fish or
                        similar draped over the top) and inarizushi (sushi rice stuffed inside pockets of inari; a type
                        of seasoned, fried tofu).
                    </p>
                </div>
            </div>
            <br>
            {{-- udon section --}}
            <div class="flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/udon.png" alt="Udon">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 text-5xl font-semibold text-white">
                        Udon
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 text-lg text-gray-700">
                        One of the three main noodle varieties eaten in Japan; udon noodles are thick, chewy, and
                        traditionally made from wheat flour and brine water.
                        Udon can be served in a number of different ways (mixed into stir fries, added to hot pots,
                        served cold with a tsuyu or tentsuyu soup base on the side for dipping),
                        but are most commonly used in noodle soups, where they are served in a savoury soup broth with
                        different garnishes.
                    </p>
                </div>
            </div>
            <br>
            {{-- tempura section --}}
            <div class="flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/tempura.png" alt="Tempura">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 text-5xl font-semibold text-white">
                        Tempura
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 text-lg text-gray-700">
                        If you enjoy crispy fried foods, then you will love tempura. Tempura are pieces or slices of
                        meat, fish, and/or vegetables that have been covered in a special tempura batter and deep fried
                        until they become crunchy and pale gold in colour.
                    </p>
                </div>
            </div>
            <br>
            {{-- yakitori section --}}
            <div class="flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/yakitori.png" alt="Yakitori">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 text-5xl font-semibold text-white">
                        Yakitori
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 text-lg text-gray-700">
                        With a name literally meaning ‘barbecued chicken’, yakitori are small skewers of bite-size
                        chicken pieces seasoned with salt or brushed with a sauce.
                        There are many different types of yakitori, but the most common varieties are momo (chicken
                        thigh), negima (chicken and spring onion), and tsukune (chicken meatballs).
                    </p>
                </div>
            </div>
            <br>
            {{-- sashimi section --}}
            <div class="flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/sashimi.png" alt="Sashimi">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 text-5xl font-semibold text-white">
                        Sashimi
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 text-lg text-gray-700">
                        Possibly one of the most controversial dishes in all of Japanese cuisine, sashimi is raw fish or
                        meat that has been expertly cut into thin slices and typically comes served with daikon radish,
                        pickled ginger, wasabi and soy sauce.
                    </p>
                </div>
            </div>
            <br>
            {{-- ramen section --}}
            <div class="flex flex-col items-center justify-center space-y-8 sm:flex-row sm:space-x-8 sm:space-y-0">
                <div class="relative mx-4 inline-block">
                    <img class="h-72 w-72 rounded-lg object-cover shadow-lg" src="../img/ramen.png" alt="Ramen">
                    <span
                        class="absolute inset-0 flex items-center justify-center rounded-lg bg-black bg-opacity-50 text-5xl font-semibold text-white">
                        Ramen
                    </span>
                </div>
                <div class="max-w-xl text-center sm:text-left">
                    <p class="mb-4 text-lg text-gray-700">
                        Ramen is a noodle soup dish consisting of wheat noodles, a
                        savoury broth,and toppings of meat and/or vegetables such as sliced pork, nori seaweed,
                        spring onions, bamboo shoots, and others.

                        Ramen is one of present-day Japan’s absolute favourite delicacies, costing very little and being
                        widely available in restaurants and ramen bars (which are on almost every street corner).
                        Indeed, Japanese ramen is so popular that there is a ramen-themed museum/amusement park in
                        Tokyo.
                    </p>
                </div>
            </div>
            <br>
        </div>
    </main>
    <footer class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-center font-[Oswald] text-3xl font-bold tracking-tight text-gray-900">And many more!</h1>
        </div>
    </footer>
    <div class="mx-auto mb-6 max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-center font-[Oswald] text-2xl tracking-tight text-gray-900">
            Japan has some of the best food in the world. The mouthwatering images will make you want to come to Japan
            as soon as possible!
        </p>
    </div>
    {{-- add more space at bottom --}}
</x-layout>
