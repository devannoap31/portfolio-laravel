<x-layout>
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-16 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/hero.jpg') }}');">
        
        <div class="absolute inset-0 bg-slate-900/60"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white mb-4">
                Halo, Saya <span class="text-indigo-400">Devanno Andhika Putra</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
                Seorang Software Engineering Enthusiast yang berfokus pada pengembangan web Full-Stack modern dan eksplorasi teknologi AI.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/portfolio" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 shadow-md transition">
                    Lihat Proyek Saya
                </a>
                <a href="/contact" class="bg-white/10 backdrop-blur-sm text-white border border-white/30 px-6 py-3 rounded-lg font-medium hover:bg-white/20 shadow-sm transition">
                    Hubungi Saya
                </a>
            </div>
        </div>
    </section>
</x-layout>