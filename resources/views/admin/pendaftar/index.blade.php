@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col p-4 pb-20 bg-slate-50">
        <div class="flex flex-col gap-4 bg-white p-4 w-full rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="font-semibold">Data Pendaftar</div>
            </div>

            <div class="overflow-x-auto">
                <table class="table rounded-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            {{-- <th>Email</th> --}}
                            <th>Whatsapp</th>
                            <th>Instagram</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Instansi</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                {{-- <td>{{ $item->email }}</td> --}}
                                @php
                                    $nomor = preg_replace('/[^0-9]/', '', $item->nomor_whatsapp); // bersihkan nomor
                                    $pesan = urlencode('Halo, saya mau bertanya tentang magang di sini.'); // auto chat
                                    $waUrl = "https://wa.me/{$nomor}?text={$pesan}";
                                @endphp

                                <td>
                                    <a href="{{ $waUrl }}" target="_blank"
                                        class="text-green-normal underline flex items-center gap-1">
                                        {{ $item->nomor_whatsapp }}
                                    </a>
                                </td>

                                @php
                                    $instagram = $item->instagramz;
                                    $instagramUrl= "https://instagram.com/{$instagram}";
                                @endphp

                                <td>
                                    <a href="{{ $instagramUrl}}" target="_blank"
                                        class="text-green-normal underline flex items-center gap-1">
                                        {{ $item->instagram}}
                                    </a>
                                </td>
                                <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }}</td>
                                <td>{{ $item->instansi }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $item->status)) }}</td>
                                <td class="flex gap-1">
                                    <a href="/admin/pendaftar/{{$item->id_daftar_magang}}"
                                        class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md">
                                        Detail
                                    </a>
                                    <form action="{{ route('admin.pendaftar.destroy', $item->id_daftar_magang) }}"
                                        method="POST" onsubmit="return confirm('Yakin ingin menghapus pendaftar ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-md">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            {{-- <div class="grid grid-cols-6 gap-4">
                <div
                    class="flex flex-col gap-4 justify-between items-center w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex flex-col gap-4">
                        <img class="w-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="Foto Profil" />
                        <div class="flex flex-col w-fit">
                            <span class="text-md font-medium">Mochamad Tegar Santoso</span>
                            <span class="text-md">IPB University</span>
                            <span class="text-sm">+62896-7052-2489</span>
                        </div>
                    </div>
                    <button
                        class="bg-green-normal hover:bg-green-normal-hover text-sm text-white px-4 py-2 rounded-md">Lihat
                        Detail</button>
                </div>
                <div
                    class="flex flex-col gap-4 justify-between items-center w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex flex-col gap-4">
                        <img class="w-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="Foto Profil" />
                        <div class="flex flex-col w-fit">
                            <span class="text-md font-medium">Mochamad Tegar Santoso</span>
                            <span class="text-md">IPB University</span>
                            <span class="text-sm">+62896-7052-2489</span>
                        </div>
                    </div>
                    <button
                        class="bg-green-normal hover:bg-green-normal-hover text-sm text-white px-4 py-2 rounded-md">Lihat
                        Detail</button>
                </div>
                <div
                    class="flex flex-col gap-4 justify-between items-center w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex flex-col gap-4">
                        <img class="w-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="Foto Profil" />
                        <div class="flex flex-col w-fit">
                            <span class="text-md font-medium">Mochamad Tegar Santoso</span>
                            <span class="text-md">IPB University</span>
                            <span class="text-sm">+62896-7052-2489</span>
                        </div>
                    </div>
                    <button
                        class="bg-green-normal hover:bg-green-normal-hover text-sm text-white px-4 py-2 rounded-md">Lihat
                        Detail</button>
                </div>
                <div
                    class="flex flex-col gap-4 justify-between items-center w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex flex-col gap-4">
                        <img class="w-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="Foto Profil" />
                        <div class="flex flex-col w-fit">
                            <span class="text-md font-medium">Mochamad Tegar Santoso</span>
                            <span class="text-md">IPB University</span>
                            <span class="text-sm">+62896-7052-2489</span>
                        </div>
                    </div>
                    <button
                        class="bg-green-normal hover:bg-green-normal-hover text-sm text-white px-4 py-2 rounded-md">Lihat
                        Detail</button>
                </div>
                <div
                    class="flex flex-col gap-4 justify-between items-center w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex flex-col gap-4">
                        <img class="w-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="Foto Profil" />
                        <div class="flex flex-col w-fit">
                            <span class="text-md font-medium">Mochamad Tegar Santoso</span>
                            <span class="text-md">IPB University</span>
                            <span class="text-sm">+62896-7052-2489</span>
                        </div>
                    </div>
                    <button
                        class="bg-green-normal hover:bg-green-normal-hover text-sm text-white px-4 py-2 rounded-md">Lihat
                        Detail</button>
                </div>
                <div
                    class="flex flex-col gap-4 justify-between items-center w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex flex-col gap-4">
                        <img class="w-full" src="{{ asset('assets/image/avatar-biru.jpg') }}" alt="Foto Profil" />
                        <div class="flex flex-col w-fit">
                            <span class="text-md font-medium">Mochamad Tegar Santoso</span>
                            <span class="text-md">IPB University</span>
                            <span class="text-sm">+62896-7052-2489</span>
                        </div>
                    </div>
                    <button
                        class="bg-green-normal hover:bg-green-normal-hover text-sm text-white px-4 py-2 rounded-md">Lihat
                        Detail</button>
                </div>
            </div>

            <div class="flex flex-col gap-2">

                <div class="flex flex-col w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex justify-between items-center w-full">
                        <div class="flex gap-4">
                            <img class="w-24 h-20" src="default-avatar.jpg" alt="Foto Profil" />
                            <div class="flex flex-col w-fit">
                                <span class="text-xl font-medium">Mochamad Tegar Santoso</span>
                                <span class="text-md">IPB University</span>
                                <span class="text-md">+62896-7052-2489</span>
                            </div>
                        </div>
                        <button class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md">Lihat
                            Detail</button>
                    </div>
                </div>
                <div class="flex flex-col w-full rounded-md border-1 border-slate-400 p-4">
                    <div class="flex justify-between items-center w-full">
                        <div class="flex gap-4">
                            <img class="w-24 h-20" src="default-avatar.jpg" alt="Foto Profil" />
                            <div class="flex flex-col w-fit">
                                <span class="text-xl font-medium">Mochamad Tegar Santoso</span>
                                <span class="text-md">IPB University</span>
                                <span class="text-md">+62896-7052-2489</span>
                            </div>
                        </div>
                        <button class="bg-green-normal hover:bg-green-normal-hover text-white px-4 py-2 rounded-md">Lihat
                            Detail</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
