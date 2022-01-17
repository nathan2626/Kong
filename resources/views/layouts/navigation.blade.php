<head>    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<header class="text-white bg-gray-900">
    <div class="px-4 mx-auto sm:pr-0 max-w-screen-2xl">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-10">
                <span class="w-20 h-10 bg-gray-600 rounded-lg"></span>

                <nav class="hidden space-x-8 text-sm font-medium lg:flex">
                    <a href="/">Home</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="/timeline">Timeline</a>
                            <a href="/legalmentions">Legal Mentions</a>
                        @else
                            <a href="/legalmentions">Legal Mentions</a>
                        @endauth
                    @endif


                </nav>
            </div>

            <div class="items-center justify-end hidden space-x-8 sm:flex bg-yellow-500">


                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard', Auth::user()->id) }}" class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-black-900 uppercase bg-yellow-500">Mon Compte</a>
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">

                                <button class="flex items-center text-sm font-medium text-black-500 hover:text-black hover:border-black-300 focus:outline-none focus:text-black-700 focus:border-gray-300 transition duration-150 ease-in-out">


                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="trigger">

                                <button class="flex items-center text-sm font-medium text-black-500 hover:text-black hover:border-black-300 focus:outline-none focus:text-black-700 focus:border-gray-300 transition duration-150 ease-in-out">

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a :href="route('logout')"
                                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>


                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>

                        </x-dropdown>

                    @else
                        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('login') }}">Connexion</a>
                    @endauth



                @endif
                {{--
                                        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url('/admin') }}">Mon Compte</a>
                --}}



            </div>

            <div class="sm:hidden">
                <button class="p-2 text-gray-100 bg-gray-800 rounded-lg" type="button">
                    <span class="sr-only">Open menu</span>

                    <svg
                        aria-hidden="true"
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>


{{--
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
--}}
