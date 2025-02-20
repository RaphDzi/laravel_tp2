<x-navbar>
    <x-slot:titreOnglet>VinylesEnLigne</x-slot:titreOnglet>
    <x-slot:titrePage>Tous les vinyles</x-slot:titrePage>
    <x-slot:contenuPage>

    @foreach ($vinyls as $vinyl)
    <a href="/vinyls/{{$vinyl['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
        <div class="font-bold text-blue-500 text-sm">
            {{ $vinyl->artist->name }}
        </div>
        <div>
            titre : <strong>{{$vinyl['title']}}:</strong>  année de sortie : {{$vinyl['release_year']}}.
        </div>
    </a>
@endforeach


{{ $vinyls->links() }}

    </x-slot:contenuPage>
</x-navbar>
