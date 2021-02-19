@extends('layouts.master')
@extends('partials.navbar')
    @section('content')
    <div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Modificar Sitio Turístico
            </div>
            <div class="card-body" style="padding:30px">

                <form method="POST">

                @csrf
                @method('put')
                

                <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" value="{{$sitios->titulo}}" class="form-control">
                </div>

                <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="imagen">Imagen</label>
                <input type="text", name="imagen", id="imagen" value="{{$sitios->imagen}}" class="form-control">
                </div>

                <div class="form-group">
                <label for="descripcion1">Descripción Corta</label>
                <textarea name="descripcion1" id="descripcion1"  class="form-control" rows="2">{{$sitios->descripcion1}}</textarea>
                </div>

                <div class="form-group">
                <label for="descripcion2">Descripción Larga</label>
                <textarea name="descripcion2" id="descripcion2" class="form-control" rows="5">{{$sitios->descripcion2}}</textarea>
                </div>

                <div class="form-group">
                <label for="video">Video</label>
                <input type="text" name="video" id="video" value="{{$sitios->video}}" class="form-control">
                </div>

                <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar 
                </button>
                </div>

                {{-- TODO: Cerrar formulario --}}
                </form>
            </div>
        </div>
    </div>
    </div>
    @stop
