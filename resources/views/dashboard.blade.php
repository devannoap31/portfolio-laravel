<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard Utama') }}
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8 pb-12 mt-8">
        <!-- Main Welcome Block -->
        <div class="bg-white border-[5px] border-black p-8 md:p-12 rounded-none">
            <h1 class="font-['Archivo_Black'] text-4xl md:text-5xl text-black uppercase tracking-tight mb-4 leading-none">
                Pusat Komando
            </h1>
            <p class="font-['Work_Sans'] text-lg text-black leading-relaxed max-w-3xl mb-8">
                Sistem Manajemen Konten (CMS) portofolio Anda beroperasi penuh dengan antarmuka <strong>RawBlock</strong>. Akses modul, tinjau statistik, dan kelola entri tanpa distraksi visual.
            </p>
            
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.projects.index') }}" class="inline-block bg-black text-white border-[3px] border-black px-6 py-3 font-['Work_Sans'] font-bold uppercase tracking-[2px] hover:bg-white hover:text-black transition-none rounded-none text-sm md:text-base">
                    Kelola Portofolio &rarr;
                </a>
                <a href="{{ route('admin.education.index') }}" class="inline-block bg-white text-black border-[3px] border-black px-6 py-3 font-['Work_Sans'] font-bold uppercase tracking-[2px] hover:bg-black hover:text-white transition-none rounded-none text-sm md:text-base">
                    Kelola Pendidikan &rarr;
                </a>
            </div>
        </div>

        <!-- Statistics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Stat 1 -->
            <div class="bg-white border-[3px] border-black p-6 rounded-none flex flex-col justify-between hover:bg-black hover:text-white transition-none group">
                <div class="font-['Space_Mono'] text-sm font-bold uppercase mb-6 text-[#0000FF] group-hover:text-white">
                    [ENTRI_PORTOFOLIO]
                </div>
                <div>
                    <div class="font-['Archivo_Black'] text-7xl leading-none mb-4">{{ $projectCount }}</div>
                    <div class="font-['Work_Sans'] text-sm uppercase tracking-widest border-t-[3px] border-black group-hover:border-white pt-3 font-bold">
                        Total Proyek Aktif
                    </div>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="bg-black text-white border-[3px] border-black p-6 rounded-none flex flex-col justify-between group hover:bg-white hover:text-black transition-none">
                <div class="font-['Space_Mono'] text-sm font-bold uppercase mb-6 text-white group-hover:text-[#0000FF]">
                    [RIWAYAT_PENDIDIKAN]
                </div>
                <div>
                    <div class="font-['Archivo_Black'] text-7xl leading-none mb-4">{{ $educationCount }}</div>
                    <div class="font-['Work_Sans'] text-sm uppercase tracking-widest border-t-[3px] border-white group-hover:border-black pt-3 font-bold">
                        Instansi Tercatat
                    </div>
                </div>
            </div>

            <!-- Stat 3 -->
            <div class="bg-white border-[3px] border-black p-6 rounded-none flex flex-col justify-between hover:bg-black hover:text-white transition-none group">
                <div class="font-['Space_Mono'] text-sm font-bold uppercase mb-6 text-[#0000FF] group-hover:text-white">
                    [INBOX_MASUK]
                </div>
                <div>
                    <div class="font-['Archivo_Black'] text-7xl leading-none mb-4">{{ $messageCount }}</div>
                    <div class="font-['Work_Sans'] text-sm uppercase tracking-widest border-t-[3px] border-black group-hover:border-white pt-3 font-bold">
                        Pesan Pengunjung
                    </div>
                </div>
            </div>
        </div>

        <!-- System Status -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0 font-['Space_Mono'] text-sm border-[3px] border-black rounded-none">
            <div class="p-5 bg-white border-b-[3px] md:border-b-0 md:border-r-[3px] border-black flex items-center">
                <span class="font-bold uppercase text-[#0000FF] mr-4">[SISTEM_INTI]</span> 
                <span class="bg-white text-[#008000] px-2 py-1 uppercase font-bold tracking-widest border-[2px] border-[#008000] inline-block">
                    OPERASIONAL
                </span>
            </div>
            <div class="p-5 bg-black text-white flex items-center">
                <span class="font-bold uppercase text-[#FFA500] mr-4">[LINGKUNGAN]</span> 
                <span>LOKAL_LARAGON_ENV</span>
            </div>
        </div>
    </div>
</x-app-layout>