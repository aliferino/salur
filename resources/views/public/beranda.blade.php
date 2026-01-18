<!DOCTYPE html>
<html lang="en" class="h-full bg-white-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Beranda</title>
</head>
<body class="h-full font-montserrat bg-gray-200/75 flex flex-col">
    <x-navbar></x-navbar>
    <main class="mt-[70px]">
        <!-- <div 
            x-data="{
                active: 0,
                slides: [
                '{{ asset('img/slider/slider1.jpeg') }}',
                '{{ asset('img/slider/slider2.jpeg') }}',
                '{{ asset('img/slider/slider3.jpeg') }}'
                ],
                interval: null,
                start() {
                this.interval = setInterval(() => {
                    this.active = (this.active + 1) % this.slides.length
                }, 5000)
                }
            }"
            x-init="start()"
            class="relative w-full h-[420px] overflow-hidden rounded-xl"
            >
            <template x-for="(slide, index) in slides" :key="index">
                <img
                x-show="active === index"
                x-transition:enter="transition-opacity duration-700"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                :src="slide"
                class="absolute inset-0 w-full h-full object-cover"
                >
            </template>
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                <template x-for="(slide, index) in slides" :key="index">
                <button
                    @click="active = index"
                    :class="active === index ? 'bg-white' : 'bg-white/50'"
                    class="w-3 h-3 rounded-full"
                ></button>
                </template>
            </div>
        </div> -->
        <div class="h-[100px] bg-green-800 flex mx-10 gap-x-10 text-white rounded-xl"> <!-- total donatur dan total donasi-->
            <div class="flex w-1/2 items-center gap-x-5 justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
                <div class="flex flex-col">
                    <h1 class="font-bold text-3xl">12.345</h1>
                    <h2 class="text-sm">#TemanPeduli telah berdonasi</h2>
                </div>
            </div>
            <div class="flex w-1/2 items-center gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card-icon lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                <div class="flex flex-col">
                    <h1 class="font-bold text-3xl">Rp. 123.456.789</h1>
                    <h2 class="text-sm">Donasi Terkumpul</h2>
                </div>
            </div>
        </div>
        <div class="flex gap-10 p-10"> <!-- donasi lagi dan galangkan dana -->
            <div class="flex w-1/2 h-[150px] p-5 items-center gap-5 rounded-xl shadow-md bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake-icon lucide-heart-handshake"><path d="M19.414 14.414C21 12.828 22 11.5 22 9.5a5.5 5.5 0 0 0-9.591-3.676.6.6 0 0 1-.818.001A5.5 5.5 0 0 0 2 9.5c0 2.3 1.5 4 3 5.5l5.535 5.362a2 2 0 0 0 2.879.052 2.12 2.12 0 0 0-.004-3 2.124 2.124 0 1 0 3-3 2.124 2.124 0 0 0 3.004 0 2 2 0 0 0 0-2.828l-1.881-1.882a2.41 2.41 0 0 0-3.409 0l-1.71 1.71a2 2 0 0 1-2.828 0 2 2 0 0 1 0-2.828l2.823-2.762"/></svg>
                <div class="flex flex-col gap-2">
                    <h2 class="font-bold text-base">Masih ingin berdonasi lebih banyak untuk mereka</h2>
                    <a href="/donasi" class="w-[180px] h-[40px] text-center content-center rounded-xl bg-green-800 text-white text-base">Donasi Sekarang</a>
                </div>
            </div>
            <div class="flex w-1/2 h-[150px] p-5 items-center gap-5 rounded-xl shadow-md bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-heart-icon lucide-house-heart"><path d="M8.62 13.8A2.25 2.25 0 1 1 12 10.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <div class="flex flex-col gap-2">
                    <h2 class="font-bold text-base">Mulai galang dana sekarang dan dapatkan dukungan dari ribuan orang baik</h2>
                    <a href="/galang-dana" class="w-[180px] h-[40px] text-center content-center rounded-xl bg-green-800 text-white text-base">Mulai Galang Dana</a>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>