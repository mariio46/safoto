<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="max-[768px]:scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ 'Safoto | ' . $title }}</title>
    <link rel="icon" href="{{ asset('../storage/img/default/title-logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- Font Family --}}
    {{-- Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    {{-- Tailwind CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @bukStyles
</head>

<body class="antialiased bg-slate-50">
    <x-auth.navbar /> {{-- Navbar --}}

    <x-auth.sidebar /> {{-- Sidebar --}}

    <main class="px-[2px] py-2  sm:py-4 sm:px-4 sm:ml-64">
        <div class="p-2 mt-14">
            {{ $slot }}
        </div>
    </main>

    <x-auth.footer /> {{-- Footer --}}
    @bukScripts
</body>

</html>
