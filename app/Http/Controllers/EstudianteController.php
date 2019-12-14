<?php

namespace App\Http\Controllers;

use App\estudiante;
use App\semestre;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    
     public function index(){
        $datos1=semestre::all();
        $consultar=estudiante::all();
        return view('adminlte::estudiante',compact('datos1', $datos1))->with('datos',$consultar);
    }

   

     public function guardar_car(Request $request){
        //dd($request);
        //return $request;
        $car= new estudiante();
        $car->nombre=$request->nombre;
        $car->apellido=$request->apellido;
        $car->cedula=$request->cedula;
        $car->sexo=$request->sexo;
        $car->tipo_id=$request->post("tipo_id");
        $car->save();
        return redirect()->action('EstudianteController@index');    
    }

    public function dele($id){
        $tipo=estudiante::find($id);
        $tipo->delete();
        return redirect()->action('EstudianteController@index');
    }
    public function editar($id){
        $consultar=estudiante::find($id);
        $dat = semestre::all();
         return view('adminlte::EditarEstudiante', compact('dat', $dat))->with('datos',$consultar);
    }
    public function update(Request $request, $id){
        
        $consultar=estudiante::find($id);
        $consultar->nombre=$request->nombre;
        $consultar->apellido=$request->apellido;
        $consultar->cedula=$request->cedula;
        $consultar->sexo=$request->sexo;
        $consultar->tipo_id=$request->post("tipo");
        $consultar->save();
        return redirect()->action('EstudianteController@index');
    }
}
