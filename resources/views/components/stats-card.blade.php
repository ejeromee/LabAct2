@props(['title', 'value', 'color' => 'indigo', 'trend' => null])

<div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
    <div class="flex items-center justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-gray-600 mb-1">{{ $title }}</p>
            <h3 class="text-3xl font-bold text-gray-900">{{ $value }}</h3>
            
            @if($trend)
                <div class="mt-2 flex items-center text-sm">
                    @if($trend > 0)
                        <svg class="w-4 h-4 text-green-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        <span class="text-green-600 font-medium">{{ $trend }}%</span>
                    @else
                        <svg class="w-4 h-4 text-red-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                        <span class="text-red-600 font-medium">{{ abs($trend) }}%</span>
                    @endif
                    <span class="text-gray-500 ml-1">vs last month</span>
                </div>
            @endif
        </div>
        
        @isset($icon)
        <div class="ml-4">
            <div class="bg-{{ $color }}-100 rounded-full p-4">
                {{ $icon }}
            </div>
        </div>
        @endisset
    </div>
</div>
