@extends('layouts.template')
@section('content')

<style>
      .row2 {
        margin-top: 4%;
    margin-left: 47%;
    width: 96%;
    text-align: justify;
    -webkit-transform: skew(16deg);
    transform: skew(18deg);
}
.dos{
    transform: skewX(-18deg) translateX(-45%);
}


.tres{
    background-image: url('../assets/images/torneos/torneoficohsa.jpg');
    background-position: 5px -150px;
}
    </style>
<section class="banner">
  <div class="principal-banner d-flex justify-content-center align-items-center">
      <img src="./assets/images/torneos/torneosbanner.jpg" alt="">
      <div class="overlay"></div>
      <h1>Futeca Torneos</h1>
  </div>
</section>



{{--<section style="overflow-x:hidden">
    <div class="row our-family d-flex align-items-center">
      <div class="col-lg-6">
        <div class="text-our-family">
        <h1><span>TORNEOS</span> EMPRESARIALES</h1>
        <p class="text-justify">
            Futeca también es reconocido como el único en organizar, calendarizar y llevar el control estadístico de campeonatos. Nuestros torneos ofrecen: congresillo técnico, ceremonia de inauguración, calendario de juegos, árbitros, delegados, control de estadísticas, tabla de posiciones, medallas, trofeos y ceremonia de clausura. Nos adaptamos a tus necesidades y presupuesto.
            <br>
            <br>
             Nuestra cartera de clientes esta conformado por: 
            Banco Ficohsa, Inversiones La Paz, INTUR, UNICOMER, Super Liga Claro, Empresarial Femenino FUT5, Empresarial masculino FUT7, Corporación Flores, Sagrada Familia, entre otros. 
        </p> 
        </div>
      </div>
      <div class="col-lg-6">
        <div class="text-our-family" >
            <img src="./assets/images/torneos/torneoficohsa.jpg " style="object-fit:cover; width:100%;  height:375px;" alt="">        </div>
      </div>
    </div>
  </section>--}}

  <section style="margin-bottom: -72px; ">

    <div class="uno d-none d-lg-block">
      <div class="dos">
        <div class="row2 our-fanmily d-flex align-items-center">
          <div class="col-lg-6">
          <div class="text-our-family" style="margin-top: 28px;">
            <h1><span>TORNEOS</span>EMPRESARIALES</h1>
            <p class="text-justify">
                Futeca también es reconocido como el único en organizar, calendarizar y llevar el control estadístico de campeonatos. Nuestros torneos ofrecen: congresillo técnico, ceremonia de inauguración, calendario de juegos, árbitros, delegados, control de estadísticas, tabla de posiciones, medallas, trofeos y ceremonia de clausura. Nos adaptamos a tus necesidades y presupuesto.
                <br>
                <br>
                 Nuestra cartera de clientes esta conformado por: 
                Banco Ficohsa, Inversiones La Paz, INTUR, UNICOMER, Super Liga Claro, Empresarial Femenino FUT5, Empresarial masculino FUT7, Corporación Flores, Sagrada Familia, entre otros. 
            </p> 
        
        </div>
      </div>
      </div>
      </div>
      <div class="tres"></div>
    </div>
  
    <div class="containr-fluid d-block d-lg-none" style="background:#ffe604">
      <div class="container">
        <div class="text-our-family">
          <h1><span style="color: #df5151;"> TORNEOS </span>EMPRESARIALES</h1>
          <p class="">Academia dedicada al desarrollo del fútbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. Ofrecemos exclusivamente el desarrollo y formación de habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores.</p>
          <p class="text-justify">
            Futeca también es reconocido como el único en organizar, calendarizar y llevar el control estadístico de campeonatos. Nuestros torneos ofrecen: congresillo técnico, ceremonia de inauguración, calendario de juegos, árbitros, delegados, control de estadísticas, tabla de posiciones, medallas, trofeos y ceremonia de clausura. Nos adaptamos a tus necesidades y presupuesto.
            <br>
            <br>
             Nuestra cartera de clientes esta conformado por: 
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