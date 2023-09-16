<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Home</title>
</head>

<body>
    <div class="mx-auto antialiased">
        <!-- Main navigation container -->
        <nav
            class="sticky top-0 mt-2 flex-no-wrap flex w-full items-center justify-between backdrop-blur  lg:flex-wrap lg:justify-start lg:py-4">
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <!-- Hamburger button for mobile view -->
                <button
                    class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                    type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="[&>svg]:w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                            <path fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <!-- Collapsible navigation container -->
                <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                    id="navbarSupportedContent1" data-te-collapse-item>
                    <!-- Logo -->
                    <a class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                        href="#">
                        <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px"
                            alt="TE Logo" loading="lazy" />
                    </a>
                    <!-- Left navigation links -->
                    <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <!-- Dashboard link -->
                            <a class="text-white-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 "
                                href="#" onclick="scrollToDestinasi()" id="nav-destinasi"
                                data-te-nav-link-ref>Destinasi</a>
                        </li>
                        <!-- Team link -->
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 "
                                href="#" onclick="scrollToHarga()" id="nav-harga" data-te-nav-link-ref>Harga</a>
                        </li>
                        <!-- Projects link -->
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 "
                                href="#" onclick="scrollToKontak()" id="nav-kontak"
                                data-te-nav-link-ref>Kontak</a>
                        </li>
                    </ul>
                </div>

                <!-- Right elements -->
                <div class="relative flex items-center">
                </div>
            </div>
        </nav>
        <!-- Hero section with background image, heading, subheading and button -->
        <div class="relative overflow-hidden bg-cover bg-no-repeat"
            style="background-position: 50%;background-image: url('{{ asset('image/bg-hero.jpg') }}');height: 550px;">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.75)">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mb-6 text-5xl font-bold">Dari Tempat Biasa Menjadi Tempat Luar Biasa</h1>
                        <h3 class="mb-8 text-3xl font-bold">Percayakan Perjalanan Anda pada Ahli Perjalanan Terbaik</h3>
                        <button type="button"
                            class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">
                            Mulai Petualangan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content --}}
        <div class="container mx-auto min-h-screen">
            <div class="grid grid-cols-12 border-b-2">
                <div class="col-span-12 lg:col-span-7">
                    <div class="flex justify-center pt-20 pb-24" id="destinasi">
                        <h1 class="uppercase text-4xl">Destinasi Unggulan Kami</h1>
                    </div>
                    <div class="grid-cols-1 sm:grid md:grid-cols-3 pb-4">
                        <div
                            class="mx-3 mt-6 transition duration-300 ease-in-out hover:scale-110 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                            <a href="#!">
                                <img class="rounded-t-lg " src="{{ asset('image/bandung.jpg') }}" alt="Skyscrapers" />
                            </a>
                            <div class="p-6">
                                <h5
                                    class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    Bandung
                                </h5>
                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                    Jelajahi pesona Kota Bandung dan nikmati petualangan yang tak terlupakan.
                                    Kami akan membantu Anda merencanakan perjalanan yang luar biasa di Bandung!
                                    Segera mulailah petualangan Anda!
                                </p>
                            </div>
                            <div
                                class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                                <small>Last updated 3 mins ago</small>
                            </div>
                            <div class="flex justify-center pb-4">
                                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                        <div
                            class="mx-3 mt-6 transition duration-300 ease-in-out hover:scale-110 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                            <a href="#!">
                                <img class="rounded-t-lg " src="{{ asset('image/bali.jpg') }}"
                                    alt="Los Angeles Skyscrapers" />
                            </a>
                            <div class="p-6">
                                <h5
                                    class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    Bali
                                </h5>
                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                    Jelajahi keindahan Pulau Bali dan nikmati petualangan yang tak terlupakan.
                                    Kami akan membantu Anda merencanakan perjalanan yang luar biasa di Bali!
                                    Segera mulailah petualangan Anda!
                                </p>
                            </div>
                            <div
                                class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                                <small>Last updated 3 mins ago</small>
                            </div>
                            <div class="flex justify-center pb-4">
                                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                        <div
                            class="mx-3 mt-6 transition duration-300 ease-in-out hover:scale-110 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                            <a href="#!">
                                <img class="rounded-t-lg " src="{{ asset('image/yogyakarta.jpg') }}"
                                    alt="Palm Springs Road" />
                            </a>
                            <div class="p-6">
                                <h5
                                    class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    Yogyakarta
                                </h5>
                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                    Jelajahi keindahan Kota Yogyakarta dan nikmati petualangan yang tak terlupakan.
                                    Kami akan membantu Anda merencanakan perjalanan yang luar biasa di Yogyakarta!
                                    Segera mulailah petualangan Anda!
                                </p>
                            </div>
                            <div
                                class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center dark:border-neutral-600 dark:text-neutral-50">
                                <small>Last updated 3 mins ago</small>
                            </div>
                            <div class="flex justify-center pb-4">
                                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 pb-4">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            Lihat Semua
                        </button>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <div class="flex justify-center pt-20">
                        <h1 class="uppercase text-4xl">Binggung Pilih Tujuan Wisatamu?</h1>
                    </div>
                    <img src="{{ asset('image/holiday2.svg') }}" class="" alt="">
                    <div class="flex justify-center pt-20">
                        <span class="text-2xl">Jangan Khawatir, Langsung Saja Klik Kontak! Kami Siap Membantu
                            Anda</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center pt-20 pb-28" id="harga">
                <h1 class="uppercase text-4xl">Harga</h1>
            </div>
            <div class="grid-cols-1 sm:grid md:grid-cols-3">
                <div
                    class="mx-3 block rounded-lg bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                        Paket Perjalanan Silver
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Destinasi Impian
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            Jelajahi keindahan destinasi impian Anda dengan paket perjalanan Silver.
                            Nikmati petualangan yang tak terlupakan bersama kami.
                        </p>
                        <span class="mb-4 text-3xl font-semibold leading-normal text-primary">
                            Mulai dari Rp 1.000.000
                        </span>
                        <ul class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <li>Transportasi pul Hinisn</li>
                            <li>Akomodasi bintang 4 selama 7 malam</li>
                            <li>Wisata sepanjang perjalanan</li>
                            <li>Guide pribadi</li>
                            <li>Makanan dan minuman</li>
                        </ul>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:scale-110 hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
                <div
                    class="mx-3 block rounded-lg bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                        Paket Perjalanan Gold
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Destinasi Impian
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            Jelajahi keindahan destinasi impian Anda dengan paket perjalanan Gold.
                            Nikmati petualangan yang tak terlupakan bersama kami.
                        </p>
                        <span class="mb-4 text-3xl font-semibold leading-normal text-primary">
                            Mulai dari Rp 2.000.000
                        </span>
                        <ul class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <li>Transportasi pul Hinisn</li>
                            <li>Akomodasi bintang 5 selama 10 malam</li>
                            <li>Wisata eksklusif</li>
                            <li>Guide pribadi</li>
                            <li>Makanan dan minuman</li>
                        </ul>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:scale-110 hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
                <div
                    class="mx-3 block rounded-lg bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                        Paket Perjalanan Platinum
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Destinasi Impian
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            Jelajahi keindahan destinasi impian Anda dengan paket perjalanan Platinum.
                            Nikmati petualangan yang tak terlupakan bersama kami.
                        </p>
                        <span class="mb-4 text-3xl font-semibold leading-normal text-primary">
                            Mulai dari Rp 3.000.000
                        </span>
                        <ul class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <li>Transportasi pul Hinisn</li>
                            <li>Akomodasi bintang 5 selama 14 malam</li>
                            <li>Wisata eksklusif dan mewah</li>
                            <li>Guide pribadi</li>
                            <li>Makanan dan minuman premium</li>
                        </ul>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:scale-110 hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <div class="pt-10 pb-10">
                <section class="text-neutral-700 dark:text-neutral-300">
                    <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
                        <h3 class="mb-6 text-3xl font-bold">Testimonials</h3>
                        <p class="mb-6 pb-2 md:mb-12 md:pb-0">
                            Dengarkan apa yang dikatakan oleh klien kami tentang pengalaman mereka bersama kami.
                        </p>
                    </div>

                    <!--First Testimonial-->
                    <div class="grid gap-6 text-center md:grid-cols-3">
                        <div>
                            <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                                <div class="h-28 overflow-hidden rounded-t-lg bg-[#9d789b]"></div>
                                <div
                                    class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
                                </div>
                                <div class="p-6">
                                    <h4 class="mb-4 text-2xl font-semibold">Maria Smantha</h4>
                                    <hr />
                                    <p class="mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                            <path
                                                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                        </svg>
                                        Saya sangat senang dengan perjalanan yang luar biasa ini! Destinasi yang
                                        indah,
                                        pemandu wisata yang ramah, dan akomodasi yang nyaman membuat pengalaman saya
                                        tak
                                        terlupakan. Terima kasih atas layanan yang luar biasa!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Second Testimonial-->
                        <div>
                            <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                                <div class="h-28 overflow-hidden rounded-t-lg bg-[#7a81a8]"></div>
                                <div
                                    class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
                                </div>
                                <div class="p-6">
                                    <h4 class="mb-4 text-2xl font-semibold">Lisa Cudrow</h4>
                                    <hr />
                                    <p class="mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                            <path
                                                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                        </svg>
                                        Saya sangat terkesan dengan layanan perjalanan ini. Semua detail telah
                                        diatur
                                        dengan baik, dan pemandu wisata kami sangat berpengetahuan dan ramah. Ini
                                        adalah
                                        pengalaman perjalanan yang luar biasa!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Third Testimonial-->
                        <div>
                            <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                                <div class="h-28 overflow-hidden rounded-t-lg bg-[#6d5b98]"></div>
                                <div
                                    class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
                                </div>
                                <div class="p-6">
                                    <h4 class="mb-4 text-2xl font-semibold">John Smith</h4>
                                    <hr />
                                    <p class="mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                            <path
                                                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                        </svg>
                                        Perjalanan ini adalah pengalaman seumur hidup! Destinasi yang menakjubkan,
                                        makanan yang lezat, dan pemandu wisata yang berpengetahuan. Saya sangat
                                        merekomendasikan perusahaan ini kepada semua orang yang ingin menjelajahi
                                        dunia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <span class="flex justify-center pt-10 pb-10 font-bold text-4xl">Butuh Bantuan?</span>
            <div class="grid grid-cols-12" id="kontak">
                <div class="col-span-12 lg:col-span-7 flex flex-col justify-center items-center ">
                    <h2 class="text-3xl font-semibold mb-4">Hubungi Kami Sekarang</h2>
                    <div class="px-8 py-6 border rounded-lg shadow-lg w-full">
                        <form action="">
                            <div class="mb-4">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda"
                                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email"
                                    placeholder="Masukkan Email Anda"
                                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                            </div>
                            <div class="mb-4">
                                <label for="pesan" class="block text-sm font-medium text-gray-700">Masukkan
                                    Pesan</label>
                                <textarea name="pesan" id="pesan" cols="30" rows="5"
                                    class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"></textarea>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Kirim</button>
                        </form>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <img src="{{ asset('image/contactus.jpg') }}" alt="Kontak Kami" class="w-full h-auto">
                </div>
            </div>
        </div>
        <!-- Footer container -->
        <footer
            class="bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left pt-10 ">
            <div
                class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
                <div class="mr-12 hidden lg:block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Social network icons container -->
                <div class="flex justify-center">
                    <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                                fill-rule="evenodd" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                    <a href="#!" class="text-neutral-600 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
            <div class="mx-6 py-10 text-center md:text-left">
                <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <!-- Tailwind Elements section -->
                    <div class="">
                        <h6 class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-4 w-4">
                                <path
                                    d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                            </svg>
                            Travelin Aja Yuk
                        </h6>
                        <p>
                            Penyedia jasa travel murah dan terpercaya di indonesia
                        </p>
                    </div>
                    <!-- Products section -->
                    <div class="">
                        <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                            Wisata
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-neutral-600 dark:text-neutral-200">Pantai</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-neutral-600 dark:text-neutral-200">Gunung</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-neutral-600 dark:text-neutral-200">Kota</a>
                        </p>
                    </div>
                    <!-- Contact section -->
                    <div>
                        <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                            Contact
                        </h6>
                        <p class="mb-4 flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>
                            Yogyakarta, Kota Gede, 2023
                        </p>
                        <p class="mb-4 flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                            info@example.com
                        </p>
                        <p class="mb-4 flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            + 01 234 567 88
                        </p>
                        <p class="flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                    clip-rule="evenodd" />
                            </svg>
                            + 01 234 567 89
                        </p>
                    </div>
                </div>
            </div>

            <!--Copyright section-->
            <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700">
                <span>© 2023 Copyright:</span>
                <a class="font-semibold text-neutral-600 dark:text-neutral-400"
                    href="https://tailwind-elements.com/">Tailwind Elements</a>
            </div>
        </footer>
    </div>




    <script>
        function scrollToDestinasi() {
            const destinasiElement = document.getElementById("destinasi");
            destinasiElement.scrollIntoView({
                behavior: "smooth"
            });
        }

        function scrollToHarga() {
            const hargaElement = document.getElementById("harga");
            hargaElement.scrollIntoView({
                behavior: "smooth"
            });
        }

        function scrollToKontak() {
            const kontakElement = document.getElementById("kontak");
            kontakElement.scrollIntoView({
                behavior: "smooth"
            })
        }
    </script>
</body>

</html>
