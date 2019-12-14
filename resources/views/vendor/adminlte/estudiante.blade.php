@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
	<div class="box box-danger">

        <div class="box-header">
        <h3 class="box-title">INGRESE ESTUDIANTES</h3>
        </div>

          <form role="form" action="{{url('GuardarEstudiante')}}" method="post">
             	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="box-body">

                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" placeholder="Ingrese nombre" name="nombre">
                      <label>Apellido</label>
                       <input type="text" class="form-control" placeholder="Ingrese apellido" name="apellido">
                       <label>Cedula</label>
                        <input type="text" class="form-control" placeholder="Ingrese cedula " name="cedula">
                        <label>Sexo</label>
                        <input type="text" class="form-control" placeholder="Ingrese sexo " name="sexo">
                    </div>

                     <div class="form-group"> 
                          <label>Semestre</label>
                        <select class="combobox form-control" name="tipo_id">
                          <option value="" selected="selected">Seleccionar....</option>
                          @foreach($datos1 as $carss)
                                <option  value="{{$carss->id}}">{{$carss->semestre}}, {{$carss->paralelo}}</option>        
                          @endforeach
                        </select>
                      </div>

                      


                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                      </div>
                </div>
          </form>
              <br>

          <!-- /.TABLA PARA MOSTRAR LOS DATOS INGRESADOS-->

        <div class="box">

          <div class="box-header">
            <h3 class="box-title">LISTA DE ESTUDIANTES</h3>
          </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>cedula</th>
                    <th>sexo</th>
                    <th>semestre</th>
                    <th>paralelo</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                <tbody id="datos1">
                      @foreach($datos as $item) 
                          <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellido}}</td>
                            <td>{{$item->cedula}}</td>
                            <td>{{$item->sexo}}</td>
                                @foreach($datos1 as $item1)
                                    @if($item->tipo_id == $item1->id)
                                      <td>{{$item1->semestre}}</td>
                                      <td>{{$item1->paralelo}}</td>
                                    @endif
                                @endforeach
                            <td><a class="btn btn-primary" href="{{url('eliminarEstudiante',[$item->id])}}">Eliminar</a>
                            <a class="btn btn-primary" href="{{url('editarEstudiante',[$item->id])}}">Editar</a></td>            
                          </tr>
                      @endforeach
                </tbody>

                <tfoot>
                  <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>cedula</th>
                    <th>sexo</th>
                    <th>semestre</th>
                    <th>paralelo</th>
                    <th>Acciones</th>
                  </tr>
                </tfoot>

              </table>
            </div>
        </div>
  </div>
</div>
@endsection
