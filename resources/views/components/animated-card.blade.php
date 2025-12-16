<div {{ $attributes->merge(['class' => 'group relative bg-white rounded-xl overflow-hidden shadow-md border border-gray-100 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer']) }}>
    {{ $slot }}
    
    <!-- Animated border glow effect -->
    <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(168, 85, 247, 0.1) 100%);"></div>
</div>
