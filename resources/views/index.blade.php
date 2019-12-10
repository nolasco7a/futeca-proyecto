@extends('layouts.template')
@section('content')
{{--Contactanos--}}

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./assets/images/index/banner1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
            <a href="{{route('contactanos')}}" type="button" class="btnbanner">CONTACTANOS</a>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./assets/images/academia/academiabanner.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">FUTECA ACADEMIA</h1>
            <a href="{{route('contactanos')}}" type="button" class="btnbanner">CONTACTANOS</a>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./assets/images/palco/palco12.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">FUTECA PALCO</h1>
            <button href="{{route('contactanos')}}" type="button" class="btnbanner">CONTACTANOS</button>
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


<section class="">
  <div class="container-fluid  " style=""> 
    <div class="row">
      <div class="col-sm-12 col-lg-7 pt-5">
        <h1 class="font-weight-bold pb-4" style="">Nuestra Familia</h1>
        <p class="text-justify">Academia de Futbol Futeca dedicada al desarrollo del futbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. 
          Ofrecemos exclusivamente el desarrollo y formación de: habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores. Basándonos en rescatar el tiempo libre de niños y niñas. Contamos con instalaciones adecuadas y seguras para la práctica del futbol, 
          ofrecemos la enseñanza especializada de profesionales en la materia. </p>

      </div>
      <div class="col-sm-12 col-lg-5 p-0 ">
        <img src="./assets/images/index/familia.jpg" style="object-fit:cover; width:100%; height:475px" alt="">

      </div>

    </div>
  </div>
</section>

<section> 
  <div class="container-fluid" style="background:black">
      <div class="row text-white">
          <div class="col-sm-12 col-lg-6 p-0 ">
              <img src="./assets/images/index/Historia.jpg" class="" style="object-fit:cover; width:100%; height:425px">  
           </div>   
           <div class="col-sm-12 col-lg-6 pt-5 text-justify align-self-center"> 
              <h1 class="font-weight-bold">Historia</h1>
              <p> Futeca, franquicia centro americana que nace en Guatemala en el año 1998 como una pequeña academia. 
                  Orgullosamente podemos decir hoy que Futeca es la organización deportiva privada más grande de Centroamérica. En Honduras, 
                  nace como entidad deportiva en el año 2011, interesado en el desarrollo de nuestros niños y del fútbol.</p>
          </div>
      </div>
  </div>
</section>

<section>
  <div class="container-fluid bg-light text-dark"> 
      <div class="row">
          <div class="col-sm-12 col-lg-6 p-0 ">
              <img src="./assets/images/index/mision.jpg" class="" style="object-fit:cover; width:100%; height:475px">
          </div>
  
          <div class="col-sm-12 col-lg-6 pt-5"> 
              <div class="col-12 col-sm-12 ">
              <h1 class="font-weight-bold">Misión</h1>
              <p class="text-justify">Ser la empresa dedicada al desarrollo del futbol y con la mayor cobertura, 
                  contribuyendo a la construcción de una sociedad más sana y la formación de nuevas generaciones por medio del deporte.</p>
              </div>
              <div class="col-12 col-sm-12 pt-3"> 
              <h1 class="font-weight-bold">Visión</h1>
              <p class="text-justify">Somos una empresa hondureña visionaria y con altos valores empresariales, dedicada al desarrollo y práctica del futbol, que trabaja por brindar auténticas experiencias deportivas, 
                  al ofrecer las mejores instalaciones deportivas y excelente organización para hombres y mujeres en todas las edades que viven la pasión del futbol. </p>
              </div>
          </div> 
      </div>
    </div>
</section>

<section class="" style="background-image: url(./assets/images/index/cuerpotecnico.jpeg); position absolute;  
                        -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
                        background-size: cover;">
  <div class="container py-5" style="position: relative" >
      <h1 class="font-weight-bold pb-5">Cuerpo Tecnico</h1>
      <div class="row ">
          @foreach($Staff as $item)
          <div class="card-container col-sm-12 col-lg-3 pb-3">
              <div class="card-flip">
                  <div class="front card text-center ">
                  <img src="{{
                    Storage::url($item->fotoperfil)}}" class="img text-center" style="object-fit:cover; max-width" alt="...">
                  <h4 class="card-title text-center font-weight-bold ">{{$item->nombre}}</h4>
                  <p class="card-text text-center font-weight-bold">{{$item->cargo}}</p>
                  </div>
                  <div class="back card px-3 py-5">
                  <h4 class="card-title text-center font-weight-bold" style="border-bottom-style: solid;">{{$item->nombre}}</h4>
                  <p class="card-text font-weight-bold">{{$item->experiencia}}</p>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
    </div>
</section>


{{-- Seccion de patrocinadores --}}
<section >
  <div class="container ">
    <h1 class="pt-5 text-center font-weight-bold">Nuestros Patrocinadores</h1>
    <div class="owl-carousel owl-theme py-5" id="marcas">
        @foreach($Patrocinadores as $item2)
      <div class="item" style="-webkit-box-shadow: 9px -4px 24px -1px rgba(0,0,0,0.65);
                                -moz-box-shadow: 9px -4px 24px -1px rgba(0,0,0,0.65);
                                box-shadow: 9px -4px 24px -1px rgba(0,0,0,0.65);">
          <img src="{{Storage::url($item2->logo)}} "style="" alt="" srcset=""></div>
        @endforeach
      </div>
  </div>
</section>

 @endsection