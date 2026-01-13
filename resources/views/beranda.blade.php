<!DOCTYPE html>
<html lang="en" class="h-full bg-white-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Beranda</title>
</head>
<body class="h-full font-montserrat">
    <div class="min-h-full bg-gray-200/75">
        <x-navbar>
            <x-slot:name>{{ $name }}</x-slot:name>
        </x-navbar>
        <div class="h-1000"></div>
        <x-footer></x-footer>
    </div>
</body>
</html>