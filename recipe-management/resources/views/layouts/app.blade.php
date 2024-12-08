<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<header class="bg-blue-600 text-white p-4">
    <h1>{{ config('app.name', 'Recipe Management') }}</h1>
    <nav>
        <a href="{{ route('recipes.index') }}" class="px-2">レシピ一覧</a>
        <a href="{{ route('recipes.create') }}" class="px-2">新規レシピ作成</a>
        <a href="{{ route('logout') }}" class="px-2">ログアウト</a>
    </nav>
</header>
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</div>
<footer class="bg-gray-800 text-white p-4 text-center">
    &copy;  レシピ  管理 アプリ
</footer>
</body>
</html>
