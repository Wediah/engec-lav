<x-layout>
    @section('title', 'Your Dashboard')

    <div class="md:mx-10">
        <div class="flex justify-between">
            <h1 class="font-bold text-lg">All Projects</h1>
            <div class="flex flex-row gap-2">
                <a href="{{ route('project.create') }}" class="bg-blue-800 text-white font-medium text-lg p-2
            rounded-md">New Project</a>
                <a href="{{ route('profile.edit') }}" class="bg-blue-800 text-white font-medium text-lg p-2
            rounded-md">Profile</a>
            </div>
        </div>


        <div class="flex flex-col gap-4">
            @foreach($projects as $index => $project)
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-4">
                        <!-- Project Image -->
                        <img src="{{ $project->projectImages->first()->image_path }}" alt="{{ $project->name }}"
                             class="w-20 h-20 object-fill rounded-md">
                        <div class="">
                            <h2 class="text-2xl font-bold">{{ $project->name }}</h2>
                        </div>
                    </div>
                    <div class="text-2xl flex flex-row gap-2 items-center">
                        <a href="{{ route('project.show', ['slug' => $project->slug]) }}" class="text-blue-500"><i
                                class='bx
                        bx-bullseye'></i></a>
                        <a href="#" class="text-green-500"><i class='bx bx-edit-alt'></i></a>

                        <form action="{{ route('project.delete', ['id' => $project->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-red-500"><i class='bx bx-trash' ></i></button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</x-layout>
