@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10">

        <!-- Promotions Management -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="font-semibold text-lg mb-4">Promotions & Discounts</h3>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="text-left p-2">Promo Code</th>
                        <th class="text-left p-2">Discount</th>
                        <th class="text-left p-2">Expiry Date</th>
                        <th class="text-left p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">ICE20</td>
                        <td class="p-2">20%</td>
                        <td class="p-2">2025-02-28</td>
                        <td class="p-2"><button class="bg-indigo-600 text-white px-4 py-1 rounded-lg">Edit</button></td>
                    </tr>
                    <!-- More rows here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection