<x-app-layout>
    <div class="mt-4 bg-white rounded-lg shadow-md overflows-hidden xl:w-1/2">
        <div
            class="px-4 py-4 text-center text-white bg-purple-800 rounded-t-lg"
            style="background: {{ $announcement->titleColor }}"
        >
            {{ $announcement->titleText }}
        </div>
        <div class="px-5 py-5 text-gray-600">
            <div class="p-5 space-y-4 text-gray-600">
                <div class="content">{!! $announcement->content !!}</div>

                <p class="mx-auto mt-6">
                    <a
                        href="{{ $announcement->buttonLink }}"
                        class="px-4 py-4 text-white bg-purple-800 rounded-md"
                        style="background: {{ $announcement->buttonColor }}"
                    >{{ $announcement->buttonText }}</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
