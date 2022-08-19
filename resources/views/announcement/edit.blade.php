<x-app-layout>
    @if (session('success_message'))
        <div class="px-4 py-4 text-green-800 bg-green-200">
            {{ session('success_message') }}
        </div>
    @endif
    <div class="px-6 py-6 my-8 bg-white border rounded-md">
        <div>
            <h2 class="text-2xl font-semibold">Edit Announcement</h2>
            <form
                action="/announcement/update"
                method="POST"
                class="max-w-2xl mt-4"
                id="updateAnnouncement"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PATCH')
                <div>
                    <h4 class="font-semibold">Is Active?</h4>
                    <div class="mt-2">
                        <div>
                            <input
                                type="radio"
                                name="isActive"
                                id="isActiveYes"
                                value="1"
                                @checked($announcement->isActive)
                                required
                            >
                            <label for="isActiveYes">Yes</label>
                        </div>
                        <div>
                            <input
                                type="radio"
                                name="isActive"
                                id="isActiveNo"
                                value="0"
                                @checked(!$announcement->isActive)
                                required
                            >
                            <label for="isActiveNo">No</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <label
                        for="bannerText"
                        class="block font-semibold"
                    >Banner Text</label>
                    <input
                        type="text"
                        name="bannerText"
                        id="bannerText"
                        class="w-full px-2 py-2 mt-2 border border-gray-400 rounded"
                        value="{{ $announcement->bannerText }}"
                        required
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="bannerColor"
                        class="block font-semibold"
                    >Banner Color</label>
                    <input
                        type="color"
                        name="bannerColor"
                        id="bannerColor"
                        value="{{ $announcement->bannerColor }}"
                        required
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="titleText"
                        class="block font-semibold"
                    >Title Text</label>
                    <input
                        type="text"
                        name="titleText"
                        id="titleText"
                        class="w-full px-2 py-2 mt-2 border border-gray-400 rounded"
                        value="{{ $announcement->titleText }}"
                        required
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="titleColor"
                        class="block font-semibold"
                    >Title Color</label>
                    <input
                        type="color"
                        name="titleColor"
                        id="titleColor"
                        value="{{ $announcement->titleColor }}"
                        required
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="content"
                        class="block font-semibold"
                    >Content</label>
                    <textarea
                        name="content"
                        id="content"
                        cols="30"
                        rows="10"
                        class="hidden w-full px-2 py-2 mt-2 border border-gray-400 rounded"
                        required
                    >{{ $announcement->content }}</textarea>
                    <div id="editor">
                        {!! $announcement->content !!}
                    </div>
                </div>

                <div class="mt-4">
                    <label
                        for="buttonText"
                        class="block font-semibold"
                    >Button Text</label>
                    <input
                        type="text"
                        name="buttonText"
                        id="buttonText"
                        class="w-full px-2 py-2 mt-2 border border-gray-400 rounded"
                        value="{{ $announcement->buttonText }}"
                        required
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="buttonColor"
                        class="block font-semibold"
                    >Button Color</label>
                    <input
                        type="color"
                        name="buttonColor"
                        id="buttonColor"
                        value="{{ $announcement->buttonColor }}"
                        required
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="buttonLink"
                        class="block font-semibold"
                    >Button Link</label>
                    <input
                        type="url"
                        name="buttonLink"
                        id="buttonLink"
                        class="w-full px-2 py-2 mt-2 border border-gray-400 rounded"
                        value="{{ $announcement->buttonLink }}"
                        required
                    >
                </div>

                <div class="mt-8">
                    <button
                        type="submit"
                        class="inline-block px-4 py-4 text-white bg-blue-600 rounded"
                    >Update Announcement</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
            var quill = new Quill('#editor', {
                theme:       'snow',
                placeholder: 'Enter announcement details'
            });

            const form = document.querySelector('#updateAnnouncement');
            form.addEventListener('submit', e => {
               e.preventDefault();

               const quillEditor = document.querySelector('#editor');
               const html = quillEditor.children[0].innerHTML;

               document.querySelector('#content').value = html;
               form.submit();
            })
        </script>
    @endpush
</x-app-layout>
