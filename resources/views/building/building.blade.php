<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css"/>
    </head>
    @include('admin_header')
    @include('admin_sidebar')

    <body class="bg-gray-200">
        <div class="ml-64 p-[1%]">
            <div class="overflow-x-auto relative sm:rounded-lg">
                <div class="flex justify-between items-center pb-4">
                    <div>
                        
                    </div>
                    <div>
                        <button class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="authentication-modal">
                        + Шинээр нэмэх
                        </button>
                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилга нэмэх</h3>
                                        <form class="space-y-2 border-t border-gray-200" action="#">
                                            <div>
                                                <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                            </div>
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                            </div>
                                            <div>
                                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                            </div>
                                            <div>
                                                <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                            </div>
                                            <div>
                                                <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                            </div>
                                            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="modal">
                                                Цуцлах
                                                </button>
                                                <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                Хадгалах
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    
                                </div>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                №
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Барилгын дугаар
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Барилгын нэр
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Хаяг
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Барилгын төрөл
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Зориулалт
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Үйлдэл
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-4 py-2 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                1
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                2
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                3
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                4
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                5
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                6
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                7
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                8
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                9
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap">
                                10
                            </th>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="py-2 px-6">
                                -
                            </td>
                            <td class="flex items-center py-2 px-6 space-x-3">
                                <div>
                                    <img src="/images/logos/edit.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="edit-button">
                                    <div id="edit-button" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-button">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="py-6 px-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Барилгын мэдээлэл засварлах</h3>
                                                    <form class="space-y-2 border-t border-gray-200" action="#">
                                                        <div>
                                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Барилгын дугаар</label>
                                                            <input type="number" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" placeholder="Барилгын дугаар" required>
                                                        </div>
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Барилгын нэр</label>
                                                            <input type="name" name="name" id="name" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Хаяг</label>
                                                            <input type="address" name="address" id="address" placeholder="Барилгын нэр" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Барилгын төрөл</label>
                                                            <input type="type" name="type" id="type" placeholder="Барилгын төрөл" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div>
                                                            <label for="dedication" class="block mb-2 text-sm font-medium text-gray-900">Зориулалт</label>
                                                            <input type="dedication" name="dedication" id="dedication" placeholder="Зориулалт" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5" required>
                                                        </div>
                                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end">
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-bs-dismiss="cancel">
                                                            Цуцлах
                                                            </button>
                                                            <button type="button" class="text-white bg-gradient-to-r from-sky-700 to-sky-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-2">
                                                            Хадгалах
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                    <img src="/images/logos/trash.png" class="h-4 w-4" alt="Avatar" type="button" data-modal-toggle="popup-modal"> 
                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Та устгахдаа итгэлтэй байна уу?</h3>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Тийм
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Цуцлах</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav class="flex justify-end items-center pt-4" aria-label="Table navigation">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#" class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-sky-600 bg-sky-50 border border-sky-300 hover:bg-sky-100 hover:text-sky-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">.</a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">100</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </body>
</html>