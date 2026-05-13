<x-layout title="Education | Devanno Andhika">
    <section class="min-h-screen bg-slate-50 pt-32 pb-20" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16 transition-all duration-700 transform" :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Riwayat Pendidikan</h2>
                <p class="text-lg text-slate-600 mt-4">Perjalanan akademis yang membentuk pola pikir dan keterampilan saya.</p>
            </div>

            <div class="relative max-w-3xl mx-auto pl-6 md:pl-8 border-l-2 border-indigo-100 space-y-10">
                
                @foreach ($educations as $index => $edu)
                
                <div class="relative group transition-all duration-700 transform" 
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'"
                     style="transition-delay: {{ $index * 150 }}ms;">
                    
                    <span class="absolute -left-8.25 md:-left-10.25 top-1.5 w-4 h-4 rounded-full bg-white border-4 border-indigo-200 group-hover:border-indigo-600 transition-colors duration-300"></span>
                    
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 group-hover:border-indigo-100 group-hover:shadow-md transition-all duration-300 transform group-hover:-translate-y-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-slate-900">{{ $edu->school_name }}</h3>
                            <span class="inline-block bg-indigo-50 text-indigo-600 text-sm font-semibold px-4 py-1.5 rounded-full mt-3 sm:mt-0">
                                {{ $edu->start_year }} - {{ $edu->end_year ?: 'Sekarang' }}
                            </span>
                        </div>
                        <p class="text-slate-600 font-medium text-lg">{{ $edu->degree }}</p>
                    </div>

                </div>
                
                @endforeach

            </div>

        </div>
    </section>
</x-layout>