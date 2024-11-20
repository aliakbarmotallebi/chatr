@extends('layouts.app')

@section('title', 'صفحه اصلی')

@section('content')
    <!-- start hero -->
    <section id="hero">
        <div class="swiper sw-hero">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <div
                        class="swiper-slide bg-gray-300 bg-[url('{{ $slide->image_url }}')] bg-center bg-cover bg-no-repeat">
                        <div class="content relative flex items-center justify-between lg:min-h-[450px] xl:min-h-[500px]">
                            <div
                                class="relative mx-auto max-w-screen-xl flex-1 px-4 py-8 text-center lg:py-16 lg:text-right">
                                <h1
                                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-primary md:text-5xl lg:text-6xl">
                                    {{ $slide->title }}
                                </h1>
                                <p class="mb-1 text-3xl font-bold text-primary">
                                    {{ $slide->subtitle }}
                                </p>
                                <p class="mb-8 text-3xl font-bold text-primary">
                                    {{ $slide->description }}
                                </p>
                                <div class="flex items-stretch justify-center gap-3 sm:gap-2 lg:justify-start">
                                    @if ($slide->button_link && $slide->button_text)
                                        <a href="{{ $slide->button_link }}"
                                            class="flex items-center justify-center rounded-full bg-primary/90 px-5 py-0.5 text-center text-base font-medium text-white outline-none transition-all duration-300 hover:bg-primary sm:py-1.5">
                                            <span>{{ $slide->button_text }}</span>
                                            <svg class="ms-2 w-3.5 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="absolute bottom-5 left-2 w-full">
                <div class="flex items-center gap-1">
                    <div class="swiper-pagination !static ml-auto flex w-full items-center justify-center"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero -->

    <!-- start main -->
    <main class="min-h-96">
        <section class="relative mt-8">
            <h2
                class="relative z-10 block p-2 text-center text-xl font-extrabold text-primary before:absolute before:left-0 before:top-1/2 before:-z-10 before:h-1 before:w-full before:-translate-y-1/2 before:bg-primary md:text-2xl lg:text-3xl xl:text-4xl">
                <span class="bg-slate-50 px-4">استعلام اصالت محصول</span>
            </h2>
            <div class="content mx-auto flex flex-col justify-center space-y-10">
                <form class="mx-auto flex max-w-lg flex-wrap items-center md:max-w-full md:flex-nowrap">
                    <div class="relative w-full">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-gray-900"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z">
                                </path>
                            </svg>
                        </div>
                        <input type="text"
                            class="block w-full rounded-full border-2 border-primary bg-gray-50 p-2 ps-10 text-sm text-gray-900 placeholder-gray-300 outline-none sm:min-w-80 md:p-4 md:ps-10 lg:min-w-80"
                            placeholder="شماره گارانتی خود را وارد کنید" required />
                    </div>
                    <button type="submit"
                        class="mt-4 w-full items-center whitespace-nowrap rounded-full border-2 border-primary p-2 text-center font-semibold text-primary transition-all duration-300 hover:bg-primary hover:text-white md:ms-2 md:mt-0 md:p-4">
                        استعلام اصالت کالا
                    </button>
                </form>
            </div>
        </section>
        <section>
            <div class="max-w-3xl mx-auto">
                <ul class="m-0 grid gap-12 list-none grid-cols-2 justify-center p-0 sm:grid-cols-4 relative px-4 lg:px-0">
                    <li class="h-20">
                        <a class="mx-auto flex w-full h-full" href="#"><img class="h-full object-cover w-full"
                                src="{{ asset('assets/images/brand-4.png') }}" /></a>
                    </li>
                    <li class="h-20">
                        <a class="mx-auto flex w-full h-full" href="#"><img class="h-full object-cover w-full"
                                src="{{ asset('assets/images/brand-3.png') }}" /></a>
                    </li>
                    <li class="h-20">
                        <a class="mx-auto flex w-full h-full" href="#"><img class="h-full object-cover w-full"
                                src="{{ asset('assets/images/brand-2.png') }}" /></a>
                    </li>
                    <li class="h-20">
                        <a class="mx-auto flex w-full h-full" href="#"><img class="h-full object-cover w-full"
                                src="{{ asset('assets/images/brand-1.png') }}" /></a>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div class="content mx-auto">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:gap-20">
                    <div x-data="{ run: false }"
                        class="relative before:absolute before:left-3 before:top-3 before:-z-10 before:h-full before:w-full before:bg-[#243E89] lg:h-80 xl:h-96 mr-4 lg:mr-0 lg:before:hidden group lg:overflow-hidden"
                        x-on:mouseover="run=true" x-on:mouseout="run=false">
                        <img class="h-full w-full lg:hidden" src="{{ asset('assets/images/back-pad-mobile.png') }}"
                            alt="لنت ترمز" />
                        <img class="h-full w-full hidden lg:block" src="{{ asset('assets/images/back-pad-1.png') }}"
                            alt="لنت ترمز" />
                        <img class="h-full w-full hidden lg:block absolute top-0 left-0 z-10"
                            src="{{ asset('assets/images/back-pad-2.png') }}" alt="لنت ترمز"
                            :class="run ? 'jump jump-to-right-animate' : ''" />
                        <img class="h-full w-full hidden lg:block absolute top-0 right-0 z-10"
                            src="{{ asset('assets/images/back-pad-3.png') }}" alt="لنت ترمز"
                            :class="run ? 'jump jump-to-left-animate' : ''" />
                        <a class="absolute left-0 top-0 h-full w-full z-20" href="./blog.html"></a>
                    </div>
                    <div x-data="{ run: false }"
                        class="relative before:absolute before:left-3 before:top-3 before:-z-10 before:h-full before:w-full before:bg-[#243E89] lg:h-80 xl:h-96 mr-4 sm:mr-0 lg:before:hidden group lg:overflow-hidden"
                        x-on:mouseover="run=true" x-on:mouseout="run=false">
                        <img class="h-full w-full lg:hidden" src="{{ asset('assets/images/front-pad-mobile.png') }}"
                            alt="لنت ترمز" />
                        <img class="h-full w-full hidden lg:block" src="{{ asset('assets/images/front-pad-1.png') }}"
                            alt="لنت ترمز" />
                        <img class="h-full w-full hidden lg:block absolute top-0 left-0 z-10"
                            src="{{ asset('assets/images/front-pad-2.png') }}" alt="لنت ترمز"
                            :class="run ? 'jump jump-to-right-animate' : ''" />
                        <img class="h-full w-full hidden lg:block absolute bottom-0 left-0 z-10"
                            src="{{ asset('assets/images/front-pad-3.png') }}" alt="لنت ترمز"
                            :class="run ? 'jump jump-to-bottom-animate' : ''" />
                        <a class="absolute left-0 top-0 h-full w-full z-20" href="./blog.html"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="content mx-auto">
                <h2 class="mb-2 flex items-center gap-1">
                    <div class="relative h-10 w-10 -translate-y-0.5">
                        <img class="h-full w-full" src="{{ asset('assets/images/icon-title-1.png') }}"
                            alt="آنچه درباره چتر باید بدانید" />
                    </div>
                    <span class="text-xl font-bold text-primary/90">آنچه درباره چتر باید بدانید!</span>
                </h2>
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 sm:grid-rows-3 lg:grid-cols-6 lg:grid-rows-2">
                    <div class="min-h-52 bg-primary sm:col-span-1 sm:row-span-2 lg:col-span-2 lg:row-span-2"> <img
                            class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1559752562-1513aa167782?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="آنچه درباره چتر باید بدانید"></div>
                    <div class="sm:col-span-1 sm:row-span-2 lg:col-span-4 lg:row-span-1">
                        <p class="mb-4 text-justify leading-7">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                            در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                            نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                            کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                            جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را
                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد.
                        </p>
                    </div>
                    <div class="sm:col-span-2 sm:row-span-1 lg:col-span-4 lg:row-span-1">
                        <p class="mb-4 text-justify leading-7">
                            در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                            راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                            طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <div class="flex justify-end">
                            <a href="./about-us.html" class="group flex items-center gap-1 font-semibold text-primary">
                                <span>ادامه مطلب</span><svg
                                    class="ms-2 w-3.5 transition-all duration-300 group-hover:-translate-x-2 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="content mx-auto">
                <div class="swiper sw-about-chatr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="relative col-span-2 min-h-60 bg-primary overflow-hidden">
                                <a class="absolute left-0 top-0 h-full w-full group" href="#"><img
                                        class="w-full h-full object-cover group-hover:scale-105 transition-all duration-200"
                                        src="https://images.unsplash.com/photo-1526324502790-ad8c7c6076df?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative col-span-2 min-h-60 bg-primary overflow-hidden">
                                <a class="absolute left-0 top-0 h-full w-full group" href="#"><img
                                        class="w-full h-full object-cover group-hover:scale-105 transition-all duration-200"
                                        src="https://images.unsplash.com/photo-1526324502790-ad8c7c6076df?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="relative col-span-2 min-h-60 bg-primary overflow-hidden">
                                <a class="absolute left-0 top-0 h-full w-full group" href="#"><img
                                        class="w-full h-full object-cover group-hover:scale-105 transition-all duration-200"
                                        src="https://images.unsplash.com/photo-1526324502790-ad8c7c6076df?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gradient-primary relative mt-10 min-h-96 bg-gradient-to-r"
            style="
            clip-path: polygon(
              50% 8%,
              54% 0,
              100% 0,
              100% 100%,
              0 100%,
              0 0,
              46% 0
            );
          ">
            <div class="absolute right-0 top-0 h-full w-full bg-gradient-to-br from-white/30 from-0% to-70%"
                style="
              clip-path: polygon(
                80% 0,
                100% 0,
                100% 60%,
                100% 100%,
                0 100%,
                0 73%
              );
            ">
            </div>
            <div
                class="content mx-auto grid grid-cols-1 items-start justify-center gap-4 py-16 lg:grid-cols-6 lg:items-center">
                <div class="relative order-2 col-span-1 lg:col-span-2 max-h-[400px] lg:order-1">
                    <div class="relative px-10 lg:px-0">
                        <!-- start thumbs slider-->
                        <div class="swiper sw-thumbs-video h-40 w-full lg:h-80">
                            <div class="swiper-wrapper">
                                @foreach ($videos as $video)
                                    <div class="swiper-slide group" role="group">
                                        <div
                                            class="relative inset-0 col-span-4 h-80 overflow-hidden rounded-3xl bg-white lg:h-96">
                                            <video preload="none" class="w-full h-full object-cover cursor-pointer"
                                                controls="" poster="{{ $video->image_url }}">
                                                <source class="w-full h-full" src="{{ $video->video_url }}"
                                                    type="video/mp4">
                                            </video>
                                            <button
                                                class="absolute left-1/2 top-1/2 z-10 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-primary lg:h-40 lg:w-40">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="rgba(255,255,255,1)" class="h-full w-full">
                                                    <path d="M16 12L10 18V6L16 12Z"></path>
                                                </svg>
                                            </button>
                                            <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full bg-neutral-200/95">
                                                <p
                                                    class="relative top-1/2 mr-10 -translate-y-1/2 border-r border-black pr-4 text-xl font-bold lg:text-3xl translate-x-full group-hover:translate-x-0 transition-all duration-300">
                                                    <span
                                                        class="block">{{ $video->name }}</span><span>{{ $video->title }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- end thumbs slider-->
                        <div
                            class="absolute left-0 top-1/2 z-0 flex w-full -translate-y-1/2 justify-between lg:left-1/2 lg:h-[120%] lg:w-auto lg:-translate-x-1/2 lg:flex-col">
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 fill-white lg:rotate-0"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M11.9999 10.8284L7.0502 15.7782L5.63599 14.364L11.9999 8L18.3639 14.364L16.9497 15.7782L11.9999 10.8284Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 fill-white lg:rotate-0"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-span-1 lg:order-2 lg:col-span-4">
                    <!-- start video slider-->
                    <div class="swiper sw-video w-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide group">
                                <div x-data="video" @click.outside="pauseVideo($refs.videoEl)"
                                    class="relative inset-0 col-span-4 h-80 overflow-hidden rounded-3xl bg-white lg:h-96">
                                    <video preload="none" x-ref="videoEl"
                                        class="w-full h-full object-cover cursor-pointer" controls
                                        poster="https://images.unsplash.com/photo-1519340241574-2cec6aef0c01?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                        <source class="w-full h-full" src="./assets/12428462_1920_1080_30fps.mp4"
                                            type="video/mp4">
                                    </video>
                                    <button x-show="!play" @click="toggleVideo($refs.videoEl)"
                                        class="absolute left-1/2 top-1/2 z-10 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-primary lg:h-40 lg:w-40">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="rgba(255,255,255,1)" class="h-full w-full">
                                            <path d="M16 12L10 18V6L16 12Z"></path>
                                        </svg>
                                    </button>
                                    <div x-show="!play"
                                        class="absolute bottom-0 left-0 z-0 h-1/3 w-full bg-neutral-200/95">
                                        <p
                                            class="relative top-1/2 mr-10 -translate-y-1/2 border-r border-black pr-4 text-xl font-bold lg:text-3xl translate-x-full group-hover:translate-x-0 transition-all duration-300">
                                            <span class="block">نام فرد</span><span>سمت اجرایی یا مدیریتی فرد</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group">
                                <div x-data="video" @click.outside="pauseVideo($refs.videoEl)"
                                    class="relative inset-0 col-span-4 h-80 overflow-hidden rounded-3xl bg-white lg:h-96">
                                    <video preload="none" x-ref="videoEl"
                                        class="w-full h-full object-cover cursor-pointer" controls
                                        poster="https://images.unsplash.com/photo-1517414204284-fb7e98b2e255?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                        <source class="w-full h-full" src="./assets/12428462_1920_1080_30fps.mp4"
                                            type="video/mp4">
                                    </video>
                                    <button x-show="!play" @click="toggleVideo($refs.videoEl)"
                                        class="absolute left-1/2 top-1/2 z-10 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-primary lg:h-40 lg:w-40">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="rgba(255,255,255,1)" class="h-full w-full">
                                            <path d="M16 12L10 18V6L16 12Z"></path>
                                        </svg>
                                    </button>
                                    <div x-show="!play"
                                        class="absolute bottom-0 left-0 z-0 h-1/3 w-full bg-neutral-200/95">
                                        <p
                                            class="relative top-1/2 mr-10 -translate-y-1/2 border-r border-black pr-4 text-xl font-bold lg:text-3xl translate-x-full group-hover:translate-x-0 transition-all duration-300">
                                            <span class="block">نام فرد</span><span>سمت اجرایی یا مدیریتی فرد</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group">
                                <div x-data="video" @click.outside="pauseVideo($refs.videoEl)"
                                    class="relative inset-0 col-span-4 h-80 overflow-hidden rounded-3xl bg-white lg:h-96">
                                    <video preload="none" x-ref="videoEl"
                                        class="w-full h-full object-cover cursor-pointer" controls
                                        poster="https://images.unsplash.com/photo-1515469657722-35168aada0fd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                        <source class="w-full h-full" src="./assets/12428462_1920_1080_30fps.mp4"
                                            type="video/mp4">
                                    </video>
                                    <button x-show="!play" @click="toggleVideo($refs.videoEl)"
                                        class="absolute left-1/2 top-1/2 z-10 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-primary lg:h-40 lg:w-40">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="rgba(255,255,255,1)" class="h-full w-full">
                                            <path d="M16 12L10 18V6L16 12Z"></path>
                                        </svg>
                                    </button>
                                    <div x-show="!play"
                                        class="absolute bottom-0 left-0 z-0 h-1/3 w-full bg-neutral-200/95">
                                        <p
                                            class="relative top-1/2 mr-10 -translate-y-1/2 border-r border-black pr-4 text-xl font-bold lg:text-3xl translate-x-full group-hover:translate-x-0 transition-all duration-300">
                                            <span class="block">نام فرد</span><span>سمت اجرایی یا مدیریتی فرد</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start video slider-->
                </div>
            </div>
        </section>
        {{--  --}}
        <section class="mt-5">
            <div class="content mx-auto">
                <div class="grid grid-cols-1 items-center justify-between border-b border-primary pb-2 md:grid-cols-3">
                    <h2 class="col-span-1 flex items-center gap-1 mb-3 md:mb-0">
                        <div class="relative h-14 w-14 -translate-y-0.5">
                            <img class="h-full w-full" src="{{ asset('assets/images/icon-products.png') }}"
                                alt="معرفی محصولات چتر" />
                        </div>
                        <span class="text-xl font-bold text-primary/90">معرفی محصولات چتر</span>
                    </h2>
                    <div
                        class="col-span-1 flex items-start gap-3 sm:gap-0 sm:items-center justify-between md:col-span-2 md:justify-end flex-col sm:flex-row ">
                        <button class="me-4 flex items-center gap-1 text-xs text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                                class="inline" fill="rgba(42,38,105,1)">
                                <path
                                    d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM14 9H19L12 16L5 9H10V3H14V9Z">
                                </path>
                            </svg>
                            <span class="text-nowrap">برای دانلود کاتالوگ محصولات کلیک کنید</span>
                        </button>
                        <a href="./shop.html" class="flex items-center gap-1 text-xs text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                                class="inline" fill="rgba(42,38,105,1)">
                                <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                            </svg>
                            <span class="text-nowrap">مشاهده همه محصولات</span>
                        </a>
                    </div>
                </div>
                <div class="swiper sw-products relative !px-10">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <div class="swiper-slide p-6 py-8">
                                <article
                                    class="bg-translate relative col-span-2 min-h-60 p-4 shadow-lg transition-all duration-200 hover:scale-105 hover:shadow-primary/30">
                                    <div class="relative mx-auto h-40 w-full border-b border-primary">
                                        <img class="h-full w-full object-contain" src="{{ $product->image_url }}"
                                            alt="{{ $product->title }}">
                                    </div>
                                    <h2 class="mt-3 line-clamp-1 text-center text-base font-bold text-primary">
                                        {{ $product->title }}
                                    </h2>
                                    <p class="mt-1 line-clamp-1 text-center text-sm text-primary">
                                        {{ $product->description }}
                                    </p>
                                    <div
                                        class="flex flex-wrap items-center justify-between md:justify-center lg:justify-between text-xs">
                                        <p>
                                            <span
                                                class="font-semibold text-primary">WVA:</span><span>{{ $product->wva }}</span>
                                        </p>
                                        <p>
                                            <span
                                                class="font-semibold text-primary">SIZE:</span><span>{{ $product->size }}</span>
                                        </p>
                                    </div>
                                    <div
                                        class="flex flex-nowrap md:flex-wrap lg:flex-nowrap items-center justify-center gap-2 mt-2">
                                        @foreach (json_decode($product->additional_images, true) as $additionalImage)
                                            <img class="h-5 w-14" src="{{ $additionalImage }}" alt="Additional Image">
                                        @endforeach
                                    </div>
                                    <a class="absolute left-0 top-0 h-full w-full" href="#"></a>
                                    <div
                                        class="absolute right-0 top-0 w-6 h-6 bg-primary flex place-content-center text-white">
                                        1
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="absolute left-0 top-1/2 flex w-[100%] -translate-y-1/2 items-center justify-between">
                        <div class="swiper-button-product-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 fill-primary"
                                viewBox="0 0 18 18">
                                <path
                                    d="M11.9999 10.8284L7.0502 15.7782L5.63599 14.364L11.9999 8L18.3639 14.364L16.9497 15.7782L11.9999 10.8284Z">
                                </path>
                            </svg>
                        </div>
                        <div class="swiper-button-product-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 fill-primary"
                                viewBox="0 0 18 18">
                                <path
                                    d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  --}}
        <section>
            <div class="content mx-auto">
                <div
                    class="grid grid-cols-1 items-center justify-between border-b border-primary pb-2 md:grid-cols-3 mb-4">
                    <h2 class="col-span-1 flex items-center gap-1 mb-3 ms:mb-0">
                        <div class="relative h-14 w-14 -translate-y-0.5">
                            <img class="h-full w-full" src="{{ asset('assets/images/icon-gift.png') }}"
                                alt="هدایای تبلیغاتی چتر" />
                        </div>
                        <span class="text-nowrap text-xl font-bold text-primary/90">هدایای تبلیغاتی چتر</span>
                    </h2>
                    <div
                        class="col-span-1 flex items-start gap-3 sm:gap-0 sm:items-center justify-between md:col-span-2 md:justify-end flex-col sm:flex-row ">
                        <button class="me-4 flex items-center gap-1 text-xs text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                                class="inline" fill="rgba(42,38,105,1)">
                                <path
                                    d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM14 9H19L12 16L5 9H10V3H14V9Z">
                                </path>
                            </svg>
                            <span class="text-nowrap">برای دانلود کاتالوگ هدایا کلیک کنید</span>
                        </button>
                        <a href="./gifts.html" class="flex items-center gap-1 text-xs text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                                class="inline" fill="rgba(42,38,105,1)">
                                <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                            </svg>
                            <span class="text-nowrap">مشاهده همه هدایا</span>
                        </a>
                    </div>
                </div>
                <div class="swiper sw-gifts relative !px-10">
                    <div class="swiper-wrapper">
                        @foreach ($gifts as $gift)
                            <div class="swiper-slide group p-4 pb-6 pt-3">
                                <article
                                    class="relative col-span-2 min-h-44 rounded-3xl border border-primary bg-[url('/assets/images/bg-gifts.png')] bg-cover bg-center bg-no-repeat p-2 shadow-lg shadow-transparent transition-all duration-200 hover:scale-105 group-hover:bg-primary/5 group-hover:shadow-primary/30">
                                    <div class="relative mx-auto h-32 px-2 pb-2 w-full border-b-2 border-secondary">
                                        <img class="h-full w-full object-contain"
                                            src="{{ asset('storage/' . $gift->image) }}" alt="gift" />
                                    </div>
                                    <h2 class="mt-3 line-clamp-2 text-center text-sm font-bold text-black">
                                        {{ $gift->title }}
                                    </h2>
                                    <p class="mt-1 line-clamp-1 text-center text-sm font-semibold text-black">
                                        <span
                                            class="text-red-600 transition-all duration-200 group-hover:text-secondary">CODE:</span>
                                        <span>{{ $gift->code }}</span>
                                    </p>

                                    <p class="mt-2 text-center text-sm font-semibold text-black">
                                        Price: {{ $gift->price }} $
                                    </p>

                                    <a class="absolute left-0 top-0 h-full w-full" href="#"></a>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="absolute left-0 top-1/2 flex w-[100%] -translate-y-1/2 items-center justify-between">
                        <div class="swiper-button-product-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 fill-primary"
                                viewBox="0 0 18 18">
                                <path
                                    d="M11.9999 10.8284L7.0502 15.7782L5.63599 14.364L11.9999 8L18.3639 14.364L16.9497 15.7782L11.9999 10.8284Z">
                                </path>
                            </svg>
                        </div>
                        <div class="swiper-button-product-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 fill-primary"
                                viewBox="0 0 18 18">
                                <path
                                    d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gradient-primary mt-5 bg-gradient-to-r p-6">
            <div class="content mx-auto">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 lg:text-sm xl:text-base ">
                    <div
                        class="flex items-center border-b-4 border-r-4 border-gray-300 bg-slate-50 group hover:bg-gray-200 transition-all duration-300">
                        <div class="h-20 w-20">
                            <img class="h-full w-full object-cover" src="{{ asset('assets/images/feature-1.png') }}"
                                alt="feature" />
                        </div>
                        <p class="font-bold text-[#1569A5] group-hover:scale-110 transition-all duration-300">
                            <span>تضمین اصالت</span><span class="block">و کیفیت محصولات</span>
                        </p>
                    </div>
                    <div
                        class="flex items-center border-b-4 border-r-4 border-gray-300 bg-slate-50 group hover:bg-gray-200 transition-all duration-300">
                        <div class="h-20 w-20">
                            <img class="h-full w-full object-cover" src="{{ asset('assets/images/feature-2.png') }}"
                                alt="feature" />
                        </div>
                        <p class="font-bold text-[#1569A5] group-hover:scale-110 transition-all duration-300">
                            <span>لذت خرید همراه با</span><span class="block">هدایای تبلیغاتی جذاب</span>
                        </p>
                    </div>
                    <div
                        class="flex items-center border-b-4 border-r-4 border-gray-300 bg-slate-50 group hover:bg-gray-200 transition-all duration-300">
                        <div class="h-20 w-20">
                            <img class="h-full w-full object-cover" src="{{ asset('assets/images/feature-3.png') }}"
                                alt="feature" />
                        </div>
                        <p class="font-bold text-[#1569A5] group-hover:scale-110 transition-all duration-300">
                            <span>ارائه محصولات</span><span class="block">با تخفیف های عالی</span>
                        </p>
                    </div>
                    <div
                        class="flex items-center border-b-4 border-r-4 border-gray-300 bg-slate-50 group hover:bg-gray-200 transition-all duration-300">
                        <div class="h-20 w-20">
                            <img class="h-full w-full object-cover" src="{{ asset('assets/images/feature-4.png') }}"
                                alt="feature" />
                        </div>
                        <p class="font-bold text-[#1569A5] group-hover:scale-110 transition-all duration-300">
                            <span>دارای نمایندگی</span><span class="block">در اقصی نقاط کشور</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="content mx-auto">
                <div class="grid grid-cols-1 items-center justify-between sm:grid-cols-2">
                    <h2 class="col-span-1 flex items-center gap-1 mb-3 md:mb-0">
                        <div class="relative h-14 w-14 -translate-y-0.5">
                            <img class="h-full w-full" src="{{ asset('assets/images/icon-vendors.png') }}"
                                alt=" مکانیکی های فعال" />
                        </div>
                        <span class="text-nowrap text-xl font-bold text-primary/90"> مکانیکی های فعال</span>
                    </h2>
                    <div class="col-span-1 flex items-center justify-between sm:justify-end ">
                        <a href="./mechanical.html" class="flex items-center gap-1 text-xs text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                                class="inline" fill="rgba(42,38,105,1)">
                                <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                            </svg>
                            <span class="text-nowrap">مشاهده همه مکانیکی های فعال</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        {{--  --}}
        <section class="gradient-primary bg-gradient-to-r py-4">
            <div class="content mx-auto">
                <div
                    class="grid items-stretch gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-between">
                    @foreach ($mechanics as $mechanic)
                        <article class="flex justify-center mx-auto">
                            <div
                                class="relative overflow-hidden max-w-[270px] h-auto rounded-3xl transition-all duration-200 hover:shadow-lg hover:shadow-black/50">
                                <div class="relative w-full">
                                    <div
                                        class="relative z-10 h-40 w-full border-b-4 border-primary bg-white mask-image-[url('/assets/images/mechanic-mask.svg')] mask-size-cover mask-repeat-no-repeat mask-position-center mask-origin-border-box">
                                        <img class="w-full h-full object-cover" src="{{ $mechanic->image_url }}"
                                            alt="">
                                    </div>
                                    <div
                                        class="absolute left-[45px] sm:left-11 md:left-7 lg:left-7 xl:left-[45px] top-0 w-[70px] h-5">
                                        <p class="-translate-y-1 text-center text-sm text-white">
                                            {{ $mechanic->location }}
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-gray-100 p-2 text-primary">
                                    <p class="mb-2 line-clamp-1 text-base font-semibold">
                                        {{ $mechanic->name }}
                                    </p>
                                    <div class="flex items-end">
                                        <div class="w-2/3 space-y-2 text-[9px]">
                                            <p class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="16" height="16" class="min-w-4" fill="#2A2669">
                                                    <path
                                                        d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z">
                                                    </path>
                                                </svg>
                                                <span class="line-clamp-3">{{ $mechanic->address }}</span>
                                            </p>
                                            <p class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="16" height="16" class="-translate-y-1" fill="#2A2669">
                                                    <path
                                                        d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                                                    </path>
                                                </svg>
                                                <span>{{ $mechanic->phone }}</span>
                                            </p>
                                        </div>
                                        <div class="relative w-1/3">
                                            <img class="h-auto w-full object-cover"
                                                src="{{ asset('assets/images/logo-2.png') }}" alt="chatr">
                                        </div>
                                    </div>
                                </div>
                                <a class="absolute left-0 top-0 z-20 h-full w-full" href="#"></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="content mx-auto">
                <div class="grid grid-cols-1 items-center justify-between border-b border-primary pb-2 sm:grid-cols-2">
                    <h2 class="col-span-1 flex items-center gap-1 mb-3 md:mb-0">
                        <div class="relative h-10 w-10 -translate-y-0.5">
                            <img class="h-full w-full object-cover" src="{{ asset('assets/images/icon-news.png') }}"
                                alt="اخبار و مجله فنی چتر" />
                        </div>
                        <span class="text-nowrap text-xl font-bold text-primary/90 mr-1">اخبار و مجله فنی چتر</span>
                    </h2>
                    <div class="col-span-1 flex items-center justify-between sm:justify-end">
                        <a href="./blog.html" class="flex items-center gap-1 text-xs text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                                class="inline" fill="rgba(42,38,105,1)">
                                <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                            </svg>
                            <span class="text-nowrap">برو به صفحه مجله</span>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 items-stretch gap-8 pt-10 lg:grid-cols-2">
                    <div class=" relative sm:max-h-80 md:max-h-96 lg:max-h-[460px] mr-4 lg:mr-0">
                        <div class="z-10 relative overflow-hidden h-full group">
                            <div class="h-full w-full">
                                <img class="h-full w-full object-cover" src="{{ asset('assets/images/blog-1.png') }}"
                                    alt="blog" />
                            </div>

                            <a class="absolute left-0 top-0 z-20 h-full w-full" href="./blog-details.html"></a>
                            <div
                                class="absolute bottom-0 left-0 h-2/5 w-full bg-white/80 sm:text-xl md:text-2xl lg:text-3xl translate-y-full transition-all duration-200 group-hover:translate-y-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60"
                                    height="60" fill="rgba(3,105,161,1)" class="mx-auto transition-all duration-200">
                                    <path
                                        d="M12 4.83582L5.79291 11.0429L7.20712 12.4571L12 7.66424L16.7929 12.4571L18.2071 11.0429L12 4.83582ZM12 10.4857L5.79291 16.6928L7.20712 18.107L12 13.3141L16.7929 18.107L18.2071 16.6928L12 10.4857Z">
                                    </path>
                                </svg>
                                <h2 class="mb-2 text-center font-extrabold text-sky-700">
                                    در این پست میخوانید
                                </h2>
                                <h2 class="text-center font-extrabold text-black">
                                    یک لنت خوب چه ویژگی هایی دارد
                                </h2>
                            </div>
                        </div>
                        <div class="absolute left-4 top-4 -z-10 h-full w-full border-4 border-primary"></div>
                    </div>
                    <div class="flex flex-col gap-8 justify-between">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <div class="order-1">
                                <h2 class="mb-1 text-xl font-semibold text-black">
                                    داغ ترین ها
                                </h2>
                                <p class="mb-3 text-sm text-gray-500">
                                    لورم ایپسوم متن ساختگی با تولید
                                </p>
                                <p class="text-justify text-sm">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                    مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                    کاربردی می باشد.
                                </p>
                            </div>
                            <div class="relative z-0 order-2 h-52 mr-4 sm:mr-0">
                                <div class="h-full w-full overflow-hidden">
                                    <img class="h-full w-full object-cover hover:scale-110 transition-all duration-300"
                                        src="{{ asset('assets/images/blog-2.png') }}" alt="blog" />
                                </div>
                                <div class="absolute left-4 top-4 -z-10 h-full w-full border-4 border-primary"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <div class="relative z-0 order-4 h-52 sm:order-3 mr-4 lg:mr-0">
                                <div class="h-full w-full overflow-hidden">
                                    <img class="h-full w-full object-cover hover:scale-110 transition-all duration-300"
                                        src="{{ asset('assets/images/blog-3.png') }}" alt="blog" />
                                </div>
                                <div class="absolute left-4 top-4 -z-10 h-full w-full border-4 border-primary"></div>
                            </div>
                            <div class="order-3 sm:order-4">
                                <h2 class="mb-1 text-xl font-semibold text-black">
                                    اخبار دنیای لنت ترمز
                                </h2>
                                <p class="mb-3 text-sm text-gray-500">
                                    لورم ایپسوم متن ساختگی با تولید
                                </p>
                                <p class="text-justify text-sm">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                    مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                    کاربردی می باشد.
                                </p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="content mx-auto">
                <h2
                    class="relative z-10 block p-2 text-center text-xl font-extrabold text-primary before:absolute before:left-0 before:top-1/2 before:-z-10 before:h-[1px] before:w-full before:-translate-y-1/2 before:bg-primary md:text-xl lg:text-2xl xl:text-3xl">
                    <span class="bg-slate-50 px-4">نقشه فنی لنت ترمز چتر</span>
                </h2>
                <div class="my-8 grid grid-cols-1 md:grid-cols-2 gap-16 md:h-44 lg:h-64">
                    <div class="relative h-full">
                        <img class="h-full w-full" src="{{ asset('assets/images/tech-desc.png') }}"
                            alt="نقشه فنی لنت ترمز چتر" />
                    </div>
                    <div class="relative h-full">
                        <img class="h-full w-full" src="{{ asset('assets/images/tech-desc2.png') }}"
                            alt="نقشه فنی لنت ترمز چتر" />
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gradient-to-r gradient-primary relative flex md:py-1 lg:py-2 items-center">
            <div class="grow relative top-0 -translate-y-1/2 h-1 bg-white"></div>

            <div class="md:w-2/3 min-h-32 flex items-center justify-center mx-auto">
                <img src="{{ asset('assets/images/certificated.png') }}" alt="certificated">
            </div>
            <div class="grow relative top-0 -translate-y-1/2 h-1 bg-white"></div>
            </div>
        </section>

        <section class="bg-[url('/assets/images/bg-gifts.png')] bg-[length:200px_200px] bg-center bg-repeat">
            <div class="content mx-auto">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">

                    <div class="md:h-96 lg:min-h-80 lg:h-auto">
                        <img class="h-full object-cover md:mx-auto" src="{{ asset('assets/images/insta-banner.png') }}"
                            alt="ChatrCo" />
                    </div>
                    <div class="flex flex-col gap-2 items-center justify-center ">
                        <h2 class="flex items-center mb-6">
                            <span class="text-navy-blue font-bold text-5xl translate-y-2 ">Chatr.parts</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64"
                                fill="rgba(28,24,36,1)">
                                <path
                                    d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z">
                                </path>
                            </svg>
                        </h2>
                        <div class="swiper sw-insta-card">
                            <div class="swiper-wrapper">
                                @foreach ($profiles as $profile)
                                    <div
                                        class="swiper-slide bg-gradient-to-bl gradient-primary overflow-hidden rounded-xl p-4 text-white">
                                        <article>
                                            <div class="flex items-center gap-2 relative" dir="ltr">
                                                <!-- نمایش عکس کاربر -->
                                                <div class="w-16 h-16 bg-white rounded-full p-0.5 overflow-hidden">
                                                    <img class="w-full h-full rounded-full object-cover"
                                                        src="{{ $profile->images_url[0] }}" alt="">
                                                </div>
                                                <div>
                                                    <!-- نمایش نام کاربر و شناسه اینستاگرام -->
                                                    <h2 class="text-xl">{{ $profile->username }}</h2>
                                                    <p class="text-gray-400">{{ $profile->instagram_id }}</p>
                                                </div>
                                                <!-- نماد لایک یا هر چیز دیگر -->
                                                <svg class="absolute -top-1 left-0" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" width="24" height="24"
                                                    fill="rgba(233,0,0,1)">
                                                    <path
                                                        d="M12.001 4.52853C14.35 2.42 17.98 2.49 20.2426 4.75736C22.5053 7.02472 22.583 10.637 20.4786 12.993L11.9999 21.485L3.52138 12.993C1.41705 10.637 1.49571 7.01901 3.75736 4.75736C6.02157 2.49315 9.64519 2.41687 12.001 4.52853Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!-- نمایش محتوی نظر -->
                                            <p class="text-xs text-justify text-gray-300 leading-6 mt-3">
                                                {{ $profile->content }}</p>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>
    <!-- end main -->
@endsection
