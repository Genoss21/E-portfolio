<?php ?>

<section id="qualification" class="min-h-screen flex flex-col items-center justify-center pt-[72px] px-4">
            <div class="text-center w-full lg:py-16 py-8">
                <h1 class="lg:mb-6 mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white ">
                    Qualification
                </h1>
                <p class="text-base font-light text-gray-500 lg:text-xl dark:text-gray-400">
                    My personal journey
                </p>
            </div>
            <div class="flex-grow w-full max-w-screen-xl mx-auto lg:px-4 px-0">
                <div class="flex-grow max-w-screen-4xl">
                    <div class="sticky top-0 z-20 flex justify-center pb-4">
                        <div class="flex space-x-8">
                            <button id="education-tab" onclick="showTab('education')" class="px-4 py-2 lg:text-2xl text-base text-gray-400 dark:text-gray-400 border-b-2 border-transparent hover:text-[#171824] dark:hover:text-white">
                                <i class="uil uil-graduation-cap pr-2"></i>Education
                            </button>
                            <button id="experience-tab" onclick="showTab('experience')" class="px-4 py-2 lg:text-2xl text-base text-gray-400 dark:text-gray-400 border-b-2 border-transparent hover:text-[#171824] dark:hover:text-white">
                                <i class="uil uil-briefcase-alt pr-2"></i>Experience
                            </button>
                        </div>
                    </div>
                    <div id="timeline-scroll" class="mx-auto h-[600px] overflow-y-auto px-4 scrollbar-hidden cursor-grab active:cursor-grabbing">
                        <div id="education-timeline" class="hidden">
                            <!-- Education Timeline -->
                            <div class="container mx-auto lg:p-4 p-0">
                                <div class="relative wrap overflow-hidden h-full">
                                    <!-- Vertical Line -->
                                    <div class="absolute border-l border-gray-200 dark:border-gray-700 h-full lg:left-1/2 left-7"></div>
    
                                    <!-- Timeline Item 1 (left side) -->
                                    <div class="mb-6 p-4 flex lg:flex-row flex-row-reverse justify-between items-center w-full gap-4 md:gap-0">
                                        <!-- Timeline Content -->
                                        <div class="flex lg:flex-row flex-col justify-baseline items-center bg-gray-50 dark:bg-gray-800 rounded-lg shadow-xl lg:w-5/12 w-4/5 lg:px-6 lg:py-4 p-2 transform transition-transform duration-300 hover:scale-105">
                                            <img class="h-20 w-20 lg:my-0 my-2" src="../assets/img/Jose_Rizal_University_seal.svg.png" alt="">
                                            <div class="flex-row pl-4">
                                                <h1 class="mb-1 lg:text-lg text-base font-semibold text-gray-900 dark:text-white">
                                                    José Rizal University
                                                </h1>
                                                <p class="block mb-2 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    Higher Education, 2021 – 2022
                                                </p>
                                                <p class="lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    Bachelor of Science in Information and Technology (BSIT)
                                                </p>
                                            </div>
                                        </div>
                                    
                                        <!-- Timeline Icon -->
                                        <div class="z-20 flex items-center justify-center bg-[#DCD8EA] dark:bg-[#3F336A] w-6 h-6 rounded-full ring-8 ring-white dark:ring-gray-900">
                                            <svg class="w-2.5 h-2.5 text-[#5D4B9D] dark:text-[#DCD8EA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"></path>
                                            </svg>
                                        </div>
                                    
                                        <!-- Empty block for right side -->
                                        <div class="hidden md:block w-5/12"></div>
                                    </div>
                                    
    
                                    <!-- Timeline Item 2 (right side) -->
                                    <div class="mb-6 p-4 flex justify-between items-center w-full">
                                        <!-- Empty block for left side -->
                                        <div class="hidden md:block w-5/12"></div>
                                        
                                        <!-- Timeline Icon -->
                                        <div class="z-20 flex items-center justify-center bg-[#DCD8EA] dark:bg-[#3F336A] w-6 h-6 rounded-full ring-8 ring-white dark:ring-gray-900">
                                            <svg class="w-2.5 h-2.5 text-[#5D4B9D] dark:text-[#DCD8EA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"></path>
                                            </svg>
                                        </div>
                                        
                                        <!-- Timeline Content -->
                                        <div class="flex lg:flex-row flex-col justify-baseline items-center bg-gray-50 dark:bg-gray-800 rounded-lg shadow-xl lg:w-5/12 w-4/5 lg:px-6 lg:py-4 p-2 transform transition-transform duration-300 hover:scale-105">
                                            <img class="h-20 w-20 lg:my-0 my-2" src="../assets/img/SAIS.jpg" alt="">
                                            <div class="flex-row pl-4">
                                                <h1 class="mb-1 lg:text-lg text-base font-semibold text-gray-900 dark:text-white">
                                                    Sumoroy Agro Industrial School (SAIS)
                                                </h1>
                                                <p class="block mb-2 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    Secondary Education, 2017 - 2018
                                                </p>
                                                <p class="lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    The Humanities and Social Sciences (HUMSS)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Timeline Item 3 (left side) -->
                                    <div class="mb-6 p-4 flex lg:flex-row flex-row-reverse justify-between items-center w-full gap-4 md:gap-0">
                                        <!-- Timeline Content -->
                                        <div class="flex lg:flex-row flex-col justify-baseline items-center bg-gray-50 dark:bg-gray-800 rounded-lg shadow-xl lg:w-5/12 w-4/5 lg:px-6 lg:py-4 p-2 transform transition-transform duration-300 hover:scale-105">
                                            <img class="h-20 w-20 lg:my-0 my-2" src="../assets/img/Central.jpg" alt="">
                                            <div class="flex-row pl-4">
                                                <h1 class="mb-1 lg:text-lg text-base font-semibold text-gray-900 dark:text-white">
                                                    Palapag I Central ES 
                                                </h1>
                                                <p class="block mb-2 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    Primary Education, 2016 - 2012
                                                </p>
                                                <p class="lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Timeline Icon -->
                                        <div class="z-20 flex items-center justify-center bg-[#DCD8EA] dark:bg-[#3F336A] w-6 h-6 rounded-full ring-8 ring-white dark:ring-gray-900">
                                            <svg class="w-2.5 h-2.5 text-[#5D4B9D] dark:text-[#DCD8EA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"></path>
                                            </svg>
                                        </div>
                                        
                                        <!-- Empty block for right side -->
                                        <div class="hidden md:block w-5/12"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="experience-timeline" class="hidden">
                            <div class="container mx-auto lg:p-4 p-0">
                                <div class="relative wrap overflow-hidden h-full">
                                    <!-- Vertical Line -->
                                    <div class="absolute border-l border-gray-200 dark:border-gray-700 h-full lg:left-1/2 left-7"></div>
    
                                     <!-- Timeline Item 1 (right side) -->
                                     <div class="mb-6 p-4 flex justify-between items-center w-full">
                                        <!-- Empty block for left side -->
                                        <div class="hidden md:block w-5/12"></div>
                                        
                                        <!-- Timeline Icon -->
                                        <div class="z-20 flex items-center justify-center bg-[#DCD8EA] dark:bg-[#3F336A] w-6 h-6 rounded-full ring-8 ring-white dark:ring-gray-900">
                                            <svg class="w-2.5 h-2.5 text-[#5D4B9D] dark:text-[#DCD8EA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"></path>
                                            </svg>
                                        </div>
                                        
                                        <!-- Timeline Content -->
                                        <div class="flex lg:flex-row flex-col justify-baseline items-center bg-gray-50 dark:bg-gray-800 rounded-lg shadow-xl lg:w-5/12 w-4/5 lg:px-6 lg:py-4 p-2 transform transition-transform duration-300 hover:scale-105">
                                            <img class="h-6 w-20 lg:my-0 my-4" src="https://www.tsukiden.com.ph/wp-content/uploads/2019/02/tsukiden_logo.png" alt="">
                                            <div class="flex-row pl-4">
                                                <h1 class="mb-1 lg:text-lg text-base font-semibold text-gray-900 dark:text-white">
                                                    Tsukiden Global Solutions, Inc.
                                                </h1>
                                                <p class="block mb-2 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    <i class="uil uil-calender items-center justify-center"></i> 2023 - 2026
                                                </p>
                                                <p class="lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    Software Quality Assurance Engineer.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Timeline Item 2 (left side) -->
                                    <div class="mb-6 p-4 flex lg:flex-row flex-row-reverse justify-between items-center w-full gap-4 md:gap-0">
                                        <!-- Timeline Content -->
                                        <div class="flex lg:flex-row flex-col justify-baseline items-center bg-gray-50 dark:bg-gray-800 rounded-lg shadow-xl lg:w-5/12 w-4/5 lg:px-6 lg:py-4 p-2 transform transition-transform duration-300 hover:scale-105">
                                            <img class="h-20 w-20 lg:my-0 my-2" src="../assets/img/Jose_Rizal_University_seal.svg.png" alt="">
                                            <div class="flex-row pl-4">
                                                <h1 class="mb-1 lg:text-lg text-base font-semibold text-gray-900 dark:text-white">
                                                    José Rizal University
                                                </h1>
                                                <p class="block mb-2 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    <i class="uil uil-calender items-center justify-center"></i> Jan 2023 - March 2023
                                                </p>
                                                <p class="lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    Tech Support
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Timeline Icon -->
                                        <div class="z-20 flex items-center justify-center bg-[#DCD8EA] dark:bg-[#3F336A] w-6 h-6 rounded-full ring-8 ring-white dark:ring-gray-900">
                                            <svg class="w-2.5 h-2.5 text-[#5D4B9D] dark:text-[#DCD8EA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"></path>
                                            </svg>
                                        </div>
                                        
                                        <!-- Empty block for right side -->
                                        <div class="hidden md:block w-5/12"></div>
                                    </div>
    
                                    <!-- Timeline Item 3 (right side) -->
                                    <div class="mb-6 p-4 flex justify-between items-center w-full">
                                        <!-- Empty block for left side -->
                                        <div class="hidden md:block w-5/12"></div>
                                        
                                        <!-- Timeline Icon -->
                                        <div class="z-20 flex items-center justify-center bg-[#DCD8EA] dark:bg-[#3F336A] w-6 h-6 rounded-full ring-8 ring-white dark:ring-gray-900">
                                            <svg class="w-2.5 h-2.5 text-[#5D4B9D] dark:text-[#DCD8EA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"></path>
                                            </svg>
                                        </div>
                                        
                                        <!-- Timeline Content -->
                                        <div class="flex lg:flex-row flex-col justify-baseline items-center bg-gray-50 dark:bg-gray-800 rounded-lg shadow-xl lg:w-5/12 w-4/5 lg:px-6 lg:py-4 p-2 transform transition-transform duration-300 hover:scale-105">
                                            <img class="h-4 w-20 lg:my-0 my-4" src="../assets/img/miyens-logo-black.jpg" alt="">
                                            <div class="flex-row pl-4">
                                                <h1 class="mb-1 lg:text-lg text-base font-semibold text-gray-900 dark:text-white">
                                                    Miyens Technologies(OJT)
                                                </h1>
                                                <p class="block mb-2 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    <i class="uil uil-calender items-center justify-center"></i> 2021 - 2022
                                                </p>
                                                <p class="lg:text-base text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    Web Designer, 360 Environments Creator
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>  
