<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 dark:text-blue-200 leading-tight">
            {{ __('Formulario Profesional') }}
        </h2>
    </x-slot>

@section('content')
<div class="container">
    <h2>Editar o Eliminar Curriculum</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('curriculums.update', $curriculum->id) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $curriculum->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $curriculum->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $curriculum->phone) }}" required>
        </div>

        <div class="mb-3">
            <label for="skills" class="form-label">Habilidades</label>
            <textarea class="form-control" id="skills" name="skills">{{ old('skills', $curriculum->skills) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="professional_profile" class="form-label">Perfil Profesional</label>
            <textarea class="form-control" id="professional_profile" name="professional_profile">{{ old('professional_profile', $curriculum->professional_profile) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="work_experience" class="form-label">Experiencia Laboral</label>
            <textarea class="form-control" id="work_experience" name="work_experience">{{ old('work_experience', $curriculum->work_experience) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="education" class="form-label">Educación</label>
            <textarea class="form-control" id="education" name="education">{{ old('education', $curriculum->education) }}</textarea>
        </div>

        <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar Perfil</button>
        
    </form>

    
    <form action="{{ route('curriculums.destroy', $curriculum->id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar Perfil</button>
    </form>

</div>
    
</x-app-layout>

