@extends('layouts.guest-layout')

@section('title', 'About Us - ' . config('app.name'))

@section('content')
<!-- Hero Section with Background Image -->
<div class="relative py-16 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); height: 400px;">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col h-full justify-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Our Company</h1>
        <p class="text-xl text-white max-w-3xl">We're a passionate team dedicated to creating innovative solutions since 2025.</p>
    </div>
</div>

<!-- Company Introduction -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border border-[var(--border-muted)]">
            <div class="p-8 sm:px-20">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/2">
                        <div class="text-3xl font-semibold custom-text mb-6">
                            Our Story
                        </div>

                        <div class="custom-text-muted">
                            <p class="mb-4">
                                Founded in 2025, our company began with a simple mission: to create exceptional digital experiences that help businesses thrive in the modern world.
                            </p>
                            
                            <p class="mb-4">
                                What started as a small team of passionate developers has grown into a full-service digital agency with expertise across web development, design, content creation, and digital marketing.
                            </p>
                            
                            <p class="mb-4">
                                Today, we're proud to work with clients ranging from innovative startups to established enterprises, helping them achieve their goals through thoughtful design and powerful technology solutions.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Team collaboration" 
                             class="rounded-lg shadow-lg w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Values Section -->
<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold custom-text">Our Core Values</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">The principles that guide everything we do</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 custom-text">Innovation</h3>
                <p class="custom-text-muted">We embrace new technologies and creative approaches to solve complex problems and deliver unique solutions.</p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 custom-text">Collaboration</h3>
                <p class="custom-text-muted">We believe in the power of teamwork, both within our company and with our clients, to create remarkable results.</p>
            </div>
            
            <!-- Value 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 custom-text">Excellence</h3>
                <p class="custom-text-muted">We're committed to delivering the highest quality in everything we do, exceeding expectations and setting new standards.</p>
            </div>
        </div>
    </div>
</div>


<!-- Call to Action -->
<div class="py-12 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to work with us?</h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-3xl mx-auto">Let's create something amazing together. Reach out to us today to discuss your project.</p>
        <div>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                Contact Us
            </a>
        </div>
    </div>
</div>
@endsection
