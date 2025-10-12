<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-end items-center">
            <a href="{{ route('admin.programs.sequences.create', $program) }}"
                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-sky-500 
                      border border-transparent rounded-lg font-semibold text-sm text-white 
                      shadow hover:shadow-md hover:from-blue-700 hover:to-sky-600 
                      transition ease-in-out duration-200">
                + Tambah Seqmen
            </a>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Back button -->
                    <div class="mb-6">
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
                    </div>

                    <!-- Flash message -->
                    @if (session('success'))
                        <div x-data="{ show: true }" x-show="show" x-transition
                            class="flex items-center gap-3 bg-green-50 border border-green-200 
                                    text-green-700 px-4 py-3 rounded-lg mb-6 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('success') }}</span>
                            <button @click="show = false" class="ml-auto text-green-600 hover:text-green-800">
                                ✕
                            </button>
                        </div>
                    @endif

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="px-4 py-3 font-semibold text-left">Nama Seqmen</th>
                                    <th class="px-4 py-3 font-semibold text-left">Waktu</th>
                                    <th class="px-4 py-3 font-semibold text-left">Host/Penyiar</th>
                                    <th class="px-4 py-3 font-semibold text-left">Durasi (Menit)</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($sequences as $sequence)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 font-medium text-gray-900">{{ $sequence->nama }}</td>
                                        <td class="px-4 py-3 text-gray-600">
                                            {{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $sequence->host->name ?? 'N/A' }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $sequence->durasi ?? '-' }}</td>
                                        <td class="px-4 py-3">
                                            <div class="flex flex-wrap gap-2">
                                                <!-- Isi Materi -->
                                                <a href="{{ route('admin.sequences.items.index', $sequence) }}"
                                                    class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                      rounded-full bg-blue-100 text-blue-700 hover:bg-blue-200 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    Isi Materi
                                                </a>

                                                <!-- Edit -->
                                                <a href="{{ route('admin.sequences.edit', $sequence) }}"
                                                    class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                      rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536M16.5 3.5a2.121 2.121 0 113 3L7.5 18.5l-4 1 1-4L16.5 3.5z" />
                                                    </svg>
                                                    Edit
                                                </a>

                                                <!-- Hapus -->
                                                <form action="{{ route('admin.sequences.destroy', $sequence) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus sequence ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium 
                                                               rounded-full bg-red-100 text-red-700 hover:bg-red-200 transition">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-6 text-gray-500">
                                            Belum ada seqmen untuk program ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        {{ $sequences->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
