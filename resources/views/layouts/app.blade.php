<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#f5f6f8]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Dashboard' }} — Plataforma</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full text-gray-800">

<div class="min-h-screen flex">

    {{-- Sidebar --}}
    <x-sidebar />

    {{-- Conteúdo principal --}}
    <div class="flex-1 flex flex-col min-w-0">

        {{-- Topbar --}}
        <x-ui.top-bar :title="$title ?? 'Dashboard'" />

        <main class="flex-1 px-8 py-6">
            <x-ui.container>
            </x-ui.container>
        </main>

    </div>
</div>

</body>
</html>
