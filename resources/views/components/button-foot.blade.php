@props([
  'active' => 'false',
])

<button
  {{ $attributes->class([
    'bg-accent-orange p-2 rounded-full shadow-md' => $active === 'true',
  ]) }}>
  {{ $slot }}
</button>
