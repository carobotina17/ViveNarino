@extends('layouts.master')
@extends('partials.navbar_admin')
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
                <label for="title">Título</label>
                <input type="text" name="title" id="title" value="{{$pelicula->title}}" class="form-control">
                </div>

                <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="poster">Poster</label>
                <input type="text", name="poster", id="poster" value="{{$pelicula->poster}}" class="form-control">
                </div>

                <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" value="{{$pelicula->synopsis}}" class="form-control" rows="3"></textarea>
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
