@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Detail Hewan</div>
            </div>
            <div class="grid grid-cols-2 gap-x-8">
                <!-- Kolom Kiri -->
                <div class="grid grid-cols-3 gap-y-2">
                    <p class="font-medium">Nama Hewan</p>
                    <p class="text-start">:</p>
                    <p>{{ $data->nama_hewan }}</p>

                </div>

                <!-- Kolom Kanan -->
                <div class="grid grid-cols-3 gap-y-2">
                    <p class="font-medium">Jenis Hewan</p>
                    <p class="text-start">:</p>
                    <p>{{ $data->jenis_hewan }}</p>

                    <p class="font-medium">Tanggal Lahir</p>
                    <p class="text-start">:</p>
                    <p>{{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d-m-Y') }}</p>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md w-full">
                <p class="text-lg font-semibold mb-4">Grafik Perkembangan Bobot</p>
                <canvas id="perkembanganBobotChart" height="100"></canvas>
            </div>
            
            <div class="bg-white p-4 rounded-lg shadow-md w-full">
                <p class="text-lg font-semibold mb-4">Grafik Selisih Bobot</p>
                <canvas id="selisihBobotChart" height="100"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const bobotData = @json($data->rekam_bobot);
                const labels = bobotData.map(item => item.tanggal);
                const bobotValues = bobotData.map(item => item.bobot);
                const selisihValues = bobotData.map(item => item.selisih);
            
                // Chart Perkembangan Bobot
                const perkembanganCtx = document.getElementById('perkembanganBobotChart').getContext('2d');
                new Chart(perkembanganCtx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Bobot (kg)',
                            data: bobotValues,
                            borderColor: 'rgb(75, 192, 192)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            tension: 0.3
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Bobot (kg)'
                                }
                            }
                        }
                    }
                });
            
                // Chart Selisih Bobot
                const selisihCtx = document.getElementById('selisihBobotChart').getContext('2d');
                new Chart(selisihCtx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Selisih Bobot (kg)',
                            data: selisihValues,
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgb(255, 99, 132)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Selisih Bobot (kg)'
                                }
                            }
                        }
                    }
                });
            </script>
                
        </div>
        <div class="flex gap-4">
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
                            @foreach ($data->rekam_bobot as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->created_at }}</td>
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
            <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
                <p class="text-lg font-semibold">Riwayat Penyakit</p>
                <div class="overflow-x-auto">
                    <table class="table rounded-lg">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Penyakit</th>
                                <th>Awal Sakit</th>
                                <th>Sembuh</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->riwayat_penyakit as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_penyakit }}</td>
                                    <td>{{ $item->awal_sakit }}</td>
                                    <td>{{ $item->sembuh }}</td>
                                    <td class="flex gap-1">
    
                                    </td>
                                </tr>
                            @endforeach
    
    
                        </tbody>
                    </table>
    
                </div>
            </div>
        </div>
    </section>
@endsection
