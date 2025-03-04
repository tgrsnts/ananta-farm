@extends('layout.main')

@section('content')
    <!-- Hero -->
    <section id="hero">
        <div class="bg-cover bg-center h-screen relative" style="background-image: url('image/IMG_2597.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
                <h1 class="text-white px-4 text-2xl lg:text-5xl font-bold mb-2">Ananta Farm
                </h1>
            </div>
        </div>
    </section>

    <!-- Know About Us -->
    <section class="px-4 lg:px-40 py-20 bg-white">
        <div class="container mx-auto flex flex-col gap-5 items-center justify-center">
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

            <div class="flex flex-col gap-8 items-center bg-green-normal p-8 lg:p-20 rounded-3xl w-full lg:w-3/4">
                <div class="flex flex-col gap-16">
                    <div class="flex gap-8 items-center">
                        <div class="text-[96px] font-bold text-white bg-[#22ccbf] w-1/4 aspect-square flex justify-center items-center rounded-full">2
                        </div>
                        <div class="flex flex-col gap-8 w-3/4">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-white text-xl lg:text-4xl font-bold">2x Setahun!</h3>
                            <p
                                class="text-white text-md lg:text-xl font-medium bg-[#22ccbf] px-4 py-2 rounded-full w-fit">
                                Staycation Pas Kamu Liburan!
                            </p>
                            </div>
                            <p
                                class="text-white text-justify text-sm lg:text-md">
                                Kegiatan ini diadakan oleh Ananta Farm,
                                untuk Kamu yang mau belajar sambil ngisi
                                waktu liburan yang panjang! Biasanya
                                diadakan disaat liburan semester yaa!
                            </p>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </section>
@endsection
