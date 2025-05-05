<nav id="sidebar"
    class="transition-all duration-300 fixed left-0 h-full w-64 bg-green-normal z-11 flex flex-col gap-1 pr-12 font-sans text-base font-normal text-blue-gray-700">
    @php
        $currentRoute = Request::path();
    @endphp

    <div class="flex flex-col justify-between h-full pb-4">
        <div class="flex flex-col">
            <div class="flex w-64  h-20 justify-center">
                <a href="/" class="flex items-center gap-2 whitespace-nowrap text-2xl">
                    <img class="h-8" src="{{ asset('assets/image/logo-navbar.png') }}" alt="">
                    <p class="text-white font-semibold">ananta farm</p>
                </a>
            </div>

            <a href="/admin"
                class="mt-4 {{ $currentRoute == 'admin' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                <div class="flex w-6 h-6 mr-4 items-center justify-center">
                    <i class="fa-solid fa-dashboard"></i>
                </div>
                Dashboard
            </a>

            <a href="/admin/hewan"
                class="{{ Request::is('admin/hewan*') ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                <div class="flex w-6 h-6 mr-4 items-center justify-center">
                    <i class="fa-solid fa-paw"></i>
                </div>
                Hewan
            </a>

            @if (Auth::user()->role != 2)
            <a href="/admin/katalog"
                class="{{ Request::is('admin/katalog*') ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                <div class="flex w-6 h-6 mr-4 items-center justify-center">
                    <i class="fa-solid fa-image"></i>
                </div>
                Katalog
            </a>

            <a href="/admin/pendaftar"
                class="{{ Request::is('admin/pendaftar*') ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                <div class="flex w-6 h-6 mr-4 items-center justify-center">
                    <i class="fa-solid fa-users"></i>
                </div>
                Pendaftar
            </a>
            @endif

            {{-- <a href="/admin/staycation" class="{{ $currentRoute == 'admin/staycation' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                <div class="flex w-6 h-6 mr-4 items-center justify-center">
                    <i class="fa-solid fa-bed"></i>
                </div>
                Staycation
            </a> --}}

            {{-- <a href="/admin/profile"
                class="{{ $currentRoute == 'admin/staycation' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                <div class="flex w-6 h-6 mr-4 items-center justify-center">
                    <i class="fa-solid fa-user"></i>
                </div>
                Profil
            </a> --}}

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="text-white font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
                    <div class="flex w-6 h-6 mr-4 items-center justify-center">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    Log Out
                </button>
            </form>
        </div>
        <a href="/admin/profile"
            class="{{ $currentRoute == 'admin/staycation' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
            <div class="flex w-12 h-12 mr-4 items-center justify-center">
                <img class="w-full aspect-square rounded-full"
                src="{{ Auth()->user()->foto ? asset('storage/' . Auth()->user()->foto) : asset('assets/image/avatar-biru.jpg') }}"
                alt="Foto Profil" />
            </div>
           <flex class="flex-col">
            <p class="font-semibold">{{ Auth()->user()->nama}}</p>
            <p class="text-sm font-normal">Admin</p>
           </flex>
        </a>
    </div>
</nav>
