@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <h3 class="text-lg font-bold mb-4">New Marketing Campaign</h3>
    <div>
        <div class="mt-4">
            <label class="text-sm font-medium mb-2 inline-block">Campaign Title</label>
            <input type="text" class="text-sm border p-2 rounded w-full">
        </div>
        
        <div class="mt-4">
            <label class="text-sm font-medium mb-2 inline-block">Campaign Type</label>
            <select class="text-sm border p-2 rounded w-full">
                <option>Email Campaign</option>
                <option>SMS Campaign</option>
                <option>Push Notification</option>
            </select>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
                <label class="text-sm font-medium mb-2 inline-block">Start Date</label>
                <input type="date" class="text-sm border p-2 rounded w-full">
            </div>
            <div>
                <label class="text-sm font-medium mb-2 inline-block">End Date</label>
                <input type="date" class="text-sm border p-2 rounded w-full">
            </div>
        </div>
        
        <div class="mt-4">
            <label class="text-sm font-medium mb-2 inline-block">Campaign Message</label>
            <textarea class="text-sm border p-2 rounded w-full h-32"></textarea>
        </div>
        
        <div class="flex justify-end gap-2 text-sm mt-5">
            <a href="{{ route('admin_promotions') }}"><button class="bg-gray-400 text-white px-4 py-2 rounded">Cancel</button></a>
            <button class="bg-pink-600 text-white px-4 py-2 rounded">Schedule</button>
        </div>
    </div>
</div>
@endsection