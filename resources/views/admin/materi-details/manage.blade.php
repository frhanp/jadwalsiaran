<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Sub-List untuk Materi: 
                <span class="font-bold text-blue-700">{{ $item->materi }}</span>
            </h2>
            

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
<a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" 
   class="inline-flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-indigo-600 
          bg-indigo-50 rounded-lg hover:bg-indigo-100 transition mt-1">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" 
         viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M15 19l-7-7 7-7"/>
    </svg>
    Kembali ke Daftar Materi
</a>

                    <!-- Flash messages -->
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
                    @if (session('error'))
                        <div class="flex items-center gap-3 bg-red-50 border border-red-200 
                                    text-red-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    <!-- Form dinamis Alpine -->
                    <form method="POST" action="{{ route($prefix.'items.materi-details.update-all', $item) }}"
                          x-data="{ details: {{ json_encode($item->materiDetails->pluck('isi')->all()) }} }">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <template x-for="(detail, index) in details" :key="index">
                                <div class="flex items-center gap-3 bg-gray-50 px-4 py-2 rounded-lg shadow-sm">
                                    <span x-text="index + 1" 
                                          class="text-gray-500 font-semibold w-6 text-center"></span>
                                    <input type="text"
                                           name="details[]"
                                           x-model="details[index]"
                                           class="flex-1 border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                                           placeholder="Isi detail materi...">
                                    <button type="button" @click="details.splice(index, 1)" 
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" 
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" 
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" 
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <!-- Add new row -->
                        <div class="mt-6">
                            <button type="button" @click="details.push('')" 
                                    class="inline-flex items-center gap-2 px-3 py-1.5 text-sm 
                                           font-medium text-blue-600 bg-blue-50 rounded-lg 
                                           hover:bg-blue-100 transition">
                                + Tambah Baris
                            </button>
                        </div>

                        <!-- Footer actions -->
                        <div class="flex items-center justify-end mt-8 border-t pt-6">
                            <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" 
                               class="text-sm text-gray-600 hover:text-gray-900 mr-4 transition">
                                Batal
                            </a>
                            <x-primary-button class="px-5 py-2">
                                Simpan Perubahan
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
