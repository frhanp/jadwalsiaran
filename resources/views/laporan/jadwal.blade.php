<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Jadwal Siaran Harian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
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
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($programs as $program)
                                    @php
                                        $programRowspan = 0;
                                        foreach ($program->sequences as $sequence) {
                                            $programRowspan += $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                                        }
                                    @endphp
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 align-top font-bold" rowspan="{{ $programRowspan }}">
                                            {{ $program->nama }}
                                        </td>
                                        
                                        @foreach ($program->sequences as $sequenceIndex => $sequence)
                                            @php
                                                $sequenceRowspan = $sequence->items->count() > 0 ? $sequence->items->count() : 1;
                                            @endphp

                                            @if ($sequenceIndex > 0)
                                                <tr>
                                            @endif

                                            <td class="border border-gray-300 px-4 py-2 align-top" rowspan="{{ $sequenceRowspan }}">{{ \Carbon\Carbon::parse($sequence->waktu)->format('H:i') }}</td>
                                            <td class="border border-gray-300 px-4 py-2 align-top font-semibold" rowspan="{{ $sequenceRowspan }}">{{ $sequence->nama }} <br> <small class="font-normal text-gray-500">Host: {{ $sequence->host->name ?? 'N/A' }}</small></td>

                                            @if($sequence->items->isNotEmpty())
                                                @foreach ($sequence->items as $itemIndex => $item)
                                                    @if ($itemIndex > 0)
                                                        <tr>
                                                    @endif
                                                    
                                                    <td class="border border-gray-300 px-4 py-2 align-top">
                                                        {{ $item->materi }}
                                                        @if($item->materiDetails->isNotEmpty())
                                                            {{-- AWAL MODIFIKASI --}}
                                                            <ol class="list-decimal list-inside mt-1 pl-2">
                                                                @foreach($item->materiDetails as $detail)
                                                                    <li class="text-gray-600">{{ $detail->isi }}</li>
                                                                @endforeach
                                                            </ol>
                                                            {{-- AKHIR MODIFIKASI --}}
                                                        @endif
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2 align-top">
                                                        @if($item->keterangan)
                                                            <p class="mb-2 italic text-gray-700">{{ $item->keterangan }}</p>
                                                        @endif

                                                        @if($item->itemDetails->isNotEmpty())
                                                            @foreach($item->itemDetails->groupBy('jenis') as $jenis => $details)
                                                                <p class="font-semibold capitalize">{{ $jenis }}:</p>
                                                                {{-- AWAL MODIFIKASI --}}
                                                                <ol class="list-decimal list-inside pl-4 mb-2">
                                                                    @foreach($details as $detail)
                                                                        <li>{{ $detail->isi }}</li>
                                                                    @endforeach
                                                                </ol>
                                                                {{-- AKHIR MODIFIKASI --}}
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <td class="border border-gray-300 px-4 py-2 align-top"></td>
                                                <td class="border border-gray-300 px-4 py-2 align-top"></td>
                                                </tr>
                                            @endif
                                        @endforeach
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-gray-500">
                                            Jadwal siaran belum tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>