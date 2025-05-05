@extends('layout.main')
@section('title', 'Daftar Staycation')
@section('content')
    <!-- Know About Us -->
    <section class="px-4 lg:px-40 py-20 bg-white">
        <div class="container mx-auto flex flex-col gap-5 items-center justify-center">
            <h1 class="text-green-normal text-center text-xl lg:text-5xl font-poppins font-bold mb-2 lg:mb-6">
                Ayo Ikut Staycation<span class="text-yellow-normal">.</span>
            </h1>
            <form action="{{ route('magang.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="nama" class="block">Nama</label>
                    <input id="nama" type="text" name="nama"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="email" class="block">Email</label>
                    <input id="email" type="text" name="email"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="nim" class="block">NIM</label>
                    <input id="nim" type="text" name="nim"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="jenis_kelamin" class="block">Jenis Kelamin?</label>
                    <div class="flex gap-2">
                        <input id="jenis_kelamin_1" type="radio" value="L" name="jenis_kelamin"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="jenis_kelamin_1">Laki-laki</label>
                    </div>
                    <div class="flex gap-2">
                        <input id="jenis_kelamin_2" type="radio" value="P" name="jenis_kelamin"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="jenis_kelamin_1">Perempuan</label>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="tanggal_lahir" class="block">Tanggal Lahir</label>
                    <input id="tanggal_lahir" type="date" name="tanggal_lahir"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="instansi" class="block">Instansi/Universitas</label>
                    <input id="instansi" type="text" name="instansi"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="jurusan" class="block">Jurusan</label>
                    <input id="jurusan" type="text" name="jurusan"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="semester" class="block">Semester</label>
                    <select name="semester" id="semester"
                        class="w-full px-2 py-3 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg">
                        <option value="">Pilih Semester</option>
                        @foreach (range(1, 8) as $item)
                            <option value="{{ $item }}">Semester {{ $item }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="flex flex-col gap-2">
                    <label for="angkatan" class="block">Angkatan (Tahun Masuk)</label>
                    <input id="angkatan" type="text" name="angkatan"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="nomor_whatsapp" class="block">Nomor Whatsapp</label>
                    <div class="flex">
                        <div class="bg-slate-200 border border-slate-400 px-4 py-2 text-slate-500 text-lg rounded-l-lg">+62
                        </div>
                        <input id="nomor_whatsapp" type="text" name="nomor_whatsapp"
                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-r-lg"
                            required>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="penyakit" class="block">Penyakit yang diderita</label>
                    <input id="penyakit" type="text" name="penyakit"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="kegiatan" class="block">Kegiatan yang sedang diikuti</label>
                    <input id="kegiatan" type="text" name="kegiatan"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="kunjungan_peternakan" class="block">Pernah berkunjung ke peternakan? Jika iya,
                        kemana?</label>
                    <input id="kunjungan_peternakan" type="text" name="kunjungan_peternakan"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="pernah_magang" class="block">Pernah Magang?</label>
                    <div class="flex gap-2">
                        <input id="pernah_magang_1" type="radio" value="1" name="pernah_magang"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="pernah_magang_1">Pernah</label>
                    </div>
                    <div class="flex gap-2">
                        <input id="pernah_magang_2" type="radio" value="0" name="pernah_magang"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="pernah_magang_1">Tidak Pernah</label>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="referal" class="block">Tahu Informasi Magang Ananta Farm dari Apa/Siapa? (Tulis saja
                        namanya~)</label>
                    <input id="referal" type="text" name="referal"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="alasan" class="block">Alasan Kamu Mau Mengikuti Kegiatan Magang di Ananta Farm?</label>
                    <input id="alasan" type="text" name="alasan"
                        class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg"
                        required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="instagram" class="block">Akun Instagram Kamu</label>
                    <div class="flex">
                        <div class="bg-slate-200 border border-slate-400 px-4 py-2 text-slate-500 text-lg rounded-l-lg">@
                        </div>
                        <input id="instagram" type="text" name="instagram"
                            class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-r-lg"
                            required>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="punya_kendaraan" class="block">Apakah mempunyai kendaraan?</label>
                    <div class="flex gap-2">
                        <input id="punya_kendaraan_1" type="radio" value="1" name="punya_kendaraan"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="punya_kendaraan_1">Punya</label>
                    </div>
                    <div class="flex gap-2">
                        <input id="punya_kendaraan_2" type="radio" value="0" name="punya_kendaraan"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="punya_kendaraan_2">Tidak Punya</label>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="bisa_nyetir" class="block">Apakah bisa mengendarai mobil? (Khususnya L300 manual)</label>
                    <div class="flex gap-2">
                        <input id="bisa_nyetir_1" type="radio" value="1" name="bisa_nyetir"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="bisa_nyetir_1">Bisa</label>
                    </div>
                    <div class="flex gap-2">
                        <input id="bisa_nyetir_2" type="radio" value="0" name="bisa_nyetir"
                            class="border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" required>
                        <label for="bisa_nyetir_2">Tidak Bisa</label>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="cv" class="block">Masukkan CV atau Resume kamu</label>
                    <!-- Preview Area -->
                    <embed id="cv-preview" type="application/pdf" style="display: none;" class="w-full h-64 mt-2 rounded border border-gray-300" />
                    <label for="cv"
                        class="flex gap-2 items-center justify-center rounded-md border border-green-normal hover:bg-green-light-active cursor-pointer py-2 px-4 text-green-normal hover:bg-background focus:outline-none focus:ring focus:ring-green-normal">
                        <x-feathericon-upload />
                        Browse Files
                        <input type="file" id="cv" name="cv" class="hidden" accept="application/pdf" onchange="previewCV(event)" />
                    </label>

                </div>
                <script>
                    function previewCV(event) {
                        const file = event.target.files[0];
                        const preview = document.getElementById('cv-preview');

                        if (file && file.type === 'application/pdf') {
                            preview.src = URL.createObjectURL(file);
                            preview.style.display = 'block';
                        } else {
                            preview.style.display = 'none';
                            preview.src = '';
                        }
                    }
                </script>

                <button type="submit"
                    class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full">Kirim</button>
            </form>
        </div>
    </section>
@endsection
