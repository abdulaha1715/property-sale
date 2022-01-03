<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Properties') }}
            </h2>
            <div class="min-w-max">
                <a href="{{ route('add-property') }}" class="ful-width-btn">Add New Property</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto mb-6">
                        <thead>
                           <tr>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Location</th>
                                <th class="border px-4 py-2">Price</th>
                                <th style="width: 250px" class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_properties as $properties)

                            <tr>
                                <td class="border px-4 py-2">{{ $properties->name }}</td>
                                <td class="border px-4 py-2">{{ $properties->location->name }}</td>
                                <td class="border px-4 py-2">{{ $properties->price }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a class="bg-blue-500 text-white px-4 py-2 text-xs rounded" href="">Edit</a>
                                    <a class="bg-green-500 text-white px-4 py-2 text-xs rounded" href="">View</a>
                                    <a class="bg-red-500 text-white px-4 py-2 text-xs rounded" href="">Delete</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    {{ $admin_properties->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
