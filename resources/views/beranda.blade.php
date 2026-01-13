<!DOCTYPE html>
<html lang="en" class="h-full bg-white-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Beranda</title>
</head>
<body class="h-full font-montserrat bg-gray-200/75 flex flex-col">
    <x-navbar></x-navbar>
    <main class="mt-[100px]">
        <div class="flex flex-row gap-10 p-10">
            <div class="flex w-1/2 h-[150px] p-5 items-center gap-5 rounded-xl shadow-md bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-heart-icon lucide-hand-heart"><path d="M11 14h2a2 2 0 0 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 16"/><path d="m14.45 13.39 5.05-4.694C20.196 8 21 6.85 21 5.75a2.75 2.75 0 0 0-4.797-1.837.276.276 0 0 1-.406 0A2.75 2.75 0 0 0 11 5.75c0 1.2.802 2.248 1.5 2.946L16 11.95"/><path d="m2 15 6 6"/><path d="m7 20 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a1 1 0 0 0-2.75-2.91"/></svg>
                <div class="flex flex-col gap-2">
                    <h2 class="font-bold text-xl">Masih ingin berdonasi lebih banyak untuk mereka</h2>
                    <a href="/donasi" class="w-[200px] h-[40px] text-center content-center rounded-xl bg-green-800 text-white text-lg">Donasi Sekarang</a>
                </div>
            </div>
            <div class="flex w-1/2 h-[150px] p-5 items-center gap-5 rounded-xl shadow-md bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-heart-icon lucide-house-heart"><path d="M8.62 13.8A2.25 2.25 0 1 1 12 10.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <div class="flex flex-col gap-2">
                    <h2 class="font-bold text-xl">Mulai galang dana sekarang dan dapatkan dukungan dari ribuan orang baik</h2>
                    <a href="/galang-dana" class="w-[200px] h-[40px] bg-green-800 text-center content-center rounded-xl bg-green-800 text-white text-lg">Mulai Galang Dana</a>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>