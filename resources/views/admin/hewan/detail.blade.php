@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
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

                    <p class="font-medium">Kandang</p>
                    <p class="text-start">:</p>
                    <p>{{ $data->kandang->nama_kandang }}</p>
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
    </section>
@endsection
