@extends('admin.layout.main')
@section('title', 'Detail Pendaftar')
@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col gap-4 p-4 pb-20 bg-slate-50">
        <div class="w-full flex flex-col gap-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Detail Pendaftar</div>
                <div>
                    <form action="{{ route('admin.pendaftar.status', $data->id_daftar_magang) }}" method="POST"
                        class="flex gap-2">
                        @csrf
                        <label for="status" class="flex items-center">Status:</label>
                        <div class="relative w-full">
                            <select name="status" id="status"
                                class="appearance-none w-full px-4 py-3 pr-10 border border-slate-400 focus:outline-none focus:ring-2 focus:ring-green-normal rounded-lg text-sm lg:text-base text-slate-700 bg-white">
                                <option value="pending" @selected(old('status', $data->status ?? '') == 'pending')>Pending</option>
                                <option value="diterima" @selected(old('status', $data->status ?? '') == 'diterima')>Diterima</option>
                                <option value="tidak_diterima" @selected(old('status', $data->status ?? '') == 'tidak_diterima')>Tidak Diterima</option>
                                <option value="selesai" @selected(old('status', $data->status ?? '') == 'selesai')>Selesai</option>
                            </select>

                            <!-- Custom Chevron -->
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-500">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M5.516 7.548a.5.5 0 0 1 .707-.032L10 11.066l3.777-3.55a.5.5 0 1 1 .684.73l-4.09 3.843a.5.5 0 0 1-.684 0L5.548 8.22a.5.5 0 0 1-.032-.707z" />
                                </svg>
                            </div>
                        </div>

                        <button type="submit"
                            class="p-2 px-8 rounded-md bg-green-normal hover:bg-green-normal-hover text-white w-full hover:cursor-pointer">Simpan</button>
                    </form>
                </div>
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
                    <input type="text" value="{{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}"
                        class="input input-bordered w-full" readonly>

                    <label>Instansi</label>
                    <input type="text" value="{{ $data->instansi }}" class="input input-bordered w-full" readonly>

                    <label>Jurusan</label>
                    <input type="text" value="{{ $data->jurusan }}" class="input input-bordered w-full" readonly>

                    <label>Semester</label>
                    <input type="text" value="{{ $data->semester }}" class="input input-bordered w-full" readonly>

                    <label>Angkatan</label>
                    <input type="text" value="{{ $data->angkatan }}" class="input input-bordered w-full" readonly>

                    <label>CV</label>
                    @if ($data->cv)
                        <a href="{{ asset('storage/' . $data->cv) }}" target="_blank" class="text-blue-600 underline">Lihat
                            CV (tab baru)</a>
                        <embed src="{{ asset('storage/' . $data->cv) }}" type="application/pdf"
                            class="w-full h-64 mt-2 rounded border border-gray-300" />
                    @else
                        <p class="text-gray-500">Tidak ada</p>
                    @endif
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
                    <input type="text" value="{{ $data->kunjungan_peternakan }}" class="input input-bordered w-full"
                        readonly>

                    <label>Pernah Magang</label>
                    <input type="text" value="{{ $data->pernah_magang ? 'Ya' : 'Tidak' }}"
                        class="input input-bordered w-full" readonly>

                    <label>Referal</label>
                    <input type="text" value="{{ $data->referal }}" class="input input-bordered w-full" readonly>

                    <label>Alasan</label>
                    <textarea class="textarea textarea-bordered w-full" readonly>{{ $data->alasan }}</textarea>

                    <label>Instagram</label>
                    <input type="text" value="{{ $data->instagram }}" class="input input-bordered w-full" readonly>

                    <label>Punya Kendaraan</label>
                    <input type="text" value="{{ $data->punya_kendaraan ? 'Ya' : 'Tidak' }}"
                        class="input input-bordered w-full" readonly>

                    <label>Bisa Nyetir</label>
                    <input type="text" value="{{ $data->bisa_nyetir ? 'Ya' : 'Tidak' }}"
                        class="input input-bordered w-full" readonly>


                </div>
            </div>
        </div>
        </div>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    toast: true,
                    position: 'top-end',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif
        @if (session('gagal'))
            <script>
                Swal.fire({
                    icon: 'error',
                    toast: true,
                    position: 'top-end',
                    title: '{{ session('gagal') }}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif
    </section>
@endsection
