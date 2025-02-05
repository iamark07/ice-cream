@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10"><!-- Orders Management -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="font-semibold text-lg mb-4">Order Management</h3>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="text-left p-2">Order ID</th>
                        <th class="text-left p-2">Customer</th>
                        <th class="text-left p-2">Status</th>
                        <th class="text-left p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">ORD1234</td>
                        <td class="p-2">John Doe</td>
                        <td class="p-2">Pending</td>
                        <td class="p-2"><button class="bg-indigo-600 text-white px-4 py-1 rounded-lg">Mark as Shipped</button></td>
                    </tr>
                    <!-- More rows here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
