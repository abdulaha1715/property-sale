<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Location') }}
            </h2>
            <div class="min-w-max">
                <a href="{{ route('dashboard-locations') }}" class="ful-width-btn">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('create-location') }}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data"> @csrf
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="name" class="propery-label">Location <span class="required-text">*</span></label>
                            <input type="text" name="name" id="name" class="property-input" value="{{old('location')}}"  required>

                            @error('location')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button class="btn" type="submit">Save Property</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
