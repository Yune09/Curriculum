<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-800 dark:bg-green-200 border border-transparent rounded-md font-semibold text-xs text-green dark:text-green-800 uppercase tracking-widest hover:bg-green-700 dark:hover:bg-white focus:bg-green-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-green-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
