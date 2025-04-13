@extends('layout.main')

@section('content')
    <!-- Hero -->
    <section id="hero">
        <div class="bg-cover bg-center h-screen relative" style="background-image: url('image/IMG_2597.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
                <h1 class="text-white px-4 text-2xl lg:text-md sm:text-lg md:text-3xl lg:text-5xl font-bold mb-2">Ananta Farm
                </h1>
            </div>
        </div>
    </section>

    <!-- Know About Us -->
    <section class="px-4 lg:px-40 py-20 bg-white">
        <div class="mx-auto flex flex-col gap-24 items-center justify-center">
            <div class="flex gap-12 justify-center">
                {{-- <img src="" alt=""> --}}
                <div class="bg-gray-400 w-1/3 h-80"></div>
                <div class="flex flex-col w-1/2 gap-8">
                    <h3 class="text-green-normal text-xl lg:text-3xl font-bold">Mengapa Staycation?
                    </h3>

                    <p class="text-green-normal text-justifty text-md lg:text-xl font-medium">
                        Namanya Staycation! Kita bakal liburan sambil belajar tentang peternakan secara langsung, tapi
                        dengan cara yang beda! Kita bakal gabungin teori di mess dan praktik di lapangan dengan asyik!
                        Apalagi suasana meriah di mess yang bikin gamon, aduh!
                    </p>

                </div>
            </div>
            <div class="flex gap-12 justify-center">

                <div class="flex flex-col w-1/2 gap-8">
                    <h3 class="text-green-normal text-xl lg:text-3xl font-bold">Kok Staycation?
                    </h3>
                    <p class="text-green-normal text-justifty text-md lg:text-xl font-medium">
                        "Staycation" bukan cuma soal kerja setiap hari, tapi juga kesempatan untuk mengenal lingkungan
                        peternakan dan belajar hal baru dengan cara yang asyik dan berbeda. Selain mengasah keterampilan
                        teknis, kamu juga bisa meningkatkan kemampuan komunikasi dan kerja sama. Tenang saja, kamu nggak
                        akan belajar sendirian! Kamu bisa berbagi pengalaman dan belajar bareng teman-teman yang ikut
                        Staycation juga.

                        Lewat kegiatan ini, kamu bisa mendapatkan pengalaman berharga langsung dari peternak berpengalaman.
                        Kamu bebas bertanya, mencoba sendiri, dan memahami tantangan nyata yang mereka hadapi. Jangan sampai
                        kelewatan, ya! Kegiatan ini juga bisa jadi nilai tambah untuk CV kamu saat mencari kerja nanti.
                        Dengan mengikuti Staycation, kamu bisa menunjukkan bahwa kamu sudah punya pengalaman langsung di
                        dunia peternakan dan memahami industri ini dengan lebih baik.
                    </p>
                </div>
                {{-- <img src="" alt=""> --}}
                <div class="bg-gray-400 w-1/3 h-80"></div>
            </div>

            <div class="flex flex-col gap-8 justify-center">
                <h3 class="text-green-normal text-xl lg:text-3xl font-bold text-center">Testimoni</h3>
                <div class="flex flex-col lg:flex-row gap-6">
                    <div class="flex flex-col gap-4 bg-white drop-shadow-lg px-6 py-8 rounded-lg">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/image/avatar-biru.jpg') }}" class="w-12 h-12 rounded-full">
                                <div class="flex flex-col">
                                    <p class="font-semibold text-lg">Mochamad Tegar Santoso</p>
                                    <p>IPB / NTP 57 / Mini-Staycation#3.5</p>
                                </div>
                            </div>
                            <x-bi-quote />
                        </div>
                        <p class="text-md">
                            Staycation itu dari awal udh bikin excited banget! dan tempatnya cocok buat healing! Temennya
                            jugaseru-seruu, apalagi Vani & Trili yg moodmaker banget.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 bg-white drop-shadow-lg px-6 py-8 rounded-lg">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/image/avatar-biru.jpg') }}" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col">
                                <p class="font-semibold text-lg">Mochamad Tegar Santoso</p>
                                <p>IPB / NTP 57 / Mini-Staycation#3.5</p>
                            </div>
                        </div>
                        <p class="text-md">
                            Staycation itu dari awal udh bikin excited banget! dan tempatnya cocok buat healing! Temennya
                            jugaseru-seruu, apalagi Vani & Trili yg moodmaker banget.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 bg-white drop-shadow-lg px-6 py-8 rounded-lg">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/image/avatar-biru.jpg') }}" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col">
                                <p class="font-semibold text-lg">Mochamad Tegar Santoso</p>
                                <p>IPB / NTP 57 / Mini-Staycation#3.5</p>
                            </div>
                        </div>
                        <p class="text-md">
                            Staycation itu dari awal udh bikin excited banget! dan tempatnya cocok buat healing! Temennya
                            jugaseru-seruu, apalagi Vani & Trili yg moodmaker banget.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-8 justify-center">
                <h3 class="text-green-normal text-xl lg:text-3xl font-bold text-center">Waktu Staycation</h3>
                <div class="flex flex-col gap-6">
                    <div class="grid grid-cols-4 grid-rows-3 lg:grid-cols-6 lg:grid-rows-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">JAN</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">FEB</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">MAR</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">APR</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">MEI</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">JUN</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">JUL</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">AGU</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">SEP</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">OKT</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">NOV</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="bg-[#FD5E5E] p-4">
                                <p class="text-md sm:text-lg md:text-3xl lg:text-5xl text-white text-center">DES</p>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-full h-1"></div>
                                <div class="bg-black text-black w-6/8 h-1"></div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="flex gap-4 items-center">
                    <div class="flex bg-[#FD5E5E] w-8 h-8"></div>
                    <p class="text-green-normal font-semibold text-lg">Waktu Staycation</p>
                </div>
                <div class="flex gap-4 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 lg:w-12" viewBox="0 0 47 47"
                        fill="none">
                        <path
                            d="M23.5 0C36.479 0 47 10.521 47 23.5C47 36.479 36.479 47 23.5 47C10.521 47 0 36.479 0 23.5C0 10.521 10.521 0 23.5 0ZM23.5 4.7C18.5139 4.7 13.7321 6.68071 10.2064 10.2064C6.68071 13.7321 4.7 18.5139 4.7 23.5C4.7 28.4861 6.68071 33.2679 10.2064 36.7936C13.7321 40.3193 18.5139 42.3 23.5 42.3C28.4861 42.3 33.2679 40.3193 36.7936 36.7936C40.3193 33.2679 42.3 28.4861 42.3 23.5C42.3 18.5139 40.3193 13.7321 36.7936 10.2064C33.2679 6.68071 28.4861 4.7 23.5 4.7ZM19.1948 31.5957C22.0171 27.3634 27.6783 24.4705 33.471 25.9205C33.775 25.991 34.0618 26.1213 34.3149 26.3038C34.5679 26.4863 34.7821 26.7173 34.9449 26.9835C35.1077 27.2496 35.2159 27.5455 35.2631 27.8539C35.3104 28.1623 35.2958 28.477 35.2201 28.7797C35.1444 29.0824 35.0092 29.367 34.8224 29.6169C34.6356 29.8668 34.4009 30.0769 34.132 30.2352C33.8631 30.3934 33.5654 30.4965 33.2562 30.5384C32.9471 30.5804 32.6326 30.5603 32.3313 30.4795C28.724 29.5771 24.9828 31.3866 23.1052 34.2042C22.7593 34.7228 22.2216 35.0827 21.6103 35.2048C20.999 35.3269 20.3643 35.2011 19.8457 34.8552C19.3272 34.5093 18.9673 33.9716 18.8452 33.3603C18.7231 32.749 18.8489 32.1143 19.1948 31.5957ZM17.625 14.1C18.5599 14.1 19.4565 14.4714 20.1176 15.1324C20.7786 15.7935 21.15 16.6901 21.15 17.625C21.15 18.5599 20.7786 19.4565 20.1176 20.1176C19.4565 20.7786 18.5599 21.15 17.625 21.15C16.6901 21.15 15.7935 20.7786 15.1324 20.1176C14.4714 19.4565 14.1 18.5599 14.1 17.625C14.1 16.6901 14.4714 15.7935 15.1324 15.1324C15.7935 14.4714 16.6901 14.1 17.625 14.1ZM31.725 11.75C32.6599 11.75 33.5565 12.1214 34.2175 12.7824C34.8786 13.4435 35.25 14.3401 35.25 15.275C35.25 16.2099 34.8786 17.1065 34.2175 17.7676C33.5565 18.4286 32.6599 18.8 31.725 18.8C30.7901 18.8 29.8935 18.4286 29.2324 17.7676C28.5714 17.1065 28.2 16.2099 28.2 15.275C28.2 14.3401 28.5714 13.4435 29.2324 12.7824C29.8935 12.1214 30.7901 11.75 31.725 11.75Z"
                            fill="#157D75" />
                    </svg>
                    <p class="text-green-normal text-sm lg:text-lg font-semibold">
                        Eh maksudnya gimana? kok merah semua
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-8 items-center bg-green-normal p-8 lg:p-20 rounded-3xl w-full lg:w-3/4">
                <div class="flex flex-col gap-16">
                    <div class="flex gap-8 items-center">
                        <div
                            class="text-[96px] font-bold text-white bg-[#22ccbf] w-1/4 aspect-square flex justify-center items-center rounded-full">
                            2
                        </div>
                        <div class="flex flex-col gap-8 w-3/4">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-white text-xl lg:text-4xl font-bold">2x Setahun!</h3>
                                <p
                                    class="text-white text-md lg:text-xl font-medium bg-[#22ccbf] px-4 py-2 rounded-full w-fit">
                                    Staycation Pas Kamu Liburan!
                                </p>
                            </div>
                            <p class="text-white text-justify text-sm lg:text-md">
                                Kegiatan ini diadakan oleh Ananta Farm,
                                untuk Kamu yang mau belajar sambil ngisi
                                waktu liburan yang panjang! Biasanya
                                diadakan disaat liburan semester yaa!
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-8 items-center">
                        <div
                            class="text-[96px] font-bold text-white bg-[#22ccbf] w-1/4 aspect-square flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="70" viewBox="0 0 75 70"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 0V10H0V15H5V70H10V15H30V25H22.5C21.837 25 21.2011 25.2634 20.7322 25.7322C20.2634 26.2011 20 26.837 20 27.5V57.5C20 58.163 20.2634 58.7989 20.7322 59.2678C21.2011 59.7366 21.837 60 22.5 60H72.5C73.163 60 73.7989 59.7366 74.2678 59.2678C74.7366 58.7989 75 58.163 75 57.5V27.5C75 26.837 74.7366 26.2011 74.2678 25.7322C73.7989 25.2634 73.163 25 72.5 25H65V15H75V10H10V0H5ZM35 25V15H60V25H35Z"
                                    fill="url(#paint0_linear_3136_227)" />
                                <defs>
                                    <linearGradient id="paint0_linear_3136_227" x1="37.5" y1="10.3333"
                                        x2="67.5128" y2="34.4005" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="#EAEAEA" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-8 w-3/4">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-white text-xl lg:text-4xl font-bold">Kerjasama Yuk!</h3>
                                <p
                                    class="text-white text-md lg:text-xl font-medium bg-[#22ccbf] px-4 py-2 rounded-full w-fit">
                                    PKL atau Himpunan? Bisa!
                                </p>
                            </div>
                            <p class="text-white text-justify text-sm lg:text-md">
                                Kamu yang mau magang tapi nggak monoton, yuk ajukan Ananta Farm sebagai tempat magangmu!
                                Biar semua tahu, kamu magang di tempat terbaik!
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div
                            class="text-[96px] font-bold text-white bg-[#22ccbf] w-1/4 aspect-square flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="58" height="65" viewBox="0 0 58 65"
                                fill="none">
                                <path
                                    d="M3 55.4444V9.55556C3 7.81691 3.69067 6.14948 4.92008 4.92008C6.14948 3.69067 7.81691 3 9.55556 3H53.4778C53.9994 3 54.4996 3.2072 54.8684 3.57602C55.2372 3.94484 55.4444 4.44507 55.4444 4.96667V47.9514M9.55556 48.8889H55.4444M9.55556 62H55.4444"
                                    stroke="url(#paint0_linear_3136_241)" stroke-width="4.91667"
                                    stroke-linecap="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_3136_241" x1="29.2222" y1="11.7095"
                                        x2="53.125" y2="27.6115" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="#EAEAEA" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-8 w-3/4">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-white text-xl lg:text-4xl font-bold">Penelitian? Boleh!</h3>
                                <p
                                    class="text-white text-md lg:text-xl font-medium bg-[#22ccbf] px-4 py-2 rounded-full w-fit">
                                    MBKM Juga Boleh!
                                </p>
                            </div>
                            <p class="text-white text-justify text-sm lg:text-md">
                                Kamu takut penelitian nanti boros? Coba ajukan saja Ananta Farm sebagai tempat penelitianmu!
                                Bisa gratis, lho! Ananta Farm masih menantimu!
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div
                            class="text-[96px] font-bold text-white bg-[#22ccbf] w-1/4 aspect-square flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="66" viewBox="0 0 65 66"
                                fill="none">
                                <path
                                    d="M0 23.5C0 17.3705 -1.93715e-07 14.309 1.9045 12.4045C3.809 10.5 6.8705 10.5 13 10.5H52C58.1295 10.5 61.191 10.5 63.0955 12.4045C65 14.309 65 17.3705 65 23.5C65 25.0307 65 25.7977 64.5255 26.2755C64.0478 26.75 63.2775 26.75 61.75 26.75H3.25C1.71925 26.75 0.95225 26.75 0.4745 26.2755C-2.90573e-07 25.7977 0 25.0275 0 23.5ZM0 52.75C0 58.8795 -1.93715e-07 61.941 1.9045 63.8455C3.809 65.75 6.8705 65.75 13 65.75H52C58.1295 65.75 61.191 65.75 63.0955 63.8455C65 61.941 65 58.8795 65 52.75V36.5C65 34.9692 65 34.2022 64.5255 33.7245C64.0478 33.25 63.2775 33.25 61.75 33.25H3.25C1.71925 33.25 0.95225 33.25 0.4745 33.7245C-2.90573e-07 34.2022 0 34.9725 0 36.5V52.75Z"
                                    fill="url(#paint0_linear_3136_259)" />
                                <path d="M16.25 4V13.75V4ZM48.75 4V13.75V4Z" fill="url(#paint1_linear_3136_259)" />
                                <path d="M16.25 4V13.75M48.75 4V13.75" stroke="#157D75" stroke-width="6.5"
                                    stroke-linecap="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_3136_259" x1="32.5" y1="18.6559"
                                        x2="56.5732" y2="39.8527" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="#EAEAEA" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_3136_259" x1="32.5" y1="5.43929"
                                        x2="35.458" y2="12.8189" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="#EAEAEA" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-8 w-3/4">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-white text-xl lg:text-4xl font-bold">2-4 Minggu</h3>
                                <p
                                    class="text-white text-md lg:text-xl font-medium bg-[#22ccbf] px-4 py-2 rounded-full w-fit">
                                    Kegiatan Staycation
                                </p>
                            </div>
                            <p class="text-white text-justify text-sm lg:text-md">
                                Kegiatan Staycation berlangsung selama kurang lebih 2-4 minggu, yaa!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-8 justify-center items-center">
                <h3 class="text-green-normal text-xl lg:text-3xl font-bold text-center">Sudah tertarik magang di Ananta Farm?</h3>
                <a href="" class="bg-green-normal hover:bg-green-normal-hover text-white px-6 py-4 text-xl font-semibold rounded-xl w-fit">
                    Daftar Sekarang!
                </a>              
            </div>
        </div>
    </section>
@endsection
