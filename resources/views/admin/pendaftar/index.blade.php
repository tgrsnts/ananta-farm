@extends('admin.layout.main')

@section('content')
    <section id="dashboard" class="min-h-screen font-poppins w-full flex flex-col p-4 pb-20 bg-slate-50">
        <div class="flex flex-col gap-4 bg-white p-4 w-full rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="font-semibold">Data Pendaftar</div>
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
            </div>
        </div>
    </section>
@endsection
