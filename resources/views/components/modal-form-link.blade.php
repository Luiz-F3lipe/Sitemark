@props(['link' => null])

<div x-show="modalOpen" x-cloak
     class="fixed inset-0 z-50 flex items-center justify-center bg-background-primary bg-opacity-30 backdrop-blur-md">
    <div class="bg-background-primary text-white rounded-2xl p-8 w-full max-w-3xl shadow-lg"
         @click.outside="window.location.href='{{ route('dashboard') }}'">

        <h2 class="text-xl font-bold mb-6 pb-2">
            <span class="border-b-2 border-accent-orange">Cre</span>ate link
        </h2>

        <form
            class="space-y-6"
            action="{{ $link ? route('link.update', $link->id)  : route('link.store') }}"
            method="POST"
        >
            @csrf
            @if($link)
                @method('PUT')
            @endif
            <div class="flex gap-6">
                <div class="flex flex-col flex-1 space-y-4">
                    <div class="flex gap-4">
                        <x-form.input name="title" label="Title" placeholder="Enter the title here" class="w-full" value="{{ old('title', $link?->title) }}"/>
                        <x-form.input name="streaming" label="Streaming" placeholder="Enter the streaming here"
                                      class="w-full" value="{{ old('streaming', $link?->streaming) }}"/>
                    </div>
                    <div>
                        <x-form.input name="url" label="URL" placeholder="Enter the URL here" class="w-full" value="{{ old('url', $link?->url) }}"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center ml-6">
                    <label class="bg-accent-orange font-bold text-center text-background-primary rounded-xl w-[100px] h-[100px] flex items-center justify-center cursor-pointer hover:bg-orange-600 transition">
                            <input type="file" name="image" class="hidden" accept="image/*">
                            100×100px
                        </label>
                        <span class="text-md font-medium mt-2">
                            <x-icons.upload class="inline-block w-5 h-5 mr-1" />
                            add image
                        </span>
                </div>
            </div>

            <div class="flex justify-end gap-4 pt-4">
                <button type="button" @click="window.location.href='{{ route('dashboard') }}'"
                        class="bg-background-secondary hover:bg-background-tertiary text-white px-5 py-2 rounded-full transition">
                    Cancelar
                </button>
                <button type="submit"
                        class="bg-accent-orange hover:bg-orange-600 text-background-primary font-bold px-6 py-2 rounded-full transition">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
