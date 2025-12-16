@extends('layouts.guest-layout')

@section('title', 'About Us - ' . config('app.name'))

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
            About <span class="text-gradient-white">Our Company</span>
        </h1>
        <p class="text-xl md:text-2xl text-indigo-100 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-200">
            We're a passionate team dedicated to creating innovative solutions since 2025
        </p>
        
        <!-- Scroll indicator -->
        <div class="animate-bounce-slow animation-delay-400">
            <svg class="mx-auto h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</div>

<!-- Company Introduction with Enhanced Design -->
<div class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-1/3 h-full bg-gradient-to-l from-indigo-50 to-transparent opacity-50"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    Our <span class="text-gradient">Story</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mb-8"></div>
                
                <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                    <p>
                        Founded in 2025, our company began with a simple mission: to create exceptional digital experiences that help businesses thrive in the modern world.
                    </p>
                    
                    <p>
                        What started as a small team of passionate developers has grown into a full-service digital agency with expertise across web development, design, content creation, and digital marketing.
                    </p>
                    
                    <p>
                        Today, we're proud to work with clients ranging from innovative startups to established enterprises, helping them achieve their goals through thoughtful design and powerful technology solutions.
                    </p>
                </div>
            </div>
            
            <div class="relative animate-fade-in-up animation-delay-200">
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-br from-indigo-400 to-purple-600 rounded-full opacity-20 blur-3xl animate-pulse-slow"></div>
                <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-gradient-to-br from-pink-400 to-rose-600 rounded-full opacity-20 blur-3xl animate-pulse-slow animation-delay-2000"></div>
                
                <!-- Image container -->
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl transform rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Team collaboration" 
                         class="relative rounded-2xl shadow-2xl transform transition-transform duration-500 hover:scale-105 hover:-rotate-1">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Values Section with Enhanced Cards -->
<div class="py-24 bg-white relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-200 rounded-full opacity-10 blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200 rounded-full opacity-10 blur-3xl animate-pulse-slow animation-delay-2000"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                Our Core <span class="text-gradient">Values</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">The principles that guide everything we do</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 - Innovation -->
            <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                <div class="relative inline-block mb-6">
                    <div class="absolute inset-0 bg-indigo-600 rounded-xl opacity-20 group-hover:animate-ping"></div>
                    <div class="relative w-16 h-16 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg transform transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors duration-300">Innovation</h3>
                <p class="text-gray-600 leading-relaxed">We embrace new technologies and creative approaches to solve complex problems and deliver unique solutions.</p>
            </div>
            
            <!-- Value 2 - Collaboration -->
            <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-300">
                <div class="relative inline-block mb-6">
                    <div class="absolute inset-0 bg-blue-600 rounded-xl opacity-20 group-hover:animate-ping"></div>
                    <div class="relative w-16 h-16 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center shadow-lg transform transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">Collaboration</h3>
                <p class="text-gray-600 leading-relaxed">We believe in the power of teamwork, both within our company and with our clients, to create remarkable results.</p>
            </div>
            
            <!-- Value 3 - Excellence -->
            <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                <div class="relative inline-block mb-6">
                    <div class="absolute inset-0 bg-pink-600 rounded-xl opacity-20 group-hover:animate-ping"></div>
                    <div class="relative w-16 h-16 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center shadow-lg transform transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-pink-600 transition-colors duration-300">Excellence</h3>
                <p class="text-gray-600 leading-relaxed">We're committed to delivering the highest quality in everything we do, exceeding expectations and setting new standards.</p>
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
                Ready to <span class="border-b-4 border-white pb-1">Work With Us?</span>
            </h2>
            <p class="text-xl md:text-2xl text-indigo-100 mb-12 max-w-3xl mx-auto leading-relaxed">
                Let's create something amazing together. Reach out to us today to discuss your project.
            </p>
            
            <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center px-8 py-4 border-2 border-transparent text-lg font-bold rounded-full shadow-xl text-indigo-600 bg-white hover:bg-gray-50 transform transition-all duration-300 hover:scale-110 hover:shadow-2xl animate-fade-in-up animation-delay-200">
                <span>Contact Us Today</span>
                <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<style>
.text-gradient-white {
    background: linear-gradient(135deg, #fff 0%, #e0e7ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
@endsection
