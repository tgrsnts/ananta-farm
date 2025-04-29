@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Detail Pendaftar</div>
            </div>
            <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                <!-- Kolom Kiri -->
                <div class="flex flex-col space-y-2">
                    <label>Nama</label>
                    <input type="text" value="{{ $data->nama }}" class="input input-bordered w-full" readonly>

                    <label>NIM</label>
                    <input type="text" value="{{ $data->nim }}" class="input input-bordered w-full" readonly>

                    <label>Email</label>
                    <input type="email" value="{{ $data->email }}" class="input input-bordered w-full" readonly>

                    <label>Jenis Kelamin</label>
                    <input type="text" value="{{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}" class="input input-bordered w-full" readonly>

                    <label>Instansi</label>
                    <input type="text" value="{{ $data->instansi }}" class="input input-bordered w-full" readonly>

                    <label>Jurusan</label>
                    <input type="text" value="{{ $data->jurusan }}" class="input input-bordered w-full" readonly>

                    <label>Semester</label>
                    <input type="text" value="{{ $data->semester }}" class="input input-bordered w-full" readonly>

                    <label>Angkatan</label>
                    <input type="text" value="{{ $data->angkatan }}" class="input input-bordered w-full" readonly>
                </div>

                <!-- Kolom Kanan -->
                <div class="flex flex-col space-y-2">
                    <label>Nomor WhatsApp</label>
                    <input type="text" value="{{ $data->nomor_whatsapp }}" class="input input-bordered w-full" readonly>

                    <label>Riwayat Penyakit</label>
                    <input type="text" value="{{ $data->penyakit }}" class="input input-bordered w-full" readonly>

                    <label>Kegiatan</label>
                    <input type="text" value="{{ $data->kegiatan }}" class="input input-bordered w-full" readonly>

                    <label>Kunjungan Peternakan</label>
                    <input type="text" value="{{ $data->kunjungan_peternakan }}" class="input input-bordered w-full" readonly>

                    <label>Pernah Magang</label>
                    <input type="text" value="{{ $data->pernah_magang ? 'Ya' : 'Tidak' }}" class="input input-bordered w-full" readonly>

                    <label>Referal</label>
                    <input type="text" value="{{ $data->referal }}" class="input input-bordered w-full" readonly>

                    <label>Alasan</label>
                    <textarea class="textarea textarea-bordered w-full" readonly>{{ $data->alasan }}</textarea>

                    <label>Instagram</label>
                    <input type="text" value="{{ $data->instagram }}" class="input input-bordered w-full" readonly>

                    <label>Punya Kendaraan</label>
                    <input type="text" value="{{ $data->punya_kendaraan ? 'Ya' : 'Tidak' }}" class="input input-bordered w-full" readonly>

                    <label>Bisa Nyetir</label>
                    <input type="text" value="{{ $data->bisa_nyetir ? 'Ya' : 'Tidak' }}" class="input input-bordered w-full" readonly>

                    <label>CV</label>
                    @if($data->cv)
                        <a href="{{ asset('storage/' . $data->cv) }}" target="_blank" class="text-blue-600 underline">Lihat CV</a>
                    @else
                        <p class="text-gray-500">Tidak ada</p>
                    @endif

                    <label>Status</label>
                    <input type="text" value="{{ ucfirst(str_replace('_', ' ', $data->status)) }}" class="input input-bordered w-full" readonly>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
