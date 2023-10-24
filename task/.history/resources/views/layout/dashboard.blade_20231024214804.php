<!DOCTYPE html> <html> <head>
<title>Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
    }

    #toggle-switch:checked+.relative .rounded-full {
        transform: translate-x-full;
    }

    .none {
        transition: all 1s;
        display: none;
    }
</style>

<body class="overflow-x-hidden">
    <section>
        <nav class="w-screen bg-gray-100">
            <div class=" flex justify-end items-center relative p-2">
                <div
                    class="lg:w-[20%] md:w-[30%] sm:w-[40%]  md:block  bg-gray-100 flex justify-center items-center absolute md:left-0 top-0 sm:-left-[100%]  z-10  navsidebar-toggle">
                    <!-- side bar  -->



                    <div class="w-full  flex justify-center items-center border-r border-r-gray-200 py-3">
                        <!-- brand  -->
                        <div class="text-blue-500 font-bold">
                            <span class="text-3xl"> Admin</span>
                            <p class="indent-4">Dashboard</p>
                        </div>

                    </div>

                </div>




                <div class="lg:w-[80%] md:w-[70%] sm:w-full p-3 pl-3 flex justify-between items-center  navbarwidth">

                    <div class="flex justify-center items-center ml-4 md:ml-0">
                        <div
                            class="w-10 h-10 flex justify-center items-center flex-col rounded-full bg-gray-200 navsidebar-expendbtn">
                            <div>
                                <div class="w-4 h-1 border border-gray-500 rounded mb-[2px]"></div>
                                <div class="w-5 h-1 border border-gray-500 rounded mb-[2px]"></div>
                                <div class="w-3 h-1 border border-gray-500 rounded "></div>
                            </div>
                        </div>
                        <form action="" method="post">
                            <div class="relative ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 absolute left-2 top-[10px] text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>

                                <input type="search"
                                    class="w-52 bg-gray-200 rounded-md outline-none focus:ring-2 focus:ring-blue-500 pl-10 py-2 px-1"
                                    placeholder="Search...">
                            </div>

                        </form>
                    </div>

                    <div class="md:mr-10 sm:mr-0 flex justify-center items-center">
                        <div
                            class="w-16 bg-gray-200 text-gray-600 rounded-lg flex justify-center items-center hidden md:flex cursor-pointer hover:bg-gray-300  py-2 mr-3 setting-btn ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-2 mr-1 text-blue-600">3</span>
                        </div>


                        <div
                            class="w-16 bg-gray-200 text-gray-600 rounded-lg flex justify-center items-center cursor-pointer hover:bg-gray-300 py-2 mr-3 nav-toggle-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>

                            <span class="ml-2 mr-1 text-blue-600">3</span>
                        </div>


                        <div class="flex justify-center items-center mr-3">
                            <div class="w-10 h-10 flex justify-center items-center flex-col rounded-full bg-gray-200">
                                <img src="" alt="">
                            </div>
                            <div class="flex justify-center items-center ml-1 nav-toggle-item">
                                <span class="text-blue-600 cursor-pointer">James Luwis</span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-4 h-4 text-blue-600 mt-1 font-semibold">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </div>
                        </div>

                        <div>

                        </div>
                    </div>








                </div>



            </div>


        </nav>

        <!-- notification modal  -->
        <div class="" hidden>
            <div class="w-64 bg-gray-100 border rounded shadow-lg absolute right-5 md:right-52 top-20 z-20 mt-1 modal">
                <div class="text-gray-700 flex justify-center items-center flex-col pb-3">
                    <div class="w-full flex justify-center items-center border-b border-b-gray-200">
                        <div class="p-3">
                            <a href="" class="text-xl text-blue-600 capitalize">notifications</a>

                        </div>
                    </div>

                    <div class="py-4">
                        <div class="flex  items-center self-start pb-4">
                            <div class="w-12 h-12 flex justify-center items-center bg-blue-100 text-blue-500 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                                </svg>


                            </div>

                            <span class="">
                                <span class="block">John's birthday.</span>
                                <span class="text-xs">12 Feb 2023, 3:33 PM</span>
                            </span>
                        </div>

                        <div class="flex justify- items-center self-start mb-3">
                            <div class="w-12 h-12 flex justify-center items-center bg-green-100  text-green-500 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>


                            </div>

                            <span class="">
                                <span class="block">New trend for you.</span>
                                <span class="text-xs">12 Feb 2023, 3:33 PM</span>
                            </span>
                        </div>

                        <div class=" flex justify- items-center self-start pb-4">
                            <div class="w-12 h-12 flex justify-center items-center bg-red-100 text-red-500 mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>

                            </div>

                            <span class="">
                                <span class="block">Admin has new like.</span>
                                <span class="text-xs">12 Feb 2023, 3:33 PM</span>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- useraccount modal  -->
        <div class="" hidden>
            <div class="w-52 bg-gray-100 border rounded shadow-lg absolute right-5 md:right-12 top-20 z-20 mt-1 modal">
                <div class=" flex justify-center items-center flex-col px-1 pb-3">
                    <div class="w-full flex justify-center items-center border-b border-b-gray-200 mb-4">
                        <div class="p-3">
                            <a href="" class="text-xl text-blue-600 capitalize">James Luwis</a>

                        </div>
                    </div>
                    <div class="text-gray-700 flex justify-center items-center self-start px-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>

                        <a href="" class="ml-4">My Account</a>
                    </div>

                    <div class="text-gray-700 flex justify-center items-center self-start px-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>


                        <a href="" class="ml-4">Email</a>
                    </div>

                    <div class="text-gray-700 flex justify-center items-center self-start px-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                        </svg>


                        <a href="" class="ml-4">Log Out</a>
                    </div>



                    <div id="" class="text-gray-700 flex justify-center items-center self-start px-3 pb-4 setting-btn">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>


                        <button class="ml-4">Setting</button>
                    </div>



                </div>
            </div>
        </div>


        <!-- setting modal  -->

        <div class=" modal flex justify-center items-center  ">

            <div
                class="w-full h-full bg-[linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5))] fixed left-0 top-0 z-20 modal-dialog none">
            </div>

            <div
                class="w-[450px] h-full bg-gray-100  transition-all duration-200 fixed z-20 -right-[100%] top-0 modal-body">

                <div class="w-full flex items-center border-b border-b-gray-200   pl-10 pr-4  py-5 ">
                    <div class="w-full  flex justify-between items-center">
                        <h3 class="text-xl text-blue-700">Settings</h3>
                        <div
                            class="w-12 h-12 flex justify-center items-center flex-col rounded-full hover:border-2 hover:border-gray-300 setting-x">
                            <div class="w-8 h-2 border-2 border-gray-400 transform rotate-45 translate-y-1"></div>
                            <div class="w-8 h-2 border-2 border-gray-400 transform -rotate-45 -translate-y-1"></div>
                        </div>
                    </div>
                </div>


                <div>
                    <div class=" pl-10 pr-4  py-5">
                        <ul>
                            <li class=" flex justify-between items-center mb-4">
                                <span class="">New order notifications</span>
                                <label for="toggle-switch" class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="toggle-switch" class="hidden togglebtn">
                                    <div class="relative w-10 h-5 bg-blue-700 rounded-lg">
                                        <div
                                            class="absolute left-0 w-5 h-5 rounded-full bg-gray-300 drop-shadow-lg transform translate-x-0 transition-transform slide">
                                        </div>
                                    </div>
                                </label>
                            </li>

                            <li class=" flex justify-between items-center mb-4">
                                <span class="">Order Tracking</span>
                                <label for="toggle-switch2" class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="toggle-switch2" class="hidden togglebtn">
                                    <div class="relative w-10 h-5 bg-blue-700 rounded-lg">
                                        <div
                                            class="absolute left-0 w-5 h-5 rounded-full bg-gray-300 drop-shadow-lg transform translate-x-0 transition-transform slide">
                                        </div>
                                    </div>
                                </label>
                            </li>



                            <li class=" flex justify-between items-center mb-4">
                                <span class="">Show Review</span>
                                <label for="toggle-switch3" class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="toggle-switch3" class="hidden togglebtn">
                                    <div class="relative w-10 h-5 bg-blue-700 rounded-lg">
                                        <div
                                            class="absolute left-0 w-5 h-5 rounded-full bg-stone-100 drop-shadow-lg transform translate-x-0 transition-transform slide">
                                        </div>
                                    </div>
                                </label>
                            </li>



                        </ul>
                    </div>
                </div>


                <!-- account  -->
                <div class="pl-10 pr-4 mt-4">
                    <div class="text-gray-600 mb-10">
                        <span class="text-lg">Select Account</span>
                    </div>
                    <div class="flex flex-wrap justify-between">
                        <div
                            class="w-40 h-40 bg-blue-700 rounded-md group flex flex-col justify-center items-center  mb-16">
                            <div class="flex justify-center items-center flex-col space-y-2">
                                <div class="w-12 h-12 bg-gray-100 rounded-full mb-2">
                                    <img src="" alt="">
                                </div>
                                <span class="text-white text-lg cursor-pointer">John Luwis</span>

                            </div>
                            <span class="text-sm text-white cursor-pointer">Admin</span>
                        </div>

                        <div
                            class="w-40 h-40 bg-gray-300 rounded-md group hover:bg-blue-700 flex flex-col justify-center items-center  mb-16">
                            <div class="flex justify-center items-center flex-col space-y-2">
                                <div class="w-12 h-12 bg-gray-100 rounded-full mb-2">
                                    <img src="" alt="">
                                </div>
                                <span class=" text-black group-hover:text-white text-lg cursor-pointer">John Luwis</span>

                            </div>
                            <span class="text-sm text-gray-600  text-semibold  group-hover:text-white cursor-pointer">Admin</span>
                        </div>


                        <div
                            class="w-40 h-40 bg-gray-300 rounded-md group hover:bg-blue-700 flex flex-col justify-center items-center  mb-16">
                            <div class="flex justify-center items-center flex-col space-y-2">
                                <div class="w-12 h-12 bg-gray-100 rounded-full mb-2">
                                    <img src="" alt="">
                                </div>

                                <span class=" text-black group-hover:text-white text-lg cursor-pointer">John Luwis</span>
                            </div>
                            <span class="text-sm text-gray-600  text-semibold  group-hover:text-white cursor-pointer">Admin</span>
                        </div>


                        <div
                            class="w-40 h-40 bg-gray-300 rounded-md group hover:bg-blue-700 flex flex-col justify-center items-center ">
                            <div class="flex justify-center items-center flex-col space-y-2">
                                <div
                                    class="w-12 h-12  group-hover:bg-stone-100 flex justify-center items-center flex-col rounded-full  bg-100 mb-2">
                                    <div
                                        class="w-8 h-2 border-2 border-slate-500 group-hover:border-gray-500 transform rotate-90 translate-y-1">
                                    </div>
                                    <div
                                        class="w-8 h-2 border-2 border-slate-500 group-hover:border-gray-500 transform -rotate-180 -translate-y-1">
                                    </div>
                                </div>

                                <span class=" text-black group-hover:text-white text-lg cursor-pointer">Add</span>
                            </div>
                            <span class="text-sm text-gray-600  text-semibold  group-hover:text-white cursor-pointer">Account</span>

                        </div>

                    </div>

                </div>

            </div>


        </div>




    </section>


    <div>


        <main>
            <div class="">
                <nav class="w-screen ">



                    <div class=" flex justify-end items-center relative  ">
                        <div
                            class="lg:w-[20%] md:w-[30%] sm:w-[40%]  md:block  bg-gray-100 flex justify-center items-center absolute md:left-0 top-0 sm:-left-[100%] z-10  navsidebar-toggle">



                            <!-- side bar  -->
                            <div
                                class="w-full min-h-[101vh] flex justify-start items-start  border-t border-t-gray-200 ">
                                <!-- brand  -->
                                <div class="w-full text-black ">
                                    <div class="w-full list-none space-y-3 text-md capitalize mt-5">


                                        <li class="w-full pl-2  flex  items-center group py-2 ">
                                            <div class="px-3">
                                                <a href="#" class="flex justify-start items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 text-gray-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                                    </svg>

                                                    <span class="ml-4 group-hover:text-gray-400"> Product List </span>
                                                </a>
                                            </div>
                                        </li>



                                        <li class="w-full pl-2 flex  items-center group py-2">
                                            <div class="px-3">
                                                <a href="#" class="flex justify-start items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 text-gray-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                                    </svg>



                                                    <span class="ml-4 group-hover:text-gray-400"> Product Details
                                                    </span>
                                                </a>
                                            </div>
                                        </li>





                                        <li class="w-full pl-2   flex  items-center group py-2">
                                            <div class="px-3">
                                                <a href="#" class="flex justify-start items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 text-gray-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                                    </svg>


                                                    <span class="ml-4 group-hover:text-gray-400"> Order List </span>
                                                </a>
                                            </div>
                                        </li>


                                        <li class="w-full pl-2   flex  items-center group py-2">
                                            <div class="px-3">
                                                <a href="#" class="flex justify-start items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 text-gray-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                                                    </svg>


                                                    <span class="ml-4 group-hover:text-gray-400"> Order Details </span>
                                                </a>
                                            </div>
                                        </li>



                                    </div>
                                </div>

                            </div>

                            <div
                                class="w-[59%] h-[100vh] bg-[linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5))] fixed right-0 top-0 z-10 modaldialog none ">
                            </div>

                        </div>
                        <div class="lg:w-[80%] md:w-[70%] sm:w-full  navbarwidth ">


                            @yield('banner')


                            <!-- footer  -->
                            <footer class="w-full bg-gray-100 text-black text-center p-3 mt-9">
                                <div class="text-black">
                                    2023 &copy; All right deserve.
                                </div>

                            </footer>




                        </div>

                    </div>


                </nav>
            </div>
        </main>




    </div>




    <style>
        .setting-effect {
            transition: all .5s;
            right: 0;
        }

        .setting-effect-x {
            transition: all .2s;
            right: -100%;
        }

        .navsidebar {
            transition: all .5s;
            position: absolute;
            left: -500px;
        }


        .navbar {
            transition: all .5s;
            width: 100%;
        }
    </style>



    <script>
        const navtoggleitem = document.querySelectorAll('.nav-toggle-item');
        const useraccountmodal = document.querySelectorAll('.modal');

        Array.from(navtoggleitem).forEach((ele, idx) => {
            ele.addEventListener('click', function () {
                useraccountmodal[idx].parentElement.toggleAttribute('hidden');


                const otheridx = Array.from(navtoggleitem).map((ele, i) => i).filter(i => i !== idx);

                otheridx.forEach(othidx => {
                    const getAttribute = useraccountmodal[otheridx].parentElement.getAttribute('hidden');

                    if (getAttribute === null) {
                        useraccountmodal[otheridx].parentElement.toggleAttribute('hidden')
                    }

                })
            });
        });

        const modalbody = document.querySelector('.modal-body');
        const modaldialog = document.querySelector('.modal-dialog');

        function toggleModalClasses() {
            modaldialog.classList.toggle('none');
            modalbody.classList.toggle('setting-effect');
        }



        const settingbtn = document.querySelectorAll('.setting-btn');
        settingbtn.forEach(btn => {
            btn.onclick = toggleModalClasses;
        })

        const settingx = document.querySelector('.setting-x');
        settingx.addEventListener('click', toggleModalClasses);




        function toggleopen(idx) {
            const slide = document.querySelectorAll('.slide');

            slide[idx].classList.replace('left-0', 'right-0');
            slide[idx].parentElement.classList.replace('bg-gray-700', 'bg-gray-500');
        }

        function toggleclose(idx) {
            const slide = document.querySelectorAll('.slide');

            slide[idx].classList.replace('right-0', 'left-0');
            slide[idx].parentElement.classList.replace('bg-gray-500', 'bg-gray-700');
        }

        function updatetogglestate(idx, checked) {
            localStorage.setItem(`toggle_${idx}`, JSON.stringify(checked));
        }



        function gettogglestate(idx) {

            const savestate = localStorage.getItem(`toggle_${idx}`);

            if (savestate === "true") {

                toggleopen(idx);
                JSON.parse(savestate)

            } else if (savestate === "false") {
                toggleclose(idx);

                false
            }



        }


        const toggleSwitches = document.querySelectorAll('.togglebtn');

        toggleSwitches.forEach((toggleswitch, idx) => {

            toggleswitch.checked = gettogglestate(idx);

            toggleswitch.addEventListener('change', function () {
                const slide = document.querySelectorAll('.slide');
                if (this.checked) {
                    toggleopen(idx);
                } else {
                    toggleclose(idx);
                }

                updatetogglestate(idx, this.checked);

            });


        });



        const navsidebarexp = document.querySelector('.navsidebar-expendbtn');
        const navbarwidth = document.querySelectorAll('.navbarwidth');
        const navsidebartoggle = document.querySelectorAll('.navsidebar-toggle');
        const modaldialogside = document.querySelector('.modaldialog');


        navsidebarexp.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                for (var i = 0; i < navsidebartoggle.length; i++) {

                    navsidebartoggle[i].classList.replace('sm:-left-[100%]', 'sm:left-0');
                    navbarwidth[i].classList.add('navbar');

                    console.log(navbarwidth)
                    modaldialogside.classList.remove('none');
                }



            } else {
                for (var i = 0; i < navsidebartoggle.length; i++) {


                    navbarwidth[i].classList.toggle('navbar');
                }
                for (var i = 0; i < navsidebartoggle.length; i++) {
                    navsidebartoggle[i].classList.toggle('navsidebar');


                }
            }




        })


        modaldialogside.addEventListener('click', function (event) {
            for (var i = 0; i < navsidebartoggle.length; i++) {


                navsidebartoggle[i].classList.remove('navsidebar')
                navsidebartoggle[i].classList.replace('sm:left-0', 'sm:-left-[100%]');

                event.target.classList.add('none')



            }
        });




    </script>
</body>

</html>