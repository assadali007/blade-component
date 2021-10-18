



<x-from method="{{ $method }}"  action="{{ $action }}"  >

    <div>
        <button type="submit" class="{{ $attributes->get('class') }}" >
            {{ $slot }}
        </button>
    </div>
</x-from>
