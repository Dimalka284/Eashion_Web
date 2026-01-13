<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Create Product</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Product Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Category -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Category</label>
                <select name="category_id" class="w-full border rounded px-3 py-2" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Price -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Price (LKR)</label>
                <input type="number" name="price" value="{{ old('price') }}" class="w-full border rounded px-3 py-2" step="0.01" required>
            </div>

            <!-- Discount -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Discount (LKR)</label>
                <input type="number" name="discount" value="{{ old('discount') }}" class="w-full border rounded px-3 py-2" step="0.01">
            </div>

            <!-- Stock Quantity -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Stock Quantity</label>
                <input type="number" name="stock_qty" value="{{ old('stock_qty') }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <!-- Fit Type -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Fit Type</label>
                <input type="text" name="fit_type" value="{{ old('fit_type') }}" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Product Image</label>
                <input type="file" name="image" accept="image/*" class="w-full">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Description</label>
                <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Product</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Product</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Delete Product</button>

        </form>
    </div>
