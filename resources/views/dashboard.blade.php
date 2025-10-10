<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Selamat Datang, <span class="font-bold">{{ Auth::user()->name }}</span>!</p>

                    {{-- KONTEN UNTUK ADMIN --}}
                    @if (Auth::user()->role === 'admin')
                        {{-- <h3 class="text-lg font-semibold border-b pb-2 mb-4">Ringkasan Sistem</h3> --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-blue-100 p-4 rounded-lg">
                                <p class="text-sm text-blue-700">Total Pengguna</p>
                                <p class="text-2xl font-bold text-blue-900">{{ $totalUsers }}</p>
                            </div>
                            <div class="bg-green-100 p-4 rounded-lg">
                                <p class="text-sm text-green-700">Total Program</p>
                                <p class="text-2xl font-bold text-green-900">{{ $totalPrograms }}</p>
                            </div>
                            <div class="bg-yellow-100 p-4 rounded-lg">
                                <p class="text-sm text-yellow-700">Total Sequence</p>
                                <p class="text-2xl font-bold text-yellow-900">{{ $totalSequences }}</p>
                            </div>
                        </div>
                        {{-- <div class="mt-6">
                            <a href="{{ route('admin.programs.index') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                                &raquo; Kelola Program Siaran
                            </a>
                        </div> --}}
                    
                    {{-- KONTEN UNTUK PENYIAR --}}
                    @elseif (Auth::user()->role === 'penyiar')
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">Jadwal Terdekat Anda</h3>
                        @if($jadwalTerdekat->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($jadwalTerdekat as $sequence)
                                <li class="p-3 bg-gray-50 rounded-md border">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="font-semibold">{{ $sequence->nama }} ({{ $sequence->program->nama }})</p>
                                            <p class="text-sm text-gray-600">Pukul: {{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</p>
                                        </div>
                                        <a href="{{ route('penyiar.sequences.items.index', $sequence) }}" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">
                                            Isi Materi &raquo;
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="mt-6">
                                <a href="{{ route('penyiar.jadwal.index') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                                    &raquo; Lihat Semua Jadwal Saya
                                </a>
                            </div>
                        @else
                            <p>Anda belum memiliki jadwal siaran yang ditugaskan.</p>
                        @endif

                    {{-- KONTEN UNTUK KATIM & KEPSTA --}}
                    @elseif (in_array(Auth::user()->role, ['katim', 'kepsta']))
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">Akses Laporan</h3>
                        <p class="mb-4">Anda dapat melihat laporan jadwal siaran harian melalui link di bawah ini.</p>
                        <a href="{{ route('laporan.jadwal.harian') }}" class="inline-block px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-500">
                            Lihat Laporan Jadwal Harian
                        </a>
                    
                    @else
                        <p>{{ __("You're logged in!") }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>