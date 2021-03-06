<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/images/hero-bg.jpeg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold md:text-5xl text-3xl mb-8">{{__('Guide Property ---- yout guide')}} <br />{{__('to the primary real estate market in Dubal')}} </h2>
            <p>{{ __('The most convenient real estate search portal in Dubai, start searching now!') }}<i data-feather="circle"></i></p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-20 md:-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white mx-4 md:mx-0 p-4 relative z-20 shadow-lg home-search">
                @include('components.property-search-form', ['locations' => $locations])
            </div>

        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">Best properties</h2>
        <div class="flex flex-wrap -mx-3 justify-between mt-10">

        @foreach($latest_properties as $property)
            @include('components.single-property-card', ['property' => $property, 'width' => 'md:w-1/4 w-full'])
        @endforeach

        </div>
    </div>

    <div class="py-10 text-center">
        <div class="container">
            <h2 class="section-heading">Lorem ipsum dolor sit amet, consectetur<br/> adipisicing elit. A aut autem dolorum <span class="underline">quis vitae!</span></h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, voluptatem!</p>

            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block" href="">Start The Searching</a>

            <h2 class="section-heading pt-14">Lorem ipsum dolor sit amet adipisicing<br/> adipisicing elit. A aut lorum </h2>

            <div class="md:w-4/5 mx-auto">
                <div class="flex -mx-3 flex-wrap justify-between mt-10">
                    <div class="w-full md:w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container text-center pt-14">
        <h2 class="section-heading">More information about us</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-24 bg-center"
             style="background-image: url('https://picsum.photos/1200/800')">
            <div class="absolute w-full h-full rounded-xl opacity-50 bg-black left-0 top-0"></div>
            <div class="relative z-20">
                <a data-lity href="https://www.youtube.com/watch?v=errT-_IvDVg" class="text-white text-xl flex flex-col justify-center items-center"><span class="border-2 border-white w-12 h-12 text-center pt-1 pl-1 leading-7 text-2xl hover:border-yellow-500 duration-200 rounded-full mb-2"><i data-feather="play"></i></span>Watch the video</a>
            </div>
        </div>

        <div class="text-xl">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto autem corporis debitis
                dignissimos doloremque eius error explicabo impedit iste libero magnam, natus officiis omnis quasi
                ratione sequi totam, vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto
                autem corporis debitis
                dignissimos doloremque eius error explicabo impedit iste libero magnam, natus officiis omnis quasi
                ratione sequi totam, vero.</p>

        </div>
    </div>


    <div class="container pt-14">
        <div class="md:flex md:justify-between ">
            <div class="flex-1 md:mr-10 text-lg leading-normal">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure laborum nemo
                    non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem sapiente
                    voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure
                    laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem
                    sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti
                    ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt
                    officiis rem sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    deleniti ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum
                    incidunt officiis rem sapiente voluptate</p>
            </div>
            <div class="flex-1 md:ml-10 mt-10 md:mt-0">
                <img class="rounded" src="https://picsum.photos/1200/800?random=' . rand(10, 1000)" alt="">
            </div>
        </div>
    </div>

</x-guest-layout>
