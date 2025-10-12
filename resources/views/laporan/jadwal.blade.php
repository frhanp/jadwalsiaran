<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Laporan Daftar Acara Siaran</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 no-print">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">Laporan Daftar Acara Siaran</h2>
                    <form method="GET" action="{{ route('laporan.jadwal.harian') }}" class="flex items-end space-x-4">
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Pilih Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal->format('Y-m-d') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">Tampilkan</button>
                        
                        {{-- TOMBOL CETAK SEMUA DIKEMBALIKAN --}}
                        <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d')]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400">
                            Cetak Semua
                        </a>
                    </form>
                </div>
            </div>

            @if($studios->isNotEmpty())
            <div x-data="{ 
                activeStudioTab: '{{ $studios->first()->nama }}',
                activeProgramTabs: {} 
            }" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="px-4 border-b border-gray-200">
                    <nav class="-mb-px flex space-x-3" aria-label="Tabs">
                        @foreach ($studios as $studio)
                            <button @click="activeStudioTab = '{{ $studio->nama }}'"
                                    :class="activeStudioTab === '{{ $studio->nama }}' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700'"
                                    class="whitespace-nowrap py-4 px-4 border-b-2 font-medium text-sm transition-colors duration-200 focus:outline-none">
                                {{ $studio->nama }}
                            </button>
                        @endforeach
                    </nav>
                </div>

                @foreach ($jadwalPerStudio as $namaStudio => $programsInStudio)
                    <div x-show="activeStudioTab === '{{ $namaStudio }}'" x-cloak
                         x-init="if (activeProgramTabs['{{ $namaStudio }}'] === undefined && {{ $programsInStudio->isNotEmpty() ? 'true' : 'false' }}) { activeProgramTabs['{{ $namaStudio }}'] = {{ $programsInStudio->first()->id }}; }">
                        
                        @if($programsInStudio->isNotEmpty())
                        <div class="px-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/70">
                            <nav class="flex space-x-2" aria-label="Program Tabs">
                                @foreach ($programsInStudio as $program)
                                    <button @click="activeProgramTabs['{{ $namaStudio }}'] = {{ $program->id }}"
                                            :class="activeProgramTabs['{{ $namaStudio }}'] === {{ $program->id }} ? 'bg-white text-indigo-600 shadow-sm' : 'text-gray-500 hover:text-gray-700'"
                                            class="whitespace-nowrap my-2 py-2 px-4 rounded-md font-medium text-sm transition-colors duration-200 focus:outline-none">
                                        {{ $program->nama }}
                                    </button>
                                @endforeach
                            </nav>
                            @foreach ($programsInStudio as $program)
                                <div x-show="activeProgramTabs[activeStudioTab] === {{ $program->id }}" x-cloak>
                                    <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d'), 'program' => $program->id]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 no-print">
                                        Cetak {{ $program->nama }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        @endif

                        @foreach ($programsInStudio as $program)
                            <div x-show="activeProgramTabs[activeStudioTab] === {{ $program->id }}" x-cloak class="printable-area">
                                <div class="p-6 text-gray-900">
                                    @include('laporan._tabel_program', ['program' => $program])
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            @else
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center text-gray-500">
                    Jadwal siaran belum tersedia untuk tanggal yang dipilih.
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>