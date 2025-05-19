@extends('admin.layout.main')
@section('title', 'Dashboard Katalog')
@section('style')
    <style>
        #example {
            margin: 0 auto !important;
            width: 100% !important;
        }

        #example tbody td:nth-child(5) {
            display: flex;
            justify-content: center;
            gap: calc(var(--spacing) * 4);
        }

        .dataTables_wrapper .dataTables_filter {
            margin-bottom: calc(var(--spacing) * 8) !important;
        }

        #example tbody td:nth-child(5) img {
            width: calc(var(--spacing) * 36);
            height: calc(var(--spacing) * 24);
            object-fit: cover;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #aaa;
            border-radius: 3px;
            padding: 5px;
            background-color: transparent;
            color: inherit;
            margin-left: 10px !important;
        }

        .dataTables_wrapper .dataTables_paginate {
            margin-top: calc(var(--spacing) * 8) !important;
        }

        .dataTables_wrapper .dataTables_info {
            margin-top: calc(var(--spacing) * 8) !important;
        }
    </style>
@endsection

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Data Katalog</div>
                <div class="flex gap-2">
                    <button type="button"
                        class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md hover:cursor-pointer"
                        {{-- onclick="tambahKatalog()" --}} onclick="document.getElementById('addKatalogModal').showModal()">
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Katalog -->
                    <dialog id="addKatalogModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Tambah Katalog</h2>
                            <form action="{{ route('admin.katalog.store') }}" method="POST" class="flex flex-col gap-4"
                                enctype="multipart/form-data">
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
                                            <div
                                                class="bg-slate-200 border border-slate-400 px-4 py-2 text-slate-500 text-lg rounded-l-lg">
                                                Rp.
                                            </div>
                                            <input id="harga" type="text" name="harga"
                                                class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-r-lg"
                                                required>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label for="foto" class="block">Foto Katalog</label>
                                        <img id="preview-image"
                                            class="mt-2 max-h-40 rounded border border-gray-300 object-contain" />
                                        <label for="foto"
                                            class="flex gap-2 items-center justify-center rounded-md border border-green-normal hover:bg-green-light-active cursor-pointer py-2 px-4 text-green-normal hover:bg-background focus:outline-none focus:ring focus:ring-green-normal">
                                            <x-feathericon-upload />
                                            Browse Files
                                            <input type="file" id="foto" name="foto" class="hidden"
                                                onchange="previewFoto(event)" />
                                        </label>
                                        <script>
                                            function previewFoto(event) {
                                                const image = document.getElementById('preview-image');
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
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full hover:cursor-pointer">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="document.getElementById('addKatalogModal').close()">Batal</button>
                        </div>
                    </dialog>

                    <!-- Modal Edit Katalog -->
                    <dialog id="editKatalogModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Edit Katalog</h2>
                            <form id="editKatalogForm" action="{{ route('admin.katalog.update', ['id' => '__ID__']) }}"
                                method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_katalog" id="edit_id_katalog">
                                <div class="flex flex-col gap-1">
                                    <label class="block">Nama </label>
                                    <input type="text" id="edit_nama" name="nama"
                                        class="w-full p-2 border-1 rounded-lg" required>
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
                                    <input type="text" id="edit_bobot" name="bobot"
                                        class="w-full p-2 border-1 rounded-lg" required>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label for="edit_harga" class="block">Harga</label>
                                    <div class="flex">
                                        <div class="bg-slate-200 border px-4 py-2 text-slate-500 text-lg rounded-l-lg">Rp.
                                        </div>
                                        <input id="edit_harga" type="text" name="harga"
                                            class="w-full p-2 border-1 rounded-r-lg" required>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="edit_foto" class="block">Foto Katalog</label>
                                    <img id="edit-preview-image"
                                        class="mt-2 max-h-40 rounded border border-gray-300 object-contain" />
                                    <label for="edit_foto"
                                        class="flex gap-2 items-center justify-center rounded-md border border-green-normal py-2 px-4 cursor-pointer">
                                        <x-feathericon-upload />
                                        Browse Files
                                        <input type="file" id="edit_foto" name="foto" class="hidden"
                                            onchange="previewEditFoto(event)" />
                                    </label>
                                </div>
                                <button type="submit"
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full hover:cursor-pointer">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="document.getElementById('editKatalogModal').close()">Batal</button>
                        </div>
                    </dialog>

                    <!-- Modal Detail Katalog -->
                    <dialog id="detailKatalogModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg mb-4">Detail Katalog</h2>
                            <div class="flex flex-col gap-2">
                                <img id="detail_foto" class="w-full rounded-md object-cover max-h-60" />
                                <p><strong>Nama:</strong> <span id="detail_nama"></span></p>
                                <p><strong>Jenis:</strong> <span id="detail_jenis"></span></p>
                                <p><strong>Bobot:</strong> <span id="detail_bobot"></span> kg</p>
                                <p><strong>Harga:</strong> Rp <span id="detail_harga"></span></p>
                            </div>
                            <button class="btn btn-ghost w-full mt-4"
                                onclick="document.getElementById('detailKatalogModal').close()">Tutup</button>
                        </div>
                    </dialog>

                </div>
            </div>

            <table id="example" class="table rounded-lg row-border w-full">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Bobot</th>
                        <th>Harga</th>
                        {{-- <th>Foto</th> --}}
                        <th class="flex justify-center w-full">Aksi</th>
                    </tr>
                </thead>
            </table>


            <script>
                function openDetailModal(id) {
                    const katalog = $katalog.find(k => k.id_katalog == id);
                    if (!katalog) return;

                    document.getElementById('detail_nama').textContent = katalog.nama;
                    document.getElementById('detail_jenis').textContent = katalog.jenis.charAt(0).toUpperCase() + katalog.jenis
                        .slice(1);
                    document.getElementById('detail_bobot').textContent = katalog.bobot;
                    document.getElementById('detail_harga').textContent = parseInt(katalog.harga).toLocaleString('id-ID');
                    document.getElementById('detail_foto').src = `/storage/${katalog.foto}`;

                    document.getElementById('detailKatalogModal').showModal();
                }


                const $katalog = @json($katalog);
                const table = new DataTable('#example', {
                    pagingType: 'full_numbers',
                    language: {
                        paginate: {
                            first: '«',
                            previous: '‹',
                            next: '›',
                            last: '»'
                        }
                    },
                    data: $katalog,
                    columns: [{
                            data: 'nama'    
                        },
                        {
                            data: 'jenis',
                            render: d => d.charAt(0).toUpperCase() + d.slice(1)
                        },
                        {
                            data: 'bobot',
                            render: d => d + ' kg'
                        },
                        {
                            data: 'harga',
                            render: d => 'Rp' + parseInt(d).toLocaleString('id-ID')
                        },
                        // {
                        //     data: 'foto',
                        //     render: d => `<img src="/storage/${d}" width="80">`
                        // },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `
                                    <div class="flex justify-center gap-1">
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md hover:cursor-pointer"
                                            onclick="openDetailModal(${row.id_katalog})">
                                            Detail
                                        </button>
                                        <button type="button"
                                            class="bg-green-normal hover:bg-green-normal-hover text-white px-4 p-2 rounded-md hover:cursor-pointer"
                                            onclick="openEditModal(${row.id_katalog}, '${row.nama}', '${row.jenis}', '${row.bobot}', '${row.harga}', '${row.foto}')">
                                            Edit
                                        </button>
                                        <form action="/admin/katalog/${row.id_katalog}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus katalog ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md hover:cursor-pointer">Hapus</button>
                                        </form>
                                    </div>
                                `;
                            }
                        }
                    ]
                });

                function previewEditFoto(event) {
                    const image = document.getElementById('edit-preview-image');
                    const file = event.target.files[0];
                    if (file) {
                        image.src = URL.createObjectURL(file);
                        image.style.display = 'block';
                    } else {
                        image.style.display = 'none';
                    }
                }

                function openEditModal(id, nama, jenis, bobot, harga, foto) {
                    const form = document.getElementById('editKatalogForm');
                    form.action = form.action.replace('__ID__', id);

                    document.getElementById('edit_id_katalog').value = id;
                    document.getElementById('edit_nama').value = nama;
                    document.getElementById('edit_jenis').value = jenis;
                    document.getElementById('edit_bobot').value = bobot;
                    document.getElementById('edit_harga').value = harga;

                    const previewImg = document.getElementById('edit-preview-image');
                    previewImg.src = `/storage/${foto}`;
                    previewImg.style.display = 'block';

                    document.getElementById('editKatalogModal').showModal();
                }
            </script>
            @if (session('katalog'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        toast: true,
                        position: 'top-end',
                        title: '{{ session("katalog") }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>
            @endif
    </section>
@endsection
