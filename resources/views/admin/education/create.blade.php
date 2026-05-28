<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Riwayat Pendidikan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                
                <form action="{{ route('admin.education.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="school_name" class="block text-sm font-medium text-gray-700 mb-2">Nama Instansi / Sekolah</label>
                        <input type="text" id="school_name" name="school_name" required value="{{ old('school_name') }}" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('school_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="degree" class="block text-sm font-medium text-gray-700 mb-2">Jurusan / Strata Pendidikan</label>
                        <input type="text" id="degree" name="degree" required value="{{ old('degree') }}" placeholder="Contoh: S1 - Teknik Perangkat Lunak" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('degree') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="start_year" class="block text-sm font-medium text-gray-700 mb-2">Tahun Masuk</label>
                            <input type="text" id="start_year" name="start_year" required value="{{ old('start_year') }}" placeholder="Contoh: 2024" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                            @error('start_year') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="end_year" class="block text-sm font-medium text-gray-700 mb-2">Tahun Lulus (Kosongkan jika masih aktif)</label>
                            <input type="text" id="end_year" name="end_year" value="{{ old('end_year') }}" placeholder="Contoh: 2028" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                            @error('end_year') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                        <a href="{{ route('admin.education.index') }}" class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-lg text-sm transition">
                            Batal
                        </a>
                        <button type="submit" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg text-sm transition">
                            Simpan Data
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>