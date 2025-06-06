@extends('app')

@section('content')
    <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 mx-auto w-full md:p-0 px-10 md:mt-24 mt-16 ">
        <div class="box mt-2">
            <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 content-stretch" alt="...">
                        <div class="hidden absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent md:flex items-end">
                            <div class="text-center text-white pb-12 w-full">
                                <a href="#" class="text-base md:text-xl font-bold">Adipisicing quis voluptate dolore proident ut et tempor fugiat enim est ad elit.</a>
                                <p class="text-sm md:text-base">This is the description for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('images/irwan-rbDE93-0hHs-unsplash.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 content-stretch" alt="...">
                        <div class="hidden absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent md:flex items-end">
                            <div class="text-center text-white pb-12 w-full">
                                <a href="#" class="text-base md:text-xl font-bold">Nulla aliquip irure labore Lorem reprehenderit dolor consectetur voluptate.</a>
                                <p class="text-sm md:text-base">This is the description for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('images/marcel-scholte-LPurJnihmQI-unsplash.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 content-stretch" alt="...">
                        <div class="hidden absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent md:flex items-end">
                            <div class="text-center text-white pb-12 w-full">
                                <a href="#" class="text-base md:text-xl font-bold">Qui incididunt aute non mollit ea consectetur occaecat veniam ad sit id.</a>
                                <p class="text-sm md:text-base">This is the description for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('images/adhy-savala-zbpgmGe27p8-unsplash.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 content-stretch" alt="...">
                        <div class="hidden absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent md:flex items-end">
                            <div class="text-center text-white pb-12 w-full">
                                <a href="#" class="text-base md:text-xl font-bold">Qui incididunt aute non mollit ea consectetur occaecat veniam ad sit id.</a>
                                <p class="text-sm md:text-base">This is the description for the first slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse md:bottom-5 bottom-8 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>


        </div>
        <div class="box -mt-8">
            <div class="w-full p-4 sm:p-8">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Artikel Terbaru</h5>
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Lihat Semua <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="dark:bg-gray-800 bg-green-200 p-7 rounded-xl">
                    <ul role="list" class="divide-y divide-green-400 dark:divide-gray-700">
                        <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2 sm:py-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-sm" src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Penyakit Kandungan dan Kebidanan
                                    </p>
                                    <a href="#" class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900">
                                        Nulla elit magna incididunt aliqua irure eu.
                                    </a>
                                    <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                        <i class="ri-calendar-line"></i> 08 Januari 2025, <i class="ri-user-line"></i> Author
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto md:p-0 px-6 w-full">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-extrabold text-green-600 dark:text-green-400">Semua Artikel</h1>
            <div class="flex gap-2">
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="cursor-pointer bg-green-100 hover:bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400 inline-flex items-center justify-center">Badge link</span>
                <span class="text-medium font-medium text-green-600 dark:text-green-400 hover:text-green-900"><i class="ri-filter-line"></i></span>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 gap-8 justify-center py-6">
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/irwan-rbDE93-0hHs-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/nguy-n-hi-p-2rNHliX6XHk-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/levi-meir-clancy-bxyV1SfGMFU-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/stephen-andrews-GwgFPDXiSIs-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/boitumelo-6SZYEy4b5d0-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/marcel-scholte-LPurJnihmQI-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>
            <div class="shadow-md rounded-xl outline outline-1 outline-gray-300 dark:outline-gray-600 transition-transform duration-200 hover:scale-105 hover:shadow-xl">
                <div class="card-image">
                    <a href="#">
                        <img src="{{ asset('images/adhy-savala-zbpgmGe27p8-unsplash.jpg') }}" alt="" class="w-full h-[200px] rounded-t-xl object-cover">
                    </a>
                </div>
                <div class="card-content p-6">
                    <div class="card-title">
                        <p class="text-2xl font-bold text-green-600 dark:text-green-400 mb-2 hover:text-green-900">
                            <a href="#">Nulla elit magna incididunt aliqua irure eu.</a>
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500"><i class="ri-calendar-line"></i> 08 Januari 2025 <i class="ri-user-line"></i> Author</p>
                    </div>
                    <div class="card-body mt-3">
                        <p class="text-sm text-gray-500 dark:text-white text-justify mb-3">
                            Nisi aute dolore eu ad cupidatat esse dolore minim ad anim qui excepteur. Sit voluptate aute velit nulla commodo. Ipsum reprehenderit et in tempor enim in amet ut do. Occaecat sunt ut sunt anim laboris ad incididunt. Amet voluptate tempor nulla aute. Irure mollit ad eiusmod ullamco irure.
                        </p>
                        <a href="#" class="text-sm font-medium text-white dark:text-gray-100 px-3 py-2 bg-green-700 hover:bg-green-900 rounded-lg ">Lanjutkan Membaca <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="container mx-auto flex justify-center w-full p-6 items-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

@push('scripts')
@endpush
