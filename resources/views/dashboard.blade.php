<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <title>Nom de l'utilisateur</title>
    @livewireStyles

</head>
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>

<body>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-gray-100">

        <!-- End of Navbar -->

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto"
                                 src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                 alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Jane Doe</h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                        <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.
                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">

                            <li class="flex items-center py-3">
                                <span>Membre depuis</span>
                                <span class="ml-auto">{{ $user->created_at->diffForHumans() }}</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                    <!-- Friends card -->

                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    

                    <livewire:user-profile :user="$user">


                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@livewireScripts
</body>
</html>



