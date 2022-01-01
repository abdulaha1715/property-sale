<div class="fixed top-0 w-full py-4 px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'genarel-header'}}">
    <div class="min-w-max">
        <a href="{{ url('/') }}">
            <img width="140px" src="/images/logo.png" alt="">
        </a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=land">{{__('Land')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=villa">{{__('Villa')}}Villa</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=apartment">{{__('Apartment')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('page', 'about-us') }}">{{__('About Us')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('page', 'contact-us') }}">{{__('Contact Us')}}</a></li>
        </ul>
    </div>

    <div class="min-w-max text-3xl">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">🇺🇸</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}">🇹🇷</a>
    </div>

</div>
