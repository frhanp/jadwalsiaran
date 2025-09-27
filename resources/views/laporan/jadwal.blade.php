<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Jadwal Siaran Harian') }}
        </h2>
    </x-slot>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 no-print">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Laporan Jadwal Siaran Harian') }}
                        </h2>
                    </div>
                    <form method="GET" action="{{ route('laporan.jadwal.harian') }}" class="flex items-end space-x-4">
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Pilih Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal->format('Y-m-d') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">Tampilkan</button>
                        <a href="{{ route('laporan.jadwal.cetak', ['tanggal' => $tanggal->format('Y-m-d')]) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500">
                            Cetak
                        </a>
                    </form>
                </div>
            </div>

            {{-- Area ini yang akan dicetak --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg printable-area">
                <div class="p-6 text-gray-900">
                    <h3 class="text-center font-bold text-lg">JADWAL SIARAN</h3>
                    <h4 class="text-center font-semibold text-md mb-4">{{ $tanggal->isoFormat('dddd, D MMMM Y') }}</h4>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border-collapse border border-gray-300 text-sm">
                            <thead class="bg-gray-100 text-left">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2 w-1/12">Program</th>
                                    <th class="border border-gray-300 px-4 py-2 w-1/12">Waktu</th>
                                    <th class="border border-gray-300 px-4 py-2 w-2/12">Sequence</th>
                                    <th class="border border-gray-300 px-4 py-2 w-4/12">Materi Siar</th>
                                    <th class="border border-gray-300 px-4 py-2 w-4/12">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($programs as $program)
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
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-gray-500">Jadwal siaran belum tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- <div class="mt-12">
                        @foreach($programs as $program)
                            @php $petugas = $jadwalPetugas->get($program->id); @endphp
                            @if($petugas)
                            <div class="mb-10 signature-block">
                                <h3 class="font-bold text-center mb-4 uppercase">PETUGAS - {{ $program->nama }}</h3>
                                <table class="w-full text-sm mb-4">
                                    <tr><td class="w-1/4">Nama Daypart</td><td>: {{ $program->nama }}</td></tr>
                                    <tr><td>Produser</td><td>: {{ $petugas->produser->name ?? '-' }}</td></tr>
                                    <tr><td>Pengelola PEP</td><td>: {{ $petugas->pengelolaPep->name ?? '-' }}</td></tr>
                                    <tr><td>Pengarah Acara</td><td>: {{ $petugas->pengarahAcara->name ?? '-' }}</td></tr>
                                    <tr><td>Petugas LPU</td><td>: {{ $petugas->petugasLpu->name ?? '-' }}</td></tr>
                                    <tr><td>Penyiar</td><td>: {{ $petugas->penyiarDinas->name ?? '-' }}</td></tr>
                                </table>
                                <p class="text-sm mt-4">Diparaf oleh petugas LPU, sebagai tanda bahwa iklan telah terputar.</p>
                                <p class="text-sm">Gorontalo, {{ $tanggal->isoFormat('D MMMM YYYY') }}</p>
                                <div class="mt-8 grid grid-cols-3 gap-4 text-center">
                                    <div>
                                        <p class="mb-16">Penyiar Dinas</p>
                                        <p class="font-semibold underline">({{ $petugas->penyiarDinas->name ?? '____________________' }})</p>
                                    </div>
                                    <div>
                                        <p class="mb-16">Pengelola Pro 2</p>
                                        <p class="font-semibold underline">({{ $petugas->pengelolaPep->name ?? '____________________' }})</p>
                                    </div>
                                    <div>
                                        <p class="mb-16">Petugas LPU</p>
                                        <p class="font-semibold underline">({{ $petugas->petugasLpu->name ?? '____________________' }})</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>