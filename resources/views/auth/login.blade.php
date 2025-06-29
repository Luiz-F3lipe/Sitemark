<x-layout.auth>
    <div class="flex flex-col gap-4 w-full h-full justify-center">
        <h1 class="text-2xl font-bold text-white my-10">
            <span class="border-b-2 border-accent-orange">Acc</span>ess your account
        </h1>

        <form class="flex flex-col gap-4" action="{{ route('login') }}" method="POST">
            @csrf
            <x-form.input name="email" type="email" label="Email" placeholder="Enter your email" value="{{ old('email') }}" />

            <x-form.input name="password" type="password" label="Password" placeholder="***********" />

            @if(session()->get('message'))
                <p class="text-red-500 text-md font-bold text-center">
                    {{ session()->get('message') }}
                </p>
            @endif

            <x-button variant="primary" class="my-20">
                Login
            </x-button>
        </form>



        <p class="text-center text-content-secondary font-normal">
            Dont have any account?
            <a href="{{ route('register') }}" class="text-white font-bold hover:underline cursor-pointer">
                Create an account
            </a>
        </p>
    </div>
</x-layout.auth>
