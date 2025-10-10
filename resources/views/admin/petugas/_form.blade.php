<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <x-input-label for="tanggal" :value="__('Tanggal')" />
        <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="old('tanggal', $jadwalPetugas->tanggal ?? '')" required />
        <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 pt-6 border-t">
    @php
        $roles = [
            'produser_id' => 'Produser',
            'pengelola_pep_id' => 'Pengelola PEP',
            'pengarah_acara_id' => 'Pengarah Acara',
            'petugas_lpu_id' => 'Petugas LPU',
        ];
    @endphp

    @foreach ($roles as $field => $label)
        <div>
            <x-input-label :for="$field" :value="$label" />
            <select id="{{ $field }}" name="{{ $field }}"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">-- Pilih Petugas --</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @selected(old($field, $jadwalPetugas->$field ?? '') == $user->id)>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get($field)" class="mt-2" />
        </div>
    @endforeach
    <div class="md:col-span-2">
        <x-input-label for="penyiars" value="Penyiar Bertugas (bisa pilih lebih dari satu)" />
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
