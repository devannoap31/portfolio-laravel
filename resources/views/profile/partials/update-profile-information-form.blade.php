<section>
    <header class="border-b-[3px] border-black pb-4">
        <h2 class="font-['Archivo_Black'] uppercase text-xl text-black tracking-tight">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-2 font-['Work_Sans'] text-sm text-black border-l-[3px] border-black pl-3">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 border-[3px] border-black bg-slate-50">
                    <p class="font-['Work_Sans'] text-sm text-black">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="mt-2 block w-max font-['Archivo_Black'] text-sm uppercase underline decoration-[3px] hover:bg-black hover:text-white transition-none focus:outline-none p-1 cursor-pointer">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-4 font-['Space_Mono'] font-bold text-sm text-[#008000] uppercase tracking-wider">
                            > {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-4">
            <x-primary-button class="sm:w-auto py-3 px-6">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="font-['Space_Mono'] font-bold text-sm text-[#008000] uppercase">
                    [ {{ __('Saved.') }} ]
                </p>
            @endif
        </div>
    </form>
</section>