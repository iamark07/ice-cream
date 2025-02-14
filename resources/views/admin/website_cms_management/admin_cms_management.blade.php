@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <h3 class="text-2xl font-bold mb-6 text-gray-800">Website CMS Management</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Edit Pages -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Edit Pages</h4>
            <p class="text-gray-500 text-sm mb-4">Manage and edit website pages easily.</p>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Manage</button>
        </div>
        
        <!-- Manage Blogs -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Manage Blogs</h4>
            <p class="text-gray-500 text-sm mb-4">Create, edit, and delete blog posts.</p>
            <button class="bg-green-600 text-white px-4 py-2 rounded">Manage</button>
        </div>
        
        <!-- FAQs Management -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">FAQs Management</h4>
            <p class="text-gray-500 text-sm mb-4">Update frequently asked questions.</p>
            <button class="bg-yellow-600 text-white px-4 py-2 rounded">Manage</button>
        </div>
    </div>
    
    <div class="mt-8">
        <h4 class="text-xl font-semibold mb-4 text-gray-800">Quick Actions</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Add New Page -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h4 class="text-lg font-semibold mb-2 text-gray-700">Add New Page</h4>
                <button class="bg-purple-600 text-white px-4 py-2 rounded">Create</button>
            </div>
            
            <!-- View All Content -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h4 class="text-lg font-semibold mb-2 text-gray-700">View All Content</h4>
                <button class="bg-red-600 text-white px-4 py-2 rounded">View</button>
            </div>
        </div>
    </div>
</div>
@endsection
