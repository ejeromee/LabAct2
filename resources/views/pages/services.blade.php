@extends('layouts.guest-layout')

@section('title', 'Services - ' . config('app.name'))

@section('content')
<!-- Hero Section with Background Image -->
<div class="relative py-16 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); height: 400px;">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col h-full justify-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Services</h1>
        <p class="text-xl text-white max-w-3xl">Comprehensive digital solutions tailored to your business needs</p>
    </div>
</div>

<!-- Services Introduction -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold custom-text">What We Offer</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">
                We provide end-to-end digital solutions to help businesses thrive in the digital landscape. 
                Our services are customized to meet your specific goals and challenges.
            </p>
        </div>
    </div>
</div>

<!-- Services Grid -->
<div class="py-8 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-48 object-cover" alt="Web Development">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-md bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <div class="ml-4 text-xl text-gray-700 font-semibold">Web Development</div>
                    </div>

                    <div class="mt-2 text-gray-600 text-base">
                        Our expert developers create responsive, user-friendly websites that deliver exceptional experiences across all devices.
                        <ul class="mt-4 list-disc pl-5 space-y-2">
                            <li>Custom website design and development</li>
                            <li>E-commerce solutions</li>
                            <li>Content management systems</li>
                            <li>Progressive Web Applications (PWAs)</li>
                            <li>Website maintenance and support</li>
                        </ul>
                    </div>

                    <a href="#" class="mt-6 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Learn more
                    </a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-48 object-cover" alt="Mobile App Development">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-md bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-xl text-gray-700 font-semibold">Mobile App Development</div>
                    </div>

                    <div class="mt-2 text-gray-600 text-base">
                        We build intuitive, high-performance native and cross-platform mobile applications that engage users and drive results.
                        <ul class="mt-4 list-disc pl-5 space-y-2">
                            <li>iOS and Android app development</li>
                            <li>Cross-platform development</li>
                            <li>UI/UX design for mobile</li>
                            <li>App maintenance and updates</li>
                            <li>App Store optimization</li>
                        </ul>
                    </div>

                    <a href="#" class="mt-6 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Learn more
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-48 object-cover" alt="Digital Marketing">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-md bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-xl text-gray-700 font-semibold">Digital Marketing</div>
                    </div>

                    <div class="mt-2 text-gray-600 text-base">
                        Our strategic marketing services help you reach your target audience, increase visibility, and drive conversions.
                        <ul class="mt-4 list-disc pl-5 space-y-2">
                            <li>Search Engine Optimization (SEO)</li>
                            <li>Pay-Per-Click (PPC) advertising</li>
                            <li>Social Media Marketing</li>
                            <li>Email Marketing Campaigns</li>
                            <li>Content Marketing Strategy</li>
                        </ul>
                    </div>

                    <a href="#" class="mt-6 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Learn more
                    </a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-48 object-cover" alt="UI/UX Design">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-md bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-xl text-gray-700 font-semibold">UI/UX Design</div>
                    </div>

                    <div class="mt-2 text-gray-600 text-base">
                        We create intuitive, beautiful interfaces that enhance user experience and drive engagement with your digital products.
                        <ul class="mt-4 list-disc pl-5 space-y-2">
                            <li>User Interface (UI) Design</li>
                            <li>User Experience (UX) Research</li>
                            <li>Wireframing and Prototyping</li>
                            <li>Usability Testing</li>
                            <li>Design Systems Creation</li>
                        </ul>
                    </div>

                    <a href="#" class="mt-6 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Learn more
                    </a>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-48 object-cover" alt="Cloud Solutions">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-md bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-xl text-gray-700 font-semibold">Cloud Solutions</div>
                    </div>

                    <div class="mt-2 text-gray-600 text-base">
                        Our cloud services help businesses scale efficiently, enhance security, and optimize costs with cutting-edge technology.
                        <ul class="mt-4 list-disc pl-5 space-y-2">
                            <li>Cloud Migration Services</li>
                            <li>Infrastructure as a Service (IaaS)</li>
                            <li>Platform as a Service (PaaS)</li>
                            <li>Cloud Security Solutions</li>
                            <li>Disaster Recovery Planning</li>
                        </ul>
                    </div>

                    <a href="#" class="mt-6 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Learn more
                    </a>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-48 object-cover" alt="IT Consulting">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-md bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4 text-xl text-gray-700 font-semibold">IT Consulting</div>
                    </div>

                    <div class="mt-2 text-gray-600 text-base">
                        Our expert consultants provide strategic guidance to help you make informed technology decisions aligned with business goals.
                        <ul class="mt-4 list-disc pl-5 space-y-2">
                            <li>Technology Strategy Development</li>
                            <li>Digital Transformation Consulting</li>
                            <li>IT Infrastructure Assessment</li>
                            <li>Software Selection Assistance</li>
                            <li>Technology Roadmapping</li>
                        </ul>
                    </div>

                    <a href="#" class="mt-6 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Process Section -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold custom-text">Our Process</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">
                We follow a proven methodology to ensure your project is delivered successfully
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] relative">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-600 text-white font-bold text-xl mb-4">1</div>
                <h3 class="text-xl font-semibold mb-3 custom-text">Discovery</h3>
                <p class="custom-text-muted">We start by understanding your business goals, target audience, and project requirements.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] relative">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-600 text-white font-bold text-xl mb-4">2</div>
                <h3 class="text-xl font-semibold mb-3 custom-text">Planning</h3>
                <p class="custom-text-muted">We create a detailed project plan with timelines, deliverables, and resource allocation.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] relative">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-600 text-white font-bold text-xl mb-4">3</div>
                <h3 class="text-xl font-semibold mb-3 custom-text">Execution</h3>
                <p class="custom-text-muted">Our team implements the solution with regular progress updates and quality checks.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-[var(--border-muted)] relative">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-600 text-white font-bold text-xl mb-4">4</div>
                <h3 class="text-xl font-semibold mb-3 custom-text">Delivery & Support</h3>
                <p class="custom-text-muted">We deliver the final product and provide ongoing support and maintenance services.</p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="py-12 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to transform your business?</h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-3xl mx-auto">Contact us today for a free consultation and let's discuss how we can help you achieve your goals.</p>
        <div>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                Get Started
            </a>
        </div>
    </div>
</div>
@endsection
