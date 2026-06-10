<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center border-b-[5px] border-black pb-4">
            <h2 class="font-['Archivo_Black'] uppercase tracking-tight text-3xl text-black leading-tight">
                {{ __('Kelola Portofolio') }}
            </h2>
            <a href="{{ route('admin.projects.create') }}" class="border-[3px] border-black bg-black text-white px-6 py-2 font-['Archivo_Black'] uppercase tracking-wider hover:bg-white hover:text-black transition-none cursor-pointer">
                + Tambah Projek
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-auth-session-status class="mb-8 bg-white" :status="session('status')" />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="border-[5px] border-black bg-white flex flex-col">
                        <div class="border-b-[5px] border-black h-48 bg-[#F5F5F5] overflow-hidden">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-none">
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h3 class="font-['Archivo_Black'] uppercase text-xl text-black mb-2">{{ $project->title }}</h3>
                            <p class="font-['Work_Sans'] text-sm text-black flex-grow mb-6 line-clamp-3">
                                {{ $project->description }}
                            </p>
                            
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="font-['Space_Mono'] text-sm text-[#0000FF] underline decoration-[3px] hover:bg-[#0000FF] hover:text-white mb-6 w-max transition-none block">
                                    [Lihat_Link]
                                </a>
                            @endif

                            <div class="flex items-center gap-3 mt-auto pt-4 border-t-[3px] border-black">
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="border-[3px] border-black bg-white text-black px-4 py-2 font-['Archivo_Black'] text-xs uppercase tracking-wider hover:bg-black hover:text-white transition-none text-center flex-1">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('admin.projects.destroy', $project->id) }}" class="flex-1" onsubmit="return confirm('Yakin ingin menghapus projek ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full border-[3px] border-[#FF0000] bg-white text-[#FF0000] px-4 py-2 font-['Archivo_Black'] text-xs uppercase tracking-wider hover:bg-[#FF0000] hover:text-white transition-none cursor-pointer">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>