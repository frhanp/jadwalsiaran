<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Program Siaran Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.programs.store') }}">
                        @csrf
                
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Nama Program --}}
                            <div class="col-span-1">
                                <x-input-label for="nama" :value="__('Nama Program')" />
                                <x-text-input 
                                    id="nama" 
                                    name="nama" 
                                    type="text" 
                                    class="mt-1 block w-full" 
                                    :value="old('nama')" 
                                    required 
                                    autofocus 
                                />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>
                
                            {{-- Studio --}}
                            <div class="col-span-1">
                                <x-input-label for="studio_id" :value="__('Studio')" />
                                <select 
                                    id="studio_id" 
                                    name="studio_id" 
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                                    required
                                >
                                    <option value="">-- Pilih Studio --</option>
                                    @foreach($studios as $studio)
                                        <option value="{{ $studio->id }}" @selected(old('studio_id', $program->studio_id ?? '') == $studio->id)>
                                            {{ $studio->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('studio_id')" class="mt-2" />
                            </div>
                
                            {{-- Deskripsi --}}
                            <div class="md:col-span-2">
                                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                                <textarea 
                                    id="deskripsi" 
                                    name="deskripsi" 
                                    rows="4" 
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                >{{ old('deskripsi') }}</textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                        </div>
                
                        {{-- Tombol --}}
                        <div class="flex items-center justify-end mt-8">
                            <a 
                                href="{{ route('admin.programs.index') }}" 
                                class="inline-flex items-center px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md transition"
                            >
                                Batal
                            </a>
                            <x-primary-button class="ml-4">
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>