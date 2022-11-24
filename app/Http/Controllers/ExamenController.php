<?php

namespace App\Http\Controllers;

use App\Models\examen;
use App\Models\carrera;
use App\Models\campu;
use App\Models\paises;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['students'] = Examen::paginate(5);
        return view('examen.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carreras = carrera::all(); 
        $campus = campu::all(); 
        $paises = paises::all(); 
        return view('examen.create', compact('carreras','campus','paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataStudent = request()->except('_token');
        Examen::insert($dataStudent);
        // return response()->json($dataStudent);
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Examen::findOrFail($id);
        $carreras = carrera::all(); 
        $campus = campu::all(); 
        $paises = paises::all(); 

        return view('examen.edit', compact('student','carreras','campus','paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //
        $dataStudent = request()->except('_token','_method');
        Examen::where('id','=',$id)->update($dataStudent);

        $student = Examen::findOrFail($id);

        // return view('examen.edit', compact('student'));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Examen::destroy($id);
        return redirect('students');
    }
}
