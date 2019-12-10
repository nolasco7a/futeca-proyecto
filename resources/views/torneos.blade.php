@extends('layouts.template')
@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('./assets/images/torneos/torneosbanner.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="bg-danger text-white font-weight-bold">FUTECA TORNEOS</h1>
                <a href="{{route('contactanos')}}" type="button" class="btnbanner">CONTACTANOS</a>
            </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 col-lg-6 p-0 ">
                <img src="./assets/images/torneos/torneoficohsa.jpg " style="object-fit:cover; width:100%;  height:425px" alt="">
            </div>
            <div class="col-sm-12 col-lg-6 pt-4">
                <h1 class="pb-3 font-weight-bold">Torneos Empresariales</h1>
                <p class="text-justify">
                    Futeca también es reconocido como el único en organizar, calendarizar y llevar el control estadístico de campeonatos. 
                    Nuestros torneos ofrecen: congresillo técnico, ceremonia de inauguración, calendario de juegos, árbitros, delegados, control de estadísticas, tabla de posiciones, medallas, trofeos y ceremonia de clausura. 
                    Nos adaptamos a tus necesidades y presupuesto. Nuestra cartera de clientes esta conformado por: 
                    Banco Ficohsa, Inversiones La Paz, INTUR, UNICOMER, Super Liga Claro, Empresarial Femenino FUT5, Empresarial masculino FUT7, Corporación Flores, Sagrada Familia, entre otros. 
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h1 class="Torneos Recientes "></h1>
        <div class="row">
            <div class="col"></div>
        </div>
    </div>
</section>
    
@endsection