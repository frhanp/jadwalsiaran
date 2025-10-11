<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Petugas Harian untuk:
                <span class="font-bold text-indigo-700">{{ $program->nama }}</span>
            </h2>

            {{-- Tombol Tambah Jadwal --}}
            <a href="{{ route('admin.programs.petugas.create', $program) }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md 
                       font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Jadwal Petugas
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">

                    {{-- 🔙 Kembali ke daftar program --}}
                    <a href="{{ route('admin.programs.index') }}"
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm font-medium 
          text-indigo-600 bg-indigo-50 hover:bg-indigo-100 hover:text-indigo-800 
          transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali ke Daftar Program
                    </a>



                    {{-- Pesan sukses --}}
                    @if (session('success'))
                        <div class="rounded-md bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
                            ✅ {{ session('success') }}
                        </div>
                    @endif

                    {{-- 📋 Tabel Jadwal --}}
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full text-sm text-gray-700">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">Tanggal</th>
                                    <th class="px-4 py-3 text-left font-semibold">Produser</th>
                                    <th class="px-4 py-3 text-left font-semibold">Pengarah Acara</th>
                                    <th class="px-4 py-3 text-center font-semibold w-32">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($jadwalPetugas as $petugas)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-3 font-medium text-gray-900">
                                            {{ \Carbon\Carbon::parse($petugas->tanggal)->isoFormat('dddd, D MMMM Y') }}
                                        </td>
                                        <td class="px-4 py-3 text-gray-700">{{ $petugas->produser_nama ?? '-' }}</td>
                                        <td class="px-4 py-3 text-gray-700">{{ $petugas->pengarah_acara_nama ?? '-' }}
                                        </td>
                                        <td class="px-4 py-3 text-center">
                                            <div class="flex justify-center gap-3">
                                                <a href="{{ route('admin.programs.petugas.edit', [$program, $petugas]) }}"
                                                    class="inline-flex items-center px-3 py-1.5 text-xs font-medium rounded-md 
                                                           bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                    ✏️ Edit
                                                </a>
                                                <form
                                                    action="{{ route('admin.programs.petugas.destroy', [$program, $petugas]) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus jadwal ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center px-3 py-1.5 text-xs font-medium rounded-md 
                                                                   bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                        🗑️ Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-6 text-gray-500">
                                            Belum ada jadwal petugas untuk program ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $jadwalPetugas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
