<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Daftar Acara Siaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- AWAL MODIFIKASI: Tombol Cetak dipindah ke dalam Tab --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 no-print">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        {{ __('Laporan Daftar Acara Siaran') }}
                    </h2>
                    <form method="GET" action="{{ route('laporan.jadwal.harian') }}" class="flex items-end space-x-4">
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Pilih Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal->format('Y-m-d') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">Tampilkan</button>
                        {{-- Tombol ini sekarang untuk mencetak semua program --}}
                        <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d')]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400">
                            Cetak Semua
                        </a>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div x-data="{ activeTab: {{ $programs->first()->id ?? 'null' }} }">
                    <div class="px-4 border-b border-gray-200 flex justify-between items-center">
                        <nav class="-mb-px flex space-x-3" aria-label="Tabs">
                            @foreach ($programs as $program)
                                <button @click="activeTab = {{ $program->id }}"
                                        :class="activeTab === {{ $program->id }} ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                        class="whitespace-nowrap py-4 px-4 border-b-2 font-medium text-sm transition-colors duration-200 focus:outline-none">
                                    {{ $program->nama }}
                                </button>
                            @endforeach
                        </nav>
                        {{-- Tombol cetak per program --}}
                        @foreach ($programs as $program)
                            <div x-show="activeTab === {{ $program->id }}" x-cloak>
                                <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d'), 'program' => $program->id]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 no-print">
                                    Cetak {{ $program->nama }}
                                </a>
                            </div>
                        @endforeach
                    </div>
            {{-- AKHIR MODIFIKASI --}}

                    <div>
                        @forelse ($programs as $program)
                            <div x-show="activeTab === {{ $program->id }}" x-cloak class="printable-area">
                                <div class="p-6 text-gray-900">
                                    <h3 class="text-center font-bold text-lg">DAFTAR ACARA SIARAN</h3>
                                    <h4 class="text-center font-semibold text-md mb-4">{{ $tanggal->isoFormat('dddd, D MMMM Y') }}</h4>

                                    {{-- ... sisa kode tabel tidak berubah ... --}}
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full border-collapse border border-gray-300 text-sm">
                                            <thead class="bg-gray-100 text-left">
                                                <tr>
                                                    <th class="border border-gray-300 px-4 py-2 w-1/12">Program</th>
                                                    <th class="border border-gray-300 px-4 py-2 w-1/12">Waktu</th>
                                                    <th class="border border-gray-300 px-4 py-2 w-2/12">Sequence</th>
                                                    <th class="border border-gray-300 px-4 py-2 w-1/12">Pendengar</th>
                                                    <th class="border border-gray-300 px-4 py-2 w-3/12">Materi Siar</th>
                                                    <th class="border border-gray-300 px-4 py-2 w-4/12">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $programRowspan = 0;
                                                    foreach ($program->sequences as $sequence) {
                                                        $programRowspan += $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                                                    }
                                                @endphp
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $programRowspan }}">{{ $program->nama }}</td>
                                                    @foreach ($program->sequences as $sequenceIndex => $sequence)
                                                        @php
                                                            $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                                                        @endphp
                                                        @if ($sequenceIndex > 0) <tr> @endif
                                                        <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                                        <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">{{ $sequence->nama }} <br> <small class="font-normal text-gray-500">Host: {{ $sequence->host->name ?? 'N/A' }}</small></td>
                                                        <td class="border border-gray-300 px-4 py-2 align-top text-center" rowspan="{{ $sequenceRowspan }}">
                                                            <span class="text-lg font-bold">{{ $sequence->jumlah_pendengar ?? '-' }}</span>
                                                        </td>

                                                        @forelse ($sequence->items as $itemIndex => $item)
                                                            @if ($itemIndex > 0) <tr> @endif
                                                            <td class="border border-gray-300 px-4 py-2 align-top">
                                                                {{ $item->materi }}
                                                                @if($item->materiDetails->isNotEmpty())
                                                                    <ol class="list-decimal list-inside mt-1 pl-2">
                                                                        @foreach($item->materiDetails as $detail)
                                                                            <li class="text-gray-600">{{ $detail->isi }}</li>
                                                                        @endforeach
                                                                    </ol>
                                                                @endif
                                                            </td>
                                                            <td class="border border-gray-300 px-4 py-2 align-top">
                                                                @if($item->keterangan)<p class="mb-2 italic text-gray-700">{{ $item->keterangan }}</p>@endif
                                                                @if($item->itemDetails->isNotEmpty())
                                                                    @foreach($item->itemDetails->groupBy('jenis') as $jenis => $details)
                                                                        <p class="font-semibold capitalize">{{ $jenis }}:</p>
                                                                        <ol class="list-decimal list-inside pl-4 mb-2">
                                                                            @foreach($details as $detail)
                                                                                <li>{{ $detail->isi }}</li>
                                                                            @endforeach
                                                                        </ol>
                                                                    @endforeach
                                                                @endif
                                                            </td>
                                                            </tr>
                                                        @empty
                                                            <td class="border border-gray-300 px-4 py-2 align-top"></td>
                                                            <td class="border border-gray-300 px-4 py-2 align-top"></td>
                                                            </tr>
                                                        @endforelse
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="p-6 text-center text-gray-500">
                                Jadwal siaran belum tersedia untuk tanggal yang dipilih.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>