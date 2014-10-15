<?php
/*
Template Name: Home
*/
?>


<section>

<h1 class="page-header" data-top="display:block" data--50-top="display:none">CUATRO DÉCADAS APORTANDO SOLUCIONES</h1>

<?php //while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-template'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php //endwhile; ?>

</section>