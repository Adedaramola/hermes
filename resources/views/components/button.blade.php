@props(['variant' => 'small', 'color' => 'primary'])

@php
    switch ($variant) {
        case 'tiny':
            $variantClasses = 'px-2.5 py-1.5 text-xs';
            break;
        case 'small':
        default:
            $variantClasses = 'px-4 py-2 text-sm leading-4';
            break;
    }

    switch ($color) {
        case 'primary':
        default:
            $colorClasses = 'text-white bg-indigo-600 border-indigo-200';
            break;
    }
@endphp

<button class="relative {{ $variantClasses }} {{ $colorClasses }} inline-flex items-center justify-center shadow-sm text-center border rounded-md ease-out duration-200 transition-all outline-0 focus-visible:outline-4 focus-visible:outline-offset-1">
    {{ $slot }}
</button>