<?php get_header(); ?>

<!-- Inicio Banner -->
<section>
      <div id="carouselBSWP" class="carousel slide mx-0 h-80" data-ride="carousel">
          
          <div class="carousel-inner">
          
            <?php 
            // args
            $my_args_banner = array(
              'post_type' => 'banners',
              'posts_per_page' => 5,
            );
            // query
            $my_query_banner = new WP_Query ( $my_args_banner );
            ?>

            <?php if( $my_query_banner->have_posts()) : 
              $banner = $banners[0];
              $c = 0;
              while( $my_query_banner->have_posts() ) : 
              $my_query_banner->the_post(); 
            ?>

              <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid w-100')) ?>
                <div class="carousel-caption d-none d-md-block">
                  <h5>
                    <?php the_title(); ?>
                  </h5>
                </div>
              </div>

            <?php endwhile; endif; ?>

            <?php wp_reset_query(); ?>
          
          </div>

          <a class="carousel-control-prev" href="#carouselBSWP" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
          </a>

          <a class="carousel-control-next" href="#carouselBSWP" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Próximo</span>
          </a>
        
        </div>
 </section>

 <section class="ftco-section-parallax">
			<div class="parallax-img d-flex align-items-center">
				<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
					<?php the_content(); ?>
					
					<div class="row d-flex justify-content-center mt-4">
						
					</div>
					</div>
				</div>
				</div>
			</div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-1"><span>Nossos</span> Valores</h2>
            <p>Entenda a Exitus conhecendo sua forma de pensar e seu posicionamento perante o mercado e seus clientes.</p>     
          </div>
        </div>
        <div class="row">	        
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/target.png" alt="" srcset=""style="width: 70px;"  ></span></span>	            
                    <h3 class="heading-2 my-4">Missão</h3>	       
                    <ul class="pricing-text mb-5">
                        <li>
                            <p>
                                Aplicar conhecimento nas áreas de gerenciamento de projetos
                                e processos, 
                                com a finalidade de proporcionar maior lucratividade 
                                e um diferencial competitivo.
                            </p>
                        </li>	             
                    </ul>
	            </div>
	          </div>
            </div>
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/suitcase.png" alt="" srcset=""style="width: 70px;"></span></span>	            
                    <h3 class="heading-2 my-4">Negócio</h3>	            
                    <ul class="pricing-text mb-5">
                        <li>
                            <p>
                            Gerenciar Projetos e Processos com assertividade em todos os segmentos organizacionais, incluindo produtos que auxiliem este gerenciamento.
                            </p>
                        </li>	             
                    </ul>
	            </div>
	          </div>
            </div>
            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
                    <span class="price"><span class="number"><img src="<?php bloginfo('template_url'); ?>/images/eye.png" alt="" srcset=""style="width: 70px;"></span></span>	            
                    <h3 class="heading-2 my-4">Visão</h3>	            
                    <ul class="pricing-text mb-5">
                        <li>
                            <p>
                            Ser referência nos seus segmentos de atuação, sendo reconhecida pela excelência na Gestão de projetos e processos através de resultados alcançados.
                            </p>
                        </li>	             
                    </ul>
	            </div>
	          </div>
            </div>        
        </div>
      </div>
  </section>
  




  <section class="ftco-section-parallax">
			<div class="parallax-img d-flex align-items-center">
				<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
					<h2>Mais de 10 Anos de <strong>Experiência </strong>em Gestão de Projetos e Processos</h2>
          <p>Gostaria de saber mais sobre a empresa, realizar uma assessoria aplicada ou capacitação? </p>
          <a href="https://exitusgp.com.br/contato" class="btn btn-outline-light">Ir para Contato</a>
					<div class="row d-flex justify-content-center mt-4">
						
					</div>
					</div>
				</div>
				</div>
			</div>
    </section>

    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row">
    			
    			<div class="col-md-12 pl-md-5 py-5">
    				<div class="row justify-content-center pb-3">
		          <div class=" heading-section ftco-animate text-center">
		            <h2 class="mb-4"><span>Nossos</span> Números</h2>
		            <p>Ao longo da nossa jornada, fidelizamos clientes, contribuimos com o seu crescimento e crescemos juntos. </br>Veja alguns de nossos números.</p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class=""><img src="<?php bloginfo('template_url'); ?>/images/suitcase.png" alt="" srcset=""style="width: 70px;"></span>
		              	</div>
		                <strong class="number">+</strong><strong class="number" data-number="300">0</strong>
		                <span>Projetos Realizados</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class=""><img src="<?php bloginfo('template_url'); ?>/images/team.png" alt="" srcset=""style="width: 70px;"></span>
		              	</div>
		                <strong class="number">+</strong><strong class="number" data-number="300">0</strong>
		                <span>Clientes Satisfeitos</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class=""><img src="<?php bloginfo('template_url'); ?>/images/skill.png" alt="" srcset=""style="width: 70px;"></span>
		              	</div>
		                <strong class="number">+</strong><strong class="number" data-number="+10">0</strong>
		                <span>Anos de Experiência</span>
		              </div>
		            </div>
		          </div>
		         
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">VISITE NOSSO BLOG </span>
            <h2><span>Posts</span> Recentes</h2>
          </div>
        </div>

        <div class="row d-flex col-md-12">
          <?php 
          // args
          $my_args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'category_name' => 'Sem Categoria'
          );
          // query
          $my_query = new WP_Query ( $my_args );
          ?>

          <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry justify-content-end" style="heigth: 100% !important;">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')) ?>
              
                <div class="text p-4 float-right d-block">
                  <div class="d-flex align-items-center pt-2 mb-4">
                    <div class="one">
                      <span class="day"><?php the_time('j') ?></span>
                    </div>
                    <div class="two">
                      <span class="mos"><?php the_time('M') ?></span>
                      <span class="yr"><?php the_time('Y') ?></span>
                    </div>
                  </div>
                  <h3 class="heading mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark">Abrir</a>
                </div>
            </div>
        </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
    </div>
    </div>

        </section>
   	
<!-- Banner -->
            
<?php get_footer(); ?>