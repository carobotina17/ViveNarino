@extends('layouts.master')
@extends('partials.navbar')
@section('content')

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach( $sitios as $key => $sitio)
  <div class="col">
    <div class="card h-100">
      <img
        src="{{$sitio['imagen']}}"
        class="card-img-top" width="200" height="350"
      />
      <div class="card-body">
        <h5 class="card-title">"{{$sitio['titulo']}}"</h5>
        <p class="card-text">
          "{{$sitio['descripcion1']}}"
        </p>
        <a class="btn btn-primary" href="{{url('catalogo/show/'.$sitio->id)}}">Saber más...</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>

@stop