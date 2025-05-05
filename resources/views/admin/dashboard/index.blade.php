@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col gap-4 p-4 pb-20 bg-slate-50">
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-full">
                <h2 class="text-2xl font-semibold mb-4">Total Sapi</h2>
                <p class="text-3xl font-bold">{{ $total_sapi }}</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-full">
                <h2 class="text-2xl font-semibold mb-4">Total Kambing</h2>
                <p class="text-3xl font-bold">{{ $total_kambing }}</p>
            </div>
            <!-- Total Sapi Sakit -->
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-full">
                <h2 class="text-2xl font-semibold mb-4">Total Sapi Sakit</h2>
                <p class="text-3xl font-bold">{{ $sapi_sakit }}</p>
            </div>
            <!-- Total Kambing Sakit -->
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-full">
                <h2 class="text-2xl font-semibold mb-4">Total Kambing Sakit</h2>
                <p class="text-3xl font-bold">{{ $kambing_sakit }}</p>
            </div>

        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-full">
                <h2 class="text-2xl font-semibold mb-4">Data Sapi</h2>
                <canvas id="sapiChart" class="w-full"></canvas>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col w-full">
                <h2 class="text-2xl font-semibold mb-4">Data Kambing</h2>
                <canvas id="kambingChart" class="w-full"></canvas>
            </div>
        </div>

        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <p class="text-lg font-semibold">Riwayat Rekam Bobot</p>
            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Bobot</th>
                            <th>PJ</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekam_bobot as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->bobot }}</td>
                                <td>{{ $item->user->nama }}</td>
                                <td class="flex gap-1">

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
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
