<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">


</head>
<style>
    textarea {
        border: none;
        background-color: transparent;
        resize: none;
        outline: none;
    }
</style>
<body>


<nav class="">
    <header class="text-white bg-gray-900">
        <div class="px-4 mx-auto sm:pr-0 max-w-screen-2xl">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-10">
                    <a href="/">
                <span class="w-20 h-20  rounded-lg bg-yellow-500">
                    <img class="inset-0 h-10 w-10 object-fill object-scale-down object-center"
                         src="https://i.ibb.co/0hk1b2K/gorilla-Kong.png" alt="gorilla" border="0" />
                </span>
                    </a>

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
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-black-900 uppercase bg-yellow-500">Mon Compte</a>
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
                            <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('register') }}">Connexion</a>
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
</nav>


<div
    class="relative text-white bg-center bg-no-repeat bg-cover w-full"
    style="background-image: url(https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80)"
    role="banner"
>
    <span class="absolute inset-0 bg-black opacity-60"></span>

    <div class="relative max-w-screen-xl px-4 py-24 mx-auto sm:py-36 sm:px-6 lg:px-8 lg:h-screen lg:flex lg:items-center">
        <div class="w-1/2 mx-auto">
            <div class="w-full shadow-2xl subpixel-antialiased rounded h-64 bg-black border-black mx-auto">
                <div class="flex items-center h-6 rounded-t bg-gray-100 border-b border-gray-500 text-center text-black" id="headerTerminal">
                    <div class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3" id="closebtn">
                    </div>
                    <div class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3" id="minbtn">
                    </div>
                    <div class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3" id="maxbtn">
                    </div>
                    <div class="mx-auto pr-16" id="terminaltitle">
                        <p class="text-center text-sm">Terminal</p>
                    </div>

                </div>
                <div class="pl-1 pt-1 h-auto  text-green-200 font-mono text-xs bg-black" id="console">
                    <p class="pb-1">Last login: Wed Sep 25 09:11:04 on ttys002</p>
                    <p class="pb-1">Kong:Devprojects $</p>
                    <textarea id="text-input-textarea" class="pb-1 bg-black border-black border-transparent focus:border-transparent focus:ring-0 focus:outline-none" cols="70" rows="8" >Kong: </textarea>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
