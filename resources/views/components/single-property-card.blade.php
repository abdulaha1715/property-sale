<div class="flex-1 mx-2 mb-6 shadow-lg relative rounded-md">
    <a href=""
        class="absolute left-3 w-9 h-9 leading-10 self-center top-3 bg-black text-white bg-opacity-25 text-center hover:bg-yellow-500 hover:text-white duration-200 rounded-full text-base"><i
            class="fa fa-heart-o"></i></a>
    <div class="py-20 bg-center" style="background-image: url('/images/hero-bg.jpeg')"></div>
    <div class="p-3">
        <h2 class="leading-0 text-base">{{$property->name}}</h2>
        <h3 class="text-2xl py-3"> {{$property->price}}</h3>
        <div class="border-t-2">
            <ul class="flex items-center -mx-1 my-4">
                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bedrooms}} bedrooms</li>
                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} Bathrooms</li>
                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->net_sqm}} ft<sup>2</sup></li>
            </ul>
            <a href="{{route('single-property', $property->id)}}" class="btn w-full text-center ful-width-btn">More details</a>
        </div>
    </div>
</div>