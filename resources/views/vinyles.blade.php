<x-navbar>
    <x-slot:titreOnglet>VinylesEnLigne</x-slot:titreOnglet>
    <x-slot:titrePage>Tous les vinyles</x-slot:titrePage>
    <x-slot:contenuPage>

    <x-products>
        <x-slot:productList>
            @foreach ($vinyles as $vinyle)
                <a href="/vinyles/{{ $vinyle['id'] }}" class="group">
                <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-03.jpg"
                class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                <h3 class="mt-4 text-sm text-gray-700">{{ $vinyle['nom'] }}</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $vinyle['prix'] }}€</p>
            </a>
            @endforeach
        </x-slot:productList>
    </x-products>

    </x-slot:contenuPage>
</x-navbar>


