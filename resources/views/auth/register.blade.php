<x-layout.auth>
    <div class="flex flex-col gap-4 w-full h-full justify-center">
        <h1 class="text-2xl font-bold text-white my-10">
            <span class="border-b-2 border-accent-orange">Cre</span>ate your account
        </h1>

        <form class="flex flex-col gap-4" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="flex gap-4">
                <x-form.input name="name" type="text" label="Name" placeholder="Enter your name" value="{{ old('name') }}" />

                <x-form.input name="last_name" type="text" label="Last Name" placeholder="Enter your last name" value="{{ old('last_name') }}" />
            </div>
            <x-form.input name="email" type="email" label="Email" placeholder="Enter your email" value="{{ old('email') }}" />

            <x-form.input name="password" type="password" label="Password" placeholder="***********" />

            @if(session()->get('message'))
                <p class="text-red-500 text-md font-bold text-center">
                    {{ session()->get('message') }}
                </p>
            @endif

            <x-button variant="primary" class="my-10">
                Create Account
            </x-button>
        </form>



        <p class="text-center text-content-secondary font-normal">
            Already have an account?
            <a href="{{ route('login') }}" class="text-white font-bold hover:underline cursor-pointer">
                Access your account
            </a>
        </p>
    </div>
</x-layout.auth>
