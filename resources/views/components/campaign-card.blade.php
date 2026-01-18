@vite('resources/css/app.css')
<div class="flex flex-col relative h-fit w-[260px] shadow-md gap-2 shadow-black/20 rounded-lg p-[5px] transform transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
    <span class="absolute top-3 left-3 bg-gray-100 text-gray-700 rounded-xl font-thin text-[10px] px-2 py-1">Pendidikan</span>
    <span class="absolute top-10 left-3 bg-red-700 text-white rounded-xl font-thin text-[10px] px-2 py-1">Mendesak</span>
    <img src="{{ asset('img/Beasiswa-Pemulihan-Darurat.jpg') }}" alt="" class="rounded-md">
    <h2 class="font-semibold text-sm px-3">Beasiswa Pemulihan Darurat Untuk Anak Penyintas Banjir</h2>
    <div class="h-[10px] sizw-fit mx-3 bg-gray-400 rounded-full">
        <div class="h-full w-[60%] bg-green-500 rounded-l-full"></div>
    </div>
    <h3 class="font-semibold text-[10px] text-gray-500 px-3"><span class="text-green-500">Rp. 6.000.000 </span>Terkumpul <span class="text-black">dari Rp. 10.000.000</span></h3>
    <div class="flex px-3 gap-2">
        <img src="{{ asset('img/profile/shrek.jpeg') }}" alt="" class="rounded-full h-[30px] w-[30px]">
        <h2 class="font-semibold text-[10px] h-fit my-auto">Shrek S.d S.mp S.ma</h2>
    </div>
    <a href="#" class="rounded xl bg-green-800 m-3 mt-0 py-1 text-center text-white hover:text-black">Donasi</a>
</div>