@extends('layouts.template')
@section('content')

{{--Formulario de contacto --}}
<section class="" style="background-image: url(./assets/images/index/cuerpotecnico.jpeg); position absolute;  
                        -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
                        background-size: cover;">
  <div class="container" style="position: relative" >
	<div class="row " style="padding-top:150px ">
		<div class="col-sm-12 col-lg-7">
			<h1 class="text-white">CONTACTANOS</h1>
			<div class="form">
					<div class="">
							<div class="form-top">
								<div class="form-top-left">
									<h3></h3>
									<p class="text-white">Llena el formulario para poder ponernos en contacto</p>
								</div>
							</div>
							<div class="form-bottom">
							<div class="row">
								<div class="col-sm-12 col-lg-6"> 
									<div class="form-group">
												<label class="sr-only" for="contact-subject">Nombre</label>
												<input type="texSSt" name="subject" placeholder="Nombre..." class="contact-subject form-control" id="contact-subject">
									</div>
								</div>
								<div class="col-sm-12 col-lg-6"> 
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
											<label for="exampleFormControlSelect1" class="text-white">Asunto:</label>
											<select class="form-control" id="exampleFormControlSelect1">
												<option>Alquiler Cancha</option>
												<option>Futeca Palco</option>
												<option>Futeca Academia</option>
											</select>
											</div>
									<div class="form-group">
										<label class="sr-only" for="contact-message">Mensaje</label>
										<textarea name="message" placeholder="Mensaje..." class="contact-message form-control" id="contact-message"></textarea>
									</div>
									<button type="submit" class="btn btn-primary" >Enviar Mensaje</button>
								</form>
							</div>
						</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-5">
			<iframe class="mapsmediaquery" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.923845973783!2d-87.1688317851658!3d14.081672690134594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fbccb67b23e85%3A0x2e7b49bf81e14d58!2sFuteca!5e0!3m2!1ses-419!2shn!4v1572843784717!5m2!1ses-419!2shn" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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

