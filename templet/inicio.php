<!-- MAIN BANNER -->
<section class="cd-hero">
	<ul class="cd-hero-slider autoplay">

		<li class="selected">
			<div class="cd-full-width">
				<div class="container">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_1" data-editor="no"><?php $this->pnt('slider_1','Money Doesn’t<br>Come <span class="color-default">Without Care</span>'); ?></h2>					
					<p class="jmy_web_div" data-page="inicio" id="slider_1_txt"><?php $this->pnt('slider_1_txt','Finding your next Financial Advisor is as easy as counting from one to five.'); ?></p>

					<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-primary" data-text="Leer mas" >Leer mas</a>

					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="Contactanos" >Contactanos</a>
				</div>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<div class="container">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_2" data-editor="no">
						<?php $this->pnt('slider_2','Friendly <span class="color-default">Assistance</span>'); ?>
					</h2>

					<p class="jmy_web_div" data-page="inicio" id="slider_2_txt" data-editor="no"> 
						<?php $this->pnt('slider_2_txt','With over 15 years of experience we’ll ensure you always get the best<br>guidance. we’re with you every step of the way'); ?>	
					</p>
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="póngase en contacto con nosotros hoy">póngase en contacto con nosotros hoy
					</a>
				</div>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<div class="container text-center">
					<h2 class="jmy_web_div color-white" data-page="inicio" id="slider_3" data-editor="no">
						<?php $this->pnt('slider_3','Experience is Everything'); ?>
					</h2>
					<p class="jmy_web_div color-white"  data-page="inicio" id="slider_3_txt" data-editor="no">
						<?php $this->pnt('slider_3_txt','With over 15 years of experience we’ll ensure you always get the best<br>guidance we’re with you every step of the way'); ?>						
					</p>
					<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-primary" data-text="leer mas">leer mas</a>
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="Contactanos">Contactanos</a>
				</div>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<div class="container text-right">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_4" data-editor="no">
						<?php $this->pnt('slider_4','Clients <span class="color-default">Investment<br></span>Guidance'); ?>
						
					</h2>
					<p class="jmy_web_div" data-page="inicio" id="slider_4_txt" data-editor="no">
						<?php $this->pnt('slider_4_txt','Doing the right thing for our clients, no matter what.'); ?>					
					</p>
					<a href="<?php $this->url_inicio(); ?>services.html" class="btn btn-primary" data-text="Ver todos nuestros servicios">
						Ver todos nuestros servicios
					</a>
				</div>
			</div>
		</li>

	</ul>

	<div class="cd-slider-nav">
		<nav class="container">
			<span class="cd-marker item-1"></span>
			
			<ul>

				<li class="jmy_web_div selected" data-page="inicio" id="slider_menu_1"><?php 
				$this->pnt('slider_menu_1','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">1</div>Money Care<span>Finding your Next Advisor</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_2"><?php
				$this->pnt('slider_menu_2','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">2</div>Friendly Assistance<span>Export Financial Advice</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_3"><?php
				$this->pnt('slider_menu_3','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">3</div> Our Experience<span>We have 15 Years Experience</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_4"><?php
				$this->pnt('slider_menu_4','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">4</div> Client Investment<span>Doing the right thing</span></a>'); ?></li>

			</ul>
		</nav> 
	</div>
	
</section> <!-- / MAIN BANNER -->




<!-- Editor listo WELCOME -->
<section class="bg-blue">
	<div class="container">
		<div class="row">

			<div class="col-md-6 animate fadeInLeft">
				<h2 class="jmy_web_div " data-page="inicio" id="welcom_adv"><?php $this->pnt('welcom_adv','Welcome to Advisor'); ?></h2>
				<div class="height-10"></div>
				<p class="jmy_web_div " data-page="inicio" id="welcom_adv_txt" data-editor="no"><?php $this->pnt('welcom_adv_txt','We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.'); ?></p>
				<div class="height-10"></div>
				<p class="jmy_web_div " data-page="inicio" id="2welcom_adv" data-editor="no"><?php $this->pnt('2welcom_adv','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.'); ?></p>
				<div class="height-20"></div>
				<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-bordered-dark" data-text="read more">leer mas</a>
				<div class="height-40"></div>
			</div>

			<div class="col-md-6 animate fadeInRight">
				<div class="video-widget">
					<img src="images/video-thumb.jpg" class="img-shadow" alt="">
					<a href="<?php $this->url_templet(); ?>http://vimeo.com/36031564" class="fancybox-media"><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- / WELCOME -->


<!-- BENIFITS -->
 <section class="text-center">
	<div class="container">

<!--
<div class="jmy_web_categorias" data-page="inicio" id="categorias_nombres" data-value="<?php
            $categorias = ["anillos","collares","pulceras"];
            $categorias = $this->pnt('categorias_nombres',implode(',', $categorias),['return'=>true]); 
            echo $categorias;
            $categorias = explode(",",$categorias);
            ?>" data-titulo="Indica el nombre de categoría separado por comas"></div>

    -->


<div class="jmy_web_contador" data-page="inicio" id="numero_de_carrusel" data-value="<?php
        $this->pnt('numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>




		<div class="two-items-carousel owl-carousel">


           <?php 
                 $paginas = $this->pnt('numero_de_carrusel','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>

                <!-- INICIA el Ejemplo 1 -->
                <div class="<?php $this->pnt('slider_cat_'.$i,''); ?> jmy_web_slider" id="grupo_slider_<?php echo $i;?>" data-page="inicio" data-marco="works-container" data-var='[{"type":"imagen","id":"carr<?php echo $i;?>_imagen","url":"<?php $this->url_templet();?>images/img1.jpg"},{"type":"text","id":"carr<?php echo $i;?>_titulo","placeholder":"TituloH3"},{"type":"text","id":"carr<?php echo $i;?>_text","placeholder":"parrafo"}]'>


					<div class="image-and-text-box animate fadeInLeft">
						<div class="bordered-thumb " data-page="inicio">

							<img id="carr<?php echo $i; ?>_imagen" src="<?php 
							$this->pnt(	'carr'.$i.'_imagen',
									$this->url_templet(["return"=>true]).'images/img1.jpg'
									); ?>" alt=""></div>
						<h3 class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo"><?php 
						$this->pnt('carr'.$i.'_titulo','Why Our Consulting'); ?></h3>

						<p class="" data-page="inicio" id="carr<?php echo $i; ?>_text"><?php 
						$this->pnt('carr'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
					</div>	
				</div>
				<!-- FINALIZA el Ejemplo 1 -->



			<div class="image-and-text-box animate fadeInRight">
				<div class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo2"  ><?php 
				$this->pnt('carr'.$i.'_titulo2','<h3>Investment Planning</h3>');?></div>
				<div class="bordered-thumb" data-page="inicio" id="carr<?php echo $i; ?>_text2"><?php 
				$this->pnt('carr'.$i.'_text2','<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. </p> '); 
				?></div>
				<div class="bordered-thumb " data-page="inicio" id="carr<?php echo $i; ?>_imagen2"><?php 
					$this->pnt(	'carr'.$i.'_imagen2','<img src="'. $this->url_templet(["return"=>true]).'images/img1.jpg" alt="">'); 
				?></div>
			</div>

			


   <?php } ?>




		</div>
	</div>
</section><!-- / BENIFITS -->


<!-- FUNFACTS -->
<div class="container">
	<div class="funfacts text-center">
		<div class="advisor-overlay"></div>
		<div class="funfacts-inner">
			<h2 class="jmy_web_div" data-page="inicio" id="titulo_satisfaccion"  ><?php 
				$this->pnt('titulo_satisfaccion','Helping Small Businesses'); 
				?></h2>
			<p class="jmy_web_div " data-page="inicio" id="satisfaccion_text"><?php 
				$this->pnt('satisfaccion_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); ?></p>

			<div class="row text-center" id="counters">

				<div class="col-md-3 col-xs-6">
					<div class="counter">
						<span class="jmy_web_div quantity-counter1 highlight" data-page="inicio" id="satisfaccion_no1"><?php 
						$this->pnt('satisfaccion_no1','0'); ?></span>	

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto1"  ><?php 
						$this->pnt('satisfaccion_consepto1','Employees'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counter2 highlight" data-page="inicio" id="satisfaccion_no2"><?php 
						$this->pnt('satisfaccion_no2','0'); ?></span>

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto2"  ><?php 
						$this->pnt('satisfaccion_consepto2','Location'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counte3 highlight" data-page="inicio" id="satisfaccion_no3"><?php 
						$this->pnt('satisfaccion_no3','0'); ?></span>

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto3"  ><?php 
						$this->pnt('satisfaccion_consepto3','<% Satisfaction'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counter4 highlight" data-page="inicio" id="satisfaccion_no4"><?php 
						$this->pnt('satisfaccion_no4','0'); ?></span>
					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto4"  ><?php 
						$this->pnt('satisfaccion_consepto4','Happy Customers'); 
						?></h6>
					 </div>
				</div>

			</div>
		</div>
	</div><!-- / CONTAINER -->
</div><!-- / FUNFACTS -->



<!-- DIFFERENT SERVICES -->
<section class="different-services text-center parallax">
	<div class="container">
		<div class="heading animate bounceIn">
			<h1 class="color-white jmy_web_div" data-page="inicio" id="amamos_titulo"  ><?php 
				$this->pnt('amamos_titulo','We Love What We Do'); 
				?></h1>
			<p class="color-white jmy_web_div" data-page="inicio" id="amamos_texto"  ><?php 
				$this->pnt('amamos_texto','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
		</div>
	</div>
</section><!-- / DIFFERENT SERVICES -->



<!-- WHO IS BEHIND -->
<section class="bg-blue">
	<div class="container">
		<div class="services text-center">

			<div class="jmy_web_contador" data-page="inicio" id="amamos_numero_de_carrusel" data-value="<?php
        $this->pnt('amamos_numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>




			<div class="three-items-carousel owl-carousel">

 			<?php 
                 $paginas = $this->pnt('amamos_numero_de_carrusel','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>
                  <div class="<?php $this->pnt('slider_cat_'.$i,''); ?> jmy_web_slider" id="grupo_slider_2_<?php echo $i;?>" data-page="inicio" data-marco="service-box" data-var='[{"type":"text","id":"amamos_slide<?php echo $i;?>_icono","placeholder":"icon-img-#(#1-#10)"},{"type":"text","id":"amamos_slide<?php echo $i;?>_titulo","placeholder":"TituloH3"},{"type":"text","id":"amamos_slide<?php echo $i;?>_text","placeholder":"parrafo"}]'>
					<div class="service-box">
						<i class="<?php 
						$this->pnt('amamos_slide'.$i.'_icono','icon-img-'.($i+1)); 
						?>"></i>
						<h4 data-page="inicio" id="amamos_slide<?php echo $i;?>_titulo"><?php 
						$this->pnt('amamos_slide'.$i.'_titulo','Advisor'); 
						?></h4>

						<p data-page="inicio" id="amamos_slide<?php echo $i;?>_text"><?php 
						$this->pnt('amamos_slide'.$i.'_text','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
						?></p>
					</div>
				</div>

				<?php } ?>

			</div>
		</div>
		<div class="row">
			<div class="col-md-6 animate fadeInLeft">
				<ul class="image-list-classic ">
					<li  >

					  <div class="col-md-12 text-center jmy_web_slider" id="bro_imagen_cont" data-page="inicio" data-marco="bro_imagen_cont" data-var='[{"type":"imagen","id":"bro_imagen","url":"<?php $this->url_templet(); ?>images/behind.jpg"}]' >

					  	<img data-no-retina height="60" alt="" title="" id="bro_imagen" src="<?php $this->pnt('bro_imagen',$this->url_templet(['return'=>true]).'images/behind.jpg'); ?>"/>
					  </div>
					</li>

					<li><div class="col-md-12 text-center jmy_web_slider" id="bro_imagen_cont2" data-page="inicio" data-marco="bro_imagen_cont2" data-button="down" data-var='[{"type":"imagen","id":"bro_imagen2","url":"<?php $this->url_templet(); ?>images/behind.jpg"}]' >

					  	<img data-no-retina height="60" alt="" title="" id="bro_imagen2" src="<?php $this->pnt('bro_imagen2',$this->url_templet(['return'=>true]).'images/behind.jpg'); ?>"/>
					  </div></li>
				</ul>
			</div>
			<div class="col-md-6 animate fadeInRight">
				<h3 class="jmy_web_div" data-page="inicio" id="brok_titulo"><?php 
					$this->pnt('brok_titulo','Who is behind the best brok'); 
					?></h3>
				<p class="jmy_web_div" data-page="inicio" id="brok_texto"><?php 
					$this->pnt('brok_texto','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
					?></p>
				
				

			<div class="jmy_web_contador" data-page="inicio" id="brok_numero_de_carrusel" data-value="<?php
        $this->pnt('brok_numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>


				<div id="accordion" role="tablist" aria-multiselectable="true">

<?php 
                 $paginas = $this->pnt('brok_numero_de_carrusel','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>


					<div class="toggle">
						<div class="toggle-heading" role="tab">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php $this->url_templet(); ?>#collapseOne<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i;?>">
							  <i class="fa fa-plus"></i> <div class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_titulo"><?php 
							$this->pnt('brok_'.$i.'_titulo','What is do i have to tell you a few lorem?'); 
							?></div></a>
						</div>
						<div id="collapseOne<?php echo $i;?>" class="panel-collapse collapse <?php echo ($i==1)?'in':'';?>" role="tabpanel">
							<div class="toggle-body">
								<p class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_texto"><?php 
							$this->pnt('brok_'.$i.'_texto','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
							?></p>
							</div>
						</div>
					</div>

<?php } ?>



				</div>
			</div>
		</div>
	</div>
</section><!-- / WHO IS BEHIND -->




<div class="contact-us-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h4 class=" animate fadeInLeft">If you have any querry for related investment... We are available</h4>
			</div>
			<div class="col-md-3">
				<div class="text-right">
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MEET OUR ADVISORS -->
<section class="meet-our-advisors">
	<div class="container">
		<div class="heading text-center animate bounceIn">
			<h2>Meet Our Advisors</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
		</div>
		
		<div class="single-item-carousel owl-carousel classic-arrows">
			<div class="row">
				<div class="col-md-5 animate fadeInLeft"><img src="images/meet-our-advisors-img1.jpg" alt=""></div>
				<div class="col-md-7 animate fadeInRight">
					<div class="meet-advisors-content">
						<h3>David Fernando<span>Founder & CEO</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
						<ul class="social-text">
							<li><a href="<?php $this->url_inicio(); ?>#." class="facebook">facebook</a></li>
							<li><a href="<?php $this->url_inicio(); ?>#." class="twitter">twitter</a></li>
							<li><a href="<?php $this->url_inicio(); ?>#." class="youtube">youtube</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5"><img src="images/meet-our-advisors-img2.jpg" alt=""></div>
				<div class="col-md-7">
					<div class="meet-advisors-content">
						<h3>Ashley Hardy<span>Chief Marketing Officer</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
						<ul class="social-text">
							<li><a href="<?php $this->url_inicio(); ?>#." class="facebook">facebook</a></li>
							<li><a href="<?php $this->url_inicio(); ?>#." class="twitter">twitter</a></li>
							<li><a href="<?php $this->url_inicio(); ?>#." class="youtube">youtube</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5"><img src="images/meet-our-advisors-img3.jpg" alt=""></div>
				<div class="col-md-7">
					<div class="meet-advisors-content">
						<h3>Fernando Torres<span>Administrator</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
						<ul class="social-text">
							<li><a href="<?php $this->url_inicio(); ?>#." class="facebook">facebook</a></li>
							<li><a href="<?php $this->url_inicio(); ?>#." class="twitter">twitter</a></li>
							<li><a href="<?php $this->url_inicio(); ?>#." class="youtube">youtube</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- / MEET OUR ADVISORS -->


<!-- TESTIMONIALS -->
<section class="bg-blue">
	<div class="container">
		<div class="heading text-center animate bounceIn">
			<h2>Happy Customers</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="testimonial animate fadeInUp">
					<div class="testimonial-content">
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="testimonials-author">
								<img class="img-circle" src="images/review-author-img.png" alt="">
								<p>Boris Hunt<span>(Sales Agent)</span></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="text-right">
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="testimonial animate fadeInUp" data-delay="100">
					<div class="testimonial-content">
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="testimonials-author">
								<img class="img-circle" src="images/review-author-img.png" alt="">
								<p>Boris Hunt<span>(Sales Agent)</span></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="text-right">
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
			<a class="btn btn-bordered-dark cd-see-all iconic animate fadeInUp" data-delay="200" href="<?php $this->url_templet(); ?>javascript:void(0);" data-text="View All"><i class="icon-img-grid"></i>View All</a>
		</div>
	</div>
	
	<div class="cd-testimonials-all">
		<div class="cd-testimonials-all-wrapper">
			<ul>
				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<a href="<?php $this->url_templet(); ?>javascript:void(0);" class="close-btn">Close</a>
		
	</div>
	
</section><!-- / BENIFITS -->



<!-- REQUEST A CALLBACK -->
<section>
	<div class="container">
		<div class="request-a-callback clearfix animate fadeInUp">
			<div class="request-a-callback-content">
				<h3>Request a Call Back</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut.</p>
				<p><strong>For Investment:</strong> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.</p>
			</div>
			<div class="request-a-callback-form">
				<form>
					<input type="text" placeholder="Your Name">
					<input type="text" placeholder="Email Address">
					<input type="text" placeholder="Phone Number">
					<div class="styled-select">
						<select>
							<option>I would like to discuss:</option>
							<option>Personal Finance</option>
							<option>Stock trading</option>
							<option>Retirement</option>
							<option>Other</option>
						</select>
					</div>
					<button data-text="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- / REQUEST A CALLBACK -->

