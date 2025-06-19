<x-layout.auth>
    <div class="flex flex-col gap-4 w-full h-full justify-center">
        <h1 class="text-2xl font-bold text-white my-10">
            <span class="border-b-2 border-accent-orange">Acc</span>ess your account
        </h1>

        <x-form.input
            name="email"
            type="email"
            label="Email"
            placeholder="Enter your email"
            required
        />
    
        <x-form.input
            name="password"
            type="password"
            label="Password"
            placeholder="***********"
            required
        />

        <x-button variant="primary" class="my-20">
            Login
        </x-button>


        <p class="text-center text-content-secondary font-normal">
            Dont have any account?
            <a class="text-white font-bold hover:underline cursor-pointer">
                Create an account
            </a>
        </p>
    </div>
</x-layout.auth>
