<?php get_header(); ?>
<section class="ftco-section ftco-degree-bg mt-5">
      <div class="container">
        <div class="row">
                <div class="col-md-8 col-sm-12">

                    <?php if ( have_posts() ) : query_posts($query_string .'&cat=-5, -6, -7'); while ( have_posts() ) : the_post(); ?> <!-- $query_posts está ocultando as categorias relacionadas do loop.  -->
                    <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>

                    <?php else : get_404_template();  endif; ?>

                    <div class="blog-pagination mb-5">
                        <?php next_posts_link( 'Mais antigos' ); ?> <?php previous_posts_link( 'Mais novos' ); ?>
                    </div>

                </div>

                <?php get_sidebar(); ?>

            </div>
        </div>
</section>
<?php get_footer(); ?>


