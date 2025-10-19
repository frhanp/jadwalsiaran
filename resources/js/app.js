import './bootstrap';

import Alpine from 'alpinejs';
import TomSelect from 'tom-select';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;

window.confirmDelete = function(event, title = 'Anda Yakin?', text = 'Aksi ini tidak dapat dibatalkan.') {
    event.preventDefault(); // Mencegah form submit langsung
    const form = event.target; // Ambil elemen form

    Swal.fire({
        title: title,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', // Merah
        cancelButtonColor: '#6b7280', // Abu-abu
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(); // Submit form jika dikonfirmasi
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const el = document.getElementById('penyiars');

    if (el) {
        new TomSelect(el, {
            create: false,
            maxItems: 1,
            placeholder: 'Ketik nama penyiar...',
            persist: false,
            selectOnTab: true,
            closeAfterSelect: true,
            allowEmptyOption: true,
            render: {
                option: function (data, escape) {
                    return `<div class="py-2 px-3 hover:bg-gray-100 text-sm text-gray-800">
                                <span class="font-medium">${escape(data.text)}</span>
                            </div>`;
                },
                item: function (data, escape) {
                    return `<div class="text-sm font-semibold text-gray-800">${escape(data.text)}</div>`;
                }
            },
            plugins: ['clear_button', 'dropdown_input'], // Tambah tombol 'x' untuk hapus pilihan & input di dropdown
            dropdownParent: 'body', // pastikan dropdown muncul di atas layer lain
            dropdownDirection: 'up', // biar muncul ke atas kalau di bagian bawah halaman
            onInitialize: function () {
                // Tambahkan efek focus otomatis saat form dibuka
                const control = this.control_input;
                control.setAttribute('autocomplete', 'off');
            },
            onDropdownOpen: function () {
                // Animasi buka dropdown
                this.dropdown_content.style.transition = 'all 0.15s ease';
                this.dropdown_content.style.opacity = 1;
                this.dropdown_content.style.transform = 'translateY(0)';
            },
            onDropdownClose: function () {
                // Animasi tutup dropdown
                this.dropdown_content.style.transition = 'all 0.15s ease';
                this.dropdown_content.style.opacity = 0;
                this.dropdown_content.style.transform = 'translateY(-5px)';
            }
        });
    }
});


Alpine.start();