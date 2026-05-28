<x-layout title="Contact | Devanno Andhika">
    <section class="min-h-screen bg-slate-50 dark:bg-slate-900 pt-32 pb-20 flex items-center transition-colors duration-300" x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full transition-all duration-1000 transform" :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">Mari Berdiskusi!</h2>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Tertarik berkolaborasi? Tinggalkan pesan Anda.</p>
            </div>

            @if(session('success'))
                <div x-data="{ alert: true }" x-show="alert" class="mb-8 p-4 rounded-xl bg-green-50 dark:bg-green-950/30 border border-green-200 dark:border-green-900 text-green-700 dark:text-green-400 flex justify-between items-center shadow-sm max-w-3xl mx-auto">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="font-medium text-sm">{{ session('success') }}</span>
                    </div>
                    <button @click="alert = false" class="text-green-500 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            @endif

            <div class="bg-white dark:bg-slate-800 p-8 md:p-10 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 max-w-3xl mx-auto transition-all duration-300">
                <form action="/contact" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-600 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white focus:bg-white dark:focus:bg-slate-850 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition duration-200" placeholder="Contoh: Devanno Andhika Putra">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-600 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white focus:bg-white dark:focus:bg-slate-850 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition duration-200" placeholder="devannoap318@gmail.com">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Pesan Anda</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-600 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-white focus:bg-white dark:focus:bg-slate-850 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition duration-200 resize-none" placeholder="Tuliskan pesan Anda secara detail..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-4 px-4 rounded-xl hover:bg-indigo-700 hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

        </div>
    </section>
</x-layout>