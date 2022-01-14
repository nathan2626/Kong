<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Timeline</title>
</head>
<body>

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



<section class="relative flex flex-wrap">
    <div
        class="flex items-center w-full px-4 py-12  lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24 lg:h-screen lg:items-center"
    >
        <div class="max-w-lg mx-auto text-center lg:text-left lg:pr-12">
            <form method="post" class="mb-4" wire:submit.prevent="createPost">
                @csrf
        
                <div class="form-group">
                    <textarea name="body" id="body" cols="30" rows="3" class="form-control @error('body') is-invalid @enderror" wire:model="body"></textarea>
                    @error('body')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"  class="bg-gray-100 hover:bg-blue-dark font-bold py-2 px-4 rounded">
                    Create
                </button>
            </form>
        </div>
    </div>

    <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
        @foreach ($posts as $post)
        <a class="block p-4 bg-white border border-gray-100 shadow-sm rounded-xl" href="">
             <p class="text-xs font-medium text-gray-500"> {{ $post->user->name }}</p>

            <h5 class="mt-1 text-xl font-bold text-gray-900">
                {{ mb_strimwidth($post->body, 0, 35, "..."); }}
            </h5>
            <dl class="flex items-center mt-4 space-x-8">
                <div class="flex items-center">
              <span class="p-2 text-white bg-green-600 rounded-full">
                <svg
                    class="w-4 h-4"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
              </span>

                    <span
                        class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
                    >
                <dt>{{ $post->likes }} {{ $post->likes > 1 ? 'likes' : 'like' }}</dt>
                <dd class="sr-only">Employment type</dd>
              </span>
                </div>

                <div class="flex items-center">
              <span class="p-2 text-white bg-green-600 rounded-full">
                <svg
                    class="w-4 h-4"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                      d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
                  ></path>
                </svg>
              </span>

                    <span
                        class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
                    >
                <dt>{{ $post->comments > 1 ? 'comments' : 'comment' }}</dt>
                <dd class="order-first">{{ $post->comments }} </dd>
              </span>
                </div>
            </dl>
        </a>

        @endforeach

    </div>
</section>


{{--<div>
    <section class="bg-white mr-0">
        <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 m-0">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-8 gap-x-16 lg:items-start">

                <div class="lg:sticky lg:top-16">
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 sm:grid-rows-2">
                        <div class="relative h-64 col-span-2 lg:h-96 sm:row-span-2">
                            <img
                                class="absolute inset-0 object-cover w-full h-full rounded-lg"
                                src="https://www.hyperui.dev/photos/university-1.jpeg"
                                alt=""
                            />
                        </div>

                        <div class="relative h-32 col-span-1 sm:h-auto">
                            <img
                                class="absolute inset-0 object-cover w-full h-full rounded-lg"
                                src="https://www.hyperui.dev/photos/university-2.jpeg"
                                alt=""
                            />
                        </div>

                        <div class="relative h-32 col-span-1 sm:h-auto">
                            <img
                                class="absolute inset-0 object-cover w-full h-full rounded-lg"
                                src="https://www.hyperui.dev/photos/university-3.jpeg"
                                alt=""
                            />
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-1 px-4 pt-4  md:grid-cols-3 lg:grid-cols-1 gap-y-8"
                    >
                        <div class="md:col-span-2 md:pr-8">
                            <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </h2>

                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Molestias laborum, voluptates nostrum quisquam reiciendis impedit
                                vero. Ipsum nobis deleniti adipisci?
                            </p>

                            <dl class="flex items-center mt-6">
                                <div class="flex items-center">
                <span class="p-2 text-white bg-green-600 rounded-full">
                  <svg
                      class="w-4 h-4"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    ></path>
                  </svg>
                </span>

                                    <span
                                        class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
                                    >
                  <dt>Reviews</dt>
                  <dd class="order-first">12,400</dd>
                </span>
                                </div>

                                <div class="flex items-center ml-3">
                <span class="p-2 text-white bg-green-600 rounded-full">
                  <svg
                      class="w-4 h-4"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
                    ></path>
                  </svg>
                </span>

                                    <span
                                        class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
                                    >
                  <dt>Students</dt>
                  <dd class="order-first">1,520,404</dd>
                </span>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <div class="flex items-stretch md:justify-end lg:justify-start">
                                <a
                                    class="inline-flex items-center justify-center w-12 rounded-lg  bg-rose-50 text-rose-600"
                                    href=""
                                >
                                    <svg
                                        class="w-6 h-6"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </a>

                                <a
                                    class="inline-block px-5 py-3 ml-3 font-medium text-white bg-blue-600 rounded-lg "
                                    href=""
                                >Send a message</a
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <a
                        class="block p-4 bg-white border border-gray-100 shadow-sm rounded-xl"
                        href=""
                    >
                        <p class="text-xs font-medium text-gray-500">Lorem, ipsum.</p>

                        <h5 class="mt-1 text-xl font-bold text-gray-900">
                            Lorem ipsum dolor sit amet consectetur.
                        </h5>

                        <dl class="flex items-center mt-6 space-x-8">
                            <div class="flex items-center">
              <span class="p-2 text-white bg-green-600 rounded-full">
                <svg
                    class="w-4 h-4"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
              </span>

                                <span
                                    class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
                                >
                <dt>Full time</dt>
                <dd class="sr-only">Employment type</dd>
              </span>
                            </div>

                            <div class="flex items-center">
              <span class="p-2 text-white bg-green-600 rounded-full">
                <svg
                    class="w-4 h-4"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                      d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
                  ></path>
                </svg>
              </span>

                                <span
                                    class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
                                >
                <dt>Points</dt>
                <dd class="order-first">100</dd>
              </span>
                            </div>
                        </dl>
                    </a>

                </div>
            </div>
        </div>
    </section>
</div>--}}

</body>
</html>
