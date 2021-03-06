@extends('layouts.dash')

@section('content')
<div class="col-md-12">
{{--Inicio Mensaje Confirmar--}}
@include('Wennec.alerts.errors')
{{--Fin Mensaje Confirmar--}}

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15-datatable">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Usuarios Wennec</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            {!! Form::open(['route'=>'usuarios.store','method'=>'POST']) !!}
                                                    
                            <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group form-md-line-input">                                 
                                            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group form-md-line-input">                                 
                                            {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group form-md-line-input">                                 
                                                {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required'])!!}
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group form-md-line-input">                                 
                                            {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
                                        </div>
                                    </div>
                                </div>            
                                <div class="form-group form-md-line-input">                                 
                                        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required'])!!}
                                </div> 
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group form-md-line-input">                                 
                                            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','required'])!!}
                                        </div> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group form-md-line-input">                                 
                                            {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña'])!!}
                                        </div>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label>Rol</label>
                                                <select class="form-control" name="FK_RolesId" id="" required="">
                                                    @foreach($roles as $rol)
                                                        <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                                                    @endforeach
                                                </select>                
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <label>Dependencia</label>
                                            <select class="form-control" name="FK_DepartamentoId" id="" >
                                                <option value="">Seleccionar</option>
                                                @foreach($users as $departamento)
                                                    <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                                                @endforeach
                                            </select>                
                                        </div>
                                    </div>
                                </div>
                                {!! Form::submit('Crear Usuario', ['class'=>'btn btn-large btn-primary']) !!}
                                {{link_to_route('usuarios.index', $title = 'Cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
                                </div>                        
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Static Table End -->
</div>
@endsection
