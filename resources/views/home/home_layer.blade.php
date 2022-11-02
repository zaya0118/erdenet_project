<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
<div class="h-full shadow-md bg-white w-[384px] fixed bg-gray-50" id="sidebar">
  <div class="flex flex-col bg-[url('../images/logos/erdenet_bg.jpg')] h-52 px-2.5 pt-12">
    <button type="button" id="close_sidebar" onclick="closeSideber()" class="absolute top-3 right-2.5 text-gray-50 bg-gray-100/50 hover:bg-gray-200 hover:text-gray-400 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="popup-modal">
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
        <img src="/images/logos/education.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Боловсрол</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-slate-700 border-4 border-slate-700/80 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/sport.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Спорт</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-green-700 border-4 border-green-700/80 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/medicine.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Эрүүл мэнд</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-purple-700 border-4 border-purple-700/80 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/travel.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Аялал жуулчлал</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-orange-500 border-4 border-orange-500/80 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/teather.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Үзвэр</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-pink-700 border-4 border-pink-700/80 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/food.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Хоолны газар</div>
    </div>
    <div class="text-center flex-col">
      <a type="button" class="w-12 h-12 text-sky-700 border-4 border-sky-700/80 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center" onclick="layerMore('organization_bar')"> 
        <img src="/images/logos/more.png" class="h-5 w-5" alt="Logo">
      </a>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Дэлгэрэнгүй</div>
    </div>
    <div class="text-center flex-col">
      <button type="button" class="w-12 h-12 text-red-700 border-4 border-red-700/80 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center justify-center">
        <img src="/images/logos/save.png" class="h-5 w-5" alt="Logo">
      </button>
      <div class="text-xs font-medium text-gray-900 mt-2 w-18 h-10">Хадгалсан</div>
    </div>
  </div>
  <div class="p-2 grid grid-cols-2 gap-2 inline-flex items-center justify-items-center">
    <div class="w-40 h-60 cursor-pointer border-4 b-slate-900 rounded-xl flex flex-col justify-center items-center text-center p-2 bg-white" onclick="layerMore('estate_bar')">
      <div class="text-md font-bold flex flex-col text-gray-900">
        <span>Үл хөдлөх хөрөнгийн зар</span>
      </div>
      <div class="w-24 h-24 flex items-center justify-center">
        <img src="/images/logos/ad.png" class="h-16 w-16" alt="Logo">
      </div>
    </div>
    <div class="w-40 h-60 cursor-pointer border-4 b-slate-900 rounded-xl flex flex-col justify-center items-center text-center p-2 bg-white" onclick="layerMore('weather_bar')">
      <div class="text-md font-bold flex flex-col text-gray-900">
        <span>Даваа</span> <span class="font-normal text-gray-700 text-sm">01/01</span>
      </div>
      <div class="w-24 h-24 flex items-center justify-center">
        <svg class="h-16" viewBox="0 0 81 73" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop-HD" transform="translate(-174.000000, -308.000000)" fill-rule="nonzero">
                    <g id="Group" transform="translate(95.000000, 222.000000)">
                        <g id="2" transform="translate(79.000000, 86.000000)">
                            <path d="M35.288454,26.4312368 C34.8062502,27.5960191 33.4711041,28.1493583 32.3063218,27.6671545 C31.1415395,27.1849507 30.5882004,25.8498046 31.0704042,24.6850223 C33.990421,17.6316069 40.8868442,12.9347826 48.6521739,12.9347826 C59.1575903,12.9347826 67.673913,21.4511053 67.673913,31.9565217 C67.673913,34.1117269 67.3144924,36.2210565 66.6187558,38.217674 C66.2039356,39.4081203 64.90261,40.0368896 63.7121636,39.6220695 C62.5217172,39.2072493 61.8929479,37.9059237 62.3077681,36.7154773 C62.8357821,35.2001886 63.1086957,33.5985422 63.1086957,31.9565217 C63.1086957,23.9724052 56.6362904,17.5 48.6521739,17.5 C42.7496023,17.5 37.5080182,21.0697924 35.288454,26.4312368 Z M71.2488471,9.35984851 C72.1402613,10.2512627 72.1402613,11.6965305 71.2488471,12.5879447 L68.020751,15.8160409 C67.1293368,16.707455 65.6840689,16.707455 64.7926548,15.8160409 C63.9012406,14.9246267 63.9012406,13.4793588 64.7926548,12.5879447 L68.020751,9.35984851 C68.9121651,8.46843437 70.357433,8.46843437 71.2488471,9.35984851 Z M48.6521739,0 C49.9128239,0 50.9347826,1.02195872 50.9347826,2.2826087 L50.9347826,6.84782609 C50.9347826,8.10847606 49.9128239,9.13043478 48.6521739,9.13043478 C47.3915239,9.13043478 46.3695652,8.10847606 46.3695652,6.84782609 L46.3695652,2.2826087 C46.3695652,1.02195872 47.3915239,0 48.6521739,0 Z M80.6086957,31.9565217 C80.6086957,33.2171717 79.5867369,34.2391304 78.326087,34.2391304 L73.7608696,34.2391304 C72.5002196,34.2391304 71.4782609,33.2171717 71.4782609,31.9565217 C71.4782609,30.6958718 72.5002196,29.673913 73.7608696,29.673913 L78.326087,29.673913 C79.5867369,29.673913 80.6086957,30.6958718 80.6086957,31.9565217 Z M26.0555007,9.35984851 C26.9469148,8.46843437 28.3921827,8.46843437 29.2835969,9.35984851 L32.511693,12.5879447 C33.4031072,13.4793588 33.4031072,14.9246267 32.511693,15.8160409 C31.6202789,16.707455 30.175011,16.707455 29.2835969,15.8160409 L26.0555007,12.5879447 C25.1640865,11.6965305 25.1640865,10.2512627 26.0555007,9.35984851 L26.0555007,9.35984851 Z" id="Shape" fill="#FECA57"></path>
                            <path d="M45.138293,37.2826087 C44.3551693,37.2826087 43.6267158,36.8811485 43.2084767,36.2190618 C39.4665187,30.2954152 32.9620213,26.6304348 25.826087,26.6304348 C14.4802372,26.6304348 5.2826087,35.8280633 5.2826087,47.173913 C5.2826087,58.5197628 14.4802372,67.7173913 25.826087,67.7173913 L55.5,67.7173913 C63.9043331,67.7173913 70.7173913,60.9043331 70.7173913,52.5 C70.7173913,44.0956669 63.9043331,37.2826087 55.5,37.2826087 L45.138293,37.2826087 Z M46.3580943,32.7173913 L55.5,32.7173913 C66.4256331,32.7173913 75.2826087,41.5743669 75.2826087,52.5 C75.2826087,63.4256331 66.4256331,72.2826087 55.5,72.2826087 L25.826087,72.2826087 C11.9589373,72.2826087 0.717391304,61.0410627 0.717391304,47.173913 C0.717391304,33.3067633 11.9589373,22.0652174 25.826087,22.0652174 C34.1091478,22.0652174 41.7014994,26.1099628 46.3580943,32.7173913 Z" id="Path-Copy" fill="#0ABDE3"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
      </div>
      <p class="text-gray-700 mb-2">Үүлэрхэг</p>
      <div class="text-3xl font-bold text-gray-900 mb-6">32º<span class="font-normal text-gray-700 mx-1">/</span>20º</div>
    </div>
  </div>
  <!-- <div class="max-w-md p-8 py-4 mx-auto rounded-lg">
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
        <h1 class="text-xl font-semibold">Эрдэнэт</h1>
      </div>
      <span class="font-bold text-8xl">10°</span>
    </div>
    <div class="flex justify-between mt-2 space-x-4">
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">Лха</span>
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
        <span class="uppercase">Пүр</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M382.76,432H136c-30.732,0-61.371-12.725-84.061-34.912-23.221-22.707-36.009-52.35-36.009-83.469A109.4,109.4,0,0,1,49.136,235.2a122.281,122.281,0,0,1,62.794-32.707V200c0-79.4,64.6-144,144-144s144,64.6,144,144v1.453c55.716,7.939,96,53.729,96,112.166,0,31.27-11.375,60.72-32.031,82.927A109.747,109.747,0,0,1,382.76,432ZM255.93,88a112.127,112.127,0,0,0-112,112v31.405l-14.864,1.059c-45.5,3.239-81.136,38.887-81.136,81.155C47.93,359.635,89.084,400,136,400H382.76c45.515,0,81.17-37.943,81.17-86.381,0-46.566-33.731-80.791-80.2-81.379l-15.8-.2V200A112.127,112.127,0,0,0,255.93,88Z"></path>
        </svg>
        <span>17°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">Баа</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M399.667,264.875v-3.813c0-79.4-64.6-144-144-144-2.2,0-4.391.057-6.569.156A116.689,116.689,0,1,0,112.315,247.444c-.422,4.484-.648,9.025-.648,13.618v3.813A116.633,116.633,0,0,0,132.287,496.3H379.046a116.633,116.633,0,0,0,20.621-231.427ZM48.75,132.688a84.677,84.677,0,0,1,168.705-10.47,144.606,144.606,0,0,0-98.59,93.876A84.807,84.807,0,0,1,48.75,132.688ZM379.046,464.3H132.287a84.619,84.619,0,0,1-3.9-169.148l15.277-.69v-33.4a112,112,0,1,1,224,0v33.4l15.277.69a84.619,84.619,0,0,1-3.9,169.148Z"></path>
        </svg>
        <span>8°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">Бям</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <polygon points="135.279 206.728 224.136 258.323 144.097 304.797 48.308 279.129 48.308 312.259 123.155 332.313 102.99 407.571 131.68 424.135 155.518 335.169 240 286.115 240 374.402 168.823 445.579 197.513 462.144 258 401.657 317.135 460.792 345.826 444.228 272 370.402 272 286.115 355.002 334.31 379.279 424.914 407.97 408.349 387.596 332.313 464 311.841 464 278.712 367.508 304.567 287.864 258.323 376.327 206.957 464 230.449 464 197.32 394.346 178.657 413.576 106.888 384.886 90.323 361.196 178.739 272 230.53 272 130.568 338.833 63.735 310.143 47.171 254.971 102.343 200.664 48.037 171.974 64.601 240 132.627 240 230.53 149.325 177.88 126.073 91.103 97.382 107.667 116.404 178.657 48.308 196.903 48.308 230.032 135.279 206.728"></polygon>
        </svg>
        <span>-2°</span>
      </div>
      <div class="flex flex-col items-center space-y-1">
        <span class="uppercase">Ням</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 fill-current">
          <path d="M382.76,432H136c-30.732,0-61.371-12.725-84.061-34.912-23.221-22.707-36.009-52.35-36.009-83.469A109.4,109.4,0,0,1,49.136,235.2a122.281,122.281,0,0,1,62.794-32.707V200c0-79.4,64.6-144,144-144s144,64.6,144,144v1.453c55.716,7.939,96,53.729,96,112.166,0,31.27-11.375,60.72-32.031,82.927A109.747,109.747,0,0,1,382.76,432ZM255.93,88a112.127,112.127,0,0,0-112,112v31.405l-14.864,1.059c-45.5,3.239-81.136,38.887-81.136,81.155C47.93,359.635,89.084,400,136,400H382.76c45.515,0,81.17-37.943,81.17-86.381,0-46.566-33.731-80.791-80.2-81.379l-15.8-.2V200A112.127,112.127,0,0,0,255.93,88Z"></path>
        </svg>
        <span>4°</span>
      </div>
    </div>
  </div> -->
  <div class="splide bottom-0 absolute w-full h-60 rounded-t-2xl" id="splide">
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

