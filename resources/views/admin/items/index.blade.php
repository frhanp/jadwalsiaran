<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Materi Siar untuk Sequence: <span class="font-bold">{{ $sequence->nama }}</span>
                </h2>
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.programs.sequences.index', ['program' => $sequence->program_id]) }}" class="text-sm text-indigo-600 hover:text-indigo-900">&larr; Kembali ke Daftar Sequence</a>
                @else
                    <a href="{{ route('penyiar.jadwal.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900">&larr; Kembali ke Jadwal Saya</a>
                @endif
            </div>
            @php $createRoute = Auth::user()->role === 'admin' ? 'admin.sequences.items.create' : 'penyiar.sequences.items.create'; @endphp
            <a href="{{ route($createRoute, $sequence) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Tambah Materi
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
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Materi</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Frame</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Durasi (Menit)</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($items as $item)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $item->materi }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->frame ?? '-' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->durasi ?? '-' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
                                        <div class="flex items-center space-x-3 text-xs">
                                            <a href="{{ route($prefix . 'items.materi-details.manage', $item) }}" class="text-green-600 hover:text-green-900">Sub-List</a>
                                            <a href="{{ route($prefix . 'items.item-details.manage', $item) }}" class="text-purple-600 hover:text-purple-900">ILM/Spot</a>
                                            <a href="{{ route($prefix . 'items.edit', $item) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                            <form action="{{ route($prefix . 'items.destroy', $item) }}" method="POST" onsubmit="return confirm('Anda yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-gray-500">
                                        Belum ada materi siar untuk sequence ini.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">{{ $items->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>