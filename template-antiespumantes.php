<?php
/*
Template Name: Antiespumantes
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<section>

<?php echo do_shortcode( '[vegas id=1106 fade="2500" delay ="4500" overlay="/wp-content/themes/fkrquimica/assets/img/overlays/02.png" arrows="yes" autoplay="yes" poster="yes" random="yes"]' ); ?>

  <?php get_template_part('templates/content', 'page'); ?>
	
  <?php 
  $loop5 = new WP_Query( array( 
              'post_type' => 'cpt',
              'category_name' => 'antiespumantes' 
              )); 
  ?>


  <div class="jcarousel">
    <ul>
      <?php while ($loop5->have_posts()) : $loop5->the_post(); ?>
                
        <li>
        <? if ( has_post_thumbnail() ) { ?>
        
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="jcarousel__producto">
            <?php //the_post_thumbnail('medium'); ?>
            <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/hexagono_productos.svg" alt="t0theme" class="logo-img"> -->
                <h2 class="h1"><? the_title(); ?></h2>
            </a>

        <?}else {?>
        
        <?}?>
        </li>
        
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </ul>


  <!-- Prev/next controls -->
    <!-- <a href="#" class="jcarousel-control-prev btn btn--primary">
    <span class="icon-arrow-left"></span>
    </a>
    
    <a href="#" class="jcarousel-control-next btn btn--primary">
    <span class="icon-arrow-right"></span>
    </a> -->

  </div>




    </section>