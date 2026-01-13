<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">

    <!-- Page Container -->
    <div class="px-4 py-10 mx-auto max-w-7xl">

        <!-- Success Message -->
        @if (session('success'))
            <div class="flex items-center p-4 mb-6 text-green-700 bg-green-100 border-l-4 border-green-500 rounded shadow-sm">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Product Dashboard</h1>

            <a href="{{ route('create') }}"
               class="px-4 py-2 text-white bg-indigo-600 rounded shadow hover:bg-indigo-700">
                + Add Product
            </a>
        </div>

        <!-- Table Card -->
        <div class="overflow-hidden bg-white rounded-lg shadow">

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Product</th>
                        <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Price</th>
                        <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Stock</th>
                        <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Category</th>
                        <th class="px-6 py-3 text-xs font-medium text-center text-gray-500 uppercase">Image</th>
                        <th class="px-6 py-3 text-xs font-medium text-right text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($products as $product)
                        <tr class="hover:bg-gray-50">

                            <!-- Product Name + Description -->
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">
                                    {{ $product->name }}
                                </div>
                                <div class="max-w-xs text-sm text-gray-500 truncate">
                                    {{ $product->description }}
                                </div>
                            </td>

                            <!-- Price -->
                            <td class="px-6 py-4 text-gray-700">
                                LKR {{ number_format($product->price, 2) }}
                            </td>

                            <!-- Stock -->
                            <td class="px-6 py-4">
                                @if ($product->stock_qty > 0)
                                    <span class="px-2 py-1 text-xs text-green-700 bg-green-100 rounded">
                                        {{ $product->stock_qty }} in stock
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs text-red-700 bg-red-100 rounded">
                                        Out of stock
                                    </span>
                                @endif
                            </td>

                            <!-- Category -->
                            <td class="px-6 py-4 text-gray-700">
                                {{ $product->category->name ?? 'N/A' }}
                            </td>

                            <!-- Image -->
                            <td class="px-6 py-4 text-center">
                                <img src="{{ $product->image_path }}"
                                     class="object-cover w-12 h-12 mx-auto border rounded">
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 space-x-2 text-right">
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="inline-flex items-center px-3 py-1 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">
                                    Edit
                                </a>

                                <form action="{{ route('products.destroy', $product->id) }}"
                                      method="POST"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Are you sure?')"
                                            class="inline-flex items-center px-3 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-10 text-center text-gray-500">
                                No products found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>

</body>
</html>
