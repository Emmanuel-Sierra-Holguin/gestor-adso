<?php
namespace App\Http\Controllers;

use App\Models\Aprendiz;
use Illuminate\Http\Request;


class AprendizController extends Controller
{
    //Actualizamos public function index los datos reales de la base de datos.
 public function index()
 {
    $aprendices = \App\Models\Aprendiz::latest()->paginate(10);

    return view('aprendices.index',compact('aprendices'));

 }

 public function create()
 {
 return view('aprendices.create');
 }

 public function store(Request $request)
 {
 // Validación mínima (simulación de guardado)
 $data = $request->validate([
 'nombre' => ['required','string','max:120'],
 'documento' => ['required','string','max:40','unique:aprendices,documento'],
 'correo' => ['required','email','max:120','unique:aprendices,correo'],
 'ficha_id'=>['nullable','integer'],
 ]);
 // Aquí NO guardamos en BD (lo haremos en Semana 4 con Eloquent).
 // Objetivo Semana 2: comprobar flujo ruta ³ acción ³ vista ³ redirect.
 Aprendiz::create($data);

return redirect()->route('aprendices.index')->with('ok','aprendiz creado');
 }

 public function show(Aprendiz $aprendiz) { abort(404); } 

 public function edit(Aprendiz $aprendiz) { abort(404); } 

 public function update(Request $r, Aprendiz $aprendiz) { abort(404); }

 public function destroy(Aprendiz $aprendiz) { abort(404); }
}