@extends('layouts.master')
@extends('partials.navbar_admin')
@section('content')
    <link rel="stylesheet" href="{{ ('/assets/css/admin.css') }}"/>
  
    <div class="container">
        <div class="row">
            <div class="col-xl-6">    
                <a href="{{URL::to('/')}}"><img src={{asset('assets/img/anadir.png')}} alt="Añadir" ></a><br>
                <p>AÑADIR NUEVO SITIO TURÍSTICO</p>      
            </div>
            <div class="col-xl-6">     
                <a href="{{URL::to('/')}}"><img src={{asset('assets/img/editar.png')}} alt="Editar"></a><br>
                <p>MODIFICAR SITIO TURÍSTICO</p>     
            </div>
        </div>
    </div>
@stop