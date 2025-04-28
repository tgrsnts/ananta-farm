<header class="shadow fixed top-0 w-full z-10 h-20 bg-green-normal">
    <div
        class="bg-green-normal relative flex justify-between lg:justify-start flex-col lg:flex-row lg:h-20 overflow-hidden px-4 py-4 md:px-36 md:mx-auto md:flex-wrap md:items-center">
        <a href="/" class="flex items-center gap-2 whitespace-nowrap text-2xl">
            <img class="h-8" src="{{ asset('assets/image/logo-navbar.png') }}" alt="">
            <p class="text-white font-semibold">ananta farm</p>
        </a>

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
                <li class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white {{ Request::is('/') ? 'border-white' : '' }}">
                    <a href="/">Home</a>
                </li>
                <li class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white {{ Request::is('/katalog') ? 'border-white' : '' }}">
                    <a href="/katalog">Katalog</a>
                </li>
                <li class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white {{ Request::is('/magang') ? 'border-white' : '' }}">
                    <a href="/staycation">Magang</a>
                </li>
                <a
                    class="text-white border-2 md:mr-12 px-4 py-2 border-white cursor-pointer hover:bg-green-normal-hover hover:border-green-normal focus:bg-green-normal-hover focus:border-green-normal"
                    href="/login">Masuk</a>
                <li
                    class="text-white border-2 border-white md:mr-12 px-4 py-2 hover:bg-green-normal-hover hover:border-green-normal focus:bg-green-normal-hover focus:border-green-normal">
                    <a href="/admin">Dashboard</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
