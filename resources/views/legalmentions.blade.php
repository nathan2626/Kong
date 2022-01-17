<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Legal Mentions</title>
</head>
<body>
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

<!--
  This component uses @tailwindcss/typography

  yarn add @tailwindcss/typography
  npm install @tailwindcss/typography

  plugins: [require('@tailwindcss/typography')]
-->

<div class="flex items-center justify-center h-auto static bg-gray-100 " id="call-to-action" >

    <article>
        <div class="max-w-screen-xl pt-0 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto space-y-8 max-w-prose">
                <h1 class="text-3xl font-bold leading-tight text-gray-900 sm:text-5xl pt-12">
                    Mentions légales
                </h1>

                <div class="">
                    <h2 class="font-bold ">IDENTITÉ</h2>
                </div>

                <div class="prose prose-lg max-w-none">
                    <p>
                        Nom du site web : < Nom du site > <br>
                        Adresse : < https://nomdusite.domaine > <br>
                        Propriétaire : < propriétaire > <br>
                        Responsable de publication : < nom du contact > <br>

                        Conception et réalisation : < concepteur > <br>
                        Animation : < animateur > <br>
                        Hébergement : < hébergeur > <br>
                    </p>


                    <div class=" pt-8 pb-4  ">
                        <h2 class="font-bold ">CONDITIONS D’UTILISATION</h2>
                    </div>

                    <div class="prose prose-lg max-w-none">
                    <p>
                        L’utilisation du présent site implique l’acceptation pleine et entière des conditions générales d’utilisation décrites ci-après. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment.
                    </p>
                    </div>


                    <div class=" pt-8 pb-4  ">
                        <h2 class="font-bold ">INFORMATIONS </h2>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p>
                            Les informations et documents du site sont présentés à titre indicatif, n’ont pas de caractère exhaustif, et ne peuvent engager la responsabilité du propriétaire du site.

                            Le propriétaire du site ne peut être tenu responsable des dommages directs et indirects consécutifs à l’accès au site.
                        </p>
                    </div>


                    <div class=" pt-8 pb-4  ">
                        <h2 class="font-bold ">INTERACTIVITÉ</h2>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p>
                            Les utilisateurs du site peuvent y déposer du contenu, apparaissant sur le site dans des espaces dédiés (notamment via les commentaires). Le contenu déposé reste sous la responsabilité de leurs auteurs, qui en assument pleinement l’entière responsabilité juridique.

                            Le propriétaire du site se réserve néanmoins le droit de retirer sans préavis et sans justification tout contenu déposé par les utilisateurs qui ne satisferait pas à la charte déontologique du site ou à la législation en vigueur.
                        </p>
                    </div>


                    <div class=" pt-8 pb-4  ">
                        <h2 class="font-bold ">PROPRIÉTÉ INTELLECTUELLE </h2>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p>
                            Sauf mention contraire, tous les éléments accessibles sur le site (textes, images, graphismes, logo, icônes, sons, logiciels, etc.) restent la propriété exclusive de leurs auteurs, en ce qui concerne les droits de propriété intellectuelle ou les droits d’usage. 1

                            Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’auteur.23

                            Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient est considérée comme constitutive d’une contrefaçon et passible de poursuites. 4

                            Les marques et logos reproduits sur le site sont déposés par les sociétés qui en sont propriétaires.
                        </p>
                    </div>


                    <div class=" pt-8 pb-4  ">
                        <h2 class="font-bold ">LIENS </h2>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p>
                            Liens sortants
                            Le propriétaire du site décline toute responsabilité et n’est pas engagé par le référencement via des liens hypertextes, de ressources tierces présentes sur le réseau Internet, tant en ce qui concerne leur contenu que leur pertinence.

                            Liens entrants
                            Le propriétaire du site autorise les liens hypertextes vers l’une des pages de ce site, à condition que ceux-ci ouvrent une nouvelle fenêtre et soient présentés de manière non équivoque afin d’éviter :

                            tout risque de confusion entre le site citant et le propriétaire du site
                            ainsi que toute présentation tendancieuse, ou contraire aux lois en vigueur.
                            Le propriétaire du site se réserve le droit de demander la suppression d’un lien s’il estime que le site source ne respecte pas les règles ainsi définies.
                        </p>
                    </div>


                    <div class=" pt-8 pb-4  ">
                        <h2 class="font-bold ">CONFIDENTIALITÉ
                        </h2>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p>
                            Tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une preuve d’identité. 5678

                            Le site ne recueille pas d’informations personnelles, et n’est pas assujetti à déclaration à la CNIL. 9
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </article>


</div>
</body>
</html>
