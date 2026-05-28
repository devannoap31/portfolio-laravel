<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Riwayat Pendidikan') }}
            </h2>
            <a href="{{ route('admin.education.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition">
                + Tambah Pendidikan
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl font-medium text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-100 border-b border-slate-200">
                                <th class="p-4 font-semibold text-slate-700">Nama Instansi / Sekolah</th>
                                <th class="p-4 font-semibold text-slate-700">Jurusan / Gelar</th>
                                <th class="p-4 font-semibold text-slate-700">Tahun</th>
                                <th class="p-4 font-semibold text-slate-700 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($educations as $edu)
                            <tr class="border-b border-slate-100 hover:bg-slate-50">
                                <td class="p-4 font-medium text-slate-900">{{ $edu->school_name }}</td>
                                <td class="p-4 text-slate-600">{{ $edu->degree }}</td>
                                <td class="p-4 text-slate-500 whitespace-nowrap">{{ $edu->start_year }} - {{ $edu->end_year ?: 'Sekarang' }}</td>
                                <td class="p-4 text-center whitespace-nowrap space-x-2">
                                    <a href="{{ route('admin.education.edit', $edu->id) }}" class="inline-block bg-yellow-500 text-white px-3 py-1.5 rounded-md text-xs font-bold hover:bg-yellow-600 transition">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.education.destroy', $edu->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white px-3 py-1.5 rounded-md text-xs font-bold hover:bg-red-700 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="p-4 text-center text-slate-500 italic">Belum ada data riwayat pendidikan.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>