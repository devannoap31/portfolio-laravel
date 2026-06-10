<x-app-layout>
    <x-slot name="header">
        {{ __('Inbox Pesan Kontak') }}
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white border-[5px] border-black rounded-none">
            <div class="p-6 overflow-x-auto">
                
                <table class="w-full text-left border-collapse border-[3px] border-black">
                    <thead>
                        <tr class="bg-black text-white font-['Archivo_Black'] uppercase text-sm tracking-wider">
                            <th class="p-4 border-[3px] border-black">Tanggal</th>
                            <th class="p-4 border-[3px] border-black">Nama Pengirim</th>
                            <th class="p-4 border-[3px] border-black">Email</th>
                            <th class="p-4 border-[3px] border-black">Pesan</th>
                        </tr>
                    </thead>
                    <tbody class="font-['Work_Sans'] text-base text-black">
                        @forelse ($contacts as $contact)
                        <tr class="border-[3px] border-black hover:bg-slate-50 transition-none">
                            <td class="p-4 border-[3px] border-black font-['Space_Mono'] text-sm whitespace-nowrap">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                            <td class="p-4 border-[3px] border-black font-bold uppercase">{{ $contact->name }}</td>
                            <td class="p-4 border-[3px] border-black text-[#0000FF] font-semibold underline decoration-[2px] underline-offset-2">
                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            </td>
                            <td class="p-4 border-[3px] border-black text-black leading-relaxed">{{ $contact->message }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-8 text-center font-['Space_Mono'] italic text-slate-500 bg-slate-50">BELUM_ADA_PESAN_MASUK_</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>