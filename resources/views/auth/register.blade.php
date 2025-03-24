<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f87eaab4e6.js" crossorigin="anonymous"></script>
</head>

<body class="font-poppins">
    <main>
        <div class="bg-linear-to-bl from-green-normal to-slate-500 p-8">
            <div class="flex bg-white p-8 rounded-3xl">
                <img class="w-1/2" src="{{ asset('assets/image/domba-garut.png') }}" alt="">
                <div class="flex flex-col w-1/2 p-8 gap-8">
                    <div class="flex flex-col">
                        <h1 class="text-green-normal text-xl lg:text-5xl font-bold mb-2 lg:mb-6">
                            Daftar Akun
                        </h1>
                        <p class="text-xl">Selamat datang di Ananta Farm</p>
                    </div>
                    <form id="registerForm" action="" class="flex flex-col gap-2 w-full">
                        <div class="flex flex-col">
                            <label for="namaRegister" class="text-xl">Nama</label>
                            <input type="text" id="namaRegister" placeholder="Masukkan nama"
                                class="w-full text-xl p-4 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal border-1 border-slate-400 focus:border-green-normal">
                        </div>
                        <div class="flex flex-col">
                            <label for="username-register">Username</label>
                            <input type="text" id="username-register" placeholder="Masukkan username"
                                class="w-full text-xl p-4 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal border-1 border-slate-400 focus:border-green-normal">
                        </div>
                        <div class="flex flex-col">
                            <label for="password-register">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 right-0 flex items-center px-4">
                                    <input class="hidden js-password-toggle" id="toggle-register" type="checkbox" />
                                    <label
                                        class="bg-gray-300 hover:bg-gray-400 rounded px-4 py-2 text-sm text-gray-600 font-mono cursor-pointer js-password-label"
                                        for="toggle-register"><i class="fa-solid fa-eye"></i></label>
                                </div>
                                <input type="password" id="password-register" placeholder="Masukkan password"
                                    class="js-password w-full text-xl p-4 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal border-1 border-slate-400 focus:border-green-normal">
                            </div>
                        </div>
                        <div class="flex flex-col mt-4 text-2xl">
                            <button type="submit"
                                class="p-2 rounded-md bg-green-normal text-white hover:cursor-pointer">Daftar</button>
                        </div>
                        <div class="divider">atau daftar dengan</div>
                        <button
                            class="mt-2 flex justify-center items-center gap-2 w-full border-2 border-green-normal rounded-md py-1 text-green-normal hover:bg-gray-100 hover:text-green-normal-hover"
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
                                <a href="/login"
                                    class="buttonSwitchToLoginOrRegister text-green-normal hover:text-green-normal-hover hover:underline hover:underline-green-normal-hover hover:underline-offset-4"
                                    >Masuk!</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <!-- Main JS  -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Tailwind Config -->
    {{-- <script src="{{ asset('assets/js/tailwind.config.js') }}"></script>     --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section");
            // const navDivs = document.querySelectorAll("nav div div");
            // const navLinks = document.querySelectorAll("nav div div a");
            const navLinks = document.querySelectorAll("header div nav ul li a");

            window.addEventListener("scroll", handleNavbar);

            function handleNavbar() {
                // let current = "";

                // sections.forEach(section => {
                //     const sectionTop = section.offsetTop;
                //     if (pageYOffset >= sectionTop - 50) {
                //         current = section.getAttribute("id");
                //     }
                // });

                // navDivs.forEach(div => {
                //     div.classList.remove("border-red-600");
                // });

                // navLinks.forEach(link => {
                //     if (link.getAttribute("href").includes(current)) {
                //         link.parentElement.classList.add("border-red-600");
                //     }
                // });

                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 50) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(link => {
                    // link.classList.remove("border-white");
                    link.parentElement.classList.remove("border-white");
                    if (link.getAttribute("href").includes(current)) {
                        // link.classList.add("border-white");
                        link.parentElement.classList.add("border-white");
                    }
                });
            }
        });
    </script>
</body>

</html>
