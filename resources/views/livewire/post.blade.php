<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/app.css">





<div class="block p-4 bg-white border border-gray-100 shadow-sm rounded-xl overflow-y-auto w-96 z-0 pt-4 m-4" href="">
    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 ">
                                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                    </span>
    <button class="pl-60 text-white  rounded-full space-x-8">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             width="20" height="20"
             viewBox="0 0 172 172"
             style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#eab305"><path d="M107.33488,86l46.8872,-70.3308c0.70176,-1.05608 0.77056,-2.41144 0.172,-3.52944c-0.59856,-1.118 -1.76472,-1.81976 -3.03408,-1.81976h-25.2496c-1.12488,0 -2.18096,0.5504 -2.82424,1.47576l-37.28616,53.56424l-37.2896,-53.56424c-0.64328,-0.92536 -1.69592,-1.47576 -2.8208,-1.47576h-25.2496c-1.26936,0 -2.43552,0.69832 -3.03408,1.81632c-0.59856,1.118 -0.52976,2.4768 0.172,3.52944l46.8872,70.33424l-46.8872,70.3308c-0.70176,1.05608 -0.77056,2.41144 -0.172,3.52944c0.59856,1.118 1.76472,1.81976 3.03408,1.81976h25.2496c1.12488,0 2.18096,-0.5504 2.82424,-1.47576l37.28616,-53.56424l37.2896,53.56424c0.64328,0.92536 1.69592,1.47576 2.8208,1.47576h25.2496c1.26936,0 2.43552,-0.69832 3.03408,-1.81632c0.59856,-1.118 0.52976,-2.4768 -0.172,-3.52944z"></path></g></g></svg>
    </button>
    <a href=""><p class="text-xs font-medium text-gray-500 "> {{ $post->user->name }}</p></a>

 <h5 class="mt-1 text-xl font-bold text-gray-900">
     {{ $post->body }}
 </h5>
 <dl class="flex items-center space-x-8 h-16">
     <div class="flex items-center">

         <!--button ajouter like-->

         <button class="p-2 text-white bg-blue-600 rounded-full">
     <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="20" height="20"
          viewBox="0 0 172 172"
          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#eab305"><path d="M74.53333,11.46667c-3.1648,0 -5.73333,2.56853 -5.73333,5.73333v26.10234l-12.3625,22.44063c-1.04756,-1.66189 -2.873,-2.6718 -4.8375,-2.6763h-34.4c-1.59107,-0.00066 -3.11087,0.65981 -4.19596,1.82346c-1.08508,1.16365 -1.63788,2.72585 -1.52618,4.31299l5.73333,80.26667c0.21199,3.00357 2.7111,5.3315 5.72214,5.33021h28.66667c3.1663,-0.00032 5.73302,-2.56703 5.73333,-5.73333h9.45104c2.03779,3.46414 5.6705,5.73333 9.77578,5.73333h55.30651c6.33287,0 11.46667,-5.1338 11.46667,-11.46667c-0.00448,-2.04055 -0.5534,-4.04294 -1.59011,-5.80052c7.38798,-0.66061 13.05148,-6.84869 13.05677,-14.26614c-0.00591,-3.50609 -1.29669,-6.88842 -3.62812,-9.50703c5.62025,-2.07858 9.35431,-7.43401 9.36146,-13.4263c-0.00528,-4.51547 -2.13807,-8.76444 -5.75573,-11.46667c3.61766,-2.70222 5.75044,-6.9512 5.75573,-11.46667c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333h-51.55521c1.49748,-6.68609 2.82188,-13.81605 2.82188,-17.2c0,-13.13507 -10.39982,-34.4 -17.45755,-34.4zM23.35885,74.53333h22.50781v68.8h-17.59193z"></path></g></g></svg>
   </button>

         <span
             class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
         >
     <dt>{{ $post->likes }} {{ $post->likes > 1 ? 'likes' : 'like' }}</dt>

   </span>
     </div>


     <!--button commentaire dropdown-->

     <div x-data="{ dropdownOpen: false }" class="relative my-15">
         <button
             @click="dropdownOpen = !dropdownOpen"
             class="p-2 text-white bg-blue-600 rounded-full"
         >
             <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="20" height="20"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#eab305"><path d="M157.60217,35.83333c0,-7.88333 -6.37833,-14.33333 -14.26167,-14.33333h-114.66667c-7.88333,0 -14.33333,6.45 -14.33333,14.33333v86c0,7.88333 6.45,14.33333 14.33333,14.33333h100.33333l19.98783,19.98783c3.2035,3.2035 8.67167,0.93167 8.67167,-3.59767zM93.16667,114.66667h-35.83333c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667c0,-3.956 3.21067,-7.16667 7.16667,-7.16667h35.83333c3.956,0 7.16667,3.21067 7.16667,7.16667c0,3.956 -3.21067,7.16667 -7.16667,7.16667zM114.66667,86h-57.33333c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667c0,-3.956 3.21067,-7.16667 7.16667,-7.16667h57.33333c3.956,0 7.16667,3.21067 7.16667,7.16667c0,3.956 -3.21067,7.16667 -7.16667,7.16667zM114.66667,57.33333h-57.33333c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667c0,-3.956 3.21067,-7.16667 7.16667,-7.16667h57.33333c3.956,0 7.16667,3.21067 7.16667,7.16667c0,3.956 -3.21067,7.16667 -7.16667,7.16667z"></path></g></g></svg>
         </button>

         <div
             x-show="dropdownOpen"
             @click="dropdownOpen = false"
             class="fixed inset-0 h-full w-full z-10 "
         ></div>
         <div
             x-show="dropdownOpen"
             class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20"
         >
             <a
                 href="#"
                 class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
             >
                 your profile
             </a>

         </div>
     </div>



     <!--button ajouter commentaire-->
     <div class="flex items-center">

   <button class="p-2 text-white bg-blue-600 rounded-full modal-open" type="button" data-modal-toggle="defaultModal">
     <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="20" height="20"
          viewBox="0 0 172 172"
          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M157.66667,86c0,39.57792 -32.08875,71.66667 -71.66667,71.66667c-39.57792,0 -71.66667,-32.08875 -71.66667,-71.66667c0,-39.57792 32.08875,-71.66667 71.66667,-71.66667c39.57792,0 71.66667,32.08875 71.66667,71.66667z" fill="#eab305"></path><path d="M75.25,50.16667h21.5v71.66667h-21.5z" fill="#ffffff"></path><path d="M50.16667,75.25h71.66667v21.5h-71.66667z" fill="#ffffff"></path></g></g></svg>
   </button >

         <span
             class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
         >
     <dt>Ajouter</dt>

   </span>

     </div>


     <!--modal-->
     <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center border-gray-400">
         <div class="modal-overlay absolute "></div>

         <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

             <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                 <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                     <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                 </svg>
                 <span class="text-sm">(Esc)</span>
             </div>

             <!-- Add margin if you want to see some of the overlay behind the modal-->
             <div class="modal-content py-4 text-left px-6">
                 <!--Title-->
                 <div class="flex justify-between items-center pb-3">
                     <p class="text-2xl font-bold">Nouveau commentaire !</p>
                     <div class="modal-close cursor-pointer z-50">
                         <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                             <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                         </svg>
                     </div>
                 </div>

                 <!--Body-->
                 <textarea name="body" id="body" cols="40" rows="5" class="form-control border-b-2 focus:border-transparent focus:ring-0 focus:outline-none" ></textarea>


                 <!--Footer-->
                 <div class="flex justify-end pt-2">
                     <button class="px-4 bg-transparent p-3 rounded-lg text-black hover:bg-blue-600 hover:text-white mr-2">Annuler</button>
                     <button class="modal-close px-4 bg-blue-600 p-3 rounded-lg text-white hover:bg-indigo-400">Ajouter </button>
                 </div>

             </div>
         </div>
     </div>



 </dl>
</div>

<script>

    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"


    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event){
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal () {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }


</script>

</script>
