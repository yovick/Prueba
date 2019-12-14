<?php

namespace App\Http\Controllers;

use App\semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function index(){
        $datos=semestre::all();
        return view('adminlte::semestre', compact('datos'));
    }
    public function guardar(Request $request){
        $tipo= new semestre();
        $tipo->semestre=$request->semestre;
        $tipo->paralelo=$request->paralelo;
        $tipo->save();
        return redirect()->action('SemestreController@index');
        
    }
 

    public function dele($id){
        $tipo=semestre::find($id);
        $tipo->delete();
        return redirect()->action('SemestreController@index');
    }
    
    public function editar($id){
        $tipos=semestre::find($id);
    
        return view('adminlte::EditarSemestre', compact('tipos'));
    }
    public function update(Request $request, $id){
        
        $tipos=semestre::find($id);
        $tipos->semestre=$request->semestre;
        $tipos->paralelo=$request->paralelo;
        $tipos->save();
        return redirect()->action('SemestreController@index');
    }

}
