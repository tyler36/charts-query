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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    @vite('resources/css/app.css')
    <style>
        .content a {
            color: blue;
        }

        .content ul {
            list-style-type: disc;
            margin-left: 10px;
        }

    </style>

    <script
        src="//unpkg.com/alpinejs"
        defer
    ></script>
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @if ($isActive)
            <div
                class="text-lg font-medium text-white bg-purple-800"
                style="background: {{ $bannerColor }}"
            >
                <a
                    href="/announcement"
                    class="container flex items-center px-4 py-4 mx-auto text-center lg:w-max"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"
                        />
                    </svg>
                    {{ $bannerText }}
                </a>
            </div>
        @endif

        <nav class="text-white bg-blue-600">
            <div class="container px-4 py-4 mx-auto space-x-6">
                <a
                    href="/"
                    class="hover:text-gray-200"
                >Home</a>
                <a
                    href="/charts"
                    class="hover:text-gray-200"
                >Charts</a>
                <a
                    href="/stats"
                    class="hover:text-gray-200"
                >Stats</a>
                <a
                    href="/announcement/edit"
                    class="hover:text-gray-200"
                >Edit Announcement</a>
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
