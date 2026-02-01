<x-layouts.main>
    <div>
        <div class="mb-8">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="title" name="title" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@company.com" required />
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-8">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail</label>
            <input type="file" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@company.com" required />
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-10">
          <textarea>
            Welcome to TinyMCE!
          </textarea>
        </div>
        <div class="sticky bottom-0 left-0 right-0 z-20 bg-white border-t border-neutral-200 p-3 flex justify-center items-center">
          <button class="flex justify-center items-center px-3 border-[0.87px] border-neutral-200 py-1.5 bg-neutral-950 text-white w-full">
            Save Logs 
          </button>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: '85vh'
        });
    </script>
</x-layouts.main>
