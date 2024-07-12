@extends('layout.app')

@section('content')
    <div>
        <div class="container max-w-lg px-20 py-5 mx-auto text-left md:max-w-none bg-cover h-screen">
            <div class="flex justify-between">
                <h1 class="mb-1 text-3xl font-semibold leading-none text-gray-900 lg:text-5xl xl:text-6xl sm:mb-3"><a href="#">Our <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline tails-selected-element">Shop</span> </a></h1>
                <a href="/" class="mt-10">
                    <i class="text-gray-500 hover:text-gray-700 hover:text-3xl fa fa-search text-3xl transition"></i>
                </a>
            </div>


            <div class="flex justify-between mt-10">
                <div class="rounded-lg w-3/12 bg-gray-100 py-3 px-3">
                    <img src="{{asset('images/bmw.jpg')}}" alt="bmw">
                    <h1 class="text-2xl font-semibold mt-2">BMW M3</h1>
                    <p class="font-medium text-gray-500 mt-2">75KWh 320</p>
                    <p class="font-medium text-black mt-2 border-b-2">2020 Plug-in-Hybrid 30,555miles</p>
                    <p class="text-black mt-2 text-lg font-semibold">$45,555</p>
                    <button class="w-32 h-10 bg-blue-700 text-white rounded mt-2 hover:bg-gray-900 transition">Buy</button>
                </div>
            </div>

        </div>
    </div>
@endsection
