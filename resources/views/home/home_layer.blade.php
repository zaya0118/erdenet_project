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
  <div class="splide bottom-0 relative w-full h-1/3 rounded-t-2xl" id="splide">
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
              <button class="absolute left-1/4 bottom-24 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
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
              <button class="absolute left-1/4 bottom-24 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
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
              <button class="absolute left-1/4 bottom-24 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
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
              <button class="absolute left-1/4 bottom-24 bg-white text-black font-bold rounded-lg h-10 w-48">Холбогдох</button>
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

