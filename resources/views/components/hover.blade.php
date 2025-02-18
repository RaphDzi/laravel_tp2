{{-- NAVBAR -- gestion des hover des boutons de page  --}}

@props(['activePage' => false])

<a class="rounded-md px-3 py-2 text-sm font-medium aria-current='page' {{ $activePage ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }}" {{ $attributes }}>
    {{ $slot }}
</a>
