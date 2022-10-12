<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    </head>
    @include('header')
    @include('home/home_layer')
    <body>
        <section>
            <div id="body" class="">
                <iframe class="ml-72 w-[calc(100%-18rem)] h-[calc(100%-10rem)]" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21392.289171037315!2d106.9096271!3d47.91633805000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smn!4v1661854153803!5m2!1sen!2smn" width="600" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                <div class="ml-72 w-[calc(100%-18rem)] h-24">
                    <div class="splide">
                        <div class="splide__arrows">
                            <button class="bg-gray-900 shadow splide__arrow splide__arrow--prev">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </button>
                            <button class="bg-gray-900 shadow splide__arrow splide__arrow--next">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </button>
                        </div>
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="w-full p-4 shadow splide__slide lg:max-w-lg items-center sm:flex">
                                    <a href="#" class="mr-2">
                                        <img class="w-72 rounded-xl sm:rounded-lg" src="../images/logos/ad1.png" alt="ad1">
                                    </a>
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <h2 class="text-2xl font-bold tracking-tight text-gray-900"><a href="#">Оюу СПА Салон</a></h2>
                                            <span class="text-sm text-gray-500">14 өдрийн өмнө</span>
                                        </div>
                                        <p class="font-light text-gray-500 line-clamp-1 text-justify">Хүчилтөрөгчтэй усан эмчилгээ таны арьсанд шаардлагатай эрдэс усыг нөхөж өгснөөр арьсний үрэвслийг ор мөргүй арилах ба тусгай зориулалтын аппаратаар өнгөн давхаргын бохирдлыг 99% соруулж цэвэрлэнэ.</p>
                                        <ul class="flex space-x-4 sm:mt-0 justify-between">
                                            <li>
                                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                                Утас: 77400296
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="inline-flex items-center font-medium text-gray-600 hover:underline">
                                                    Дэлгэрэнгүй
                                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-full p-4 shadow splide__slide lg:max-w-lg items-center sm:flex">
                                    <a href="#" class="mr-2">
                                        <img class="w-72 rounded-xl sm:rounded-lg" src="../images/logos/ad1.png" alt="ad1">
                                    </a>
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <h2 class="text-2xl font-bold tracking-tight text-gray-900"><a href="#">Оюу СПА Салон</a></h2>
                                            <span class="text-sm text-gray-500">14 өдрийн өмнө</span>
                                        </div>
                                        <p class="font-light text-gray-500 line-clamp-1 text-justify">Хүчилтөрөгчтэй усан эмчилгээ таны арьсанд шаардлагатай эрдэс усыг нөхөж өгснөөр арьсний үрэвслийг ор мөргүй арилах ба тусгай зориулалтын аппаратаар өнгөн давхаргын бохирдлыг 99% соруулж цэвэрлэнэ.</p>
                                        <ul class="flex space-x-4 sm:mt-0 justify-between">
                                            <li>
                                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                                Утас: 77400296
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="inline-flex items-center font-medium text-gray-600 hover:underline">
                                                    Дэлгэрэнгүй
                                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-full p-4 shadow splide__slide lg:max-w-lg items-center sm:flex">
                                    <a href="#" class="mr-2">
                                        <img class="w-72 rounded-xl sm:rounded-lg" src="../images/logos/ad1.png" alt="ad1">
                                    </a>
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <h2 class="text-2xl font-bold tracking-tight text-gray-900"><a href="#">Оюу СПА Салон</a></h2>
                                            <span class="text-sm text-gray-500">14 өдрийн өмнө</span>
                                        </div>
                                        <p class="font-light text-gray-500 line-clamp-1 text-justify">Хүчилтөрөгчтэй усан эмчилгээ таны арьсанд шаардлагатай эрдэс усыг нөхөж өгснөөр арьсний үрэвслийг ор мөргүй арилах ба тусгай зориулалтын аппаратаар өнгөн давхаргын бохирдлыг 99% соруулж цэвэрлэнэ.</p>
                                        <ul class="flex space-x-4 sm:mt-0 justify-between">
                                            <li>
                                                <a href="#" class="text-gray-600 hover:text-gray-900">
                                                Утас: 77400296
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="inline-flex items-center font-medium text-gray-600 hover:underline">
                                                    Дэлгэрэнгүй
                                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-full p-4 shadow splide__slide lg:max-w-lg items-center sm:flex">
                                    <a href="#" class="mr-2">
                                        <img class="w-72 rounded-xl sm:rounded-lg" src="../images/logos/ad1.png" alt="ad1">
                                    </a>
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <h2 class="text-2xl font-bold tracking-tight text-gray-900"><a href="#">Оюу СПА Салон</a></h2>
                                            <span class="text-sm text-gray-500">14 өдрийн өмнө</span>
                                        </div>
                                        <p class="font-light text-gray-500 line-clamp-1 text-justify">Хүчилтөрөгчтэй усан эмчилгээ таны арьсанд шаардлагатай эрдэс усыг нөхөж өгснөөр арьсний үрэвслийг ор мөргүй арилах ба тусгай зориулалтын аппаратаар өнгөн давхаргын бохирдлыг 99% соруулж цэвэрлэнэ.</p>
                                        <ul class="flex space-x-4 sm:mt-0 justify-between">
                                            <li>
                                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                                Утас: 77400296
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="inline-flex items-center font-medium text-gray-600 hover:underline">
                                                    Дэлгэрэнгүй
                                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
</html>