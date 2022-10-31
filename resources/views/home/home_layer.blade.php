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
      <button type="button" class="w-12 h-12 text-yellow-300 border-4 border-yellow-300/80 focus:ring-4 focus:outline-none focus:ring-yellow-100 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/salon.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Үсчин</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-slate-700 border-4 border-slate-700/80 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/makeup.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Гоо сайхан</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-green-700 border-4 border-green-700/80 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/medicine.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Эмийн сан</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-purple-700 border-4 border-purple-700/80 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/car-service.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Авто засвар</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-orange-500 border-4 border-orange-500/80 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/teather.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Кино театр</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-pink-700 border-4 border-pink-700/80 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/food.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Хоолны газар</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-sky-700 border-4 border-sky-700/80 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/more.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Дэлгэрэнгүй</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-red-700 border-4 border-red-700/80 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
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
  <div class="max-w-md p-12 pt-4 mx-auto rounded-lg">
    <div class="flex justify-between space-x-8">
      <div class="flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-24 h-24 p-2 dark:text-yellow-400 fill-current">
          <path d="M256,104c-83.813,0-152,68.187-152,152s68.187,152,152,152,152-68.187,152-152S339.813,104,256,104Zm0,272A120,120,0,1,1,376,256,120.136,120.136,0,0,1,256,376Z"></path>
          <rect width="32" height="48" x="240" y="16"></rect>
          <rect width="32" height="48" x="240" y="448"></rect>
          <rect width="48" height="32" x="448" y="240"></rect>
          <rect width="48" height="32" x="16" y="240"></rect>
          <rect width="32" height="45.255" x="400" y="393.373" transform="rotate(-45 416 416)"></rect>
          <rect width="32.001" height="45.255" x="80" y="73.373" transform="rotate(-45 96 96)"></rect>
          <rect width="45.255" height="32" x="73.373" y="400" transform="rotate(-45.001 96.002 416.003)"></rect>
          <rect width="45.255" height="32.001" x="393.373" y="80" transform="rotate(-45 416 96)"></rect>
        </svg>
        <h1 class="text-xl font-semibold">Stockholm</h1>
      </div>
      <span class="font-bold text-8xl">14°</span>
    </div>
    <div class="flex justify-between mt-2 space-x-4">
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">wed</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M398.2,137.208a144.013,144.013,0,0,0-284.545.979,122.364,122.364,0,0,0-64.357,32.926A109.4,109.4,0,0,0,16,249.619c0,31.119,12.789,60.762,36.01,83.469q2.84,2.776,5.845,5.347l11.327-33.981C56.091,289.3,48,270.017,48,249.619c0-42.362,35.724-78.015,81.329-81.168l14.055-.972.814-14.065a111.995,111.995,0,0,1,223.589-.22l.891,14.888,14.913.155c46.592.488,80.409,34.714,80.409,81.382,0,33.152-16.706,61.38-41.84,75.9L409.032,364.9a110.012,110.012,0,0,0,54.938-32.358C484.625,310.339,496,280.889,496,249.619,496,190.507,454.859,144.4,398.2,137.208Z"></path>
          <polygon points="126.029 496 159.817 496 223.153 309.136 192.847 298.864 126.029 496"></polygon>
          <polygon points="294.029 496 327.817 496 391.153 309.136 360.847 298.864 294.029 496"></polygon>
          <polygon points="290.11 251.033 225.781 448 259.445 448 320.529 260.967 290.11 251.033"></polygon>
          <polygon points="128.791 251.033 64.461 448 98.125 448 159.209 260.967 128.791 251.033"></polygon>
        </svg>
        <span>11°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">thu</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M382.76,432H136c-30.732,0-61.371-12.725-84.061-34.912-23.221-22.707-36.009-52.35-36.009-83.469A109.4,109.4,0,0,1,49.136,235.2a122.281,122.281,0,0,1,62.794-32.707V200c0-79.4,64.6-144,144-144s144,64.6,144,144v1.453c55.716,7.939,96,53.729,96,112.166,0,31.27-11.375,60.72-32.031,82.927A109.747,109.747,0,0,1,382.76,432ZM255.93,88a112.127,112.127,0,0,0-112,112v31.405l-14.864,1.059c-45.5,3.239-81.136,38.887-81.136,81.155C47.93,359.635,89.084,400,136,400H382.76c45.515,0,81.17-37.943,81.17-86.381,0-46.566-33.731-80.791-80.2-81.379l-15.8-.2V200A112.127,112.127,0,0,0,255.93,88Z"></path>
        </svg>
        <span>17°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">fri</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M399.667,264.875v-3.813c0-79.4-64.6-144-144-144-2.2,0-4.391.057-6.569.156A116.689,116.689,0,1,0,112.315,247.444c-.422,4.484-.648,9.025-.648,13.618v3.813A116.633,116.633,0,0,0,132.287,496.3H379.046a116.633,116.633,0,0,0,20.621-231.427ZM48.75,132.688a84.677,84.677,0,0,1,168.705-10.47,144.606,144.606,0,0,0-98.59,93.876A84.807,84.807,0,0,1,48.75,132.688ZM379.046,464.3H132.287a84.619,84.619,0,0,1-3.9-169.148l15.277-.69v-33.4a112,112,0,1,1,224,0v33.4l15.277.69a84.619,84.619,0,0,1-3.9,169.148Z"></path>
        </svg>
        <span>8°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">sat</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <polygon points="135.279 206.728 224.136 258.323 144.097 304.797 48.308 279.129 48.308 312.259 123.155 332.313 102.99 407.571 131.68 424.135 155.518 335.169 240 286.115 240 374.402 168.823 445.579 197.513 462.144 258 401.657 317.135 460.792 345.826 444.228 272 370.402 272 286.115 355.002 334.31 379.279 424.914 407.97 408.349 387.596 332.313 464 311.841 464 278.712 367.508 304.567 287.864 258.323 376.327 206.957 464 230.449 464 197.32 394.346 178.657 413.576 106.888 384.886 90.323 361.196 178.739 272 230.53 272 130.568 338.833 63.735 310.143 47.171 254.971 102.343 200.664 48.037 171.974 64.601 240 132.627 240 230.53 149.325 177.88 126.073 91.103 97.382 107.667 116.404 178.657 48.308 196.903 48.308 230.032 135.279 206.728"></polygon>
        </svg>
        <span>-2°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">sun</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M382.76,432H136c-30.732,0-61.371-12.725-84.061-34.912-23.221-22.707-36.009-52.35-36.009-83.469A109.4,109.4,0,0,1,49.136,235.2a122.281,122.281,0,0,1,62.794-32.707V200c0-79.4,64.6-144,144-144s144,64.6,144,144v1.453c55.716,7.939,96,53.729,96,112.166,0,31.27-11.375,60.72-32.031,82.927A109.747,109.747,0,0,1,382.76,432ZM255.93,88a112.127,112.127,0,0,0-112,112v31.405l-14.864,1.059c-45.5,3.239-81.136,38.887-81.136,81.155C47.93,359.635,89.084,400,136,400H382.76c45.515,0,81.17-37.943,81.17-86.381,0-46.566-33.731-80.791-80.2-81.379l-15.8-.2V200A112.127,112.127,0,0,0,255.93,88Z"></path>
        </svg>
        <span>4°</span>
      </div>
    </div>
  </div>
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

