<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola ILM, Spot, Filler untuk: <span class="font-bold">{{ $item->materi }}</span>
        </h2>
        <a href="{{ route('admin.sequences.items.index', $item->sequence_id) }}" class="text-sm text-indigo-600 hover:text-indigo-900 mt-1 block">&larr; Kembali ke Daftar Materi</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.items.item-details.update-all', $item) }}"
                          x-data="{ details: {{ json_encode($item->itemDetails->map->only(['jenis', 'isi'])) }} }">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <template x-for="(detail, index) in details" :key="index">
                                <div class="flex items-center space-x-3 bg-gray-50 p-3 rounded-md">
                                    <div class="w-1/4">
                                        <select :name="'details[' + index + '][jenis]'" x-model="detail.jenis" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
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
                                    <button type="button" @click="details.splice(index, 1)" class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <div class="mt-6">
                            <button type="button" @click="details.push({ jenis: 'ilm', isi: '' })" class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
                                + Tambah Baris
                            </button>
                        </div>

                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route('admin.sequences.items.index', $item->sequence_id) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>