<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Softwaremotos</title>
<link href="http://localhost/software_motos/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="http://localhost/software_motos/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="http://localhost/software_motos/css/component.css" rel="stylesheet" type="text/css"  />

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scootio Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola Welcome" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
       <link href="http://localhost/software_motos/css/style_ingreso.css" type="text/css" rel="stylesheet" media="all">
<!--js-->
<script src="http://localhost/software_motos/js/jquery-1.11.1.min.js"></script> 
<script src="http://localhost/software_motos/js/modernizr.custom.js"></script>
<link href="http://localhost/software_motos/css/swipebox.css" rel='stylesheet' type='text/css' />
<!--//js-->
<script type="text/javascript" src="http://localhost/software_motos/js/move-top.js"></script>
<script type="text/javascript" src="http://localhost/software_motos/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script src="http://localhost/software_motos/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".work-grid-middle a").swipebox();
						});
					</script>


</head>
  <!--start-home-->
 <body class="cbp-spmenu-push" style="background-image:none;">
       <!--top-header-->
		<!--bottom-->
		  <section class="button">
					<!--<button id="showLeftPush"><img src="http://localhost/software_motos/images/menu-icon1.png" alt="" style="width: 57px;height: 65px;margin-top: -2em;"></button>-->
		   </section>
		   	<!-- start-search BOTON BUSQUEDA 
			  <div class="search">
			   <div id="sb-search" class="sb-search">
				  <form>
					 <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
					 <input class="sb-search-submit" type="submit" value="">
					 <span class="sb-icon-search"> </span>
				  </form>
			    </div>
			   </div>
			 --search-scripts-->
			 <script src="js/classie.js"></script>
			 <script src="js/uisearch.js"></script>
			   <script>
				 new UISearch( document.getElementById( 'sb-search' ) );
			   </script>
				<!--//search-scripts-->

			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Menu</h3>
				<a class="scroll" href="#house">Bienvenida</a>
				<a class="scroll" href="#about">Informaci&oacuten</a>
				<a class="scroll" href="#service">Servicios</a>
				<!--<a class="scroll" href="#team">Team</a>
				<a class="scroll" href="#news">News</a>
				<a class="scroll" href="#test">Testimonials</a>
			    <a class="scroll" href="#demo">Demo</a>-->
				<a class="scroll" href="#gallery">Galeria</a>
				<a class="scroll" href="#contact">Contacto</a>
				<ul class=" side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
		  </nav>
	      <div class="banner" id="house">
		       <div class="container">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>Bienvenidos </h3>
							    <!--<a href="#" class="con"><i class="glyphicon glyphicon-cog"></i>Configure</a>-->
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>Gestión Motos </h3>
							    <!--<a href="#" class="con"><i class="glyphicon glyphicon-cog"></i>Configure</a>-->
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  <h3> Compra  - Venta </h3>
							    <!--<a href="#" class="con"><i class="glyphicon glyphicon-cog"></i>Configure</a>-->
								</div>	
							</li>
							<!--<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								 <h3></h3>
								 <a href="#" class="con"><i class="glyphicon glyphicon-cog"></i>Configure</a>
								</div>
							</li>-->
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="http://localhost/software_motos/js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
				</div>


		 </div>			
  <!--start-about-->
     <div class="about-section" id="about">
	    <div class="container">
		       <h3 class="tittle">Información</h3>
		        <div class="about-top">
				  <div class="col-md-6 about-text">
				   <h2>Software Motos</h2>
				  <p>Software de Motos es un proyecto que esta pensado para la compra y venta de motocicletas, lo que permite tener control sobre los productos comprados y vendidos, tambien permite un control sobre clientes o proveedores y asi da una mayor seguridad...</p>
				  <p>Proyecto ucp - Metodologia programacion IV</p>
				   <a href="#" class="con two"><i class="glyphicon glyphicon-menu-right"></i>Volver</a>
		    </div>
			<div class="col-md-6 about-pic">
		            <img src="http://localhost/software_motos/images/ab.jpg" alt=""/>
		    </div>
				<div class="clearfix"> </div>		
		    </div>
		</div>
	 </div>
  <!--//about-->
  <!--start-services-->
     <div class="service-section" id="service">
	    <div class="container">
		  <h3 class="tittle">Servicios</h3>
		    <div class="service-bottom">
				<div class="col-md-6 about-left">
					<div class="srv-one">
						<div class="srv-left">
							<h4>Registro Moto</h4>
							<p>Permite tener registro de las motos que ingresen a la empresa, y asi mismo agregarla en los datos de compra .</p>
						</div>
						<div class="srv-right">
							<a href= "http://localhost/software_motos/index.php/Rmotos/vista_motos"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="srv-two">
						<div class="srv-left">
							<h4>Compra</h4>
							<p>Tener control de cada moto que se compra. </p>
						</div>
						<div class="srv-right">
							<form>
							<a href= "index.html"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span></a>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 about-left">
					<div class="srv-one">
						<div class="ab-left">

							<a href= "index.html"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></a>
						</div>
						<div class="ab-right">
							<h4>Venta</h4>
							<p>Registro de motos vendidas. .</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="srv-two">
						<div class="ab-left">
							<a href= "http://localhost/software_motos/index.php/Rclientes/vista_clientes"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a>
						</div>
						<div class="ab-right">
							<h4>Registro Cliente</h4>
							<p>Tener control de los clientes a los que se le venden o se compran</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="srv-two">
						<div class="ab-left">
							<a href= "http://localhost/software_motos/index.php/RUsuarios/vista_usuarios"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
						</div>
						<div class="ab-right">
							<h4>Registro Usuarios-Ingreso</h4>
							<p>Tener control de los clientes a los que se le venden o se compran</p>
						</div>
						<div class="clearfix"></div>
					</div>
				<div class="clearfix"></div>
			</div>

		</div>
	 </div>
  <!--latest-models-->
		  <div class="top-places">
		     <div class="container">
			     <h3 class="tittle">Galeria</h3>
			    <div class="tip-main">
			      <div class="col-md-4 top-grid">
					 <img src="http://localhost/software_motos/images/moto1 (2).jpg" alt="image"/>
					 <h4>Modelo 2015</h4>
					 <p> Kymco UNIK110 </p>
					 <ul class="top-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
				  </div>		
				    <div class="col-md-4 top-grid">
					     <img src="http://localhost/software_motos/images/moto1(3).jpg" alt="image"/>
					 	 <h4>Modelo 2015</h4>
						  <p>Honda Cb110 </p>
						  <ul class="top-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
				  </div>	
				   <div class="col-md-4 top-grid">
					    <img src="http://localhost/software_motos/images/moto1(4).jpg" alt="image"/>
					 	<h4>Modelo 2016</h4>
						<p>Kymco Rocket</p>
						<ul class="top-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>

				  </div>	
					<div class="clearfix"> </div>				
				</div>
			</div>
	     </div>

  <!--//about-->
  <!--team start here-- >
 <!--<div class="team" id='team'> SECCION DE GERENTES 
	  	<div class="container wrapper">
	  		<div class="team-top">
	  			<h3 class="tittle">Our Team</h3>
	  		</div>
	  		<div class="team-bottom">
	  		<div class="friend">
	  			<div class="col-md-4 friend-img"><img src="images/t1.jpg" class="img-responsive" alt=""/></div>
	  			<div class="col-md-8 friend-desc">
	  				<h3><a href="#">Scarlet Hara</a></h3>
	  				<h4>Employer</h4>
	  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
	  			</div>
	  		    <div class="clearfix"> </div>
	  		</div>
	  		<div class="friend">
	  		   <div class="col-md-8 friend-desc1">
	  				<h3><a href="#">Jeff Bridges</a></h3>
	  				<h4>Partner</h4>
	  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
	  			</div>
	  			<div class="col-md-4 friend-img1"><img src="images/t2.jpg" class="img-responsive" alt=""/></div>
	  		    <div class="clearfix"> </div>
	  		</div>
	  		<div class="friend">
	  			<div class="col-md-4 friend-img"><img src="images/t3.jpg" class="img-responsive" alt=""/></div>
	  			<div class="col-md-8 friend-desc">
	  				<h3><a href="#">Diana Ross</a></h3>
	  				<h4>Director</h4>
	  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
	  			</div>
	  		    <div class="clearfix"> </div>
	  		</div>
	  		<div class="friend">
	  		   <div class="col-md-8 friend-desc1">
	  				<h3><a href="#">Jeff Bridges</a></h3>
	  				<h4>Partner</h4>
	  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
	  			</div>
	  			<div class="col-md-4 friend-img1"><img src="images/t4.jpg" class="img-responsive" alt=""/></div>
	  		    <div class="clearfix"> </div>
	  		</div>
	  	</div>
	 </div>
</div>--> 
	<!--team end here-->
	<!--news-starts
	<div class="news" id="news">   SECCION FOTOS
		<div class="container">
		  <h3 class="tittle">Our News</h3>
			<div class="news-bottom">
				<div class="news-one">
					<div class="col-md-6 news-left">
						<a href="#"><img src="images/n1.jpg" alt="" /></a>
					</div>	
					<div class="col-md-6 news-right"> 
					<a href="#"><h4>Pellentesque mollis malesuada</h4></a>
						<h5>30.08.2015</h5>
						<p class="one">Duis bibendum pellentesque nisi eget volutpat. Nunc rhoncus ultrices lectus.Aliquam eu dui quis orci ultrices eleifend ut non massa. Duis commodo, ante in vulputate iaculis, libero ex fringilla dolor id laoreet augue. Maecenas dui diam, pellentesque et.</p>	
					</div>	
					<div class="clearfix"> </div>	
				</div>
				<div class="news-one">
					<div class="col-md-6 news-right"> 
						<a href="#"><h4>Pellentesque mollis malesuada</h4></a>
						<h5>12.09.2015</h5>
						<p class="one">Duis bibendum pellentesque nisi eget volutpat. Nunc rhoncus ultrices lectus.Aliquam eu dui quis orci ultrices eleifend ut non massa. Duis commodo, ante in vulputate iaculis, libero ex fringilla dolor id laoreet augue. Maecenas dui diam, pellentesque et.</p>	
					</div>	
					<div class="col-md-6 news-left">
						<a href="#"><img src="images/n2.jpg" alt="" /></a>
					</div>						
					<div class="clearfix"> </div>	
				</div>		
			</div>			
		</div>	
	</div>	
	<!--news-end-->

	<!--test-demo
	  <div class="test-demo" id="demo">	
		    <div class="container">
				<h3 class="tittle">Test Demo</h3>
			  <div class="demo-top">
			  	   <div class="col-md-4 demo-text">
				      <h4> VESPA 946</h4>
					   <div class="pre-top">
							 <div class="item-text">
									<span class="item_price">Finance Free</span>
								    <h6>$129</h6>
									  <div class="clearfix"> </div>
						    </div>
							<div class="item-text">
									<span class="item_price">Option to Purchase Free</span>
								    <h6>$249</h6>
									  <div class="clearfix"> </div>
						    </div>
							<div class="item-text">
									<span class="item_price">Total Amount Payable</span>
								    <h6> $9,879</h6>
									  <div class="clearfix"> </div>
						    </div>
							<div class="item-text">
									<span class="item_price">Duration</span>
								    <h6>48 months</h6>
									  <div class="clearfix"> </div>
						    </div>
					  </div>
					   <a href="#" class="con"><i class="glyphicon glyphicon-cog"></i>Configure</a>

				      
				   </div>
			       <div class="col-md-8 demo-img">
				   <img src="images/demo.jpg" alt=""/>
				    </div>
					<div class="clearfix"> </div>
			  </div>
			</div>
	   </div>-->
	<!--//test-demo-->
		<!--//testimonials
		  <div class="testimonials" id="test">	  TESTIMONIOS SOBRE PRODUCTOS
		       <div class="container">
			   	<h3 class="tittle">Testimonials</h3>
				<div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                     <li>
		                 <div class="testi-text">
								<div class="testi-img">
									<img src="images/t1.jpg" alt=""/>
								</div>
								<h4>David</h4>
								<p><span> </span>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>								
						  </div>
						  </li>
						  <li>
							  <div class="testi-text">
									<div class="testi-img">
										<img src="images/t2.jpg" alt=""/>
									</div>
									<h4>sona</h4>
									<p><span> </span>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>								
							</div>
						  </li>
					</ul>
					 </div>
			   </div>
		   </div>
		   <script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 3
						  $("#slider3").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
				 </script>-->
<!--start-gallery-->
<div class="work" id="gallery">
		<!-- container -->
		<div class="container">
				<h3 class="tittle">Galeria</h3>
			<div class="work-grids">
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-left">
						<h5>Moto 1 </h5>
						<p>Caracteristicas de la moto</p>
						<a href="#">Precio</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<a class="example-image-link" href="http://localhost/software_motos/images/moto2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://localhost/software_motos/images/moto2.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>Moto 2 </h5>
						<p>Caracteristicas de la moto2</p>
						<a href="#">Precio</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-middle">
					<a class="example-image-link" href="http://localhost/software_motos/images/moto2(3).jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://localhost/software_motos/images/moto2(3).jpg" alt=""/></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>Moto 3</h5>
						<p>Caracteristicas de la moto3</p>
						<a href="#">Precio</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<a class="example-image-link" href="http://localhost/software_motos/images/moto2(2).jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://localhost/software_motos/images/moto2(2).jpg" alt=""/></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-left">
						<h5>Moto 4 </h5>
						<p>Caracteristicas de la moto4</p>
						<a href="#">Precio</a>
					</div>
					<div class="col-md-4 work-grid-middle">
							<a class="example-image-link" href="http://localhost/software_motos/images/moto2(1).jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://localhost/software_motos/images/moto2(1).jpg" alt=""/></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>Moto 5</h5>
						<p>Caracteristicas de la moto5</p>
						<a href="#">Precio</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>	
		<!-- //container -->
	</div>
<!--contact-->
   <div class="contact" id="contact">
	 <div class="container">
		       <h3 class="tittle">Contacto</h3>
			<div class="contact-form">
					<div class="col-md-6 contact-grid">
					<form>
						<p class="your-para">Nombre:</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">E-mail:</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">Mensaje:</p>
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
						<div class="send">
							<input type="submit" value="Enviar" >
						</div>
					</form>
				</div>
				<div class="col-md-6 contact-in">
					<h5> Datos de contacto</h5>
					<p class="para1">Nos interesaria como se ha sentido frente a este servicio, este espacio permite que realice sus quejas, dudas o reclamos frente a nuestro servicio.............. </p>
					<div class="more-address"> 
						<div class="address-more">
						  <p class="location"><i class="glyphicon glyphicon-map-marker"></i>-------------</p>
					      <p class="phone"><i class="glyphicon glyphicon-phone"></i> **************</p>
					      <p class="mail"><i class="glyphicon glyphicon-envelope"></i>vvvv@example.com</p>

						</div>
				      </div>
				</div>
				<div class="clearfix"> </div>
			   </div>
	    </div>
    </div>

	<!--/footer-->
			<div class="copy">
		              <p>&copy; 2015 Scootio. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		            </div>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>