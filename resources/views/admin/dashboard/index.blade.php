@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        {{-- <div class="w-full gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Dashboard</div>
            </div>
        </div> --}}
        <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-1/2">
            <h2 class="text-2xl font-semibold mb-4">Data Sapi</h2>
            <canvas id="sapiChart" class="w-full"></canvas>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-1/2">
            <h2 class="text-2xl font-semibold mb-4">Data Kambing</h2>
            <canvas id="kambingChart" class="w-full"></canvas>
        </div>    

        <!-- Chart.js CDN -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('sapiChart').getContext('2d');
            const sapiChart = new Chart(ctx, {
                type: 'bar', // Ganti ke 'pie' kalau mau pie chart
                data: {
                    labels: ['Fattening', 'Breeding', 'Anakan'],
                    datasets: [{
                        label: 'Jumlah Sapi',
                        data: [{{ $sapi_fattening }}, {{ $sapi_breeding }}, {{ $sapi_anakan }}],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(153, 102, 255, 0.7)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            precision: 0
                        }
                    }
                }
            });

            // Chart untuk Kambing
            const ctxKambing = document.getElementById('kambingChart').getContext('2d');
            new Chart(ctxKambing, {
                type: 'bar',
                data: {
                    labels: ['Fattening', 'Breeding', 'Anakan'],
                    datasets: [{
                        label: 'Jumlah Kambing',
                        data: [{{ $kambing_fattening }}, {{ $kambing_breeding }}, {{ $kambing_anakan }}],
                        backgroundColor: [
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(201, 203, 207, 0.7)'
                        ],
                        borderColor: [
                            'rgba(153, 102, 255, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(201, 203, 207, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            precision: 0
                        }
                    }
                }
            });
        </script>
    </section>
@endsection
