<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Currículum Vitae</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; }
        .contenido { margin: 20px; }
    </style>
</head>
<body>
    <h1>{{ $nombre }}</h1>
    <div class="contenido">
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Teléfono:</strong> {{ $telefono }}</p>

        <h2>Perfil Profesional</h2>
        <p>{{ $perfil }}</p>

        <h2>Habilidades</h2>
        <ul>
            @foreach($habilidades as $habilidad)
                <li>{{ $habilidad }}</li>
            @endforeach
        </ul>

        <h2>Educación</h2>
        <ul>
            @foreach($educacion as $edu)
                <li>{{ $edu }}</li>
            @endforeach
        </ul>

        <h2>Experiencia Laboral</h2>
        <ul>
            @foreach($experiencia as $exp)
                <li>{{ $exp }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
