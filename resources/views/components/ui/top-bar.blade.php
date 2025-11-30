@props(['title'])

<header class="bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between shadow-sm">

    <h1 class="text-lg font-semibold tracking-tight">{{ $title }}</h1>

    <div class="flex items-center gap-4">

        <span class="text-sm text-gray-600">{{ auth()->user()->name ?? 'Usuário' }}</span>

        <form method="POST">
            @csrf
            <button
                class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-sm rounded-md transition">
                Sair
            </button>
        </form>
    </div>

</header>
