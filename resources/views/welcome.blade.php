@extends('layout.app')

@section('content')
    <div class="container max-w-lg px-4 py-32 mx-auto mt-px text-left md:max-w-none md:text-center bg-cover" style="background-image: url('{{ asset('images/suv.jpg') }}')">
        <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl">
            <span class="inline md:block">Start Looking For Your</span>
            <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Next Great Car</span>
        </h1>
        <div class="mx-auto mt-5 text-white md:mt-12 md:max-w-lg md:text-center lg:text-lg">
            Simplifying the process of getting you, the car, of your&nbsp; dreams today!
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="#" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Purchase Now
                </a>
                <span class="absolute top-0 right-0 px-2 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-400 rounded-full">starting at $10 000</span>
            </span>
        </div>
    </div>
@endsection
