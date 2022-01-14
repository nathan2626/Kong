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

</head>
<body>
@extends('layouts.navigation')
{{--<header class="text-white bg-gray-900">
    <div class="px-4 mx-auto sm:pr-0 max-w-screen-2xl">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-10">
                <span class="w-20 h-10 bg-gray-600 rounded-lg"></span>

                <nav class="hidden space-x-8 text-sm font-medium lg:flex">
                    <a href="">Home</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="">Timeline</a>
                            <a href="">Legal Mentions</a>
                            @else
                            <a href="">Legal Mentions</a>
                        @endauth
                    @endif


                </nav>
            </div>

            <div class="items-center justify-end hidden space-x-8 sm:flex bg-yellow-500">


                @if (Route::has('login'))
                    @auth
                            <a href="{{ url('/admin') }}" class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-gray-900 uppercase bg-yellow-500">Mon Compte</a>
                    @else
                            <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('register') }}">Connexion</a>
                    @endauth



                    @endif
--}}{{--
                        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url('/admin') }}">Mon Compte</a>
--}}{{--



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
</header>--}}
</body>
</html>
