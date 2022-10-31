<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    </head>
    @include('home/home_layer')
    <body>
        <section>
            <div id="body" class="h-screen w-[80%] ml-[20%]">
                <button type="button" onclick="sidebar_button()" class="fixed top-1.5 text-white bg-sky-700 hover:bg-sky-800 font-medium rounded-r-lg text-sm p-2.5 text-center inline-flex items-center" id="sidebar_button">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Open menu</span>
                </button>
                <div class="fixed justify-center items-center space-x-4 top-1.5 right-2.5">
                    <div class="w-56 space-x-4 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center">
                        <button type="button">
                            <img src="/images/logos/apartment.png" class="h-5 w-5" alt="Logo">
                        </button>
                        <button type="button">
                            <img src="/images/logos/bus.png" class="h-5 w-5" alt="Logo">
                        </button>
                        <button type="button">
                            <img src="/images/logos/road.png" class="h-5 w-5" alt="Logo">
                        </button>
                        <button type="button">
                            <img src="/images/logos/danger.png" class="h-5 w-5" alt="Logo">
                        </button>
                        <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" type="button" class="">
                            <img src="/images/logos/layer.png" class="h-5 w-5" alt="Logo">
                        </button>
                        <div id="dropdownDefaultCheckbox" class="hidden z-10 w-48 bg-gray-50 rounded divide-y divide-gray-100 shadow">
                            <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                            <li>
                                <div class="flex items-center">
                                <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <input checked id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="checkbox-item-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="w-12 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center">
                        <!-- <img src="/images/logos/one.png" class="h-6 w-6" alt="Logo">  -->
                        <span class="font-semibold text-2xl">1</span>
                    </button>
                    <button type="button" class="w-32 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center">
                        <img src="/images/logos/login.png" class="h-5 w-5" alt="Logo"> 
                        <span class="ml-3 font-semibold">Нэвтрэх</span>
                    </button>
                    <button type="button" class="w-12 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center">
                        <img src="/images/logos/menu.png" class="h-5 w-5" alt="Logo"> 
                        <span class="sr-only">Right bar</span>
                    </button>
                    

                </div>
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21392.289171037315!2d106.9096271!3d47.91633805000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smn!4v1661854153803!5m2!1sen!2smn" width="600" width="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
        </section>
    </body>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/plugins/global/plugins.bundle.js"></script>
    <script src="/js/scripts.bundle.js"></script> 
    <script src="./assets/vendor/preline/dist/preline.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/js/splide.min.js"></script>
    <script>
      var splide = new Splide('.splide', {
        type: 'loop',
        autoplay: true,
      });

      splide.mount();
    </script>
     <script>
        function closeNav(){
            document.getElementById("sidebar").style.width = "0%";
            document.getElementById("body").style.marginLeft= "0%";
            document.getElementById("body").style.width = "100%";
            document.getElementById("sidebar").style.visibility = "hidden";
        }
        $("sidebar_button()" ).trigger("click" 
        );
        function sidebar_button(){

        var Changewidth = document.getElementById("sidebar")
        var Body = document.getElementById("body")
        var Sidebar = document.getElementById("sidebar")

            if(Changewidth.style.width == "0%") {
                Changewidth.style.width = "20%";
                Body.style.width = "80%";
                Body.style.marginLeft = "20%";
                Sidebar.style.visibility = 'visible';
            }
            
        } 
    </script>
</html>