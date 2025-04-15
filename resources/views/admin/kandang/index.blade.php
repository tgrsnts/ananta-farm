@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-1/2 bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Peta Kandang</h2>

            <div id="map" class="w-full h-[500px] rounded-lg"></div>
        </div>
        <!-- Leaflet CSS & JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        <script>
            const map = L.map('map').setView([-6.7832, 106.7023], 18);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            const kandangData = @json($kandang);

            kandangData.forEach(k => {
                const marker = L.marker([k.latitude, k.longitude]).addTo(map);
                // marker.bindTooltip(`<b>${k.nama_kandang}</b>`)
                marker.bindPopup(`<b>${k.nama_kandang}</b><br>${k.sapi} sapi<br>${k.kambing} kambing`);
            });
        </script>

        <div class="w-1/2 flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Data Kandang</div>
                <div class="flex gap-2">
                    <button type="button"
                        class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
                        {{-- onclick="tambahKandang()" --}} onclick="document.getElementById('addKandangModal').showModal()">
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Kandang -->
                    <dialog id="addKandangModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Tambah Kandang</h2>
                            <form action="{{ route('admin.kandang.store') }}" method="POST" class="flex flex-col gap-4">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama Kandang</label>
                                        <input type="text" name="nama_kandang"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Latitude</label>
                                        <input type="text" name="latitude" id="latitude"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Longitude</label>
                                        <input type="text" name="longitude" id="longitude"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>

                                    <div id="mapModal" class="w-full h-60 rounded mb-5"></div>

                                    <script>
                                        const mapModal = L.map('mapModal').setView([-6.7832, 106.7023], 18); // sesuaikan lokasi awal

                                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            attribution: '&copy; OpenStreetMap'
                                        }).addTo(mapModal);

                                        let marker;

                                        mapModal.on('click', function(e) {
                                            const lat = e.latlng.lat.toFixed(6);
                                            const lng = e.latlng.lng.toFixed(6);

                                            // Set input values
                                            document.getElementById('latitude').value = lat;
                                            document.getElementById('longitude').value = lng;

                                            // Tambahkan/geser marker
                                            if (marker) {
                                                marker.setLatLng(e.latlng);
                                            } else {
                                                marker = L.marker(e.latlng).addTo(mapModal);
                                            }
                                        });
                                    </script>
                                </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="document.getElementById('addKandangModal').close()">Batal</button>
                        </div>
                    </dialog>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kandang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kandang as $kandang)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $kandang->nama_kandang }}</td>
                                <td>
                                    <a href="{{ route('admin.kandang.destroy', $kandang->id_kandang) }}" class="bg-red-500 p-2 rounded-md text-white">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        function tambahKandang() {
            Swal.fire({
                title: 'Apakah anda ingin menambah kandang?',
                text: 'Kode Kandang akan terbuat secara otomatis!',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Tambah',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.kandang.create') }}";
                }
            });
        }
    </script>
@endsection
