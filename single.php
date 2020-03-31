<?php get_header(); ?>

<section class="ftco-section ftco-degree-bg mt-5">
      <div class="container">
        <div class="row">
                <div class="col-md-8 col-sm-12">

                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                        <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>

                    <?php else : get_404_template();  endif; ?>

                </div>

                <?php get_sidebar(); ?>

            </div>    
        </div>
</section>

<?php get_footer(); ?>