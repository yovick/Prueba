@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">INGRESE SEMESTRES</h3>
            </div>
             <form role="form" action="{{url('guardarSemestre')}}" method="post">
             	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label>Semestre</label>
                  <input type="text" class="form-control" placeholder="Ingrese el semestre" name="semestre">

                  <label>Paralelo</label>
                  <input type="text" class="form-control" placeholder="Ingrese el Paralelo" name="paralelo">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
              </div>
            </form>
            <!-- /.box-body -->
    </div>
     <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">SEMESTRES</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>semestre</th>
                  <th>paralelo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($datos as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->semestre}}</td>
                          <td>{{$item->paralelo}}</td>
                          <td><a class="btn btn-primary" href="{{url('eliminarSemestre',[$item->id])}}">Eliminar</a><a class="btn btn-primary" href="{{url('editarSemestre',[$item->id])}}">Editar</a></td>
                       </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>semestre</th>
                  <th>paralelo</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
    </div>
	</div>
@endsection

            