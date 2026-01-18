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
    <main class="mt-[70px]">
        <div class="w-full p-10 flex flex-col gap-y-5">
            <div class="">
                <h1 class="text-4xl font-bold text-center">Kontak SmartCare</h1>
                <h2 class="text-xs font-thin text-center">Dari Kebaikan Kecil, Tumbuh Harapan Besar.</h2>
            </div>
            <div class="rounded-xl shadow-xl bg-white p-5">
                <h2 class="text-sm font-semibold">Alamat : <span class="text-sm font-normal">Jl. Lurus Terus No. 404, Dusun Ngalor-Ngidul, Desa Wis Pokoke, Kec. Opo Iki, Kab. Jawa Selatan, Indonesia</span><h2>
                <h2 class="text-sm font-semibold">Email : <span class="text-sm font-normal">info@SmartCare.id<span><h2>
                <h2 class="text-sm font-semibold">No Telepon : <span class="text-sm font-normal">(012) 345678910</span><h2>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>