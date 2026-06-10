<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Riwayat Pendidikan') }}
    </x-slot>

    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white border-[5px] border-black p-8 rounded-none">
            
            <form action="{{ route('admin.education.update', $education->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="school_name" class="block font-['Archivo_Black'] text-black text-sm uppercase tracking-widest mb-2">Nama Instansi / Sekolah</label>
                    <input type="text" id="school_name" name="school_name" required value="{{ old('school_name', $education->school_name) }}" class="w-full px-4 py-3 border-[3px] border-black rounded-none bg-white text-black font-['Work_Sans'] text-base focus:border-[5px] focus:ring-0 outline-none transition-none">
                    @error('school_name') <p class="text-[#FF0000] font-['Space_Mono'] text-sm font-bold mt-2">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="degree" class="block font-['Archivo_Black'] text-black text-sm uppercase tracking-widest mb-2">Jurusan / Strata Pendidikan</label>
                    <input type="text" id="degree" name="degree" required value="{{ old('degree', $education->degree) }}" class="w-full px-4 py-3 border-[3px] border-black rounded-none bg-white text-black font-['Work_Sans'] text-base focus:border-[5px] focus:ring-0 outline-none transition-none">
                    @error('degree') <p class="text-[#FF0000] font-['Space_Mono'] text-sm font-bold mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="start_year" class="block font-['Archivo_Black'] text-black text-sm uppercase tracking-widest mb-2">Tahun Masuk</label>
                        <input type="text" id="start_year" name="start_year" required value="{{ old('start_year', $education->start_year) }}" class="w-full px-4 py-3 border-[3px] border-black rounded-none bg-white text-black font-['Work_Sans'] text-base focus:border-[5px] focus:ring-0 outline-none transition-none">
                        @error('start_year') <p class="text-[#FF0000] font-['Space_Mono'] text-sm font-bold mt-2">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="end_year" class="block font-['Archivo_Black'] text-black text-sm uppercase tracking-widest mb-2">Tahun Lulus (Kosongkan Jika Aktif)</label>
                        <input type="text" id="end_year" name="end_year" value="{{ old('end_year', $education->end_year) }}" class="w-full px-4 py-3 border-[3px] border-black rounded-none bg-white text-black font-['Work_Sans'] text-base focus:border-[5px] focus:ring-0 outline-none transition-none">
                        @error('end_year') <p class="text-[#FF0000] font-['Space_Mono'] text-sm font-bold mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row justify-end space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t-[3px] border-black">
                    <a href="{{ route('admin.education.index') }}" class="inline-flex justify-center items-center px-6 py-4 bg-white border-[3px] border-black font-['Archivo_Black'] text-black text-sm uppercase tracking-widest hover:bg-black hover:text-white transition-none rounded-none text-center">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex justify-center items-center px-6 py-4 bg-black border-[3px] border-black font-['Archivo_Black'] text-white text-sm uppercase tracking-widest hover:bg-white hover:text-black transition-none rounded-none outline-none cursor-pointer">
                        Perbarui Data
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>