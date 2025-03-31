<?php ?>

        <section id="" class="min-h-screen flex flex-col items-center justify-center pt-[72px] px-4">
            <div class="text-center w-full lg:py-16 py-8">
                <h1 class="lg:mb-6 mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white ">
                    Testimonials
                </h1>
                <p class="text-base font-light text-gray-500 lg:text-xl dark:text-gray-400">
                    My client saying
                </p>
            </div>
            <!-- Outer container using full viewport height and width -->
            <div class="flex-grow">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:w-[1200px] w-full p-4 md:p-14 gap-3 md:gap-4 mx-auto">
                    <!-- Left Column: Tab Links -->
                    <div class="lg:h-[350px] h-[300px] flex flex-col">
                        <ul class="space-y-[18px] lg:flex-grow flex-row">
                            <li>
                                <a href="#" class="tab-link w-full flex flex-col lg:p-4 p-2 rounded-lg text-gray-700 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" data-tab="profile">
                                    <div class="flex items-center mb-2">
                                        <img class="w-10 h-10 rounded-full" src="../assets/img/user.jpg" alt="Profile">
                                        <p class="text-lg md:text-xl font-medium ml-2.5">Client 1</p>
                                    </div>
                                    <div class="text-sm md:text-base text-gray-500 dark:text-gray-400">Web development</div>
                                </a>                                
                            </li>
                            <li>
                                <a href="#" class="tab-link w-full flex flex-col lg:p-4 p-2 rounded-lg text-gray-700 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" data-tab="dashboard">
                                    <div class="flex items-center mb-2">
                                        <img class="w-10 h-10 rounded-full" src="../assets/img/user.jpg" alt="Dashboard">
                                        <p class="text-lg md:text-xl font-medium ml-2.5">Client 2</p>
                                    </div>
                                    <div class="text-sm md:text-base text-gray-500 dark:text-gray-400">UI/UX Design</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tab-link w-full flex flex-col lg:p-4 p-2 rounded-lg text-gray-700 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" data-tab="settings">
                                    <div class="flex items-center mb-2">
                                        <img class="w-10 h-10 rounded-full" src="../assets/img/user.jpg" alt="Settings">
                                        <p class="text-lg md:text-xl font-medium ml-2.5">Client 3</p>
                                    </div>
                                    <div class="text-sm md:text-base text-gray-500 dark:text-gray-400">Web development</div>
                                </a>
                            </li>
                        </ul>
                        <div class="pt-4">
                            <a href="#" class="p-2 lg:p-8">View other 5 testimonials <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Right Column: Tab Content (Spanning 2 Columns) -->
                    <div class="h-auto md:h-[350px] md:col-span-2 lg:mt-0 mt-10">
                        <div id="tab-content" class="h-[300px] lg:h-full w-full bg-[#F3F4F6] dark:bg-gray-800 rounded-lg p-4 overflow-auto shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>  