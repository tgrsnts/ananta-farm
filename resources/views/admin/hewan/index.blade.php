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
                                <label class="block mt-5">Nama Kandang</label>
                                <input type="text" name="nama_kandang" class="input input-bordered w-full mb-5" required>

                                <button type="submit" class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost mt-2 w-full"
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
                                    <a href="{{ route('admin.kandang.destroy', $kandang->id_kandang) }}">Hapus</a>
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
