<div>
    <div x-data="{ isOpen: @entangle('isOpen') }" class="flex items-center gap-2">
        <div class="flex items-center gap-3 ml-1 lg:hidden">
            <a href="{{ url('/men') }}" wire:navigate class="text-[10px] font-bold tracking-[0.15em] text-black uppercase hover:opacity-60 transition-opacity">Men</a>
            <div class="w-[1px] h-3 bg-gray-200"></div>
            <a href="{{ url('/women') }}" wire:navigate class="text-[10px] font-bold tracking-[0.15em] text-black uppercase hover:opacity-60 transition-opacity">Women</a>
        </div>
        <div 
            class="fixed inset-0 z-[100] lg:hidden {{ $isOpen ? 'pointer-events-auto' : 'pointer-events-none' }}" 
            role="dialog" 
            aria-modal="true"
        >
            <div 
                wire:click="closeMenu"
                class="fixed inset-0 bg-black/60 backdrop-blur-md transition-opacity duration-500 ease-in-out {{ $isOpen ? 'opacity-100' : 'opacity-0' }}"
            ></div>

            <!-- Menu Content (Slide from left) -->
            <div 
                class="fixed inset-y-0 left-0 w-[85%] max-w-[320px] bg-white shadow-2xl transition-transform duration-500 ease-out transform {{ $isOpen ? 'translate-x-0' : '-translate-x-full' }}"
            >
                <div class="flex flex-col h-full overflow-hidden">
                    <!-- Header -->
                    <div class="flex items-center justify-between px-6 py-8">
                        <span class="text-2xl font-black tracking-[0.2em] text-black">EASHION</span>
                        <button wire:click="closeMenu" class="p-2 -mr-2 text-gray-400 transition-colors hover:text-black focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Navigation Links -->
                    <nav class="flex-1 px-6 pb-10 overflow-y-auto custom-scrollbar">
                            <!-- Main Categories -->
                        <div class="flex flex-col space-y-1">
                            <p class="text-[10px] font-bold tracking-[0.3em] text-gray-400 uppercase mb-4 px-1">Shop Categories</p>
                            
                            <!-- Men's Section -->
                            <div class="mb-6">
                                <a href="{{ url('/men') }}" wire:navigate class="flex items-center justify-between py-4 border-b group border-gray-50 focus:outline-none">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center justify-center w-12 h-12 transition-colors duration-300 rounded-full bg-gray-50 group-hover:bg-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-900 transition-colors group-hover:text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.118a7.5 7.5 0 0 1 15 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.5-1.632Z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-base font-black tracking-widest text-gray-900">MEN</span>
                                            <span class="text-[10px] text-gray-400 font-medium">Browse All Men's Collection</span>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 transition-all group-hover:text-black group-hover:translate-x-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                                <div class="grid grid-cols-2 gap-2 px-4 mt-3">
                                    <a href="{{ url('/men') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">NEW ARRIVALS</a>
                                    <a href="{{ url('/men') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">CLOTHING</a>
                                    <a href="{{ url('/men') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">SHOES</a>
                                    <a href="{{ url('/men') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">ACCESSORIES</a>
                                </div>
                            </div>

                            <!-- Women's Section -->
                            <div class="mb-6">
                                <a href="{{ url('/women') }}" wire:navigate class="flex items-center justify-between py-4 border-b group border-gray-50 focus:outline-none">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center justify-center w-12 h-12 transition-colors duration-300 rounded-full bg-gray-50 group-hover:bg-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-900 transition-colors group-hover:text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.118a7.5 7.5 0 0 1 15 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.5-1.632Z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-base font-black tracking-widest text-gray-900">WOMEN</span>
                                            <span class="text-[10px] text-gray-400 font-medium">Browse All Women's Collection</span>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 transition-all group-hover:text-black group-hover:translate-x-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                                <div class="grid grid-cols-2 gap-2 px-4 mt-3">
                                    <a href="{{ url('/women') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">DRESSES</a>
                                    <a href="{{ url('/women') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">CLOTHING</a>
                                    <a href="{{ url('/women') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">SHOES</a>
                                    <a href="{{ url('/women') }}" class="text-[11px] font-bold text-gray-500 hover:text-black hover:translate-x-1 transition-all">BAGS</a>
                                </div>
                            </div>

                            <a href="{{ url('/cart') }}" wire:navigate class="flex items-center justify-between px-6 py-6 mt-4 bg-black group focus:outline-none rounded-2xl">
                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                    <span class="text-sm font-black tracking-widest text-white">VIEW CART</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-all text-white/50 group-hover:text-white group-hover:translate-x-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>


                        <!-- Collections Grid Preview -->
                        <div class="mt-12">
                            <p class="text-[10px] font-bold tracking-[0.3em] text-gray-400 uppercase mb-4 px-1">Featured</p>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="{{ url('/men') }}" class="relative aspect-[4/5] bg-gray-100 rounded-lg overflow-hidden group">
                                    <div class="absolute inset-0 transition-colors bg-black/20 group-hover:bg-black/40"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="text-white text-[10px] font-bold tracking-widest uppercase">New in Men</span>
                                    </div>
                                </a>
                                <a href="{{ url('/women') }}" class="relative aspect-[4/5] bg-gray-100 rounded-lg overflow-hidden group">
                                    <div class="absolute inset-0 transition-colors bg-black/20 group-hover:bg-black/40"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="text-white text-[10px] font-bold tracking-widest uppercase">Essentials</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Customer Support -->
                        <div class="px-1 mt-12 space-y-4">
                            <p class="text-[10px] font-bold tracking-[0.3em] text-gray-400 uppercase">Support</p>
                            <div class="flex flex-col space-y-3">
                                <a href="#" class="text-xs font-semibold text-gray-700 transition-colors hover:text-black">Track Your Order</a>
                                <a href="#" class="text-xs font-semibold text-gray-700 transition-colors hover:text-black">Shipping & Returns</a>
                                <a href="#" class="text-xs font-semibold text-gray-700 transition-colors hover:text-black">Contact Us</a>
                            </div>
                        </div>
                    </nav>

                    <!-- Footer -->
                    <div class="flex items-center justify-between p-6 border-t border-gray-100 bg-gray-50">
                        <div class="flex items-center space-x-4">
                            <a href="#" class="text-gray-400 transition-colors hover:text-black">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                            </a>
                            <a href="#" class="text-gray-400 transition-colors hover:text-black">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        </div>
                        <span class="text-[10px] font-medium text-gray-400 tracking-widest uppercase">&copy; {{ date('Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .custom-scrollbar::-webkit-scrollbar {
                width: 3px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: transparent;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #f1f1f1;
                border-radius: 10px;
            }
        </style>
    </div>
</div>

