<section class="px-28 mt-12">
    <div class=""> 
        <div class="relative">
            <img src="img/{{ $arrCardS2["img"] }}" alt="image section2 a" class="w-full max-w-[700px]">
            <div class="absolute text-center top-10 w-full grid justify-center text-gray-100 ">
                <p class="text-xl font-bold pb-5">{{ $arrCardS2["name"] }}</p>
                <h1 class="pb-5 uppercase text-4xl font-black">{{ $arrCardS2["title"] }}</h1>
                <p class="text-xl font-bold">{{ $arrCardS2["price"] }}</p>
            </div>
             <div class="flex justify-center space-x-8 pt-8 uppercase font-bold">
                <div class="text-blue-500">
                    <a href="">{{ $arrCardS2["link1"] }}</a>
                    <a href=""><i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="text-blue-500">
                    <a href="">{{ $arrCardS2["link2"] }}</a>
                    <a href=""><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>