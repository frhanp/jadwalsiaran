<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Acara Siaran Saya') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">

                    @if (session('success'))
                        <div class="rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                            ✅ {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full text-sm text-gray-700">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">Studio</th>
                                    <th class="px-4 py-3 text-left font-semibold">Program</th>
                                    <th class="px-4 py-3 text-left font-semibold">Nama Sequence</th>
                                    <th class="px-4 py-3 text-left font-semibold">Waktu</th>
                                    <th class="px-4 py-3 text-left font-semibold">Jumlah Pendengar</th>
                                    <th class="px-4 py-3 text-center font-semibold w-40">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($sequences as $sequence)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-3 font-medium text-gray-900">
                                            {{ $sequence->program->studio->nama ?? '-' }}
                                        </td>
                                        <td class="px-4 py-3 font-medium text-gray-900">
                                            {{ $sequence->program->nama ?? 'N/A' }}
                                        </td>
                                        <td class="px-4 py-3 text-gray-700">{{ $sequence->nama }}</td>
                                        <td class="px-4 py-3 text-gray-700">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                        <td class="px-4 py-3">
                                            <form action="{{ route('penyiar.sequences.pendengar.update', $sequence) }}" 
                                                  method="POST" class="flex items-center gap-2">
                                                @csrf
                                                @method('PATCH')
                                        
                                                <div class="relative">
                                                    <input type="number" name="jumlah_pendengar" 
                                                           value="{{ $sequence->jumlah_pendengar }}"
                                                           class="w-28 pl-8 pr-2 py-1.5 text-sm border-gray-300 rounded-md 
                                                                  focus:border-indigo-500 focus:ring-indigo-500">
                                                                  
                                                             
                                                </div>
                                        
                                                <button type="submit"
                                                        class="inline-flex items-center gap-1 px-3 py-1.5 bg-indigo-600 text-white 
                                                               text-xs font-medium rounded-md hover:bg-indigo-700 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    Simpan
                                                </button>
                                            </form>
                                        </td>
                                        
                                        <td class="px-4 py-3 text-center">
                                            <a href="{{ route('penyiar.sequences.items.index', $sequence) }}"
                                               class="inline-flex items-center gap-2 px-3 py-1.5 rounded-md text-sm font-medium 
                                                      text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
                                                      transition-all duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                </svg>
                                                Isi Materi
                                            </a>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-6 text-gray-500">
                                            Anda belum memiliki jadwal siaran yang ditugaskan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $sequences->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
