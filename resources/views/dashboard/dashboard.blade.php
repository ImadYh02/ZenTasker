<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard || iMad Yh</title>
        <!-- CSS Style -->
        <link
            rel="stylesheet"
            href="{{asset('assets/css/dashboardStyle.css')}}"
        />
        @vite('resources/css/app.css')
        <!-- Satoshi Font Famliy -->
        <link
            href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,300,400&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="main-bg w-full h-screen">
            <!-- Start Navbar Section -->
            @include('../include/user_nav')
            <!-- End Navbar Section -->

            <!-- Start Cover Pic Section -->
            <div class="cover w-full h-1/3 flex justify-center items-center">
                <div class="w-full h-1/3">
                    <div class="flex items-center justify-center">
                        <q
                            class="font-bold text-white text-2xl mx-6 text-center"
                            >Success is not final, failure is not fatal: It is
                            the courage to continue that counts. -
                            <span class="font-normal"
                                >Winston Churchill</span
                            ></q
                        >
                    </div>
                </div>
            </div>
            <!-- End Cover Pic Section -->

            <!-- Start Dashboard Tools Section -->
            <div class="w-full min-h-screen flex flex-wrap main-bg">
                <!-- Start Side Tools Section -->
                <div class="w-full xl:w-[25%]">
                    <!-- Start Donate Button -->
                    <div
                        class="w-[80%] h-80 bg-[#F3BBCC] rounded-xl mx-auto xl:my-10"
                    >
                        <div class="w-1/2 ml-4 pt-4">
                            <h1 class="font-extrabold text-5xl text-black">
                                HELP US GROW.
                            </h1>
                        </div>

                        <div
                            class="flex justify-center my-2 -space-x-4 rtl:space-x-reverse"
                        >
                            <img
                                class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                            />
                            <img
                                class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                            />
                            <img
                                class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                            />
                            <a
                                class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800"
                                href="#"
                                >+99<a/>
                        </div>
                        <p class="text-sm text-black text-center">
                            "Join us, support, make a difference today."
                        </p>

                        <div class="flex items-center justify-center mt-2">
                            <a
                                style="background-color: #f7be38"
                                href="https://paypal.me/iMadYh"
                                type="button"
                                class="text-gray-900 bg-[#F7BE38] hover:bg-white focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2"
                            >
                                <svg
                                    class="w-4 h-4 mr-2 -ml-1"
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fab"
                                    data-icon="paypal"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"
                                    ></path>
                                </svg>
                                Donate Us with PayPal
                            </a>
                        </div>
                    </div>
                    <!-- End Donate Button -->

                    <!-- Start Quick Tools -->
                    <div class="flex">
                        <div class="w-[95%] mx-auto">
                            <div class="ml-8">
                                <h2 class="font-bold text-xl mb-5">
                                    Quick Notes
                                </h2>
                                <div class="flex items-center">
                                    @include('../components/checkbox')
                                    <p class="ml-4 text-base text-black">
                                        Take Test 002
                                    </p>
                                </div>
                                <div class="flex items-center my-4">
                                    @include('../components/checkbox')
                                    <p class="ml-4 text-base text-black">
                                        Take Test 002
                                    </p>
                                </div>
                                <div class="flex items-center mb-4">
                                    @include('../components/checkbox')
                                    <p class="ml-4 text-base text-black">
                                        Take Test 003
                                    </p>
                                </div>
                                @include('../components/button')
                            </div>

                            <div class="ml-8">
                                <h2 class="font-bold text-xl mb-5">
                                    Quick Notes
                                </h2>
                                <div class="flex items-center">
                                    @include('../components/checkbox')
                                    <p class="ml-4 text-base text-black">
                                        Take Test 002
                                    </p>
                                </div>
                                <div class="flex items-center my-4">
                                    @include('../components/checkbox')
                                    <p class="ml-4 text-base text-black">
                                        Take Test 002
                                    </p>
                                </div>
                                <div class="flex items-center mb-4">
                                    @include('../components/checkbox')
                                    <p class="ml-4 text-base text-black">
                                        Take Test 002
                                    </p>
                                </div>
                                @include('../components/button')
                            </div>
                        </div>

                        <div
                            class="bg-gray-800 rounded-md opacity-60 h-screen w-[2px]"
                        ></div>
                    </div>
                    <!-- End Quick Tools -->
                </div>
                <!-- End Side Tools Section -->

                <!-- Start Cards Section -->
                <div class="w-full xl:w-[75%]">
                    <div class="pl-10 xl:pt-10">
                        <h1 class="text-3xl font-black">Hi, iMad 🙌</h1>
                    </div>
                    @include('../include/dash-card')
                </div>
                <!-- End Cards Section -->
            </div>
            <!-- End Dashboard Tools Section -->
        </div>
    </body>
</html>
