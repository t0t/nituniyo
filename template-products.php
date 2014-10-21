<?php
/*
Template Name: Productos
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php //while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page-home-products'); ?>
<?php get_template_part('templates/content', 'page-template'); ?>
<?php echo do_shortcode( '[vegas id=1114 fade="2500" delay ="4500" overlay="/wp-content/themes/fkrquimica/assets/img/overlays/02.png" arrows="yes" autoplay="yes" poster="yes" random="yes"]' ); ?>
<?php //endwhile; ?>

<!-- Vegas -->
<?php the_field("content_editor"); ?>