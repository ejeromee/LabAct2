@extends('layouts.guest-layout')

@section('title', 'Services - ' . config('app.name'))

@section('content')
<!-- Enhanced Hero Section with Animated Gradients -->
<div class="relative overflow-hidden min-h-[500px] flex items-center">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900"></div>
    
    <!-- Animated blob shapes -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-400 to-purple-600 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-400 to-pink-600 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-pink-400 to-rose-600 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>
    
    <!-- Floating particles -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full opacity-60 animate-float"></div>
        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-white rounded-full opacity-40 animate-float animation-delay-1000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-white rounded-full opacity-50 animate-float animation-delay-2000"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 animate-fade-in-up">
            Our <span class="text-gradient-white">Services</span>
        </h1>
        <p class="text-xl md:text-2xl text-indigo-100 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-200">
            Comprehensive digital solutions tailored to your business needs
        </p>
        
        <!-- Scroll indicator -->
        <div class="animate-bounce-slow animation-delay-400">
            <svg class="mx-auto h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</div>

<!-- Services Introduction -->
<div class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                What We <span class="text-gradient">Offer</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We provide end-to-end digital solutions to help businesses thrive in the digital landscape. 
                Our services are customized to meet your specific goals and challenges.
            </p>
        </div>
    </div>
</div>

<!-- Enhanced Services Grid -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 - Web Development -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                <!-- Image with overlay -->
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" alt="Web Development">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors duration-300">
                        Web Development
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Our expert developers create responsive, user-friendly websites that deliver exceptional experiences across all devices.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Custom website design and development</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">E-commerce solutions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Content management systems</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Progressive Web Applications (PWAs)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Website maintenance and support</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-all duration-300">
                        <span>Get Started</span>
                        <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/btn:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 2 - Mobile Development -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" alt="Mobile App Development">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                        Mobile App Development
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We build intuitive, high-performance native and cross-platform mobile applications that engage users and drive results.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">iOS and Android app development</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Cross-platform development</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">UI/UX design for mobile</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">App maintenance and updates</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">App Store optimization</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-all duration-300">
                        <span>Get Started</span>
                        <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/btn:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 3 - Digital Marketing -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" alt="Digital Marketing">
                    <div class="absolute inset-0 bg-gradient-to-t from-pink-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-pink-600 transition-colors duration-300">
                        Digital Marketing
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Strategic marketing services to increase your visibility, attract customers, and drive revenue growth.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-pink-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Search Engine Optimization (SEO)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-pink-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Social media marketing</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-pink-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Content marketing strategy</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-pink-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Email marketing campaigns</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-pink-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Pay-per-click advertising</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center text-pink-600 font-semibold hover:text-pink-800 transition-all duration-300">
                        <span>Get Started</span>
                        <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/btn:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 4 - UI/UX Design -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-500">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" alt="UI/UX Design">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors duration-300">
                        UI/UX Design
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Create stunning, user-centric designs that enhance user satisfaction and drive engagement.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-purple-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">User research and analysis</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-purple-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Wireframing and prototyping</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-purple-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Visual design and branding</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-purple-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Interaction design</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-purple-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Usability testing</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center text-purple-600 font-semibold hover:text-purple-800 transition-all duration-300">
                        <span>Get Started</span>
                        <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/btn:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 5 - Cloud Solutions -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-600">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" alt="Cloud Solutions">
                    <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-cyan-600 transition-colors duration-300">
                        Cloud Solutions
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Scalable and secure cloud infrastructure to power your business growth and innovation.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-cyan-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Cloud migration services</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-cyan-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Infrastructure as a Service (IaaS)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-cyan-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Platform as a Service (PaaS)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-cyan-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Cloud security and compliance</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-cyan-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Cloud backup and disaster recovery</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center text-cyan-600 font-semibold hover:text-cyan-800 transition-all duration-300">
                        <span>Get Started</span>
                        <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/btn:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 6 - Consulting -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-700">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" alt="Consulting">
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors duration-300">
                        IT Consulting
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Expert guidance to help you make informed technology decisions and optimize your IT strategy.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-emerald-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Technology strategy planning</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-emerald-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Digital transformation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-emerald-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">System architecture design</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-emerald-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Performance optimization</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-emerald-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Security audits</span>
                        </li>
                    </ul>
                    
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-800 transition-all duration-300">
                        <span>Get Started</span>
                        <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/btn:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600"></div>
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl animate-float animation-delay-2000"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 animate-fade-in-up">
            Ready to Get <span class="border-b-4 border-white pb-1">Started?</span>
        </h2>
        <p class="text-xl md:text-2xl text-indigo-100 mb-12 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
            Let's discuss how our services can help your business grow and succeed.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-6 animate-fade-in-up animation-delay-300">
            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 border-2 border-transparent text-lg font-bold rounded-full shadow-xl text-indigo-600 bg-white hover:bg-gray-50 transform transition-all duration-300 hover:scale-110">
                <span>Contact Us Today</span>
                <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            
            <a href="{{ route('about') }}" class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white text-lg font-bold rounded-full text-white hover:bg-white hover:text-indigo-600 transform transition-all duration-300 hover:scale-110 shadow-xl">
                <span>Learn More About Us</span>
            </a>
        </div>
    </div>
</div>
@endsection

<style>
.text-gradient-white {
    background: linear-gradient(135deg, #fff 0%, #e0e7ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
