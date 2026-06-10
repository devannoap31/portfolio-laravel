<nav x-data="{ open: false }" class="bg-white border-b-[5px] border-black sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <x-application-logo class="w-10 h-10 text-black" />
                        <span class="font-['Archivo_Black'] text-xl tracking-tighter text-black hidden sm:inline-block">DASHBOARD.</span>
                    </a>
                </div>

                <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.contacts.index')" :active="request()->routeIs('admin.contacts.*')">
                        {{ __('Inbox Pesan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.education.index')" :active="request()->routeIs('admin.education.*')">
                        {{ __('Kelola Pendidikan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.projects.index')" :active="request()->routeIs('admin.projects.*')">
                        {{ __('Kelola Portofolio') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-3">
                <div class="border-[3px] border-black bg-black text-white px-4 py-2 font-['Space_Mono'] text-xs uppercase font-bold tracking-wider select-none">
                    [{{ Auth::user()->name }}]
                </div>
                
                <a href="{{ route('profile.edit') }}" class="border-[3px] border-black px-4 py-2 font-['Archivo_Black'] text-xs uppercase tracking-wider hover:bg-black hover:text-white transition-none {{ request()->routeIs('profile.edit') ? 'bg-black text-white' : 'bg-white text-black' }}">
                    {{ __('Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="border-[3px] border-black bg-white px-4 py-2 font-['Archivo_Black'] text-xs text-[#FF0000] uppercase tracking-wider hover:bg-[#FF0000] hover:text-white transition-none cursor-pointer">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 border-[3px] border-black text-black bg-white hover:bg-black hover:text-white transition-none focus:outline-none rounded-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden border-t-[4px] border-black bg-white">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.contacts.index')" :active="request()->routeIs('admin.contacts.index')">
                {{ __('Inbox Pesan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.education.index')" :active="request()->routeIs('admin.education.*')">
                {{ __('Kelola Pendidikan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.projects.index')" :active="request()->routeIs('admin.projects.*')">
                {{ __('Kelola Portofolio') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-4 border-t-[3px] border-black bg-slate-50 p-4 space-y-3">
            <div>
                <div class="font-['Archivo_Black'] text-base text-black uppercase tracking-tight">[{{ Auth::user()->name }}]</div>
                <div class="font-['Space_Mono'] text-xs text-slate-600 mt-1">{{ Auth::user()->email }}</div>
            </div>

            <div class="flex flex-col space-y-2">
                <a href="{{ route('profile.edit') }}" class="w-full text-center border-[2px] border-black bg-white font-['Archivo_Black'] text-sm uppercase tracking-wider py-2.5 transition-none block {{ request()->routeIs('profile.edit') ? 'bg-black text-white text-white' : 'text-black' }}">
                    {{ __('Edit Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-center font-['Archivo_Black'] text-sm text-[#FF0000] border-[2px] border-black bg-white hover:bg-black hover:text-white transition-none uppercase tracking-wider py-2.5 cursor-pointer">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>