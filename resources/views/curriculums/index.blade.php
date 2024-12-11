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
                    <form action="{{ route('descargar-cv') }}" method="POST">
                        @csrf
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2">
            
                        <label for="email" class="block text-sm font-medium text-gray-700 mt-4">Email:</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2">
            
                        <label for="telefono" class="block text-sm font-medium text-gray-700 mt-4">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2">
            
                        <label for="perfil" class="block text-sm font-medium text-gray-700 mt-4">Perfil Profesional:</label>
                        <textarea id="perfil" name="perfil" rows="4" placeholder="Descripción de perfil profesional" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2"></textarea>
            
                        <label for="habilidades" class="block text-sm font-medium text-gray-700 mt-4">Habilidades:</label>
                        <textarea id="habilidades" name="habilidades[]" rows="4" placeholder="Lista de habilidades (una por línea)" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2"></textarea>
            
                        <label for="educacion" class="block text-sm font-medium text-gray-700 mt-4">Educación:</label>
                        <textarea id="educacion" name="educacion[]" rows="4" placeholder="Lista de educación (una por línea)" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2"></textarea>
            
                        <h2 class="mt-6 text-lg font-semibold">Experiencia Laboral</h2>
                        <textarea name="experiencia[]" rows="4" placeholder="Descripción de experiencia laboral" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 p-2"></textarea>
            
                        <button type="submit" class="mt-6 w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Descargar CV
                        </button>



                </div>
                <a href="{{ route('curriculums.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    Agregar Curriculum
                </a>
                    <table class="table">
                        <thead class="thead-dark"">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Perfil Profesional</th>
                                <th scope="col">Habilidades</th>
                                <th scope="col">Experiencia laboral</th>
                                <th scope="col">Educación</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($curriculums as $curriculum)
                            <tr>
                                <td scope="row">{{ $curriculum->name }}</td>
                                <td scope="row">{{ $curriculum->email }}</td>
                                <td scope="row">{{ $curriculum->phone }}</td>
                                <td scope="row">{{ $curriculum->professional_profile }}</td>
                                <td scope="row">{{ $curriculum->skills }}</td>
                                <td scope="row">{{ $curriculum->work_experience }}</td>
                                <td scope="row">{{ $curriculum->education }}</td>
                                <td scope="row">
                            </tr>
                           
                                  
                            @endforeach
                        <tbody>
                 </table> 
                </div>           
            </div>
    
        </div>
    

    </body>


    </html>
    
</x-app-layout>
