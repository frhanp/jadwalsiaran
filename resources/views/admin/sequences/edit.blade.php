<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Sequence: {{ $sequence->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.sequences.update', $sequence) }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="nama" :value="__('Nama Sequence')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama', $sequence->nama)" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>


                            <div>
                                <x-input-label for="waktu" :value="__('Waktu Mulai (HH:MM)')" />
                                <x-text-input id="waktu" class="block mt-1 w-full" type="time" name="waktu" :value="old('waktu', \Carbon\Carbon::parse($sequence->waktu)->format('H:i'))" required />
                                <x-input-error :messages="$errors->get('waktu')" class="mt-2" />
                            </div>
                            
                            <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi', $sequence->durasi)" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div>
                            
                            <div class="md:col-span-2">
                                <x-input-label for="frame" :value="__('Frame (Live/Rekam/dll.)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame', $sequence->frame)" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.programs.sequences.index', $sequence->program_id) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
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