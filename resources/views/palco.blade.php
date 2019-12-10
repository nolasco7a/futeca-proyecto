@extends('layouts.template')
@section('content')

<section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('./assets/images/palco/palco12.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="bg-danger text-white font-weight-bold">FUTECA PALCO</h1>
                    <a href="{{route('contactanos')}}" type="button" class="btnbanner">CONTACTANOS<a>
                </div>
                </div>
            </div>
        </div>
    </section>

<!--<section>
    <div class="container-fluid" >
        <div class="row ">
            <div class="col-sm-12 col-lg-6 p-0 m-0">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FFutecaHonduras%2Fphotos%2Fa.594761567246709%2F2385848818137966%2F%3Ftype%3D3&width=750&show_text=false&height=400&appId" width="640" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>  
            </div>
            <div class="col-sm-12 col-lg-6 p-0 m-0">
                <img src="./assets/images/palco/palco3.jpg" style=" width:100%; height: 400px" alt="">
            </div>
        </div>
    </div>
</section> -->
<section>
    <div class="container-fluid" style="background:black">
        <div class="row">
            <div class="col-sm-12 col-lg-6 p-0 m-0">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FFutecaHonduras%2Fphotos%2Fa.594761567246709%2F2385848818137966%2F%3Ftype%3D3&width=640&show_text=false&height=450&appId" width="640" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>  
            </div>
            <div class="col-sm-12 col-lg-6 text-white">
                    <h1 class="font-weight-bold text-center py-4 ">Futeca Palco</h1>
                <p class="text-justify">Contamos con cafetería con vista panorámica de las canchas. 
                    Puedes disfrutar de desayunos como ser: baleadas, pan con frijoles, croissant, burritas. 
                    También ofrecemos: sándwiches de jamón y queso, sándwiches de pollo y pizzas.
                    Puedes acompañarlo de un refresco, agua, jugo, bebida hidratante o energizante y café de tu elección. 
                    Nuestro PALCO esta equipado con 5 pantallas para que puedas observar con tus amigos de los partidos de futbol, 
                    noticieros o cualquier programa que deseen. 
                    Para aquellos que aprovechan su tiempo les ofrecemos wifi gratis por consumo.
                    Después de jugar una buena potra puedes compartir de una cerveza bien helada.  
                    Nuestras instalaciones cuentan con seguridad y estacionamiento. 
                </p>
            </div>
        </div>
    </div>
</section>

<section>
        <div class="container-fluid bg-light ">   
            <h1 class="font-weight-bold pt-5 pb-2">Galeria Futeca Palco</h1>              
            <div class="content">
                @foreach($Galeriapalco as $item)
                @php
                $urlgaleria = $item->imagen;
                $urlgaleria = str_replace('\\', '/', $urlgaleria);
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
</section>
    
@endsection