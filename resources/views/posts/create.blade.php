<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ __('Posts') }}
            </h2>
        </div>
    </x-slot>

    <form id="create-post" method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
        @csrf

        <div id="editor-data"></div>

        <x-jet-validation-errors class="mb-4" />

        <div class="flex flex-col lg:flex-row container mx-auto space-y-6 lg:space-y-0 lg:space-x-4 my-6">
            <div class="lg:basis-3/4">
                <div class="flex flex-col space-y-3">
                    <div class="p-3 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <x-jet-input
                            class="w-full text-lg font-semibold"
                            type="text"
                            name="title"
                            :value="old('title')"
                            placeholder="Enter title here"
                            required
                            autofocus
                        />
                    </div>

                    <div class="p-3 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 mx-auto bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                            <div id="editorjs"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:basis-1/4">
                <div class="p-4 sm:p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 space-y-5">
                    <h5 class="text-lg font-bold leading-none text-gray-900 dark:text-white">Publish</h5>

                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Category</label>
                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($postCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                            </div>
                            <input id="dropzone-file" type="file" name="img_link" class="hidden" required/>
                            <p id="feedback" class="hidden mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Well done!</span> your file was received</p>
                        </label>
                    </div> 
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publish Post</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function(event) {
            const editor = new EditorJS({
                minHeight: 0,
                placeholder: "Begin your story...",
                tools: {
                    header: {
                        class: window.EditorJS.Header,
                        config: {
                            placeholder: 'Enter a header',
                            levels: [3],
                            defaultLevel: 3,
                        }
                    }
                },
            });

            // Catch form submit
            document.getElementById("create-post").addEventListener('submit', function(event) {
                event.preventDefault();

                // Get the data from the editor
                editor.save().then((outputData) => {
                    // Add the data to the form
                    document.getElementById("editor-data").innerHTML += '<input type="hidden" name="body" value="' + btoa(JSON.stringify(outputData)) + '">';

                    // Submit the form
                    document.getElementById("create-post").submit();
                }).catch((error) => {
                    console.log('Saving failed: ', error)
                });
            });
        })

        let fileinput = document.getElementById('dropzone-file');
        let feedbackTag = document.getElementById('feedback');
        console.log(fileinput.files.length, "fileinput");

        fileinput.addEventListener('change', function(event) {
            console.log(fileinput.files.length, "fileinput");
            if (fileinput.files.length > 0) {
                let file = fileinput.files[0];
                feedbackTag.classList.remove('hidden');
                console.log(file.name);
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function() {
                    console.log(reader.result);
                };
                reader.onerror = function(error) {
                    feedbackTag.className = "mt-2 text-sm text-red-600 dark:text-red-500"
                    feedbackTag.innerHTML = "<span class='font-medium'>Oh no!</span> something went wrong";
                    console.log('Error: ', error);
                };
            }
        });


    </script>
</x-app-layout>
