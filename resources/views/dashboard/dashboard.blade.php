<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || iMad Yh</title>
    <!-- CSS Style -->
    <link rel="stylesheet" href="{{asset('assets/css/dashboardStyle.css')}}">
    @vite('resources/css/app.css')
    <!-- Satoshi Font Famliy -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,300,400&display=swap" rel="stylesheet">

</head>
<body>
    <div class="w-full h-screen bg-gray-800">
        <!-- Start Navbar Section -->
        @include('../include/user_nav')
        <!-- End Navbar Section -->

        <!-- Start Cover Pic Section -->
        <div class="cover w-full h-1/3 flex justify-center items-center">
            <div class="w-full h-1/3">
                <div class="flex items-center justify-center">
                    <q class="font-bold text-white text-2xl mx-6 text-center">Success is not final, failure is not fatal: It is the courage to continue that counts. - <span class="font-normal">Winston Churchill</span></q>
                </div>
            </div>
        </div>
        <!-- End Cover Pic Section -->

        <!-- Start Hello Text -->
        <div class="m-6">
            <h1 class="font-bold text-white text-2xl text-center">Hey, YAHYAOUI IMAD 👋</h1>
        </div>
        <!-- End Hello Text -->

        <!-- Start Cards Section -->
        <div class="h-screen bg-gray-800 m-8 flex flex-row flex-wrap justify-between">
            <div class="w-full h-screen flex flex-row flex-wrap justify-between">
                <div class="lg:w-[65%] w-full h-[250px] flex flex-row mb-4 flex-wrap justify-between card-pic1 rounded-md">
                    <h1 class="text-4xl font-bold text-black ml-8 max-w-52 my-auto">Start Your Journaling Now.
                    </h1>
                </div>

                <div class="lg:w-[32%] w-full h-[250px] flex flex-row flex-wrap justify-between card-pic2 rounded-md">
                    <h1 class="text-4xl font-bold text-white ml-8 max-w-52  my-auto">Show Your Task's Today
                    </h1>
                    <!-- End Button -->
                </div>

                <div class="lg:w-[32%] w-full h-[250px] flex flex-row flex-wrap justify-between card-pic3 rounded-md">
                    <h1 class="text-3xl font-bold text-white ml-8 w-5 my-auto">Start Your Journaling Now
                    </h1>
                    <!-- Start Button -->
                    <button class="cta mr-6 flex items-center">
                        <span>Hover me</span>
                        <svg width="15px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                    <!-- End Button -->
                </div>

                <div class="lg:w-[32%] w-full h-[250px] flex flex-row flex-wrap justify-between card-pic rounded-md">
                    <h1 class="text-3xl font-bold text-white ml-8 w-5 my-auto">Start Your Journaling Now 4
                    </h1>
                    <!-- Start Button -->
                    <button class="cta mr-6 flex items-center">
                        <span>Hover me</span>
                        <svg width="15px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                    <!-- End Button -->
                </div>

                <div class="lg:w-[32%] w-full h-[250px] flex flex-row mb-4 flex-wrap justify-between card-pic rounded-md">
                    <h1 class="text-3xl font-bold text-white ml-8 max-w-20 mt-4">Start Your Journaling Now With Us.
                    </h1>
                    <!-- Start Button -->
                    <div class="mt-96 mx-auto">
                        <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Start Now</span>
                        </button>
                    </div>
                    <!-- End Button -->
                </div>

                <div class="lg:w-[32%] w-full h-[250px] flex flex-row flex-wrap justify-between card-pic rounded-2xl">
                    <h1 class="text-3xl font-bold text-white ml-8 w-5 my-auto">Start Your Journaling Now
                    </h1>
                    <!-- Start Button -->
                    <button class="cta mr-6 flex items-center">
                        <span>Hover me</span>
                        <svg width="15px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                    <!-- End Button -->
                </div>

                <div class="lg:w-[65%] w-full h-[250px] flex flex-row flex-wrap justify-between card-pic rounded-2xl">
                    <h1 class="text-3xl font-bold text-white ml-8 w-5 my-auto">Start Your Journaling Now
                    </h1>
                    <!-- Start Button -->
                    <button class="cta mr-6 flex items-center">
                        <span>Hover me</span>
                        <svg width="15px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </button>
                    <!-- End Button -->
                </div>
            </div>
        </div>
        <!-- End Cards Section -->
    </div>
</body>
</html>