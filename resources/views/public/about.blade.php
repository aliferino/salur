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
                <h1 class="text-4xl font-bold text-center">Tentang SmartCare</h1>
                <h2 class="text-xs font-thin text-center">Dari Kebaikan Kecil, Tumbuh Harapan Besar.</h2>
            </div>
            <div class="rounded-xl shadow-xl bg-white p-5">
                <h2 class="text-lg font-semibold">Tentang SmartCare</h2>
                <p class="text-sm">SmartCare hadir sebagai jembatan antara orang-orang yang ingin membantu dengan anak-anak yang berjuang melanjutkan sekolah. Kami tahu kepercayaan itu mahal, makanya setiap cerita di platform kami sudah diverifikasi kebenarannya dan setiap donasi dilaporkan secara transparan. Kami membuat proses berbagi jadi sesederhana mungkin, dalam hitungan menit, kamu sudah bisa jadi bagian dari perubahan. Tapi kami tidak berhenti di situ, kami juga mendampingi sekolah dan komunitas pendidikan agar lebih mandiri, karena yang kami kejar bukan sekadar angka donasi, tapi dampak nyata yang berkelanjutan. Kami percaya ketika kita peduli dan bergerak bersama, pendidikan untuk semua anak bukan lagi mimpi yang mustahil.</p>
            </div>
            <div class="rounded-xl shadow-xl bg-white p-5">
                <h2 class="text-lg font-semibold">Visi</h2>
                <p class="text-sm">Menjadi platform donasi pendidikan terdepan di Indonesia yang menciptakan ekosistem pendidikan inklusif, di mana setiap anak memiliki kesempatan yang sama untuk belajar, berkembang, dan meraih mimpi mereka tanpa terhambat oleh kendala finansial.</p>
            </div>
            <div class="rounded-xl shadow-xl bg-white p-5">
                <h2 class="text-lg font-semibold">Misi</h2>
                <p class="text-sm">Kami menghubungkan orang-orang yang ingin membantu dengan anak-anak yang berjuang melanjutkan sekolah. Kepercayaan adalah segalanya bagi kami, setiap cerita diverifikasi kebenarannya, dan setiap donasi dilaporkan secara transparan.
                Kami membuat proses berbagi jadi sederhana, tanpa ribet. Dalam hitungan menit, kamu sudah bisa jadi bagian dari perubahan. Lebih dari itu, kami juga mendampingi sekolah dan komunitas pendidikan agar lebih mandiri, tidak hanya bergantung pada bantuan sesaat.
                Yang kami kejar bukan sekadar angka, tapi dampak nyata yang berkelanjutan. Kami percaya pendidikan yang berkelanjutan adalah kunci masa depan yang lebih baik. Dan yang terpenting, kami ingin menularkan semangat berbagi ini ke lebih banyak orang, karena ketika kita peduli dan bergerak bersama, tidak ada yang mustahil.</p>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>