<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/images/hero-bg.jpeg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold text-5xl mb-8">Guide Property ---- yout guide <br /> to the primary real estate market in Dubal</h2>
            <p>The most convenient real estate search portal in Dubal, start searching now!</p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg">
                <form action="{{ route('properties') }}" method="GET" class="flex justify-between">
                    <div class="flex w-7/12 justify-between items-center">
                        <div class="flex flex-col mx-3">
                            <select name="sale" class="border-0 focus:ring-0">
                                <option value="">Buy or Rent</option>
                                <option value="2">Buy</option>
                                <option value="1">Rent</option>
                            </select>
                        </div>
                        <div class="py-3 self-center border-gray-500 border"></div>
                        <div class="flex flex-col mx-3">
                            <select name="type" class="border-0 focus:ring-0">
                                <option value="">Type</option>
                                <option value="1">Land</option>
                                <option value="2">Apartmet</option>
                                <option value="3">Villa</option>
                            </select>
                        </div>
                        <div class="py-3 self-center border-gray-500 border"></div>
                        <div class="flex flex-col mx-3">
                            <select name="price" class="border-0 focus:ring-0">
                                <option value="">Price</option>
                                <option value="100000">0 - 100000</option>
                                <option value="200000">100000 - 200000</option>
                                <option value="300000">200000 - 300000</option>
                                <option value="400000">300000 - 400000</option>
                                <option value="500000">400000 - 500000</option>
                                <option value="500000+">500000+</option>
                            </select>
                        </div>
                        <div class="py-3 self-center border-gray-500 border"></div>
                        <div class="flex flex-col mx-3">
                            <select name="bedrooms" class="border-0 focus:ring-0">
                                <option value="">Bedrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-5/12 ml-5">
                        <input type="search" placeholder="Try to search for something" class="rounded-lg px-4 py-2 w-full mr-4 focus:border-gray-700 focus:ring-0">
                        <button type="submit" class="btn bg-gray-800 text-white py-2 px-4 border-gray-800 border-2  rounded-md">Search</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="py-32 text-center">
        <div class="container">
            <h2 class="font-bold text-4xl mb-6">Choose real estate by points, quickly <br> and efficiently with the help of <a href="">Smart search</a></h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">Answer a few questions and get access to a personal selection of objects</p>
            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block">Start the review</a>
            <h2 class="font-bold text-4xl mb-6 mt-20">Why should you choose a property <br> with the help of our service?</h2>
        </div>
    </div>

    <div class="py-20 text-center">
        <div class="container">
            <h2 class="section-heading">Lorem ipsum dolor sit amet, consectetur<br/> adipisicing elit. A aut autem dolorum <span class="underline">quis vitae!</span></h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, voluptatem!</p>

            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block" href="">Start The Searching</a>

            <h2 class="section-heading pt-14">Lorem ipsum dolor sit amet adipisicing<br/> adipisicing elit. A aut lorum </h2>

            <div class="w-4/5 mx-auto">
                <div class="flex -mx-3 flex-wrap justify-between mt-10">
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-14">
        <div class="flex justify-between ">
            <div class="flex-1 mr-10 text-lg leading-normal">
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
            <div class="flex-1 ml-10">
                <img class="rounded" src="/img/hero-bg.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container pt-14">
        <div class="flex justify-center items-center">
            <a href="" class="btn">Start searching with filters</a>
            <p class="mx-10">or</p>
            <a href="" class="btn-outline">Start searching on the map</a>
        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">Last added objusts</h2>
        <div class="flex flex-wrap -mx-2 justify-between mt-10">

        @foreach($latest_properties as $property)
            @include('components.single-property-card', ['property' => $property])
        @endforeach

        </div>
    </div>
</x-guest-layout>
