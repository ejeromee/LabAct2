@extends('layouts.guest-layout')

@section('title', 'Contact Us - ' . config('app.name'))

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
            Get In <span class="text-gradient-white">Touch</span>
        </h1>
        <p class="text-xl md:text-2xl text-indigo-100 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-200">
            We'd love to hear from you. Reach out to us with any questions, inquiries, or project ideas.
        </p>
        
        <!-- Scroll indicator -->
        <div class="animate-bounce-slow animation-delay-400">
            <svg class="mx-auto h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</div>

<!-- Contact Form & Info Section with Enhanced Design -->
<div class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-200 rounded-full opacity-10 blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-200 rounded-full opacity-10 blur-3xl animate-pulse-slow animation-delay-2000"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form Column -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden animate-fade-in-up">
                <div class="p-8 lg:p-10">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Send Us a <span class="text-gradient">Message</span></h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and our team will get back to you as soon as possible.</p>
                    
                    <form class="space-y-6">
                        <!-- Name Field -->
                        <div class="group">
                            <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full name" 
                                class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 group-hover:border-gray-300">
                        </div>
                        
                        <!-- Email Field -->
                        <div class="group">
                            <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email address" 
                                class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 group-hover:border-gray-300">
                        </div>
                        
                        <!-- Phone Field -->
                        <div class="group">
                            <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Enter your phone number (optional)" 
                                class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 group-hover:border-gray-300">
                        </div>
                        
                        <!-- Subject Field -->
                        <div class="group">
                            <label for="subject" class="block text-sm font-semibold text-gray-900 mb-2">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="What is your message about?" 
                                class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 group-hover:border-gray-300">
                        </div>
                        
                        <!-- Message Field -->
                        <div class="group">
                            <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Enter your message here..." 
                                class="block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 group-hover:border-gray-300"></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="group w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 border border-transparent rounded-xl font-bold text-lg text-white shadow-lg hover:shadow-2xl transform transition-all duration-300 hover:scale-105">
                                <span>Send Message</span>
                                <svg class="ml-3 w-6 h-6 transform transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information Column -->
            <div class="space-y-6 animate-fade-in-up animation-delay-200">
                <!-- Contact Info Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="p-8 lg:p-10">
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Contact <span class="text-gradient">Information</span></h2>
                        
                        <div class="space-y-6">
                            <!-- Address -->
                            <div class="flex items-start group">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Our Office</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        Duon Banda St<br>
                                        Manila, Philippines 1000
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-start group">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        <a href="mailto:info@example.com" class="hover:text-indigo-600 transition-colors duration-200">info@example.com</a><br>
                                        <a href="mailto:support@example.com" class="hover:text-indigo-600 transition-colors duration-200">support@example.com</a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex items-start group">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Phone</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        <a href="tel:+639234567890" class="hover:text-indigo-600 transition-colors duration-200">+63 923 456 7890</a><br>
                                        <a href="tel:+639123456789" class="hover:text-indigo-600 transition-colors duration-200">+63 912 345 6789</a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Hours -->
                            <div class="flex items-start group">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white shadow-lg transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Business Hours</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        Monday - Friday: 9:00 AM - 5:00 PM<br>
                                        Saturday - Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Follow Us</h3>
                        <p class="text-gray-600 mb-6">Stay connected with us on social media for updates, news, and more.</p>
                        
                        <div class="flex space-x-3">
                            <a href="#" class="flex items-center justify-center h-12 w-12 rounded-xl bg-[#3b5998] text-white hover:bg-opacity-90 transform transition-all duration-300 hover:scale-110 shadow-md hover:shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            
                            <a href="#" class="flex items-center justify-center h-12 w-12 rounded-xl bg-[#1da1f2] text-white hover:bg-opacity-90 transform transition-all duration-300 hover:scale-110 shadow-md hover:shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            
                            <a href="#" class="flex items-center justify-center h-12 w-12 rounded-xl bg-gradient-to-br from-purple-600 to-pink-600 text-white hover:opacity-90 transform transition-all duration-300 hover:scale-110 shadow-md hover:shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            
                            <a href="#" class="flex items-center justify-center h-12 w-12 rounded-xl bg-[#0077b5] text-white hover:bg-opacity-90 transform transition-all duration-300 hover:scale-110 shadow-md hover:shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced Map Section -->
<div class="py-16 bg-white relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-1/2 right-0 w-96 h-96 bg-pink-200 rounded-full opacity-10 blur-3xl transform translate-x-1/2 animate-pulse-slow"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 animate-fade-in-up">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Find <span class="text-gradient">Us</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Visit us at our office located in the heart of Manila</p>
        </div>
        
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 animate-fade-in-up animation-delay-200">
            <div class="aspect-w-16 aspect-h-9 h-96">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2197372035307!2d120.97520019999999!3d14.5885632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f4b6557b25%3A0x7e23ae3757552c54!2sDuon%20Banda%20St%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1696205965906!5m2!1sen!2sph"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="grayscale hover:grayscale-0 transition-all duration-500"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced FAQ Section -->
<div class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-200 rounded-full opacity-10 blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200 rounded-full opacity-10 blur-3xl animate-pulse-slow animation-delay-2000"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Frequently Asked <span class="text-gradient">Questions</span></h2>
            <p class="text-xl text-gray-600">Find quick answers to common questions</p>
        </div>
        
        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 animate-fade-in-up animation-delay-200">
                <details class="group">
                    <summary class="flex justify-between items-center cursor-pointer px-8 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg font-bold text-gray-900 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white mr-4 group-open:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            What services do you offer?
                        </h3>
                        <svg class="w-6 h-6 text-gray-500 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </summary>
                    <div class="px-8 pb-6 text-gray-600 leading-relaxed border-t border-gray-100 pt-6 mt-2">
                        We offer a wide range of digital services including web development, mobile app development, UI/UX design, digital marketing, cloud solutions, and IT consulting. You can view our full list of services on our Services page.
                    </div>
                </details>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 animate-fade-in-up animation-delay-300">
                <details class="group">
                    <summary class="flex justify-between items-center cursor-pointer px-8 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg font-bold text-gray-900 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 text-white mr-4 group-open:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            How long does a typical project take?
                        </h3>
                        <svg class="w-6 h-6 text-gray-500 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </summary>
                    <div class="px-8 pb-6 text-gray-600 leading-relaxed border-t border-gray-100 pt-6 mt-2">
                        Project timelines vary depending on the scope and complexity. A simple website might take 2-4 weeks, while a complex web application could take 3-6 months. We'll provide a detailed timeline during our initial consultation.
                    </div>
                </details>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 animate-fade-in-up animation-delay-400">
                <details class="group">
                    <summary class="flex justify-between items-center cursor-pointer px-8 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg font-bold text-gray-900 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 text-white mr-4 group-open:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            What is your pricing structure?
                        </h3>
                        <svg class="w-6 h-6 text-gray-500 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </summary>
                    <div class="px-8 pb-6 text-gray-600 leading-relaxed border-t border-gray-100 pt-6 mt-2">
                        We offer flexible pricing options including project-based quotes, hourly rates, and retainer agreements. Each project is unique, so we provide custom quotes based on your specific requirements and objectives.
                    </div>
                </details>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 animate-fade-in-up animation-delay-500">
                <details class="group">
                    <summary class="flex justify-between items-center cursor-pointer px-8 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg font-bold text-gray-900 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white mr-4 group-open:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </span>
                            How do we get started working together?
                        </h3>
                        <svg class="w-6 h-6 text-gray-500 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </summary>
                    <div class="px-8 pb-6 text-gray-600 leading-relaxed border-t border-gray-100 pt-6 mt-2">
                        The first step is to reach out to us through our contact form or by phone. We'll schedule an initial consultation to discuss your project, understand your needs, and determine how we can best help you achieve your goals.
                    </div>
                </details>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="mt-16 text-center animate-fade-in-up animation-delay-600">
            <p class="text-lg text-gray-600 mb-6">Still have questions? We're here to help!</p>
            <a href="#" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 border border-transparent rounded-xl font-bold text-lg text-white shadow-lg hover:shadow-2xl transform transition-all duration-300 hover:scale-105">
                Contact Us Now
                <svg class="ml-3 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- Custom CSS for text gradient -->
<style>
.text-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.text-gradient-white {
    background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
@endsection
