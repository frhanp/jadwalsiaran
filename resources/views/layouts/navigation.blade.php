<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="py-7 px-6 border-b border-gray-200 shadow-sm">
        <a href="{{ route('dashboard') }}" 
           class="text-1xl font-extrabold text-blue-700 tracking-tight hover:text-blue-800 transition-colors">
            {{ config('app.name', 'DAFTAR ACARA SIARAN') }}
        </a>
    </div>
    
    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            <span>{{ __('Dashboard') }}</span>
        </x-nav-link>

        {{-- @role('admin') --}}
        @if(Auth::check() && Auth::user()->role === 'admin')
        <div class="pt-4">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Admin
            </h3>
            <div class="mt-2 space-y-2">
                <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span>Kelola Pengguna</span>
                </x-nav-link>
                <x-nav-link :href="route('admin.programs.index')" :active="request()->routeIs('admin.programs.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                    </svg>
                    <span>Kelola Daftar Acara Siaran</span>
                </x-nav-link>
                <x-nav-link :href="route('laporan.jadwal.harian')" :active="request()->routeIs('laporan.jadwal.*')">
                    
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
                   <span>Laporan</span>
               </x-nav-link>
            </div>
        </div>
        @endif

        

        @if(Auth::check() && Auth::user()->role === 'penyiar')
        <div class="pt-4">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Penyiar
            </h3>
            <div class="mt-2 space-y-2">
                <x-nav-link :href="route('penyiar.jadwal.index')" :active="request()->routeIs('penyiar.jadwal.*', 'admin.items.*')">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18M12 15.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span>Daftar Acara Siaran Saya</span>
                </x-nav-link>
            </div>
        </div>
        @endif
        @if(Auth::check() && in_array(Auth::user()->role, ['katim', 'kepsta']))
        <div class="pt-4">
            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Laporan
            </h3>
            <div class="mt-2 space-y-2">
                <x-nav-link :href="route('laporan.jadwal.harian')" :active="request()->routeIs('laporan.jadwal.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                    <span>Laporan</span>
                </x-nav-link>
            </div>
        </div>
        @endif

        @if(Auth::check() && in_array(Auth::user()->role, ['katim']))
        <x-nav-link :href="route('admin.studios.index')" :active="request()->routeIs('admin.studios.*')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span>Kelola Studio</span>
        </x-nav-link>
        @endif
        {{-- @endrole --}}

    </nav>
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left 
                   bg-gray-50 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 
                   transition-colors">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    
        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white border border-gray-200 rounded-lg shadow-md text-sm">
            <a href="{{ route('profile.edit') }}"
               class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                {{ __('Profile') }}
            </a>
    
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 hover:text-red-700 rounded-lg transition-colors">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
    
</aside>