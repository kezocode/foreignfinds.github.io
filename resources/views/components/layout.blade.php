<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreign Finds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body class="h-full">
    <div>
        <nav class="bg-red-600">
            <div>
                <div class="flex h-16 items-center justify-between">

                    <div>
                        <a class="rounded-md py-2 pl-6 font-[Oswald] text-3xl text-white hover:text-black"
                            href="/">Foreign Finds</a>
                    </div>

                    {{-- fix spacing --}}
                    <div class="flex flex-1 justify-center">
                        <div class="flex space-x-6">
                            <a class="rounded-md px-3 py-2 font-[Oswald] text-lg text-white hover:text-black"
                                href="{{ route('places') }}" aria-current="page">Places</a>
                            <a class="rounded-md px-3 py-2 font-[Oswald] text-lg text-white hover:text-black"
                                href="{{ route('food') }}">Food</a>
                            <a class="rounded-md px-3 py-2 font-[Oswald] text-lg text-white hover:text-black"
                                href="{{ route('fun') }}">Fun</a>
                            <a class="rounded-md px-3 py-2 font-[Oswald] text-lg text-white hover:text-black"
                                href="{{ route('history') }}">History</a>
                            <a class="rounded-md px-3 py-2 font-[Oswald] text-lg text-white hover:text-black"
                                href="{{ route('contact') }}">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{ $slot }}
    </div>
</body>

</html>
