<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>[x-cloak] { display: none !important; }</style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ sidebarOpen: false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <div
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto"
        >
            @include('layouts.navigation')
        </div>

        <!-- Overlay -->
        <div
            x-show="sidebarOpen"
            @click="sidebarOpen = false"
            x-cloak
            class="fixed inset-0 bg-black bg-opacity-25 z-20 md:hidden"
        ></div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col w-full">

            <!-- Mobile topbar -->
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <!-- Tombol hamburger -->
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            
                <!-- Judul di tengah -->
                <div class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>
            

            <!-- Optional header (desktop only) -->
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-7">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @if (session('success') || session('error') || session('warning') || session('info'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($message = session('success'))
                Swal.fire({ // Langsung panggil Swal.fire
                    icon: 'success',
                    title: 'Berhasil!', // Judul bisa lebih jelas
                    text: '{{ $message }}', // Pesan di bagian teks
                    confirmButtonColor: '#3085d6', // Warna tombol OK (biru)
                    // timer: 2000 // Opsional: hilangkan otomatis setelah 2 detik
                });
            @endif

            @if ($message = session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops... Terjadi Kesalahan',
                    text: '{{ $message }}',
                    confirmButtonColor: '#d33', // Warna tombol OK (merah)
                });
            @endif

            @if ($message = session('warning'))
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: '{{ $message }}',
                    confirmButtonColor: '#ffbb33', // Warna tombol OK (kuning)
                });
            @endif

            @if ($message = session('info'))
                Swal.fire({
                    icon: 'info',
                    title: 'Informasi',
                    text: '{{ $message }}',
                    confirmButtonColor: '#3085d6', // Warna tombol OK (biru)
                });
            @endif
        });
    </script>
    @endif
</body>

</html>