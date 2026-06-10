<x-app-layout>
    <x-slot name="header">
        <div class="border-b-[5px] border-black pb-4">
            <h2 class="font-['Archivo_Black'] uppercase tracking-tight text-3xl text-black leading-tight">
                {{ __('Edit Projek') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="bg-white border-[5px] border-black p-8 space-y-8">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="title" :value="__('Nama Projek')" />
                    <x-text-input id="title" name="title" type="text" :value="old('title', $project->title)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Deskripsi Projek')" />
                    <textarea id="description" name="description" rows="5" class="border-[3px] border-black rounded-none bg-white text-black px-4 py-3 font-['Work_Sans'] text-base focus:border-[5px] focus:border-black focus:ring-0 outline-none w-full transition-none resize-y" required>{{ old('description', $project->description) }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('description')" />
                </div>

                <div>
                    <x-input-label for="link" :value="__('Link Projek (Opsional)')" />
                    <x-text-input id="link" name="link" type="url" :value="old('link', $project->link)" placeholder="https://..." />
                    <x-input-error class="mt-2" :messages="$errors->get('link')" />
                </div>

                <div>
                    <x-input-label for="image" :value="__('Gambar / Thumbnail Baru (Opsional)')" />
                    <p class="font-['Space_Mono'] text-xs text-black mb-2 border-l-[3px] border-black pl-2">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                    <div class="border-[3px] border-black p-3 bg-white hover:bg-[#F5F5F5] transition-none cursor-pointer mb-4">
                        <input id="image" name="image" type="file" accept="image/*" class="w-full font-['Space_Mono'] text-sm file:mr-4 file:py-2 file:px-4 file:border-[3px] file:border-black file:text-sm file:font-['Archivo_Black'] file:uppercase file:bg-black file:text-white hover:file:bg-white hover:file:text-black file:transition-none file:cursor-pointer" />
                    </div>
                    
                    @if($project->image)
                        <div class="border-[3px] border-black p-2 bg-[#F5F5F5] inline-block">
                            <p class="font-['Space_Mono'] font-bold text-xs uppercase mb-2">Gambar Saat Ini:</p>
                            <img src="{{ asset('storage/' . $project->image) }}" alt="Current Image" class="h-32 object-cover border-[3px] border-black">
                        </div>
                    @endif
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>

                <div class="pt-4 border-t-[3px] border-black flex gap-4">
                    <x-primary-button class="sm:w-auto">
                        {{ __('Simpan Perubahan') }}
                    </x-primary-button>
                    <a href="{{ route('admin.projects.index') }}" class="inline-flex justify-center items-center px-6 py-4 bg-white border-[3px] border-black font-['Archivo_Black'] text-black text-base uppercase tracking-widest hover:bg-black hover:text-white transition-none cursor-pointer">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>