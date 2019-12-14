@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
  <div class="container-fluid spark-screen">
    <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">EDITAR SEMESTRES</h3>
            </div>
             <form role="form" action="{{url('updateSemestre',[$tipos->id])}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="box-body">
                
                <div class="form-group">
                  <label>Semestre</label>
                  <input type="text" class="form-control" placeholder="Ingrese el Semestre" value="{{$tipos->semestre}}" name="semestre">

                  <label>Paralelo</label>
                  <input type="text" class="form-control" placeholder="Ingrese el paralelo" value="{{$tipos->paralelo}}" name="paralelo">
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