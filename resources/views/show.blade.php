@extends('layouts.master')
@extends('partials.navbar')
@section('content')
<link rel="stylesheet" href="{{ ('/assets/css/show.css') }}"/>
<div class="container">
    <div class="row">
    <div class="col-md-4" > 
    <h1><strong> {{$sitios->titulo}}</h1></strong>
    <img src="{{$sitios->imagen}}", alt="Imagen Sitio", width="380" height="380">;
    </div>
    <div class="col-md-8" >
    <div class="row">
        <div class="col-md-10">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Conoce más de este maravilloso lugar
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>{{$sitios->descripcion2}}</p>
                        </div>
                    </div>
                </div>
 
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Video informativo
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <iframe width="560" height="315" src="{{$sitios->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
@stop