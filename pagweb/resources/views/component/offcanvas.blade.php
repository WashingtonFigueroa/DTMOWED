<!-- ======== OFFCANVAS MENU ========= -->
	    <div class="offcanvas-menu offcanvas-effect visible-xs">
	      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	      <h3>MENU</h3>
	      	<div>
		      <div>
				<ul>
					<li class="{{ request()->is('/')? 'active' :''}}"><a href="/"><i class="fa fa-home"></i> INICIO</a></li>
                    <li class="{{ request()->is('about-us')? 'active' :''}}"><a href="about-us" ><i class="fa fa-user"></i> NOSOTROS</a></li>
                    <li class="{{ request()->is('portafolio')? 'active' :''}}"><a href="portafolio" ><i class="fa fa-briefcase"></i> PROYECTOS</a></li>
                    <li class="{{ request()->is('contact')? 'active' :''}}"><a href="contact"><i class="fa fa-envelope"></i> CONTÁCTENOS</a></li>
					
				</ul>
			  </div>
			</div>
	    </div><!-- .offcanvas-menu -->