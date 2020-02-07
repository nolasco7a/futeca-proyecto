@extends('layouts.template')
@section('content')

<section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('./assets/images/palco/palco12.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="bg-danger text-white font-weight-bold">FUTECA PALCO</h1>
                    <a href="" class="btn-futeca d-flex">
                        <div class="ml-2 mt-1">CONTÁCTANOS</div>
                        <div class="after"></div>
                        <span>></span>
                      </a>
                </div>
                </div>
            </div>
        </div>
    </section>


<section style="overflow-x:hidden">
    <div class="d-none d-lg-block">
        <div class="row our-family d-flex align-items-center">
            <div class="col-lg-6">
              <div class="text-our-family">
              <h1><span>futeca</span> PALCO</h1>
              <p class="text-justify">Contamos con cafetería con vista panorámica de las canchas. 
                  Puedes disfrutar de desayunos como baleadas, pan con frijoles, croissant, burritas; además de sándwiches de jamón y queso, sándwiches de pollo y pizzas.Puedes acompañarlo de un refresco, agua, jugo, bebida hidratante o energizante y café de tu elección. Después de jugar una buena potra puedes compartir de una cerveza bien helada.  
              </p>
              <p class="text-justify">
                  Nuestro PALCO está equipado con 5 pantallas para que puedas observar con tus amigos de los partidos de fútbol, noticieros o cualquier programa. Para aquellos que aprovechan su tiempo les ofrecemos wifi gratis por consumo.
              </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="text-our-family" >
                  <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FFutecaHonduras%2Fphotos%2Fa.594761567246709%2F2385848818137966%2F%3Ftype%3D3&width=640&show_text=false&height=450&appId" width="100%" height="450px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
          </div>
    </div>

    <div class="d-block d-lg-none">
        <div class="col-md-12 p-4" style="background: #ffe604">
            <div class="text-our-family">
            <h1 class="text-center mt-4"><span>futeca</span> PALCO</h1>
            <p class="text-justify">Contamos con cafetería con vista panorámica de las canchas. 
                Puedes disfrutar de desayunos como baleadas, pan con frijoles, croissant, burritas; además de sándwiches de jamón y queso, sándwiches de pollo y pizzas.Puedes acompañarlo de un refresco, agua, jugo, bebida hidratante o energizante y café de tu elección. Después de jugar una buena potra puedes compartir de una cerveza bien helada.  
            </p>
            <p class="text-justify">
                Nuestro PALCO está equipado con 5 pantallas para que puedas observar con tus amigos de los partidos de fútbol, noticieros o cualquier programa. Para aquellos que aprovechan su tiempo les ofrecemos wifi gratis por consumo.
            </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-our-family mt-3 d-flex justify-content-center">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FFutecaHonduras%2Fphotos%2Fa.594761567246709%2F2385848818137966%2F%3Ftype%3D3&width=640&show_text=false&height=450&appId" width="640px" height="450px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
    </div>
  </section> 
 
{{-- <section>
        <div class="container-fluid bg-light ">   
            <h1 class="font-weight-bold pt-5 pb-2">Galeria Futeca Palco</h1>              
            <div class="content">
                @foreach($Galeriacanchas as $item)
                @php
                $urlgaleria = $item->imagen;
                $urlgaleria = str_replace('\\', '/',$urlgaleria);
                @endphp 
            <a class="elem" href="{{Storage::url($urlgaleria)}}" 
                        title="" 
                        data-lcl-txt="" 
                        data-lcl-author="" 
                        data-lcl-thumb="{{Storage::url($urlgaleria)}}">
                        <span style="background-image: url({{Storage::url($urlgaleria)}});"></span>
            </a>
                @endforeach
                <br/><br/>
            </div>
        </div>
</section> --}}
    
@endsection