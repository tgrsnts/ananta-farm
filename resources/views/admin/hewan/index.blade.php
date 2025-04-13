@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Data Hewan</div>
                <div class="flex gap-2">
                    <button type="button"
                        class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
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
                                </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="document.getElementById('addHewanModal').close()">Batal</button>
                        </div>
                    </dialog>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Hewan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($hewan as $hewan)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $hewan->nama_hewan }}</td>
                                <td>
                                    <a href="{{ route('admin.hewan.destroy', $hewan->id_hewan) }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach --}}
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
