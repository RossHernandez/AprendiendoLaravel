@extends('layouts.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos de empleado</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->nombre}}</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->puesto}}</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->email}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->edad}}</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->antiguedad}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->sueldo}}</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control">{{$empleado->moneda_sueldo}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <a href="{{ route('empleado.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
