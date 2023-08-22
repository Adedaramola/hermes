@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 py-1.5 bg-gray-200/40 rounded-md text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-4 py-1.5 bg-transparent rounded-md text-sm leading-5 text-gray-500  hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>