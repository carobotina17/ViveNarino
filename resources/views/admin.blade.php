@extends('layouts.master')
@extends('partials.navbar_admin')
@section('content')
    <link rel="stylesheet" href="{{ ('/assets/css/admin.css') }}"/>
  
    <div class="container">
        <div class="row">
            <div class="col-xl-6" >    
            <p>AÑADIR NUEVO SITIO TURÍSTICO</p>  
            <a href="{{URL::to('admin/create')}}"><img src={{asset('assets/img/anadir.png')}} alt="Añadir" class="add" ></a><br>
                    
            </div>
            <div class="col-xl-6">     
                <p>MODIFICAR SITIO TURÍSTICO</p>  
                <a href="{{URL::to('admin/create{id}')}}"><img src={{asset('assets/img/editar.png')}} alt="Editar" class="modify"></a><br>
                   
            </div>
        </div>
        
    </div>
    <a href="{{URL::to('catalogo')}}"><img src={{asset('assets/img/ver-catalogo.png')}} alt="Catalogo" class="imagen"></a><br>
@stop