
@props([
    'type' => 'error',
     'colors' => [
         'success' =>  'bg-green-400 ',
          'error'  =>   'bg-red-600	',
          'warning' =>  'bg-yellow-200	'
     ]
])

{{-- <section class="{{ $colors[$type] }} border-b p-4"> --}}


</div>
{{--  merge with my default --}}
<section {{ $attributes->merge(['class'=>"{$colors[$type]} border-b p-4 "]) }}>
    <div class="flex justify-between">

        {{ $slot }}

        <button>&times</button>

    </div>
</section>
