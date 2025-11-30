<nav class="w-full bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between">
    <h1 class="text-lg font-semibold">{{ $title ?? 'Dashboard' }}</h1>

    <div class="flex items-center gap-4">
        <span class="text-sm text-gray-600">{{ auth()->user()->name ?? 'Usuário' }}</span>

        <form method="POST">
            @csrf
            <button class="text-sm text-gray-500 hover:text-red-600">
                Sair
            </button>
        </form>
    </div>
</nav>
