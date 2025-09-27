<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Materi Siar: <span class="font-bold">{{ $item->materi }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
                    {{-- AWAL MODIFIKASI --}}
                    <form method="POST" action="{{ route($prefix.'items.update', $item) }}">
                    {{-- AKHIR MODIFIKASI --}}
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="materi" :value="__('Materi Siar')" />
                                <x-text-input id="materi" class="block mt-1 w-full" type="text" name="materi" :value="old('materi', $item->materi)" required autofocus />
                                <x-input-error :messages="$errors->get('materi')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi', $item->durasi)" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="frame" :value="__('Frame (Opsional override)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame', $item->frame)" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="keterangan" :value="__('Keterangan')" />
                                <textarea id="keterangan" name="keterangan" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('keterangan', $item->keterangan) }}</textarea>
                                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            {{-- AWAL MODIFIKASI --}}
                            <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            {{-- AKHIR MODIFIKASI --}}
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