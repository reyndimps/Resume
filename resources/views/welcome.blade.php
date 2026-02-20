@extends('layouts.app')
@section('body')
<body class="bg-navy-900 min-h-screen"></body>
    <div class="max-w-7xl mx-auto px-4 py-12">
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
                <div class="h-8 mb-8 flex items-center">
                    <p class="text-yellow-400 text-xl font-medium uppercase tracking-wider typing">Web Developer Intern</p>
                </div>

                <div class="bg-yellow-400 px-3 py-1 inline-block mb-2 rounded-md">
                    <span class="font-bold uppercase text-lg">About Me</span>
                </div>

                <p class="text-gray-300 mb-6 text-lg leading-relaxed">
                      I’m a passionate web developer who enjoys turning ideas into functional and visually appealing digital experiences.
          Skilled in both front-end and back-end development, I focus on creating clean, efficient, and user-friendly systems.
                </p>
            </div>
        </div>
        
        <!-- Bottom Left Column with Content -->
        <div class="flex flex-col lg:flex-row items-stretch gap-8">
            <div class="lg:w-1/3 relative pt-5">
                <div class="w-full bg-navy-800 rounded-tr-[100px] overflow-visible lg:h-[800px]">
                    <div class="p-6 h-full flex flex-col item-center mx-6 pb-8">
                        <!-- Contacts -->   
                        <h2 class="pt-4 text-yellow-400 mr-2 flex items-center justify-center text-lg font-semibold uppercase mb-2 border-b border-yellow-400">Contacts</h2>
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

                        
                            <!-- Socials -->
                        <h2 class="mt-8 flex items-center justify-center text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400">Socials</h2>
                        <div class="grid grid-cols-4 gap-1 text-gray-300">
                            <a href="https://www.facebook.com/reynaldo.jr.domingo.2024/" class="mx-auto transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                                <div class="mt-2 p-4 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram w-6 h-6 text-white flex-shrink-0" viewBox="0 0 16 16">
                                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/reyndoming/?next=%2F" class="mx-auto transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                                <div class="mt-2 p-4 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-instagram w-6 h-6 text-white flex-shrink-0" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                </div>
                            </a>
                                     <a href="https://github.com/reyndimps" class="mx-auto transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                                <div class="mt-2 p-4 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github w-6 h-6 text-white flex-shrink-0" viewBox="0 0 16 16">
                                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/in/reynaldo-jr-domingo-20049334a/" class="mx-auto transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                                <div class="mt-2 p-4 mx-auto font-medium bg-navy-900 flex items-center justify-center text-white rounded-full">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-linkedin w-6 h-6 text-white flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </div>
                            </a>
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

                        
                        <!-- Skills  -->
                        <h2 class="mt-8 flex items-center justify-center text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400">Skills</h2>
                        <div class="carousel-container">
                            <div class="carousel-track">
                                <!-- First set of logos -->
                                <div class="carousel-item"><img src="{{ asset('images/html-logo.png') }}" alt="HTML"></div>
                                <div class="carousel-item"><img src="{{ asset('images/laravel-logo.png') }}" alt="Laravel"></div>
                                <div class="carousel-item"><img src="{{ asset('images/mysql-logo.png') }}" alt="MySQL"></div>
                                <div class="carousel-item"><img src="{{ asset('images/react-logo.png') }}" alt="React"></div>
                                <div class="carousel-item"><img src="{{ asset('images/tailwind-logo.png') }}" alt="Tailwind"></div>
                                <div class="carousel-item"><img src="{{ asset('images/alphine-logo.png') }}" alt="Alpine.js"></div>
                                <div class="carousel-item"><img src="{{ asset('images/asp.net-logo.png') }}" alt="ASP.NET"></div>
                                <div class="carousel-item"><img src="{{ asset('images/flutter-logo.png') }}" alt="Flutter"></div>
                                
                                <!-- Duplicate set for infinite effect -->
                                <div class="carousel-item"><img src="{{ asset('images/html-logo.png') }}" alt="HTML"></div>
                                <div class="carousel-item"><img src="{{ asset('images/laravel-logo.png') }}" alt="Laravel"></div>
                                <div class="carousel-item"><img src="{{ asset('images/mysql-logo.png') }}" alt="MySQL"></div>
                                <div class="carousel-item"><img src="{{ asset('images/react-logo.png') }}" alt="React"></div>
                                <div class="carousel-item"><img src="{{ asset('images/tailwind-logo.png') }}" alt="Tailwind"></div>
                                <div class="carousel-item"><img src="{{ asset('images/alphine-logo.png') }}" alt="Alpine.js"></div>
                                <div class="carousel-item"><img src="{{ asset('images/asp.net-logo.png') }}" alt="ASP.NET"></div>
                                <div class="carousel-item"><img src="{{ asset('images/flutter-logo.png') }}" alt="Flutter"></div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>

            <!-- Right Column with Content -->
            <div class="lg:w-2/3 pt-7">
                <!-- Projects -->
                <div class="pb-4">
                    <h2 class="text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400 inline-block">Projects</h2>

                    <div class="space-y-3.5">
                        <div>
                        <p class="font-semibold text-white text-lg">Efres Seedlings - Capstone Project</p>
                        <p class="text-sm text-gray-400">2025-2026 | Web Development</p>
                        <p class="text-gray-300 mt-1 text-sm leading-relaxed">
                            A Laravel-based capstone web application for managing and tracking plant growth and agricultural data. It integrates a Random Forest Regression (RFR) model using Python to predict seedling maturity and optimal harvest timing. Built with Python, Laravel, MySQL, and Tailwind CSS for a responsive and user-friendly agricultural management platform.
                        </p>
                        </div>

                        <div>
                        <p class="font-semibold text-white text-lg">Transport Hub</p>
                        <p class="text-sm text-gray-400">2024-2025 | ASP.NET Core Development</p>
                        <p class="text-gray-300 mt-1 text-sm leading-relaxed">
                            A comprehensive transportation management system designed to streamline logistics and hub operations. Features include route management, vehicle tracking, and automated scheduling to improve efficiency in transport services. Built with ASP.NET Core MVC, C#, and Entity Framework Core.
                        </p>
                        </div>

                        <div>
                        <p class="font-semibold text-white text-lg">Akina POS & Inventory</p>
                        <p class="text-sm text-gray-400">2023-2024 | Web Development</p>
                        <p class="text-gray-300 mt-1 text-sm leading-relaxed">
                            A robust Point of Sale and Inventory management system tailored for retail businesses. It provides real-time tracking of sales, stock levels, and financial reporting, ensuring seamless business operations and data-driven decision-making. Built with Laravel, MySQL, and Tailwind CSS.
                        </p>
                        </div>
                    </div>
                </div>

                <!-- Certificates -->
               <div class="pb-4 mt-3">
                <h2 class="text-yellow-400 text-lg font-semibold uppercase mb-2 border-b border-yellow-400 inline-block">Certificates</h2>

                <div class="space-y-4 text-gray-300 text-sm">
                    <div class="flex items-start justify-between group">
                        <div>
                            <p class="font-medium text-white">Information Technology Specialist in Cybersecurity</p>
                            <p class="text-gray-400">The University of Mindanao — Issued October 2025 (Valid until October 2030)</p>
                            <p class="mt-1">Validated expertise in identifying, mitigating, and preventing cybersecurity threats.</p>
                        </div>
                        <a href="{{ asset('certificates/cybersecurity-certificate.pdf') }}" download class="text-yellow-400 mt-5 hover:text-white transition-colors p-2 rounded-full bg-navy-800 hover:bg-yellow-400 group-hover:block" title="Download Certificate">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex items-start justify-between group">
                        <div>
                            <p class="font-medium text-white">Information Technology Specialist in Network Security</p>
                            <p class="text-gray-400">The University of Mindanao — Issued July 2025 (Valid until July 2030)</p>
                            <p class="mt-1">Demonstrated understanding of network security fundamentals, configurations, and best practices.</p>
                        </div>
                        <a href="{{ asset('certificates/network-security-certificate.pdf') }}" download class="text-yellow-400 mt-5 hover:text-white transition-colors p-2 rounded-full bg-navy-800 hover:bg-yellow-400" title="Download Certificate">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex items-start justify-between group">
                        <div>
                            <p class="font-medium text-white">Information Technology Specialist in HTML and CSS</p>
                            <p class="text-gray-400">The University of Mindanao — Issued May 2024</p>
                            <p class="mt-1">Certified proficiency in building responsive and accessible web pages using HTML and CSS.</p>
                        </div>
                        <a href="{{ asset('certificates/html-css-certificate.pdf') }}" download class="text-yellow-400 mt-5 hover:text-white transition-colors p-2 rounded-full bg-navy-800 hover:bg-yellow-400" title="Download Certificate">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex items-start justify-between group">
                        <div>
                            <p class="font-medium text-white">Information Technology Specialist in Database</p>
                            <p class="text-gray-400">The University of Mindanao — Issued May 2024</p>
                            <p class="mt-1">Certified proficiency in designing, implementing, and managing relational databases.</p>
                        </div>
                        <a href="{{ asset('certificates/database-certificate.pdf') }}" download class="text-yellow-400 mt-5 hover:text-white transition-colors p-2 rounded-full bg-navy-800 hover:bg-yellow-400" title="Download Certificate">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>
                    </div>
                </div>
             </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-stretch">
            <div class="w-full relative">
                <div class="w-full overflow-visible h-[450px]">
                    <div class="mt-5 h-full flex flex-col items-center">
                            <div class="flex items-center gap-4 w-full">
                                <h2 class="text-yellow-400 text-xl font-semibold uppercase border-b border-yellow-400 inline-block">Visual Gallery</h2>
                                <div class="flex-grow border-t border-navy-800 opacity-50"></div>
                            </div>
                            
                            <div class="mt-5 w-full overflow-x-auto lg:overflow-visible gallery-scroll">
                                <div class="wave-gallery-container flex-1 min-h-0 mt-3 lg:w-full lg:px-0">
                                    <div class="wave-track">
                                        <div class="wave-card">
                                            <img src="{{ asset('images/Akina.jpg') }}" alt="Project 2" class="w-full h-full object-cover">
                                        </div>
                                        <div class="wave-card">
                                            <img src="{{ asset('images/Efresseedlings.jpg') }}" alt="Project 1" class="w-full h-full object-cover">
                                        </div>
                                        <div class="wave-card">
                                            <img src="{{ asset('images/hardbound.jpg') }}" alt="Project 3" class="w-full h-full object-cover">
                                        </div>
                                        <div class="wave-card">
                                            <img src="{{ asset('images/checklist.jpg') }}" alt="Project 5" class="w-full h-full object-cover">
                                        </div>
                                        <div class="wave-card">
                                            <img src="{{ asset('images/TransportHub.jpg') }}" alt="Project 4" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>  
        </div>
    </div>
    <div class="mt-0 text-center text-sm text-gray-400 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto border-t border-navy-700 opacity-50"></div>
        <p class="mt-7">&copy; 2026 Reynaldo Jr. Domingo. All rights reserved.</p>
    </div>

    </body> 
@endsection


@section('scripts')

@endsection