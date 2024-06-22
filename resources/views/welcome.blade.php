@extends('layout.app')

@section('content')
    <div class="container mx-auto relative">
        <img src="{{ asset('images/cbmw.png') }}" alt="No-Image" width="100%" class="mt-4">
        <div class="absolute top-0 left-0 w-9/12 h-full flex py-32 px-40">
            <div class="bg-white p-4">
                <h1 class="text-3xl font-bold mb-6">Ready to find your deal.</h1>
                <p>Simply click the "Find your deal now" button to start browsing our car inventory.
                    Your perfect ride awaits</p>
            </div>
        </div>
        <div class="mt-5 justify-between flex">
            <div class="w-3/12 rounded-lg bg-blue-950 py-5 hover:bg-blue-700 transition">
                <h1 class="text-white text-center font-semibold">1252 cars</h1>
                <p class="text-center text-white font-light">Sold</p>
            </div>
            <div class="w-3/12 rounded-lg bg-blue-950 py-5 hover:bg-blue-700 transition">
                <h1 class="text-white text-center font-semibold">Speke st</h1>
                <p class="text-center text-white font-light">where are we</p>
            </div>
            <div class="w-3/12 rounded-lg bg-blue-950 py-5 hover:bg-blue-700 transition">
                <h1 class="text-white text-center font-semibold">32533 user</h1>
                <p class="text-center text-white font-light">testimonials Sold</p>
            </div>
        </div>

    </div>
@endsection
