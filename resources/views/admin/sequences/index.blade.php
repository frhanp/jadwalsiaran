<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Kelola Sequence untuk Program: <span class="font-bold">{{ $program->nama }}</span>
                </h2>
                <a href="{{ route('admin.programs.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900">&larr; Kembali ke Daftar Program</a>
            </div>
            <a href="{{ route('admin.programs.sequences.create', $program) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Tambah Sequence
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
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Sequence</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Waktu</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Host/Penyiar</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Durasi (Menit)</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($sequences as $sequence)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $sequence->nama }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $sequence->host->name ?? 'N/A' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $sequence->durasi ?? '-' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        <div class="flex items-center space-x-2">
                                            {{-- AWAL MODIFIKASI --}}
                                            <a href="{{ route('admin.sequences.items.index', $sequence) }}" class="text-blue-600 hover:text-blue-900">Isi Materi</a>
                                            {{-- AKHIR MODIFIKASI --}}
                                            <a href="{{ route('admin.sequences.edit', $sequence) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                            <form action="{{ route('admin.sequences.destroy', $sequence) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sequence ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-gray-500">
                                        Belum ada sequence untuk program ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $sequences->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>