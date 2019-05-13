<!-- ======== OFFCANVAS MENU ========= -->
	    <div class="offcanvas-menu offcanvas-effect visible-xs">
	      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	      <h3>MENU</h3>
	      	<div>
		      <div>
				<ul>
					<li class="{{ request()->is('/')? 'active' :''}}"><a href="/"><i class="fa fa-home"></i> INICIO</a></li>
                    <li class="{{ request()->is('about-us')? 'active' :''}}"><a href="about-us" ><i class="fa fa-user"></i> NOSOTROS</a></li>
                    <li class=" dropdown nav-item {{ request()->is('portafolio')? 'active' :''}} 
                                    {{ request()->is('ds')? 'active' :''}} {{ request()->is('mercadotecnia')? 'active' :''}} 
                                    {{ request()->is('capacitacion')? 'active' :''}}"><a href="#" >SERVICIOS</a>
                                    <div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li><a href="ds">Desarrollo de Software</a></li>
													<!--<li><a href="mercadotecnia">Mercadotecnia</a></li>-->
													<li><a href="capacitacion">Capacitaciones</a></li>
                                                    <!--<li><a href="portafolio">Portafolio</a></li>-->
												</ul>
											</div><!-- /.submenu-inner -->
										</div></li>
                    <li class="{{ request()->is('contact')? 'active' :''}}"><a href="contact"><i class="fa fa-envelope"></i> CONTÁCTENOS</a></li>
					
				</ul>
			  </div>
			</div>
	    </div><!-- .offcanvas-menu -->