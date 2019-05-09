<!DOCTYPE html>
<html lang="es">
@include ('component.head')   
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
                                    <h1>Capacitación</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="estilos/#">Inicio</a></li>
                                    <li class="active">Capacitación</li>
                                </ol>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>

                <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                        <h3>Brindamos capacitaciones en los siguientes cursos:</h3>
                        <div class="row">
                                <div id="grid">
                                <h4>Computación Básica</h4>
                                    <div class="col-md-4">
                                        <div class="single-portfolio">
                                        <div class="misliderc">
			                                <ul>
			   	                                <li><img src="estilos/img/work/curso.jpg" alt=""></li>
                                                <li><img src="estilos/img/work/office365.jpg" alt=""></li>
			                                </ul>
			                            </div>
                                        </div><!-- /.single-portfolio -->
                                    </div>

                                    <div class="col-md-8">
								        <p align="justify">En este curso obtendrá habilidades necesarias para utilizar las 
                                        herramientas básicas y de uso diario en un computador. Estos conocimientos
                                        mejorarán su desempeño en el ámbito laboral y personal.</p>
                                        <p align="justify"><b>¿A quién está destinado? </b>A cualquier usuario con ganas de aprender. 
                                        No se necesita ningún conocimiento previo.</p>
                                        <p align="justify"><b>Contenido del Curso: </b></p>
                                        <ol type="disc">
                                            <li>Conceptos básicos</li>
                                            <li>Word</li>
                                            <li>Excel</li>
                                            <li>Power Point</li>
                                            <li>Internet</li>
                                        </ol>
							        </div>
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                            <br><br>
                            <div class="row">
                                <div id="grid">
                                <h4>Administración de Correos Electrónicos</h4>
                                <div class="col-md-8">
								        <p align="justify"> En la actualidad es imprescindible aprender a manejar de forma correcta todas 
                                        las acciones disponibles de un servidor de correo electrónico, ya que este se ha convertido en el 
                                        medio de comunicación más utilizado en el ámbito laboral y personal. Protocolos de transporte, 
                                        configuración de una cuenta de correo, agregar firma, insertar sonido, libreta de direcciones, 
                                        programas de mensajería instantánea, creación de cuentas de correos, etc. son los conceptos que 
                                        aprenderá a utilizar en este curso práctico.</p>
							        </div>

                                    <div class="col-md-4">
                                        <div class="single-portfolio">
                                        <div class="misliderc">
                            			    <ul>
			   	                            <li><img src="estilos/img/work/cac1.jpg" alt=""></li>
			   	                            <li><img src="estilos/img/work/cac2.jpg" alt=""></li>
			                                </ul>
			                            </div>
                                        </div><!-- /.single-portfolio -->
                                    </div>
                                </div><!-- /#grid -->
                            </div><!-- /.row --><br>
                            <div class="row">
                                <div id="grid">
                                <h5 align="center"><i>Si te interesan los cursos no dudes en contactarte con nosotros y te brindaremos más información!</i></h5>
                                <h5 align="center"><i>Si tienes alguna recomendación para un nuevo curso escríbenos!</i></h5>
                                <p align="center"><a class="btn btn-primary wow fadeInDown" href="contact" role="button">Contactos</a></p>
                                </div><!-- /#grid -->
                            </div><!-- /.row --><br>
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->

               @include('component.footer')

            </div> <!-- .st-content-inner -->
        </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->
    @include('component.offcanvas')
</div><!-- /st-container -->

@include('component.footerjs')

</body>
</html>
