@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <h3 class="text-lg font-bold mb-4">Edit Offer</h3>
    <div>
        <label class="text-sm font-medium inline-block mb-2">Offer Title</label>
        <input type="text" class="text-sm border p-2 rounded w-full" value="Summer Special">
        
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
                <label class="text-sm font-medium inline-block mb-2">Discount Type</label>
                <select class="text-sm border p-2 rounded w-full">
                    <option selected>Percentage</option>
                    <option>Fixed Amount</option>
                    <option>Free Item</option>
                </select>
            </div>
            <div>
                <label class="text-sm font-medium inline-block mb-2">Discount Value</label>
                <input type="number" class="text-sm border p-2 rounded w-full" value="20">
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
                <label class="text-sm font-medium inline-block mb-2">Start Date</label>
                <input type="date" class="text-sm border p-2 rounded w-full" value="2024-05-01">
            </div>
            <div>
                <label class="text-sm font-medium inline-block mb-2">End Date</label>
                <input type="date" class="text-sm border p-2 rounded w-full" value="2024-08-31">
            </div>
        </div>
        
        <div class="flex justify-end gap-2 text-sm mt-4">
            <a href="{{ route('admin_promotions')}}"><button class="bg-gray-400 text-white px-4 py-2 rounded">Cancel</button></a>
            <button class="bg-yellow-500 text-white px-4 py-2 rounded">Update Offer</button>
        </div>
    </div>
</div>
@endsection
