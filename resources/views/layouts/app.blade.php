<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('\fonts\MYRIADPRO\style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ambiente-sostenible_woff/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/open_sans/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/EmojiOne/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Raleway/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="container-xxl" style="background: #f6fcfc">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            @php
                $cRN = Route::currentRouteName();
                $menuLinks = [
                    [
                        'route' => 'order_now',
                        'logo' => 'Order Now',
                        'name' => 'Order Now',
                    ],
                    [
                        'route' => 'order_now',
                        'logo' => 'Services',
                        'name' => 'Services',
                    ],
                    [
                        'route' => 'order_now',
                        'logo' => 'Get Support',
                        'name' => 'Get Support',
                    ],
                    [
                        'route' => 'order_now',
                        'logo' => 'Marketplace Products',
                        'name' => 'Our PRODUCTS',
                    ],
                    [
                        'route' => 'dashboard',
                        'logo' => 'Dashboard',
                        'name' => 'Dashboard',
                    ],
                ];
            @endphp
            <header class=" mx-4" style="background: #0056b30d;">
                <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
                    <div class="row menu-links">
                        @foreach ($menuLinks as $menuLink)
                            @php
                                $route = route($menuLink['route']);
                                $color = $cRN == $menuLink['route'] ? ' White' : ' Blue';
                                $logo = $menuLink['logo'] . $color . '.svg';
                                $imgSrc = asset('images/svg/' . $logo);
                            @endphp
                            <div class="col">
                                <a href="{{ $route }}" class="text-uppercase">
                                    <img src="{{ $imgSrc }}" alt="{{ $menuLink['name'] }}">
                                    <h6>
                                        {{ $menuLink['name'] }}

                                    </h6>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </header>
            <div class="shadow" style="min-height: 2rem"></div>
        @endif

        <!-- Page Content -->
        <main class="mx-4 ">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('js/js.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
