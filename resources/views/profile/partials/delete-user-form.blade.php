<section class="space-y-6">
    <header class="border-b-[3px] border-black pb-4">
        <h2 class="font-['Archivo_Black'] uppercase text-xl text-[#FF0000] tracking-tight">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-2 font-['Work_Sans'] text-sm text-black border-l-[3px] border-[#FF0000] pl-3">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" class="sm:w-auto py-3 px-6">
        {{ __('Delete Account') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 border-[5px] border-black bg-white">
            @csrf
            @method('delete')

            <h2 class="font-['Archivo_Black'] text-xl uppercase tracking-tight text-black mb-4">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="font-['Work_Sans'] text-sm text-black bg-[#F5F5F5] border-[3px] border-black p-3 mb-6">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                <x-text-input id="password" name="password" type="password" class="block w-full" placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-8 flex justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')" class="py-3 px-6">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="py-3 px-6">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>