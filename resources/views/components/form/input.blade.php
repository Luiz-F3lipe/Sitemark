@props(['name', 'label'])

<div class="flex flex-col gap-1 w-full relative">
    <label for="{{ $name }}" class="font-medium text-md text-content-primary">
        {{ $label }}
    </label>

    <div class="relative">
        <input
            name="{{ $name }}"
            id="{{ $name }}"
            class="w-full pr-10 p-2 rounded-lg border {{ $errors->has($name) ? 'border-accent-red' : (old($name) ? 'border-green-500' : 'border-border-primary') }} bg-background-secondary text-content-secondary font-medium focus:outline-none focus:ring-2 focus:ring-accent-orange"
            {{ $attributes }} />

        @if (old($name))
            <x-icons.check
                class="absolute right-3 top-1/2 -translate-y-1/2 text-green-500 w-5 h-5 pointer-events-none"/>
        @endif
    </div>

    @error($name)
    <p class="text-red-500 text-sm mt-1 flex items-center gap-2">
        <x-icons.close class="text-red-500 w-4 h-4"/>
        {{ $message }}
    </p>
    @enderror
</div>
