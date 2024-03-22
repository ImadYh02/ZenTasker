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
    <div class="main-bg w-full h-full">
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

        <!-- Start Dashboard Tools Section -->
        <div class="w-full h-screen flex main-bg">
            <!-- Start Side Tools Section -->
            <div class="w-[25%]">
                <!-- Start Donate Button -->
                <div class="w-[80%] h-64 bg-green-500 rounded-xl mx-auto my-10"></div>
                <!-- End Donate Button -->

                <!-- Start Quick Tools -->
                <div class="flex">

                <div class="w-[95%] mx-auto">
                    <div class="ml-8">
                        <h2 class="font-bold text-xl mb-5">Quick Notes</h2>
                        <div class="flex items-center">
                            @include('../include/checkbox')
                            <p class="ml-4 text-lg">Take Test 001</p>
                        </div>
                        <div class="flex items-center my-4">
                            @include('../include/checkbox')
                            <p class="ml-4 text-lg">Take Test 002</p>
                        </div>
                        <div class="flex items-center mb-4">
                            @include('../include/checkbox')
                            <p class="ml-4 text-lg">Take Test 003</p>
                        </div>
                        <a class="" href="#">Check More</a>
                    </div>

                    <div class="ml-8">
                        <h2 class="font-bold text-xl mb-5">Quick Notes</h2>
                        <div class="flex items-center">
                            @include('../include/checkbox')
                            <p class="ml-4 text-lg">Take Test 001</p>
                        </div>
                        <div class="flex items-center my-4">
                            @include('../include/checkbox')
                            <p class="ml-4 text-lg">Take Test 002</p>
                        </div>
                        <div class="flex items-center mb-4">
                            @include('../include/checkbox')
                            <p class="ml-4 text-lg">Take Test 003</p>
                        </div>
                        <a class="" href="#">Check More</a>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-md opacity-60 h-80 w-[2px]"></div>
                </div>
                <!-- End Quick Tools -->
            </div>
            <!-- End Side Tools Section -->

            <!-- Start Cards Section -->
            <div class="w-[75%]">
                <div class="pl-10 pt-10">
                    <h1 class="text-3xl font-black">Hi, iMad 🙌</h1>
                </div>

                <div class="w-full h-full p-10 flex justify-between flex-wrap">
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl"></div>
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl"></div>
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl"></div>

                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl my-4"></div>
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl my-4"></div>
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl my-4"></div>

                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl"></div>
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl"></div>
                    <div class="w-[31%] h-72 bg-yellow-400 rounded-xl"></div>
                </div>
            </div>
            <!-- End Cards Section -->
        </div>
        <!-- End Dashboard Tools Section -->
    </div>
</body>
</html>