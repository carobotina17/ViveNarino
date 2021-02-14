@extends('layouts.master')
@extends('partials.navbar_admin')
@section('content')
    <link rel="stylesheet" href="{{ ('/assets/css/admin.css') }}"/>
    <div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Añadir Nuevo Sitio Turístico
            </div>
            <div class="card-body" style="padding:30px">

                <form method="POST">
                {{-- TODO: Abrir el formulario e indicar el método POST --}}

                {{-- TODO: Protección contra CSRF --}}

                {{ csrf_field() }}

                <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text", name="poster", id="poster" class="form-control">
                </div>

                <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Añadir 
                </button>
                </div>

                {{-- TODO: Cerrar formulario --}}

                </form>
            </div>
        </div>
    </div>
</div>

  
