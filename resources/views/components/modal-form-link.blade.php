<div x-show="modalOpen" x-cloak 
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-30 backdrop-blur-md">
    <div class="bg-[#0F0B08] text-white rounded-2xl p-8 w-full max-w-3xl shadow-lg" @click.outside="modalOpen = false">

        <h2 class="text-xl font-bold mb-6 border-b border-orange-500 pb-2">Adicionar link</h2>

        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1">Título do link</label>
                    <input type="text" placeholder="Digite o nome do conteúdo"
                        class="bg-[#1A1A1A] w-full px-4 py-2 rounded-xl placeholder-gray-400 text-white focus:outline-none" />
                </div>

                <div>
                    <label class="block mb-1">Plataforma de streaming</label>
                    <input type="text" placeholder="Onde você está assistindo?"
                        class="bg-[#1A1A1A] w-full px-4 py-2 rounded-xl placeholder-gray-400 text-white focus:outline-none" />
                </div>
            </div>

            <div>
                <label class="block mb-1">URL</label>
                <input type="text" placeholder="Cole a URL do conteúdo"
                    class="bg-[#1A1A1A] w-full px-4 py-2 rounded-xl placeholder-gray-400 text-white focus:outline-none" />
            </div>

            <div class="flex items-center justify-between gap-6">
                <div class="flex flex-col items-center">
                    <div
                        class="bg-orange-500 text-center text-black font-bold rounded-xl w-[100px] h-[100px] flex items-center justify-center">
                        100×100 px
                    </div>
                    <span class="text-sm mt-2">⬆️ Adicionar imagem</span>
                </div>
            </div>

            <div class="flex justify-end gap-4 pt-4">
                <button type="button" @click="modalOpen = false"
                    class="bg-[#1A1A1A] hover:bg-[#333] text-white px-5 py-2 rounded-full transition">
                    Voltar
                </button>
                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-black font-bold px-6 py-2 rounded-full transition">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
