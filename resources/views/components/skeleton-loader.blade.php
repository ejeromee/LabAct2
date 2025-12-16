@props(['type' => 'card'])

@if($type === 'card')
<div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-100 animate-pulse">
    <div class="h-48 bg-gray-300"></div>
    <div class="p-6">
        <div class="h-4 bg-gray-300 rounded w-1/4 mb-3"></div>
        <div class="h-6 bg-gray-300 rounded w-3/4 mb-3"></div>
        <div class="h-4 bg-gray-300 rounded w-full mb-2"></div>
        <div class="h-4 bg-gray-300 rounded w-5/6 mb-4"></div>
        <div class="flex items-center justify-between">
            <div class="h-4 bg-gray-300 rounded w-1/4"></div>
            <div class="h-8 bg-gray-300 rounded w-1/4"></div>
        </div>
    </div>
</div>
@elseif($type === 'list')
<div class="bg-white rounded-lg p-6 shadow-md border border-gray-100 animate-pulse">
    <div class="flex items-center space-x-4">
        <div class="w-16 h-16 bg-gray-300 rounded-lg"></div>
        <div class="flex-1">
            <div class="h-5 bg-gray-300 rounded w-3/4 mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-1/2"></div>
        </div>
    </div>
</div>
@endif
