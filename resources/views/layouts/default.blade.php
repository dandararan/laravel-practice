<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <img src="{{ asset('/images/search.png') }}" alt="">
        @yield('header')
        @include('sidemenu')
    </header>
    <main class="bg-slate-50 flex items-center justify-center min-h-screen p-4">
        @yield('maincontent')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>

</html>
