@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10">
        <!-- Sales Reports Chart -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="font-semibold text-lg mb-4">Sales & Revenue</h3>
            <!-- Graph or Chart Component (e.g., using Chart.js or any other library) -->
            <canvas id="salesChart"></canvas>
        </div>

    </div>
@endsection