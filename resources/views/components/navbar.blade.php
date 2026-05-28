<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'bg-white/80 backdrop-blur-lg shadow-sm dark:bg-slate-900/80 dark:shadow-slate-950/30': scrolled || open, 'bg-transparent': !scrolled && !open }"
     class="fixed top-0 w-full z-50 transition-all duration-300">
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="shrink-0 relative z-50">
                <a href="/" class="text-2xl font-black text-indigo-600 dark:text-indigo-400 tracking-tighter">Devanno.</a>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="/" class="{{ request()->is('/') ? 'text-indigo-600 font-bold dark:text-indigo-400' : 'text-slate-600 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400' }} transition">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'text-indigo-600 font-bold dark:text-indigo-400' : 'text-slate-600 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400' }} transition">About</a>
                <a href="/education" class="{{ request()->is('education') ? 'text-indigo-600 font-bold dark:text-indigo-400' : 'text-slate-600 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400' }} transition">Education</a>
                <a href="/portfolio" class="{{ request()->is('portfolio') ? 'text-indigo-600 font-bold dark:text-indigo-400' : 'text-slate-600 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400' }} transition">Portfolio</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-indigo-600 font-bold dark:text-indigo-400' : 'text-slate-600 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-indigo-400' }} transition">Contact</a>
            </div>
            
            <div class="flex items-center md:hidden relative z-50">
                <button @click="open = !open" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="fixed inset-0 bg-white dark:bg-slate-900 z-40 flex flex-col justify-center items-center h-screen md:hidden"
         style="display: none;">
        
        <div class="flex flex-col items-center space-y-8 text-2xl font-bold">
            <a href="/" @click="open = false" class="{{ request()->is('/') ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-800 hover:text-indigo-600 dark:text-slate-200 dark:hover:text-indigo-400' }}">Home</a>
            <a href="/about" @click="open = false" class="{{ request()->is('about') ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-800 hover:text-indigo-600 dark:text-slate-200 dark:hover:text-indigo-400' }}">About</a>
            <a href="/education" @click="open = false" class="{{ request()->is('education') ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-800 hover:text-indigo-600 dark:text-slate-200 dark:hover:text-indigo-400' }}">Education</a>
            <a href="/portfolio" @click="open = false" class="{{ request()->is('portfolio') ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-800 hover:text-indigo-600 dark:text-slate-200 dark:hover:text-indigo-400' }}">Portfolio</a>
            <a href="/contact" @click="open = false" class="{{ request()->is('contact') ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-800 hover:text-indigo-600 dark:text-slate-200 dark:hover:text-indigo-400' }}">Contact</a>
        </div>
    </div>
</nav>