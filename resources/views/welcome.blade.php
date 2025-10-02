<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Siaran RRI - Manajemen Modern</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-950 text-slate-200">
    <div class="relative min-h-screen flex flex-col">
        
        <!-- HEADER -->
        <header class="sticky top-0 z-50 w-full backdrop-blur-md bg-slate-950/80 border-b border-slate-800">
            <div class="container mx-auto flex justify-between items-center p-4">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="/logo-rri.png" alt="Logo RRI" class="h-10 w-auto transition-transform duration-300 group-hover:scale-110"> 
                    <span class="text-xl font-bold text-white group-hover:text-blue-400 transition-colors hidden sm:block">
                        Jadwal Siaran
                    </span>
                </a>

                <nav class="flex items-center space-x-4 sm:space-x-6">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" 
                           class="relative text-slate-600 dark:text-slate-300 font-semibold transition-colors duration-300 group py-1">
                            <span>Log in</span>
                            {{-- Garis Bawah Animasi --}}
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-center"></span>
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold px-5 py-2.5 rounded-xl shadow-lg shadow-blue-500/20 hover:shadow-xl hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-1">
                            Register
                        </a>
                    @endif
                </nav>
            </div>
        </header>

        <!-- HERO -->
        <main class="flex-grow">
            <section class="relative isolate overflow-hidden">
                <div class="container mx-auto px-6 pt-24 pb-32 text-center">
                    <!-- Background Gradient Shape -->
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-72" aria-hidden="true">
                        <div class="relative left-1/2 aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-blue-500 to-sky-600 opacity-30 sm:w-[72rem]"
                             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    
                    <div class="mx-auto max-w-4xl">
                        <div class="mb-8 flex justify-center">
                            <div class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-blue-300 bg-slate-900 ring-1 ring-slate-700 hover:ring-blue-500 transition-colors duration-300 shadow-sm">
                                Didesain untuk Admin, Penyiar, Katim & Kepsta
                            </div>
                        </div>
                        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-white">
                            Platform Kolaboratif untuk
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-sky-300">Jadwal Siaran RRI</span>
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto text-lg leading-8 text-slate-400">
                            Tinggalkan cara manual. Sambut era baru penjadwalan siaran yang terintegrasi, cepat, dan bebas dari kesalahan.
                        </p>
                        <div class="mt-10">
                            <a href="{{ route('dashboard') }}" 
                               class="inline-block bg-gradient-to-r from-blue-600 to-sky-500 text-white font-bold text-lg px-8 py-4 rounded-2xl shadow-lg hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                                Mulai Sekarang &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- FITUR -->
            <section class="bg-slate-950 py-24">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                         <h2 class="text-4xl font-bold tracking-tight text-white">Semua yang Anda Butuhkan</h2>
                         <p class="text-slate-400 mt-4 text-lg">Dari templat master hingga laporan real-time, semua dalam satu platform.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                        <!-- CARD 1 -->
                        <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 shadow-lg 
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/30 
                                    transition-all duration-500 ease-out group">
                            <div class="bg-gradient-to-br from-blue-600 to-sky-500 text-white 
                                        rounded-xl w-14 h-14 flex items-center justify-center mb-6 
                                        group-hover:rotate-6 group-hover:scale-110 
                                        transition-transform duration-500 ease-out">
                                <!-- Calendar Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     fill="none" viewBox="0 0 24 24" 
                                     stroke-width="1.5" stroke="currentColor" 
                                     class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M6.75 3v2.25M17.25 3v2.25M3.75 9h16.5m-1.5 
                                          11.25h-13.5a2.25 2.25 0 01-2.25-2.25V7.5a2.25 
                                          2.25 0 012.25-2.25h13.5a2.25 2.25 0 012.25 
                                          2.25v10.5a2.25 2.25 0 01-2.25 2.25z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-500">
                                Templat Jadwal Dinamis
                            </h3>
                            <p class="text-slate-400 group-hover:text-slate-200 transition-colors duration-500">
                                Admin dapat membuat templat jadwal per-Daypart yang siap digunakan penyiar setiap hari hanya dengan satu klik.
                            </p>
                        </div>

                        <!-- CARD 2 -->
                        <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 shadow-lg 
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/30 
                                    transition-all duration-500 ease-out group">
                            <div class="bg-gradient-to-br from-blue-600 to-sky-500 text-white 
                                        rounded-xl w-14 h-14 flex items-center justify-center mb-6 
                                        group-hover:rotate-6 group-hover:scale-110 
                                        transition-transform duration-500 ease-out">
                                <!-- Document Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     fill="none" viewBox="0 0 24 24" 
                                     stroke-width="1.5" stroke="currentColor" 
                                     class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M19.5 14.25v-7.5A2.25 2.25 0 0017.25 
                                          4.5h-10.5A2.25 2.25 0 004.5 
                                          6.75v10.5A2.25 2.25 0 006.75 
                                          19.5h6.879c.414 0 .81-.165 
                                          1.102-.458l4.241-4.241a1.5 
                                          1.5 0 00.458-1.051z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M9 9.75h6M9 12.75h3"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-500">
                                Input Terstruktur
                            </h3>
                            <p class="text-slate-400 group-hover:text-slate-200 transition-colors duration-500">
                                Penyiar mengisi detail siaran dengan komponen yang disetujui, mengurangi kesalahan dan menjaga konsistensi.
                            </p>
                        </div>

                        <!-- CARD 3 -->
                        <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 shadow-lg 
                                    hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/30 
                                    transition-all duration-500 ease-out group">
                            <div class="bg-gradient-to-br from-blue-600 to-sky-500 text-white 
                                        rounded-xl w-14 h-14 flex items-center justify-center mb-6 
                                        group-hover:rotate-6 group-hover:scale-110 
                                        transition-transform duration-500 ease-out">
                                <!-- Chart Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     fill="none" viewBox="0 0 24 24" 
                                     stroke-width="1.5" stroke="currentColor" 
                                     class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                          d="M3 3v18h18M9 17v-4.5M15 17V9M12 
                                          17v-2.25"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-500">
                                Monitoring Mudah
                            </h3>
                            <p class="text-slate-400 group-hover:text-slate-200 transition-colors duration-500">
                                Kepsta & Katim dapat melihat laporan jadwal siaran final secara real-time, tanpa menunggu dokumen fisik.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- FOOTER -->
        <footer class="bg-gradient-to-r from-blue-600 to-sky-500">
            <div class="container mx-auto px-6 py-8 text-center text-white font-medium">
                &copy; {{ date('Y') }} Jadwal Siaran RRI. <span class="opacity-80">Dikembangkan untuk efisiensi modern.</span>
            </div>
        </footer>
    </div>
</body>
</html>
