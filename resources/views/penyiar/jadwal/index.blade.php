<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jadwal Siaran Saya') }}
        </h2>
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
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Program</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Sequence</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Waktu</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jml. Pendengar</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($sequences as $sequence)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $sequence->program->nama ?? 'N/A' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $sequence->nama }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        {{-- AWAL MODIFIKASI: Form Input Jumlah Pendengar --}}
                                        <form action="{{ route('penyiar.sequences.pendengar.update', $sequence) }}" method="POST" class="flex items-center gap-2">
                                            @csrf
                                            @method('PATCH')
                                            <input type="number" name="jumlah_pendengar" value="{{ $sequence->jumlah_pendengar }}" class="w-24 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm py-1">
                                            <button type="submit" class="px-2 py-1 bg-indigo-600 text-white text-xs font-semibold rounded hover:bg-indigo-700">Simpan</button>
                                        </form>
                                        {{-- AKHIR MODIFIKASI --}}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        <a href="{{ route('penyiar.sequences.items.index', $sequence) }}" class="text-indigo-600 hover:text-indigo-900 font-medium">
                                            Isi Materi Siaran &raquo;
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-gray-500">
                                        Anda belum memiliki jadwal siaran yang ditugaskan.
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