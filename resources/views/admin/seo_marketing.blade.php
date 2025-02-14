@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <h3 class="text-2xl font-bold mb-6 text-gray-800">SEO & Digital Marketing Tools</h3>
    
    <div class="grid grid-cols-6 gap-6">
        <!-- Meta Tag Management -->
        <div class="col-span-6 sm:col-span-3 bg-white p-6 rounded-lg shadow-lg">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Meta Tag Management</h4>
            <input type="text" placeholder="Meta Title" class="w-full p-2 border rounded mb-2">
            <textarea placeholder="Meta Description" class="w-full h-[130px] p-2 border rounded"></textarea>
            <button class="mt-3 w-full bg-blue-600 text-white px-4 py-2 rounded">Save Meta Tags</button>
        </div>
        
        <!-- Keyword Analysis -->
        <div class="col-span-6 sm:col-span-3 bg-white p-6 rounded-lg shadow-lg">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Keyword Analysis</h4>
            <input type="text" placeholder="Enter Keyword" class="w-full p-2 border rounded mb-2">
            <button class="w-full bg-green-600 text-white px-4 py-2 rounded">Analyze Keyword</button>
            <canvas id="keywordChart" class="mt-4"></canvas>
        </div>
        
        <!-- Google Analytics -->
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 bg-white p-6 rounded-lg shadow-lg">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Google Analytics</h4>
            <p class="text-gray-500 text-sm">Track your website performance.</p>
            <canvas id="analyticsChart" class="mt-4"></canvas>
        </div>

        <!-- Social Media Tracking -->
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 bg-white p-6 rounded-lg shadow-lg">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Social Media Engagement</h4>
            <canvas id="socialChart" class="mt-4"></canvas>
        </div>
        
        <!-- Site Performance -->
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 bg-white p-6 rounded-lg shadow-lg">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Website Performance</h4>
            <p class="text-gray-500 text-sm">Monitor site speed and optimizations.</p>
            <button class="mt-3 w-full bg-yellow-500 text-white px-4 py-2 rounded">Run Speed Test</button>
        </div>
    </div>
</div>

<!-- Chart.js Integration -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const keywordCtx = document.getElementById('keywordChart').getContext('2d');
    new Chart(keywordCtx, {
        type: 'bar',
        data: {
            labels: ['Keyword 1', 'Keyword 2', 'Keyword 3', 'Keyword 4', 'Keyword 5'],
            datasets: [{
                label: 'Search Volume',
                data: [5000, 3000, 1500, 2500, 4500],
                backgroundColor: '#4CAF50'
            }]
        }
    });
    
    const analyticsCtx = document.getElementById('analyticsChart').getContext('2d');
    new Chart(analyticsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr'],
            datasets: [{
                label: 'Visitors',
                data: [1000, 1500, 1800, 2500],
                borderColor: '#2196F3',
                fill: true,
                backgroundColor: 'rgba(33, 150, 243, 0.2)'
            }]
        }
    });
    
    const socialCtx = document.getElementById('socialChart').getContext('2d');
    new Chart(socialCtx, {
        type: 'doughnut',
        data: {
            labels: ['Facebook', 'Instagram', 'Twitter'],
            datasets: [{
                data: [60, 25, 15],
                backgroundColor: ['#3b82f6', '#db2777', '#60a5fa']
            }]
        }
    });
</script>
@endsection