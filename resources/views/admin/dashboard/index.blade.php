@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Dashboard</div>
                
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
                        {{-- @foreach ($kandang as $kandang)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $kandang->nama_kandang }}</td>
                                <td>
                                    <a href="{{ route('admin.kandang.destroy', $kandang->id_kandang) }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach --}}
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
