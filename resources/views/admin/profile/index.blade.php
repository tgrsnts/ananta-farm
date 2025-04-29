@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col p-4 pb-20 bg-slate-50">
        <div class="flex flex-col bg-white p-4 w-full rounded-lg shadow-md">
            <div class="font-semibold">Akun Saya</div>
            <div>Kelola informasi profil Anda.</div>
            <div class="divider"></div>
            <form method="POST" action="" enctype="multipart/form-data" class="flex w-full">
                @csrf
                <div class="w-1/4 flex flex-col items-center gap-4">
                    {{-- <img class="w-full aspect-square" src="{{ $user->gambar ?? '/default-avatar.jpg' }}"
                        alt="Foto Profil" /> --}}
                    <img class="w-full aspect-square" src="default-avatar.jpg" alt="Foto Profil" />
                    <label for="gambar"
                        class="w-full flex items-center justify-center rounded-md bg-green-normal hover:bg-green-normal-hover cursor-pointer py-2 px-4 text-white hover:bg-background focus:outline-none focus:ring focus:ring-green-normal">
                        Ubah Foto
                        <input type="file" id="gambar" name="gambar" class="hidden" />
                    </label>
                </div>
                <div class="flex w-3/4 pl-8">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td class="pr-4">
                                    <label for="nama" class="block text-left">Nama Lengkap</label>
                                </td>
                                <td class="pl-4 py-1">
                                    <input class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" type="text" name="name"
                                        value="{{ $user->nama }}" />
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4">
                                    <label for="email" class="block text-left">Email</label>
                                </td>
                                <td class="pl-4 py-1">
                                    <div class="relative">
                                        <input disabled class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg pr-24" type="email"
                                            name="email" value="{{ $user->email }}" />
                                        <button type="button"
                                            class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-green-normal hover:bg-green-normal-hover text-white text-sm px-3 py-1 rounded-md hover:bg-background"
                                            @if ($user->verification_email) disabled @endif>
                                            {{ $user->verification_email ? 'Sudah Terverifikasi' : 'Verifikasi Email' }}
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4">
                                    <label for="telp" class="block text-left">Telepon</label>
                                </td>
                                <td class="pl-4 py-1">
                                    {{-- <input class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" type="text" name="telp"
                                        value="{{ $user->telp }}" /> --}}
                                        <input class="w-full p-2 border-1 border-slate-400 focus:outline focus:outline-green-normal rounded-lg" type="text" name="telp"
                                        value="" />
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4">
                                    <label for="jenis_kelamin" class="block text-left">Jenis Kelamin</label>
                                </td>
                                {{-- <td class="pl-4 py-1 flex gap-8">
                                    <div class="flex items-center gap-1">
                                        <input class="accent-green-normal" name="jenis_kelamin" type="radio" value="Laki-laki"
                                            {{ $user->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} />
                                        <label>Laki-laki</label>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <input class="accent-green-normal" name="jenis_kelamin" type="radio" value="Perempuan"
                                            {{ $user->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} />
                                        <label>Perempuan</label>
                                    </div>
                                </td> --}}
                                <td class="pl-4 py-1 flex gap-8">
                                    <div class="flex items-center gap-1">
                                        <input class="accent-green-normal" name="jenis_kelamin" type="radio" value="Laki-laki"
                                             />
                                        <label>Laki-laki</label>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <input class="accent-green-normal" name="jenis_kelamin" type="radio" value="Perempuan"
                                            />
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
    </section>
@endsection
