<nav class="h-20 bg-gray-100">
    <div class="container mx-auto flex items-center justify-between h-full">
        <div class="flex space-x-3">
            <img src="{{asset('images/logo.png')}}" alt="Car Logo" width="20%">
            <a href="/" class="inline-block py-4 md:py-0 mt-2">
                <span class="p-1 text-2xl leading-none text-gray-900 font-mono  text-clip">Firecross</span>
            </a>
        </div>

        <div class="flex space-x-10 font-mono">
            <a href="{{route('discover.index')}}" class="hover:font-bold hover:text-gray-900 transition">Catalogue</a>
            <a href="{{route('drive.index')}}" class="hover:font-bold hover:text-gray-900 transition">Drive</a>
{{--            <a href="/" class="hover:font-bold hover:text-gray-900 transition">Seller</a>--}}
            <a href="/" class="hover:font-bold hover:text-gray-900 transition">Rentals</a>
            <a href="{{route('shop.index')}}" class="hover:font-bold hover:text-gray-900 transition">Shop</a>
        </div>

        <div class="flex space-x-5">
            <div class="px-4">
                <a href="/">
                    <i class="text-gray-500 hover:text-gray-700 fas fa-shopping-cart text-3xl hover:text-xl transition"></i>
                </a>
             <div class="rounded-full bg-blue-600 text-white text-center text-xs">
                 1
             </div>
            </div>
            <a href="/">
                <i class="text-gray-500 hover:text-gray-700 fa-brands fa-twitter text-lg hover:text-xl transition"></i>
            </a>
            <a href="/">
                <i class="text-gray-500 hover:text-gray-700 fa-brands fa-facebook text-lg hover:text-xl transition"></i>
            </a>
            <a href="/">
                <i class="text-gray-500 hover:text-gray-700 fa-solid fa-globe text-lg hover:text-xl transition"></i></a>
            <a href="/">
                <i class="text-gray-500 hover:text-gray-700 fa-brands fa-instagram text-lg hover:text-xl transition"></i>
            </a>
        </div>

    </div>
</nav>
