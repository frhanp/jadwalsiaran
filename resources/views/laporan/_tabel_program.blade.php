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
                $totalRowspan = $program->sequences->count() > 0 ? $program->sequences->count() : 1;
                $itemRowspan = 0;
                if ($program->sequences->isNotEmpty()) {
                    foreach ($program->sequences as $sequence) {
                        $itemRowspan += $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                    }
                } else {
                    $itemRowspan = 1;
                }
            @endphp
            <tr>
                <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $itemRowspan }}">{{ $program->nama }}</td>
                
                {{-- AWAL MODIFIKASI: Logika rowspan untuk Pendengar --}}
                @php $firstSequence = $program->sequences->first(); @endphp
                @if($firstSequence)
                    @php $firstSequenceItemCount = $firstSequence->items->count() > 0 ? $firstSequence->items->count() : 1; @endphp
                    <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $firstSequenceItemCount }}">{{ \Carbon\Carbon::parse($firstSequence->waktu)->format('H:i') }}</td>
                    <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $firstSequenceItemCount }}">
                        {{ $firstSequence->nama }} <br> 
                        <small class="font-normal text-gray-500">Host: {{ $petugas?->penyiars->first()->name ?? 'N/A' }}</small>
                    </td>
                    
                    <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $itemRowspan }}">
                        <p class="font-bold mb-2">Total: {{ $pendengars->count() }}</p>
                        @if($pendengars->isNotEmpty())
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

                    @forelse ($firstSequence->items as $itemIndex => $item)
                        @if ($itemIndex > 0) <tr> @endif
                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->materi }}</td>
                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->keterangan }}</td>
                        </tr>
                    @empty
                        <td colspan="2" class="border border-gray-300 px-4 py-2 align-top text-gray-400 italic">-- Belum ada materi --</td>
                        </tr>
                    @endforelse
                @else
                    <td colspan="4" class="border border-gray-300 px-4 py-2 text-center text-gray-400 italic">-- Belum ada seqmen --</td>
                    </tr>
                @endif
                {{-- AKHIR MODIFIKASI --}}

                @foreach ($program->sequences->slice(1) as $sequence)
                    @php $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1; @endphp
                    <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                    <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">
                        {{ $sequence->nama }} <br> 
                        <small class="font-normal text-gray-500">Host: {{ $petugas?->penyiars->first()->name ?? 'N/A' }}</small>
                    </td>

                    @forelse ($sequence->items as $itemIndex => $item)
                        @if ($itemIndex > 0) <tr> @endif
                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->materi }}</td>
                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->keterangan }}</td>
                        </tr>
                    @empty
                        <td colspan="2" class="border border-gray-300 px-4 py-2 align-top text-gray-400 italic">-- Belum ada materi --</td>
                        </tr>
                    @endforelse
                @endforeach
        </tbody>
    </table>
</div>