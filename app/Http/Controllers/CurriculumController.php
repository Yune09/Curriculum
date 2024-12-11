<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $curriculums = Curriculum::latest()->paginate(10);
        return view('curriculums.index', ['curriculums' => $curriculums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curriculums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255', // Validación para el email
            'phone' => 'required|string|max:15', // Ajusta el tamaño según sea necesario
            'professional_profile' => 'nullable|string', // Campo opcional
            'skills' => 'nullable|string', // Campo opcional
            'work_experience' => 'nullable|string', // Campo opcional
            'education' => 'nullable|string', // Campo opcional
        ]);

        Curriculum::create($validated);
        return redirect()->route('curriculums.index')->with('success', 'Curriculum creado correctamente.');//
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculum $curriculums )
    {
        $curriculums ->delete();
        return redirect()->route('curriculums.index')->with('success', 'Curriculum eliminado correctamente.');
    }
}
