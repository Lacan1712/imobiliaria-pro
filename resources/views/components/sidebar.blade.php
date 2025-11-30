<aside class="w-64 bg-white border-r border-gray-200 px-4 py-6 hidden md:flex flex-col gap-8">

    {{-- Logo --}}
    <div class="flex items-center gap-2 px-2">
        <div class="w-7 h-7 bg-purple-600 rounded-md"></div>
        <span class="text-xl font-semibold tracking-tight">Plataforma</span>
    </div>

    {{-- Menu --}}
    <nav class="flex flex-col gap-1">

        <x-ui.nav-item label="Kanban" href="/kanban" active="kanban" />

    </nav>

</aside>
