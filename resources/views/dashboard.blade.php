<x-layout.app>
    <div x-data="{ modalOpen: false }" class="flex flex-col">
        <!-- Cabeçalho -->
        <div class="flex justify-between w-full items-center">
            <h1 class="text-2xl font-bold text-white my-10">
                <span class="border-b-2 border-accent-orange">Lin</span>ks
            </h1>

            <!-- Botão para abrir o modal -->
            <x-button variant="secondary" class="flex items-center gap-2 h-12" @click="modalOpen = true">
                <x-icons.add class="text-accent-orange" />
                Add Link
            </x-button>
        </div>

        <!-- Conteúdo dos cards -->
        <div
            class="flex flex-col w-full justify-center items-center gap-4 max-h-[500px] overflow-y-auto scrollbar pt-16">
            <x-card />
        </div>

        <!-- Modal que depende de modalOpen -->
        <x-modal-form-link />
    </div>
</x-layout.app>
