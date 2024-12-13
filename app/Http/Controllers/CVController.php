<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class CVController extends Controller
{
    public function descargarCV(Request $request)
    {
        $data = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'perfil' => $request->input('perfil'),
            'habilidades' => $request->input('habilidades', []), 
            'educacion' => $request->input('educacion', []), 
            'experiencia' => $request->input('experiencia', []),
           
        ];

        $pdf = PDF::loadView('cv', $data);
        return $pdf->download('curriculum_vitae.pdf');
    }
}
