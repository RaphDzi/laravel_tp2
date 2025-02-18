<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>{{ $titreOnglet }}</title>
</head>
<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center">
                <div class="shrink-0">
                  <img class="size-8" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">
                    <x-hover :activePage="request()->is('home')" href="{{ url('home') }}" class="">Accueil</x-hover>
                    <x-hover :activePage="request()->is('vinyles')" href="{{ url('vinyles') }}" class="">vinyles</x-hover>
                    <x-hover :activePage="request()->is('contact')" href="{{ url('contact') }}" class="">Contact</x-hover>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>




          <!-- Mobile menu, show/hide based on menu state. -->
          <div class="md:hidden bg-black" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
              <x-hover href="{{ url('home') }}" href="#" :activePage="request()->is('home')" class="">Accueil</x-hover>
              <x-hover href="{{ url('vinyles') }}" href="#" :activePage="request()->is('vinyles')" class="">vinyles</x-hover>
              <x-hover href="{{ url('contact') }}" href="#" :activePage="request()->is('Contact')" class="">Contact</x-hover>
            </div>
            </div>
          </div>
        </nav>




        <header class="bg-white shadow-sm">
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $titrePage }}</h1>
          </div>
        </header>
        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $contenuPage }}
          </div>
        </main>
      </div>

</body>
</html>
