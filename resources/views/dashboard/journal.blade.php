<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal || iMad Yh</title>
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
        <!-- Start Journal Cover -->
        <div class="journal-cover w-full h-1/3 flex justify-center items-center">
            <div class="w-full h-1/3">
                <div class="flex items-center justify-center">
                    <q class="font-bold text-white text-2xl mx-6 text-center">
                        Success is not final, failure is not fatal: It is
                        the courage to continue that counts. -
                        <span class="font-normal">Winston Churchill</span>
                    </q>
                </div>
            </div>
        </div>
        <!-- End Journal Cover -->

        <!-- Start Journal Container -->
        <div class="w-full min-h-screen flex flex-wrap main-bg">
            <div class="w-full xl:w-[20%]">

            </div>
            <div class="w-full xl:w-[80%]">
                <!-- Start Add New Button -->
                <div class="mt-10 ml-10">
                    @include('components.journal-btn')
                </div>
                <!-- End Add New Button -->

                <!-- Start Header Card -->
                <div class="max-w-full h-full bg-white px-10 py-5 m-10 rounded-xl shadow-xl">
                    <div class="flex justify-between items-center">
                        <h1 class="text-3xl font-black">Your Journal</h1>
                        <button
                            id="dropdown-button"
                            class="relative mt-3 bg-gray-400 text-black w-10 h-10 rounded-full">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </div>
                <!-- End Header Card -->

                <!-- Start Journal Cards -->
                <div class="w-full h-full flex justify-between flex-wrap">
                    <!-- Start First Card -->   
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[70%] w-full px-3">
                            <h2 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h2>
                            <p 
                            class="font-normal text-base leading-6">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual week on Monday, Wednesday and Saturday. Virtual week on...
                            </p>
                        </div>

                        <div class="h-[10%] flex flex-row justify-between items-center mb-4">
                            <div class="flex items-center justify-start w-1/2 p-3">
                                <img 
                                src="{{ asset('assets/pics/journal/user.png') }}"
                                class="w-5 h-5 mr-2"
                                alt="">
                                <h3 class="font-semibold">Only You</h3>
                            </div>
                            <div class="flex items-center justify-start w-1/2 p-3">
                                <img 
                                src="{{ asset('assets/pics/journal/calendar.png') }}"
                                class="w-5 h-5 mr-2"
                                alt="">
                                <h3 class="font-semibold">26 Mars </h3>
                            </div>
                        </div>
                    </div>
                    <!-- End First Card -->
                    
                    <!-- Start Second Card -->  
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End Second Card -->
                    
                    <!-- Start Third Card -->   
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End Third Card -->
                    
                    <!-- Start First Card -->   
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End First Card -->
                    
                    <!-- Start Second Card -->  
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End Second Card -->
                    
                    <!-- Start Third Card -->   
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End Third Card -->
                    
                    <!-- Start First Card -->   
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End First Card -->
                    
                    <!-- Start Second Card -->  
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End Second Card -->
                    
                    <!-- Start Third Card -->   
                    <div class="flex flex-col px-1 my-7 w-full xl:mb-0 xl:w-[31%] h-80 rounded-xl border border-solid shadow-xl hover:bg-slate-400 transition duration-200 ease-in-out">
                        <div class="flex justify-between items-center h-[20%] w-full py-12 px-3">
                            <img 
                            class="w-12 h-12 border border-solid border-black p-1 rounded-xl"
                            src="{{ asset('assets/pics/journal/icon-1.png') }}" 
                            alt="">

                            <div class="flex flex-row-reverse w-1/4 justify-between">
                                <button>
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>

                                <button onclick="toggleHearth()">
                                    <i class="fa-regular fa-heart hover:text-red-600" id="hearth-btn"></i>
                                </button>
                            </div>
                            
                        </div>

                        <div class="h-[80%] w-full px-3">
                            <h1 
                            class="mb-2" style="font-weight: 500; line-height: 1; font-size: 1.44em;"> 03.26.24 </h1>
                            <p 
                            class="font-normal text-base leading-6"
                            style="text-align: justify">
                                Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday. Virtual...
                            </p>
                        </div>
                    </div>
                    <!-- End Third Card -->
                </div>
            </div>
            <!-- End Journal Cards -->
        </div>
        <!-- End Journal Container -->
    </div>

    <script>
        function toggleHearth() {
            const hearthBtn = document.getElementById('hearth-btn');
            hearthBtn.classList.toggle("fa-solid");
            hearthBtn.classList.toggle("fa-regular");
            hearthBtn.style.textColor = "Red";
        }
    </script>
</body>
</html>