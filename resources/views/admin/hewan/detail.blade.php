@extends('admin.layout.main')
@section('title', 'Detail Hewan')
@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Detail Hewan</div>
                <div>

                    <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md"
                    onclick="document.getElementById('editHewanModal').showModal()">
                        Edit Data
                    </button>
                    <button type="button" class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
                    onclick="openRekamModal({{ $data->id_hewan }}, '{{ $data->nama_hewan }}')">
                        Rekam Data
                    </button>
                </div>

                <dialog id="editHewanModal" class="modal">
                    <div class="modal-box">
                        <h2 class="font-bold text-lg">Edit Hewan</h2>
                        <form id="editForm" action="{{ route('admin.hewan.update', $data->id_hewan) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col gap-1">
                                    <label class="block">Nama Hewan</label>
                                    <input type="text" name="nama_hewan" id="edit_nama_hewan"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                        value="{{ $data->nama_hewan }}">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Jenis Hewan</label>
                                    <select name="jenis_hewan" id="edit_jenis_hewan"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                        <option value="Sapi"  @if( $data->jenis_hewan == 'Sapi') selected @endif>Sapi</option>
                                        <option value="Kambing"  @if( $data->jenis_hewan == 'Kambing') selected @endif>Kambing</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Jenis Kelamin</label>
                                    <div class="flex gap-4">
                                        <div class="flex gap-2">
                                            <input id="jenis_kelamin_1" type="radio" value="L"
                                                name="jenis_kelamin"
                                                class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                                @if( $data->jenis_kelamin == 'L') checked @endif
                                                required>
                                            <label for="jenis_kelamin_1">Jantan</label>
                                        </div>
                                        <div class="flex gap-2">
                                            <input id="jenis_kelamin_2" type="radio" value="P"
                                                name="jenis_kelamin"
                                                class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                                @if( $data->jenis_kelamin == 'P') checked @endif
                                                required>
                                            <label for="jenis_kelamin_1">Betina</label>
                                        </div>
                                    </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="edit_tanggal_lahir"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" value="{{ $data->tanggal_lahir }}">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Kategori</label>
                                    <select name="kategori" id="edit_kategori"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                        <option value="Fattening" @if( $data->kategori == 'Fattening') selected @endif>Fattening</option>
                                        <option value="Breeding" @if( $data->kategori == 'Breeding') selected @endif>Breeding</option>
                                        <option value="Anakan" @if( $data->kategori == 'Anakan') selected @endif>Anakan</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Keterangan</label>
                                    <textarea name="keterangan" id="edit_keterangan" rows="3"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">{{ $data->keterangan }}</textarea>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="block">Foto Hewan</label>
                                    <img id="edit-preview-hewan"
                                        class="mt-2 max-h-40 rounded border border-gray-300 object-contain"
                                        src="{{ asset('storage/' . $data->foto) }}" />
                                    <label for="edit-foto"
                                        class="flex gap-2 items-center justify-center rounded-md border border-green-normal hover:bg-green-light-active cursor-pointer py-2 px-4 text-green-normal hover:bg-background focus:outline-none focus:ring focus:ring-green-normal">
                                        <x-feathericon-upload />
                                        Browse Files
                                        <input type="file" id="edit-foto" name="foto" class="hidden" onchange="previewFoto(event)"/>
                                    </label>
                                    <script>
                                        function previewFoto(event) {
                                            const image = document.getElementById('edit-preview-hewan');
                                            const file = event.target.files[0];
                                            if (file) {
                                                image.src = URL.createObjectURL(file);
                                                image.style.display = 'block';
                                            } else {
                                                image.style.display = 'none';
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                        </form>
                        <button class="btn btn-ghost w-full" onclick="closeEditModal()" type="button">Batal</button>
                    </div>
                </dialog>

                <!-- Modal Rekam Bobot -->
                <dialog id="rekamModal" class="modal">
                    <div class="modal-box">
                        <!-- Tombol -->
                        <div class="flex mb-2">
                            <button id="button-bobot" onclick="showForm('bobot')" type="button"
                                class="w-full p-2 font-semibold text-white bg-green-normal hover:bg-green-normal border border-green-normal">Rekam
                                Bobot</button>
                            <button id="button-penyakit" onclick="showForm('penyakit')" type="button"
                                class="w-full p-2 font-semibold hover:text-white hover:bg-green-normal border border-green-normal">Rekam
                                Penyakit</button>
                        </div>
                        <script>
                            function showForm(type) {
                                const formBobot = document.getElementById('form-bobot');
                                const formPenyakit = document.getElementById('form-penyakit');
                                const buttonBobot = document.getElementById('button-bobot');
                                const buttonPenyakit = document.getElementById('button-penyakit');

                                if (type === 'bobot') {
                                    formBobot.classList.remove('hidden');
                                    formPenyakit.classList.add('hidden');

                                    // Aktifkan tombol bobot
                                    buttonBobot.classList.add('text-white', 'bg-green-normal');
                                    buttonBobot.classList.remove('text-green-normal', 'bg-transparent');

                                    // Nonaktifkan tombol penyakit
                                    buttonPenyakit.classList.remove('text-white', 'bg-green-normal');
                                    buttonPenyakit.classList.add('text-green-normal', 'bg-transparent');
                                } else {
                                    formBobot.classList.add('hidden');
                                    formPenyakit.classList.remove('hidden');

                                    // Aktifkan tombol penyakit
                                    buttonPenyakit.classList.add('text-white', 'bg-green-normal');
                                    buttonPenyakit.classList.remove('text-green-normal', 'bg-transparent');

                                    // Nonaktifkan tombol bobot
                                    buttonBobot.classList.remove('text-white', 'bg-green-normal');
                                    buttonBobot.classList.add('text-green-normal', 'bg-transparent');
                                }
                            }
                        </script>


                        <!-- Form Rekam Bobot -->
                        <div id="form-bobot">
                            <h2 class="font-bold text-lg">Rekam Bobot</h2>
                            <form id="rekamBobotForm" action="{{ route('admin.rekam-bobot.store') }}" method="POST"
                                class="flex flex-col gap-4">
                                @csrf
                                <input hidden type="text" name="hewan_id" id="hewan_id_bobot">
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama Hewan</label>
                                        <input disabled type="text" id="nama_hewan_bobot"
                                            class="w-full p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Tanggal</label>
                                        <input type="date" name="tanggal"
                                            class="w-full p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Bobot</label>
                                        <input type="text" name="bobot"
                                            class="w-full p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="closeRekamModal()">Batal</button>
                        </div>

                        <!-- Form Rekam Penyakit -->
                        <div id="form-penyakit" class="hidden">
                            <h2 class="font-bold text-lg">Rekam Penyakit</h2>
                            <form id="rekamPenyakitForm" action="{{ route('admin.rekam-penyakit.store') }}"
                                method="POST" class="flex flex-col gap-4">
                                @csrf
                                <input hidden type="text" name="hewan_id" id="hewan_id_penyakit">
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama Hewan</label>
                                        <input disabled type="text" id="nama_hewan_penyakit"
                                            class="w-full p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama Penyakit</label>
                                        <input type="text" name="nama_penyakit"
                                            class="w-full p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Tanggal</label>
                                        <input type="date" name="awal_sakit"
                                            class="w-full p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="closeRekamModal()">Batal</button>
                        </div>
                    </div>
                </dialog>
            </div>
            <div class="grid grid-cols-2 gap-x-8">
                <!-- Kolom Kiri -->
                <div class="grid grid-cols-2">
                    <p class="font-medium">Foto Hewan</p>
                    <img class="object-cover w-full" src="{{ asset('storage/'.$data->foto) }}" alt="foto-hewan">
                </div>


                <!-- Kolom Kanan -->
                <div class="flex flex-col">
                    <div class="grid grid-cols-2">
                        <p class="font-medium">Nama Hewan</p>
                        <p class="text-start">: {{ $data->nama_hewan }}</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="font-medium">Jenis Hewan</p>
                        <p>: {{ $data->jenis_hewan }}</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="font-medium">Tanggal Lahir</p>
                        <p>: {{ $data->tanggal_lahir }}</p>
                    </div>
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
                function openRekamModal(id_hewan, nama_hewan) {
                    document.getElementById('hewan_id_bobot').value = id_hewan;
                    document.getElementById('nama_hewan_bobot').value = nama_hewan;
                    document.getElementById('hewan_id_penyakit').value = id_hewan;
                    document.getElementById('nama_hewan_penyakit').value = nama_hewan;


                    document.getElementById('rekamModal').showModal();
                }
                function closeRekamModal() {
                    document.getElementById('rekamModal').close();
                    document.getElementById('rekamBobotForm').reset();
                    document.getElementById('rekamPenyakitForm').reset();
                }
                const bobotData = @json($data->rekam_bobot);
                const labels = bobotData.map(item => {
                    const date = new Date(item.tanggal);
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0'); // bulan dimulai dari 0
                    const day = String(date.getDate()).padStart(2, '0');
                    return `${year}-${month}-${day}`;
                });
                const bobotValues = bobotData.map(item => item.bobot);
                const selisihValues = bobotData.map(item => item.selisih);
                const selisihLabels = [];
                const selisihData = [];

                for (let i = 1; i < bobotData.length; i++) {
                    const prev = bobotData[i - 1];
                    const curr = bobotData[i];

                    // Label pakai waktu rekaman kedua
                    const date = new Date(curr.tanggal);
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0'); // bulan dimulai dari 0
                    const day = String(date.getDate()).padStart(2, '0');
                    const formatted = `${year}-${month}-${day}`;

                    selisihLabels.push(formatted);
                    selisihData.push(curr.bobot - prev.bobot);
                }

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
                            tension: 0.3,
                            fill: true
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
                            data: selisihData,
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
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->bobot }}</td>
                                    <td>{{ $item->user->nama }}</td>
                                    <td class="flex gap-1">
                                        <form action="{{ route('admin.rekam-bobot.destroy', $item->id_rekamBobot) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md hover:cursor-pointer">
                                                Hapus
                                            </button>
                                        </form>
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
                                    <td>
                                        @if ($item->sembuh)
                                            {{ $item->sembuh }}
                                        @else
                                            <form action="{{ route('admin.hewan.sembuh', $item->id_riwayat_penyakit) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md">Sembuh</button>
                                            </form>
                                        @endif
                                    </td>
                                    <td class="flex gap-1">
                                        <button
                                            type="button"
                                            class="bg-green-normal hover:bg-green-normal-hover text-white p-2 rounded-md"
                                            onclick="bukaModalPerlakuan(
                                                '{{ $item->id_riwayat_penyakit }}',
                                                '{{ $item->nama_penyakit }}',
                                                '{{ $item->awal_sakit }}',
                                                '{{ json_encode($item->perlakuan) }}'
                                            )">
                                            Detail Perlakuan
                                        </button>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <dialog id="detailPerlakuanModal" class="modal">
            <div class="modal-box w-11/12 max-w-5xl">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-lg mb-4">Detail Perlakuan Penyakit</h2>
                    <div>
                        <form action="{{ route('admin.perlakuan') }}" class="flex gap-2" method="POST">
                            @csrf
                            <input hidden type="text" name="perlakuan_id" id="hewan_id_perlakuan">
                            <label class="flex items-center" for="perlakuan_input">Perlakuan: </label>
                            <input type="text" id="perlakuan_input" name="perlakuan" class="p-2 border border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                            <button class="p-2 px-8 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
              <div class="flex flex-col gap-2">
                <p><strong>Nama Penyakit:</strong> <span id="modal_nama_penyakit"></span></p>
                <p><strong>Awal Sakit:</strong> <span id="modal_awal_sakit"></span></p>

                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tanggal</th>
                      <th>Perlakuan</th>
                    </tr>
                  </thead>
                  <tbody id="modal_tbody">
                    <!-- Diisi via JS -->
                  </tbody>
                </table>
              </div>
              <form method="dialog">
                <button class="btn btn-ghost w-full mt-4">Tutup</button>
              </form>
            </div>
        </dialog>
        <script>
            function bukaModalPerlakuan(idPenyakit ,namaPenyakit, awalSakit, perlakuanJson) {
            const modal = document.getElementById('detailPerlakuanModal');
            document.getElementById('hewan_id_perlakuan').value = idPenyakit;
            document.getElementById('modal_nama_penyakit').textContent = namaPenyakit;
            document.getElementById('modal_awal_sakit').textContent = awalSakit;

            let tbody = document.getElementById('modal_tbody');
            tbody.innerHTML = ''; // kosongkan dulu

            let perlakuan = JSON.parse(perlakuanJson);
            perlakuan.forEach((item, index) => {
                const tanggalPerlakuan = new Date(item.created_at);
                const year = tanggalPerlakuan.getFullYear();
                const month = String(tanggalPerlakuan.getMonth() + 1).padStart(2, '0'); // bulan dimulai dari 0
                const day = String(tanggalPerlakuan.getDate()).padStart(2, '0');
                const formatted = `${year}-${month}-${day}`;
                tbody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${formatted}</td>
                        <td>${item.perlakuan}</td>
                    </tr>
                `;
            });

            modal.showModal();
        }

        function closeEditModal() {
            document.getElementById('editHewanModal').close();
            document.getElementById('editForm').reset();
        }
        </script>
        @if (session('hewan'))
            <script>
                Swal.fire({
                    icon: 'success',
                    toast: true,
                    position: 'top-end',
                    title: '{{ session("hewan") }}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif
        @if (session('gagal'))
            <script>
                Swal.fire({
                    icon: 'error',
                    toast: true,
                    position: 'top-end',
                    title: '{{ session("gagal") }}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif
    </section>
@endsection
