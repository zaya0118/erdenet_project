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
            <div id="body" class="h-screen w-[calc(100%-384px)] ml-[384px]">
                <button type="button" onclick="sidebar_button()" class="fixed top-1.5 text-white bg-sky-700 hover:bg-sky-800 font-medium rounded-r-lg text-sm p-2.5 text-center inline-flex items-center" id="sidebar_button">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Open layer</span>
                </button>
                <div class="fixed flex space-x-4 top-1.5 right-2.5">
                    <div class="w-72 space-x-4 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center border-4 border-sky-700/50">
                        <a class="hover:bg-sky-700/20 p-2 rounded-full" onclick="layerMore('build_bar')"> 
                            <img src="/images/logos/apartment.png" class="h-5 w-5" alt="Logo">
                        </a>
                        <a class="hover:bg-sky-700/20 p-2 rounded-full" onclick="layerMore('danger_bar')"> 
                            <img src="/images/logos/danger.png" class="h-5 w-5" alt="Logo">
                        </a>
                        <a type="button" class="hover:bg-sky-700/20 p-2 rounded-full">
                            <img src="/images/logos/bus.png" class="h-5 w-5" alt="Logo">
                        </a>
                        <a type="button" class="hover:bg-sky-700/20 p-2 rounded-full">
                            <img src="/images/logos/road.png" class="h-5 w-5" alt="Logo">
                        </a>
                        <a id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" type="button" class="hover:bg-sky-700/20 p-2 rounded-full">
                            <img src="/images/logos/layer.png" class="h-5 w-5" alt="Logo">
                        </a>
                        <div id="dropdownDefaultCheckbox" class="hidden z-10 w-60 bg-gray-50 rounded divide-y divide-gray-100 shadow">
                            <div id="accordion-flush" data-accordion="collapse" class="overflow-y-auto" data-active-classes="bg-whitetext-gray-900" data-inactive-classes="text-gray-500">
                                <h2 id="accordion-flush-heading-1">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                        <div class="grow">
                                            <p class="text-base font-semibold">?????? ????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900">?????????? ??????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900">???????????? ??????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-2">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-2">
                                        <div class="grow">
                                            <p class="text-base font-semibold">?????????? ????????????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????????????? ?????????? ????????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-4" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????????????????? ?????????? ????????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-5" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">????????????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-6" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????? ??????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-3">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-3" aria-expanded="true" aria-controls="accordion-flush-body-3">
                                        <div class="grow">
                                            <p class="text-base font-semibold">???????????? ?????????????? ??????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-7" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????? ???? ?????????? ??????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-8" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????? ????????????, ?????????? ?????????????? ??????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-9" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????? ???????????? ?????????????????????? ??????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-4">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-4" aria-expanded="true" aria-controls="accordion-flush-body-4">
                                        <div class="grow">
                                            <p class="text-base font-semibold">??????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-10" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????? ?????????? ??????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????? ??????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">???????? ??????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">???????????? ??????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-5">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-5" aria-expanded="true" aria-controls="accordion-flush-body-5">
                                        <div class="grow">
                                            <p class="text-base font-semibold">???????????????????? ????????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????????? ????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-15" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">???????????? ??????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">???????????? ????????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-6">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-6" aria-expanded="true" aria-controls="accordion-flush-body-6">
                                        <div class="grow">
                                            <p class="text-base font-semibold">??????????, ????????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">??????????????????, ?????????? ???????????? ????????????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-18" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">???? ??????????????, ???????????????? ????????????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-19" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">????????????, ?????? ?????????????????? ?????????????? ????????????????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-7">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-7" aria-expanded="true" aria-controls="accordion-flush-body-7">
                                        <div class="grow">
                                            <p class="text-base font-semibold">?????????????????? ??????????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-7" class="hidden" aria-labelledby="accordion-flush-heading-7">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-19" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????????????? ??????????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-8">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-8" aria-expanded="true" aria-controls="accordion-flush-body-8">
                                        <div class="grow">
                                            <p class="text-base font-semibold">??????????????, ????????????????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-20" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????????????? ????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-21" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">???????????? ????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-22" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">????????????????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-flush-heading-9">
                                    <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-9" aria-expanded="true" aria-controls="accordion-flush-body-9">
                                        <div class="grow">
                                            <p class="text-base font-semibold">???????? ????????????</p>
                                        </div>
                                        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-9" class="hidden" aria-labelledby="accordion-flush-heading-9">
                                    <ul class="p-3 space-y-2 text-sm text-gray-700">
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-23" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">?????? ????????????, ?????????? ?????????????? ??????????</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
                                                <input id="checkbox-24" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label class="ml-2 text-sm font-medium text-gray-900">????????????</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/signin" class="w-32 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center border-4 border-sky-700/50" type="button">
                        <img src="/images/logos/login.png" class="h-5 w-5" alt="Logo"> 
                        <span class="ml-3 font-semibold">??????????????</span>
                    </a>
                    <a type="button" class="w-12 h-12 bg-gray-50 rounded-full p-2.5 shadow-xl inline-flex items-center justify-center border-4 border-sky-700/50">
                        <img src="/images/logos/layer.png" class="h-5 w-5" alt="Logo"> 
                        <span class="sr-only">Right bar</span>
                    </a>
                </div>
                <div class="z-20 fixed bg-gray-50 shadow-md rounded-3xl max-w-[500px] max-h-[700px] top-32 right-2.5 border-4 border-sky-700/50 overflow-hidden" id="layer-more"></div>
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21392.289171037315!2d106.9096271!3d47.91633805000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smn!4v1661854153803!5m2!1sen!2smn" width="600" width="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
            <div class="loader" id="loader-div" style="display: none">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
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
        function closeSideber(){
            document.getElementById("sidebar").style.width = "0%";
            document.getElementById("sidebar").style.visibility = "hidden";
            document.getElementById("splide").style.visibility = "hidden";
            document.getElementById("body").style.marginLeft= "0%";
            document.getElementById("body").style.width = "100%";
        }
        $("sidebar_button()" ).trigger("click" 
        );
        function sidebar_button(){

        var Changewidth = document.getElementById("sidebar")
        var Body = document.getElementById("body")
        var Sidebar = document.getElementById("sidebar")
        var Splide = document.getElementById("splide")

            if(Changewidth.style.width == "0%") {
                Changewidth.style.width = "384px";
                Body.style.width = "calc(100%-384px)";
                Body.style.marginLeft = "384px";
                Sidebar.style.visibility = 'visible';
                Splide.style.visibility = 'visible';
            }
        } 
    </script>
    <script>
        function layerMore(divName)                                
        {
            $("#loader-div").show();
            var Changeheight = document.getElementById("layer_more");
            if(Changeheight)
            {
                Changeheight.style.height = "0%"
            }
            setTimeout(function(){
                $.ajax({
                    url: "/"+divName,
                    type: 'get',
                    // dataType: 'json',
                    data: {
                        divName: divName
                    },
                    beforeSend: function() {
                        
                    },
                    success: function(response) {
                        $("#layer-more").show()
                        $("#layer-more").empty().html(response);
                        $("#loader-div").hide();
                    },
                    error: function(xhr, textStatus, error) {
                        console.log(xhr.statusText);
                        console.log(textStatus);
                        console.log(error);
                    },
                    async: false,
                }).done(function(data) {
                });
            }, 100);
        }




        $("#dropdownCheckboxButton").on('click', function(){
            $("#layer-more").hide();
        });
    </script>
</html>