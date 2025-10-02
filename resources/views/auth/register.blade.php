<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mb-6">
        <img src="/logo-rri.png" alt="Logo RRI" class="h-14 w-auto">
    </div>

    <!-- Title -->
    <h2 class="text-center text-2xl font-bold text-white mb-6">Buat Akun Baru</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-slate-300" />
            <x-text-input id="name" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-slate-300" />
            <x-text-input id="email" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-slate-300" />
            <x-text-input id="password" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-300" />
            <x-text-input id="password_confirmation" 
                          class="block mt-1 w-full rounded-lg border-slate-700 bg-slate-800 text-white placeholder-slate-400 
                                 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                          type="password"
                          name="password_confirmation" 
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-6">
            <a class="text-sm text-slate-400 hover:text-blue-400 transition-colors" href="{{ route('login') }}">
                {{ __('Sudah punya akun? Login') }}
            </a>

            <x-primary-button class="ms-4 bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold px-6 py-2 rounded-xl shadow-md hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
