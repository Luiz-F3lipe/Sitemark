@props(['text'])

<span {{ $attributes->class([
    "text-sm w-10 h-2 px-1 rounded-lg text-content-inverse",
    'bg-accent-purple' => $text === 'HBO MAX',
    'bg-accent-blue' => $text === 'DISNEY+',
    'bg-accent-red' => $text === 'NETFLIX',
    'bg-accent-orange' => $text === 'PRIME VIDEO',
    'bg-accent-green' => $text === 'APPLE TV',
  ]) }}>
    {{ $text }}
</span>
