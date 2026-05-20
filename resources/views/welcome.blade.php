<x-layout title="Home | Devanno Andhika">
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

    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight mb-6">Tentang Saya</h2>
            <p class="text-lg text-slate-600 leading-relaxed max-w-3xl mx-auto mb-8">
                Saya adalah mahasiswa Teknologi Rekayasa Perangkat Lunak yang berdedikasi untuk membangun solusi digital yang efisien, bersih, dan berdampak nyata. Dengan ketertarikan kuat pada arsitektur pemrograman web, optimasi manajemen database, serta implementasi kecerdasan buatan, saya selalu antusias menghadapi tantangan baru dalam dunia rekayasa perangkat lunak.
            </p>
            <div class="inline-flex rounded-md shadow">
                <a href="/about" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-indigo-600 bg-indigo-50 hover:bg-indigo-100 transition">
                    Pelajari Profil Lengkap
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 border-t border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Fokus & Kompetensi</h2>
                <p class="mt-4 text-lg text-slate-600">Beberapa bidang keahlian teknis yang terus saya asah dan kembangkan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Full-Stack Development</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Membangun aplikasi web dari ujung ke ujung, mulai dari perancangan antarmuka komponen yang responsif hingga arsitektur backend, validasi form, dan integrasi relasi database yang kokoh.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 002-2H4a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">UI/UX & Layout Design</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Menerapkan prinsip tata letak visual, konsistensi tipografi, dan teori warna modern untuk menghadirkan pengalaman pengguna yang interaktif, bersih, serta nyaman diakses.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">AI Workflows & Automation</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Mengeksplorasi pemrosesan data cerdas, logika kontrol tingkat lanjut, serta integrasi modul kecerdasan buatan untuk menciptakan otomatisasi fitur sistem yang cerdas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-linear-to-r from-slate-900 via-indigo-950 to-slate-900 rounded-3xl p-8 md:p-12 shadow-xl relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-indigo-500/10 via-transparent to-transparent"></div>
                <div class="relative z-10 max-w-3xl">
                    <h2 class="text-3xl font-bold text-white mb-4">Eksplorasi Rekam Jejak & Proyek Dinamis</h2>
                    <p class="text-indigo-200/80 mb-8 leading-relaxed">Lihat bagaimana data riwayat akademis dikelola atau periksa galeri portofolio proyek terintegrasi database yang telah berhasil dikembangkan.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/education" class="bg-white text-slate-900 px-5 py-3 rounded-lg font-semibold hover:bg-slate-100 transition shadow-sm">
                            Riwayat Pendidikan
                        </a>
                        <a href="/portfolio" class="bg-transparent border border-white/20 text-white px-5 py-3 rounded-lg font-semibold hover:bg-white/10 transition">
                            Galeri Portofolio Proyek
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>