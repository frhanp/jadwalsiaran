import './bootstrap';

import Alpine from 'alpinejs';
import TomSelect from 'tom-select';


window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', function () {
    const el = document.getElementById('penyiars');
    if (el) {
        new TomSelect(el, {
            plugins: {
                remove_button: {
                    title: 'Hapus item ini',
                }
            },
            create: false,
            maxItems: null,
            placeholder: 'Pilih satu atau lebih penyiar...'
        });
    }
});

Alpine.start();
