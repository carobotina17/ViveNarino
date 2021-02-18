@extends('layouts.master')
@section('content')
        <link rel="stylesheet" href="{{ ('/assets/css/bienvenida.css') }}"/>
        <!--Carousel Wrapper-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="navbar container navigation-clean-search"><a class="navbar-brand" href="#">Vive Nariño</a>
                      <a class="btn btn-light action-button" role="button" href="{{url('catalogo')}}">Conócelos</a>
                       <a class="btn btn-light action-button" role="button" href="{{url('admin')}}">Administrar</a>
                       
                </div>
          </nav>
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
          
        
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
          </ol>
          
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="view">
                <img class="d-block w-100" src="https://www.turismopasto.com/wp-content/uploads/2018/03/la-union-narino-turismo-cafe-especial-colombia.jpg"
                  alt="First slide" >
                <div class="mask rgba-black-light"></div>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">PAISAJES MARAVILLOSOS</h3>
                <p>Nariño Tapiz de retazos</p>
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Santuario_Nacional_de_Las_Lajas_04.jpg/1200px-Santuario_Nacional_de_Las_Lajas_04.jpg"
                  alt="Second slide">
                <div class="mask rgba-black-strong"></div>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">UNA DE LAS 7 MARAVILLAS DE COLOMBIA</h3>
                <p>Santuario de la Virgen de las Lajas - Ipiales</p>
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="https://www.turismopasto.com/wp-content/uploads/2018/04/laguna-cocha-lanchas-turismo-pasto.jpg"
                  alt="Third slide">
                <div class="mask rgba-black-slight"></div>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">EMBALSE NATURAL DE ORIGEN GLACIAL</h3>
                <p>Laguna de la Cocha - Corregimiento del Encano</p>
              </div>
            </div>
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
        </div>
@stop