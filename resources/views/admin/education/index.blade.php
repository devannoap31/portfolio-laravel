<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 w-full">
            <span>{{ __('Kelola Riwayat Pendidikan') }}</span>
            <a href="{{ route('admin.education.create') }}" class="bg-black text-white px-6 py-3 border-[3px] border-black font-['Archivo_Black'] text-sm uppercase tracking-wider hover:bg-white hover:text-black transition-none inline-block">
                + Tambah Pendidikan
            </a>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        @if(session('success'))
            <div class="mb-6 p-4 bg-white border-[3px] border-[#008000] text-[#008000] font-['Space_Mono'] font-bold text-sm uppercase">
                [SUKSES] : {{ session('success') }}_
            </div>
        @endif

        <div class="bg-white border-[5px] border-black rounded-none">
            <div class="p-6 overflow-x-auto">
                <table class="w-full text-left border-collapse border-[3px] border-black">
                    <thead>
                        <tr class="bg-black text-white font-['Archivo_Black'] uppercase text-sm tracking-wider">
                            <th class="p-4 border-[3px] border-black">Nama Instansi / Sekolah</th>
                            <th class="p-4 border-[3px] border-black">Jurusan / Gelar</th>
                            <th class="p-4 border-[3px] border-black">Tahun</th>
                            <th class="p-4 border-[3px] border-black text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="font-['Work_Sans'] text-base text-black">
                        @forelse ($educations as $edu)
                        <tr class="border-[3px] border-black hover:bg-slate-50 transition-none">
                            <td class="p-4 border-[3px] border-black font-bold uppercase">{{ $edu->school_name }}</td>
                            <td class="p-4 border-[3px] border-black text-slate-800">{{ $edu->degree }}</td>
                            <td class="p-4 border-[3px] border-black font-['Space_Mono'] text-sm whitespace-nowrap">{{ $edu->start_year }} - {{ $edu->end_year ?: 'SEKARANG' }}</td>
                            <td class="p-4 text-center whitespace-nowrap space-x-2 border-[3px] border-black">
                                <a href="{{ route('admin.education.edit', $edu->id) }}" class="inline-block bg-white border-[2px] border-black text-black px-3 py-1.5 font-['Archivo_Black'] text-xs uppercase tracking-wide hover:bg-black hover:text-white transition-none">
                                    Edit
                                </a>
                                <form action="{{ route('admin.education.destroy', $edu->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus data riwayat ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-[#FF0000] text-white border-[2px] border-black px-3 py-1.5 font-['Archivo_Black'] text-xs uppercase tracking-wide hover:bg-white hover:text-black transition-none cursor-pointer">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-8 text-center font-['Space_Mono'] italic text-slate-500 bg-slate-50">BELUM_ADA_DATA_RIWAYAT_PENDIDIKAN_</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>