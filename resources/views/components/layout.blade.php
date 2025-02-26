<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gnome Fitness</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Include Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 text-gray-100 font-hanken-grotesk min-h-full">
    <!-- Header -->
    <x-header.header class="z-50" />

    <div class="flex min-h-screen pt-16">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 fixed left-0 top-16 bottom-0">
            <x-header.navbar />
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <main class="w-full max-w-5xl mx-auto p-8">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

<x-footer.footer />

</html>