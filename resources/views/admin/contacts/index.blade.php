<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inbox Pesan Kontak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-100 border-b border-slate-200">
                                <th class="p-4 font-semibold text-slate-700">Tanggal</th>
                                <th class="p-4 font-semibold text-slate-700">Nama Pengirim</th>
                                <th class="p-4 font-semibold text-slate-700">Email</th>
                                <th class="p-4 font-semibold text-slate-700">Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                            <tr class="border-b border-slate-100 hover:bg-slate-50">
                                <td class="p-4 text-sm text-slate-500 whitespace-nowrap">{{ $contact->created_at->format('d M Y, H:i') }}</td>
                                <td class="p-4 font-medium text-slate-900">{{ $contact->name }}</td>
                                <td class="p-4 text-sm text-blue-600"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                <td class="p-4 text-sm text-slate-600 max-w-md">{{ $contact->message }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="p-4 text-center text-slate-500 italic">Belum ada pesan masuk.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>