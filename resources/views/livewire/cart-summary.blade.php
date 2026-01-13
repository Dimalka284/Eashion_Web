<div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <!-- Cart Items List -->
        <div class="lg:col-span-8">
            <div class="flex items-center justify-between mb-10 pb-6 border-b border-gray-100">
                <h1 class="text-3xl font-serif italic text-gray-900">Your Selection <span class="text-sm not-italic font-bold text-gray-400 ml-2 uppercase tracking-[0.2em]">({{ count($cartItems) }} Items)</span></h1>
            </div>

            <div class="space-y-10">
                @forelse($cartItems as $item)
                    <div class="flex flex-col sm:flex-row gap-8 pb-10 border-b border-gray-50 last:border-0 group animate-fade-in">
                        <!-- Checkbox & Image Wrapper -->
                        <div class="flex gap-6 items-center">
                            <div class="relative flex items-center">
                                <input type="checkbox" 
                                       wire:model.live="selectedItems" 
                                       value="{{ $item['id'] }}" 
                                       class="w-5 h-5 border-2 border-gray-200 rounded text-black focus:ring-black cursor-pointer transition-all duration-300">
                            </div>

                            <div class="relative overflow-hidden w-32 h-44 bg-gray-50 rounded-xl shadow-sm group-hover:shadow-md transition-all duration-500">
                                <img src="{{ asset($item['product']['image_path']) }}" 
                                     alt="{{ $item['product']['name'] }}" 
                                     class="object-cover w-full h-full transition-all duration-1000 group-hover:scale-110">
                                <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-500"></div>
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="flex flex-col flex-1 justify-between py-2">
                            <div class="space-y-2">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-[10px] font-bold tracking-[0.3em] uppercase text-rose-500 mb-1">
                                            {{ $item['product']['category']['name'] ?? 'The Collection' }}
                                        </p>
                                        <h3 class="text-lg font-bold text-gray-900 tracking-tight group-hover:text-rose-500 transition-colors duration-300">
                                            {{ $item['product']['name'] }}
                                        </h3>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-black text-gray-900">
                                            LKR {{ number_format($item['product']['price'] * (1 - ($item['product']['discount'] / 100)), 2) }}
                                        </p>
                                        <p class="text-[10px] text-gray-400 font-medium">LKR {{ number_format($item['product']['price'] * (1 - ($item['product']['discount'] / 100)), 2) }} / unit</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-end justify-between mt-8">
                                <!-- Custom Quantity Control -->
                                <div class="flex items-center bg-gray-50 p-1.5 rounded-xl border border-gray-100">
                                    <button wire:click="decrement({{ $item['id'] }})" 
                                            class="flex items-center justify-center w-9 h-9 bg-white rounded-lg shadow-sm text-gray-500 hover:bg-gray-900 hover:text-white transition-all duration-300 disabled:opacity-30 disabled:hover:bg-white disabled:hover:text-gray-500"
                                            @disabled($item['quantity'] <= 1)>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M18 12H6" />
                                        </svg>
                                    </button>

                                    <span class="w-12 text-sm font-black text-center text-gray-900">{{ $item['quantity'] }}</span>

                                    <button wire:click="increment({{ $item['id'] }})" 
                                            class="flex items-center justify-center w-9 h-9 bg-white rounded-lg shadow-sm text-gray-500 hover:bg-gray-900 hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m6-6H6" />
                                        </svg>
                                    </button>
                                </div>

                                <button wire:click="remove({{ $item['id'] }})" 
                                        class="group/remove flex items-center gap-2 text-[10px] font-bold text-gray-400 hover:text-rose-600 uppercase tracking-[0.2em] transition-all duration-300">
                                    <span class="bg-gray-50 p-2 rounded-lg group-hover/remove:bg-rose-50 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </span>
                                    Remove Item
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center bg-gray-50/50 rounded-3xl border-2 border-dashed border-gray-100">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Your bag is empty</h3>
                        <p class="text-gray-400 mt-2 mb-8">Items stay in your bag for 30 days.</p>
                        <a href="{{ route('products.index') }}" class="inline-block px-10 py-4 bg-gray-900 text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full hover:bg-rose-600 transition-all duration-500 shadow-xl shadow-gray-900/10">
                            Continue Shopping
                        </a>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Order Summary Sidebar -->
        <div class="lg:col-span-4">
            <div class="sticky top-8 bg-white p-8 rounded-3xl border border-gray-100 shadow-2xl shadow-gray-200/50">
                <h2 class="text-sm font-black tracking-[0.3em] uppercase text-gray-900 mb-8 pb-4 border-b border-gray-50">Summary</h2>
                
                <div class="space-y-6">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Subtotal</span>
                        <span class="font-bold text-gray-900 tabular-nums">LKR {{ number_format($this->subtotal, 2) }}</span>
                    </div>
                    
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Shipping</span>
                        <span class="text-green-600 font-bold uppercase text-[10px] tracking-widest bg-green-50 px-2 py-1 rounded">Calculated at next step</span>
                    </div>

                    <div class="pt-6 border-t border-gray-50 mt-6">
                        <div class="flex items-baseline justify-between">
                            <span class="text-xs font-black uppercase text-gray-900 tracking-widest">Total</span>
                            <div class="text-right">
                                <span class="text-2xl font-black text-gray-900 tabular-nums">LKR {{ number_format($this->subtotal, 2) }}</span>
                                <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-wide">Inclusive of taxes</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 space-y-4">
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            @foreach($selectedItems as $id)
                                <input type="hidden" name="items[]" value="{{ $id }}">
                            @endforeach
                            <button type="submit" class="group relative w-full h-14 bg-gray-900 text-white text-[11px] font-black uppercase tracking-[0.3em] hover:bg-rose-600 rounded-2xl transition-all duration-500 shadow-xl shadow-gray-900/20 overflow-hidden">
                                <span class="relative z-10">Proceed to Checkout</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:animate-shimmer"></div>
                            </button>
                        </form>
                        
                        <button type="button" class="w-full flex items-center justify-center gap-2 h-14 bg-white text-gray-900 border-2 border-gray-100 text-[11px] font-black uppercase tracking-[0.3em] hover:border-gray-900 rounded-2xl transition-all duration-500">
                            Apply Promo Code
                        </button>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-50 flex items-center justify-center gap-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" class="h-4 opacity-30 invert grayscale" alt="Visa">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" class="h-6 opacity-30 grayscale" alt="Mastercard">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-4 opacity-30 grayscale" alt="PayPal">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }
        .group:hover .group-hover\:animate-shimmer {
            animation: shimmer 1.5s infinite;
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</div>


    