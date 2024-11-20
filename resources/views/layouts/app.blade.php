<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark" />
    <title>@yield('title', 'صفحه اصلی')</title>
    @vite(['resources/styles/main.css', 'resources/scripts/main.js'])
    @stack('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="flex flex-col" style="min-height: 100vh">
    <!-- Header -->
    <header class="gradient-primary relative z-20 bg-gradient-to-r shadow-md shadow-primary" x-data="{ openMenu: false }">
        <nav class="content z-10">
            <div class="flex items-center justify-between">
                <div class="flex items-center lg:gap-10 xl:gap-16">
                    <a href="./index.html" class="block h-12 w-32 items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('assets/images/logo.png') }}" class="h-full w-full" alt="چتر گارانتی" />
                    </a>

                    <!-- start desktop menu-->
                    <ul class="hidden text-sm space-x-4 space-x-reverse font-semibold lg:flex">
                        <li>
                            <a href="./index.html"
                                class="block border-b border-transparent px-1 py-2 text-white transition-all duration-300 hover:border-white"
                                aria-current="page">
                                صفحه اصلی
                            </a>
                        </li>
                        <li>
                            <a href="./shop.html"
                                class="block border-b border-transparent px-1 py-2 text-white transition-all duration-300 hover:border-white">
                                محصولات</a>
                        </li>
                        <li>
                            <a href="./gifts.html"
                                class="block border-b border-transparent px-1 py-2 text-white transition-all duration-300 hover:border-white">
                                هدایای تبلیغاتی</a>
                        </li>
                        <li>
                            <a href="./mechanical.html"
                                class="block border-b border-transparent px-1 py-2 text-white transition-all duration-300 hover:border-white">
                                مکانیکی های فعال</a>
                        </li>
                        <li>
                            <a href="./blog.html"
                                class="block border-b border-transparent px-1 py-2 text-white transition-all duration-300 hover:border-white">
                                چتر مگ</a>
                        </li>
                    </ul>
                    <!-- end desktop menu-->
                </div>
                <div>
                    <div class="relative hidden lg:block">
                        <input type="text" id="search-navbar"
                            class="block w-full min-w-60 rounded-full bg-gray-50 p-2 pe-10 text-xs text-gray-900 placeholder-gray-300 outline-none"
                            placeholder="جستجو کنید" />
                        <button class="absolute inset-y-0 end-0 flex items-center pe-3">
                            <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class=":bg-gray-700 :ring-gray-600 inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-white outline-none lg:hidden"
                        aria-controls="navbar-search" aria-expanded="false" @click="openMenu=true">
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- start mobile menu-->
        <nav class="fixed top-0 z-10 h-screen w-2/3 bg-white p-4 sm:w-1/2" x-cloak x-show="openMenu"
            x-transition:enter="transition-all duration-500" x-transition:enter-start="-right-full"
            x-transition:enter-end="right-0" x-transition:leave="transition-all duration-500"
            x-transition:leave-start="right-0" x-transition:leave-end="-right-full">
            <div class="flex w-full items-center justify-between">
                <a href="./index.html" class="block h-8 w-20 items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/images/logo-2.png') }}" class="h-full w-full object-cover"
                        alt="چتر گارانتی" />
                </a>
                <button class="rounded-full bg-gray-100 p-2 transition-all duration-200 hover:bg-gray-200"
                    @click="openMenu=false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                        fill="#263D89">
                        <path
                            d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="relative z-10">
                <input type="text" id="search-navbar"
                    class="mt-3 block w-full min-w-full sm:min-w-60 rounded-full bg-gray-50 p-3 pe-10 text-sm text-gray-900 placeholder-gray-300 outline-none"
                    placeholder="جستجو کنید" />
                <button class="absolute inset-y-0 end-0 flex items-center pe-3">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
            </div>
            <ul class="mt-4 space-y-4 font-semibold">
                <li>
                    <a href="./index.html"
                        class="block rounded-md border-b border-transparent bg-primary/5 p-4 py-2 text-primary transition-all duration-200 hover:bg-primary/10"
                        aria-current="page">
                        صفحه اصلی
                    </a>
                </li>
                <li>
                    <a href="./shop.html"
                        class="block rounded-md border-b border-transparent bg-primary/5 p-4 py-2 text-primary transition-all duration-200 hover:bg-primary/10">
                        محصولات</a>
                </li>
                <li>
                    <a href="./gifts.html"
                        class="block rounded-md border-b border-transparent bg-primary/5 p-4 py-2 text-primary transition-all duration-200 hover:bg-primary/10">
                        هدایای تبلیغاتی</a>
                </li>
                <li>
                    <a href="./mechanical.html"
                        class="block rounded-md border-b border-transparent bg-primary/5 p-4 py-2 text-primary transition-all duration-200 hover:bg-primary/10">
                        مکانیکی های فعال</a>
                </li>
                <li>
                    <a href="./blog.html"
                        class="block rounded-md border-b border-transparent bg-primary/5 p-4 py-2 text-primary transition-all duration-200 hover:bg-primary/10">
                        چتر مگ</a>
                </li>
            </ul>
        </nav>
        <!-- end mobile menu-->

        <div id="blur-backdrop-mobile"
            class="fixed inset-0 left-0 top-0 z-0 h-screen w-full animate-fade bg-black/30 backdrop-blur transition-all duration-100 animate-delay-0 animate-duration-500 animate-ease-in"
            @click="openMenu=false" x-bind:class="openMenu ? 'block' : 'hidden'"
            x-transition:enter="transition-all duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-all duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <div class="bg-[url('/assets/images/bg-gifts.png')] bg-[length:200px_200px] bg-center bg-repeat">
        <footer class="gradient-primary relative min-h-40 bg-gradient-to-r footer">
            <div class="content mx-auto text-white pt-20 pb-10">
                <p class="text-center text-xl mb-3">شرکت بازرگانی چتر</p>
                <p class="text-center text-x mb-3">تولید ، گارانتی و پخش لنت و کفشک ترمز</p>
                <div class="w-2/3 bg-white h-0.5 mx-auto"></div>
                <p class="sm:items-center justify-center gap-0.5 sm:gap-1 mt-3 text-xs text-center"><svg
                        class="-translate-y-0.5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="16" height="16" fill="rgba(255,255,255,1)">
                        <path
                            d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z">
                        </path>
                    </svg>
                    <span>اراک ، شهرک صنعتی شماره یک ، خیابان نامداران گروه تولیدی ، پخش و گارانتی چتر</span>
                </p>
                <div class="mx-auto flex-wrap flex items-center justify-center gap-4 text-xs mt-2">
                    <p class="gap-0.5">
                        <a href="sms:1008218"><span>1008218</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="-translate-y-0.5 inline" width="12" height="12"
                                fill="rgba(255,255,255,1)">
                                <path
                                    d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z">
                                </path>
                            </svg></a>
                    </p>
                    <p class="gap-0.5">
                        <a href="tel:02191070046">
                            <span>021-91070046</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="-translate-y-0.5 inline" width="12" height="12"
                                fill="rgba(255,255,255,1)">
                                <path
                                    d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                                </path>
                            </svg>
                        </a>

                    </p>
                    <p class="gap-0.5">
                        <a href="tel:0863413263942">
                            <span>086-34132639-42</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="-translate-y-0.5 inline" width="12" height="12"
                                fill="rgba(255,255,255,1)">
                                <path
                                    d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                                </path>
                            </svg>
                        </a>

                    </p>
                    <p class="gap-0.5">
                        <a href="https://t.me/chatr_parts">
                            <span>chatr_parts</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="-translate-y-0.5 inline" width="12" height="12"
                                fill="rgba(255,255,255,1)">
                                <path
                                    d="M17.0943 7.14643C17.6874 6.93123 17.9818 6.85378 18.1449 6.82608C18.1461 6.87823 18.1449 6.92051 18.1422 6.94825C17.9096 9.39217 16.8906 15.4048 16.3672 18.2026C16.2447 18.8578 16.1507 19.1697 15.5179 18.798C15.1014 18.5532 14.7245 18.2452 14.3207 17.9805C12.9961 17.1121 11.1 15.8189 11.2557 15.8967C9.95162 15.0373 10.4975 14.5111 11.2255 13.8093C11.3434 13.6957 11.466 13.5775 11.5863 13.4525C11.64 13.3967 11.9027 13.1524 12.2731 12.8081C13.4612 11.7035 15.7571 9.56903 15.8151 9.32202C15.8246 9.2815 15.8334 9.13045 15.7436 9.05068C15.6539 8.97092 15.5215 8.9982 15.4259 9.01989C15.2904 9.05064 13.1326 10.4769 8.95243 13.2986C8.33994 13.7192 7.78517 13.9242 7.28811 13.9134L7.29256 13.9156C6.63781 13.6847 5.9849 13.4859 5.32855 13.286C4.89736 13.1546 4.46469 13.0228 4.02904 12.8812C3.92249 12.8466 3.81853 12.8137 3.72083 12.783C8.24781 10.8109 11.263 9.51243 12.7739 8.884C14.9684 7.97124 16.2701 7.44551 17.0943 7.14643ZM19.5169 5.21806C19.2635 5.01244 18.985 4.91807 18.7915 4.87185C18.5917 4.82412 18.4018 4.80876 18.2578 4.8113C17.7814 4.81969 17.2697 4.95518 16.4121 5.26637C15.5373 5.58382 14.193 6.12763 12.0058 7.03736C10.4638 7.67874 7.39388 9.00115 2.80365 11.001C2.40046 11.1622 2.03086 11.3451 1.73884 11.5619C1.46919 11.7622 1.09173 12.1205 1.02268 12.6714C0.970519 13.0874 1.09182 13.4714 1.33782 13.7738C1.55198 14.037 1.82635 14.1969 2.03529 14.2981C2.34545 14.4483 2.76276 14.5791 3.12952 14.6941C3.70264 14.8737 4.27444 15.0572 4.84879 15.233C6.62691 15.7773 8.09066 16.2253 9.7012 17.2866C10.8825 18.0651 12.041 18.8775 13.2243 19.6531C13.6559 19.936 14.0593 20.2607 14.5049 20.5224C14.9916 20.8084 15.6104 21.0692 16.3636 20.9998C17.5019 20.8951 18.0941 19.8479 18.3331 18.5703C18.8552 15.7796 19.8909 9.68351 20.1332 7.13774C20.1648 6.80544 20.1278 6.433 20.097 6.25318C20.0653 6.068 19.9684 5.58448 19.5169 5.21806Z">
                                </path>
                            </svg>
                        </a>

                    </p>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>

</html>
