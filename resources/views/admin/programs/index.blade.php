<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Daftar Acara Siaran') }}
            </h2>
            <a href="{{ route('admin.programs.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Program
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" 
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">No</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Studio</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Nama Program</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Dibuat Oleh</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-semibold text-gray-700">Tanggal Dibuat</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($programs as $program)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-600">{{ $loop->iteration + $programs->firstItem() - 1 }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $program->studio->nama ?? '--' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $program->nama }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-600">{{ $program->pembuat->name ?? 'N/A' }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-600">{{ $program->created_at->format('d M Y, H:i') }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        <div class="flex gap-2">
                                            <a href="{{ route('admin.programs.petugas.index', $program) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700 hover:bg-green-200">
                                                Petugas
                                            </a>
                                            <a href="{{ route('admin.programs.sequences.index', $program) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full bg-indigo-100 text-indigo-700 hover:bg-indigo-200">
                                                Kelola Seqmen
                                            </a>
                                            <a href="{{ route('admin.programs.edit', $program) }}" 
                                               class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" 
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini? Semua sequence di dalamnya juga akan terhapus.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700 hover:bg-red-200">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-500">
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
