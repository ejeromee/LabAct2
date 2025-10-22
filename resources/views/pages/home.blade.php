@extends('layouts.guest-layout')

@section('title', 'Home - ' . config('app.name'))

@section('content')
<!-- Hero Section with Background Image -->
<div class="relative py-16 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); height: 600px;">
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col h-full justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 max-w-3xl leading-tight">
            Transforming Ideas Into Digital Realities
        </h1>
        <p class="text-xl md:text-2xl text-white/90 max-w-2xl mb-8">
            We create innovative digital solutions that help businesses grow and succeed in the modern world.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-wider hover:bg-indigo-500 focus:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-300 w-full sm:w-auto">
                Explore Our Services
            </a>
            
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 bg-white border border-transparent rounded-md font-semibold text-base text-indigo-600 uppercase tracking-wider hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-300 w-full sm:w-auto">
                Contact Us
            </a>
        </div>
    </div>
</div>

<!-- Featured Services Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold custom-text">Our Services</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">
                We offer a comprehensive range of digital solutions to help your business thrive
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3 custom-text">Web Development</h3>
                    <p class="text-center custom-text-muted">
                        Custom websites and web applications designed to engage your audience and drive business growth.
                    </p>
                    <div class="mt-6 text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition duration-300">
                            Learn more
                            <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3 custom-text">Mobile Development</h3>
                    <p class="text-center custom-text-muted">
                        Native and cross-platform mobile applications that deliver exceptional user experiences.
                    </p>
                    <div class="mt-6 text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition duration-300">
                            Learn more
                            <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3 custom-text">Digital Marketing</h3>
                    <p class="text-center custom-text-muted">
                        Strategic marketing services to increase your visibility, attract customers, and drive revenue.
                    </p>
                    <div class="mt-6 text-center">
                        <a href="{{ route('services') }}" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition duration-300">
                            Learn more
                            <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center">
            <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-wider hover:bg-indigo-500 focus:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-300">
                View All Services
            </a>
        </div>
    </div>
</div>

<!-- Latest Blog Posts Section -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold custom-text">Latest Blog Posts</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">
                Stay updated with our latest news, insights, and trends
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <!-- <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Blog post" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        October 1, 2025
                    </div>
                    <h3 class="text-xl font-semibold mb-2 custom-text hover:text-indigo-600 transition duration-300">
                        <a href="{{ route('posts.index') }}">The Future of Web Development in 2026</a>
                    </h3>
                    <p class="custom-text-muted mb-4">
                        Discover the emerging trends and technologies that will shape web development in the coming year.
                    </p>
                    <a href="{{ route('posts.index') }}" class="text-indigo-600 font-medium hover:text-indigo-800 transition duration-300">
                        Read more →
                    </a>
                </div>
            </div> -->
        
        <div class="my-12 text-center ">
            <a href="{{ route('posts.index') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-wider hover:bg-indigo-500 focus:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-300">
                View All Posts
            </a>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold custom-text mb-6">Why Choose Us</h2>
                <p class="custom-text-muted mb-8">
                    We combine technical expertise, creative thinking, and industry knowledge to deliver solutions that drive real business results.
                </p>
                
                <div class="space-y-4">
                    <!-- Feature 1 -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold custom-text">Experienced Team</h3>
                            <p class="mt-2 custom-text-muted">Our team brings years of experience across various industries and technologies.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold custom-text">Innovative Solutions</h3>
                            <p class="mt-2 custom-text-muted">We stay ahead of the curve with the latest technologies and approaches.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold custom-text">Responsive Support</h3>
                            <p class="mt-2 custom-text-muted">We're committed to providing exceptional support throughout your project and beyond.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="{{ route('about') }}" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition duration-300">
                        Learn more about us
                        <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Team working" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="py-16 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-3xl mx-auto">
            Let's work together to bring your vision to life. Our team is ready to help you succeed.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 w-full sm:w-auto">
                Contact Us
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition duration-300 w-full sm:w-auto">
                Explore Services
            </a>
        </div>
    </div>
</div>
@endsection
