<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            

            @php 
                $createRoute = Auth::user()->role === 'admin' 
                    ? 'admin.sequences.items.create' 
                    : 'penyiar.sequences.items.create'; 
            @endphp
            <a href="{{ route($createRoute, $sequence) }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      rounded-lg font-semibold text-sm text-white shadow hover:shadow-md 
                      hover:from-blue-700 hover:to-sky-600 transition">
                + Tambah Materi
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        @if (Auth::user()->role === 'admin')
                            <a href="{{ route('admin.programs.sequences.index', ['program' => $sequence->program_id]) }}" 
                               class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-indigo-600 
                                      bg-indigo-50 rounded-lg hover:bg-indigo-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 19l-7-7 7-7"/>
                                </svg>
                                Kembali ke Daftar Seqmen
                            </a>
                        @else
                            <a href="{{ route('penyiar.jadwal.index') }}" 
                               class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-indigo-600 
                                      bg-indigo-50 rounded-lg hover:bg-indigo-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 19l-7-7 7-7"/>
                                </svg>
                                Kembali ke Jadwal Saya
                            </a>
                        @endif
                    </div>
                    

                    <!-- Flash message -->
                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left">Materi</th>
                                    <th class="px-4 py-3 font-semibold text-left">Frame</th>
                                    <th class="px-4 py-3 font-semibold text-left">Durasi</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($items as $item)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $item->materi }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $item->frame ?? '-' }}</td>
                                    <td class="px-4 py-3 text-gray-600 font-mono">
                                        @if($item->durasi > 0)
                                            @php
                                                $totalSeconds = $item->durasi * 60;
                                                $menit = floor($totalSeconds / 60);
                                                $detik = round($totalSeconds % 60);
                                            @endphp
                                            {{ $menit }}:{{ $detik }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        @php 
                                            $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; 
                                        @endphp
                                        <div class="flex flex-wrap gap-2">
                                            <!-- Sub-List -->
                                            <a href="{{ route($prefix . 'items.materi-details.manage', $item) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full 
                                                      bg-green-100 text-green-700 hover:bg-green-200 transition">
                                                📂 Sub-List
                                            </a>

                                            <!-- ILM/Spot -->
                                            <a href="{{ route($prefix . 'items.item-details.manage', $item) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full 
                                                      bg-purple-100 text-purple-700 hover:bg-purple-200 transition">
                                                🎙️ ILM/Spot
                                            </a>

                                            <!-- Edit -->
                                            <a href="{{ route($prefix . 'items.edit', $item) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full 
                                                      bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                ✏️ Edit
                                            </a>

                                            <!-- Hapus -->
                                            <form action="{{ route($prefix . 'items.destroy', $item) }}" method="POST" 
                                                  onsubmit="return confirm('Anda yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="px-3 py-1 text-xs font-medium rounded-full 
                                                               bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                    🗑️ Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-6 text-gray-500">
                                        Belum ada materi siar untuk sequence ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
