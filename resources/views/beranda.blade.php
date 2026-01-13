<!DOCTYPE html>
<html lang="en" class="h-full bg-white-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Beranda</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Dashboard</h1>
        </div>
        </header>
        <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
        </div>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>