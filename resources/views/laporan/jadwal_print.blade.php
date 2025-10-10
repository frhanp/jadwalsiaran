<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Jadwal Siaran - {{ $tanggal->isoFormat('D MMMM Y') }}</title>
    <style>
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


        /* AWAL MODIFIKASI: CSS UNTUK PRINT */
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

        /* AKHIR MODIFIKASI */
    </style>
</head>

<body>
    <div class="container">
        @forelse ($programs as $program)
            @php $petugas = $jadwalPetugas->get($program->id); @endphp
            {{-- Setiap program dibungkus dalam div ini agar bisa dipisah halamannya --}}
            <div class="signature-block">
                <div class="header">
                    <h3>DAFTAR ACARA SIARAN</h3>
                    <h4>{{ $tanggal->isoFormat('dddd, D MMMM Y') }}</h4>
                </div>

                <table class="schedule-table">
                    {{-- ... (Isi tabel tetap sama, tidak perlu diubah) ... --}}
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
                            <td class="border border-gray-300 px-4 py-2 align-top font-bold"
                                rowspan="{{ $programRowspan }}">{{ $program->nama }}</td>
                            @foreach ($program->sequences as $sequenceIndex => $sequence)
                                @php
                                    $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                                @endphp
                                @if ($sequenceIndex > 0)
                        <tr>
        @endif
        <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">
            {{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
        <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">
            {{ $sequence->nama }} <br> <small class="font-normal text-gray-500">Host:
                {{ $sequence->host->name ?? 'N/A' }}</small></td>
        <td class="border border-gray-300 px-4 py-2 align-top text-center" rowspan="{{ $sequenceRowspan }}">
            <span class="text-lg font-bold">{{ $sequence->jumlah_pendengar ?? '-' }}</span>
        </td>
        @forelse ($sequence->items as $itemIndex => $item)
            @if ($itemIndex > 0)
                <tr>
            @endif
            <td class="border border-gray-300 px-4 py-2 align-top">
                {{ $item->materi }}
                @if ($item->materiDetails->isNotEmpty())
                    <ol class="list-decimal list-inside mt-1 pl-2">
                        @foreach ($item->materiDetails as $detail)
                            <li class="text-gray-600">{{ $detail->isi }}</li>
                        @endforeach
                    </ol>
                @endif
            </td>
            <td class="border border-gray-300 px-4 py-2 align-top">
                @if ($item->keterangan)
                    <p class="mb-2 italic text-gray-700">{{ $item->keterangan }}</p>
                @endif
                @if ($item->itemDetails->isNotEmpty())
                    @foreach ($item->itemDetails->groupBy('jenis') as $jenis => $details)
                        <p class="font-semibold capitalize">{{ $jenis }}:</p>
                        <ol class="list-decimal list-inside pl-4 mb-2">
                            @foreach ($details as $detail)
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
        </tbody>
        </table>

        @if ($petugas)
            <div class="signature-section">
                <h3 style="text-align:center; font-weight:bold; margin-bottom: 20px;">PETUGAS -
                    {{ $program->nama }}</h3>
                {{-- ... (Tabel petugas & tanda tangan tetap sama) ... --}}
                <table style="width: 50%; margin-bottom: 20px;">
                    <tr>
                        <td style="width: 40%;">Nama Daypart</td>
                        <td>: {{ $program->nama }}</td>
                    </tr>
                    <tr>
                        <td>Produser</td>
                        <td>: {{ $petugas->produser_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pengelola PEP</td>
                        <td>: {{ $petugas->pengelola_pep_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pengarah Acara</td>
                        <td>: {{ $petugas->pengarah_acara_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Petugas LPU</td>
                        <td>: {{ $petugas->petugas_lpu_nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penyiar</td>
                        <td>:
                            {{ $petugas->penyiars->isNotEmpty() ? $petugas->penyiars->pluck('name')->implode(', ') : '-' }}
                        </td>
                    </tr>
                </table>
                <p>Diparaf oleh petugas LPU, sebagai tanda bahwa iklan telah terputar.</p>
                <p>Gorontalo, {{ $tanggal->isoFormat('D MMMM YYYY') }}</p>
                <div class="signature-grid">
                    <div>
                        Penyiar Dinas<br><br><br><br>
                        <span
                            class="font-semibold underline">({{ $petugas->penyiars->isNotEmpty() ? $petugas->penyiars->pluck('name')->implode(', ') : '____________________' }})</span>
                    </div>
                    <div>
                        Pengelola Pro 2<br><br><br><br>
                        <span class="font-semibold underline">({{ $petugas->pengelola_pep_nama ?? '____________________' }})</span>
                    </div>
                    <div>
                        Petugas LPU<br><br><br><br>
                        <span
                            class="font-semibold underline">({{ $petugas->petugas_lpu_nama ?? '____________________' }})</span>
                    </div>
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
