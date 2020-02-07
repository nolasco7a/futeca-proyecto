@extends('layouts.template')
@section('content')


<section class="banner-contactanos">
    <div class="principal-banner d-flex justify-content-center align-items-center">
        <img src="./assets/images/alquileres/FUT5.jpeg" alt="">
        <div class="overlay"></div>
        <h1>CONTÁCTANOS</h1>
    </div>
</section>




{{--Formulario de contacto --}}
<section class="" >
  <div class="container" style="position: relative">
	<div class="row " style="padding-top:1.5rem">
		<div class="col-sm-12 col-lg-7">
			<h1 class="font-weight-bold pb-4 text-left">ENVÍANOS UN MENSAJE</h1>
			<div class="form">
					<div class="">
							<div class="form-top">
								<div class="form-top-left">
									<h3></h3>
									<p class="text-black">Llena el formulario para poder ponernos en contacto</p>
								</div>
							</div>
							<div class="form-bottom" >
							<div class="row">
								<div class="col-sm-12 col-lg-6"> 
								<form method="POST" action="{{route('contactanos')}}">
									@csrf
									<div class="form-group">
												<label class="sr-only" for="contact-subject">Nombre</label>
												<input type="texSSt" name="nombre" placeholder="Nombre..." class="contact-subject form-control" id="contact-subject" value="{{old('nombre')}}">
												{!! $errors->first('nombre', '<small class="red">:message</small>') !!}
												
									</div>
								</div>
								<div class="col-sm-12 col-lg-6"> 
									<div class="form-group">
												<label class="sr-only" for="contact-subject">Apellido</label>
												<input type="text" name="apellido" placeholder="Apellido..." class="contact-subject form-control" id="contact-subject" value="{{old('apellido')}}">
												{!! $errors->first('apellido', '<small class="red">:message</small>') !!}
									</div>
								</div>
							</div>
							<div class="form-group">
										<label class="sr-only" for="contact-subject">Telefono</label>
										<input type="text" name="telefono" placeholder="Telefono..." class="contact-subject form-control" id="contact-subject" value="{{old('telefono')}}">
										{!! $errors->first('telefono', '<small class="red">:message</small>') !!}
							</div>
						    <div class="form-group">
										<label class="sr-only" for="contact-email">Correo electronico</label>
										<input type="email" name="email" placeholder="Correo electronico..." class="contact-email form-control" id="contact-email" value="{{old('email')}}">
										{!! $errors->first('email', '<small class="red">:message</small>') !!}
									</div>
									<div class="form-group">
											<label for="exampleFormControlSelect1" class="text-black">Asunto:</label>
									<select class="form-control" id="exampleFormControlSelect1" name="asunto">
												<option value="0">Selecione una opción</option>
												<option value="Alquiler Cancha">Alquiler Cancha </option>
												<option value="Futeca Palco">Futeca Palco</option>
												<option value="Futeca Academia">Futeca Academia</option>
												<option value="Torneos Corporativos">Torneos Corporativos</option>
									</select>
									{!! $errors->first('asunto', '<small class="red">:message</small>') !!}
											</div>
									<div class="form-group">
										<label class="sr-only" for="contact-message">Mensaje</label>
										<textarea name="mensaje" placeholder="Mensaje..." class="contact-message form-control" id="contact-message">{{old('mensaje')}}</textarea>
										{!! $errors->first('mensaje', '<small class="red">:message</small>') !!}
									</div>
									<button type="submit" class="btn btn-primary mb-4" >Enviar Mensaje</button>
							</div>
						</form>
						</div>
						
					
			</div>
		</div>
		<div class="col-12 col-lg-5" >
			<h1 class="font-weight-bold text-center">UBICACIÓN</h1>
			<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.923845973783!2d-87.1688317851658!3d14.081672690134594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fbccb67b23e85%3A0x2e7b49bf81e14d58!2sFuteca!5e0!3m2!1ses-419!2shn!4v1572843784717!5m2!1ses-419!2shn" width="100%" height="530px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
		</div>
	</div>

  </div>
</section>

<!--<div class="card">
	<img class="card-img" src="./assets/images/contact.jpg" alt="">
		<div class=" form  card-img-overlay ">
			<div>
				<div class="col-sm-8 col-sm-offset-2 text pt-5 ">
					<h1><strong>CONTACTANOS</strong></h1>
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-7 col-sm-offset-3 ">
					<div class="form-top">
						<div class="form-top-left">
							<h3></h3>
							<p>Llena el formulario para poder ponernos en contacto</p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="form-bottom">

					<div class="row">
						<div class="col-6"> 
							<div class="form-group">
										<label class="sr-only" for="contact-subject">Nombre</label>
										<input type="texSSt" name="subject" placeholder="Nombre..." class="contact-subject form-control" id="contact-subject">
							</div>
						</div>
						<div class="col-6"> 
							<div class="form-group">
										<label class="sr-only" for="contact-subject">Apellido</label>
										<input type="text" name="subject" placeholder="Apellido..." class="contact-subject form-control" id="contact-subject">

							</div>
						</div>

					</div>
					<div class="form-group">
								<label class="sr-only" for="contact-subject">Telefono</label>
								<input type="text" name="subject" placeholder="Telefono..." class="contact-subject form-control" id="contact-subject">
					</div>
						<form role="form" action="assets/contact.php" method="post"> 			                    	<div class="form-group">
								<label class="sr-only" for="contact-email">Correo electronico</label>
								<input type="text" name="email" placeholder="Correo electronico..." class="contact-email form-control" id="contact-email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="contact-subject">Asunto</label>
								<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
							</div>
							<div class="form-group">
								<label class="sr-only" for="contact-message">Mensaje</label>
								<textarea name="message" placeholder="Mensaje..." class="contact-message form-control" id="contact-message"></textarea>
							</div>
							<button type="submit" class="btn">Enviar Mensaje</button>
						</form>
					</div>
				</div>


				<div class="col-sm-5 col-sm-offset-3 form-box"> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.923845973783!2d-87.1688317851658!3d14.081672690134594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fbccb67b23e85%3A0x2e7b49bf81e14d58!2sFuteca!5e0!3m2!1ses-419!2shn!4v1572843784717!5m2!1ses-419!2shn" width="400" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
</div> -->
 
@endsection

