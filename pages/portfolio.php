<?php ?>

        <section id="portfolio" class="min-h-screen flex flex-col items-center justify-center pt-[72px] px-4">
            <div class="text-center w-full lg:py-16 py-8">
                <h1 class="lg:mb-6 mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Portfolio
                </h1>
                <p class="text-base font-light text-gray-500 lg:text-xl dark:text-gray-400">
                    My recent work
                </p>
            </div>
            <div class="flex-grow w-full max-w-7xl mx-auto">
                <!-- Carousel -->
                <div id="default-carousel" class="relative w-full h-full z-10" data-carousel="static">
                    <div class="flex flex-row lg:gap-8 gap-3">
                        <!-- Slider controls -->
                        <div class="flex justify-center items-center"> 
                            <button type="button" class="p-4 bg-gray-200 hover:bg-[#5D4B9D]/50 dark:bg-gray-800/30 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800 rounded-full" data-carousel-prev>
                                <svg class="lg:w-6 lg:h-6 w-3 h-3 text-[#5D4B9D]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                        </div>
                    
                        <!-- Carousel wrapper -->
                        <div class="flex-grow overflow-hidden relative w-full lg:h-96 h-[500px] rounded-lg">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-full items-center justify-center" data-carousel-item>
                                <div class="flex lg:flex-row flex-col w-full h-full items-center justify-center lg:space-x-4 space-x-0">
                                    <!-- Image Section (Larger) -->
                                    <div class="lg:w-[50%] w-full h-auto lg:p-4 py-16 transform transition-transform duration-300 hover:scale-110 z-10">
                                        <img src="../assets/img/E-portfolio.jpg"
                                            class="w-full h-full object-contain rounded-lg drop-shadow-lg" alt="First Slide">
                                    </div>

                                    <!-- Text Section (Smaller) -->
                                    <div class="flex flex-col lg:w-[50%] w-full h-full items-start justify-between lg:px-4 lg:py-16 p-0">
                                        <div class="">
                                            <h1 class="lg:text-xl text-sm font-semibold text-[#171824] dark:text-white">
                                                Personal Website
                                            </h1>
                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400">Author</p>

                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400 pt-4">
                                                My portfolio: I created this website to enhance my skills in Tailwindcss, practice making a responsive website, and display my profile.
                                            </p>
                                        </div>
                                        
                                        <div class="flex justify-between items-center w-full">
                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400">
                                                JavaScript, Tailwindcss
                                            </p>

                                            <a href="https://github.com/Genoss21" target="_blank" class="inline-flex items-center justify-center text-[#5D4B9D] rounded-lg hover:text-[#3F336A]">
                                                <i class="uil uil-github text-3xl transition-colors duration-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-full items-center justify-center" data-carousel-item>
                                <div class="flex lg:flex-row flex-col w-full h-full items-center justify-center lg:space-x-4 space-x-0">
                                    <!-- Image Section (Larger) -->
                                    <div class="lg:w-[50%] w-full h-auto lg:p-4 py-16 transform transition-transform duration-300 hover:scale-110 z-10">
                                        <img src="../assets/img/Twitter_clone.jpg"
                                            class="w-full h-full object-contain rounded-lg drop-shadow-lg" alt="First Slide">
                                    </div>

                                    <!-- Text Section (Smaller) -->
                                    <div class="flex flex-col lg:w-[50%] w-full h-full items-start justify-between lg:px-4 lg:py-16 p-0">
                                        <div class="">
                                            <h1 class="lg:text-xl text-sm font-semibold text-[#171824] dark:text-white">
                                                Twitter Clone
                                            </h1>
                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400">Author</p>

                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400 pt-4">
                                                A social networking site where users share short messages called tweets. These tweets may include text, videos, photos, or links.
                                            </p>
                                        </div>
                                        
                                        <div class="flex justify-between items-center w-full">
                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400">
                                                PHP, Tailwindcss
                                            </p>

                                            <a href="https://github.com/Genoss21" target="_blank" class="inline-flex items-center justify-center text-[#5D4B9D] rounded-lg hover:text-[#3F336A]">
                                                <i class="uil uil-github text-3xl transition-colors duration-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-full items-center justify-center" data-carousel-item>
                                <div class="flex lg:flex-row flex-col w-full h-full items-center justify-center lg:space-x-4 space-x-0">
                                    <!-- Image Section (Larger) -->
                                    <div class="lg:w-[50%] w-full h-auto lg:p-4 py-16 transform transition-transform duration-300 hover:scale-110 z-10">
                                        <img src="../assets/img/WFH_DTR.jpg"
                                            class="w-full h-full object-contain rounded-2xl drop-shadow-lg" alt="First Slide">
                                    </div>

                                    <!-- Text Section (Smaller) -->
                                    <div class="flex flex-col lg:w-[50%] w-full h-full items-start justify-between lg:px-4 lg:py-16 p-0">
                                        <div class="">
                                            <h1 class="lg:text-xl text-sm font-semibold text-[#171824] dark:text-white">
                                                Attendance Monitoring System for WFH 
                                            </h1>
                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400">Author</p>

                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400 pt-4">
                                                A web-based attendance system tracks remote employees' work hours by recording their log-in and log-out times. It offers real-time reports and allows leave requests, making it user-friendly and supporting trust and productivity in remote work.
                                            </p>
                                        </div>
                                        
                                        <div class="flex justify-between items-center w-full">
                                            <p class="lg:text-base text-sm text-gray-500 dark:text-gray-400">
                                                Tailwindcss, JavaScript
                                            </p>

                                            <a href="https://github.com/Genoss21" target="_blank" class="inline-flex items-center justify-center text-[#5D4B9D] rounded-lg hover:text-[#3F336A]">
                                                <i class="uil uil-github text-3xl transition-colors duration-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center items-center">
                            <button type="button" class=" p-4 bg-gray-200 hover:bg-[#5D4B9D]/50 dark:bg-gray-800/30 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800 rounded-full" data-carousel-next>
                                <svg class="lg:w-6 lg:h-6 w-3 h-3 text-[#5D4B9D]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Slider indicators -->
                    <div class="flex space-x-3 lg:p-8 p-4 justify-center items-center">
                        <button type="button" class="w-3 h-3 rounded-full bg-gray-400" aria-current="false" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-gray-400" aria-current="false" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-gray-400" aria-current="false" data-carousel-slide-to="2"></button>
                    </div>
                </div>
            </div>
        </section>