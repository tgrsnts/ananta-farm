<header id="navbar" class="transition-all duration-300 fixed pl-64 shadow top-0 w-full h-20 bg-green-normal">
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

        <button id="sidebarToggle"
            class="text-white hover:text-slate-300 text-2xl focus:outline-none z-10">
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
                <li class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white">
                    <a href="/">Home</a>
                </li>
                <li class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white">
                    <a href="/katalog">Katalog</a>
                </li>
                <li class="text-white border-b-2 border-green-normal md:mr-12 hover:border-white">
                    <a href="/staycation">Magang</a>
                </li>
                <a class="text-white border-2 md:mr-12 px-4 py-2 border-white cursor-pointer hover:bg-green-normal-hover hover:border-green-normal focus:bg-green-normal-hover focus:border-green-normal"
                    href="/login">Masuk</a>
                <li
                    class="text-white border-2 border-white md:mr-12 px-4 py-2 hover:bg-green-normal-hover hover:border-green-normal focus:bg-green-normal-hover focus:border-green-normal">
                    <a href="/admin">Dashboard</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Modal Login  -->
<dialog id="modal_login" class="modal backdrop-blur-lg">
    <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
        <div class="flex items-center bg-green-normal rounded-t-lg h-24 lg:h-40">
            <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Login</h2>
        </div>
        <div class="px-8 pt-4 pb-12">
            <form id="loginForm" action="" class="flex flex-col gap-2">
                <div class="flex flex-col">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Masukkan username"
                        class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal focus-border-green-normal">
                </div>
                <div class="flex flex-col">
                    <label for="password">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center px-2">
                            <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                            <label
                                class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                for="toggle"><i class="fa-solid fa-eye"></i></label>
                        </div>
                        <input type="password" id="password" placeholder="Masukkan password"
                            class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal focus-border-green-normal">
                    </div>
                    <a href=""
                        class="mt-1 text-sm text-green-normal hover:text-additional2 hover:underline hover:underline-additional2 hover:underline-offset-4">Lupa
                        password?</a>
                </div>
                <div class="flex flex-col mt-2">
                    <button type="submit"
                        class="p-2 rounded-md bg-green-normal text-white hover:bg-additional2">Login</button>
                </div>
            </form>
            <div class="divider">atau masuk dengan</div>
            <button
                class="mt-2 flex justify-center items-center gap-2 w-full border-2 rounded-md py-1 text-black hover:bg-gray-100 hover:text-additional2"
                onclick="modal_register.showModal()">
                <svg class="w-8 aspect-square" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" style="enable-background:new 0 0 150 150;"
                    version="1.1" viewBox="0 0 150 150" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #1A73E8;
                        }

                        .st1 {
                            fill: #EA4335;
                        }

                        .st2 {
                            fill: #4285F4;
                        }

                        .st3 {
                            fill: #FBBC04;
                        }

                        .st4 {
                            fill: #34A853;
                        }

                        .st5 {
                            fill: #4CAF50;
                        }

                        .st6 {
                            fill: #1E88E5;
                        }

                        .st7 {
                            fill: #E53935;
                        }

                        .st8 {
                            fill: #C62828;
                        }

                        .st9 {
                            fill: #FBC02D;
                        }

                        .st10 {
                            fill: #1565C0;
                        }

                        .st11 {
                            fill: #2E7D32;
                        }

                        .st12 {
                            fill: #F6B704;
                        }

                        .st13 {
                            fill: #E54335;
                        }

                        .st14 {
                            fill: #4280EF;
                        }

                        .st15 {
                            fill: #34A353;
                        }

                        .st16 {
                            clip-path: url(#SVGID_2_);
                        }

                        .st17 {
                            fill: #188038;
                        }

                        .st18 {
                            opacity: 0.2;
                            fill: #FFFFFF;
                            enable-background: new;
                        }

                        .st19 {
                            opacity: 0.3;
                            fill: #0D652D;
                            enable-background: new;
                        }

                        .st20 {
                            clip-path: url(#SVGID_4_);
                        }

                        .st21 {
                            opacity: 0.3;
                            fill: url(#_45_shadow_1_);
                            enable-background: new;
                        }

                        .st22 {
                            clip-path: url(#SVGID_6_);
                        }

                        .st23 {
                            fill: #FA7B17;
                        }

                        .st24 {
                            opacity: 0.3;
                            fill: #174EA6;
                            enable-background: new;
                        }

                        .st25 {
                            opacity: 0.3;
                            fill: #A50E0E;
                            enable-background: new;
                        }

                        .st26 {
                            opacity: 0.3;
                            fill: #E37400;
                            enable-background: new;
                        }

                        .st27 {
                            fill: url(#Finish_mask_1_);
                        }

                        .st28 {
                            fill: #FFFFFF;
                        }

                        .st29 {
                            fill: #0C9D58;
                        }

                        .st30 {
                            opacity: 0.2;
                            fill: #004D40;
                            enable-background: new;
                        }

                        .st31 {
                            opacity: 0.2;
                            fill: #3E2723;
                            enable-background: new;
                        }

                        .st32 {
                            fill: #FFC107;
                        }

                        .st33 {
                            opacity: 0.2;
                            fill: #1A237E;
                            enable-background: new;
                        }

                        .st34 {
                            opacity: 0.2;
                        }

                        .st35 {
                            fill: #1A237E;
                        }

                        .st36 {
                            fill: url(#SVGID_7_);
                        }

                        .st37 {
                            fill: #FBBC05;
                        }

                        .st38 {
                            clip-path: url(#SVGID_9_);
                            fill: #E53935;
                        }

                        .st39 {
                            clip-path: url(#SVGID_11_);
                            fill: #FBC02D;
                        }

                        .st40 {
                            clip-path: url(#SVGID_13_);
                            fill: #E53935;
                        }

                        .st41 {
                            clip-path: url(#SVGID_15_);
                            fill: #FBC02D;
                        }
                    </style>
                    <g>
                        <path class="st14"
                            d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5   C115,101.8,120,90,120,76.1L120,76.1z" />
                        <path class="st15"
                            d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9   L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z" />
                        <path class="st12"
                            d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z" />
                        <path class="st13"
                            d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3   l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z" />
                    </g>
                </svg> Google
            </button>
            <div class="mt-2 text-center">
                Belum punya akun? <form method="dialog" class="inline">
                    <button
                        class="buttonSwitchToLoginOrRegister text-green-normal hover:text-additional2 hover:underline hover:underline-additional2 hover:underline-offset-4"
                        onclick="modal_register.showModal()">Daftar!</button>
                </form>
            </div>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<!-- Modal Register  -->
<dialog id="modal_register" class="modal backdrop-blur-lg">
    <div class="modal-box font-poppins p-0 w-76 lg:w-96 flex flex-col">
        <div class="flex items-center bg-green-normal rounded-t-lg h-24 lg:h-40">
            <h2 class="text-2xl lg:text-5xl font-bold text-center text-white w-full">Daftar</h2>
        </div>
        <div class="px-8 pt-4 pb-12">
            <form id="registerForm" action="" class="flex flex-col gap-2">
                <div class="flex flex-col">
                    <label for="namaRegister">Nama</label>
                    <input type="text" id="namaRegister" placeholder="Masukkan nama"
                        class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal focus-border-green-normal">
                </div>
                <div class="flex flex-col">
                    <label for="username-register">Username</label>
                    <input type="text" id="username-register" placeholder="Masukkan username"
                        class="w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal focus-border-green-normal">
                </div>
                <div class="flex flex-col">
                    <label for="password-register">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center px-2">
                            <input class="hidden js-password-toggle" id="toggle-register" type="checkbox" />
                            <label
                                class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                for="toggle-register"><i class="fa-solid fa-eye"></i></label>
                        </div>
                        <input type="password" id="password-register" placeholder="Masukkan password"
                            class="js-password w-full p-2 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal focus-border-green-normal">
                    </div>
                </div>
                <div class="flex flex-col mt-4">
                    <button type="submit"
                        class="p-2 rounded-md bg-green-normal text-white hover:bg-additional2">Daftar</button>
                </div>
            </form>
            <div class="divider">atau daftar dengan</div>
            <button
                class="mt-2 flex justify-center items-center gap-2 w-full border-2 rounded-md py-1 text-black hover:bg-gray-100 hover:text-additional2"
                onclick="modal_register.showModal()">
                <svg class="w-8 aspect-square" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1"
                    style="enable-background:new 0 0 150 150;" version="1.1" viewBox="0 0 150 150"
                    xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #1A73E8;
                        }

                        .st1 {
                            fill: #EA4335;
                        }

                        .st2 {
                            fill: #4285F4;
                        }

                        .st3 {
                            fill: #FBBC04;
                        }

                        .st4 {
                            fill: #34A853;
                        }

                        .st5 {
                            fill: #4CAF50;
                        }

                        .st6 {
                            fill: #1E88E5;
                        }

                        .st7 {
                            fill: #E53935;
                        }

                        .st8 {
                            fill: #C62828;
                        }

                        .st9 {
                            fill: #FBC02D;
                        }

                        .st10 {
                            fill: #1565C0;
                        }

                        .st11 {
                            fill: #2E7D32;
                        }

                        .st12 {
                            fill: #F6B704;
                        }

                        .st13 {
                            fill: #E54335;
                        }

                        .st14 {
                            fill: #4280EF;
                        }

                        .st15 {
                            fill: #34A353;
                        }

                        .st16 {
                            clip-path: url(#SVGID_2_);
                        }

                        .st17 {
                            fill: #188038;
                        }

                        .st18 {
                            opacity: 0.2;
                            fill: #FFFFFF;
                            enable-background: new;
                        }

                        .st19 {
                            opacity: 0.3;
                            fill: #0D652D;
                            enable-background: new;
                        }

                        .st20 {
                            clip-path: url(#SVGID_4_);
                        }

                        .st21 {
                            opacity: 0.3;
                            fill: url(#_45_shadow_1_);
                            enable-background: new;
                        }

                        .st22 {
                            clip-path: url(#SVGID_6_);
                        }

                        .st23 {
                            fill: #FA7B17;
                        }

                        .st24 {
                            opacity: 0.3;
                            fill: #174EA6;
                            enable-background: new;
                        }

                        .st25 {
                            opacity: 0.3;
                            fill: #A50E0E;
                            enable-background: new;
                        }

                        .st26 {
                            opacity: 0.3;
                            fill: #E37400;
                            enable-background: new;
                        }

                        .st27 {
                            fill: url(#Finish_mask_1_);
                        }

                        .st28 {
                            fill: #FFFFFF;
                        }

                        .st29 {
                            fill: #0C9D58;
                        }

                        .st30 {
                            opacity: 0.2;
                            fill: #004D40;
                            enable-background: new;
                        }

                        .st31 {
                            opacity: 0.2;
                            fill: #3E2723;
                            enable-background: new;
                        }

                        .st32 {
                            fill: #FFC107;
                        }

                        .st33 {
                            opacity: 0.2;
                            fill: #1A237E;
                            enable-background: new;
                        }

                        .st34 {
                            opacity: 0.2;
                        }

                        .st35 {
                            fill: #1A237E;
                        }

                        .st36 {
                            fill: url(#SVGID_7_);
                        }

                        .st37 {
                            fill: #FBBC05;
                        }

                        .st38 {
                            clip-path: url(#SVGID_9_);
                            fill: #E53935;
                        }

                        .st39 {
                            clip-path: url(#SVGID_11_);
                            fill: #FBC02D;
                        }

                        .st40 {
                            clip-path: url(#SVGID_13_);
                            fill: #E53935;
                        }

                        .st41 {
                            clip-path: url(#SVGID_15_);
                            fill: #FBC02D;
                        }
                    </style>
                    <g>
                        <path class="st14"
                            d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5   C115,101.8,120,90,120,76.1L120,76.1z" />
                        <path class="st15"
                            d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9   L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z" />
                        <path class="st12"
                            d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z" />
                        <path class="st13"
                            d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3   l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z" />
                    </g>
                </svg> Google
            </button>
            <div class="mt-2 text-center">
                Sudah punya akun? <form method="dialog" class="inline">
                    <button
                        class="buttonSwitchToLoginOrRegister text-green-normal hover:text-additional2 hover:underline hover:underline-additional2 hover:underline-offset-4"
                        onclick="modal_login.showModal()">Login!</button>
                </form>
            </div>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
