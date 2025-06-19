@props([
    'variant' => 'primary',
])

<button
    {{ $attributes->class([
        'hover:rounded-lg transition-all',
        'bg-accent-orange text-black py-2 px-4 rounded-full font-bold' => $variant === 'primary',
        'bg-background-secondary text-accent-orange py-2 px-4 rounded-full font-bold' => $variant === 'secondary',
    ]) }}>
    {{ $slot }}
</button>
