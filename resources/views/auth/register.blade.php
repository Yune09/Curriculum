<x-guest-layout >
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full border-green-300 bg-green focus:border-green-500 focus:ring focus:ring-green-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full border-green-300 bg-green focus:border-green-500 focus:ring focus:ring-green-200" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full border-green-300 bg-green focus:border-green-500 focus:ring focus:ring-green-200"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-green-300 bg-green focus:border-green-500 focus:ring focus:ring-green-200"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-green-600 hover:text-green-800 dark:text-green-400 dark:hover:text-green-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-green-800" href="{{ route('login') }}">
                {{ __('Ya registrado?') }}
            </a>

            <x-primary-button class="ms-4 bg-green-600 hover:bg-green-700 text-green">
                {{ __('Resgitrado') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
