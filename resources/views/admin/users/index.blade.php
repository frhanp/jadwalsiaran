<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Pengguna
                {{-- Tambahkan info jika Admin terfilter --}}
                @if($admin->role === 'admin')
                    <span class="text-base font-normal text-gray-500">(Hanya Penyiar{{ $admin->studio_id ? ' di Studio '. $admin->studio->nama : '' }})</span>
                @endif
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

                    {{-- Flash Messages --}}
                    @if (session('success'))
                        <div class="mb-4 flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg shadow-sm"
                             x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/></svg>
                            <span>{{ session('success') }}</span>
                            <button @click="show = false" class="ml-auto text-green-600 hover:text-green-800">&times;</button>
                        </div>
                    @endif
                    @if (session('error'))
                         <div class="mb-4 flex items-center gap-3 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg shadow-sm"
                              x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                             <span>{{ session('error') }}</span>
                             <button @click="show = false" class="ml-auto text-red-600 hover:text-red-800">&times;</button>
                         </div>
                    @endif

                    {{-- Form Filter Kondisional --}}
                    <div class="mb-6 bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <form method="GET" action="{{ route('admin.users.index') }}" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 items-end">
                            {{-- Filter Role (Sembunyikan jika Admin) --}}
                            @if($admin->role !== 'admin')
                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700">Filter Role</label>
                                <select name="role" id="role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Semua Role</option>
                                    @foreach($roles as $roleOption)
                                        <option value="{{ $roleOption }}" @selected(request('role') == $roleOption)>
                                            {{ Str::ucfirst($roleOption) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                            {{-- Filter Studio (Sembunyikan jika Admin terikat studio) --}}
                            @if(!($admin->role === 'admin' && $admin->studio_id))
                            <div>
                                <label for="studio_id" class="block text-sm font-medium text-gray-700">Filter Studio</label>
                                <select name="studio_id" id="studio_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Semua Studio</option>
                                    <option value="none" @selected(request('studio_id') == 'none')>-- Tidak Terikat --</option>
                                    @foreach($studios as $studio)
                                        <option value="{{ $studio->id }}" @selected(request('studio_id') == $studio->id)>
                                            {{ $studio->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                            {{-- Tombol Filter & Reset --}}
                            {{-- Atur posisi tombol berdasarkan filter yang tampil --}}
                            @php
                                $buttonColStart = 'col-start-1'; // Default
                                if ($admin->role !== 'admin' && !($admin->role === 'admin' && $admin->studio_id)) {
                                    $buttonColStart = 'md:col-start-3'; // Jika kedua filter tampil
                                } elseif ($admin->role !== 'admin' || !($admin->role === 'admin' && $admin->studio_id)) {
                                     $buttonColStart = 'sm:col-start-2 md:col-start-2'; // Jika salah satu filter tampil
                                }
                            @endphp
                            <div class="flex gap-2 {{ $buttonColStart }}">
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

                    {{-- Tabel Pengguna --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left w-12">No</th>
                                    <th class="px-4 py-3 font-semibold text-left">Nama</th>
                                    <th class="px-4 py-3 font-semibold text-left">Email</th>
                                    {{-- Kolom Role Kondisional --}}
                                    @if($admin->role !== 'admin')
                                    <th class="px-4 py-3 font-semibold text-left">Role</th>
                                    @endif
                                    {{-- Kolom Studio Kondisional --}}
                                    @if(!($admin->role === 'admin' && $admin->studio_id))
                                    <th class="px-4 py-3 font-semibold text-left">Studio</th>
                                    @endif
                                    <th class="px-4 py-3 w-32"></th> {{-- Kolom Aksi --}}
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($users as $user)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-3">{{ $loop->iteration + $users->firstItem() - 1 }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $user->name }}</td>
                                    <td class="px-4 py-3 text-gray-600">{{ $user->email }}</td>
                                    {{-- Kolom Role Kondisional --}}
                                    @if($admin->role !== 'admin')
                                    <td class="px-4 py-3">
                                        @php
                                            $roleColors = [
                                                'admin' => 'bg-purple-100 text-purple-700',
                                                'penyiar' => 'bg-blue-100 text-blue-700',
                                                'katim' => 'bg-green-100 text-green-700',
                                                'kepsta' => 'bg-yellow-100 text-yellow-700',
                                            ];
                                        @endphp
                                        <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium {{ $roleColors[$user->role] ?? 'bg-gray-100 text-gray-700' }}">
                                            {{ Str::ucfirst($user->role) }}
                                        </span>
                                    </td>
                                    @endif
                                    {{-- Kolom Studio Kondisional --}}
                                     @if(!($admin->role === 'admin' && $admin->studio_id))
                                    <td class="px-4 py-3 text-gray-600">{{ $user->studio->nama ?? '--' }}</td>
                                    @endif
                                    <td class="px-4 py-3">
                                        <div class="flex flex-wrap items-center justify-end gap-2">
                                            {{-- Tombol Edit --}}
                                            <a href="{{ route('admin.users.edit', $user) }}"
                                               class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium
                                                      rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                Edit
                                            </a>
                                            {{-- Tombol Hapus (Pastikan confirmDelete sudah ada di app.js) --}}
                                            <form x-data
                                                @submit.prevent="confirmDelete($event, 'Hapus Pengguna?', 'Menghapus pengguna ini tidak dapat dibatalkan.')"
                                                action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium
                                                               rounded-full bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    {{-- Sesuaikan colspan --}}
                                    @php
                                        $colspan = 4; // No, Nama, Email, Aksi
                                        if ($admin->role !== 'admin') $colspan++; // Tambah Role
                                        if (!($admin->role === 'admin' && $admin->studio_id)) $colspan++; // Tambah Studio
                                    @endphp
                                    <td colspan="{{ $colspan }}" class="text-center py-6 text-gray-500">
                                        Tidak ada data pengguna yang cocok dengan filter
                                        {{ $admin->role === 'admin' ? ' (hanya menampilkan Penyiar)' : '' }}.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>