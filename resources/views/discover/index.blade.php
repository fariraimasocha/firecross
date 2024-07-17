@extends('layout.app')

@section('content')
    <div class="container mx-auto px-6 py-5 text-left md:max-w-none bg-cover min-h-screen">
        <div class="flex justify-between items-center mb-5">
            <h1 class="text-3xl font-semibold leading-none text-gray-900 lg:text-5xl xl:text-6xl">
                <a href="/">Our <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-blue-500 to-purple-500">Catalogue</span></a>
            </h1>
            <a href="/" class="flex items-center justify-center text-gray-500 hover:text-gray-700 transition">
                <i class="fa fa-search text-3xl"></i>
            </a>
        </div>

        <div class="flex justify-between mt-5">
            <div class="rounded-lg w-3/12 bg-gray-100 shadow-lg p-6">
                <img class="rounded-t-lg w-full" src="{{asset('images/bmw.jpg')}}" alt="BMW M3">
                <h2 class="text-2xl font-bold text-gray-800 mt-4">BMW M3</h2>
                <p class="font-medium text-gray-600 mt-2 border-b-2">
                    The BMW M3 is the fastest BMW so far, capable of cruising at high speeds while providing exceptional comfort. Here are some key specs:
                </p>
                <ul class="list-disc list-inside mt-3 text-gray-600">
                    <li class="flex items-center"><i class="fa fa-tachometer-alt mr-2"></i><strong>Top Speed:</strong> 180 mph</li>
                    <li class="flex items-center mt-2"><i class="fa fa-horse-head mr-2"></i><strong>Horsepower:</strong> 503 hp</li>
                    <li class="flex items-center mt-2"><i class="fa fa-stopwatch mr-2"></i><strong>0-60 mph:</strong> 3.8 seconds</li>
                    <li class="flex items-center mt-2"><i class="fa fa-cogs mr-2"></i><strong>Engine:</strong> 3.0L Inline-6 Twin-Turbo</li>
                </ul>
                <button class="w-full h-10 bg-blue-600 text-white rounded mt-4 hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                    <i class="fa fa-shopping-cart mr-2"></i>Read More
                </button>
            </div>
        </div>


    </div>

@endsection
