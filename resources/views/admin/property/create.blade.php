<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Property') }}
            </h2>
            <div class="min-w-max">
                <a href="{{ route('dashboard-property.index') }}" class="ful-width-btn">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('dashboard-property.store') }}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data"> @csrf
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="name" class="propery-label">Title <span class="required-text">*</span></label>
                            <input type="text" name="name" id="name" class="property-input" value="{{old('name')}}"  required>

                            @error('name')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="name_tr" class="propery-label">Title - Turkish <span class="required-text">*</span></label>
                            <input type="text" name="name_tr" id="name_tr" class="property-input" value="{{old('name_tr')}}"  required>

                            @error('name_tr')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="freatured_image" class="propery-label">Freatured Image <span class="required-text">*</span></label>
                        <input type="file" name="freatured_image" id="freatured_image" class="property-input" required>

                        @error('freatured_image')
                            <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="gallery_images" class="propery-label">Gallery Images <span class="required-text">*</span></label>
                        <input type="file" name="gallery_images[]" id="gallery_images" class="property-input" multiple required>

                        @error('gallery_images')
                            <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="location_id" class="propery-label">Location <span class="required-text">*</span></label>
                            <select name="location_id" id="location_id" class="property-input" required>
                                <option value="">Select location</option>
                                @foreach ($locations as $location)
                                    <option {{old('location_id') == $location->id ? 'selected="selected"' : ''}}   value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>

                            @error('location_id')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="price" class="propery-label">Price <span class="required-text">*</span></label>
                            <input type="number" name="price" id="price" class="property-input" value="{{old('price')}}" required>

                            @error('price')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="sale" class="propery-label">Sale Type <span class="required-text">*</span></label>
                            <select name="sale" id="sale" class="property-input" required>
                                <option value="">Select Sale Type</option>
                                <option value="1">Rent</option>
                                <option value="2">Sale</option>
                            </select>

                            @error('sale')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="type" class="propery-label">Property Type <span class="required-text">*</span></label>
                            <select name="type" id="type" class="property-input" required>
                                <option value="">Select Property Type</option>
                                <option value="1">Land</option>
                                <option value="2">Apartment</option>
                                <option value="3">Villa</option>
                            </select>

                            @error('type')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="drawing_rooms">Drawing rooms</label>
                            <select class="civanoglu-input"  name="drawing_rooms" id="drawing_rooms">
                                <option value="">Select one</option>

                                @for($x = 0; $x <= 3; $x++)
                                <option {{old('drawing_rooms') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('drawing_rooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="bedrooms" class="propery-label">Bedrooms</label>
                            <select name="bedrooms" id="bedrooms" class="property-input">
                                <option value="">Select bedrooms</option>
                                {{-- <option value="1+1">1+1</option>
                                <option value="2+1">2+1</option>
                                <option value="3+1">3+1</option>
                                <option value="4+1">4+1</option>
                                <option value="5+1">5+1</option>
                                <option value="6+1">6+1</option> --}}

                                @for($x = 1; $x <= 6; $x++)
                                    <option {{old('bedrooms') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bedrooms')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="bathrooms" class="propery-label">Bathrooms</label>
                            <select name="bathrooms" id="bathrooms" class="property-input">
                                <option value="">Select bathrooms</option>
                                {{-- <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option> --}}
                                @for($x = 1; $x <= 5; $x++) <option {{old('bathrooms') == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                        @endfor
                            </select>

                            @error('bathrooms')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="net_sqm" class="propery-label">Net square meeter <span class="required-text">*</span></label>
                            <input type="number" name="net_sqm" id="net_sqm" class="property-input" value="{{old('net_sqm')}}" required>

                            @error('net_sqm')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="gross_sqm" class="propery-label">Gross square meeter</label>
                            <input type="number" name="gross_sqm" id="gross_sqm" value="{{old('gross_sqm')}}" class="property-input">

                            @error('gross_sqm')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="pool" class="propery-label">Pool</label>
                            <select name="pool" id="pool" class="property-input">
                                <option value="">Select pool</option>
                                <option value="1">No</option>
                                <option value="2">Private</option>
                                <option value="3">Public</option>
                                <option value="4">Both</option>
                            </select>

                            @error('pool')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="overview" class="propery-label">Overview <span class="required-text">*</span></label>
                            <textarea name="overview" id="overview" cols="30" rows="3" class="property-input" required>{{old('overview')}}</textarea>

                            @error('overview')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="overview_tr" class="propery-label">Overview - Tr <span class="required-text">*</span></label>
                            <textarea name="overview_tr" id="overview_tr" cols="30" rows="3" class="property-input" required>{{old('overview_tr')}}</textarea>

                            @error('overview_tr')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="why_buy" class="propery-label">Why Buy <span class="required-text">*</span></label>
                            <textarea name="why_buy" id="why_buy" cols="30" rows="7" class="property-input" required>{{old('why_buy')}}</textarea>

                            @error('why_buy')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="why_buy_tr" class="propery-label">Why Buy - Tr <span class="required-text">*</span></label>
                            <textarea name="why_buy_tr" id="why_buy_tr" cols="30" rows="7" class="property-input" required>{{old('why_buy_tr')}}</textarea>

                            @error('why_buy_tr')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="description" class="propery-label">Description <span class="required-text">*</span></label>
                            <textarea name="description" id="description" cols="30" rows="10" class="property-input" required>{{old('description')}}</textarea>

                            @error('description')
                                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="description_tr" class="propery-label">Description - Tr <span class="required-text">*</span></label>
                            <textarea name="description_tr" id="description_tr" cols="30" rows="10" class="property-input" required>{{old('description_tr')}}</textarea>

                            @error('description_tr')
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
