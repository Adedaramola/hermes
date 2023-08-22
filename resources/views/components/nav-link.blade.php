<a {{ $attributes->class([
    'flex items-center space-x-2 px-5 py-2 text-sm leading-4 text-gray-600 cursor-pointer',
    'hover:bg-gray-100' => !$active,
    'text-gray-900 font-medium bg-gray-100' => $active
]) }}>
    {{ $slot }}
</a>