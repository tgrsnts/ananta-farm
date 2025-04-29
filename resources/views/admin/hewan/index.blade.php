@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Data Hewan</div>
                <div class="flex gap-2">
                    <button type="button" class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
                        {{-- onclick="tambahHewan()" --}} onclick="document.getElementById('addHewanModal').showModal()">
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Hewan -->
                    <dialog id="addHewanModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Tambah Hewan</h2>
                            <form action="{{ route('admin.hewan.store') }}" method="POST" class="flex flex-col gap-4">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama Hewan</label>
                                        <input type="text" name="nama_hewan"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Jenis Hewan</label>
                                        <select name="jenis_hewan"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                            <option value="" disabled selected>Pilih jenis hewan</option>
                                            <option value="Sapi">Sapi</option>
                                            <option value="Kambing">Kambing</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Jenis Kelamin</label>
                                        <div class="flex gap-4">
                                            <div class="flex gap-2">
                                                <input id="jenis_kelamin_1" type="radio" value="L"
                                                    name="jenis_kelamin"
                                                    class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                                    required>
                                                <label for="jenis_kelamin_1">Jantan</label>
                                            </div>
                                            <div class="flex gap-2">
                                                <input id="jenis_kelamin_2" type="radio" value="P"
                                                    name="jenis_kelamin"
                                                    class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                                    required>
                                                <label for="jenis_kelamin_1">Betina</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Kategori</label>
                                        <select name="kategori"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                            <option value="" disabled selected>Pilih kategori</option>
                                            <option value="Fattening">Fattening</option>
                                            <option value="Breeding">Breeding</option>
                                            <option value="Anakan">Anakan</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Keterangan</label>
                                        <textarea name="keterangan" required
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"></textarea>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label for="foto" class="block">Foto Hewan</label>
                                        <label for="foto"
                                            class="flex gap-2 items-center justify-center rounded-md border border-green-normal hover:bg-green-light-active cursor-pointer py-2 px-4 text-green-normal hover:bg-background focus:outline-none focus:ring focus:ring-green-normal">
                                            <x-feathericon-upload />
                                            Browse Files
                                            <input type="file" id="foto" name="foto" class="hidden" />
                                        </label>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="document.getElementById('addHewanModal').close()">Batal</button>
                        </div>
                    </dialog>
                </div>

                <!-- Modal Rekam Bobot -->
                <dialog id="rekamBobotModal" class="modal">
                    <div class="modal-box">
                        <h2 class="font-bold text-lg">Rekam Bobot</h2>
                        <form id="rekamBobotForm" action="{{ route('admin.rekam-bobot.store') }}" method="POST" class="flex flex-col gap-4">
                            @csrf
                            <input hidden type="text" name="hewan_id" id="hewan_id">
                            <input hidden type="text" name="user_id" id="user_id">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col gap-1">
                                    <label class="block">Nama Hewan</label>
                                    <input disabled type="text" id="nama_hewan"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="block">Tanggal</label>
                                    <input type="date" name="tanggal"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                        required>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="block">Bobot</label>
                                    <input type="text" name="bobot"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                        required>
                                </div>
                            </div>
                            <button type="submit"
                                class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                        </form>
                        <button class="btn btn-ghost w-full"
                            onclick="closeRekamBobotModal()">Batal</button>
                    </div>
                </dialog>
            </div>


            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Hewan</th>
                            <th>Jenis</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hewan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_hewan }}</td>
                                <td>{{ $item->jenis_hewan }}</td>
                                <td>{{ $item->jenis_kelamin == 'L' ? 'Jantan' : 'Betina' }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td class="flex gap-1">
                                    <a href="/admin/hewan/{{$item->id_hewan}}"
                                        class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md">
                                        Detail
                                    </a>

                                    <button type="button"
                                        class="bg-green-normal hover:bg-green-normal-hover text-white p-2 rounded-md"
                                        onclick="openRekamBobotModal({{ $item->id_hewan }}, '{{ $item->nama_hewan }}', '1')">
                                        Rekam Bobot
                                    </button>


                                    <form action="{{ route('admin.hewan.destroy', $item->id_hewan) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus hewan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        <script>
                            function openRekamBobotModal(hewanId, namaHewan, userId) {
                                document.getElementById('hewan_id').value = hewanId;
                                document.getElementById('nama_hewan').value = namaHewan;
                                document.getElementById('user_id').value = userId;

                                document.getElementById('rekamBobotModal').showModal();
                            }

                            function closeRekamBobotModal() {
                                document.getElementById('rekamBobotModal').close();
                                document.getElementById('rekamBobotForm').reset();
                            }
                        </script>
                    </tbody>
                </table>

            </div>
        </div>
    </section>

    <script>
        function tambahHewan() {
            Swal.fire({
                title: 'Apakah anda ingin menambah hewan?',
                text: 'Kode Hewan akan terbuat secara otomatis!',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Tambah',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.hewan.create') }}";
                }
            });
        }
    </script>
@endsection
