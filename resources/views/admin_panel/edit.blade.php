<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">

    <div class="max-w-4xl px-4 py-10 mx-auto">
        
        <!-- Breadcrumb / Back Link -->
        <div class="mb-6">
            <a href="{{ route('dashboard') }}" class="flex items-center text-indigo-600 hover:text-indigo-800">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Dashboard
            </a>
        </div>

        <div class="overflow-hidden bg-white shadow-xl rounded-2xl">
            <div class="px-8 py-6 bg-indigo-600">
                <h1 class="text-2xl font-bold text-white">Edit Product: {{ $product->name }}</h1>
                <p class="text-sm text-indigo-100">Update product details and availability</p>
            </div>

            <div class="p-8">
                @if ($errors->any())
                    <div class="p-4 mb-6 text-red-700 border-l-4 border-red-500 rounded-r-lg bg-red-50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <ul class="text-sm list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Name -->
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Product Name</label>
                            <input type="text" name="name" value="{{ old('name', $product->name) }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Category</label>
                            <select name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Price (LKR)</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">LKR</span>
                                </div>
                                <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01"
                                       class="w-full px-4 py-2 pl-12 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>
                        </div>

                        <!-- Stock Quantity -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Stock Quantity</label>
                            <input type="number" name="stock_qty" value="{{ old('stock_qty', $product->stock_qty) }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Discount -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Discount (LKR)</label>
                            <input type="number" name="discount" value="{{ old('discount', $product->discount) }}" step="0.01"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- Color -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Color</label>
                            <input type="text" name="color" value="{{ old('color', $product->color) }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- Size -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Size</label>
                            <input type="text" name="size" value="{{ old('size', $product->size) }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- Fit Type -->
                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Fit Type</label>
                            <input type="text" name="fit_type" value="{{ old('fit_type', $product->fit_type) }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- Image Upload -->
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Product Image</label>
                            
                            <div class="flex items-center space-x-6">
                                @if($product->image_path)
                                    <div class="shrink-0">
                                        <img class="object-cover w-24 h-24 border rounded-lg shadow-sm" src="{{ $product->image_path }}" alt="Current product image">
                                        <p class="text-[10px] text-gray-500 text-center mt-1">Current Image</p>
                                    </div>
                                @endif
                                <div class="flex-1">
                                    <label class="block">
                                        <span class="sr-only">Choose product photo</span>
                                        <input type="file" name="image" accept="image/*"
                                               class="block w-full p-4 text-sm text-gray-500 border border-gray-300 border-dashed rounded-lg cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                    </label>
                                    <p class="mt-1 text-xs text-gray-500">PNG, JPG up to 2MB. Leave empty to keep current image.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-semibold text-gray-700">Description</label>
                            <textarea name="description" rows="4" 
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $product->description) }}</textarea>
                        </div>
                    </div>

                    <div class="flex items-center justify-end pt-6 space-x-4 border-t border-gray-100">
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 font-medium text-gray-700 hover:text-gray-900">
                            Cancel
                        </a>
                        <button type="submit" 
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2.5 px-8 rounded-lg shadow-lg hover:shadow-indigo-200 transition-all duration-200">
                            Update Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
