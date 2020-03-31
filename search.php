<?php get_header(); ?>

<section class="ftco-section ftco-degree-bg mt-5">
      <div class="container">
        <div class="row">
                <div class="col-md-8 col-sm-12">

                    <?php 
                    // Se houver resultados exibe o conteúdo, se não exibe um formuládio de buscas
                    if (is_search()) :
                    $total_results = $wp_query->found_posts;
                    echo "<h3 class='mb-3'>" . sprintf( __('%s resultado(s) para "%s"','BS 4 + WP'), $total_results, get_search_query()) . "</h3>";
                    endif;
                    ?>

                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>

                    <?php else : 

                    echo "<p>😬Ops! Não encontrei o que está procurando. Que tal buscar por outra coisa? </p>";
                    get_search_form();  
                    endif; ?>

                    <div class="blog-pagination mb-5">
                    <?php next_posts_link( 'Mais antigos' ); ?> <?php previous_posts_link( 'Mais novos' ); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
                </section>

<?php get_footer(); ?>