<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Program Siaran') }}
            </h2>
            <a href="{{ route('admin.programs.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Tambah Program
            </a>
        </div>
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

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="text-left">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Program</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Alias</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Dibuat Oleh</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Dibuat</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($programs as $program)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $program->nama }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $program->alias ?? '-' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $program->pembuat->name ?? 'N/A' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $program->created_at->format('d M Y, H:i') }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        {{-- AWAL MODIFIKASI --}}
                                        <div class="flex items-center space-x-4">
                                            <a href="{{ route('admin.programs.petugas.index', $program) }}" class="text-green-600 hover:text-green-900">Petugas</a>
                                            <a href="{{ route('admin.programs.sequences.index', $program) }}" class="text-indigo-600 hover:text-indigo-900">Kelola Sequence</a>
                                            <a href="{{ route('admin.programs.edit', $program) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                            <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini? Semua sequence di dalamnya juga akan terhapus.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </div>
                                        {{-- AKHIR MODIFIKASI --}}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-gray-500">
                                        Tidak ada data program siaran.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $programs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>