<div class="fixed top-0 w-full py-4 px-4 md:px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'genarel-header'}}">
    <div class="min-w-max mr-8 md:mr-0">
        <a href="{{ url('/') }}">
            <img width="140px" src="/images/logo.png" alt="">
        </a>
    </div>

    <div class="w-full hidden md:block">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=land">{{__('Land')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=villa">{{__('Villa')}}Villa</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('properties') }}?type=apartment">{{__('Apartment')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('page', 'about-us') }}">{{__('About Us')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{ route('page', 'contact-us') }}">{{__('Contact Us')}}</a></li>
        </ul>
    </div>

    <div class="min-w-max mr-4 md:mr-10 text-2xl">
        <a href="{{ route('currency-change', 'usd') }}" class="inline-block mr-5 text-white">$</a>
        <a href="{{ route('currency-change', 'tl') }}" class="inline-block mr-5 text-white">₺</a>
    </div>

    <div class="min-w-max text-3xl">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">🇺🇸</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}">🇹🇷</a>
    </div>
    <div class="md:hidden min-w-max ml-10">
        <button>
            <i class="text-white" data-feather="menu"></i></p>
        </button>
    </div>
</div>
