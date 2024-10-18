<x-layout>
    @section('title', 'Project')

    <div>
        <div class="relative">
            <img src="{{ $project->projectImages->first()->image_path }}" alt="{{ $project->name }}"
                 class="h-[620px] w-full rounded-md object-cover">

            <!-- Project Details - Text at Bottom Left -->
            <div class="absolute bottom-0 left-0 text-white p-4">
                <h2 class="text-6xl font-bold">{{ $project->name }}</h2>
                <p class="text-xl">{{ $project->location }}</p>
            </div>
        </div>

        <div class="bg-gray-200 rounded-md p-2 flex flex-col gap-2 mt-6">
            <h1 class="text-6xl font-bold">Project Description</h1>
            <p class="text-pretty pt-4 text-gray-400">
                {{ $project->description }}
            </p>
        </div>

        <div id="default-carousel" class="relative w-full mt-6 bg-gray-200 p-2 rounded-md" data-carousel="slide">
            <h1 class="text-6xl pb-6 font-bold">Image Gallery</h1>
            <!-- Carousel wrapper -->
            <div class="relative  h-56 overflow-hidden rounded-lg md:h-[620px]">
                @foreach($project->projectImages as $image)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ $image->image_path }}" alt="project image" class="rounded-md absolute block
                        w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2
                        object-cover">
                    </div>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="bg-gray-200 p-2 rounded-md mt-6">
        <div id="accordion-collapse" data-accordion="collapse" class=" rounded-md bg-white">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 rtl:text-right
                text-gray-500 border border-b-0 border-gray-200  gap-3 text-6xl font-bold" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>Facts and figures</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200">
                    <div class="grid grid-cols-2 gap-8 ">
                        <div class="flex flex-col">
                            <span class="text-gray-500">Appointment Year</span>
                            <span class="text-xl font-bold">{{ \Carbon\Carbon::parse($project->start_date)->format('Y') }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-500">Completion Year</span>
                            <span class="text-xl font-bold">{{ \Carbon\Carbon::parse($project->end_date)->format('Y')
                            }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-500">Type</span>
                            <span class="text-xl font-bold">{{ $project->type ?? 'N/A' }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-500">Status</span>
                            <span class="text-xl font-bold">{{ $project->status ?? 'N/A' }}</span>
                        </div>
                    </div>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 rtl:text-right
                text-gray-500 border border-b-0 border-gray-200  gap-3 text-6xl font-bold" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Consultants</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 ">
                    <p class="mb-2 text-gray-500 text-md">{{ $project->firm ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-layout>
