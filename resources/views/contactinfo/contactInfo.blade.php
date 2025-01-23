<x-app-layout>
@section('title', 'Your Dashboard')

    <div class="bg-gray-100 h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-left text-gray-800 mb-8">Contact Information</h1>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow md:overflow-hidden overflow-scroll">
            <table class="min-w-full">
                <!-- Table Header -->
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase
                    tracking-wider">Action</th>
                </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-200">
                @foreach ($contacts as $contact)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->first_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->last_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->company }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->phone }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ Str::limit($contact->message, 50) }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('contact_info.delete', ['id' => $contact->id]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                        class="text-red-600 hover:text-red-800 transition duration-300">
                                    <i class='bx bx-trash text-xl'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $contacts->links() }}
        </div>
    </div>
    </div>
</x-app-layout>
