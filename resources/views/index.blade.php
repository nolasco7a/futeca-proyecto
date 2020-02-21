@extends('layouts.template')
@section('content')
{{--CONTÁCTANOS--}}


<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./assets/images/index/cancha.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
            <a href="" class="btn-futeca d-flex">
              <div class="ml-2 mt-1">CONTÁCTANOS</div>
              <div class="after"></div>
              <span>></span>
            </a>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('./assets/images/index/banner2.jpg')">
          <div class="carousel-caption d-none d-md-block">
          <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
            <a href="" class="btn-futeca d-flex">
              <div class="ml-2 mt-1">CONTÁCTANOS</div>
              <div class="after"></div>
              <span>></span>
            </a>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('./assets/images/index/banner3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
            <a href="" class="btn-futeca d-flex">
              <div class="ml-2 mt-1">CONTÁCTANOS</div>
              <div class="after"></div>
              <span>></span>
            </a>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('./assets/images/index/banner4.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
            <a href="" class="btn-futeca d-flex">
              <div class="ml-2 mt-1">CONTÁCTANOS</div>
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
{{--<section style="overflow-x: hidden">
  <div class="row our-family d-flex align-items-center">
    <div class="col-lg-6">
      <div class="text-our-family">
      <h1><span>NUESTRA</span> FAMILIA</h1>
      <p class="">Academia dedicada al desarrollo del fútbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. Ofrecemos exclusivamente el desarrollo y formación de habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores.</p>
      <p class="text-justify">Basándonos en rescatar el tiempo libre de niños y niñas contamos con instalaciones adecuadas y seguras para la práctica del fútbol, ofrecemos la enseñanza especializada de profesionales en la materia.</p> 
      <a href="" class="btn-futeca d-flex">
        <div class="ml-2 mt-1">VER MÁS</div>
        <div class="after"></div>
        <span>></span>
      </a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="text-our-family" >
        <h3 class="text-center text-white pb-2 {{-- mr-4 --}}{{--">ENTRENADORES</h3>
        <div class="owl-carousel owl-theme" id="staff">
          @foreach ($Staff as $item)
              <div class="row">
                <div class="name-staff d-flex align-items-end col-12 col-sm-4 col-md-4 col-lg-4">
                <h2>{{$item->nombre}}</h2>
                </div>
                <div class="image-staff  d-flex align-items-end col-12 col-sm-4 col-md-4 col-lg-4">
                <img src="{{Storage::url($item->fotoperfil)}}" alt="">
                </div>
                <div class="description-staff text-white  d-flex align-items-end col-12 col-sm-4 col-md-4 col-lg-4">
                <p class="pb-0 mb-0">{{$item->cargo}} <br> <br> {{$item->experiencia}}</p>
                </div>
              </div>
          @endforeach
      </div>
      </div>
    </div>
  </div>
</section>--}}

<section>
  <div class="contenedor1 d-none d-lg-block">
    <div class="contenido1 ">
      <div class="row2 our-fanmily d-flex align-items-center">
        <div class="col-lg-6">
        <div class="text-our-family">
          <h1><span>FUTECA</span>HONDURAS</h1>
          <p class="">Futeca, franquicia centro americana que nace en Guatemala en el año 1998 como una pequeña academia. Orgullosamente podemos decir hoy que Futeca es la organización deportiva privada más grande de Centroamérica. En Honduras, nace como entidad deportiva en el año 2011, interesado en el desarrollo de nuestros niños y del fútbol.</p>
          <p class="text-justify">Basándonos en rescatar el tiempo libre de niños y niñas contamos con instalaciones adecuadas y seguras para la práctica del fútbol, ofrecemos la enseñanza especializada de profesionales en la materia.</p> 
          <a href="" class="btn-futeca d-flex">
            <div class="ml-2 mt-1">VER MÁS</div>
            <div class="after"></div>
            <span>></span>
          </a>
          </div>
      </div>

      <div class="col-lg-6" style="margin-left: 89px;">
        <div class="text-our-family" >
          <!--<h3 class="text-center text-white pb-2 {{-- mr-4 --}}">ENTRENADORES</h3>--->
          <div class="owl-carousel owl-theme staff" id="">
             <div class="mision">
              <h1 class="text-center text-white pb-2">MISIÓN</h1>
              <p class="text-justify text-white">
                Somos una empresa hondureña visionaria y con altos valores empresariales, dedicada al desarrollo y práctica del futbol,
                 que trabaja por brindar auténticas experiencias deportivas, al ofrecer las mejores instalaciones deportivas y excelente 
                 organización para hombres y mujeres en todas las edades que viven la pasión del futbol. 
              </p>
             </div>
             <div class="vision">
              <h1 class="text-center text-white pb-2">VISIÓN</h1>
              <p class="text-justify text-white" >
                Ser la empresa dedicada al desarrollo del futbol y con la mayor cobertura, contribuyendo a la construcción de una sociedad 
                más sana y la formación de nuevas generaciones por medio del deporte.
              </p>
             </div>
        </div>
        </div>
      </div>
      </div>
    </div>    
    <div class="contenido2">
  </div>
</div>
  
<div class="d-lg-none d-block" style="background:#ffe604">
  <div class="container">
    <div class="col-12">
      <div class="text-our-family">
        <h1 class="text-center"><span style="color: #df5151;"> NUESTRA </span>FAMILIA</h1>
        <p class="">Academia dedicada al desarrollo del fútbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. Ofrecemos exclusivamente el desarrollo y formación de habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores.</p>
        <p class="text-justify">Basándonos en rescatar el tiempo libre de niños y niñas contamos con instalaciones adecuadas y seguras para la práctica del fútbol, ofrecemos la enseñanza especializada de profesionales en la materia.</p> 
        <a href="" class="btn-futeca d-flex">
          <div class="ml-2 mt-1">VER MÁS</div>
          <div class="after"></div>
          <span>></span>
        </a>
        </div>
    </div>
    <div class="col-12">
      <div class="mt-4 pt-4" >
        <div class="owl-carousel owl-theme staff" id="">
          <div class="mision">
           <h1 class="text-center text-black pb-2">MISIÓN</h1>
           <p class="text-justify text-black">
             Somos una empresa hondureña visionaria y con altos valores empresariales, dedicada al desarrollo y práctica del futbol,
              que trabaja por brindar auténticas experiencias deportivas, al ofrecer las mejores instalaciones deportivas y excelente 
              organización para hombres y mujeres en todas las edades que viven la pasión del futbol. 
           </p>
          </div>
          <div class="vision">
           <h1 class="text-center text-black pb-2">VISIÓN</h1>
           <p class="text-justify text-black" >
             Ser la empresa dedicada al desarrollo del futbol y con la mayor cobertura, contribuyendo a la construcción de una sociedad 
             más sana y la formación de nuevas generaciones por medio del deporte.
           </p>
          </div>
     </div>
        
      </div>
    </div>
</div>
</div>
</section>
{{-- Sección Torneos Corporaativos--}}
<section >
  <div class="container ">
    <h1 class="pt-5 text-center" ><span class="h1-span">Torneos</span> Corporativos</h1>
  </div>


{{-- Seccion de patrocinadores --}}
<section >
  <div class="container ">
    <h1 class="pt-5 text-center" ><span class="h1-span">Nuestros</span> Patrocinadores</h1>
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
  <h1 class="text-center"><span class="h1-span">ÚLTIMAS</span> NOTICIAS</h1>
  <div class="container">
    <p>Conoce más de la participación de futeca, visita nuestro <a href="{{route('blog')}}">BLOG</a></p>
    <div class="row py-3">
        @foreach ($noticias as $noticia)
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="card p-3 card-shadow">
            <img src="{{Storage::url($noticia->imagen)}}" class="card-img-top" alt="...">
              <div class="card-body p-0">
                @php
                    $fecha=date_format($noticia->created_at, 'd-m-y');
                @endphp
              <h2 class="card-date">{{$fecha}}</h2>
              <h5 class="card-title p-1 text-center text-bold">{{$noticia->titulo}}</h5>
                <div class="separator-title"></div>
                @php
                    $descripcion = $noticia->descripcion;
                    $descripcion = substr($descripcion, 0, 80);
                @endphp
              <p class="card-text">{{$descripcion}}...</p>
              <a href="" class="btn-futeca-2 d-flex" data-toggle="modal" data-target="#Modal{{$noticia->id}}">
                <div class="ml-2 mt-1">VER MÁS</div>
                <div class="after"></div>
                <span>></span>
              </a>
              </div>
            </div>
          </div>
        @endforeach
        @foreach ($noticias as $noticia)
        <div class="modal fade" id="Modal{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel{{$noticia->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel{{$noticia->id}}">{{$noticia->titulo}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p>{{$noticia->descripcion}}</p>
                    </div>
                    <div class="modal-footer">
                      {{-- <a href="" class="btn-futeca-2 d-flex" data-dismiss="modal">
                        <div class="ml-2 mt-1">CERRAR</div>
                        <div class="after"></div>
                        <span>></span>
                      </a> --}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
    </div>
</div>
</section>

 @endsection