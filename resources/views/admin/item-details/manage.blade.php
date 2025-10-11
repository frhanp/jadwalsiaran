<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola ILM, Spot, Filler untuk: 
            <span class="font-bold text-indigo-700">{{ $item->materi }}</span>
        </h2>
    </x-slot>

    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-6">
                    
                    {{-- Tombol kembali --}}
                    <div class="mb-4">
                        <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" 
                           class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
                                  text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
                                  transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                            Kembali ke Daftar Materi
                        </a>
                    </div>

                    {{-- Alert --}}
                    @if (session('success'))
                        <div class="rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                            ✅ {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="rounded-md bg-red-50 border border-red-200 text-red-800 px-4 py-3 text-sm">
                            ⚠️ {{ session('error') }}
                        </div>
                    @endif

                    {{-- Form --}}
                    <form method="POST" action="{{ route($prefix.'items.item-details.update-all', $item) }}"
                          x-data="{ details: {{ json_encode($item->itemDetails->map->only(['jenis', 'isi'])) }} }">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <template x-for="(detail, index) in details" :key="index">
                                <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-md border border-gray-200">
                                    <div class="w-1/4">
                                        <select :name="'details[' + index + '][jenis]'" x-model="detail.jenis"
                                                class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                            <option value="ilm">ILM</option>
                                            <option value="spot">Spot</option>
                                            <option value="filler">Filler</option>
                                        </select>
                                    </div>
                                    <div class="flex-1">
                                        <input type="text"
                                               :name="'details[' + index + '][isi]'"
                                               x-model="detail.isi"
                                               class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                               placeholder="Isi ILM, Spot, atau Filler...">
                                    </div>
                                    <button type="button" @click="details.splice(index, 1)"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <div class="mt-5">
                            <button type="button" @click="details.push({ jenis: 'ilm', isi: '' })"
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition">
                                + Tambah Baris
                            </button>
                        </div>

                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}"
                               class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
                                      text-gray-600 bg-gray-100 hover:bg-gray-200 hover:text-gray-800 
                                      transition-all duration-300 mr-3">
                                Batal
                            </a>
                            <x-primary-button>
                                Simpan Perubahan
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
