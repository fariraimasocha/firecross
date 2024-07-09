@extends('layout.app')

@section('content')
    <div class="container max-w-lg px-4 py-32 md:max-w-none bg-cover h-screen" style="background-image: url('{{ asset('images/ssuv.png') }}')">
      <div class="bg-gray-600 bg-opacity-70 w-5/12 mt-48 px-8 py-8">
          <h1 class="text-6xl font-bold text-white">
              Open London in its full beauty
          </h1>
          <div class="mx-auto mt-5 text-white">
              Simplifying the process of getting you, the car, of your&nbsp; dreams today! Trust us for this crucial step.
          </div>

                <a href="{{route('shop.index')}}" type="button" class="mt-10 inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Purchase Now
                </a>
      </div>

    </div>
@endsection
