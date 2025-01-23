<x-app-layout>
    @section('title', 'New Project')

    <main class="mx-auto md:px-10 px-6 py-6">
        <!-- Back to Dashboard Button -->
        <div class="mb-6">
            <a href="{{ route('dashboard') }}" class="bg-blue-800 text-white font-medium text-lg px-4 py-2 rounded-md hover:bg-blue-900 transition duration-300">
                ← Back to Dashboard
            </a>
        </div>

        <!-- Form Container -->
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Two-Column Layout for Large Screens -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Left Column -->
                <div class="w-full md:w-1/2 space-y-6">
                    <!-- Project Name -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Project Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Aburi Project" required />
                    </div>

                    <!-- Project Location -->
                    <div>
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Project Location</label>
                        <input type="text" id="location" name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Aburi Amanfrom" required />
                    </div>

                    <!-- Project Type -->
                    <div>
                        <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Project Type</label>
                        <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Social Architecture" required />
                    </div>

                    <!-- Project Status -->
                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Project Status</label>
                        <input type="text" id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Concept Design" required />
                    </div>
                </div>

                <!-- Right Column -->
                <div class="w-full md:w-1/2 space-y-6">
                    <!-- Firms Involved -->
                    <div>
                        <label for="firm" class="block mb-2 text-sm font-medium text-gray-900">Firms Involved</label>
                        <input type="text" id="firm" name="firm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="KPP Consulting and Construction" required />
                    </div>

                    <!-- Project Description -->
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Project Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write about your project here..."></textarea>
                    </div>

                    <!-- Start Date -->
                    <div>
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900">Start Date</label>
                        <input type="date" id="start_date" name="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>

                    <!-- End Date -->
                    <div>
                        <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900">End Date</label>
                        <input type="date" id="end_date" name="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                </div>
            </div>

            <!-- Image Upload Section -->
            <div class="mt-6">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 relative">
                    <div id="preview-container" class="flex flex-wrap items-center justify-center pt-5 pb-6 space-x-4">
                        <!-- Default upload icon and text -->
                        <div id="default-text" class="flex flex-col items-center justify-center">
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">SVG, PNG, JPG, or GIF (MAX. 800x400px)</p>
                        </div>
                    </div>
                    <input id="dropzone-file" name="project_images[]" type="file" class="hidden" multiple onchange="previewImages(event)" />
                </label>
                @error('project_images')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 transition duration-300">
                    Publish Project
                </button>
            </div>
        </form>
    </main>
</x-app-layout>

<script>
    function previewImages(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('preview-container');
        const defaultText = document.getElementById('default-text');

        // Clear any previous previews and hide default text
        previewContainer.innerHTML = '';
        defaultText.style.display = 'none';

        Array.from(files).forEach(file => {
            const reader = new FileReader();

            reader.onload = (e) => {
                // Create a new img element and set its source
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('h-60', 'w-60', 'm-2', 'object-cover', 'rounded');

                previewContainer.appendChild(img);
            };

            reader.readAsDataURL(file);
        });
    }
</script>
