<x-guest-layout>
    <div class="font-['Archivo_Black'] text-3xl uppercase tracking-tight border-b-[5px] border-black pb-4 mb-6">
        RESET PASSWORD.
    </div>

    <div class="mb-6 font-['Work_Sans'] text-base text-black border-l-[5px] border-black pl-4 bg-[#F5F5F5] py-3 pr-3">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <x-auth-session-status class="mb-6 bg-white" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-8">
            <x-primary-button class="sm:w-auto">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>