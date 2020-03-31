<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>  

                

              
                    
               
                
                

            <?php endwhile; ?>

            <?php else : get_404_template();  endif; ?>


<section class="" data-stellar-background-ratio="0.5">
<?php the_post_thumbnail('post-thumbnail', array('class' => ' container-fluid img-fluid rounded px-0', 'data-stellar-background-ratio'=>'0.5')); ?>
      <div class="overlay"></div>
      
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
		  <div class="row">
			<div class="col-md-12 col-sm-12 py-2">
				<div class="row">


					<?php 
					// args
					$my_args = array(
					'post_type' => 'post',
					'posts_per_page' => 50,
					'category_name' => 'cursos'
					);
					// query
					$my_query = new WP_Query ( $my_args );
					?>

					<?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>

            <div class="col-md-4 col-sm-6 py-3">

			<div class="card pt-0 h-100">
							<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')) ?>
							<div class="card-body">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text"><?php the_content(); ?></p>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Saiba mais</a>
							</div>
							</div>

            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

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

<?php get_footer(); ?>