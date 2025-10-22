<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Ababers'))</title>

        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        
        @include('layouts.custom-styles')
    </head>
    <body class="font-sans antialiased custom-bg">
        <div class="min-h-screen">
            
            <nav class="custom-bg-light shadow-sm border-b custom-border">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <a href="{{ url('/') }}" class="text-2xl font-semibold custom-text">
                                    {{ config('app.name', 'Ababers') }}
                                </a>
                            </div>
                            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                                <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 border-b-2 @if(request()->routeIs('home')) border-primary custom-text @else border-transparent custom-text-muted hover:border-primary hover:custom-text @endif">
                                    Home
                                </a>
                                <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 border-b-2 @if(request()->routeIs('services')) border-primary custom-text @else border-transparent custom-text-muted hover:border-primary hover:custom-text @endif">
                                    Services
                                </a>
                                <a href="{{ route('posts.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 @if(request()->routeIs('posts.index')) border-primary custom-text @else border-transparent custom-text-muted hover:border-primary hover:custom-text @endif">
                                    Posts
                                </a>
                                <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 @if(request()->routeIs('about')) border-primary custom-text @else border-transparent custom-text-muted hover:border-primary hover:custom-text @endif">
                                    About Us
                                </a>
                                <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 border-b-2 @if(request()->routeIs('contact')) border-primary custom-text @else border-transparent custom-text-muted hover:border-primary hover:custom-text @endif">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:items-center">
                            @if (Route::has('login'))
                                <div class="space-x-4">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="custom-btn-primary">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="custom-btn-primary">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 custom-btn-secondary">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex items-center sm:hidden">
                            <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md custom-text-muted hover:custom-text hover:custom-bg-dark focus:outline-none">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div id="mobile-menu" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <a href="{{ route('home') }}" class="block pl-3 pr-4 py-2 border-l-4 @if(request()->routeIs('home')) border-primary custom-text bg-dark @else border-transparent custom-text-muted hover:bg-dark hover:border-primary hover:custom-text @endif">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="block pl-3 pr-4 py-2 border-l-4 @if(request()->routeIs('services')) border-primary custom-text bg-dark @else border-transparent custom-text-muted hover:bg-dark hover:border-primary hover:custom-text @endif">
                            Services
                        </a>
                        <a href="{{ route('posts.index') }}" class="block pl-3 pr-4 py-2 border-l-4 @if(request()->routeIs('posts.index')) border-primary custom-text bg-dark @else border-transparent custom-text-muted hover:bg-dark hover:border-primary hover:custom-text @endif">
                            Posts
                        </a>
                        <a href="{{ route('about') }}" class="block pl-3 pr-4 py-2 border-l-4 @if(request()->routeIs('about')) border-primary custom-text bg-dark @else border-transparent custom-text-muted hover:bg-dark hover:border-primary hover:custom-text @endif">
                            About Us
                        </a>
                        <a href="{{ route('contact') }}" class="block pl-3 pr-4 py-2 border-l-4 @if(request()->routeIs('contact')) border-primary custom-text bg-dark @else border-transparent custom-text-muted hover:bg-dark hover:border-primary hover:custom-text @endif">
                            Contact Us
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Content -->
            <main class="pt-4 pb-12">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="custom-bg-dark py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold custom-text mb-2">{{ config('app.name', 'Laravel') }}</h3>
                            <p class="custom-text-muted text-sm">Modern solutions for modern problems</p>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="custom-text-muted hover:custom-text transition-colors">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="custom-text-muted hover:custom-text transition-colors">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-6 border-t border-gray-800 pt-6">
                        <p class="text-center custom-text-muted text-sm">
                            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            // Mobile menu toggle
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>
    </body>
</html>
