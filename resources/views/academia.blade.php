@extends('layouts.template')
@section('content')


<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('./assets/images/academia/academiabanner.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="bg-danger text-white font-weight-bold">FUTECA ACADEMIA</h1>
                <a href="{{route('contactanos')}}" type="button" class="btnbanner">INSCRIBETE</a>
            </div>
            </div>
        </div>
    </div>
</section>



<section class=""> 
    <div class="container-fluid text-white" style="background:black">
        <div class="row">
            <div class="col-sm-12 col-lg-6 p-0 ">
                <img src="./assets/images/academia/academiaslogan.jpg" style="object-fit:cover; width:100%; height:450px" alt="">
            </div>
            <div class="col-sm-12 col-lg-6 pt-5"> 
                <h1 class="text-weight-bold">Futeca Academia</h1>
                <p class="text-justify">Somos un centro especializado en la enseñanza del futbol para niños y niñas en edades de 3 a 18 años. 
                        Aquí aprenden las diferentes tácticas y estrategias de este deporte, técnica, disciplina y el fundamento de trabajar en equipo. Participan en torneos locales, nacionales, regionales e internacionales. 
                        Asimismo, se realizan viajes al interior del país para jugar partidos amistosos para hacer amistades y al mismo tiempo conocer Honduras. Los alumnos son clasificados de acuerdo con su año de nacimiento en categorías, 
                        desde la U-4 hasta la U-18. Contamos con horario semanal y horario sabatino.   
                </p>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-5 table-responsive">
        <h1 class="font-weight-bold pb-4">Horarios Academia: Semana</h1>
        <table class="table table-sm table-bordered">
                <thead class="text-white bg-danger">
                    <tr class="text-center">
                    <th scope="col">Categoria</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Dias</th>
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
            <h1 class="font-weight-bold pb-4">Horarios Academia: Sabados</h1>
            <table class="table table-sm table-bordered">
                    <thead class="text-white bg-danger">
                        <tr class="text-center">
                        <th scope="col">Categoria</th>
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

<section style="background-image: url(./assets/images/academia/politicas.jpg); position absolute;  
-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
background-size: cover;">>
    <div class="container pt-5" style="position: relative" >
        <div class="row">
            <div class="col-sm-12 col-lg-12 ">
                <h1 class="font-weight-bold text-white text-center pb-4">Politicas</h1>
                <ul class="text-white politicas">
                        <li>Para ser parte de nuestra academia el alumno debe estar inscrito y tener cancelado el mes correspondiente al momento del ingreso.</li>
                        <li>Los pagos de las mensualidades deben realizarse los primeros 10 días de cada mes.</li>
                        <li>En caso de no cancelar en tiempo y forma se le suspenderán los entrenos al alumno por medio de la tarjeta roja y podrá incorporarse al momento de hacer efectivo el pago.</li>
                        <li>En caso de no haber cancelado en los primeros 10 días del mes se cobrará L. 25.00 extra sobre las mensualidades.</li>
                        <li>El no notificar la ausencia de los entrenos ya sea por estudios, viajes y lesiones o estado de salud, está sujeto al pago de la mensualidad correspondiente. (Si notifica la ausencia, su mensualidad se congelará hasta su regreso).</li>
                        <li>La inasistencia consecutiva a 3 meses causara la baja de inscripción. Y al momento de regresar deberá pagar la inscripción.</li>
                        <li>Los alumnos para poder recibir sus entrenamientos deben portar su uniforme correspondiente. (Camisa, calzoneta, chimpas, medias y tenis tacos).</li>
                        <li>Para los torneos los alumnos tienen que ser constantes en sus entrenamientos (no es solo venir a los torneos).</li>
                        <li>Para poder participar en los torneos es obligatorio tener disponible los 2 uniformes de competencia, el pago de la inscripción al torneo y la mensualidad al día.</li>
                      </ul>
            </div>
        </div>
    </div>
</section>

@endsection