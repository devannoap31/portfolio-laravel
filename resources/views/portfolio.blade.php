<x-layout title="Portfolio | Devanno Andhika">
    <section class="min-h-screen bg-slate-50 pt-32 pb-20" x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16 transition-all duration-700 transform" :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Portfolio Proyek</h2>
                <p class="mt-4 text-lg text-slate-600">Beberapa karya dan solusi digital yang telah saya bangun.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach ($projects as $index => $project)
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                     style="transition-delay: {{ $index * 150 }}ms;">
                    
                    <div class="h-52 bg-slate-200 relative overflow-hidden">
                        @if($project->image)
                            <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                            <div class="absolute inset-0 bg-linear-to-br from-indigo-500 to-purple-600 opacity-80 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                <span class="text-white font-medium text-lg tracking-wider">{{ $project->title }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="p-8">
                        <h3 class="font-bold text-2xl text-slate-900 mb-3">{{ $project->title }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">{{ $project->description }}</p>
                        
                        <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-100">
                            @php
                                $techs = explode(',', $project->tech_stack);
                            @endphp
                            
                            @foreach($techs as $tech)
                                <span class="bg-slate-100 text-slate-600 text-xs px-3 py-1.5 rounded-lg font-semibold tracking-wide uppercase">
                                    {{ trim($tech) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>