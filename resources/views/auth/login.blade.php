<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded-none border-[3px] border-black text-black shadow-none focus:ring-0 w-6 h-6 cursor-pointer" name="remember">
                <span class="ms-3 text-sm font-bold font-['Space_Mono'] text-black">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col space-y-4 pt-4">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>

            @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="font-bold text-[#0000FF] font-['Space_Mono'] text-sm hover:bg-black hover:text-white transition-none px-2 py-1 underline decoration-[2px] underline-offset-4" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif
        </div>
    </form>
</x-guest-layout>