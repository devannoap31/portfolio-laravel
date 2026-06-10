<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard Utama') }}
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white border-[5px] border-black p-8 md:p-12 rounded-none">
            <h1 class="font-['Archivo_Black'] text-4xl md:text-5xl text-black uppercase tracking-tight mb-4">
                Selamat Datang, Admin!
            </h1>
            <p class="font-['Work_Sans'] text-lg text-black leading-relaxed max-w-3xl mb-8">
                Sistem Manajemen Konten (CMS) portfolio Anda telah bertransformasi sepenuhnya ke sistem **RawBlock**. Semua komponen menggunakan struktur kotak asimetris beraliran brutalitas visual tingkat tinggi.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 font-['Space_Mono'] text-base">
                <div class="border-[3px] border-black p-5 bg-white">
                    <span class="font-bold uppercase text-[#0000FF]">[STATUS_SISTEM]</span> OPERASIONAL_
                </div>
                <div class="border-[3px] border-black p-5 bg-black text-white">
                    <span class="font-bold uppercase text-yellow-400">[LINGKUNGAN]</span> LOKAL_LARAGON_
                </div>
            </div>
        </div>
    </div>
</x-app-layout>