<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Document</title>
    @livewireStyles
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <nav class="text-white bg-blue-600">
            <div class="container px-4 py-4 mx-auto space-x-6">
                <a href="/" class="hover:text-gray-200">Home</a>
                <a href="/charts" class="hover:text-gray-200">Charts</a>
                <a href="/stats" class="hover:text-gray-200">Stats</a>
            </div>
        </nav>

        <div class="container px-4 py-4 mx-auto">
            {{ $slot }}
        </div>
    </div>

    <div id="scripts">
        @livewireScripts
        @stack('scripts')
    </div>

</body>

</html>
