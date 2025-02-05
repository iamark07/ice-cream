@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10">

        <!-- Inventory Management -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="font-semibold text-lg mb-4">Inventory</h3>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="text-left p-2">Product Name</th>
                        <th class="text-left p-2">Stock Level</th>
                        <th class="text-left p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">Vanilla Ice Cream</td>
                        <td class="p-2">100 units</td>
                        <td class="p-2"><button class="bg-indigo-600 text-white px-4 py-1 rounded-lg">Order More</button></td>
                    </tr>
                    <!-- More rows here -->
                </tbody>
            </table>
        </div>

    </div>

@endsection