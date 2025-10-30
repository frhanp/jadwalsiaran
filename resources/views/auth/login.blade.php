<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mb-6">
        <div class="h-20 w-48 flex items-center justify-center bg-transparent rounded-lg shadow">
            <img src="{{ asset('images/rrilogo1.png') }}" 
                 alt="Logo RRI" 
                 class="object-contain h-full w-auto" />
        </div>
    </div>

    <!-- Title -->
    <h2 class="text-center text-2xl font-bold text-slate-800 mb-6">
        Login ke Daftar Acara Siaran
    </h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700" />
            <x-text-input id="email"
                          class="block mt-1 w-full rounded-lg border-slate-300 bg-white text-slate-800 placeholder-slate-400 focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-slate-700" />
            <x-text-input id="password"
                          class="block mt-1 w-full rounded-lg border-slate-300 bg-white text-slate-800 placeholder-slate-400 focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-slate-300 text-blue-600 focus:ring-blue-400"
                       name="remember">
                <span class="ms-2 text-sm text-slate-700">{{ __('Remember me') }}</span>
            </label>

            {{-- @if (Route::has('password.request'))
                <a class="text-sm text-blue-600 hover:text-blue-800 transition-colors"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}
        </div>

        <!-- Submit -->
        <div class="mt-6">
            <x-primary-button
                class="w-full bg-gradient-to-r from-blue-600 to-sky-500 text-white font-semibold py-3 rounded-xl shadow-md hover:shadow-blue-300/50 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
