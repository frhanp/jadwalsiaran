@php
    $petugas = $jadwalPetugas->get($program->id);
    $pendengars = $petugas?->pendengars;
@endphp
<div class="overflow-x-auto">
    <table class="min-w-full border-collapse border border-gray-300 text-sm">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="border border-gray-300 px-4 py-2 w-[10%]">Program</th>
                <th class="border border-gray-300 px-4 py-2 w-[8%]">Waktu</th>
                <th class="border border-gray-300 px-4 py-2 w-[15%]">Seqmen</th>
                <th class="border border-gray-300 px-4 py-2 w-[17%]">Pendengar</th>
                <th class="border border-gray-300 px-4 py-2 w-[25%]">Materi Siar</th>
                <th class="border border-gray-300 px-4 py-2 w-[25%]">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php
                // Hitung total baris yang dibutuhkan oleh semua item dan sub-item dalam program ini
                $totalItemRows = 0;
                if ($program->sequences->isNotEmpty()) {
                    foreach ($program->sequences as $sequence) {
                        // Setiap sequence minimal butuh 1 baris,
                        // jika ada item, butuh baris sebanyak jumlah item
                        $totalItemRows += max(1, $sequence->items->count());
                    }
                } else {
                    $totalItemRows = 1; // Jika tidak ada sequence, program tetap butuh 1 baris
                }
            @endphp

            @forelse ($program->sequences as $sequenceIndex => $sequence)
                @php
                    // Hitung rowspan untuk kolom Waktu dan Seqmen (berdasarkan jumlah item)
                    $sequenceItemRowspan = max(1, $sequence->items->count());
                @endphp

                @if ($sequence->items->isNotEmpty())
                    @foreach ($sequence->items as $itemIndex => $item)
                        <tr>
                            {{-- Kolom Program hanya muncul di baris pertama sequence pertama --}}
                            @if($sequenceIndex === 0 && $itemIndex === 0)
                                <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $totalItemRows }}">{{ $program->nama }}</td>
                            @endif

                            {{-- Kolom Waktu dan Seqmen hanya muncul di baris pertama item --}}
                            @if($itemIndex === 0)
                                <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceItemRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceItemRowspan }}">
                                    {{ $sequence->nama }} <br>
                                    <small class="font-normal text-gray-500">Host: {{ $petugas?->penyiars->first()->name ?? 'N/A' }}</small>
                                </td>
                            @endif

                            {{-- Kolom Pendengar hanya muncul di baris pertama sequence pertama --}}
                            @if($sequenceIndex === 0 && $itemIndex === 0)
                                <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $totalItemRows }}">
                                    <p class="font-bold mb-2">Total: {{ $pendengars?->count() ?? 0 }}</p>
                                    @if($pendengars && $pendengars->isNotEmpty())
                                    <ol class="list-decimal list-inside space-y-1 text-xs">
                                        @foreach($pendengars as $pendengar)
                                        <li>
                                            <span class="font-semibold">{{ $pendengar->nama }}:</span>
                                            <span class="text-gray-600 italic">"{{ $pendengar->komentar }}"</span>
                                        </li>
                                        @endforeach
                                    </ol>
                                    @else
                                    <span class="text-gray-400 italic">-- Tidak ada interaksi --</span>
                                    @endif
                                </td>
                            @endif

                            {{-- Kolom Materi Siar --}}
                            <td class="border border-gray-300 px-4 py-2 align-top">
                                {{ $item->materi }}
                                {{-- AWAL MODIFIKASI: Kembalikan loop Materi Detail --}}
                                @if ($item->materiDetails->isNotEmpty())
                                    <ol class="list-decimal list-inside mt-1 pl-2 text-xs text-gray-600">
                                        @foreach ($item->materiDetails as $detail)
                                            <li>{{ $detail->isi }}</li>
                                        @endforeach
                                    </ol>
                                @endif
                                {{-- AKHIR MODIFIKASI --}}
                            </td>

                            {{-- Kolom Keterangan --}}
                            <td class="border border-gray-300 px-4 py-2 align-top">
                                @if ($item->keterangan)
                                    <p class="mb-2 italic text-gray-700 text-xs">{{ $item->keterangan }}</p>
                                @endif
                                {{-- AWAL MODIFIKASI: Kembalikan loop Item Detail (ILM/Spot) --}}
                                @if ($item->itemDetails->isNotEmpty())
                                    @foreach ($item->itemDetails->groupBy('jenis') as $jenis => $details)
                                        <p class="font-semibold capitalize text-xs mt-1">{{ $jenis }}:</p>
                                        <ol class="list-decimal list-inside pl-4 mb-1 text-xs text-gray-600">
                                            @foreach ($details as $detail)
                                                <li>{{ $detail->isi }}</li>
                                            @endforeach
                                        </ol>
                                    @endforeach
                                @endif
                                {{-- AKHIR MODIFIKASI --}}
                            </td>
                        </tr>
                    @endforeach
                @else {{-- Jika sequence tidak punya item --}}
                    <tr>
                        @if($sequenceIndex === 0)
                            <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $totalItemRows }}">{{ $program->nama }}</td>
                        @endif

                        <td class="border border-gray-300 px-4 py-2 align-top" rowspan="1">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                        <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="1">
                            {{ $sequence->nama }} <br>
                            <small class="font-normal text-gray-500">Host: {{ $petugas?->penyiars->first()->name ?? 'N/A' }}</small>
                        </td>

                        @if($sequenceIndex === 0)
                             <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $totalItemRows }}">
                                <p class="font-bold mb-2">Total: {{ $pendengars?->count() ?? 0 }}</p>
                                @if($pendengars && $pendengars->isNotEmpty())
                                {{-- ... (daftar pendengar) ... --}}
                                @else
                                <span class="text-gray-400 italic">-- Tidak ada interaksi --</span>
                                @endif
                            </td>
                        @endif

                        <td class="border border-gray-300 px-4 py-2 align-top text-gray-400 italic" colspan="2">-- Belum ada materi --</td>
                    </tr>
                @endif
            @empty {{-- Jika program tidak punya sequence --}}
                <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top font-bold">{{ $program->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                        <p class="font-bold mb-2">Total: {{ $pendengars?->count() ?? 0 }}</p>
                        @if($pendengars && $pendengars->isNotEmpty())
                        {{-- ... (daftar pendengar) ... --}}
                        @else
                        <span class="text-gray-400 italic">-- Tidak ada interaksi --</span>
                        @endif
                    </td>
                    <td colspan="4" class="border border-gray-300 px-4 py-2 text-center text-gray-400 italic">-- Belum ada seqmen --</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>