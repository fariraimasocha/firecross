@extends('layout.app')

@section('content')

    <section class="w-full px-8 py-10 bg-gray-100 xl:px-8 h-screen">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">
                <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                    <p class="font-medium text-blue-500 uppercase" data-primary="blue-500">Join Our Community</p>
                    <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                        Sell Your Car with <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline tails-selected-element">Ease and Confidence</span>
                    </h2>
                    <p class="text-xl text-gray-600 md:pr-16">
                        Join our platform to reach a wider audience and sell your car quickly and efficiently.
                        Our seamless process and expert support ensure a smooth and hassle-free experience.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mt-4">
                        <li>Access to a large and active buyer base</li>
                        <li>Comprehensive support from our team</li>
                        <li>Easy and secure transaction process</li>
                        <li>Detailed analytics to track your sales</li>
                    </ul>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-2/5">
                    <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="mb-6 text-2xl font-medium text-center">Create a Seller Account</h3>
                        <form method="post" action="{{ route('seller.store') }}">
                            @csrf
                            <input type="text" name="name" id="name" class="block w-full px-4 py-3 mb-4 border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Name">
                            <input type="email" name="email" id="email" class="block w-full px-4 py-3 mb-4 border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Email">
                            <input type="password" name="password" id="password" class="block w-full px-4 py-3 mb-4 border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Password">
                            <input type="text" name="car_model" id="car_model" class="block w-full px-4 py-3 mb-4 border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Car Model">
                            <input type="text" name="location" id="location" class="block w-full px-4 py-3 mb-4 border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" data-rounded="rounded-lg" data-primary="blue-500" placeholder="Location">
                            <div class="block">
                                <button type="submit" class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg" data-primary="blue-600" data-rounded="rounded-lg">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
