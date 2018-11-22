<header>
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" >
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                              <!-- offcanvas-trigger-effects -->
                                <h1 class="logo"><a class="navbar-brand" href="/"><img  src="estilos/img/logo.png" width="50px" alt=""></a></h1>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class=" nav-item {{ request()->is('/')? 'active' :''}}"><a href="/">INICIO</a></li>
                                    <li class=" nav-item {{ request()->is('about-us')? 'active' :''}}"><a href="about-us" >NOSOTROS</a></li>
                                    <li class=" nav-item {{ request()->is('portafolio')? 'active' :''}}"><a href="portafolio" >PORTAFOLIO</a></li>
                                    <li class=" nav-item {{ request()->is('contact')? 'active' :''}}"><a href="contact">CONTÁCTENOS</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container -->
                    </nav>
                </header>