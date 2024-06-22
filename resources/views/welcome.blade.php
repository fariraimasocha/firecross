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

    </div>
@endsection
