<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Materi Siar: <span class="font-bold">{{ $item->materi }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $prefix = Auth::user()->role === 'admin' ? 'admin.' : 'penyiar.'; @endphp
                    <form method="POST" action="{{ route($prefix.'items.update', $item) }}">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="materi" :value="__('Materi Siar')" />
                                <x-text-input id="materi" class="block mt-1 w-full" type="text" name="materi" :value="old('materi', $item->materi)" required autofocus />
                                <x-input-error :messages="$errors->get('materi')" class="mt-2" />
                            </div>

                            <div x-data="stopwatch('{{ old('durasi', $item->durasi ?? 0) }}')">
                                <x-input-label value="Durasi" />
                                
                                {{-- Input asli (decimal minutes) disembunyikan --}}
                                <input type="hidden" name="durasi" x-model="durationInMinutes" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />

                                {{-- Stopwatch Controls --}}
                                <div class="mt-1 flex items-center gap-4 p-4 bg-gray-50 rounded-lg border">
                                    <div class="flex-grow text-center">
                                        <span class="text-4xl font-mono font-bold text-gray-800 tracking-wider" x-text="formatStopwatchDisplay()"></span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button" @click="start()" x-show="!isRunning" class="px-4 py-2 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700 transition">Mulai</button>
                                        <button type="button" @click="stop()" x-show="isRunning" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded-md hover:bg-red-700 transition">Stop</button>
                                        <button type="button" @click="reset()" class="px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 transition">Reset</button>
                                    </div>
                                </div>
                                
                                {{-- Input Manual MM:SS (Visible) --}}
                                <div class="mt-3">
                                    <x-input-label value="Durasi Manual (MM:SS, isi jika perlu koreksi)" class="text-xs text-gray-500" />
                                    <div class="flex items-center gap-2 mt-1">
                                        <x-text-input 
                                            id="durasi_manual_menit" 
                                            class="block w-20 text-center" 
                                            type="number" 
                                            min="0"
                                            placeholder="MM"
                                            x-model.number="manualMinutes"
                                            @input="updateFromManualInput"
                                        />
                                        <span class="font-bold text-gray-500">:</span>
                                        <x-text-input 
                                            id="durasi_manual_detik" 
                                            class="block w-20 text-center" 
                                            type="number" 
                                            min="0" max="59"
                                            placeholder="SS"
                                            x-model.number="manualSeconds"
                                            @input="updateFromManualInput"
                                        />
                                    </div>
                                </div>
                            </div>


                            {{-- <div>
                                <x-input-label for="durasi" :value="__('Durasi (menit)')" />
                                <x-text-input id="durasi" class="block mt-1 w-full" type="number" step="0.01" name="durasi" :value="old('durasi', $item->durasi)" />
                                <x-input-error :messages="$errors->get('durasi')" class="mt-2" />
                            </div> --}}

                            <div>
                                <x-input-label for="frame" :value="__('Frame (Opsional override)')" />
                                <x-text-input id="frame" class="block mt-1 w-full" type="text" name="frame" :value="old('frame', $item->frame)" />
                                <x-input-error :messages="$errors->get('frame')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="keterangan" :value="__('Keterangan')" />
                                <textarea id="keterangan" name="keterangan" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('keterangan', $item->keterangan) }}</textarea>
                                <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route($prefix.'sequences.items.index', $item->sequence_id) }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('stopwatch', (initialMinutes = 0) => ({
                isRunning: false,
                seconds: 0, 
                timer: null,
                durationInMinutes: parseFloat(initialMinutes).toFixed(2), // Hidden input value (decimal)
                manualMinutes: 0,
                manualSeconds: 0,

                init() {
                    // Inisialisasi manual input dari initialMinutes (nilai $item->durasi)
                    let initialTotalSeconds = parseFloat(initialMinutes) * 60;
                    this.manualMinutes = Math.floor(initialTotalSeconds / 60);
                    this.manualSeconds = Math.round(initialTotalSeconds % 60);
                     if (this.manualSeconds >= 60) {
                        this.manualMinutes += 1;
                        this.manualSeconds = 0;
                    }
                    this.seconds = this.manualMinutes * 60 + this.manualSeconds; // Update internal seconds 
                    this.updateHiddenInput(); // Update hidden input initially
                },

                formatStopwatchDisplay() { // Format HH:MM:SS untuk display stopwatch
                    const h = Math.floor(this.seconds / 3600).toString().padStart(2, '0');
                    const m = Math.floor((this.seconds % 3600) / 60).toString().padStart(2, '0');
                    const s = Math.floor(this.seconds % 60).toString().padStart(2, '0');
                    return `${h}:${m}:${s}`;
                },
                
                updateManualDisplay() { // Update input MM dan SS dari state `seconds`
                    this.manualMinutes = Math.floor(this.seconds / 60);
                    this.manualSeconds = Math.round(this.seconds % 60);
                     if (this.manualSeconds >= 60) {
                        this.manualMinutes += 1;
                        this.manualSeconds = 0;
                    }
                },

                updateHiddenInput() { // Update hidden input (decimal minutes) dari state `seconds`
                     // Gunakan floor untuk konsistensi dengan index
                    let currentMinutes = this.seconds / 60;
                    this.durationInMinutes = (Math.floor(currentMinutes * 100) / 100).toFixed(2);
                },

                updateFromManualInput() { // Dipanggil saat user ketik di input MM atau SS
                    this.manualMinutes = Math.max(0, parseInt(this.manualMinutes) || 0);
                    this.manualSeconds = Math.max(0, Math.min(59, parseInt(this.manualSeconds) || 0)); 
                    this.seconds = this.manualMinutes * 60 + this.manualSeconds;
                    this.updateHiddenInput(); 
                },

                start() {
                    if (this.isRunning) return;
                    this.isRunning = true;
                    this.seconds = this.manualMinutes * 60 + this.manualSeconds; 
                    this.timer = setInterval(() => {
                        this.seconds++;
                        this.updateManualDisplay(); 
                        this.updateHiddenInput(); 
                    }, 1000);
                },

                stop() {
                    if (!this.isRunning) return;
                    this.isRunning = false;
                    clearInterval(this.timer);
                    this.updateManualDisplay(); 
                    this.updateHiddenInput();
                },

                reset() {
                    this.stop();
                    this.seconds = 0;
                    this.updateManualDisplay();
                    this.updateHiddenInput();
                }
            }))
        })
    </script>
</x-app-layout>