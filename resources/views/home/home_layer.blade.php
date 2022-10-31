<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
<div class="h-full shadow-md bg-white w-[20%] fixed bg-gray-50" id="sidebar">
  <div class="flex flex-col bg-[url('../images/logos/erdenet_bg.jpg')] h-52 px-2.5 pt-12">
    <button type="button" id="close_sidebar" onclick="closeNav()" class="absolute top-3 right-2.5 text-gray-50 bg-gray-100/50 hover:bg-gray-200 hover:text-gray-400 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="popup-modal">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Close menu</span>
    </button>
    <form>   
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
      <div class="relative">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-sky-500 focus:border-sky-500" placeholder="Хайх утгаа оруулна уу..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2">Хайх</button>
      </div>
    </form>
    <div class="shrink-0 flex justify-between px-4">
      <p class="text-xl font-bold text-white mr-2">Эрдэнэт</p>
    </div>
  </div>
  <div class="p-4 grid grid-cols-4 gap-4 inline-flex items-center justify-items-center">
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-yellow-300 border border-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-100 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/salon.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Үсчин</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-slate-700 border border-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/makeup.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Гоо сайхан</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-green-700 border border-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/medicine.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Эмийн сан</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-purple-700 border border-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/car-service.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Авто засвар</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-orange-500 border border-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/teather.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Кино театр</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-pink-700 border border-pink-700 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/food.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Хоолны газар</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-sky-700 border border-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/more.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Дэлгэрэнгүй</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-red-700 border border-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/save.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Хадгалсан</div>
    </div>
  </div>
  <!-- <div id="accordion-flush" data-accordion="collapse" class="overflow-y-auto" data-active-classes="bg-white text-gray-900" data-inactive-classes="text-gray-500">
    <h2 id="accordion-flush-heading-1">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
        <div class="grow">
          <p class="text-base font-semibold">Хил зааг</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
            <input id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Сумын хил</label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100 items-center">
            <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Багийн хил</label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-2">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-2">
        <div class="grow">
          <p class="text-base font-semibold">Хянан баталгаа</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-1" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-1" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Захиалгат хянан баталгаа</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-2" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-2" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Төлөвлөгөөт хянан баталгаа</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-3" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-3" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Мониторинг</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-4" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-4" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Суурь зураг</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-3">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-3" aria-expanded="true" aria-controls="accordion-flush-body-3">
        <div class="grow">
          <p class="text-base font-semibold">Газрын нэгдмэл сан</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-5" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-5" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Хөдөө аж ахуйн газар</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-6" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-6" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Хот тосгон, бусад суурины газар</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-7" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-7" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Улсын тусгай хэрэгцээний газар</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-4">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-4" aria-expanded="true" aria-controls="accordion-flush-body-4">
        <div class="grow">
          <p class="text-base font-semibold">Зам</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-8" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-8" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Явган хүний зам</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-9" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-9" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Төмөр зам</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-10" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-10" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Авто зам</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-11" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-11" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Дугуйн зам</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-5">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-5" aria-expanded="true" aria-controls="accordion-flush-body-5">
        <div class="grow">
          <p class="text-base font-semibold">Хөдөлгөөнт объект</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-12" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-12" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Нийтийн тээвэр</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-13" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-13" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Түргэн тусламж</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-14" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-14" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Онцгой байдал</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-6">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-6" aria-expanded="true" aria-controls="accordion-flush-body-6">
        <div class="grow">
          <p class="text-base font-semibold">Шугам, сүлжээ</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-15" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-15" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Цахилгаан, эрчим хүчний байгууламж</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-16" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-16" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Ус хангамж, ариутгах татуурга</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-17" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-17" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Дулаан, хий дамжуулах барилга байгууламж</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-7">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-7" aria-expanded="true" aria-controls="accordion-flush-body-7">
        <div class="grow">
          <p class="text-base font-semibold">Эрсдэлтэй байршил</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-7" class="hidden" aria-labelledby="accordion-flush-heading-7">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-18" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-18" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Эрсдэлтэй байршил</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-8">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-8" aria-expanded="true" aria-controls="accordion-flush-body-8">
        <div class="grow">
          <p class="text-base font-semibold">Барилга, байгууламж</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-19" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-19" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Нийтийн сууц</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-20" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-20" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Хувийн сууц</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-21" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-21" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Байгууламж</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
    <h2 id="accordion-flush-heading-9">
      <button type="button" class="flex items-center justify-between w-full pt-4 pb-2 px-6 font-medium text-left text-gray-500" data-accordion-target="#accordion-flush-body-9" aria-expanded="true" aria-controls="accordion-flush-body-9">
        <div class="grow">
          <p class="text-base font-semibold">Нэгж талбар</p>
        </div>
        <svg data-accordion-icon class="mt-1 w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-flush-body-9" class="hidden" aria-labelledby="accordion-flush-heading-9">
      <ul class="p-3 space-y-2 text-sm text-gray-700">
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-22" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-22" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Хот тосгон, бусад суурины газар</span>
            </label>
          </div>
        </li>
        <li>
          <div class="flex p-2 rounded-xl hover:bg-sky-100">
            <label for="default-toggle-23" class="inline-flex relative items-center w-full cursor-pointer">
              <input type="checkbox" value="" id="default-toggle-23" class="sr-only peer">
              <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">Гудамж</span>
            </label>
          </div>
        </li>
      </ul>
    </div>
  </div> -->
  <div class="splide bottom-0 absolute w-full h-60 rounded-t-2xl">
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
        <div class="shadow splide__slide lg:max-w-lg items-center sm:flex">
          <div class="relative group overflow-hidden bg-black w-full rounded-t-2xl items-center justify-center">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
              <div class="absolute w-full flex place-content-center">
                <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-5">Зарын гарчиг</p>
              </div>
              <div class="absolute w-full flex place-content-center mt-10">
                <p class="font-sans text-center w-4/5 text-white mt-5 line-clamp-3">Зарын үндсэн агуулга хэсгийг энд оруулна уу!</p>
              </div>
              <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
            </div>
          </div>
        </div>
        <div class="shadow splide__slide lg:max-w-lg items-center sm:flex">
          <div class="relative group overflow-hidden bg-black w-full rounded-t-2xl items-center justify-center">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
              <div class="absolute w-full flex place-content-center">
                <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-5">Зарын гарчиг</p>
              </div>
              <div class="absolute w-full flex place-content-center mt-10">
                <p class="font-sans text-center w-4/5 text-white mt-5 line-clamp-3">Зарын үндсэн агуулга хэсгийг энд оруулна уу!</p>
              </div>
              <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
            </div>
          </div>
        </div>
        <div class="shadow splide__slide lg:max-w-lg items-center sm:flex">
          <div class="relative group overflow-hidden bg-black w-full rounded-t-2xl items-center justify-center">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
              <div class="absolute w-full flex place-content-center">
                <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-5">Зарын гарчиг</p>
              </div>
              <div class="absolute w-full flex place-content-center mt-10">
                <p class="font-sans text-center w-4/5 text-white mt-5 line-clamp-3">Зарын үндсэн агуулга хэсгийг энд оруулна уу!</p>
              </div>
              <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
            </div>
          </div>
        </div>
        <div class="shadow splide__slide lg:max-w-lg items-center sm:flex items-center justify-center">
          <div class="relative group overflow-hidden bg-black w-full rounded-t-2xl">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
              <div class="absolute w-full flex place-content-center">
                <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-5">Зарын гарчиг</p>
              </div>
              <div class="absolute w-full flex place-content-center mt-10">
                <p class="font-sans text-center w-4/5 text-white mt-5 line-clamp-3">Зарын үндсэн агуулга хэсгийг энд оруулна уу!</p>
              </div>
              <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/js/splide.min.js"></script>
<script>
  var splide = new Splide('.splide', {
    type: 'loop',
    autoplay: true,
  });

  splide.mount();
</script>

