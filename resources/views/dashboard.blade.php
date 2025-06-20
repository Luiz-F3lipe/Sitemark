<x-layout.app>
    <div class="flex flex-col">
        <div class="flex justify-between w-full items-center">
            <h1 class="text-2xl font-bold text-white my-10">
                <span class="border-b-2 border-accent-orange">Lin</span>ks
            </h1>

            <x-button variant="secondary" class="flex items-center gap-2 h-12">
                <x-icons.add class="text-accent-orange" />
                Add Link
            </x-button>
        </div>

        <div class="flex flex-col w-full justify-center items-center gap-4 max-h-[500px] overflow-y-auto scrollbar pt-16">
          <x-card />
        </div>
    </div>
</x-layout.app>
