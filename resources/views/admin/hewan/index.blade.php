@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col mt-2 pt-10 px-4 pb-20 bg-slate-50">
        <div class="flex flex-col gap-4 bg-white p-4 w-full rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="font-semibold">Data Kandang</div>
                <div class="flex gap-2">
                    <button type="button" class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
                        {{-- onclick="tambahKandang()" --}}
                        onclick="document.getElementById('addKandangModal').showModal()"
                        >
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Produk -->
                    <dialog id="addKandangModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Tambah Produk</h2>
                            <form action="{{ route('admin.kandang.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label class="block">Nama Produk</label>
                                <input type="text" name="nama" class="input input-bordered w-full mb-2" required>

                                <label class="block">Kategori</label>
                                <input type="text" name="kategori" class="input input-bordered w-full mb-2" required>

                                <label class="block">Deskripsi</label>
                                <textarea name="deskripsi" class="textarea textarea-bordered w-full mb-2"></textarea>

                                <label class="block">Harga</label>
                                <input type="number" name="harga" class="input input-bordered w-full mb-2" required>

                                <label class="block">Stok</label>
                                <input type="number" name="stok" class="input input-bordered w-full mb-2" required>

                                <label class="block">Gambar</label>
                                <input type="file" name="gambar" class="file-input file-input-bordered w-full mb-2"
                                    required>

                                <button type="submit" class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost mt-2 w-full"
                                onclick="document.getElementById('addProductModal').close()">Batal</button>
                        </div>
                    </dialog>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Kandang</th>
                            <th>Nama Kebun</th>
                            <th>Luas Kebun</th>
                            <th>Lokasi Kebun</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ($kandangs as $index => $kandang)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $kandang->kandang_id }}</td>
                                <td>{{ $kandang->kebun->nama_kebun ?? 'Tidak ada nama kebun' }}</td>
                                <td>{{ $kandang->kebun->luas_lahan ?? 'Tidak tersedia' }}</td>
                                <td>{{ $kandang->kebun->lokasi_kebun ?? 'Tidak tersedia' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada kandang.</td>
                            </tr>
                        @endforelse --}}
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
