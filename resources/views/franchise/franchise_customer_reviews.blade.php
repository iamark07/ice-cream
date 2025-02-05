@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10">

        <!-- Customer Reviews -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="font-semibold text-lg mb-4">Customer Reviews</h3>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="text-left p-2">Customer</th>
                        <th class="text-left p-2">Rating</th>
                        <th class="text-left p-2">Review</th>
                        <th class="text-left p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">John Doe</td>
                        <td class="p-2">5 Stars</td>
                        <td class="p-2">Great taste! Will order again.</td>
                        <td class="p-2"><button class="bg-indigo-600 text-white px-4 py-1 rounded-lg">Respond</button></td>
                    </tr>
                    <!-- More rows here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection