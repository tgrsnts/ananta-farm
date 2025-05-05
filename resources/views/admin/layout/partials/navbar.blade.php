<header id="navbar" class="transition-all duration-300 fixed pl-64 shadow top-0 w-full h-20 bg-green-normal z-10">
    <div
        class="bg-green-normal relative flex justify-between lg:justify-start flex-col lg:flex-row lg:h-20 overflow-hidden px-4 py-4 md:pl-12 md:pr-36 md:mx-auto md:flex-wrap md:items-center">

        {{-- <div class="relative flex w-64 justify-center">
            <a href="/" class="flex items-center whitespace-nowrap text-2xl">
                <img class="h-8" src="{{ asset('assets/image/logo-ananta-farm-putih.png') }}" alt="">
            </a>
            <button id="sidebarToggle"
                class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-slate-300 text-2xl focus:outline-none z-10">
                ☰
            </button>
        </div> --}}

        <button id="sidebarToggle" class="text-white hover:text-slate-300 text-2xl focus:outline-none z-10">
            ☰
        </button>



        <!-- Hamburger Menu for Mobile -->
        <input type="checkbox" class="peer hidden" id="navbar-open" />
        <label class="absolute top-7 right-8 cursor-pointer md:hidden" for="navbar-open">
            <span class="sr-only">Toggle Navigation</span>
            <i class="fa-solid fa-bars h-6 w-6 text-white"></i>
        </label>

        <!-- Navigation Menu -->
        <nav aria-label="Header Navigation"
            class="peer-checked:max-h-60 max-h-0 w-full lg:w-auto flex-col flex lg:flex-row lg:max-h-full overflow-hidden transition-all duration-300 lg:items-center lg:ml-auto">
            <ul
                class="flex flex-col lg:flex-row lg:space-y-0 space-y-4 items-center lg:ml-auto font-poppins font-semibold">
                <li
                    class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white {{ Request::is('/') ? 'border-white' : '' }}">
                    <a href="/">Home</a>
                </li>
                <li
                    class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white {{ Request::is('/katalog') ? 'border-white' : '' }}">
                    <a href="/katalog">Katalog</a>
                </li>
                <li
                    class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white {{ Request::is('/magang') ? 'border-white' : '' }}">
                    <a href="/staycation">Magang</a>
                </li>
                @auth
                    <li
                        class="text-white border-2 border-white md:mr-12 px-4 py-2 hover:bg-green-normal-hover hover:border-green-normal focus:bg-green-normal-hover focus:border-green-normal">
                        <a href="/admin">Dashboard</a>
                    </li>
                @else
                    <a class="text-white border-2 md:mr-12 px-4 py-2 border-white cursor-pointer hover:bg-green-normal-hover hover:border-green-normal focus:bg-green-normal-hover focus:border-green-normal"
                        href="/login">Masuk</a>
                @endauth
            </ul>
        </nav>
    </div>
</header>
