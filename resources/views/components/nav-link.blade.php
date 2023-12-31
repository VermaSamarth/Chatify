@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white-400 text-base font-semibold leading-5 text-white-900 focus:outline-none focus:border-white-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-semibold leading-5 text-white-500 hover:text-yellow-300 hover:border-white-300 focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
