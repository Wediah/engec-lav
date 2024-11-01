<x-layout>
    @section('title', 'Your Projects')

    <main>
        <div class="bg-gray-50 py-6 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-center text-base/7 font-semibold text-indigo-600">Our Projects</h2>
                <p class="mx-auto mt-2 max-w-lg text-pretty text-center text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">Projects that define us</p>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 max-w-6xl mx-auto p-4">
                    @foreach($projects as $index => $project)
                        <div class="relative overflow-hidden
                            {{ $index === 0 ? 'lg:col-span-4 lg:row-span-4' : 'lg:col-span-2 lg:row-span-4' }}"
                        >
                            <a href="{{ route('project.show', ['slug' => $project->slug]) }}">
                                <!-- Project Image -->
                                <img src="{{ $project->projectImages->first()->image_path ?? asset("assets/Aburi1.jpg") }}" alt="{{ $project->name
                                 }}"
                                     class="w-full h-96 object-fill rounded-md">

                                <!-- Project Details - Text at Bottom Left -->
                                <div class="absolute bottom-0 left-0 text-white p-4">
                                    <h2 class="text-2xl font-bold">{{ $project->name }}</h2>
                                    <p class="text-sm">{{ $project->location }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>













    </main>
</x-layout>
