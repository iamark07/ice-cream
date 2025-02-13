@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14 flex items-center justify-center">
    <div class="max-w-4xl w-full bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Franchise</h2>
        <form action="" method="POST" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Franchise Name</label>
                <input type="text" id="franchiseName" name="franchiseName" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Owner Name</label>
                <input type="text" id="ownerName" name="ownerName" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" id="location" name="location" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                <input type="tel" id="contact" name="contact" class="mt-1 p-3 w-full border rounded outline-none" required>
            </div>
            
            <div class="flex justify-end gap-3">
                <a href="{{route('franchise')}}"><button class="bg-gray-400 text-white px-5 py-2 rounded-lg hover:bg-gray-500 transition">Cancel</button></a>
                <button type="submit" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600 transition">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
