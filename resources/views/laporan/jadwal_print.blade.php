<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Jadwal Siaran - {{ $tanggal->isoFormat('D MMMM Y') }}</title>
    <style>
        /* referensi: resources/views/laporan/jadwal_print.blade.php baris 8-90 (tidak berubah) */
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10pt;
        }

        .container {
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h3,
        .header h4 {
            margin: 0;
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .schedule-table th,
        .schedule-table td {
            border: 1px solid #333;
            padding: 6px;
            text-align: left;
            vertical-align: top;
        }

        .schedule-table th {
            background-color: #f2f2f2;
        }

        .signature-section {
            margin-top: 40px;
        }

        .signature-block {
            margin-bottom: 40px;
            page-break-inside: avoid;
        }

        .signature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            text-align: center;
            margin-top: 30px;
        }

        .signature-grid div {
            padding-top: 60px;
        }

        .capitalize {
            text-transform: capitalize;
        }

        .font-semibold {
            font-weight: 600;
        }

        .underline {
            text-decoration: underline;
        }

        ol {
            margin: 0;
            padding-left: 20px;
        }


        /* CSS UNTUK PRINT */
        @media print {
            .signature-block {
                page-break-before: always;
                margin-top: 2cm;
            }

            .signature-block:first-child {
                page-break-before: auto;
                /* Mencegah halaman kosong di awal */
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        @forelse ($programs as $program)
            @php 
                $petugas = $jadwalPetugas->get($program->id); 
                $pendengars = $petugas?->pendengars;
            @endphp
            <div class="signature-block">
                <div class="header">
                    <h3>DAFTAR ACARA SIARAN</h3>
                    <h4>{{ $tanggal->isoFormat('dddd, D MMMM Y') }}</h4>
                </div>

                <table class="schedule-table">
                    <thead class="bg-gray-100 text-left">
                        <tr>
                            {{-- AWAL MODIFIKASI: Penyesuaian lebar kolom --}}
                            <th class="border border-gray-300 px-4 py-2 w-[10%]">Program</th>
                            <th class="border border-gray-300 px-4 py-2 w-[8%]">Waktu</th>
                            <th class="border border-gray-300 px-4 py-2 w-[15%]">Seqmen</th>
                            <th class="border border-gray-300 px-4 py-2 w-[17%]">Pendengar</th>
                            <th class="border border-gray-300 px-4 py-2 w-[25%]">Materi Siar</th>
                            <th class="border border-gray-300 px-4 py-2 w-[25%]">Keterangan</th>
                            {{-- AKHIR MODIFIKASI --}}
                        </tr>
                    </thead>
                    {{-- AWAL MODIFIKASI: Logika rowspan dirombak total --}}
                    <tbody>
                        @php
                            $totalItemRows = 0;
                            if ($program->sequences->isNotEmpty()) {
                                foreach ($program->sequences as $sequence) {
                                    $totalItemRows += max(1, $sequence->items->count());
                                }
                            } else {
                                $totalItemRows = 1;
                            }
                        @endphp

                        @forelse ($program->sequences as $sequenceIndex => $sequence)
                            @php
                                $sequenceRowspan = max(1, $sequence->items->count());
                            @endphp

                            @if ($sequence->items->isNotEmpty())
                                @foreach ($sequence->items as $itemIndex => $item)
                                    <tr>
                                        @if($sequenceIndex === 0 && $itemIndex === 0)
                                            <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $totalItemRows }}">{{ $program->nama }}</td>
                                        @endif
                                        
                                        @if($itemIndex === 0)
                                            <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                            <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">
                                                {{ $sequence->nama }} <br> 
                                                <small class="font-normal text-gray-500">Host: {{ $petugas?->penyiars->first()->name ?? 'N/A' }}</small>
                                            </td>
                                        @endif

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

                                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->materi }}</td>
                                        <td class="border border-gray-300 px-4 py-2 align-top">{{ $item->keterangan }}</td>
                                    </tr>
                                @endforeach
                            @else
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

                                    <td class="border border-gray-300 px-4 py-2 align-top text-gray-400 italic" colspan="2">-- Belum ada materi --</td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 align-top font-bold">{{ $program->nama }}</td>
                                <td class="border border-gray-300 px-4 py-2 align-top">
                                     <p class="font-bold mb-2">Total: {{ $pendengars?->count() ?? 0 }}</p>
                                    @if($pendengars && $pendengars->isNotEmpty())
                                        {{-- ... (sama seperti di atas) ... --}}
                                    @else
                                        <span class="text-gray-400 italic">-- Tidak ada interaksi --</span>
                                    @endif
                                </td>
                                <td colspan="4" class="text-center text-gray-400 italic">-- Belum ada seqmen --</td>
                            </tr>
                        @endforelse
                    </tbody>
                    {{-- AKHIR MODIFIKASI --}}
                </table>

                @if ($petugas)
                    <div class="signature-section">
                        <h3 style="text-align:center; font-weight:bold; margin-bottom: 20px;">PETUGAS - {{ $program->nama }}</h3>
                        {{-- referensi: resources/views/laporan/jadwal_print.blade.php baris 204-257 (tidak berubah) --}}
                        <table style="width: 50%; margin-bottom: 20px;">
                            <tr><td style="width: 40%;">Nama Daypart</td><td>: {{ $program->nama }}</td></tr>
                            <tr><td>Produser</td><td>: {{ $petugas->produser_nama ?? '-' }}</td></tr>
                            <tr><td>Pengelola PEP</td><td>: {{ $petugas->pengelola_pep_nama ?? '-' }}</td></tr>
                            <tr><td>Pengarah Acara</td><td>: {{ $petugas->pengarah_acara_nama ?? '-' }}</td></tr>
                            <tr><td>Petugas LPU</td><td>: {{ $petugas->petugas_lpu_nama ?? '-' }}</td></tr>
                            <tr><td>Penyiar</td><td>: {{ $petugas->penyiars->first()->name ?? '-' }}</td></tr>
                        </table>
                        <p>Diparaf oleh petugas LPU, sebagai tanda bahwa iklan telah terputar.</p>
                        <p>Gorontalo, {{ $tanggal->isoFormat('D MMMM YYYY') }}</p>
                        <div class="signature-grid">
                            <div>Penyiar Dinas<br><br><br><br><span class="font-semibold underline">({{ $petugas->penyiars->first()->name ?? '____________________' }})</span></div>
                            <div>Pengelola Pro 2<br><br><br><br><span class="font-semibold underline">({{ $petugas->pengelola_pep_nama ?? '____________________' }})</span></div>
                            <div>Petugas LPU<br><br><br><br><span class="font-semibold underline">({{ $petugas->petugas_lpu_nama ?? '____________________' }})</span></div>
                        </div>
                    </div>
                @endif
            </div>
        @empty
            <div class="header">
                <p>Jadwal siaran belum tersedia untuk tanggal yang dipilih.</p>
            </div>
        @endforelse
    </div>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>