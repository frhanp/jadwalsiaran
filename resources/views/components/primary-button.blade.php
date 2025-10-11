<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center justify-center gap-2 px-4 py-2.5 
                bg-indigo-600 text-white text-sm font-medium rounded-lg 
                hover:bg-indigo-700 focus:outline-none focus:ring-2 
                focus:ring-indigo-500 focus:ring-offset-2 active:bg-indigo-800 
                transition-all duration-200'
]) }}>
    {{ $slot }}
</button>

