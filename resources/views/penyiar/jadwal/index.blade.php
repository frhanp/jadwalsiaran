<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Acara Siaran Saya') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                    ✔ {{ session('success') }}
                </div>
            @endif

            <div class="space-y-8">
                @forelse ($jadwalPetugasList as $jadwal)
                @php
                    // Mengambil data pivot untuk penyiar yang sedang login
                    $penyiarPivot = $jadwal->penyiars->find(Auth::id())->pivot;
                    $status = $penyiarPivot->status;
                @endphp

                {{-- AWAL MODIFIKASI: x-data diubah untuk mengelola dua modal yang berbeda --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" x-data="{ modalPendengarOpen: false, modalTolakOpen: false }">
                    <div class="p-6 border-b border-gray-200 flex flex-wrap justify-between items-center gap-4">
                        <div>
                            <div class="flex items-center gap-3">
                                <h3 class="text-lg font-bold text-gray-900">{{ $jadwal->program->nama }}</h3>
                                @if($status == 'pending')
                                    <span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Menunggu Konfirmasi</span>
                                @elseif($status == 'diterima')
                                    <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Diterima</span>
                                @elseif($status == 'ditolak')
                                    <span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Ditolak</span>
                                @endif
                            </div>
                            <p class="text-sm text-gray-500">{{ $jadwal->program->studio->nama ?? '' }} - {{ \Carbon\Carbon::parse($jadwal->tanggal)->isoFormat('dddd, D MMMM Y') }}</p>
                        </div>
                        
                        <div class="flex items-center gap-2 flex-shrink-0">
                            @if($status == 'pending')
                                <form action="{{ route('penyiar.tugas.terima', $jadwal) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="px-4 py-2 text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">Terima</button>
                                </form>
                                <button @click="modalTolakOpen = true" class="px-4 py-2 text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700">Tolak</button>
                            @endif

                            @if($status == 'diterima')
                                <button @click="modalPendengarOpen = true" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium rounded-md text-slate-700 bg-slate-100 hover:bg-slate-200 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                    <span>Kelola Pendengar ({{ $jadwal->pendengars_count }})</span>
                                </button>
                            @endif
                        </div>
                    </div>
                    
                    @if($status == 'diterima')
                    <div class="p-6 text-gray-900">
                        <table class="min-w-full text-sm">
                            <thead class="text-left text-gray-500">
                                <tr>
                                    <th class="pb-3 font-normal w-1/3">Seqmen</th>
                                    <th class="pb-3 font-normal w-1/4">Waktu</th>
                                    <th class="pb-3 font-normal">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwal->program->sequences as $sequence)
                                <tr class="border-t border-gray-200">
                                    <td class="py-3 font-semibold">{{ $sequence->nama }}</td>
                                    <td class="py-3">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                    <td class="py-3">
                                        <a href="{{ route('penyiar.sequences.items.index', $sequence) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                            Isi Materi &raquo;
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif

                    <div x-show="modalPendengarOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title-pendengar" role="dialog" aria-modal="true">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="modalPendengarOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="modalPendengarOpen = false" aria-hidden="true"></div>
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                            <div x-show="modalPendengarOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title-pendengar">Kelola Pendengar - {{ $jadwal->program->nama }}</h3>
                                    <div class="mt-4">
                                        <form action="{{ route('penyiar.pendengars.store', $jadwal) }}" method="POST" class="space-y-4 bg-gray-50 p-4 rounded-md">
                                            @csrf
                                            <div>
                                                <label for="nama-{{$jadwal->id}}" class="text-sm font-medium">Nama</label>
                                                <input type="text" name="nama" id="nama-{{$jadwal->id}}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                            </div>
                                            <div>
                                                <label for="komentar-{{$jadwal->id}}" class="text-sm font-medium">Komentar/Pesan</label>
                                                <textarea name="komentar" id="komentar-{{$jadwal->id}}" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
                                            </div>
                                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700">Tambah</button>
                                        </form>
                                        
                                        <div class="mt-6 max-h-60 overflow-y-auto pr-2">
                                            <h4 class="font-semibold mb-2">Daftar Tercatat</h4>
                                            <ul class="space-y-3">
                                                @forelse($jadwal->pendengars as $pendengar)
                                                <li class="flex justify-between items-start text-sm border-b pb-2">
                                                    <div>
                                                        <p class="font-semibold text-gray-800">{{ $pendengar->nama }}</p>
                                                        <p class="text-gray-600">{{ $pendengar->komentar }}</p>
                                                    </div>
                                                    <form action="{{ route('penyiar.pendengars.destroy', $pendengar) }}" method="POST" onsubmit="return confirm('Hapus data ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-500 hover:text-red-700">&times;</button>
                                                    </form>
                                                </li>
                                                @empty
                                                <p class="text-center text-gray-500 text-sm py-4">Belum ada data pendengar.</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button type="button" @click="modalPendengarOpen = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:text-sm">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="modalTolakOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title-tolak" role="dialog" aria-modal="true">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="modalTolakOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="modalTolakOpen = false" aria-hidden="true"></div>
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                            <div x-show="modalTolakOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <form action="{{ route('penyiar.tugas.tolak', $jadwal) }}" method="POST">
                                    @csrf
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title-tolak">Alasan Penolakan</h3>
                                        <p class="text-sm text-gray-500 mt-1">Mengapa Anda menolak jadwal siaran untuk program <span class="font-semibold">{{ $jadwal->program->nama }}</span>?</p>
                                        <div class="mt-4">
                                            <textarea name="alasan_penolakan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required minlength="10" placeholder="Mohon berikan alasan yang jelas (min. 10 karakter)..."></textarea>
                                            <x-input-error :messages="$errors->get('alasan_penolakan')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 sm:ml-3 sm:w-auto sm:text-sm">Kirim Penolakan</button>
                                        <button type="button" @click="modalTolakOpen = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:text-sm">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center text-gray-500">
                        Anda tidak memiliki jadwal siaran yang ditugaskan.
                    </div>
                </div>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $jadwalPetugasList->links() }}
            </div>
        </div>
    </div>
</x-app-layout>