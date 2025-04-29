@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Data Katalog</div>
                <div class="flex gap-2">
                    <button type="button" class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
                        {{-- onclick="tambahKatalog()" --}} onclick="document.getElementById('addKatalogModal').showModal()">
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Katalog -->
                    <dialog id="addKatalogModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Tambah Katalog</h2>
                            <form action="{{ route('admin.katalog.store') }}" method="POST" class="flex flex-col gap-4">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama </label>
                                        <input type="text" name="nama"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
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
                                        <label class="block">Bobot </label>
                                        <input type="text" name="bobot"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label for="foto" class="block">Foto Katalog</label>
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
                                onclick="document.getElementById('addKatalogModal').close()">Batal</button>
                        </div>
                    </dialog>
                </div>

            </div>


            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Bobot</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($katalog as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis_kelamin == 'L' ? 'Jantan' : 'Betina' }}</td>
                                <td>{{ $item->bobot }}</td>
                                <td>{{ $item->foto }}</td>
                                <td class="flex gap-1">
                                    {{-- <a href="/admin/katalog/{{ $item->id_katalog }}"
                                        class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md">
                                        Detail
                                    </a>

                                    <button type="button"
                                        class="bg-green-normal hover:bg-green-normal-hover text-white p-2 rounded-md"
                                        onclick="openRekamModal({{ $item->id_katalog }}, '{{ $item->nama_katalog }}', '1')">
                                        Rekam
                                    </button> --}}


                                    <form action="{{ route('admin.katalog.destroy', $item->id_katalog) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus katalog ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        {{-- <script>
                            function openRekamModal(katalogId, namaKatalog, userId) {
                                document.getElementById('katalog_id_bobot').value = katalogId;
                                document.getElementById('nama_katalog_bobot').value = namaKatalog;
                                document.getElementById('user_id_bobot').value = userId;
                                document.getElementById('katalog_id_penyakit').value = katalogId;
                                document.getElementById('nama_katalog_penyakit').value = namaKatalog;
                                document.getElementById('user_id_penyakit').value = userId;

                                document.getElementById('rekamModal').showModal();
                            }

                            function closeRekamModal() {
                                document.getElementById('rekamModal').close();
                                document.getElementById('rekamBobotForm').reset();
                                document.getElementById('rekamPenyakitForm').reset();
                            }
                        </script> --}}
                    </tbody>
                </table>

            </div>
        </div>
    </section>

    <script>
        function tambahKatalog() {
            Swal.fire({
                title: 'Apakah anda ingin menambah katalog?',
                text: 'Kode Katalog akan terbuat secara otomatis!',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Tambah',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.katalog.create') }}";
                }
            });
        }
    </script>
@endsection
