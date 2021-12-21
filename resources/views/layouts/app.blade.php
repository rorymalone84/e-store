<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gradient-to-r from-yellow-700 to-amber-300 py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                </div>
                <nav class="space-x-4 text-gray-800 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/shop">Shop</a>
                    <a class="no-underline hover:underline" href="/cart">Cart</a>
                </nav>
            </div>
        </header>
        <div class="grid grid-cols-1 m-auto w-full h-screen bg-dunes bg-cover bg-center"
           style="background-image: url('storage/homePic.jpg')">
            @yield('content')
        </div>
    </div>
</body>
</html>