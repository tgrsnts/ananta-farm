@extends('admin.layout.main')
@section('style')
<style>
    #tablehewan tbody td:nth-child(6){
        display: flex;
        gap: calc(var(--spacing) * 2);
    }
    .dataTables_wrapper .dataTables_filter {
        margin-bottom: calc(var(--spacing) * 8) !important;
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
                <div class="text-xl font-semibold">Data Hewan</div>
                <div class="flex gap-2">
                    <button type="button" class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md"
                         onclick="document.getElementById('addHewanModal').showModal()">
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Hewan -->
                    <dialog id="addHewanModal" class="modal">
                        <div class="modal-box">
                            <h2 class="font-bold text-lg">Tambah Hewan</h2>
                            <form action="{{ route('admin.hewan.store') }}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
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
                                        <img id="preview-image"
                                            class="mt-2 max-h-40 rounded border border-gray-300 object-contain" />

                                        <label for="foto"
                                            class="flex gap-2 items-center justify-center rounded-md border border-green-normal hover:bg-green-light-active cursor-pointer py-2 px-4 text-green-normal hover:bg-background focus:outline-none focus:ring focus:ring-green-normal">
                                            <x-feathericon-upload />
                                            Browse Files
                                            <input type="file" id="foto" name="foto" class="hidden" onchange="previewFoto(event)"/>
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
                                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Simpan</button>
                            </form>
                            <button class="btn btn-ghost w-full"
                                onclick="document.getElementById('addHewanModal').close()">Batal</button>
                        </div>
                    </dialog>
                </div>

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
                            <button class="btn btn-ghost w-full" type="button"
                                onclick="closeRekamModal()">Batal</button>
                        </div>
                    </div>
                </dialog>

                <!-- Modal Edit Hewan -->
                <dialog id="EditHewanModal" class="modal">
                    <div class="modal-box">
                        <h2 class="font-bold text-lg">Edit Hewan</h2>
                        <form id="editForm" action="{{ route('admin.hewan.update', ['id' => '__ID__']) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col gap-1">
                                    <label class="block">Nama Hewan</label>
                                    <input type="text" name="nama_hewan" id="edit_nama_hewan"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Jenis Hewan</label>
                                    <select name="jenis_hewan" id="edit_jenis_hewan"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                        <option value="Sapi">Sapi</option>
                                        <option value="Kambing">Kambing</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="edit_jenis_kelamin"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="edit_tanggal_lahir"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Kategori</label>
                                    <select name="kategori" id="edit_kategori"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                                        <option value="Fattening">Fattening</option>
                                        <option value="Breeding">Breeding</option>
                                        <option value="Anakan">Anakan</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label class="block">Keterangan</label>
                                    <textarea name="keterangan" id="edit_keterangan" rows="3"
                                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"></textarea>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="block">Foto Hewan</label>
                                    <img id="edit-preview-hewan"
                                        class="mt-2 max-h-40 rounded border border-gray-300 object-contain" />
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
                        <button class="btn btn-ghost w-full" onclick="document.getElementById('EditHewanModal').close()" type="button">Batal</button>
                    </div>
                </dialog>
            </div>

            <div class="overflow-x-auto m-4">
                <table id="tablehewan" class="table rounded-lg row-border w-full">
                    <thead>
                        <tr>
                            <th>Nama Hewan</th>
                            <th>Jenis</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <script>
                const $hewan = @json($hewan);
                const table = new DataTable('#tablehewan', {
                    pagingType: 'full_numbers',
                    language: {
                        paginate: {
                            first: '«',
                            previous: '‹',
                            next: '›',
                            last: '»'
                        }
                    },
                    data: $hewan,
                    columns: [
                        { data: 'nama_hewan', name: 'nama_hewan' },
                        { data: 'jenis_hewan', name: 'jenis_hewan' },
                        {
                            data: 'jenis_kelamin',
                            render: function (data) {
                                return data === 'L' ? 'Jantan' : 'Betina';
                            }
                        },
                        {
                            data: 'tanggal_lahir',
                            render: function (data) {
                                const date = new Date(data);
                                const year = date.getFullYear();
                                const month = String(date.getMonth() + 1).padStart(2, '0');
                                const day = String(date.getDate()).padStart(2, '0');
                                return `${year}-${month}-${day}`;
                            }
                        },
                        { data: 'keterangan', name: 'keterangan' },
                        {
                            data: null,
                            orderable: false,
                            searchable: false,
                            render: function(data,type,row) {
                                const hewanJson = JSON.stringify(data).replace(/"/g, '&quot;');
                                return `
                                    <a href="/admin/hewan/${row.id_hewan}">
                                        <button class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md">Detail</button>
                                    </a>
                                    <button type="button" class="bg-green-normal hover:bg-green-normal-hover text-white p-2 rounded-md" onclick="openRekamModal(this)" data-hewan="${hewanJson}">Rekam</button>
                                    <form action="/admin/hewan/${row.id_hewan}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus hewan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md">Hapus</button>
                                    </form>
                                    <button type="button" class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded" onclick="openEditHewanModal(this)" data-hewan="${hewanJson}">Edit</button>
                                `;
                            }
                        }
                    ]
                })

                    function openRekamModal(button) {
                        const hewan = JSON.parse(button.getAttribute('data-hewan'));
                        document.getElementById('hewan_id_bobot').value = hewan.id_hewan;
                        document.getElementById('nama_hewan_bobot').value = hewan.nama_hewan;
                        document.getElementById('hewan_id_penyakit').value = hewan.id_hewan;
                        document.getElementById('nama_hewan_penyakit').value = hewan.nama_hewan;


                        document.getElementById('rekamModal').showModal();
                    }

                    function closeRekamModal() {
                        document.getElementById('rekamModal').close();
                        document.getElementById('rekamBobotForm').reset();
                        document.getElementById('rekamPenyakitForm').reset();
                    }

                    function openEditHewanModal(button) {
                        const hewan = JSON.parse(button.getAttribute('data-hewan'));
                        const form = document.getElementById('editForm');
                        form.action = form.action.replace('__ID__', hewan.id_hewan);
                        document.getElementById('edit_nama_hewan').value = hewan.nama_hewan;
                        document.getElementById('edit_jenis_hewan').value = hewan.jenis_hewan;
                        document.getElementById('edit_jenis_kelamin').value = hewan.jenis_kelamin;
                        document.getElementById('edit_tanggal_lahir').value = hewan.tanggal_lahir;
                        document.getElementById('edit_kategori').value = hewan.kategori;
                        document.getElementById('edit_keterangan').value = hewan.keterangan;

                        const previewImg = document.getElementById('edit-preview-hewan');
                        previewImg.src = `/storage/${hewan.foto}`;
                        previewImg.style.display = 'block';

                        document.getElementById('EditHewanModal').showModal();
                    }
            </script>
        </div>
    </section>

@endsection
