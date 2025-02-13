@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14 flex items-center justify-center">
    <div class="max-w-4xl w-full bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Add New Product</h2>
        <form action="" method="POST" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" id="productName" name="product_name" placeholder="Enter product name" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" id="productPrice" name="price" placeholder="Enter price" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="text" id="productStock" name="stock" placeholder="Enter stock quantity" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Category</label>
                <select id="productCategory" name="category" class="mt-1 p-3 w-full border rounded outline-none" required>
                    <option value="" disabled selected>Select Category</option>
                </select>
            </div>
            
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin_product')}}"><button class="bg-gray-400 text-white px-5 py-2 rounded-lg hover:bg-gray-500 transition">Cancel</button></a>
                <button type="submit" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600 transition">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
