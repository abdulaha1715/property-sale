<form action="{{ route('properties') }}" method="GET" class="flex justify-between">
    <div class="items-center flex">
        <div class="flex flex-col mx-3">
            <label class="inputLabel" for="sale">{{ __('Rent') }}/{{ __('Sale') }}</label>
            <select id="sale" name="sale" class="border-0 focus:ring-0">
                <option value="">{{ __('Rent') }}/{{ __('Buy') }}</option>
                <option {{ request('sale') == 1 ? 'selected="selected"' :'' }} value="1">{{ __('Rent') }}</option>
                <option {{ request('sale') == 2 ? 'selected="selected"' :'' }} value="2">{{ __('Buy') }}</option>
            </select>
        </div><div class="flex flex-col mx-3">
            <label class="inputLabel" for="location">{{ __('Location') }}</label>
            <select id="location" name="location" class="border-0 focus:ring-0">
                <option value="">{{ __('Location') }}</option>
                @foreach ($locations as $location)

                    <option {{ request('location') == $location->id ? 'selected="selected"' :'' }} value="{{ $location->id }}">{{ $location->name }}</option>

                @endforeach
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label class="inputLabel" for="type">{{ __('Type') }}</label>
            <select id="type" name="type" class="border-0 focus:ring-0">
                <option value="">{{ __('Type') }}</option>
                <option {{ request('type') == 'land' ? 'selected="selected"' :'' }} value="land">{{ __('Land') }}</option>
                <option {{ request('type') == 'apartment' ? 'selected="selected"' :'' }} value="apartment">{{ __('Apartment') }}</option>
                <option {{ request('type') == 'villa' ? 'selected="selected"' :'' }} value="villa">{{ __('Villa') }}</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label class="inputLabel" for="price">{{ __('Price') }}</label>
            <select id="price" name="price" class="border-0 focus:ring-0">
                <option value="">{{ __('Price') }}</option>
                <option {{ request('price') == '100000' ? 'selected="selected"' :'' }} value="100000">0 - 100000</option>
                <option {{ request('price') == '200000' ? 'selected="selected"' :'' }} value="200000">100000 - 200000</option>
                <option {{ request('price') == '300000' ? 'selected="selected"' :'' }} value="300000">200000 - 300000</option>
                <option {{ request('price') == '400000' ? 'selected="selected"' :'' }} value="400000">300000 - 400000</option>
                <option {{ request('price') == '500000' ? 'selected="selected"' :'' }} value="500000">400000 - 500000</option>
                <option {{ request('price') == '500001' ? 'selected="selected"' :'' }} value="500001">500000<span class="font-serif">+</span></option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label class="inputLabel" for="bedrooms">{{ __('Bedrooms') }}</label>
            <select id="bedrooms" name="bedrooms" class="border-0 focus:ring-0">
                <option value="">{{ __('Bedrooms') }}</option>
                <option {{ request('bedrooms') == 1 ? 'selected="selected"' :'' }} value="1">1</option>
                <option {{ request('bedrooms') == 2 ? 'selected="selected"' :'' }} value="2">2</option>
                <option {{ request('bedrooms') == 3 ? 'selected="selected"' :'' }} value="3">3</option>
                <option {{ request('bedrooms') == 4 ? 'selected="selected"' :'' }} value="4">4</option>
                <option {{ request('bedrooms') == 5 ? 'selected="selected"' :'' }} value="5">5</option>
            </select>
        </div>
    </div>
    <div class="flex justify-between items-center w-5/12 ml-5">
        <input name="property_name" value="{{ request('property_name') }}" type="search" placeholder="{{ __('Search here') }}" class="rounded-lg px-4 py-2 w-full mr-4 focus:border-gray-700 focus:ring-0">
        <button type="submit" class="btn bg-gray-800 text-white py-2 px-4 border-gray-800 border-2  rounded-md">{{ __('Search') }}</button>
    </div>
</form>
