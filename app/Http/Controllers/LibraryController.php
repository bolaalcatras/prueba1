<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index (){

        $libraryDatos = Library::all();
        return view('crudLibrary.index' , compact('libraryDatos'));
    }

    public function show ($libraryDatos){

        $libraryDatos = Library::find($libraryDatos);

        return view('crudLibrary.show' , compact('libraryDatos'));
    }
    
    public function create (){

        return view('crudLibrary.create');
    }

    public function store (Request $request){

        $newlibraryDatos = new Library();

        $newlibraryDatos->nombre=$request->nombre;
        $newlibraryDatos->ubicacion=$request->ubicacion;
        $newlibraryDatos->descripcion=$request->descripcion;
        $newlibraryDatos->save();

        return "libraryDatos enviados con exito";
        return view('crudLibrary.create');


    }

    public function edit ($libraryDatos){

        $libraryDatos = Library::find($libraryDatos);
        return view('crudLibrary.edit', compact('libraryDatos'));
    }

    public function update (Request $request, $libraryDatos){


        $libraryDatos = Library::find($libraryDatos);

        $libraryDatos->nombre=$request->nombre;
        $libraryDatos->ubicacion=$request->ubicacion;
        $libraryDatos->descripcion=$request->descripcion;
        $libraryDatos->direccion=$request->direccion;
        $libraryDatos->save();

        return redirect(route('crudLibrary.show', $libraryDatos->id));
    }

    public function destroy ($libraryDatos){

        $libraryDatos = Library::find($libraryDatos);
        $libraryDatos->delete();

        
    }
}
