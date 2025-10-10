<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <x-input-label for="tanggal" :value="__('Tanggal')" />
        <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="old('tanggal', $jadwalPetugas->tanggal ?? '')" required />
        <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 pt-6 border-t">
    <div>
        <x-input-label for="produser_nama" value="Produser" />
        <x-text-input id="produser_nama" class="block mt-1 w-full" type="text" name="produser_nama" :value="old('produser_nama', $jadwalPetugas->produser_nama ?? '')" />
        <x-input-error :messages="$errors->get('produser_nama')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="pengelola_pep_nama" value="Pengelola PEP" />
        <x-text-input id="pengelola_pep_nama" class="block mt-1 w-full" type="text" name="pengelola_pep_nama" :value="old('pengelola_pep_nama', $jadwalPetugas->pengelola_pep_nama ?? '')" />
        <x-input-error :messages="$errors->get('pengelola_pep_nama')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="pengarah_acara_nama" value="Pengarah Acara" />
        <x-text-input id="pengarah_acara_nama" class="block mt-1 w-full" type="text" name="pengarah_acara_nama" :value="old('pengarah_acara_nama', $jadwalPetugas->pengarah_acara_nama ?? '')" />
        <x-input-error :messages="$errors->get('pengarah_acara_nama')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="petugas_lpu_nama" value="Petugas LPU" />
        <x-text-input id="petugas_lpu_nama" class="block mt-1 w-full" type="text" name="petugas_lpu_nama" :value="old('petugas_lpu_nama', $jadwalPetugas->petugas_lpu_nama ?? '')" />
        <x-input-error :messages="$errors->get('petugas_lpu_nama')" class="mt-2" />
    </div>
    <div class="md:col-span-2">
        <x-input-label for="penyiars" value="Penyiar Bertugas" />
        <select id="penyiars" name="penyiars[]" multiple class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            @php
                $selectedPenyiars = old('penyiars', $jadwalPetugas->penyiars->pluck('id')->all() ?? []);
            @endphp
            @foreach($penyiars as $penyiar)
                <option value="{{ $penyiar->id }}" @selected(in_array($penyiar->id, $selectedPenyiars))>
                    {{ $penyiar->name }}
                </option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('penyiars')" class="mt-2" />
    </div>
</div>
