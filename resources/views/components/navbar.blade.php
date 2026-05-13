<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'bg-white/80 backdrop-blur-lg shadow-sm': scrolled || open, 'bg-transparent': !scrolled && !open }"
     class="fixed top-0 w-full z-50 transition-all duration-300">
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="shrink-0 relative z-50">
                <a href="/" class="text-2xl font-black text-indigo-600 tracking-tighter">Devanno.</a>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="/" class="{{ request()->is('/') ? 'text-indigo-600 font-bold' : 'text-slate-600 hover:text-indigo-600' }} transition">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'text-indigo-600 font-bold' : 'text-slate-600 hover:text-indigo-600' }} transition">About</a>
                <a href="/education" class="{{ request()->is('education') ? 'text-indigo-600 font-bold' : 'text-slate-600 hover:text-indigo-600' }} transition">Education</a>
                <a href="/portfolio" class="{{ request()->is('portfolio') ? 'text-indigo-600 font-bold' : 'text-slate-600 hover:text-indigo-600' }} transition">Portfolio</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-indigo-600 font-bold' : 'text-slate-600 hover:text-indigo-600' }} transition">Contact</a>
            </div>

            <div class="md:hidden flex items-center relative z-50">
                <button @click="open = !open" class="focus:outline-none p-2 w-10 h-10 flex flex-col justify-center items-center group">
                    <span :class="open ? 'rotate-45 translate-y-1.5' : '-translate-y-1'" class="block w-6 h-0.5 bg-slate-800 transition-transform duration-300 ease-in-out origin-center"></span>
                    <span :class="open ? 'opacity-0' : 'opacity-100'" class="block w-6 h-0.5 bg-slate-800 transition-opacity duration-300 ease-in-out"></span>
                    <span :class="open ? '-rotate-45 -translate-y-1.5' : 'translate-y-1'" class="block w-6 h-0.5 bg-slate-800 transition-transform duration-300 ease-in-out origin-center"></span>
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
         class="fixed inset-0 bg-white z-40 flex flex-col justify-center items-center h-screen md:hidden"
         style="display: none;">
        
        <div class="flex flex-col items-center space-y-8 text-2xl font-bold">
            <a href="/" @click="open = false" class="{{ request()->is('/') ? 'text-indigo-600' : 'text-slate-800 hover:text-indigo-600' }}">Home</a>
            <a href="/about" @click="open = false" class="{{ request()->is('about') ? 'text-indigo-600' : 'text-slate-800 hover:text-indigo-600' }}">About</a>
            <a href="/education" @click="open = false" class="{{ request()->is('education') ? 'text-indigo-600' : 'text-slate-800 hover:text-indigo-600' }}">Education</a>
            <a href="/portfolio" @click="open = false" class="{{ request()->is('portfolio') ? 'text-indigo-600' : 'text-slate-800 hover:text-indigo-600' }}">Portfolio</a>
            <a href="/contact" @click="open = false" class="{{ request()->is('contact') ? 'text-indigo-600' : 'text-slate-800 hover:text-indigo-600' }}">Contact</a>
        </div>
    </div>
</nav>