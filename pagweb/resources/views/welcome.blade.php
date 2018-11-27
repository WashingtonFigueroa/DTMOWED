<!DOCTYPE html>
<html lang="es" class="no-js">
@include ('component.head')   
    <body>
      <div id="st-container" class="st-container">
        <div class="st-pusher">
          <div class="st-content">
            <div class="st-content-inner">
                @include ('component.header')


                <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="estilos/img/slider-1.jpg" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 class="animated lightSpeedIn">Desarrolladores Tecnológicos</h1>
                                    <p class="lead animated lightSpeedIn">Automatizando procesos.</p>

                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->

                        <div class="item">
                            <img src="estilos/img/slider-2.jpg" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">

                                    <h1 class="animated bounceIn">Desarrollamos software </h1>

                                    <p class="lead animated bounceIn">a la medida de tu empresa.</p>
                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <img src="estilos/img/slider-3.jpg" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">

                                    <h1 class="animated bounceIn">Diseñamos sitios web </h1>

                                    <p class="lead animated bounceIn">que te hacen ver bien</p>
                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <img src="estilos/img/slider-4.jpg" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">

                                    <h1 class="animated bounceIn">Estrategias de Digital Marketing </h1>

                                    <p class="lead animated bounceIn">para que el mundo te escuche</p>
                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- #x-corp-carousel-->


                <div class="container">
                    <div class="content-wrapper">
                        <section class="intro-wrapper"> 
                            <div class="row"> 
                                <div class="col-lg-6 col-md-8">
                                    <h2 class="wow fadeInDown">Bienvenido a DT MOWED</h2>
                                    <p class="wow fadeInDown">Desarrolladores Tecnológicos</p>

                                    <h3 class="wow fadeInDown">Sobre nuestra compañía</h3>
                                    <p class="wow fadeInDown">Se forma a finales del 2014, con un equipo de profesionales del área de desarrollo de sistemas y sitios web. Actualmente, contamos con más de 4 años de experiencia, tiempo en el cual nos hemos convertido en una reconocida empresa en el medio; Nuestra filosofía única nos ha convertido en la mejor opción para clientes de todo tipo que buscan relaciones a largo plazo y les gusta hacer bien las cosas.</p>

                                    <ul class="check-square">
                                        <li>Planificación y análisis de Sistemas Informaticos.</li>
                                        <li>Desarrollo y venta de software.</li>
                                        <li>Tutorías Online.</li>
                                        <li>Mercadotecnia.</li>
                                        <li>Tienda de artículos.</li>
                                    </ul> </br>

                                    <a class="btn btn-primary wow fadeInDown" href="about-us" role="button">Leer más</a>
                                </div>

                                <div class="col-lg-6 col-md-4"></div>
                            </div><!-- /.row -->
                        </section><!-- /.intro-wrapper -->


                        <section class="service-wrapper">
                            <h2 class="section-title wow fadeInDown">Nuestros Servicios </h2>
                            <div class="row">
                              <div class="col-md-6 wow fadeInRight">
                                <div class="media">
                                  <a class="media-left" href="#">
                                    <span class="icon bg1 flaticon-cogwheel8"></span>
                                  </a>
                                  <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Desarrollo de Sistemas</a></h3>
                                    <p>Creamos soluciones web para su empresa: Inventario, Facturación, Planillas, Contabilidad y más...</p>
                                  </div> <!-- /.media-body -->
                                </div> <!-- /.media -->
                              </div> <!-- /.col-md-6 -->
                              
                              <div class="col-md-6 wow fadeInRight">
                                <div class="media">
                                  <a class="media-left" href="#">
                                    <span class="icon bg2 flaticon-wide6"></span>
                                  </a>
                                  <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Diseño Web</a></h3>
                                    <p>Sitios Web, con gestores de contenido, Tiendas en linea, Facebook Apps, 100% responsive.</p>
                                  </div> <!-- /.media-body -->
                                </div> <!-- /.media -->
                              </div> <!-- /.col-md-6 -->
                              
                              <div class="col-md-6 wow fadeInRight">
                                <div class="media">
                                  <a class="media-left" href="#">
                                    <span class="icon bg3 flaticon-world29"></span>
                                  </a>
                                  <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Mercadotecnia</a></h3>
                                    <p>Despliega tu campaña de Marketing Digital, a una población segmentada en el momento oportuno.</p>
                                  </div> <!-- /.media-body -->
                                </div> <!-- /.media -->
                              </div> <!-- /.col-md-6 -->

                              <div class="col-md-6 wow fadeInRight">
                                <div class="media">
                                  <a class="media-left" href="#">
                                    <span class="icon bg4 flaticon-shopping63"></span>
                                  </a>
                                  <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Artículos</a></h3>
                                    <p>Los mismos productos, pero al mejor precio con las mejores garantias.</p>
                                  </div> <!-- /.media-body -->
                                </div> <!-- /.media -->
                              </div> <!-- /.col-md-6 -->
                            </div> <!-- /.row -->
                        </section>

                         <section class="advantages-wrapper">
                            <h2 class="section-title wow fadeInDown">Nuestras Habilidades</h2>
                            <div class="css-tab text-center">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#experiance" aria-controls="experiance" role="tab" data-toggle="tab">Habilidades&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="#skills" aria-controls="skills" role="tab" data-toggle="tab">Experiencia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                {{--<li><a href="#capabilities" aria-controls="capabilities" role="tab" data-toggle="tab">Capabilities</a></li>--}}
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="experiance">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="our-progress">
                                                <div class="chart" data-percent="99">
                                                    <span class="percent">99</span>
                                                </div>

                                                <p>Desarrollo de Software</p>
                                            </div><!-- /.our-progress -->
                                        </div><!-- /.col-md-3 -->

                                        <div class="col-md-3 col-sm-6">
                                            <div class="our-progress">
                                                <div class="chart" data-percent="90">
                                                    <span class="percent">90</span>
                                                </div>

                                                <p>Aplicaciones Móviles</p>
                                            </div><!-- /.our-progress -->
                                        </div><!-- /.col-md-3 -->

                                        <div class="col-md-3 col-sm-6">
                                            <div class="our-progress">
                                                <div class="chart" data-percent="95">
                                                    <span class="percent">95</span>
                                                </div>

                                                <p>Mercadeo</p>
                                            </div><!-- /.our-progress -->
                                        </div><!-- /.col-md-3 -->

                                        <div class="col-md-3 col-sm-6">
                                            <div class="our-progress">
                                                <div class="chart" data-percent="90">
                                                    <span class="percent">90</span>
                                                </div>

                                                <p>Diseño y Publicidad</p>
                                            </div><!-- /.our-progress -->
                                        </div><!-- /.col-md-3 -->
                                    </div><!-- /.row -->
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="skills">
                                    <div class="our-skill">
                                        <div class="row">
                                            <div class="col-sm-12 text-center experiance-tab-content wow fadeInLeft">
                                                <h3>4 años de Experiencia</h3>
                                                <p>Nuestra experiencia, metodología
                                                    y construcción de soluciones informáticas están al servicio de nuestros clientes. Desde hace 4 años ayudamos a diversos negocios y a nuestro país a dar el paso tecnológico que necesitamos.</p>
                                            </div>
                                        </div>
                                    </div><!-- /.our-skill -->
                                </div><!--/#skills -->

                                {{--<div role="tabpanel" class="tab-pane fade" id="capabilities">--}}
                                    {{--<div class="row ">--}}
                                        {{--<div class="col-md-6 col-xs-12 capability-tab-content">--}}
                                            {{--<div class="media">--}}
                                                {{--<div class="media-left">--}}
                                                    {{--<img src="estilos/img/tab-capa-1.jpg" alt="">--}}
                                                {{--</div>--}}

                                                {{--<div class="media-body text-left">--}}
                                                    {{--<h3 class="media-heading">Building your business growth &amp; prosperity</h3>--}}
                                                    {{--<p>Holisticly mesh granular bandwidth without seamless manufactured products. Monotonectally productize team building e-commerce before global bandwidth. Uniquely mesh resource sucking content and robust portals.</p>--}}
                                                {{--</div><!-- /.media-body -->--}}
                                            {{--</div><!-- /.media -->--}}
                                        {{--</div><!-- /.col-md-6 -->--}}

                                        {{--<div class="col-md-6 col-xs-12 capability-tab-content">--}}
                                            {{--<div class="media">--}}
                                                {{--<div class="media-left">--}}
                                                    {{--<img src="estilos/img/tab-capa-2.jpg" alt="">--}}
                                                {{--</div>--}}

                                                {{--<div class="media-body text-left">--}}
                                                    {{--<h3 class="media-heading">Building your business growth &amp; prosperity</h3>--}}
                                                    {{--<p>Holisticly mesh granular bandwidth without seamless manufactured products. Monotonectally productize team building e-commerce before global bandwidth. Uniquely mesh resource sucking content and robust portals.</p>--}}
                                                {{--</div><!-- /.media-body -->--}}
                                            {{--</div><!-- /.media -->--}}
                                        {{--</div><!-- /.col-md-6 -->--}}
                                    {{--</div><!-- /.row -->--}}
                                {{--</div><!-- /.tab-pane -->--}}
                              </div><!-- /.tab-content -->
                            </div><!-- /.css-tab -->
                        </section>

                        <section class="handover-wrapper">
                            <h2 class="section-title wow fadeInDown" style="color: #1b1e21">Algunos de nuestros  servicios</h2>
                            <div id="css-handover-carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#css-handover-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#css-handover-carousel" data-slide-to="1"></li>
                                <li data-target="#css-handover-carousel" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-6 col-md-push-6 wow fadeRight">
                                            <div class="handover-work-thumb">
                                                <img src="estilos/img/service1.jpg" alt="">
                                            </div><!-- /.client-thumb -->
                                        </div><!-- /.col-md-6 -->
                                        
                                        <div class="col-md-6 col-md-pull-6 wow fadeInLeft">
                                            <div class="handover-project">
                                                <h3>WEB COATL FACT</h3>
                                                <p>Sistema de Facturación Electrónica: Contamos con la solución más completa y sencilla de emitir, autorizar y distribuir tus comprobantes electrónicos.</p>

                                                <h4>PYMES / ENTERPRISE</h4>

                                                <a class="btn btn-primary" href="#" role="button">Leer más</a>
                                            </div><!-- /.handover-project -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-6 col-md-push-6">
                                            <div class="handover-work-thumb">
                                                <img src="estilos/img/service2.jpg" alt="">
                                            </div><!-- /.client-thumb -->
                                        </div><!-- /.col-md-6 -->
                                        
                                        <div class="col-md-6 col-md-pull-6">
                                            <div class="handover-project">
                                                <h3>APP COATL FACT</h3>
                                                <p>App de Facturación Electrónica: Permitire crear facturas en formato PDF y enviarlas a tus clientes por e-mail, directamente desde tu Smartphone o Tablet.</p>

                                                <h4>AUTÓNOMO / PYMES</h4>

                                                <a class="btn btn-primary" href="#" role="button">Leer más</a>
                                            </div><!-- /.handover-project -->
                                        </div><!-- /.col-md-6 -->   
                                    </div><!-- /.row -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-6 col-md-push-6">
                                            <div class="handover-work-thumb">
                                                <img src="estilos/img/service3.jpg" alt="">
                                            </div><!-- /.client-thumb -->
                                        </div><!-- /.col-md-6 -->
                                        
                                        <div class="col-md-6 col-md-pull-6">
                                            <div class="handover-project">
                                                <h3>WEB GRIFTEACH</h3>
                                                <p>Sistema de Administarción para las JAAP: Gestión integral para las Comunidades, permitiendo a los usuarios gestionar y administrar fácilmente el trabajo diario en una comunidad.</p>

                                                <a class="btn btn-primary" href="#" role="button">Leer más</a>
                                            </div><!-- /.handover-project -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.item -->
                              </div><!-- /.carousel-inner -->
                            </div><!-- /.carousel -->
                        </section>


                        {{--<section class="testimonial-wrapper">--}}
                            {{--<h2 class="section-title wow fadeInDown">Opinión de nuestros clientes</h2>--}}
                            {{--<div id="css-testimonial-carousel" class="carousel slide" data-ride="carousel">--}}
                              {{--<!-- Indicators -->--}}
                              {{--<ol class="carousel-indicators">--}}
                                {{--<li data-target="#css-testimonial-carousel" data-slide-to="0" class="active"></li>--}}
                                {{--<li data-target="#css-testimonial-carousel" data-slide-to="1"></li>--}}
                                {{--<li data-target="#css-testimonial-carousel" data-slide-to="2"></li>--}}
                              {{--</ol>--}}

                              {{--<!-- Wrapper for slides -->--}}
                              {{--<div class="carousel-inner">--}}
                                {{--<div class="item active">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-8 col-sm-7 wow fadeInLeft">--}}
                                            {{--<div class="client-testimonial">--}}
                                              {{--<p>Enthusiastically envisioneer state of the art quality vectors without robust materials. Conveniently coordinate error-free ideas and.sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
                                              {{--<span class="client-name">John Doe</span>, <span class="client-org">Themehippo</span>--}}
                                            {{--</div>--}}
                                        {{--</div><!-- /.col-md-8 -->   --}}
                                        {{--<div class="col-md-4 col-sm-5 wow fadeInRight">--}}
                                            {{--<div class="client-thumb">--}}
                                                {{--<img src="estilos/img/testimonial-1.jpg" alt="">--}}
                                            {{--</div><!-- /.client-thumb -->--}}
                                        {{--</div><!-- /.col-md-4 -->   --}}
                                    {{--</div><!-- /.row -->--}}
                                {{--</div><!-- /.item -->--}}
                                {{--<div class="item">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-8 col-sm-7">--}}
                                            {{--<div class="client-testimonial">--}}
                                              {{--<p>Enthusiastically envisioneer state of the art quality vectors without robust materials. Conveniently coordinate error-free ideas and.sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
                                              {{--<span class="client-name">John Doe</span>, <span class="client-org">Themehippo</span>--}}
                                            {{--</div>--}}
                                        {{--</div><!-- /.col-md-8 -->   --}}
                                        {{--<div class="col-md-4 col-sm-5">--}}
                                            {{--<div class="client-thumb">--}}
                                                {{--<img src="estilos/img/testimonial-2.jpg" alt="">--}}
                                            {{--</div><!-- /.client-thumb -->--}}
                                        {{--</div><!-- /.col-md-4 -->   --}}
                                    {{--</div><!-- /.row -->--}}
                                {{--</div><!-- /.item -->--}}
                                {{--<div class="item">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-8 col-sm-7">--}}
                                            {{--<div class="client-testimonial">--}}
                                              {{--<p>Enthusiastically envisioneer state of the art quality vectors without robust materials. Conveniently coordinate error-free ideas and.sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
                                              {{--<span class="client-name">John Doe</span>, <span class="client-org">Themehippo</span>--}}
                                            {{--</div>--}}
                                        {{--</div><!-- /.col-md-8 -->   --}}
                                        {{--<div class="col-md-4 col-sm-5">--}}
                                            {{--<div class="client-thumb">--}}
                                                {{--<img src="estilos/img/testimonial-3.jpg" alt="">--}}
                                            {{--</div><!-- /.client-thumb -->--}}
                                        {{--</div><!-- /.col-md-4 -->   --}}
                                    {{--</div><!-- /.row -->--}}
                                {{--</div><!-- /.item -->--}}
                              {{--</div><!-- /.carousel-inner -->--}}
                            {{--</div><!-- /.carousel -->--}}
                        {{--</section>--}}


                        <section class="trusted-client-wrapper">
                            <h2 class="section-title wow fadeInDown">PARTNER DT MOWED</h2>
                            <div class="row">
                                <div class="col-sm-12 text-center experiance-tab-content wow fadeInLeft">
                                    <ul class="partner-logo">
                                        <li class="wow zoomIn"><a href="#"> <img src="estilos/img/partner/partner-logo-1.png" class="rounded mx-auto d-block" alt=""></a></li>
                                        <li class="wow zoomIn"><a href="#"><img src="estilos/img/partner/partner-logo-2.png" class="rounded mx-auto d-block" alt=""></a></li>
                                        <li class="wow zoomIn"><a href="#"><img src="estilos/img/partner/partner-logo-3.png" class="rounded rounded float-right" alt=""></a></li>
                                    </ul>
                               </div>
                            </div>
                        </section>

                        <section class="subscription-wrapper text-center">
                            <h2 class="wow fadeInDown">Nuestros planes de suscripción</h2>
                            <h3 class="pricing-sub wow fadeInDown">Creamos soluciones para hacer más grande tu negocio</h3>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-lg-offset-2 text-left wow fadeInLeft">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h2>Diseño Web <small>Basic</small></h2>
                                        <p>Autoadministrables brindando
                                            el sistema más facil y
                                            intiutivo del mercado. </p>
                                          <br>
                                      </div><!-- /.panel-heading -->

                                      <div class="panel-body">
                                        <ul class="check-square-o">
                                            <li>Responsive web</li>
                                            <li>Emails corporativo</li>
                                            <li>1 año de hosting (alojamiento) GRATIS</li>
                                        </ul>

                                        <span class="price text-center"><small>Desde / </small> $149 </span>

                                        <div class="pricing-btn">
                                            <a class="btn btn-success" href="contact">Comienza Ya</a>
                                        </div>
                                      </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-lg-4 col-md-6 col-sm-6 text-left wow fadeInRight">
                                    <div class="panel panel-default featured-price">
                                      <div class="panel-heading">
                                        <h2>COATL FACT <small>Facturación Electronica</small></h2>
                                        <p>Permite crear de forma fácil y rápida
                                            facturas, presupuestos,informes con sus
                                            plantillas totalmente personalizables.</p>
                                      </div><!-- /.panel-heading -->

                                      <div class="panel-body">
                                        <ul class="check-square-o">
                                            <li>Gestionar ingresos, gastos</li>
                                            <li>Inventario</li>
                                            <li>Multi usuarios</li>
                                            <li>Sistema Web & Móvil</li>
                                        </ul>

                                        <span class="price text-center"><small>Desde /</small>$9 </span>

                                        <div class="pricing-btn">
                                            <a class="btn btn-success" href="contact">Comienza Ya</a>
                                        </div>

                                      </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </section>

                        <section class="support-wrapper">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-1">
                                    <h2 class="wow fadeInDown">Contamos con un equipo de soporte dedicado 8/6</h2>
                                    <p class="wow fadeInDown">Profesionales dispuestos a ayudarte y orientarte en cada proceso de la utilización de nuestros servicios en un horario amplio de atención. </p>

                                    <a class="btn btn-primary btn-lg wow fadeInDown" href="contact">Obtener soporte instantáneo</a>
                                </div>
                            </div>
                        </section>
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->
                @include ('component.footer')

            </div> <!-- .st-content-inner -->
           </div> <!-- .st-content -->
        </div> <!-- .st-pusher -->

        @include ('component.offcanvas')

        @include ('component.footerjs')
    </body>
</html>
