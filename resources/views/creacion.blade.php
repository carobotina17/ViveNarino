@extends('layouts.master')
@extends('partials.navbar')
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
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
                </div>

                <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="text", name="imagen", id="imagen" class="form-control">
                </div>

                <div class="form-group">
                <label for="descripcion1">Descripción1</label>
                <textarea name="descripcion1" id="descripcion1" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                <label for="descripcion2">Descripción2</label>
                <textarea name="descripcion2" id="descripcion2" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                <label for="video">Video</label>
                <input type="text", name="video", id="video" class="form-control">
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

  
