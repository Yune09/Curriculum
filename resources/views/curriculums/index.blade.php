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
                    <form method="POST" action="#">
                        @csrf
                
                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input id="nombre" type="text" name="nombre" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                        </div>
                
                        <!-- Correo -->
                        <div class="mb-4">
                            <label for="correo" class="block text-sm font-medium text-gray-700">Correo</label>
                            <input id="correo" type="email" name="correo" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                        </div>
                
                        <!-- Teléfono -->
                        <div class="mb-4">
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input id="telefono" type="tel" name="telefono" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                        </div>
                
                        <!-- Perfil Profesional -->
                        <div class="mb-4">
                            <label for="perfil_profesional" class="block text-sm font-medium text-gray-700">Perfil Profesional</label>
                            <textarea id="perfil_profesional" name="perfil_profesional" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                        </div>
                
                        <!-- Habilidades -->
                        <div class="mb-4">
                            <label for="habilidades" class="block text-sm font-medium text-gray-700">Habilidades</label>
                            <textarea id="habilidades" name="habilidades" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                        </div>
                
                        <!-- Experiencia Laboral -->
                        <div class="mb-4">
                            <label for="experiencia_laboral" class="block text-sm font-medium text-gray-700">Experiencia Laboral</label>
                            <textarea id="experiencia_laboral" name="experiencia_laboral" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                        </div>
                
                        <!-- Educación -->
                        <div class="mb-4">
                            <label for="educacion" class="block text-sm font-medium text-gray-700">Educación</label>
                            <textarea id="educacion" name="educacion" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                        </div>
                
                        <!-- Botones -->
                        <div class="flex justify-between mt-6">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Crear</button>
                            <button type="button" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button type="button" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            <button type="button" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Descargar</button>
                        </div>
                    </form>
                </div>
                    {{-- <a href="{{ route('products.create') }}">Agregar Producto</a> --}}
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
                                <td scope="row">{{ $curriculum->skills }}</td>
                                <td scope="row">{{ $curriculum->professional_profile }}</td>
                                <td scope="row">{{ $curriculum->work_experience }}</td>
                                <td scope="row">{{ $curriculum->education }}</td>
                                <td scope="row">
                            </tr>
                                      <a href="{{ route('curriculums.edit', $curriculums) }}">Editar</a>
                             <form action="{{ route('curriculums.destroy', $curriculums) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                             <button type="button" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>

                             </form> 
                                  
                            @endforeach
                        <tbody>
                 </table> 
                </div>           
            </div>
    
        </div>
    

    </body>


    </html>
    
</x-app-layout>
