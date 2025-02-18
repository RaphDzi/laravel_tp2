<x-navbar>
    <x-slot:titreOnglet>VinylesEnLigne</x-slot:titreOnglet>
    <x-slot:titrePage>Vinyle</x-slot:titrePage>
    <x-slot:contenuPage>




    </x-slot:contenuPage>
</x-navbar>

<x-product>
    <x-slot:name>{{ $vinyle['nom'] }}</x-slot:name>
    <x-slot:price>{{ $vinyle['prix'] }}</x-slot:price>
    <x-slot:description>{{ $vinyle['description'] }}</x-slot:description>
</x-product>
