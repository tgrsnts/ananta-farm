@extends('layout.main')

@section('content')
<!-- Hero -->
<section id="hero">
    <div class="bg-cover bg-center h-screen relative" style="background-image: url('image/IMG_2597.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
            <h1 class="text-white px-4 text-2xl lg:text-5xl font-poppins font-bold mb-2">Ananta Farm
            </h1>
        </div>
    </div>
</section>

<!-- Know About Us -->
<section class="px-4 lg:px-40 py-20 bg-white">
    <div class="container mx-auto flex flex-col gap-5 items-center justify-center">
        <h1 class="text-green-normal text-center text-xl lg:text-5xl font-poppins font-bold mb-2 lg:mb-6">
            Prolog<span class="text-yellow-normal">.</span>
        </h1>
        <div class="flex flex-col gap-24 items-center">
            <div class="flex flex-col gap-8 items-center">
                <h2 class="text-green-normal text-center text-xl lg:text-4xl font-poppins font-bold"><span
                        class="text-yellow-normal">i.</span> Identitas Peternakan</h2>
                <img src="{{ asset('assets/image/logo-ananta-farm.png') }}" class="w-40" alt="">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full lg:w-3/4">
                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">Ananta
                            Farm
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Nama peternakan yang
                            berasal dari nama keluarga
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">Gambar
                            Domba
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Menggambarkan peternakan
                            yg dimulai dengan beternak
                            domba. jendela di kepala
                            sebagai simbol peternakan.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">Kandang
                            & Dapoer
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Bahwa peternakan ini berfokus pada kegiatan di seputar kandang, dan juga menyediakan
                            kebutuhan
                            di dapur.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">Daun
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Simbol keseriusan peternakan
                            untuk memajukan industri ini
                            sebagai tempat berbagi ilmu
                            dan juga pengalaman.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-8 items-center bg-[#B6FFF9] p-8 lg:p-20 rounded-3xl w-full lg:w-3/4">
                <h2 class="text-green-normal text-center text-xl lg:text-4xl font-poppins font-bold mb-2 lg:mb-6">
                    ii. Sejarah Peternakan</h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2016
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Pertanian, lalu beralih ke peternakan.
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-chevron-right text-5xl text-green-normal rotate-90 lg:rotate-0"></i>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2017
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Domba Garut 27 ekor
                            secara tradisional
                        </p>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2018
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Investasi kandang,
                            penggemukan
                            300 ekor domba
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-chevron-right text-5xl text-green-normal rotate-90 lg:rotate-0"></i>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2019
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Mulai pembibitan
                            Domba Garut 60 ekor
                        </p>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2021
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Investasi kandang,
                            penggemukan
                            sapi 30 ekor
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-chevron-right text-5xl text-green-normal rotate-90 lg:rotate-0"></i>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2022
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Investasi kandang,
                            pembibitan
                            domba 100 ekor
                        </p>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2023
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Pertanian, lalu beralih ke peternakan.
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-chevron-right text-5xl text-green-normal rotate-90 lg:rotate-0"></i>
                    </div>

                    <div class="flex flex-col gap-4 items-center">
                        <h2 class="text-green-normal text-center text-xl lg:text-3xl font-poppins font-bold">2024
                        </h2>
                        <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                            Sapi perah, dan lainnya!
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-8 items-center bg-yellow-normal p-8 lg:p-20 rounded-3xl w-full lg:w-3/4">
                <h2 class="text-green-normal text-center text-xl lg:text-4xl font-poppins font-bold mb-2 lg:mb-6">
                    iii. Komoditas Peternakan</h2>

                <div class="flex flex-col gap-16">
                    <div class="flex flex-col gap-8 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="158" height="157"
                            viewBox="0 0 158 157" fill="none">
                            <path
                                d="M141.8 51.025C141.8 56.2299 139.732 61.2216 136.052 64.902C132.372 68.5824 127.38 70.65 122.175 70.65C113.697 70.65 106.475 65.2335 103.806 57.776C100.352 60.8375 95.799 62.8 90.775 62.8C86.379 62.8 82.297 61.3085 79 58.875C75.703 61.3085 71.6995 62.8 67.225 62.8C62.201 62.8 57.648 60.8375 54.194 57.776C51.525 65.2335 44.303 70.65 35.825 70.65C30.6201 70.65 25.6284 68.5824 21.948 64.902C18.2676 61.2216 16.2 56.2299 16.2 51.025C16.2 41.291 23.3435 33.2055 32.685 31.714C32.214 30.3795 31.9 28.9665 31.9 27.475C31.9 24.3521 33.1406 21.3571 35.3488 19.1488C37.5571 16.9406 40.5521 15.7 43.675 15.7C45.245 15.7 46.7365 16.014 48.071 16.5635C49.4055 11.5395 53.9585 7.85 59.375 7.85C61.3375 7.85 63.3 8.3995 64.713 9.1845C67.225 3.925 72.6415 0 79 0C85.3585 0 90.775 3.925 93.287 9.1845C94.7 8.3995 96.6625 7.85 98.625 7.85C104.041 7.85 108.594 11.5395 109.929 16.5635C111.263 16.014 112.755 15.7 114.325 15.7C117.448 15.7 120.443 16.9406 122.651 19.1488C124.859 21.3571 126.1 24.3521 126.1 27.475C126.1 28.9665 125.786 30.3795 125.315 31.714C134.656 33.2055 141.8 41.291 141.8 51.025ZM63.3 78.5C61.218 78.5 59.2214 79.327 57.7492 80.7992C56.2771 82.2714 55.45 84.2681 55.45 86.35C55.45 88.4319 56.2771 90.4286 57.7492 91.9008C59.2214 93.3729 61.218 94.2 63.3 94.2C65.382 94.2 67.3786 93.3729 68.8508 91.9008C70.3229 90.4286 71.15 88.4319 71.15 86.35C71.15 84.2681 70.3229 82.2714 68.8508 80.7992C67.3786 79.327 65.382 78.5 63.3 78.5ZM94.7 78.5C92.618 78.5 90.6214 79.327 89.1492 80.7992C87.6771 82.2714 86.85 84.2681 86.85 86.35C86.85 88.4319 87.6771 90.4286 89.1492 91.9008C90.6214 93.3729 92.618 94.2 94.7 94.2C96.782 94.2 98.7786 93.3729 100.251 91.9008C101.723 90.4286 102.55 88.4319 102.55 86.35C102.55 84.2681 101.723 82.2714 100.251 80.7992C98.7786 79.327 96.782 78.5 94.7 78.5ZM143.605 67.981C138.581 74.3395 130.889 78.5 122.175 78.5C118.643 78.5 115.267 77.715 112.048 76.3805C111.97 96.398 109.065 120.576 98.2325 133.058C94.1505 137.689 89.205 140.201 82.925 140.986V125.6H75.075V140.986C68.795 140.201 63.8495 137.768 59.7675 133.058C48.856 120.498 45.9515 96.4765 45.873 76.459C42.733 77.715 39.3575 78.5 35.825 78.5C27.1115 78.5 19.4185 74.3395 14.3945 67.981C7.408 74.9675 0.5 78.5 0.5 78.5C0.5 78.5 8.35 94.2 24.05 94.2C26.876 94.2 29.074 93.886 30.958 93.4935C33.627 123.48 44.303 157 79 157C113.697 157 124.373 123.48 127.042 93.4935C128.926 93.886 131.124 94.2 133.95 94.2C149.65 94.2 157.5 78.5 157.5 78.5C157.5 78.5 150.592 74.9675 143.605 67.981Z"
                                fill="#157D75" />
                        </svg>
                        <div class="flex flex-col gap-2">
                            <p class="text-green-normal text-center text-xl lg:text-2xl font-poppins font-medium">
                                Domba Pembibitan
                            </p>
                            <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                                1500 ekor (Kapasitas kandang)
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="183" height="164"
                            viewBox="0 0 183 164" fill="none">
                            <path
                                d="M72.869 133.63C72.869 135.241 72.229 136.786 71.0899 137.925C69.9508 139.064 68.4058 139.704 66.7949 139.704H54.6467C53.0358 139.704 51.4908 139.064 50.3517 137.925C49.2126 136.786 48.5727 135.241 48.5727 133.63C48.5727 132.019 49.2126 130.474 50.3517 129.335C51.4908 128.195 53.0358 127.556 54.6467 127.556H66.7949C68.4058 127.556 69.9508 128.195 71.0899 129.335C72.229 130.474 72.869 132.019 72.869 133.63ZM127.536 127.556H115.387C113.777 127.556 112.232 128.195 111.092 129.335C109.953 130.474 109.313 132.019 109.313 133.63C109.313 135.241 109.953 136.786 111.092 137.925C112.232 139.064 113.777 139.704 115.387 139.704H127.536C129.147 139.704 130.692 139.064 131.831 137.925C132.97 136.786 133.61 135.241 133.61 133.63C133.61 132.019 132.97 130.474 131.831 129.335C130.692 128.195 129.147 127.556 127.536 127.556ZM69.8319 72.8889C68.0299 72.8889 66.2684 73.4232 64.7701 74.4244C63.2718 75.4255 62.104 76.8485 61.4144 78.5133C60.7248 80.1782 60.5443 82.0101 60.8959 83.7775C61.2474 85.5449 62.1152 87.1683 63.3894 88.4425C64.6636 89.7167 66.2871 90.5845 68.0544 90.9361C69.8218 91.2876 71.6538 91.1072 73.3186 90.4176C74.9834 89.728 76.4064 88.5602 77.4075 87.0619C78.4087 85.5635 78.943 83.802 78.943 82C78.943 79.5836 77.9831 77.2661 76.2745 75.5575C74.5658 73.8488 72.2484 72.8889 69.8319 72.8889ZM112.35 72.8889C110.548 72.8889 108.787 73.4232 107.289 74.4244C105.79 75.4255 104.622 76.8485 103.933 78.5133C103.243 80.1782 103.063 82.0101 103.414 83.7775C103.766 85.5449 104.634 87.1683 105.908 88.4425C107.182 89.7167 108.806 90.5845 110.573 90.9361C112.34 91.2876 114.172 91.1072 115.837 90.4176C117.502 89.728 118.925 88.5602 119.926 87.0619C120.927 85.5635 121.462 83.802 121.462 82C121.462 79.5836 120.502 77.2661 118.793 75.5575C117.084 73.8488 114.767 72.8889 112.35 72.8889ZM179.461 80.5726C178.322 81.9675 176.887 83.0917 175.26 83.8638C173.633 84.636 171.855 85.0367 170.054 85.037H145.758V109.333C150.857 113.158 154.624 118.49 156.525 124.574C158.425 130.658 158.363 137.186 156.347 143.234C154.332 149.281 150.465 154.54 145.294 158.267C140.122 161.994 133.91 164 127.536 164H54.6467C48.2725 164 42.0599 161.994 36.8889 158.267C31.7179 154.54 27.8506 149.281 25.8349 143.234C23.8192 137.186 23.7572 130.658 25.6578 124.574C27.5584 118.49 31.3252 113.158 36.4245 109.333V85.037H12.1282C10.3416 85.0341 8.57754 84.6371 6.96187 83.8744C5.34621 83.1116 3.91868 82.0018 2.78102 80.6242C1.64337 79.2465 0.823601 77.6349 0.380143 75.9041C-0.0633161 74.1734 -0.119547 72.3661 0.215456 70.6111C2.16306 60.984 7.37626 52.3252 14.9732 46.0994C22.5701 39.8735 32.0843 36.4629 41.9064 36.4444H43.1516C39.0981 32.4933 35.8771 27.7704 33.6785 22.5543C31.4799 17.3382 30.3483 11.7346 30.3505 6.07407C30.3505 4.46313 30.9904 2.91816 32.1295 1.77905C33.2686 0.639945 34.8136 0 36.4245 0C38.0355 0 39.5804 0.639945 40.7195 1.77905C41.8587 2.91816 42.4986 4.46313 42.4986 6.07407C42.4986 14.1288 45.6983 21.8536 51.3939 27.5492C57.0894 33.2447 64.8142 36.4444 72.869 36.4444H109.313C113.302 36.4444 117.251 35.6589 120.936 34.1326C124.62 32.6064 127.968 30.3693 130.789 27.5492C133.609 24.729 135.846 21.381 137.372 17.6963C138.898 14.0116 139.684 10.0624 139.684 6.07407C139.684 4.46313 140.324 2.91816 141.463 1.77905C142.602 0.639945 144.147 0 145.758 0C147.369 0 148.914 0.639945 150.053 1.77905C151.192 2.91816 151.832 4.46313 151.832 6.07407C151.834 11.7346 150.702 17.3382 148.504 22.5543C146.305 27.7704 143.084 32.4933 139.031 36.4444H140.276C150.098 36.4629 159.612 39.8735 167.209 46.0994C174.806 52.3252 180.019 60.984 181.967 70.6111C182.312 72.3535 182.266 74.1507 181.833 75.8732C181.399 77.5957 180.59 79.2007 179.461 80.5726ZM36.4245 72.8889V66.8148C36.4135 60.2418 38.546 53.8444 42.4986 48.5926H41.8912C34.8933 48.604 28.113 51.0263 22.692 55.4516C17.271 59.8769 13.5404 66.0349 12.1282 72.8889H36.4245ZM145.758 133.63C145.758 128.797 143.838 124.162 140.421 120.745C137.003 117.327 132.368 115.407 127.536 115.407H54.6467C49.8139 115.407 45.179 117.327 41.7617 120.745C38.3444 124.162 36.4245 128.797 36.4245 133.63C36.4245 138.462 38.3444 143.097 41.7617 146.515C45.179 149.932 49.8139 151.852 54.6467 151.852H127.536C132.368 151.852 137.003 149.932 140.421 146.515C143.838 143.097 145.758 138.462 145.758 133.63ZM133.61 103.867V66.8148C133.61 61.982 131.69 57.3471 128.273 53.9298C124.855 50.5124 120.22 48.5926 115.387 48.5926H66.7949C61.9621 48.5926 57.3272 50.5124 53.9098 53.9298C50.4925 57.3471 48.5727 61.982 48.5727 66.8148V103.867C50.5723 103.464 52.6069 103.26 54.6467 103.259H127.536C129.575 103.26 131.61 103.464 133.61 103.867ZM170.054 72.8889C168.643 66.0343 164.913 59.8754 159.492 55.4499C154.07 51.0243 147.289 48.6026 140.291 48.5926H139.684C143.636 53.8444 145.769 60.2418 145.758 66.8148V72.8889H170.054Z"
                                fill="#157D75" />
                        </svg>
                        <div class="flex flex-col gap-2">
                            <p class="text-green-normal text-center text-xl lg:text-2xl font-poppins font-medium">
                                Sapi Pembibitan
                            </p>
                            <p class="text-green-normal text-center text-md lg:text-xl font-poppins font-medium">
                                75 ekor (Kapasitas kandang)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection