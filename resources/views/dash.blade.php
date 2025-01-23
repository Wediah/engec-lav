<x-app-layout>
    @section('title', 'Your Dashboard')

    <div class="md:mx-10 px-6 pt-10">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="font-bold text-3xl text-gray-900">All Projects</h1>
            <a href="{{ route('project.create') }}" class="bg-blue-600 text-white font-medium text-lg px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                New Project
            </a>
        </div>

        <!-- Projects Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-scroll md:overflow-hidden">
            <table class="min-w-full">
                <!-- Table Header -->
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created On</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-200">
                @foreach($projects as $project)
                    <tr class="hover:bg-gray-50 transition duration-300">
                        <!-- Project Image -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ $project->projectImages->first()->image_path ?? asset('assets/Aburi1.jpg') }}"
                                 alt="{{ $project->name }}"
                                 class="w-12 h-12 object-cover rounded-md">
                        </td>

                        <!-- Project Name -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-lg font-semibold text-gray-900">{{ $project->name }}</div>
                        </td>

                        <!-- Created On -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{ $project->created_at->format('M d, Y') }}</div>
                        </td>

                        <!-- Action Buttons -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <!-- View Button -->
                                <a href="{{ route('project.show', ['slug' => $project->slug]) }}"
                                   class="text-blue-600 hover:text-blue-800 transition duration-300">
                                    <i class='bx bx-bullseye text-xl'></i>
                                </a>

                                <!-- Edit Button -->
                                <a href="#"
                                   class="text-green-600 hover:text-green-800 transition duration-300">
                                    <i class='bx bx-edit-alt text-xl'></i>
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('project.delete', ['id' => $project->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-800 transition duration-300">
                                        <i class='bx bx-trash text-xl'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
