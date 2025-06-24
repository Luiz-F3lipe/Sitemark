@props(['link'])

<div class="w-[600px] h-20 bg-background-secondary flex items-center px-5 gap-4 rounded-3xl flex-shrink-0">
    <div class="w-14 h-14 bg-accent-purple"></div>
    <div class="flex flex-col">
        <h2 class="text-lg font-bold text-content-primary">
            {{ $link->title }}
            <x-badge :text="$link->streaming" />
        </h2>
        <a class="text-sm text-content-secondary italic cursor-pointer hover:underline">
            {{ $link->url }}
        </a>
    </div>
    <div class="flex items-center gap-2 ml-auto">
        <a href="{{ route('link.edit', $link->id)}}" class="outline-none focus:outline-none">
            <x-icons.edit class="text-content-primary cursor-pointer hover:text-accent-orange" />
        </a>
        <a class="outline-none focus:outline-none">
            <x-icons.trash class="text-content-primary cursor-pointer hover:text-accent-orange" />
        </a>
    </div>
</div>
