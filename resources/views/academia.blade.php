@extends('layouts.template')
@section('content')


<section class="banner">
    <div class="principal-banner d-flex justify-content-center align-items-center">
        <img src="./assets/images/academia/academiabanner.jpg" alt="">
        <div class="overlay"></div>
        <h1>academia futeca</h1>
    </div>
</section>



<section>

  <div class="uno">
    <div class="dos">
      <div class="row2 our-fanmily d-flex align-items-center">
        <div class="col-lg-6">
        <div class="text-our-family">
          <h1><span> ACADEMIA</span>FUTECA</h1>
          <p class="">Academia dedicada al desarrollo del fútbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. Ofrecemos exclusivamente el desarrollo y formación de habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores.</p>
        <p class="text-justify">Somos un centro especializado en la enseñanza del fútbol para niños y niñas en edades de 3 a 18 años. 
            Aquí aprenden las diferentes tácticas y estrategias de este deporte: Técnica, disciplina y el fundamento de trabajar en equipo. Participan en torneos locales, nacionales, regionales e internacionales. 
            Asimismo, se realizan viajes al interior del país para jugar partidos amistosos y al mismo tiempo conocer Honduras. Los alumnos son clasificados de acuerdo con su año de nacimiento en categorías, 
            desde la U-4 hasta la U-18. Contamos con horario semanal y horario sabatino.   
        </p> 
        <a href="{{route('contactanos')}}" class="btn-futeca d-flex">
          <div class="ml-2 mt-1">INSCRÍBETE</div>
          <div class="after"></div>
          <span>></span>
      </a>   
      </div>
    </div>
    </div>
    </div>
    <div class="tres"></div>
  </div>
  
</section>


{{--<section style="overflow-x: hidden">
    <div class="row our-family d-flex align-items-center">
      <div class="col-lg-6">
        <div class="text-our-family">
        <h1><span>academia</span>futeca</h1>
        <p class="">Academia dedicada al desarrollo del fútbol, tanto formativo, recreativo y competitivo en diferentes segmentos de la sociedad. Ofrecemos exclusivamente el desarrollo y formación de habilidades motrices básicas, cualidades físicas especiales, fundamentos técnicos y tácticos, habilidades cognitivas y valores.</p>
          
        <p class="text-justify">Somos un centro especializado en la enseñanza del fútbol para niños y niñas en edades de 3 a 18 años. 
            Aquí aprenden las diferentes tácticas y estrategias de este deporte: Técnica, disciplina y el fundamento de trabajar en equipo. Participan en torneos locales, nacionales, regionales e internacionales. 
            Asimismo, se realizan viajes al interior del país para jugar partidos amistosos y al mismo tiempo conocer Honduras. Los alumnos son clasificados de acuerdo con su año de nacimiento en categorías, 
            desde la U-4 hasta la U-18. Contamos con horario semanal y horario sabatino.   
        </p> 
    <a href="{{route('contactanos')}}" class="btn-futeca d-flex">
            <div class="ml-2 mt-1">INSCRÍBETE</div>
            <div class="after"></div>
            <span>></span>
        </a>   
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <div class="text-our-family" >
          <img src="./assets/images/cancha2.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>--}}

<section>
  <div class="container py-5">
    <h1 class="font-weight-bold pb-4 text-center">Horarios Academia </h1>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semana</a>
      
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" >Sábados</a>
      {{--<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>--}}
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="table-responsive  table-condensed">
        
            <table class="table table-sm table-bordered">
                    <thead class="text-white bg-danger">
                        <tr class="text-center">
                        <th scope="col">Categoría</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Días</th>
                        <th scope="col">Hora Inicio</th>
                        <th scope="col">Hora Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($Horario as $item)
                        <tr class="text-center">
                        <td>{{$item->categoria}}</td>
                        <td>L.{{$item->precio}}</td>
                        <td>{{$item->dias}}</td>
                        <td>{{$item->horainicio}}</td>
                        <td>{{$item->horafin}}</td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
            </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <table class="table table-sm table-bordered">
            <thead class="text-white bg-danger">
                <tr class="text-center">
                <th scope="col">Categoría</th>
                <th scope="col">Precio</th>
                <th scope="col">Hora Inicio</th>
                <th scope="col">Hora Fin</th>
                </tr>
            </thead>
            <tbody>
            @foreach($Horariosabado as $item)
                <tr class="text-center">
                <td>{{$item->categoria}}</td>
                <td>L.{{$item->precio}}</td>
                <td>{{$item->horainicio}}</td>
                <td>{{$item->horafin}}</td>
                </tr>
            @endforeach
            </tbody>
    </table>
</div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
  </div>
  </div>
</section>



   <section {{-- style="background-image: url(./assets/images/academia/politicas.jpg); position absolute;  
    -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
    background-size: cover;"> --}}>
    {{--<div class="container pt-5" style="position: relative" >
        <div class="row">
            <div class="col-sm-12 col-lg-12 ">
                <h1 class="text-center"><span>POLÍTICAS</span></h1> <br>
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">Para ser parte de nuestra academia el alumno debe estar inscrito y tener cancelado el mes correspondiente al momento del ingreso.</li>
                        <li class="list-group-item">Los pagos de las mensualidades deben realizarse los primeros 10 días de cada mes.</li>
                        <li class="list-group-item">En caso de no cancelar en tiempo y forma se le suspenderán los entrenos al alumno por medio de la tarjeta roja y podrá incorporarse al momento de hacer efectivo el pago.</li>
                        <li class="list-group-item">En caso de no haber cancelado en los primeros 10 días del mes se cobrará L. 25.00 extra sobre las mensualidades.</li>
                        <li class="list-group-item">El no notificar la ausencia de los entrenos ya sea por estudios, viajes y lesiones o estado de salud, está sujeto al pago de la mensualidad correspondiente. (Si notifica la ausencia, su mensualidad se congelará hasta su regreso).</li>
                        <li class="list-group-item">La inasistencia consecutiva a 3 meses causará la baja de inscripción. Y al momento de regresar deberá pagar la inscripción.</li>
                        <li class="list-group-item">Los alumnos para poder recibir sus entrenamientos deben portar su uniforme correspondiente. (Camisa, calzoneta, chimpas, medias y tenis tacos).</li>
                        <li class="list-group-item">Para los torneos los alumnos tienen que ser constantes en sus entrenamientos (No es solo venir a los torneos).</li>
                        <li class="list-group-item">Para poder participar en los torneos es obligatorio tener disponible los 2 uniformes de competencia, el pago de la inscripción al torneo y la mensualidad al día.</li>
                      </ul>
            </div>
        </div>
    </div>--}}

    <section>
      <h1 class="text-center"><span>POLÍTICAS</span></h1> <br>

      <div class="row d-flex justify-content-center" style=" margin-left: 50px;">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <p class="card-text">Para ser parte de nuestra academia el alumno debe estar inscrito y tener cancelado el mes correspondiente al momento del ingreso.</p>
        </div>
      </div>
      <div class="card bg-light mb-3" style="max-width: 18rem; margin-left:34px;">
        <div class="card-body">
          <p class="card-text">Los pagos de las mensualidades deben realizarse los primeros 10 días de cada mes.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" style="max-width: 18rem; margin-left:34px;">
        <div class="card-body">
          <p class="card-text">En caso de no cancelar en tiempo y forma se le suspenderán los entrenos al alumno por medio de la tarjeta roja y podrá incorporarse al momento de hacer efectivo el pago.</p>
        </div>
      </div>
      <div class="card bg-light mb-3" style="max-width: 18rem; margin-left:34px;">
        <div class="card-body">
          <p class="card-text">En caso de no haber cancelado en los primeros 10 días del mes se cobrará L. 25.00 extra sobre las mensualidades.</p>
        </div>
      </div>

        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <p class="card-text">El no notificar la ausencia de los entrenos ya sea por estudios, viajes y lesiones o estado de salud, está sujeto al pago de la mensualidad correspondiente. (Si notifica la ausencia, su mensualidad se congelará hasta su regreso).</p>
          </div>
        </div>
        <div class="card bg-light mb-3" style="max-width: 18rem; margin-left:34px;">
          <div class="card-body">
            <p class="card-text">La inasistencia consecutiva a 3 meses causará la baja de inscripción. Y al momento de regresar deberá pagar la inscripción.</p>
          </div>
        </div>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem; margin-left:34px;">
          <div class="card-body">
            <p class="card-text">Los alumnos para poder recibir sus entrenamientos deben portar su uniforme correspondiente. (Camisa, calzoneta, chimpas, medias y tenis tacos).</p>
          </div>
        </div>
        <div class="card bg-light mb-3" style="max-width: 18rem; margin-left:34px;">
          <div class="card-body">
            <p class="card-text">Para los torneos los alumnos tienen que ser constantes en sus entrenamientos (No es solo venir a los torneos).</p>
          </div>
        </div>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <p class="card-text">Para poder participar en los torneos es obligatorio tener disponible los 2 uniformes de competencia, el pago de la inscripción al torneo y la mensualidad al día.</p>
          </div>
        </div>
  
        </div>
    
     

      
    
    </section>

  





@endsection