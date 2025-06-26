<x-layout.app>
    <form class="flex flex-col" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Cabeçalho -->
        <div class="flex justify-between w-full items-center">
            <h1 class="text-2xl font-bold text-white my-10">
                <span class="border-b-2 border-accent-orange">Pro</span>file
            </h1>

            <!-- Botão para abrir o modal -->
            <div class="flex justify-center items-center gap-4">
                <x-button variant="secondary" class="flex items-center gap-2 h-12" @click="modalOpen = true">
                    Cancel
                </x-button>

                <x-button variant="primary" class="flex items-center gap-2 h-12" @click="modalOpen = true">
                    Save
                </x-button>
            </div>
        </div>

        <!-- Conteúdo dos cards -->
        <div
            class="flex flex-col w-full justify-center items-center gap-4 max-h-[500px] overflow-y-auto scrollbar pt-16 pb-4">
            <div class="flex gap-6 w-full">
                <div class="flex flex-col flex-1 space-y-4">
                    <div class="flex gap-4">
                        <x-form.input name="name" label="Name" placeholder="Enter your name here" class="w-full"
                                      value="{{ old('name', $user->name) }}"/>
                        <x-form.input name="last_name" label="Last Name" placeholder="Enter your last name here"
                                      class="w-full" value="{{ old('last_name', $user->last_name) }}"/>
                    </div>
                    <div>
                        <x-form.input name="email" label="Email" placeholder="Enter your email here" class="w-full"
                                      value="{{ old('email', $user->email) }}"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center ml-6">
                    <label
                        class="bg-accent-orange font-bold text-center text-background-primary rounded-xl w-[100px] h-[100px] flex items-center justify-center cursor-pointer hover:bg-orange-600 transition">
                        <input type="file" name="avatar" class="hidden" accept="image/*">
                        @if($user?->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar Picture"
                                 class="w-full h-full object-cover rounded-lg"/>
                        @else
                            100x100px
                        @endif
                    </label>
                    <span class="text-md font-medium mt-2">
                            <x-icons.upload class="inline-block w-5 h-5 mr-1"/>
                            add avatar
                        </span>
                </div>
            </div>
        </div>
    </form>
</x-layout.app>
