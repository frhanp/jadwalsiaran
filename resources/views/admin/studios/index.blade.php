<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Studio
            </h2>
            <a href="{{ route('admin.studios.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Studio
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-4 shadow-sm"
                             x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                            <button @click="show = false" class="ml-auto text-green-600 hover:text-green-800">&times;</button>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <div class="overflow-x-auto rounded-lg border border-gray-200">
                            <table class="min-w-full text-sm text-gray-700">
                                <thead class="bg-gray-100 text-gray-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left font-semibold w-16">No</th>
                                        <th class="px-4 py-3 text-left font-semibold">Nama Studio</th>
                                        <th class="px-4 py-3 text-left font-semibold">Deskripsi</th>
                                        <th class="px-4 py-3 text-center font-semibold w-32">Aksi</th>
                                    </tr>
                                </thead>
                        
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @forelse ($studios as $studio)
                                        <tr class="hover:bg-gray-50 transition">
                                            <td class="px-4 py-3">{{ $loop->iteration + $studios->firstItem() - 1 }}</td>
                                            <td class="px-4 py-3 font-medium text-gray-900">{{ $studio->nama }}</td>
                                            <td class="px-4 py-3 text-gray-600">{{ $studio->deskripsi ?? '-' }}</td>
                                            <td class="px-4 py-3 text-center">
                                                <div class="inline-flex items-center gap-2">
                                                    <a href="{{ route('admin.studios.edit', $studio) }}"
                                                       class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.studios.destroy', $studio) }}" method="POST"
                                                          onsubmit="return confirm('Anda yakin?');" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="py-6 text-center text-gray-500">Belum ada data studio.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                        
                    </div>
                     <div class="mt-4">
                        {{ $studios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>