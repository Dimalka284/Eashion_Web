@extends('layouts.app1')
@section('title', 'EASHION | Home')
@section('content')
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-24 overflow-hidden relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-16 lg:gap-32">
            <!-- Left Side: Content -->
            <div class="flex flex-col space-y-10 md:space-y-14 z-10">
                <div class="space-y-6 md:space-y-8">
                    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black text-gray-950 leading-[0.8] tracking-tighter uppercase">
                        Define Your<br><span class="text-transparent" style="-webkit-text-stroke: 1.5px #000;">Style</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 font-medium leading-relaxed max-w-md">
                        Bold Streetwear Inspired By Real Culture — Crafted For Comfort, Movement, And Everyday Confidence.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="{{ url('/products') }}" class="inline-flex items-center justify-center px-12 py-5 text-xs font-black tracking-[0.2em] text-white uppercase bg-black rounded-sm hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 shadow-2xl shadow-black/20">
                        Shop The Drop
                    </a>
                    <a href="{{ url('/products') }}" class="inline-flex items-center justify-center px-12 py-5 text-xs font-black tracking-[0.2em] text-gray-900 border-2 border-gray-900 uppercase rounded-sm hover:bg-black hover:text-white transition-all duration-300 group">
                        View All Styles
                    </a>
                </div>

                <!-- Features Row -->
                <div class="grid grid-cols-3 gap-8 pt-12 border-t border-gray-100 mt-12">
                    <div class="flex flex-col items-center sm:items-start text-center sm:text-left gap-3">
                        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                            </svg>
                        </div>
                        <span class="text-[9px] font-black tracking-[0.15em] text-gray-400 uppercase leading-tight">Hassle-Free<br>Returns</span>
                    </div>
                    <div class="flex flex-col items-center sm:items-start text-center sm:text-left gap-3">
                        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                        </div>
                        <span class="text-[9px] font-black tracking-[0.15em] text-gray-400 uppercase leading-tight">100% Cotton<br>Made in China</span>
                    </div>
                    <div class="flex flex-col items-center sm:items-start text-center sm:text-left gap-3">
                        <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124l-.847-13.52c-.04-.627-.562-1.114-1.192-1.114H12.75M4.5 18.75V11.25m0 0h12.75V15h-1.5c-1.104 0-2 1.12-2 2.5s.896 2.5 2 2.5h1.5" />
                            </svg>
                        </div>
                        <span class="text-[9px] font-black tracking-[0.15em] text-gray-400 uppercase leading-tight">Free<br>Shipping</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Collage Design -->
            <div class="relative h-[600px] lg:h-[800px] w-full flex items-center justify-center">
                <!-- Abstract Background Shape -->
                <div class="absolute inset-0 bg-gray-100/50 rounded-[4rem] -rotate-3 z-0"></div>
                
                <!-- Pill Shape 1: Main (Model 1) -->
                <div class="absolute -top-10 right-10 w-48 lg:w-64 h-[28rem] lg:h-[36rem] rounded-full overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] z-10 animate-float transition-transform duration-700 hover:scale-105">
                    <img src="{{ asset('images/hero/model1.png') }}" alt="Model 1" class="w-full h-full object-cover">
                </div>

                <!-- Pill Shape 2: Overlapping (Model 2) -->
                <div class="absolute bottom-0 left-0 w-64 lg:w-80 h-[24rem] lg:h-[30rem] rounded-full overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] z-20 border-[12px] border-white animate-float-delayed">
                    <img src="{{ asset('images/hero/model2.png') }}" alt="Model 2" class="w-full h-full object-cover">
                </div>

                <!-- Social Avatar -->
                <div class="absolute top-[40%] right-[-10%] z-40 hidden lg:flex">
                    <div class="relative">
                        <div class="w-16 h-16 rounded-full border-4 border-white shadow-2xl overflow-hidden bg-gray-50 flex items-center justify-center">
                            <img src="https://ui-avatars.com/api/?name=Eashion+Lover&background=000&color=fff&bold=true" alt="Avatar">
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-red-500 rounded-full border-2 border-white flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="white" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Background Outline Play Icon -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-gray-200/40 z-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-96 h-96">
                        <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 20.03c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection Section -->
    <section class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col items-center justify-between gap-6 mb-16 md:flex-row md:items-end">
            <div class="text-center md:text-left">
                <span class="text-[10px] font-bold tracking-[0.4em] text-gray-400 uppercase block mb-2">Editor's Choice</span>
                <h2 class="text-4xl font-black tracking-tight text-gray-900 uppercase">New Collection</h2>
                <div class="w-12 h-1 mx-auto mt-4 bg-black md:hidden"></div>
            </div>
            <a href="{{ url('/products') }}" class="group relative py-2 text-xs font-bold tracking-[0.2em] text-black uppercase">
                Explore All
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-black transition-transform origin-right scale-x-0 group-hover:scale-x-100 group-hover:origin-left duration-300"></span>
            </a>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($products as $product)
            <a href="{{ route('product.show', $product->id) }}">
                <div class="relative flex flex-col group">
                    <!-- Product Image Container -->
                    <div class="aspect-[3/4] w-full overflow-hidden bg-gray-50 relative rounded-sm">
                        <!-- Discount Badge -->
                        @if($product->discount > 0)
                            <div class="absolute top-4 left-4 z-10 bg-black text-white px-2.5 py-1 text-[9px] font-black tracking-widest uppercase">
                                -{{ $product->discount }}%
                            </div>
                        @endif

                        <!-- Wishlist Button (Icon) -->
                        <button class="absolute top-4 right-4 z-10 p-2 bg-white/80 backdrop-blur-md rounded-full text-black opacity-0 transform translate-y-[-10px] group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 hover:bg-black hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>

                        <img src="{{ $product->image_path }}" 
                             alt="{{ $product->name }}" 
                             class="object-cover object-center w-full h-full transition-transform duration-700 group-hover:scale-110">
                        
                        <!-- Quick Add Button -->
                        <div class="absolute inset-x-0 bottom-0 z-20 p-4 transition-transform duration-500 ease-out transform translate-y-full group-hover:translate-y-0">
                             <form action="{{ route('cart.add', $product->id) }}" method="POST" class="w-full">
                                @csrf
                            <button class="w-full py-4 text-[11px] font-bold tracking-[0.2em] text-white uppercase bg-black hover:bg-gray-800 shadow-2xl transition-colors">
                                Quick Add To Cart
                            </button>
                             </form>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="flex flex-col gap-2 mt-6">
                        <h3 class="text-[13px] font-bold tracking-widest text-gray-900 uppercase">
                           
                                <span aria-hidden="true" class="absolute inset-0 z-0"></span>
                                {{ $product->name }}
                            
                        </h3>
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-black text-black">
                                LKR {{ number_format($product->price * (1 - ($product->discount / 100)), 2) }}
                            </span>
                            @if($product->discount > 0)
                                <span class="text-xs text-gray-400 line-through">
                                    LKR {{ number_format($product->price, 2) }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
@endsection

