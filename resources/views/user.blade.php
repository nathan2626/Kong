@extends('layouts.app')
@section('content')


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
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $user->firstname }} {{ $user->lastname }}</h1>
                        <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ $user->bio }}</p>
                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">

                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">Nov 07, 2016</span>
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
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                            <span class="tracking-wide">About</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">First Name</div>
                                    <div class="px-4 py-2">{{ $user->firstname }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Last Name</div>
                                    <div class="px-4 py-2">{{ $user->lastname }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email</div>
                                    <div class="">
                                        <div class="px-4 py-2">{{ $user->email }}</div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">ID</div>
                                    <div class="px-4 py-2">
                                        <div class="px-4 py-2">{{ $user->id }}</div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Membre depuis</div>
                                        <div class="px-4 py-2">{{ $user->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of about section -->

                    <div class="my-4"></div>

                    <!-- Experience and education -->

                    <!-- End of profile tab -->
                </div>
            </div>
        </div>
    </div>






