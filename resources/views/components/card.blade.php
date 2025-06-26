@props(['link'])

<div class="w-[600px] h-20 bg-background-secondary flex items-center px-5 gap-4 rounded-3xl flex-shrink-0">
    @if($link->photo)
        <img class="w-14 h-14 rounded-lg" src="/storage/{{ $link->photo }}" alt="Link Picture" />
    @else
        <div class="w-14 h-14 rounded-lg bg-accent-orange flex items-center justify-center">
            <x-icons.link class="w-10 h-10 text-content-primary" />
        </div>
    @endif
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

        <form action="{{ route('link.destroy', $link) }}" method="post" class="flex justify-center items-center">
            @csrf
            @method('DELETE')
            <button class="outline-none focus:outline-none">
                <x-icons.trash class="text-content-primary cursor-pointer hover:text-accent-orange" />
            </button>
        </form>
    </div>
</div>
