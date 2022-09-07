<div class="bg-gradient-to-r from-sky-500 to-sky-700">
    <div class="py-3 px-6">
        <div class="flex justify-between">
            <div class="flex items-center h-10">
                <img src="../images/logos/city.png" class="h-10 w-10" alt="Avatar">
                <span class="ml-5 font-medium text-white text-xl">Эрдэнэт газарзүйн мэдээллийн систем</span>
            </div>

            <div class="ml-2 flex">
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
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('crop/rotation')"> <img src="../images/logos/transportation.png" class="h-5 w-5 mr-2" alt="Avatar">Тээврийн GPS систем</span>
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('notes')"> <img src="../images/logos/union.png" class="h-5 w-5 mr-2" alt="Avatar">Замын аюулгүй байдал</span>
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('planting')"> <img src="../images/logos/announcement.png" class="h-5 w-5 mr-2" alt="Avatar">Зарлал</span>
                <span class="cursor-pointer rounded-xl py-3 px-4 text-sm font-medium text-white bg-gray-200/50 flex" onclick="menuDetail('fertilizers')"> <img src="../images/logos/advertising.png" class="h-5 w-5 mr-2" alt="Avatar">Сурталчилгаа</span>
            </div>
        </div>

    </div>
</div>  
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