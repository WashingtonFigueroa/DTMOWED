<!DOCTYPE html>
<html lang="en">
@include('component.head')
	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			 	@include ('component.header')
				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>CONTÁCTENOS</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="/">INICIO</a></li>
								  <li class="active">CONTÁCTENOS</li>
								</ol>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>
				<div class="container">
					<div class="content-wrapper">
						<div class="contact-us-wrapper">
							<div class="row">
								<div class="col-md-4">
									<div class="mini-contact">
										<h2>Envíenos un email</h2>
										<p>Si tienes algún problema o recomendación para nosotros no dudes en escribirnos directamente al correo: </p>

										<a href="mailto:#">info@dt-ecuador.org</a>
										<a href="mailto:#">liwa.meraki@gmail.com</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mini-contact">
										<h2>Llámenos</h2>
										<p>Si tienes algún problema o recomendación para nosotros no dudes en llamarnos directamente al número: </p>
										<a href="#"> 0993 384 378</a>
										<a href="#"> 0969 191 290</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mini-contact">
										<h2>Déjanos un tweet</h2>
										<p>Si tienes algún problema o recomendación para nosotros no dudes en dejarnos un tweet directamente a nuestra cuenta: </p>

										<a href="https://twitter.com/DTE66707447">Tweet us →</a>
									</div>
								</div>
							</div><!-- /.row -->
							<div class="row">
								<div class="col-md-8">
									<div class="map-wrapper">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d320.8975804028491!2d-78.11768863122485!3d0.3500009465504936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a3cb66f057d31%3A0xdae43a96b9805b9!2sLA+CHOZA!5e0!3m2!1ses!2sec!4v1557338827585!5m2!1ses!2sec" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mini-contact">
										<h2>Visítanos</h2>
										<address>
											Antonio José de Sucre y Miguel Oviedo <br>
											Ibarra - Ecuador
										</address>
									</div>
								</div>
							</div><!-- /.row -->
							<div class="directions-wrapper">
								<div class="contact-directions">
									<h2>Horario de Atención</h2>
									<p>Lunes a Viernes, 8:00 AM a 5:00 PM</p>
								</div>
							</div>
							<div class="contact-us-form">
								<h2>Déjanos un mensaje</h2>
								{{--<form method="post" action="{{url('comentarios')}}">--}}
									{{--{{ csrf_field() }}--}}
									{{--<div class="row">--}}
										{{--<div class="col-md-6">--}}
										  {{--<div class="input-group">--}}
										    {{--<label class="sr-only">Nombre</label>--}}
										    {{--<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>--}}
										    {{--<input id="name" name="name" type="text" class="form-control"  required="" placeholder="Nombre">--}}
										  {{--</div>--}}
										{{--</div>--}}
										{{--<div class="col-md-6">--}}
										  {{--<div class="input-group">--}}
										    {{--<label class="sr-only">Email</label>--}}
										    {{--<span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>--}}
										    {{--<input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">--}}
										  {{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="row">--}}
										{{--<div class="col-md-6">--}}
										  {{--<div class="input-group">--}}
										    {{--<label class="sr-only">Teléfono</label>--}}
										    {{--<span class="input-group-addon" id="basic-addon3"><i class="fa fa-phone"></i></span>--}}
										    {{--<input id="phone" name="phone" type="text" class="form-control" placeholder="Teléfono">--}}
										  {{--</div>--}}
										{{--</div>--}}
										{{--<div class="col-md-6">--}}
										  {{--<div class="input-group">--}}
										    {{--<label class="sr-only">Asunto</label>--}}
										    {{--<span class="input-group-addon" id="basic-addon4"><i class="fa fa-file-text"></i></span>--}}
										    {{--<input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Asunto">--}}
										  {{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="input-group text-area">--}}
										{{--<label class="sr-only">Mensaje</label>--}}
										{{--<span class="input-group-addon" id="basic-addon5"><i class="fa fa-file-text-o"></i></span>--}}
										{{--<input name="message"  placeholder="Escribe aquí tu comentario...">--}}
									{{--</div>--}}
									{{--<button type="submit" class="btn btn-primary ">Enviar</button>--}}
									{{--<button type="reset" class="btn btn-info ">Limpiar</button>--}}
								{{--</form>--}}
								<form method="post" action="{{url('comentarios')}}">
									{{ csrf_field() }}
									<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" value="" placeholder="Nombre y Apellido" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" value="" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="mensajee"  placeholder="Escribe aquí tu historía o comentario..." rows="6"></textarea>
										</div>
										<!-- Break -->
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
												<li><input type="reset" value="Limpiar" /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
						</div><!-- /.content-wrapper -->
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->
				@include ('component.footer')
	       	</div> <!-- .st-content-inner -->
	      </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->
	  </div>
	    @include ('component.offcanvas')
		@include ('component.footerjs')
	</body>
</html>
