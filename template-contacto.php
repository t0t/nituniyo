<?php
/*
Template Name: Contacto
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="col__6">
	<!-- http://wphostreviews.com/mappress-documentation -->
	<?php echo do_shortcode('[mappress mapid="1" width="100%"]'); ?>
</div>

<div class="col__6">
	<!-- formularios de contacto -->
	<?php echo do_shortcode('[contact-form-7 id="46" title="Formulario de contacto 1"]'); ?>
</div>


<?php //echo do_shortcode('[child-pages depth="1"]' ); ?>