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
    <nav class="bg-red-600">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center">

                <div class="w-1/3">
                    <a class="font-[Oswald] text-3xl text-white hover:text-black" href="/">Foreign Finds</a>
                </div>

                <div class="flex w-1/3 justify-center space-x-6">
                    <a class="font-[Oswald] text-2xl text-white hover:text-black"
                        href="{{ route('places') }}">Places</a>
                    <a class="font-[Oswald] text-2xl text-white hover:text-black" href="{{ route('food') }}">Food</a>
                    <a class="font-[Oswald] text-2xl text-white hover:text-black" href="{{ route('fun') }}">Fun</a>
                    <a class="font-[Oswald] text-2xl text-white hover:text-black"
                        href="{{ route('history') }}">History</a>
                    <a class="font-[Oswald] text-2xl text-white hover:text-black"
                        href="{{ route('contact') }}">Contact</a>
                </div>

                <div class="w-1/3"></div>
            </div>
        </div>
    </nav>

    {{ $slot }}
</body>

</html>
