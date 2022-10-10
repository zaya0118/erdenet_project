<!-- <div class="bg-gradient-to-r from-sky-600 to-sky-900 h-16">
    <div class="py-3 px-6">
        <div class="flex justify-between">
            <div class="flex items-center h-10">
                <img src="../images/logos/city.png" class="h-10 w-10" alt="Avatar">
                <span class="ml-5 font-medium text-white text-2xl">Эрдэнэт газарзүйн мэдээллийн систем</span>
            </div>
            <div class="ml-2 flex">
                <div class="flex gap-x-4">
                    <a href="/" class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex"><img src="../images/logos/home.png" class="h-5 w-5 mr-2" alt="ad">Нүүр хуудас</a>
                    <a href="/weather" class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex"><img src="../images/logos/rainy-day.png" class="h-5 w-5 mr-2" alt="weather">Цаг агаар</a>
                    <a class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex" onclick="menuDetail('notes')"> <img src="../images/logos/union.png" class="h-5 w-5 mr-2" alt="danger_place">Эрсдэлтэй байршил</a>
                    <a href="/ad" class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex"><img src="../images/logos/advertising.png" class="h-5 w-5 mr-2" alt="ad">Сурталчилгаа</a>
                </div>
                <div class="ml-2 flex">
                    <a href="/signin" class="text-sm font-medium text-sky-700 h-10 focus:ring-4 focus:ring-sky-500 ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 bg-white" type="button">
                     Нэвтрэх
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4 flex items-center justify-center">
            <div class="flex gap-x-8">
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('fields')"> <img src="../images/logos/rainy-day.png" class="h-5 w-5 mr-2" alt="Avatar">Цаг агаар</span>
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('notes')"> <img src="../images/logos/union.png" class="h-5 w-5 mr-2" alt="Avatar">Эрсдэлтэй байршил</span>
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('fertilizers')"> <img src="../images/logos/advertising.png" class="h-5 w-5 mr-2" alt="Avatar">Сурталчилгаа</span>
            </div>
        </div>
    </div>
</div>   -->
<header class="w-full bg-gradient-to-r from-sky-600 to-sky-900 h-16 drop-shadow-lg">
    <div class="container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
        <!-- Logo Here -->
        <div class="flex items-center h-10">
            <img src="../images/logos/city.png" class="h-10 w-10" alt="Avatar">
            <span class="ml-5 font-medium text-white text-2xl">Эрдэнэт газарзүйн мэдээллийн систем</span>
        </div>

        <!-- Menu links here -->
        <ul id="menu" class="hidden top-0 right-0 px-10 py-16 bg-gray-800 z-50 md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">
            <li class="md:hidden z-90 fixed top-4 right-6">
                <a href="javascript:void(0)" class="text-right text-white text-3xl"
                    onclick="toggleMenu()">&times;</a>
            </li>
            <li>
                <a href="/" class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex"><img src="../images/logos/home.png" class="h-5 w-5 mr-2" alt="ad">Нүүр хуудас</a>
            </li>
            <li>
                <a href="/weather" class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex"><img src="../images/logos/rainy-day.png" class="h-5 w-5 mr-2" alt="weather">Цаг агаар</a>
            </li>
            <li>
                <a class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex" onclick="menuDetail('notes')"> <img src="../images/logos/union.png" class="h-5 w-5 mr-2" alt="danger_place">Эрсдэлтэй байршил</a>
            </li>
            <li>
                <a href="/ad" class="text-sm font-medium text-white h-10 flex cursor-pointer items-center rounded-md py-2 px-4 bg-gray-200/50 flex"><img src="../images/logos/advertising.png" class="h-5 w-5 mr-2" alt="ad">Сурталчилгаа</a>
            </li>
        </ul>
        <div class="flex items-center md:hidden">
            <button class="text-white text-3xl font-bold opacity-70 hover:opacity-100 duration-300"
                onclick="toggleMenu()">
                &#9776;
            </button>
        </div>
        <div class="ml-2 flex">
            <a href="/signin" class="text-sm font-medium text-sky-700 h-10 focus:ring-4 focus:ring-sky-500 ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 bg-white" type="button">
                Нэвтрэх
            </a>
        </div>
    </div>
</header>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/plugins/global/plugins.bundle.js"></script>
<script src="/js/scripts.bundle.js"></script> 
<script>
    function menuDetail(divName)
    {
        console.log(divName);
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
                $("#menu-detail").empty().html(response);
            },
            error: function(xhr, textStatus, error) {
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            },
            async: false,
        }).done(function(data) {});
    }
</script>
<script>
    var menu = document.getElementById('menu');
    function toggleMenu() {
        menu.classList.toggle('hidden');
        menu.classList.toggle('w-full');
        menu.classList.toggle('h-screen');
    }
</script>