<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Add custom CSS for the navy background color and typography -->
    <style>
        :root { --accent: #F7C600; }
        .bg-navy-900 { background-color: #0B1120; }
        .bg-navy-800 { background-color: #0F1724; }
        body { font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; }
        .accent { color: var(--accent); }
    </style>
</head>
<body class="bg-navy-900 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Top Left Column with Image -->
                <div class="md:w-1/3 relative pt-4">
                    <div class="aspect-square w-full bg-navy-800 rounded-br-[100px] overflow-hidden">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Right Column with Content -->
            <div class="md:w-2/3 pt-4">
                <h1 class="text-5xl font-bold text-white mb-2">Reynaldo Jr. Domingo</h1>
                <p class="text-yellow-400 text-xl font-medium uppercase tracking-wider mb-8">Full Stack Developer</p>

                <div class="bg-yellow-400 px-4 py-2 inline-block mb-2">
                    <span class="font-semibold uppercase text-md">About Me</span>
                </div>

                <p class="text-gray-300 mb-6 text-lg leading-relaxed">
                      I’m a passionate web developer who enjoys turning ideas into functional and visually appealing digital experiences.
          Skilled in both front-end and back-end development, I focus on creating clean, efficient, and user-friendly systems.
                </p>
            </div>
        </div>
        
        <!-- Bottom Left Column with Content -->
        <div class="flex flex-col md:flex-row items-stretch gap-8">
            <div class="md:w-1/3 relative pt-4">
                <div class="aspect-square w-full bg-navy-800 rounded-tr-[100px] overflow-hidden h-full">
                    <div class="p-6 h-full flex flex-col item-center mx-6">

                        <!-- Contacts -->
                        <h2 class="text-yellow-400 mr-2 flex items-center justify-center text-lg font-semibold uppercase mb-2 border-b border-yellow-400">Contacts</h2>
                        <div class="flex flex-col items-start justify-startS space-y-3 text-gray-300">
                            <div class="flex items-center space-x-3">
                                <!-- email icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a href="mailto:reydoming@gmail.com" class="text-white font-medium hover:text-yellow-400 transition">reydoming@gmail.com</a>
                            </div>
                            <div class="flex items-center space-x-3">
                                <!-- phone icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-yellow-400 flex-shrink-0" viewBox="0 0 24 24" stroke-width="2" aria-hidden="true">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                </svg>
                                <a href="tel:09855259431" class="text-white font-medium hover:text-yellow-400 transition">63+ 9855259431</a>
                            </div>
                            <div class="flex items-start space-x-3">
                                <!-- address icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <a href="" class="text-white font-medium hover:text-yellow-400 transition cursor-pointer">Brgy. 76-A S.I.R Bucana, Talomo, Davao City, Davao Delsur</a>
                            </div>
                        </div>  
                        
                         <!-- Education -->
                        <h2 class="mt-8 flex items-center justify-center text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400">Education</h2>
                        <div class="flex flex-col items-start justify-start space-y-1 text-gray-300">
                            <p class="font-medium text-white">BS Information Technology</p>
                            <p class="text-sm">University of Mindanao</p>
                            <p class="text-sm">2022 – Present</p>
                        </div>
                        <div class="mt-6 flex flex-col items-start justify-start space-y-1 text-gray-300">
                            <p class="font-medium text-start text-white">Science, Technology, Engineering, and Mathematics (STEM) </p>
                            <p class="text-sm">Kidapawan Doctors College Inc.</p>
                            <p class="text-sm">2020 – 2022</p>
                        </div>

                        <!-- Socials -->
                        <h2 class="mt-8 flex items-center justify-center text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400">Socials</h2>
                        <div class="grid grid-cols-3 gap-1 text-gray-300">
                            <a href="https://www.facebook.com/reynaldo.jr.domingo.2024/" class="mx-auto">
                                <p class="text-center text-sm text-white hover:text-yellow-400 transition">Facebook</p>
                                <div class="mt-2 p-5 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram w-5 h-5 text-yellow-400 flex-shrink-0" viewBox="0 0 16 16">
                                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/reyndoming/?next=%2F" class="mx-auto">
                                <p class="text-center text-sm text-white hover:text-yellow-400 transition">Instagram</p>
                                <div class="mt-2 p-5 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-instagram w-5 h-5 text-yellow-400 flex-shrink-0" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://github.com/reyndimps" class="mx-auto">
                                <p class="text-center text-sm text-white hover:text-yellow-400 transition">GitHub</p>
                                <div class="mt-2 p-5 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github w-5 h-5 text-yellow-400 flex-shrink-0"" viewBox="0 0 16 16">
                                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>   
                </div>
            </div>

            <!-- Right Column with Content -->
            <div class="md:w-2/3 pt-8">
                <!-- Work Experience -->
                <div class="pb-4">
                    <h2 class="text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400 inline-block">Work Experience</h2>

                    <div class="space-y-8">
                        <div>
                        <p class="font-semibold text-white text-lg">Intern – Full Stack Developer</p>
                        <p class="text-sm text-gray-400">2026 | Infosoft, Davao City</p>
                        <p class="text-gray-300 mt-2 text-sm leading-relaxed">
                            Collaborated with a development team to design, build, and optimize internal web systems. Assisted in database management, implemented new features, and debugged applications. Enhanced user interfaces for improved performance and usability.
                        </p>
                        </div>
                    </div>
                </div>

                  <!-- Skills -->
                <div class="pb-4 mt-4">
                <h2 class="text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400 inline-block">Technical Skills</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="space-y-2">
                        <p class="text-gray-300 text-sm border-b border-gray-700 pb-1">HTML, CSS, JavaScript</p>
                        <p class="text-gray-300 text-sm border-b border-gray-700 pb-1">Laravel & PHP</p>
                        <p class="text-gray-300 text-sm border-b border-gray-700 pb-1">MySQL Database</p>
                        </div>
                        <div class="space-y-2">
                        <p class="text-gray-300 text-sm border-b border-gray-700 pb-1">Tailwind CSS & Alpine.js</p>
                        <p class="text-gray-300 text-sm border-b border-gray-700 pb-1">React Native</p>
                        <p class="text-gray-300 text-sm border-b border-gray-700 pb-1">Git & GitHub</p>
                        </div>
                    </div>
                </div>

                <!-- Certificates -->
               <div class="pb-4 mt-4">
                <h2 class="text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400 inline-block">Certificates</h2>

                <div class="space-y-6 text-gray-300 text-sm">
                    <div>
                    <p class="font-medium text-white">Information Technology Specialist in Cybersecurity</p>
                    <p class="text-gray-400">The University of Mindanao — Issued October 2025 (Valid until October 2030)</p>
                    <p class="mt-1">Validated expertise in identifying, mitigating, and preventing cybersecurity threats.</p>
                    </div>

                    <div>
                    <p class="font-medium text-white">Information Technology Specialist in Network Security</p>
                    <p class="text-gray-400">The University of Mindanao — Issued July 2025 (Valid until July 2030)</p>
                    <p class="mt-1">Demonstrated understanding of network security fundamentals, configurations, and best practices.</p>
                    </div>

                    <div>
                    <p class="font-medium text-white">Information Technology Specialist in HTML and CSS</p>
                    <p class="text-gray-400">The University of Mindanao — Issued May 2024</p>
                    <p class="mt-1">Certified proficiency in building responsive and accessible web pages using HTML and CSS.</p>
                    </div>
                </div>
                </div>

            </div>
        </div>


    </div>
</body>
</html>