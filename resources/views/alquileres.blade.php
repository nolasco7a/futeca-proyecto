@extends('layouts.template')
@section('content')

<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('./assets/images/alquileres/canchabanner.jpeg')">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="bg-danger text-white font-weight-bold">RESERVA TU CANCHA</h1>
                <a href="{{route('contactanos')}}" type="button" class="btnbanner">CONTACTANOS</a>
            </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-6 p-0 ">
                <img src="./assets/images/alquileres/FUT7.jpg" style="object-fit:cover; width:100%; height: 400px" alt="">
            </div>
            <div class="col-sm-12 col-lg-6 pt-5">
                <h1 class="pb-4 text-center">FUT7 - 2 Canchas</h1>
                <p class="text-justify"> Siendo los pioneros en introducir el campo FUT7, permitiendo jugar con 8 o 9 jugadores por equipo. 
                    La mismas están equipadas con grama sintética de la más alta tecnología de punta. 
                    Asimismo, cuentan con la iluminación adecuada para que pueda desarrollar el mejor futbol que hay en ti. 
                    Las canchas FUT7 tienen una medida de 33 x 52 metros cada una.
                </p>
            </div>        
        </div>
    </div>
</section>


<section>
        <div class="container-fluid" style="background:black">
            <div class="row">
                <div class="col-sm-12 col-lg-6 p-0 ">
                    <img src="./assets/images/alquileres/FUT5.jpeg" style="object-fit:cover; width:100%; height: 400px" alt="">
                </div>
                <div class="col-sm-12 col-lg-6 pt-5 text-white">
                    <h1 class="pb-4 text-center">FUT5 - 3 Canchas</h1>
                    <p class="text-justify"> 
                        La mismas están equipadas con grama sintética de la más alta tecnología de punta. 
                        Asimismo, cuentan con la iluminación adecuada para que pueda desarrollar el mejor futbol que hay en ti. 
                        Las canchas FUT5 tienen una medida de 21 x 40 metros cada una.
                    </p>
                </div>        
            </div>
        </div>
</section>

<section>
    <div class="container-fluid bg-light ">  
        <h1 class="font-weight-bold pt-5 pb-2">Galeria de las canchas disponibles</h1>              
        <div class="content">
            @foreach($Galeriacanchas as $item)
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

<!--Hay info sobre palco y alquileres que ya no tengo no lo borres
<div class="container-fluid pl-5 pr-5 bg-light text-dark">

   <div class="row pl-3 pr-3">
      <div class="col-4">
         <img src="./assets/images/alquiler2.jpg" class="img-fluid" alt="Responsive image" style="height:270px !important; width:auto !important">  
      </div>
      <div class="col-4">
         <img src="./assets/images/cancha.jpg" class="img-fluid" alt="Responsive image">  
      </div>
      <div class="col-4">
         <img src="./assets/images/cancha.jpg" class="img-fluid" alt="Responsive image">  
      </div>
   </div>
   <div class="row"> 
   <div class="col-12 pt-3 pl-5 pr-5"> 
            <h1>Alquileres</h1>
            <p class="text-justify"> Contamos con 5 canchas de futbol. Dos canchas FUT7 y tres canchas FUT5. 
            Siendo los pioneros en introducir el campo FUT7, permitiendo jugar con 8 o 9 jugadores por equipo. 
            La mismas están equipadas con grama sintética de la más alta tecnología de punta. 
            Asimismo, cuentan con la iluminación adecuada para que pueda desarrollar el mejor futbol que hay en ti. 
            Las canchas FUT7 tienen una medida de 33 x 52 metros y las canchas FUT5 una medida de 21 x 40 metros cada una.  
            Arrendamos por hora las canchas a personas naturales, empresas, colegios, universidades o equipos que deseen organizar juegos o entrenamientos.
             Abiertos de lunes a domingo de 8:00am – 10:00pm. También abrimos días feriados. 
            </p>
    </div>
   </div>
</div>

<section class="align-middle pb-5 containerblack text-white pl-3"> 
    <div class="row container-fluid pl-5  pt-3 ">
        <div class="col-sm-6 pt-2">
            <img src="./assets/images/palco.jpg" class="img-fluid" alt="Responsive image">  
         </div>   
        <div class="col-sm-6 pt-3">

            <div class="col-12 pt-5">
                <h1 class="pb-2">Palco Futeca</h1>
                <p class="text-justify"> Contamos con cafetería con vista panorámica de las canchas. 
                     Puedes disfrutar de desayunos como ser: baleadas, pan con frijoles, croissant, burritas. 
                     También ofrecemos: sándwiches de jamón y queso, sándwiches de pollo y pizzas.
                     Puedes acompañarlo de un refresco, agua, jugo, bebida hidratante o energizante y café de tu elección. 
                     Nuestro PALCO esta equipado con 5 pantallas para que puedas observar con tus amigos de los partidos de futbol, noticieros o cualquier programa que deseen. Para aquellos que aprovechan su tiempo les ofrecemos wifi gratis por consumo. Después de jugar una buena potra puedes compartir de una cerveza bien helada. Gracias a nuestros patrocinadores: PEPSI, GATORADE, AGUAZUL, YUMMIES y TECATE. 
                     Nuestras instalaciones cuentan con seguridad y estacionamiento. 
                </p>
            </div>

         </div>  
    </div>
</section>

     Top content 
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Contact Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive contact form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Contact us</h3>
                            		<p>Fill in the form below to send us a message:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-envelope"></i>
                        		</div>
                            </div>
                            <div class="form-bottom contact-form">
			                    <form role="form" action="assets/contact.php" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="contact-email">Email</label>
			                        	<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="contact-subject">Subject</label>
			                        	<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="contact-message">Message</label>
			                        	<textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
			                        </div>
			                        <button type="submit" class="btn">Send message</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
-->

@endsection