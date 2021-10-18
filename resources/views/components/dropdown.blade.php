@props(['alignment'=> 'left'])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0'

];
@endphp


<div class="relative" x-cloak x-data="{ open: false}" @click.away="open = false">
    <div x-on:click="open = ! open">
        {{ $trigger }}

    </div>

    <style>
        [x-cloak] { display: none !important; }
    </style>


    <div class="absolute {{ $alignmentClasses[$alignment] }} z-20 bg-white  text-black rounded shadow-md py-2 mt-1 w-40"
    x-show="open"
     x-cloak
    x-transition:enter="transition transform duration-1000"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition transform duration-1000"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>
