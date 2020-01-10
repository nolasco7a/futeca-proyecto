@extends('layouts.template')
@section('content')
{{--Contactanos--}}

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./assets/images/index/banner1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
            <a href="" class="btn-futeca d-flex">
              <div class="ml-2 mt-1">CONTACTANOS</div>
              <div class="after"></div>
              <span>></span>
            </a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</section>
<section>
  <div class="row our-family d-flex align-items-center">
    <div class="col-lg-6">
      <div class="text-our-family">
      <h1><span>NUESTRA</span> FAMILIA</h1>
      <p class="">Academia de Futbol Futeca dedicada al desarrollo del futbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. Ofrecemos exclusivamente el desarrollo y formación de: habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores.</p>
        
      <p class="text-justify">Basándonos en rescatar el tiempo libre de niños y niñas Contamos con instalaciones adecuadas y seguras para la práctica del futbol, ofrecemos la enseñanza especializada de profesionales en la materia.</p> 
      <a href="" class="btn-futeca d-flex">
        <div class="ml-2 mt-1">VER MÁS</div>
        <div class="after"></div>
        <span>></span>
      </a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="text-our-family" >
        <h3 class="text-center text-white pb-2 mr-4">ENTRENADORES</h3>
        <div class="owl-carousel owl-theme" id="staff">
          @foreach ($Staff as $item)
              <div class="row">
                <div class="name-staff d-flex align-items-end col-3">
                <h2>{{$item->nombre}}</h2>
                </div>
                <div class="image-staff col-5 d-flex align-items-end col-3">
                <img src="{{Storage::url($item->fotoperfil)}}" alt="">
                </div>
                <div class="description-staff text-white col-4 d-flex align-items-end col-3">
                <p class="pb-0 mb-0">{{$item->cargo}} <br> <br> {{$item->experiencia}}</p>
                </div>
              </div>
          @endforeach
      </div>
      </div>
    </div>
  </div>
</section>

{{-- Seccion de patrocinadores --}}
<section >
  <div class="container ">
    <h1 class="pt-5 text-center" ><span style="color: tomato">Nuestros</span> Patrocinadores</h1>
    <div class="owl-carousel owl-theme py-5" id="marcas">
        @foreach($Patrocinadores as $item2)
      <div class="item" >
          <img src="{{Storage::url($item2->logo)}} "style="" alt="" srcset=""></div>
        @endforeach
      </div>
  </div>
</section>

{{-- Seccion de ultimas noticias --}}
<section>
  <h1 class="text-center"><span style="color:tomato">ÚLTIMAS</span> NOTICIAS</h1>
</section>

 @endsection