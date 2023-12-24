<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <div class="w-screen flex items-center justify-center">
        <!-- Table for large screen -->
        <div class="overflow-auto hidden md:block">
            <h1 class="text-2xl p-4 border border-b-4">{{ __('My Posts') }}</h1>
            <table class="table-auto m-10">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="mb-4">
                        <td class="p-4">22/11/2023</td>
                        <td class="p-4">Malcolm Lockyer</td>
                        <td class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolorum
                            esse distinctio consequatur, beatae atque veritatis qui ratione ex ad et asperiores eius
                            inventore dignissimos autem. Eveniet, incidunt aliquam! Exercitationem!</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- Greed for small screen --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
            <h1 class="text-2xl p-4 border border-b-4">{{ __('My Posts') }}</h1>
            <div class="bg-white space-y-3 p-4 rounded-lg shadow-orange-300">
                <div class="flex items-center space-x-2 text-sm">
                    <div class="text-gray-500">10/10/2023</div>
                    <div>status</div>
                </div>
                <div class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eaque similique
                    dolores.
                    Enim consectetur temporibus
                </div>
            </div>
        </div>

    </div>
</body>

</html>
