<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Pengguna
            </h2>
            <a href="{{ route('admin.users.create') }}"
                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Pengguna
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Flash Message (Tidak Berubah) --}}
                    {{-- referensi: resources/views/admin/users/index.blade.php baris 20-39 --}}
                    @if (session('success'))
                        {{-- ... --}}
                    @endif
                    @if (session('error'))
                        {{-- ... --}}
                    @endif

                    {{-- AWAL MODIFIKASI: Form Filter --}}
                    <div class="mb-6 bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <form method="GET" action="{{ route('admin.users.index') }}"
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end">
                            {{-- Filter Role --}}
                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700">Filter
                                    Role</label>
                                <select name="role" id="role"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-sm">
                                    <option value="">Semua Role</option>
                                    @foreach ($roles as $roleOption)
                                        <option value="{{ $roleOption }}" @selected(request('role') == $roleOption)>
                                            {{ Str::ucfirst($roleOption) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Filter Studio --}}
                            <div>
                                <label for="studio_id" class="block text-sm font-medium text-gray-700">Filter
                                    Studio</label>
                                <select name="studio_id" id="studio_id"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-sm">
                                    <option value="">Semua Studio</option>
                                    <option value="none" @selected(request('studio_id') == 'none')>-- Tidak Terikat --</option>
                                    @foreach ($studios as $studio)
                                        <option value="{{ $studio->id }}" @selected(request('studio_id') == $studio->id)>
                                            {{ $studio->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tombol Filter & Reset --}}
                            <div class="flex gap-2">
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition h-10">
                                    Filter
                                </button>
                                <a href="{{ route('admin.users.index') }}"
                                    class="inline-flex items-center justify-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition h-10">
                                    Reset
                                </a>
                            </div>
                        </form>
                    </div>
                    {{-- AKHIR MODIFIKASI --}}


                    {{-- Tabel Pengguna (Tidak Berubah) --}}
                    {{-- referensi: resources/views/admin/users/index.blade.php baris 42-104 --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            {{-- ... thead ... --}}
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left">No</th>
                                    <th class="px-4 py-3 font-semibold text-left">Nama</th>
                                    <th class="px-4 py-3 font-semibold text-left">Email</th>
                                    <th class="px-4 py-3 font-semibold text-left">Role</th>
                                    <th class="px-4 py-3 font-semibold text-left">Studio</th> {{-- Tambah Kolom Studio --}}
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            {{-- ... tbody ... --}}
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($users as $user)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3">{{ $loop->iteration + $users->firstItem() - 1 }}</td>
                                        {{-- Perbaiki nomor --}}
                                        <td class="px-4 py-3 font-medium text-gray-900">{{ $user->name }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $user->email }}</td>
                                        <td class="px-4 py-3">
                                            @php
                                                $roleColors = [
                                                    /* ... */
                                                ];
                                            @endphp
                                            <span
                                                class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium {{ $roleColors[$user->role] ?? 'bg-gray-100 text-gray-700' }}">
                                                {{ Str::ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-gray-600">{{ $user->studio->nama ?? '--' }}</td>
                                        {{-- Tampilkan Nama Studio --}}
                                        <td class="px-4 py-3">
                                            <div class="flex flex-wrap gap-2">
                                                {{-- Tombol Edit & Hapus (Gunakan SweetAlert) --}}
                                                <a href="{{ route('admin.users.edit', $user) }}"
                                                    class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                      rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                    Edit
                                                </a>
                                                {{-- AWAL MODIFIKASI: Tambahkan SweetAlert logic --}}
                                                <form x-data {{-- x-data tetap diperlukan agar Alpine aktif --}}
                                                    @submit.prevent="confirmDelete($event, 'Hapus Pengguna?', 'Menghapus pengguna ini tidak dapat dibatalkan.')"
                                                    {{-- Panggil fungsi global --}}
                                                    action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium
                   rounded-full bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                        Hapus
                                                    </button>
                                                </form>
                                                {{-- AKHIR MODIFIKASI --}}
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-6 text-gray-500">
                                            {{-- Ubah colspan --}}
                                            Tidak ada data pengguna yang cocok dengan filter.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination (Tidak Berubah) --}}
                    {{-- referensi: resources/views/admin/users/index.blade.php baris 107-109 --}}
                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
