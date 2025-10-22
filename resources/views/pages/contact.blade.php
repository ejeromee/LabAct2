@extends('layouts.guest-layout')

@section('title', 'Contact Us - ' . config('app.name'))

@section('content')
<!-- Hero Section with Background Image -->
<div class="relative py-16 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1560264280-88b68371db39?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); height: 400px;">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col h-full justify-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Get In Touch</h1>
        <p class="text-xl text-white max-w-3xl">We'd love to hear from you. Reach out to us with any questions, inquiries, or project ideas.</p>
    </div>
</div>

<!-- Contact Form & Info Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form Column -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)]">
                <div class="p-8">
                    <h2 class="text-2xl font-bold custom-text mb-6">Send Us a Message</h2>
                    <p class="custom-text-muted mb-8">Fill out the form below and our team will get back to you as soon as possible.</p>
                    
                    <form class="space-y-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium custom-text mb-1">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full name" 
                                class="block w-full px-4 py-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium custom-text mb-1">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email address" 
                                class="block w-full px-4 py-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-medium custom-text mb-1">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Enter your phone number (optional)" 
                                class="block w-full px-4 py-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block text-sm font-medium custom-text mb-1">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="What is your message about?" 
                                class="block w-full px-4 py-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-medium custom-text mb-1">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Enter your message here..." 
                                class="block w-full px-4 py-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="w-full md:w-auto px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-wider hover:bg-indigo-500 focus:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information Column -->
            <div>
                <!-- Contact Info Card -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)] mb-8">
                    <div class="p-8">
                        <h2 class="text-2xl font-bold custom-text mb-6">Contact Information</h2>
                        
                        <div class="space-y-6">
                            <!-- Address -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold custom-text">Our Office</h3>
                                    <p class="mt-2 custom-text-muted">
                                        Duon Banda St<br>
                                        Manila, Philippines 1000
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold custom-text">Email</h3>
                                    <p class="mt-2 custom-text-muted">
                                        <a href="mailto:info@example.com" class="hover:text-indigo-600 transition duration-300">info@example.com</a><br>
                                        <a href="mailto:support@example.com" class="hover:text-indigo-600 transition duration-300">support@example.com</a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold custom-text">Phone</h3>
                                    <p class="mt-2 custom-text-muted">
                                        <a href="tel:+639234567890" class="hover:text-indigo-600 transition duration-300">+63 923 456 7890</a><br>
                                        <a href="tel:+639123456789" class="hover:text-indigo-600 transition duration-300">+63 912 345 6789</a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Hours -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold custom-text">Business Hours</h3>
                                    <p class="mt-2 custom-text-muted">
                                        Monday - Friday: 9:00 AM - 5:00 PM<br>
                                        Saturday - Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Card -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)]">
                    <div class="p-8">
                        <h2 class="text-2xl font-bold custom-text mb-6">Follow Us</h2>
                        <p class="custom-text-muted mb-6">Stay connected with us on social media for updates, news, and more.</p>
                        
                        <div class="flex space-x-4">
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full bg-[#3b5998] text-white hover:bg-opacity-90 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full bg-[#1da1f2] text-white hover:bg-opacity-90 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full bg-[#ea4c89] text-white hover:bg-opacity-90 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full bg-[#0077b5] text-white hover:bg-opacity-90 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
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

<!-- Map Section -->
<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold custom-text">Our Location</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">
                Visit us at our office located in the heart of Manila
            </p>
        </div>
        
        <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-[var(--border-muted)]">
            <div class="aspect-w-16 aspect-h-9 h-96">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2197372035307!2d120.97520019999999!3d14.5885632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f4b6557b25%3A0x7e23ae3757552c54!2sDuon%20Banda%20St%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1696205965906!5m2!1sen!2sph" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold custom-text">Frequently Asked Questions</h2>
            <p class="mt-4 text-lg custom-text-muted max-w-3xl mx-auto">
                Find quick answers to common questions
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- FAQ Item 1 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-lg font-semibold custom-text mb-3">What services do you offer?</h3>
                    <p class="custom-text-muted">
                        We offer a wide range of digital services including web development, mobile app development, UI/UX design, 
                        digital marketing, cloud solutions, and IT consulting. You can view our full list of services on our Services page.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-lg font-semibold custom-text mb-3">How long does a typical project take?</h3>
                    <p class="custom-text-muted">
                        Project timelines vary depending on the scope and complexity. A simple website might take 2-4 weeks, 
                        while a complex web application could take 3-6 months. We'll provide a detailed timeline during our initial consultation.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-lg font-semibold custom-text mb-3">What is your pricing structure?</h3>
                    <p class="custom-text-muted">
                        We offer flexible pricing options including project-based quotes, hourly rates, and retainer agreements. 
                        Each project is unique, so we provide custom quotes based on your specific requirements and objectives.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="bg-white overflow-hidden shadow-md rounded-lg border border-[var(--border-muted)] hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-lg font-semibold custom-text mb-3">How do we get started working together?</h3>
                    <p class="custom-text-muted">
                        The first step is to reach out to us through our contact form or by phone. We'll schedule an initial consultation 
                        to discuss your project, understand your needs, and determine how we can best help you achieve your goals.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
