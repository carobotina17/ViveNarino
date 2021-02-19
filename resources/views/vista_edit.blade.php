@extends('layouts.master')
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
        <a class="btn btn-primary" href="{{url('admin/create/'.$sitio->id)}}">Editar</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>

@stop