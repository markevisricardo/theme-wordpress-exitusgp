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
				<div class="container text-white">
				<div class="row d-flex justify-content-center  ">

					<?php the_content(); ?>
					
				</div>
				</div>
			</div>
    </section>
<section class="ftco-section contact-section">
      <div class="container">
                 
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
          <form action="<?php bloginfo('template_url'); ?>/mail.php" method="post" class=" contact-form">
              <div class="form-group">
                <input type="text" name="nome" id="name" class="form-control" placeholder="Digite seu nome">
              </div>
              <div class="form-group">
                <input type="text" name="email" id="email"  class="form-control" placeholder="Informe seu e-mail">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="assunto" id="subject" placeholder="Assunto">
              </div>
              <div class="form-group">
                <textarea name="mensagem" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="BTEnvia" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          <iframe id="map" class="bg-white" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3481.581488517213!2d-51.15716498490367!3d-29.235862282183714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ebae1338dbc53%3A0x36ab856bfe865b67!2sR.%20Jos%C3%A9%20Berno%2C%2033%20-%20Gal%C3%B3polis%2C%20Caxias%20do%20Sul%20-%20RS%2C%2095090-160!5e0!3m2!1spt-BR!2sbr!4v1575932544908!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          </div>
        </div>
      </div>
    </section>
 	
<?php get_footer(); ?>


