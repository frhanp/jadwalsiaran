<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            @if(Auth::user()->role === 'penyiar' && isset($unreadNotifications))
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="relative text-gray-500 hover:text-blue-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    @if($unreadNotifications->count() > 0)
                        <span class="absolute -top-1 -right-1 flex h-4 w-4">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-4 w-4 bg-red-500 text-white text-xs items-center justify-center">{{ $unreadNotifications->count() }}</span>
                        </span>
                    @endif
                </button>
    
                <div x-show="open" @click.away="open = false" x-cloak
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl border z-50">
                    <div class="p-3 font-bold text-sm border-b">Notifikasi</div>
                    <div class="divide-y max-h-96 overflow-y-auto">
                        @forelse($unreadNotifications as $notification)
                            <a href="{{ $notification->data['url'] ?? '#' }}" class="block px-4 py-3 hover:bg-gray-50">
                                <p class="text-sm text-gray-700">{{ $notification->data['message'] }}</p>
                                <p class="text-xs text-gray-500 mt-1">{{ $notification->created_at->diffForHumans() }}</p>
                            </a>
                        @empty
                            <p class="text-center text-sm text-gray-500 py-6">Tidak ada notifikasi baru.</p>
                        @endforelse
                    </div>
                    @if($unreadNotifications->count() > 0)
                    <div class="p-2 border-t text-center">
                         <form method="POST" action="{{ route('notifications.markAsRead') }}">
                            @csrf
                            <button type="submit" class="text-xs text-blue-600 hover:underline">Tandai semua sudah dibaca</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>
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
                                <p class="text-sm text-yellow-700">Total Seqmen</p>
                                <p class="text-2xl font-bold text-yellow-900">{{ $totalSequences }}</p>
                            </div>
                            <div class="bg-yellow-100 p-4 rounded-lg">
                                <p class="text-sm text-yellow-700">Total Studio</p>
                                <p class="text-2xl font-bold text-yellow-900">{{ $totalStudios }}</p>
                            </div>
                        </div>
                    
                    {{-- KONTEN UNTUK PENYIAR --}}
                    @elseif (Auth::user()->role === 'penyiar')
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">Daftar Acara Siaran Anda</h3>
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
                                    &raquo; Lihat Semua Daftar Acara Siaran Saya
                                </a>
                            </div>
                        @else
                            <p>Anda belum memiliki daftar acara siaran yang ditugaskan.</p>
                        @endif

                    {{-- KONTEN UNTUK KATIM & KEPSTA --}}
                    @elseif (in_array(Auth::user()->role, ['katim', 'kepsta']))
                        <h3 class="text-lg font-semibold border-b pb-2 mb-4">Akses Laporan</h3>
                        <p class="mb-4">Anda dapat melihat laporan daftar acara siaran harian melalui link di bawah ini.</p>
                        <a href="{{ route('laporan.jadwal.harian') }}" class="inline-block px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-500">
                            Lihat Laporan Daftar Acara Siaran Harian
                        </a>
                    
                    @else
                        <p>{{ __("You're logged in!") }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>