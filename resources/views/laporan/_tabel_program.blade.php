@php $petugas = $jadwalPetugas->get($program->id); @endphp
<div class="overflow-x-auto">
    <table class="min-w-full border-collapse border border-gray-300 text-sm">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="border border-gray-300 px-4 py-2 w-1/12">Program</th>
                <th class="border border-gray-300 px-4 py-2 w-1/12">Waktu</th>
                <th class="border border-gray-300 px-4 py-2 w-2/12">Seqmen</th>
                <th class="border border-gray-300 px-4 py-2 w-1/12">Pendengar</th>
                <th class="border border-gray-300 px-4 py-2 w-3/12">Materi Siar</th>
                <th class="border border-gray-300 px-4 py-2 w-4/12">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php
                // referensi: resources/views/laporan/_tabel_program.blade.php baris 15-22
                $programRowspan = 0;
                if ($program->sequences->isNotEmpty()) {
                    foreach ($program->sequences as $sequence) {
                        $programRowspan += $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                    }
                } else {
                    $programRowspan = 1;
                }
            @endphp
            <tr>
                <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $programRowspan }}">{{ $program->nama }}</td>
                @forelse ($program->sequences as $sequenceIndex => $sequence)
                    @php
                        // referensi: resources/views/laporan/_tabel_program.blade.php baris 26-28
                        $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                    @endphp
                    @if ($sequenceIndex > 0) <tr> @endif
                    <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                    <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">
                        {{ $sequence->nama }} <br> 
                        {{-- MODIFIKASI KUNCI: Ambil dari $petugas (JadwalPetugas) BUKAN $sequence->host --}}
                        {{-- referensi: resources/views/laporan/_tabel_program.blade.php baris 31 --}}
                        <small class="font-normal text-gray-500">Host: {{ $petugas?->penyiars->first()->name ?? 'N/A' }}</small>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top text-center" rowspan="{{ $sequenceRowspan }}">
                        <span class="text-lg font-bold">{{ $sequence->jumlah_pendengar ?? '-' }}</span>
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
                @empty
                    <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-400 italic">-- Belum ada seqmen --</td>
                    </tr>
                @endforelse
        </tbody>
    </table>
</div>