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
                            <form action="{{ route('admin.katalog.store') }}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Nama </label>
                                        <input type="text" name="nama"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label for="jenis" class="block">Jenis</label>
                                        <select name="jenis" id="jenis"
                                            class="w-full px-2 py-3 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                            <option value="">Pilih Jenis</option>
                                                <option value="sapi">Sapi</option>
                                                <option value="domba">Domba</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="block">Bobot </label>
                                        <input type="text" name="bobot"
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            required>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label for="harga" class="block">Harga</label>
                                        <div class="flex">
                                            <div class="bg-slate-200 border border-slate-400 px-4 py-2 text-slate-500 text-lg rounded-l-lg">Rp.
                                            </div>
                                            <input id="harga" type="text" name="harga"
                                                class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-r-lg"
                                                required>
                                        </div>
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

                     <!-- Modal Edit Katalog -->
                     <dialog id="editKatalogModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Edit Katalog</h2>
                            <form id="editKatalogForm" action="{{ route('admin.katalog.update', ['id' => '__ID__']) }}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_katalog" id="edit_id_katalog">
                                <div class="flex flex-col gap-1">
                                    <label class="block">Nama </label>
                                    <input type="text" id="edit_nama" name="nama" class="w-full p-2 border-1 rounded-lg" required>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="edit_jenis" class="block">Jenis</label>
                                    <select name="jenis" id="edit_jenis" class="w-full px-2 py-3 border-1 rounded-lg">
                                        <option value="">Pilih Jenis</option>
                                        <option value="sapi">Sapi</option>
                                        <option value="domba">Domba</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="block">Bobot </label>
                                    <input type="text" id="edit_bobot" name="bobot" class="w-full p-2 border-1 rounded-lg" required>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label for="edit_harga" class="block">Harga</label>
                                    <div class="flex">
                                        <div class="bg-slate-200 border px-4 py-2 text-slate-500 text-lg rounded-l-lg">Rp.</div>
                                        <input id="edit_harga" type="text" name="harga" class="w-full p-2 border-1 rounded-r-lg" required>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="edit_foto" class="block">Foto Katalog</label>
                                    <label for="edit_foto" class="flex gap-2 items-center justify-center rounded-md border border-green-normal py-2 px-4 cursor-pointer">
                                        <x-feathericon-upload />
                                        Browse Files
                                        <input type="file" id="edit_foto" name="foto" class="hidden" />
                                    </label>
                                </div>
                                <button type="submit" class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full" onclick="document.getElementById('editKatalogModal').close()">Batal</button>
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
                            <th>Jenis</th>
                            <th>Bobot</th>
                            <th>Harga</th>
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
                                <td>{{ $item->harga }}</td>
                                <td><img class="max-h-24" src="{{ asset('storage/' . $item->foto) }}" alt="foto_katalog"></td>
                                <td>
                                    <div class="flex gap-1">
                                        <button type="button"
                                        class="bg-green-normal hover:bg-green-normal-hover text-white px-4 p-2 rounded-md"
                                        onclick="openEditModal({{ $item->id_katalog }}, '{{ $item->nama }}', '{{ $item->jenis }}', '{{ $item->bobot }}', '{{ $item->harga }}')">
                                        Edit
                                    </button>                                    
                                        <form action="{{ route('admin.katalog.destroy', $item->id_katalog) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus katalog ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <script>
                            function openEditModal(id, nama, jenis, bobot, harga) {
                                form.action = form.action.replace('__ID__', id);
                                document.getElementById('edit_id_katalog').value = id;
                                document.getElementById('edit_nama').value = nama;
                                document.getElementById('edit_jenis').value = jenis;
                                document.getElementById('edit_bobot').value = bobot;
                                document.getElementById('edit_harga').value = harga;
                        
                                document.getElementById('editKatalogModal').showModal();
                            }
                        </script>
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
