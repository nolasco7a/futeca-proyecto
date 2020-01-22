@extends('layouts.template')
@section('content')


<section class="banner">
    <div class="principal-banner d-flex justify-content-center align-items-center">
        <img src="./assets/images/academia/academiabanner.jpg" alt="">
        <div class="overlay"></div>
        <h1>academia futeca</h1>
    </div>
</section>

<section style="overflow-x: hidden">
    <div class="row our-family d-flex align-items-center">
      <div class="col-lg-6">
        <div class="text-our-family">
        <h1><span>academia</span> futeca</h1>
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
  </section>


<section>
    <div class="container py-5 table-responsive">
        <h1 class="font-weight-bold pb-4 text-center">Horarios Academia: Semana</h1>
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
</section>


<section>
        <div class="container table-responsive">
            <h1 class="font-weight-bold pb-4 text-center">Horarios Academia: Sábados</h1>
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
    </section>

    <section {{-- style="background-image: url(./assets/images/academia/politicas.jpg); position absolute;  
    -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
    background-size: cover;"> --}}>
    <div class="container pt-5" style="position: relative" >
        <div class="row">
            <div class="col-sm-12 col-lg-12 ">
                <h1 class="text-center"><span>POLITICAS</span></h1>
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
    </div>
</section>

@endsection