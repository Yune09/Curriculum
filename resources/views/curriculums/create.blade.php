<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 dark:text-blue-200 leading-tight">
            {{ __('Formulario Profesional') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formuarilo Profesional</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-green-100 p-8">
        <div class="container">

            <div class="row">
                <div class="col-8">
    
    
                    <h1 class="text-2xl font-bold mb-6">Ingrese los datos solicitados</h1>
                    <form action="{{ route('curriculums.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre completo:</label>
                            <input type="text" name="name" placeholder="Nombre completo" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico:</label>
                            <input type="email" name="email" placeholder="Correo electrónico" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                            <input type="text" name="phone" placeholder="Teléfono" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                
                        <div class="mb-4">
                            <label for="professional_profile" class="block text-gray-700 text-sm font-bold mb-2">Perfil profesional:</label>
                            <textarea name="professional_profile" placeholder="Perfil profesional" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                
                        <div class="mb-4">
                            <label for="skills" class="block text-gray-700 text-sm font-bold mb-2">Habilidades:</label>
                            <textarea name="skills" placeholder="Habilidades" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                
                        <div class="mb-4">
                            <label for="work_experience" class="block text-gray-700 text-sm font-bold mb-2">Experiencia laboral:</label>
                            <textarea name="work_experience" placeholder="Experiencia laboral" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                
                        <div class="mb-4">
                            <label for="education" class="block text-gray-700 text-sm font-bold mb-2">Educación:</label>
                            <textarea name="education" placeholder="Educación" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                
                        <div class="flex items-center justify-between mt-6">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                GUARDAR
                            </button>
                            <a href="{{ route('curriculums') }}" class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
    
        </div>
    

    </body>


    </html>
    
</x-app-layout>
