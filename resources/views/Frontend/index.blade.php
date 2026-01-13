@extends('layouts.app1')
@section('title', 'EASHION | Home')
@section('content')
    <!-- Hero Section -->
    <div class="relative w-full h-[600px] bg-gray-100 overflow-hidden">
        <img src="{{ asset('images/mainimage.jpg') }}" alt="New Collection" class="object-cover w-full h-full">
        <div class="absolute inset-0 flex items-center justify-center bg-black/10">
            <div class="px-4 text-center text-white">
                <h1 class="mb-4 text-5xl font-bold tracking-tight uppercase md:text-7xl drop-shadow-lg">
                    New Arrivals
                </h1>
                <p class="mb-8 text-lg font-medium tracking-wide md:text-xl drop-shadow-md">
                    Explore the latest trends in fashion.
                </p>
                <a href="{{ url('/products') }}" class="inline-block px-10 py-4 font-bold tracking-wider text-black uppercase transition duration-300 transform bg-white hover:bg-black hover:text-white hover:scale-105">
                    Shop Now
                </a>
            </div>
        </div>
    </div>

    <!-- Collection Section -->
    <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 uppercase">New Collection</h2>
            <div class="w-24 h-1 mx-auto mt-4 bg-black"></div>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
                <div class="relative group">
                    <!-- Product Image -->
                    <div class="aspect-[3/4] w-full overflow-hidden bg-gray-200 relative">
                        {{-- {{ asset('storage/' . $product->image_path) }} --}}
                        <img src="{{ $product->image_path }}" 
                             alt="{{ $product->name }}" 
                             class="object-cover object-center w-full h-full transition-transform duration-500 group-hover:scale-105">
                        
                        <!-- Quick Action (e.g. Add to Cart) -->
                        <div class="absolute inset-x-0 bottom-0 flex justify-center p-4 transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                            <button class="w-full px-6 py-3 text-sm font-semibold tracking-wide text-black uppercase transition-colors bg-white shadow-lg hover:bg-black hover:text-white">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="flex items-start justify-between mt-4">
                        <div>
                            <h3 class="text-sm font-medium tracking-wide text-gray-900 uppercase">
                                <a href="{{ route('product.show', $product->id) }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $product->name }}
                                </a>
                            </h3>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">
                             LKR {{ number_format($product->price * (1 - ($product->discount / 100)), 2) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

