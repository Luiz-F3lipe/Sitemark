@props([
  'active' => 'false',
])

<button
  {{ $attributes->class([
    'text-white hover:text-accent-orange' => $active === 'false',
    'bg-accent-orange p-2 rounded-full shadow-md text-background-primary' => $active === 'true',
  ]) }}>
  {{ $slot }}
</button>
