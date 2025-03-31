<?php ?>

<section id="home" class="min-h-screen flex items-center justify-center pt-20 px-4">
    <div class="max-w-screen-2xl p-4 mx-auto flex flex-col lg:grid lg:grid-cols-14 lg:gap-4 gap-0">
        <!-- First Column -->
        <div class="col-span-1 order-1 lg:order-none">
            <div class="relative flex flex-row h-full">
                <div class="lg:pr-4 lg:pt-16 flex flex-col items-center justify-center lg:gap-8 gap-6 py-16 lg:h-full lg:w-full">
                    <a href="https://www.linkedin.com/in/fritz-jerome-tobes-a13127263/" class="transition-all">
                        <i class="uil uil-linkedin-alt lg:text-2xl sm:text-lg text-[#5D4B9D] hover:text-[#3F336A]"></i>
                    </a>
                    <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" class="transition-all">
                        <i class="uil uil-facebook lg:text-2xl sm:text-lg text-[#5D4B9D] hover:text-[#3F336A]"></i>
                    </a>
                    <a href="https://github.com/Genoss21" class="transition-all">
                        <i class="uil uil-github-alt lg:text-2xl sm:text-lg text-[#5D4B9D] hover:text-[#3F336A]"></i>
                    </a>
                </div>
                <div class="sm:hidden absolute top-0 left-[75px] w-[250px] h-auto justify-center item one">
                    <img src="../assets/img/Pic1.jpg" alt="" class="object-cover w-[90%] h-auto">
                </div>
            </div>
        </div> <!-- Missing closing div added here -->

        <!-- Columns 2 to 6 -->
        <div class="col-span-5 order-3 lg:order-none lg:pl-10 pl-0">
            <div class="mr-auto place-self-center lg:flex flex-col">
                <div class="max-w-2xl relative flex-row justify-center lg:py-16 py-0">
                    <h1 class="lg:text-6xl md:text-4xl text-3xl font-semibold tracking-tight leading-none text-[#171824] dark:text-white">
                        Hi, I am Fritz
                    </h1>
                    <h1 class="lg:text-6xl md:text-4xl text-3xl mb-6 font-semibold text-gray-500 lg:mb-6 dark:text-gray-400">
                        Software Quality Assurance Engineer/ Web Developer
                    </h1>
                    <p class="mb-6 font-light text-gray-500 lg:mb-6 dark:text-gray-400 lg:text-base text-sm">
                        Intermediate skills in web development and quality assurance are backed by a strong understanding of essential concepts and extensive hands-on experience.
                    </p>
                    <button id="scrollToContact" class="inline-flex items-center justify-center px-5 py-3 mb-6 text-base text-center text-white dark:text-white rounded-lg bg-[#5D4B9D] hover:bg-[#3F336A] focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900 transition-all duration-300">
                        <span class="text-base pr-2">Contact me</span>
                        <i class="uil uil-message"></i>
                    </button>
                    <div class="flex flex-wrap gap-2 lg:text-base text-sm">
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">UI/UX Design</p>
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">Web Development</p>
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">Automation Testing</p>
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">C programming</p>
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">WinsAMS</p>
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">Hew</p>
                        <p class="lg:px-4 lg:py-2 px-3 py-1 border border-gray-500 text-[#171824] dark:text-white rounded-lg font-light transform hover:-translate-y-1 duration-300">Unit Testing</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="hidden lg:flex absolute bottom-24 left-[300px] transform">
            <button id="scrollToAbout" class="inline-flex items-center justify-center font-medium text-center text-gray-900 dark:text-white scroll-smooth transform hover:translate-y-2 duration-300">
                <i class="uil uil-mouse-alt text-2xl pr-1 text-[#5D4B9D]"></i>
                <span class="text-base">Scroll down</span>
                <i class="uil uil-arrow-down text-2xl pl-1 text-[#5D4B9D]"></i>
            </button>
        </div>

        <!-- Columns 9 to 13 -->
        <div class="col-span-5 col-start-9 order-2 lg:order-none flex justify-center items-center hidden sm:flex">
            <div id="fade-in-element" class="lg:flex item one opacity-0 scale-90 transition-all duration-1000 ease-in-out">
                <img src="../assets/img/Pic1.jpg" alt="" class="object-cover shadow-2xl">
            </div>
        </div>
    </div>
</section>
