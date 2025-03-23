<nav class="fixed top-0 left-0 h-full w-64 bg-green-normal mt-0 flex flex-col gap-1 pr-12 font-sans text-base font-normal text-blue-gray-700">
    @php
        $currentRoute = Request::path();
    @endphp

    <a href="/admin" class="mt-8 {{ $currentRoute == 'admin' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-dashboard"></i>
        </div>
        Dashboard
    </a>

    <a href="/admin/kandang" class="{{ $currentRoute == 'admin/kandang' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-home"></i>
        </div>
        Kandang
    </a>

    <a href="/admin/hewan" class="{{ $currentRoute == 'admin/hewan' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-paw"></i>
        </div>
        Hewan
    </a>

    <a href="/admin/pendaftar" class="{{ $currentRoute == 'admin/pendaftar' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-users"></i>
        </div>
        Pendaftar
    </a>

    <a href="/admin/staycation" class="{{ $currentRoute == 'admin/staycation' ? 'text-green-normal bg-white' : 'text-white' }} font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
        <div class="grid mr-4 place-items-center">
            <i class="fa-solid fa-bed"></i>
        </div>
        Staycation
    </a>

    <form method="POST" 
    {{-- action="{{ route('logout') }}" --}}
    >
        @csrf
        <button type="submit" class="text-white font-poppins font-semibold flex items-center w-full py-4 pl-16 pr-8 leading-tight transition-all rounded-r-lg outline-none text-start hover:bg-white hover:text-green-normal focus:bg-white focus:text-green-normal active:bg-white active:text-green-normal">
            <div class="grid mr-4 place-items-center">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            Log Out
        </button>
    </form>
</nav>
