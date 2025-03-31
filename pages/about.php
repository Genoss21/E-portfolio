<?php ?>

<section id="about" class="min-h-screen flex flex-col items-center justify-center pt-[72px] scroll-smooth px-4">
    <div class="text-center w-full lg:py-16 py-8">
        <h1 class="lg:mb-6 mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            About Me
        </h1>
        <p class="text-base font-light text-gray-500 lg:text-xl dark:text-gray-400">
            My Introduction
        </p>
    </div>
    
    <div class="flex-grow">
        <div class="grid lg:grid-cols-2 items-center max-w-screen-xl lg:py-8 py-0">
            <!-- Image Section -->
            <div class="flex justify-center">
                <img src="../assets/img/Pic2.jpg" alt="mockup" class="rounded-lg shadow-2xl w-[50%] lg:w-[70%] lg:mb-0 mb-6 transform transition-transform duration-300 hover:scale-105 hover:rotate-6">
            </div>

            <!-- Text and Stats Section -->
            <div class="text-gray-500 dark:text-gray-400 text-center lg:text-left lg:px-24 px-4 flex flex-col justify-center">
                <p class="mb-6 font-light text-sm lg:text-base">
                    I am a dedicated Software Quality Assurance Engineer with experience in testing embedded automotive technologies, ensuring high-quality results through analysis and attention to detail.
                </p>
                <p class="mb-6 font-light text-sm lg:text-base">
                    As a Web Developer, I specialize in UI/UX design, API integration, and responsive design. I thrive in independent or team environments to create user-friendly web applications and stay updated on the latest technologies.
                </p>

                <div class="grid grid-cols-3 gap-4 text-gray-900 dark:text-gray-400 text-center mb-6">
                    <div>
                        <h1 class="text-2xl lg:text-4xl font-semibold">2</h1>
                        <p class="text-sm lg:text-base font-light">Years <br>Experience</p>
                    </div>
                    <div>
                        <h1 class="text-2xl lg:text-4xl font-semibold">20+</h1>
                        <p class="text-sm lg:text-base font-light">Completed Projects</p>
                    </div>
                    <div>
                        <h1 class="text-2xl lg:text-4xl font-semibold">2</h1>
                        <p class="text-sm lg:text-base font-light">Companies Worked</p>
                    </div>
                </div>

                <div class="flex justify-center lg:justify-start animate-bounce lg:pt-2">
                    <button class="inline-flex items-center justify-center px-5 py-3 text-white dark:text-white rounded-lg bg-[#5D4B9D] hover:bg-[#211A37] focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900 transition-all duration-300">
                        <span class="pr-2">Download CV</span>
                        <i class="uil uil-download-alt"></i>
                    </button>
                </div>
            </div>
        </div> 
    </div> 
</section>
