<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class bookController extends Controller
{
    public function getBooks()
    {
        # code...
        return book::orderBy('id', 'DESC')->get();
    }

    // Crear un libro
    public function crearLibro(Request $request)
    {
        # code...
        $b= new book();
        $b->autor=$request->autor;
        $b->titulo=$request->titulo;
        $b->descripcion=$request->descripcion;

        $b->save();
        return response()->json(['status' => 'Libro Creado']);
    }

    // Editar Libro
    public function editarLibro(Request $request, $id)
    {
        # code...
        $b=book::findOrFail($id);
        $b->titulo=$request->titulo;
        $b->descripcion=$request->descripcion;

        $b->save();
        return $b;
    }

    public function eliminarLibro(Request $request, $id)
    {
        # code...
        $b=book::destroy($id);
         return response()->json(['status'=>'Libro Eliminado']);
    }
}
