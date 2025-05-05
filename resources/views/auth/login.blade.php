<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f87eaab4e6.js" crossorigin="anonymous"></script>
</head>

<body class="font-poppins">
    <main>
        <div class="flex items-center justify-center bg-linear-to-bl from-green-normal to-slate-500 p-8 min-h-screen max-h-screen">
            <div class="flex items-stretch bg-white p-8 rounded-3xl w-fit h-fit">
                <img class="h-[30rem] object-cover rounded-2xl" src="{{ asset('assets/image/domba-garut.png') }}" alt="">
                <div class="flex flex-col p-8 gap-8 h-full w-fit">
                    <div class="flex flex-col">
                        <h1 class="text-green-normal text-xl lg:text-5xl font-bold mb-2 lg:mb-6">
                            Masuk
                        </h1>
                        <p class="text-xl">Selamat datang di Ananta Farm</p>
                    </div>
                    <form id="loginForm" action="{{ route('admin.login') }}" method="POST" class="flex flex-col gap-2 w-fitz flex-1">
                        @csrf
                        <div class="flex flex-col">
                            <label for="username-register">Email</label>
                            <input name="email" type="text" id="username-register" placeholder="Masukkan username"
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
                                <input name="password" type="password" id="password-register" placeholder="Masukkan password"
                                    class="js-password w-full text-xl p-4 rounded-md bg-gray-100 focus:outline-none focus:ring focus:ring-green-normal border-1 border-slate-400 focus:border-green-normal">
                            </div>
                        </div>
                        <div class="flex flex-col mt-4 text-2xl">
                            <button type="submit"
                                class="p-2 rounded-md bg-green-normal hover:bg-green-normal-hover text-white hover:cursor-pointer">Masuk</button>
                        </div>
                        <div class="mt-2 text-center">
                            Belum punya akun?
                            <a href="/register"
                                class="buttonSwitchToLoginOrRegister text-green-normal hover:text-green-normal-hover hover:underline hover:underline-green-normal-hover hover:underline-offset-4">
                                Daftar!
                            </a>
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
