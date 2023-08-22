<button {{ 
    $attributes->merge([
        'class' => 'inline-flex items-center justify-center border font-medium oveflow-hidden rounded-md ease-out duration-200 transition-all outline-0 focus-visible:outline-4 focus-visible:outline-offset-1'
    ])->class([
        'px-4 py-1.5 text-xs leading-2' => $size === 'xs',
        'px-4 py-2.5 text-sm leading-4' => $size === 'sm',
        'bg-emerald-500 text-white' => $variant === 'primary'
    ])
}}>
    {{ $slot }}
</button>