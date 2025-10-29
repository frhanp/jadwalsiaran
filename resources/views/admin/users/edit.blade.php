<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pengguna: ') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                              <div>
                                <x-input-label for="name" :value="__('Nama Lengkap')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email (untuk Login)')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="password" :value="__('Password Baru (Opsional)')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                             <div>
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="role" :value="__('Role')" />
                                <select id="role" name="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm {{ $admin->role === 'admin' ? 'bg-gray-100 text-gray-500' : '' }}" {{ $admin->role === 'admin' ? 'disabled' : '' }}>
                                    @foreach($rolesAllowed as $roleOption) {{-- rolesAllowed dari controller --}}
                                        <option value="{{ $roleOption }}" @selected(old('role', $user->role) == $roleOption)>
                                            {{ Str::ucfirst($roleOption) }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- Jika admin, kirim nilai asli via hidden input agar tidak hilang saat update --}}
                                @if($admin->role === 'admin')
                                    <input type="hidden" name="role" value="{{ $user->role }}">
                                @endif
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="studio_id" value="Asal Studio {{ $admin->role === 'admin' ? '(Tidak dapat diubah)' : '(Opsional)' }}" />
                                <select id="studio_id" name="studio_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm {{ $admin->role === 'admin' ? 'bg-gray-100 text-gray-500' : '' }}" {{ $admin->role === 'admin' ? 'disabled' : '' }}>
                                    <option value="">-- Tidak Terikat Studio --</option>
                                    @foreach($studios as $studio)
                                        <option value="{{ $studio->id }}" @selected(old('studio_id', $user->studio_id) == $studio->id)>
                                            {{ $studio->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- Jika admin, kirim nilai asli via hidden input --}}
                                @if($admin->role === 'admin')
                                    <input type="hidden" name="studio_id" value="{{ $user->studio_id }}">
                                @endif
                                <x-input-error :messages="$errors->get('studio_id')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.users.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
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