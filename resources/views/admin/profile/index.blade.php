@extends('admin.layout.main')
@section('title', 'Profile Saya')
@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col p-4 pb-20 bg-slate-50">
        <div class="flex flex-col bg-white p-4 w-full rounded-lg shadow-md">
            <div class="font-semibold">Akun Saya</div>
            <div>Kelola informasi profil Anda.</div>
            <div class="divider"></div>
            <div class="flex w-full p-6">
                <form action="{{ route('admin.update.foto') }}" method="POST" class="flex w-1/4" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full flex flex-col items-center gap-4">
                        <!-- Preview Gambar -->
                        <img id="foto-preview" class="w-full aspect-square object-cover rounded-md"
                            src="{{ $user->foto ? asset('storage/' . $user->foto) : asset('assets/image/avatar-biru.jpg') }}"
                            alt="Foto Profil" />

                        <!-- Tombol Ubah -->
                        <label id="ubah-foto-label"
                            class="w-full flex items-center justify-center rounded-md bg-green-normal hover:bg-green-normal-hover cursor-pointer py-2 px-4 text-white focus:outline-none focus:ring focus:ring-green-normal">
                            Ubah Foto
                            <input type="file" id="foto" name="foto" class="hidden" onchange="handleFotoChange(event)" />
                        </label>

                        <!-- Tombol Simpan & Batal (awal disembunyikan) -->
                        <div id="foto-action-buttons" class="w-full flex gap-2 hidden">
                            <button type="submit"
                                class="flex-1 bg-green-normal hover:bg-green-normal-hover text-white py-2 px-4 rounded-md">Simpan</button>
                            <button type="button" onclick="resetFotoPreview()"
                                class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-md">Batal</button>
                        </div>
                    </div>
                    <script>
                        let originalSrc = document.getElementById('foto-preview').src;

                        function handleFotoChange(event) {
                            const file = event.target.files[0];
                            const preview = document.getElementById('foto-preview');
                            const label = document.getElementById('ubah-foto-label');
                            const buttons = document.getElementById('foto-action-buttons');

                            if (file) {
                                preview.src = URL.createObjectURL(file);
                                label.classList.add('hidden');
                                buttons.classList.remove('hidden');
                            }
                        }

                        function resetFotoPreview() {
                            const preview = document.getElementById('foto-preview');
                            const fileInput = document.getElementById('foto');
                            const label = document.getElementById('ubah-foto-label');
                            const buttons = document.getElementById('foto-action-buttons');

                            fileInput.value = ''; // clear file input
                            preview.src = originalSrc;
                            buttons.classList.add('hidden');
                            label.classList.remove('hidden');
                        }
                    </script>
                </form>
                <form method="POST" action="{{ route('admin.update.about') }}" enctype="multipart/form-data"
                    class="flex w-full">
                    @csrf
                    <div class="flex w-3/4 pl-8">
                        <table class="w-full">
                            <tbody>
                                <tr>
                                    <td class="pr-4">
                                        <label for="nama" class="block text-left">Nama Lengkap</label>
                                    </td>
                                    <td class="pl-4 py-1">
                                        <input
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            type="text" name="nama" id="nama" value="{{ $user->nama }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4">
                                        <label for="email" class="block text-left">Email</label>
                                    </td>
                                    <td class="pl-4 py-1">
                                        <div class="relative">
                                            <input disabled
                                                class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg pr-24"
                                                id="email" type="email" name="email" value="{{ $user->email }}" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4">
                                        <label for="telepon" class="block text-left">Telepon</label>
                                    </td>
                                    <td class="pl-4 py-1">
                                        <input
                                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                                            type="text" name="telepon" value="{{ $user->telepon }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4">
                                        <label for="jenis_kelamin" class="block text-left">Jenis Kelamin</label>
                                    </td>
                                    <td class="pl-4 py-1 flex gap-8">
                                        <div class="flex items-center gap-1">
                                            <input class="accent-green-normal" name="jenis_kelamin" type="radio"
                                                value="L" {{ $user->jenis_kelamin == 'L' ? 'checked' : '' }} />
                                            <label>Laki-laki</label>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <input class="accent-green-normal" name="jenis_kelamin" type="radio"
                                                value="P" {{ $user->jenis_kelamin == 'P' ? 'checked' : '' }} />
                                            <label>Perempuan</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4"></td>
                                    <td class="pl-4 pt-8">
                                        <button type="submit"
                                            class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md">
                                            Simpan
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
