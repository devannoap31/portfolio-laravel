<x-layout title="About | Devanno Andhika">
    <section id="about" class="min-h-screen bg-white dark:bg-slate-900 pt-32 pb-20 flex items-center transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">Tentang Saya</h2>
                    <p class="text-slate-600 dark:text-slate-300 mb-4 leading-relaxed">
                        Halo! Saya mahasiswa program studi Teknologi Rekayasa Perangkat Lunak (TRPL) di Politeknik Indonusa Surakarta. Saat ini saya juga aktif berorganisasi sebagai pengurus di HIMAPROTEKSA pada Divisi Minat Bakat.
                    </p>
                    <p class="text-slate-600 dark:text-slate-300 mb-4 leading-relaxed">
                        Fokus utama saya adalah di bidang Full-Stack Web Development menggunakan ekosistem modern seperti Laravel, serta memiliki ketertarikan khusus pada implementasi Artificial Intelligence seperti Fuzzy Logic dan pengembangan aplikasi mobile.
                    </p>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        Di luar jam ngoding, saya biasanya menikmati waktu dengan bermain gitar elektrik atau menjelajahi alam melalui pendakian gunung Trans-Jawa.
                    </p>
                </div>
                <div class="bg-slate-200 dark:bg-slate-800 rounded-2xl aspect-square flex items-center justify-center overflow-hidden border-4 border-white dark:border-slate-700 shadow-lg transition-colors duration-300">
                    <img src="{{ asset('images/vanno.jpg') }}" alt="Foto Devanno" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>
</x-layout>