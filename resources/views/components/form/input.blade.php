@props(['name', 'label'])

<div class="flex flex-col gap-1 w-full">
  <label class="font-medium text-md text-content-primary">
    {{ $label }}
  </label>

  <input
    class="w-full p-2 rounded-lg border {{ $errors->has($name) ? 'border-accent-red' : 'border-border-primary' }} bg-background-secondary text-content-secondary font-medium focus:outline-none focus:ring-2 focus:ring-accent-orange"
    {{ $attributes }} 
  />

  @error( $name )
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>