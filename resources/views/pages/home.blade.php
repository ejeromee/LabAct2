@extends('layouts.guest-layout')

@section('title', 'Home - ' . config('app.name'))

@section('content')
<!-- Enhanced Hero Section with Animated Background -->
<div class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">
    <!-- Animated background blobs -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 -left-4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-0 -right-4 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>
    
    <!-- Particles effect -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute w-2 h-2 bg-white rounded-full opacity-20 animate-float" style="top: 20%; left: 10%;"></div>
        <div class="absolute w-3 h-3 bg-white rounded-full opacity-20 animate-float animation-delay-2000" style="top: 40%; left: 80%;"></div>
        <div class="absolute w-2 h-2 bg-white rounded-full opacity-20 animate-float animation-delay-4000" style="top: 60%; left: 30%;"></div>
        <div class="absolute w-2 h-2 bg-white rounded-full opacity-20 animate-float animation-delay-2000" style="top: 80%; left: 70%;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
        <div class="animate-fade-in-up">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                Transforming Ideas Into
                <span class="block bg-clip-text text-transparent bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-400 animate-gradient-x">
                    Digital Realities
                </span>
            </h1>
        </div>
        
        <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto mb-12 animate-fade-in-up animation-delay-200">
            We create innovative digital solutions that help businesses grow and succeed in the modern world.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in-up animation-delay-400">
            <a href="{{ route('services') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-white text-indigo-600 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-110 shadow-2xl hover:shadow-3xl">
                <span>Explore Our Services</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            
            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-110 backdrop-blur-sm">
                <span>Get in Touch</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </a>
        </div>
        
        <!-- Scroll indicator -->
        <div class="mt-20 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </div>
</div>

<!-- Featured Services Section with Enhanced Cards -->
<div class="py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                Our <span class="text-gradient">Services</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We offer a comprehensive range of digital solutions to help your business thrive
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 - Web Development -->
            <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                <!-- Gradient overlay on hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative p-8">
                    <!-- Icon with pulse effect -->
                    <div class="flex items-center justify-center mb-6">
                        <div class="relative">
                            <div class="absolute inset-0 bg-indigo-600 rounded-full opacity-20 group-hover:animate-ping"></div>
                            <div class="relative w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center transform transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center group-hover:text-indigo-600 transition-colors duration-300">
                        Web Development
                    </h3>
                    
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">
                        Custom websites and web applications designed to engage your audience and drive business growth.
                    </p>
                    
                    <div class="text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors duration-300 group/link">
                            Learn more
                            <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/link:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 - Mobile Development -->
            <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-300">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-cyan-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative p-8">
                    <div class="flex items-center justify-center mb-6">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-600 rounded-full opacity-20 group-hover:animate-ping"></div>
                            <div class="relative w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full flex items-center justify-center transform transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center group-hover:text-blue-600 transition-colors duration-300">
                        Mobile Development
                    </h3>
                    
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">
                        Native and cross-platform mobile applications that deliver exceptional user experiences.
                    </p>
                    
                    <div class="text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors duration-300 group/link">
                            Learn more
                            <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/link:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 - Digital Marketing -->
            <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-600/10 to-rose-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative p-8">
                    <div class="flex items-center justify-center mb-6">
                        <div class="relative">
                            <div class="absolute inset-0 bg-pink-600 rounded-full opacity-20 group-hover:animate-ping"></div>
                            <div class="relative w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center transform transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center group-hover:text-pink-600 transition-colors duration-300">
                        Digital Marketing
                    </h3>
                    
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">
                        Strategic marketing services to increase your visibility, attract customers, and drive revenue.
                    </p>
                    
                    <div class="text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-pink-600 font-semibold hover:text-pink-800 transition-colors duration-300 group/link">
                            Learn more
                            <svg class="ml-2 w-5 h-5 transform transition-transform duration-300 group-hover/link:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="mt-16 text-center">
            <a href="{{ route('services') }}" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 border border-transparent rounded-full font-bold text-lg text-white shadow-lg hover:shadow-2xl transform transition-all duration-300 hover:scale-105 animate-fade-in-up animation-delay-500">
                <span>View All Services</span>
                <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- Latest Blog Posts Section with Enhanced Cards -->
<div class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-400 rounded-full filter blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-400 rounded-full filter blur-3xl animate-pulse-slow animation-delay-2000"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                Latest <span class="text-gradient">Blog Posts</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Stay updated with our latest news, insights, and industry trends
            </p>
        </div>
        
        <div class="mb-12 text-center animate-fade-in-up animation-delay-200">
            <a href="{{ route('posts.index') }}" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 border border-transparent rounded-full font-bold text-lg text-white shadow-xl hover:shadow-2xl transform transition-all duration-300 hover:scale-105 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <span class="relative">Explore All Posts</span>
                <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2 relative" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- Why Choose Us Section with Split Layout & Animations -->
<div class="py-24 bg-white relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-1/3 h-full bg-gradient-to-l from-indigo-50 to-transparent opacity-50"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    Why Choose <span class="text-gradient">Us</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mb-8"></div>
                <p class="text-xl text-gray-600 mb-12 leading-relaxed">
                    We combine technical expertise, creative thinking, and industry knowledge to deliver solutions that drive real business results.
                </p>
                
                <div class="space-y-6">
                    <!-- Feature 1 -->
                    <div class="flex group animate-fade-in-up animation-delay-200">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">Experienced Team</h3>
                            <p class="text-gray-600 leading-relaxed">Our team brings years of experience across various industries and cutting-edge technologies.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="flex group animate-fade-in-up animation-delay-300">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">Innovative Solutions</h3>
                            <p class="text-gray-600 leading-relaxed">We stay ahead of the curve with the latest technologies and forward-thinking approaches.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="flex group animate-fade-in-up animation-delay-400">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-pink-600 transition-colors duration-300">Responsive Support</h3>
                            <p class="text-gray-600 leading-relaxed">We're committed to providing exceptional support throughout your project and beyond.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 animate-fade-in-up animation-delay-500">
                    <a href="{{ route('about') }}" class="group inline-flex items-center text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-300">
                        <span>Learn more about us</span>
                        <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative animate-fade-in-up animation-delay-200">
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-indigo-400 to-purple-600 rounded-full opacity-20 blur-3xl animate-pulse-slow"></div>
                <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-gradient-to-br from-pink-400 to-rose-600 rounded-full opacity-20 blur-3xl animate-pulse-slow animation-delay-2000"></div>
                
                <!-- Image container -->
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl transform rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Team working" 
                         class="relative rounded-2xl shadow-2xl transform transition-transform duration-500 hover:scale-105 hover:-rotate-1">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section with Enhanced Design -->
<div class="relative py-24 overflow-hidden">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600"></div>
    
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl animate-float animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white rounded-full filter blur-3xl animate-pulse-slow"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Ready to Start Your <span class="border-b-4 border-white pb-1">Project?</span>
            </h2>
            <p class="text-xl md:text-2xl text-indigo-100 mb-12 max-w-3xl mx-auto leading-relaxed">
                Let's work together to bring your vision to life. Our team is ready to help you succeed.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-6 animate-fade-in-up animation-delay-200">
                <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 border-2 border-transparent text-lg font-bold rounded-full shadow-xl text-indigo-600 bg-white hover:bg-gray-50 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl">
                    <span>Contact Us</span>
                    <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                
                <a href="{{ route('services') }}" class="group inline-flex items-center justify-center px-8 py-4 border-2 border-white text-lg font-bold rounded-full text-white hover:bg-white hover:text-indigo-600 transform transition-all duration-300 hover:scale-110 shadow-xl">
                    <span>Explore Services</span>
                    <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
