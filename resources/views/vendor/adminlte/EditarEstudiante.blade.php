@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
  <div class="container-fluid spark-screen">
    <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">EDITAR ESTUDIANTE</h3>
            </div>
             <form role="form" action="{{url('updateEstudiante',[$datos->id])}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

              <div class="box-body">
                <div class="form-group">
                     <label>nombre</label>
                     <input value="{{$datos->nombre}}" name="nombre" type="text" class="form-control" >
                </div>

                <div class="form-group">
                     <label>apellido</label>
                     <input value="{{$datos->apellido}}" name="apellido" type="text" class="form-control" >
                </div>

                <div class="form-group">
                     <label>cedula</label>
                     <input value="{{$datos->cedula}}" name="cedula" type="text" class="form-control" >
                </div>

                <div class="form-group">
                     <label>sexo</label>
                     <input value="{{$datos->sexo}}" name="sexo" type="text" class="form-control" >
                </div>

                <div class="form-group">
                                    <label>ESTUDIANTES</label>
                                    <select class="combobox form-control" name="tipo">
                                        @foreach($dat as $item)
                                        @if($item->id == $datos->tipo_id)
                                        <option value="{{$datos->tipo_id}}" selected="selected">{{$item->semestre}}, {{$item->paralelo}} </option>
                                        @endif
                                        @endforeach
                                        @foreach($dat as $item)
                                        @if($item->id != $datos->tipo_id) 
                                        <option value="{{$item->id}}">{{$item->semestre}}, {{$item->paralelo}}</option>
                                         @endif
                                        @endforeach
                                    </select>
                                </div>

       
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
              </div>
            </form>
            <!-- /.box-body -->
    </div>
  </div>
@endsection