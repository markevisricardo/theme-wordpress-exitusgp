<!-- ==== Bootstrap 4 Carousel w/ Wordpress ==== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

<!-- Carousel Indicators -->

    <ol class="carousel-indicators">

    <!-- 
    1. Checks if ACF repeater row for carousel exists 
    2. Initialize counter as $i = 0
    -->
    <?php if( have_rows( 'carousel' ) ): $i = 0; ?>

    <!-- While ACF fields for carousel exist... -->
      <?php while( have_rows( 'carousel' ) ): the_row();  ?>

          <!-- Counter keeps track of what slide you're on -->
        <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php if( $i == 0 ):?>active<?php endif; ?>">
        </li>

        <!-- 
        1. Add counter $i increment
        2. End if / while loop 
        -->
         <?php $i++; endwhile; ?><?php endif;?>

      </ol>


  <!-- Carousel Slides -->

      <div class="carousel-inner" role="listbox">


        <!-- Repeats same if / while loop performed for carousel indicators -->

        <?php if( have_rows( 'carousel' ) ): $i = 0; ?>

          <?php while( have_rows( 'carousel' ) ): the_row();  ?>

          <!-- If counter var $i value equals 0, add class active -->
        <div class="carousel-item <?php if( $i == 0 ):?>active<?php endif; ?>">

          <img class="d-block w-100 carousel-img" src="<?php the_sub_field( 'carousel_image' ) ?>">

            <div class="carousel-caption">

                <!-- I called my ACF carousel subfield caption to display info for the slide -->

                <?php if( get_sub_field('caption') ): ?>

                <p class="caption-text"><?php the_sub_field( 'caption' ); ?></p>

                <?php endif; ?>

             </div>

        </div>


          <?php $i++; endwhile; ?>

          <?php endif; ?>

      </div>


      <!-- Bootstrap 4 carousel controls are fine as is -->

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>



</div>