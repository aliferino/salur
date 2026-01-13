<nav class="bg-white flex items-center px-10 py-5 gap-3 w-full justify-between shadow-lg fixed h-[100px] top-0">
    <div class="shrink-0 flex items-center gap-3">
        <div class="flex gap-x-2 items-center">
            <div class="bg-green-800/90 p-2 rounded-xl inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart bg-red"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"/></svg>
            </div>
            <h1 class="text-2xl font-bold text-black">Smart<span class="text-green-800">Care</span></h1>
        </div>
        <div class="relative w-[300px]">
            <input type="text" placeholder="Coba cari ''Tolong Menolong''" class="peer ps-9 border py-2 rounded-full border-gray-600 w-full placeholder:text-md text-md relative placeholder:text-gray-600 focus:ring-3 focus:ring-green-300/90 focus:border-green-300 transition-all duration-300 focus:outline-none"> <!-- focus:placeholder:text-green-600 placeholder:transition-all placeholder:duration-300 -->
            <label class="absolute top-1/4 left-3 text-gray-600"> <!-- peer-focus:text-green-600 transition-all duration-300 -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
            </label>
        </div>
    </div>
    <div class="flex flex-row gap-5 ">
        <div class="hidden md:block">
        <div class="flex items-baseline gap-x-2">
            <a href="/" class="{{ request()->is('/') ? 'text-green-800 bg-green-300/50' : 'text-gray-400 hover:bg-gray-100 hover:text-green-600' }} w-[150px] rounded-md px-3 py-2 text-lg font-medium text-center">Beranda</a>
            <a href="/donasi" class="{{ request()->is('donasi') ? 'text-green-800 bg-green-300/50' : 'text-gray-400 hover:bg-gray-100 hover:text-green-600' }} w-[150px] rounded-md px-3 py-2 text-lg font-medium text-center">Donasi</a>
            <a href="/galang-dana" class="{{ request()->is('galang-dana') ? 'text-green-800 bg-green-300/50' : 'text-gray-400 hover:bg-gray-100 hover:text-green-600' }} w-[150px] rounded-md px-3 py-2 text-lg font-medium text-center">Galang Dana</a>
        </div>
    </div>
        <div class="flex p-2 gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <h1>user</h1>
        </div>
        <a href="#" class="bg-green-800/90 rounded-md px-3 py-2 text-sm font-medium text-white">Masuk</a>
    </div>
</nav>