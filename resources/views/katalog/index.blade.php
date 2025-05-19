@extends('layout.main')
@section('title', 'Katalog')
@section('content')
    <!-- Know About Us -->
    <section class="px-4 lg:px-40 py-20 bg-white">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-green-normal text-xl lg:text-3xl font-bold">Katalog Hewan Kurban
            </h3>
            <form method="GET" action="" class="flex">
                <div class="relative w-full">
                    <select name="jenis" onchange="this.form.submit()"
                        class="appearance-none w-full p-2 pr-10 border border-green-normal text-sm lg:text-lg text-green-normal rounded-lg bg-white">
                        <option value="" disabled {{ request('jenis') ? '' : 'selected' }}>Pilih Hewan</option>
                        @foreach ($jenis_hewan as $jenis)
                            <option value="{{ $jenis }}" {{ request('jenis') == $jenis ? 'selected' : '' }}>
                                {{ ucfirst($jenis) }}
                            </option>
                        @endforeach
                    </select>

                    <!-- Chevron Icon -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-green-normal">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.516 7.548a.5.5 0 0 1 .707-.032L10 11.066l3.777-3.55a.5.5 0 1 1 .684.73l-4.09 3.843a.5.5 0 0 1-.684 0L5.548 8.22a.5.5 0 0 1-.032-.707z" />
                        </svg>
                    </div>
                </div>

            </form>

        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($katalog as $item)
                <div class="flex flex-col bg-white drop-shadow-lg rounded-lg">
                    {{-- Gambar utama --}}
                    <img src="{{ asset('storage/' . $item->foto) }}" class="w-full rounded-t-lg aspect-square object-cover">

                    {{-- Konten --}}
                    <div class="flex flex-col items-center gap-1 lg:gap-2 p-2 lg:px-4 lg:py-8">
                        {{-- Nama hewan --}}
                        <div class="flex w-full justify-center bg-yellow-normal p-1 rounded-full">
                            <p class="font-semibold text-lg">{{ $item->nama }}</p>
                        </div>

                        {{-- Harga --}}
                        <p class="font-semibold text-green-normal text-xl">Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </p>

                        {{-- Info lainnya --}}
                        <div class="flex gap-4 mt-2">
                            {{-- Bobot --}}
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 19"
                                    fill="none">
                                    <path
                                        d="M6 4C6 5.10457 6.89543 6 8 6H10C11.1046 6 12 5.10457 12 4C12 2.89543 11.1046 2 10 2H8C6.89543 2 6 2.89543 6 4Z"
                                        stroke="#157D75" stroke-width="2" />
                                    <path d="M3.5 7H14.5L16 17H2L3.5 7Z" stroke="#157D75" stroke-width="2" />
                                </svg>
                                <p class="text-green-normal">{{ $item->bobot }} kg</p>
                            </div>

                            {{-- Jenis kelamin (jika ada) --}}
                            @if (isset($item->jenis_kelamin))
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 20 20" fill="none">
                                        <path d="M12 2H18V8" stroke="#157D75" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M18 2L10 10" stroke="#157D75" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="7" cy="13" r="5" stroke="#157D75" stroke-width="2" />
                                    </svg>
                                    <p class="text-green-normal">{{ ucfirst($item->jenis_kelamin) }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($katalog as $item)
                <div class="flex flex-col bg-white drop-shadow-lg rounded-lg">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="w-full rounded-t-lg h-64 object-cover">

                    <div class="flex flex-col lg:flex-row items-center w-full">
                        <div class="flex justify-center items-center bg-yellow-normal p-2 w-full h-full lg:p-6">
                            <p class="font-extrabold text-md lg:text-2xl text-green-normal">{{ $item->nama }}</p>
                        </div>
                        <div class="flex flex-row lg:flex-col justify-center px-4 w-full h-full bg-green-normal">
                            <p class="text-yellow-normal text">Kategori</p>
                            <p class="font-bold text-yellow-normal text-sm lg:text-md">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="flex flex-row lg:flex-col justify-center px-4 h-full w-full bg-green-normal">
                            <p class="text-yellow-normal">Bobot</p>
                            <p class="text-yellow-normal font-extrabold text-md lg:text-2xl">{{ $item->bobot }} kg</p>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </section>
@endsection
