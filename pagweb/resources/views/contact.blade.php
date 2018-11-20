<!DOCTYPE html>
<html lang="en">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DT MOWED</title>
    <!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="estilos/fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="estilos/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="estilos/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="estilos/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="estilos/css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="estilos/css/animate.css" rel="stylesheet">
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- Bootstrap Core CSS -->
    <link href="estilos/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="estilos/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="estilos/css/responsive.css" rel="stylesheet">

    <script src="estilos/js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	    <script src="estilos/js/vendor/html5shim.js"></script>
	    <script src="estilos/js/vendor/respond.min.js"></script>
    <![endif]-->
	</head>


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
									</div>
								</div>
								<div class="col-md-4">
									<div class="mini-contact">
										<h2>Llámenos</h2>
										<p>Si tienes algún problema o recomendación para nosotros no dudes en llamarnos directamente al número: </p>

										<a href="#"> 0993384378</a>
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
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4367834982116!2d-78.16801061193327!3d0.34226309998431986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a3d6cf0667ca7%3A0xca5e629e48c3c97!2sDTE+Desarrolladores+Tecnol%C3%B3gicos+Ecuatorianos!5e0!3m2!1ses!2sec!4v1542734776371" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mini-contact">
										<h2>Visítanos</h2>
										<address>
											San Antonio, Los Soles <br>
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

							</div><!-- /.directions-wrapper -->

							<div class="contact-us-form">

								<h2>Déjanos un mensaje rápido</h2>


								<form id="contactForm" action="sendemail.php" method="POST">
									<div class="row">
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="name">Nombre</label>
										    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
										    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Nombre">
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="email">Email</label>
										    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
										    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="phone">Teléfono</label>
										    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-phone"></i></span>
										    <input id="phone" name="phone" type="text" class="form-control" placeholder="Teléfono">
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="subject">Asunto</label>
										    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-file-text"></i></span>
										    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Asunto">
										  </div>
										</div>
									</div>

									<div class="input-group text-area">
										<label class="sr-only" for="message">Mensaje</label>
										<span class="input-group-addon" id="basic-addon5"><i class="fa fa-file-text-o"></i></span>
										<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder="Mensaje"></textarea>
									</div>

									<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
								</form>
							</div>

						</div><!-- /.content-wrapper -->
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->

				@include ('component.footer')
				
	       	</div> <!-- .st-content-inner -->
	      </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->

		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>

    <!-- jQuery -->
    <script src="estilos/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="estilos/js/bootstrap.min.js"></script>
    <!-- wow.min.js -->
    <script src="estilos/js/wow.min.js"></script>
	<!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- owl-carousel -->
    <script src="estilos/owl-carousel/owl.carousel.min.js"></script>
    <!-- smoothscroll -->
    <script src="estilos/js/smoothscroll.js"></script>
	<!-- Offcanvas Menu -->
	<script src="estilos/js/hippo-offcanvas.js"></script>
	<!-- easypiechart -->
	<script src="estilos/js/jquery.easypiechart.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="estilos/js/jquery.easing.min.js"></script>
	<!-- Magnific-popup -->
	<script src="estilos/js/jquery.magnific-popup.min.js"></script>
	<!-- Shuffle.min js -->
	<script src="estilos/js/jquery.shuffle.min.js"></script>
    <!-- Custom Script -->
    <script src="estilos/js/scripts.js"></script>
	</body>
</html>
