<x-layout>
    @section('title', 'Our Projects')

    <main>
        <div class="bg-gradient-to-b from-gray-100 to-white md:pt-32 pt-6">
            <div class=" px-6">
                <h2 class="text-center text-base/7 font-semibold text-indigo-600">Our Projects</h2>
                <p class="mx-auto mt-2 max-w-lg text-pretty text-center text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">Projects that define us</p>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 p-4">
                    @foreach($projects as $index => $project)
                        <div class="relative overflow-hidden
                            {{ $index === 0 ? 'lg:col-span-4 lg:row-span-4' : 'lg:col-span-2 lg:row-span-4' }}"
                        >
                            <a href="{{ route('project.show', ['slug' => $project->slug]) }}">
                                <!-- Project Image -->
                                <img src="{{ $project->projectImages->first()->image_path ?? asset("assets/Aburi1.jpg") }}" alt="{{ $project->name
                                 }}"
                                     class="w-full h-96 object-cover object-center rounded-md">

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
