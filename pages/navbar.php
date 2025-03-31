<?php ?>

<header class="sticky top-0 bg-[#F3F4F6] dark:bg-[#171824] z-30 -mb-20">
    <div class="w-full"> <!-- Added missing div -->
        <nav class="w-full"> 
            <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4 lg:border-none border-t-[0.5px]">
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-[#171824] dark:text-white">Fritz Jerome</span>
                </a>
                <div class="flex gap-2">
                    <ul class="hidden lg:flex flex-row font-normal text-white gap-7 text-center justify-center items-center list-none">
                        <li><a href="#home" class="nav-link text-gray-500 dark:text-white hover:text-[#3F336A] dark:hover:text-[#5D4B9D]">Home</a></li>
                        <li><a href="#about" class="nav-link text-gray-500 dark:text-white hover:text-[#3F336A] dark:hover:text-[#5D4B9D]">About</a></li>
                        <li><a href="#skills" class="nav-link text-gray-500 dark:text-white hover:text-[#3F336A] dark:hover:text-[#5D4B9D]">Skills</a></li>
                        <li><a href="#services" class="nav-link text-gray-500 dark:text-white hover:text-[#3F336A] dark:hover:text-[#5D4B9D]">Services</a></li>
                        <li><a href="#portfolio" class="nav-link text-gray-500 dark:text-white hover:text-[#3F336A] dark:hover:text-[#5D4B9D]">Portfolio</a></li>
                        <li><a href="#contact" class="nav-link text-gray-500 dark:text-white hover:text-[#3F336A] dark:hover:text-[#5D4B9D]">Contact me</a></li>
                    </ul>

                    <div class="flex items-center gap-2">
                        <div class="flex">
                            <button id="enable-dark" type="button" class="block dark:hidden hs-dark-mode font-medium text-gray-500 rounded-full hover:text-[#211A37]" data-hs-theme-click-value="dark">
                                <span class="group inline-flex shrink-0 justify-center items-center w-9 h-9">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                                    </svg>
                                </span>
                            </button>

                            <button id="disable-dark" type="button" class="hidden dark:block hs-dark-mode font-medium text-gray-400 rounded-full hover:text-[#5D4B9D]" data-hs-theme-click-value="light">
                                <span class="group inline-flex shrink-0 justify-center items-center w-9 h-9">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M12 2v2"></path>
                                        <path d="M12 20v2"></path>
                                        <path d="m4.93 4.93 1.41 1.41"></path>
                                        <path d="m17.66 17.66 1.41 1.41"></path>
                                        <path d="M2 12h2"></path>
                                        <path d="M20 12h2"></path>
                                        <path d="m6.34 17.66-1.41 1.41"></path>
                                        <path d="m19.07 4.93-1.41 1.41"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>

                        <button onclick="toggleModal()" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <i class="uil uil-apps text-2xl sm:text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </div> <!-- Closing the added div -->

    <div id="default-modal" class="hidden fixed bottom-0 left-0 right-0 z-50 w-full max-h-[400px] transition-transform transform translate-y-full duration-300 ease-in-out">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="modal relative bg-[#F3F4F6] dark:bg-[#171824] rounded-t-lg border-t-2 border-gray-200">
                <div class="py-4 md:p-5 space-y-4">
                    <ul class="grid grid-cols-3 text-gray-500 dark:text-white">
                        <li class="flex flex-col items-center p-4">
                            <a href="#home" class="flex flex-col items-center">
                                <i class="uil uil-estate mb-2 text-xl font-thin"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="flex flex-col items-center p-4">
                            <a href="#about" class="flex flex-col items-center">
                                <i class="uil uil-user mb-2 text-xl font-thin"></i>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="flex flex-col items-center p-4">
                            <a href="#skills" class="flex flex-col items-center">
                                <i class="uil uil-file-alt mb-2 text-xl font-thin"></i>
                                <span>Skills</span>
                            </a>
                        </li>
                        <li class="flex flex-col items-center p-4">
                            <a href="#services" class="flex flex-col items-center">
                                <i class="uil uil-briefcase-alt mb-2 text-xl font-thin"></i>
                                <span>Services</span>
                            </a>
                        </li>
                        <li class="flex flex-col items-center p-4">
                            <a href="#portfolio" class="flex flex-col items-center">
                                <i class="uil uil-scenery mb-2 text-xl font-thin"></i>
                                <span>Portfolio</span>
                            </a>
                        </li>
                        <li class="flex flex-col items-center p-4">
                            <a href="#contact" class="flex flex-col items-center">
                                <i class="uil uil-message mb-2 text-xl font-thin"></i>
                                <span>Contact me</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex items-center justify-between p-4 md:p-5 border-b border-gray-200">
                    <button onclick="toggleModal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-[#171824] rounded-lg w-8 h-8 ms-auto inline-flex justify-center items-center transition-transform transform active:scale-90 duration-300 ease-in-out">
                        <i class="uil uil-times text-2xl sm:text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
