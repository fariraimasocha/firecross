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
                <div class="rounded-lg w-3/12 bg-gray-100 shadow-lg p-6">
                    <img class="rounded-t-lg w-full" src="{{asset('images/bmw.jpg')}}" alt="BMW M3">
                    <h2 class="text-2xl font-semibold mt-4 text-gray-800">BMW M3</h2>
                    <p class="font-medium text-gray-600 mt-2">75 KWh, 320 HP</p>
                    <p class="font-medium text-gray-800 mt-2 border-b-2 pb-2">2020 Plug-in Hybrid, 30,555 miles</p>
                    <p class="text-gray-900 mt-4 text-xl font-bold">$45,555</p>
                    <button class="w-full h-10 bg-blue-600 text-white rounded mt-4 hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                        <i class="fa fa-shopping-cart mr-2"></i> Buy
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
