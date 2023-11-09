{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                        <x-application-logo />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #f6fcfc">
    <div class="container-xxl">
        <a class="navbar-brand" href="#">
            <x-application-logo />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-icons">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="1.5rem" height="1.5rem" viewBox="0 0 46 47">
                            <image id="N_D_Icon" data-name="N D Icon" width="1.5rem" height="1.5rem"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="1.5rem" height="1.5rem">
                            <image x="0px" y="0px" width="1.5rem" height="1.5rem"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="1.5rem" height="1.5rem">
                            <image x="0px" y="0px" width="1.5rem" height="1.5rem"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="1.5rem" height="1.5rem">
                                <image x="0px" y="0px" width="1.5rem" height="1.5rem"
                                    xlink:href="data:img/png;base64,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" />
                            </svg>
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
