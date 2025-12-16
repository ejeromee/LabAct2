@props(['href', 'icon' => 'plus'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'fixed bottom-8 right-8 z-50 group']) }}>
    <div class="relative">
        <!-- Pulsing ring animation -->
        <div class="absolute inset-0 bg-indigo-600 rounded-full animate-ping opacity-75"></div>
        
        <!-- Main button -->
        <div class="relative bg-indigo-600 hover:bg-indigo-700 text-white rounded-full p-4 shadow-2xl transform transition-all duration-300 hover:scale-110 hover:rotate-90">
            @if($icon === 'plus')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            @elseif($icon === 'edit')
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            @endif
        </div>
        
        <!-- Tooltip -->
        <div class="absolute right-full mr-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            <div class="bg-gray-900 text-white text-sm px-3 py-2 rounded-lg whitespace-nowrap shadow-xl">
                {{ $slot }}
                <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-full">
                    <div class="border-8 border-transparent border-l-gray-900"></div>
                </div>
            </div>
        </div>
    </div>
</a>
