@props(['value'])

<label {{ $attributes->merge(['class'=>'not-sr-only block font-regular text-slate-600 text-sm']) }}>
    {{ $value ?? $slot }}
</label>