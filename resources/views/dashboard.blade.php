<x-layout.app>
    <div x-data="{ modalOpen: {{ $errors->any() || isset($linkEditando) ? 'true' : 'false' }}}" class="flex flex-col">
        <!-- Cabeçalho -->
        <div class="flex justify-between w-full items-center">
            <h1 class="text-2xl font-bold text-white my-10">
                <span class="border-b-2 border-accent-orange">Lin</span>ks
            </h1>

            <!-- Botão para abrir o modal -->
            <x-button variant="secondary" class="flex items-center gap-2 h-12" @click="modalOpen = true">
                <x-icons.add class="text-accent-orange"/>
                Add Link
            </x-button>
        </div>

        <!-- Conteúdo dos cards -->
        <div
                class="flex flex-col w-full justify-center items-center gap-4 max-h-[500px] overflow-y-auto scrollbar pt-16">
            @foreach($links as $link)
                <div class="flex justify-center items-center gap-4">
                    @unless($loop->first)
                        <form action="{{ route('link.up', $link) }}" method="post"
                              class="flex justify-center items-center">
                            @csrf
                            @method('PATCH')
                            <button class="outline-none focus:outline-none">
                                <x-icons.up class="text-content-primary cursor-pointer hover:text-accent-orange"/>
                            </button>
                        </form>
                    @endunless

                    @unless($loop->last)
                        <form action="{{ route('link.down', $link) }}" method="post"
                              class="flex justify-center items-center">
                            @csrf
                            @method('PATCH')
                            <button class="outline-none focus:outline-none">
                                <x-icons.down class="text-content-primary cursor-pointer hover:text-accent-orange"/>
                            </button>
                        </form>
                    @endunless

                    <x-card :link="$link"/>
                </div>
            @endforeach
        </div>

        <!-- Modal que depende de modalOpen -->
        <x-modal-form-link :link="$linkEditando ?? null"/>
    </div>
</x-layout.app>
