<?php
/*
Template Name: CPT1 Productos
*/
?>
<section class="bg2">
	<div class="well--large">
		<?php get_template_part('templates/page', 'header'); ?>
		<h2>
			<?php the_field('h3'); ?>
		</h2>
	</div>
	<a href="/home-cpt/" class="btn btn--primary"> <i class="icon-code"></i></a>
</section>

<?php get_template_part('templates/content', 'homeproductos'); ?>

<?php //get_template_part('templates/content', 'cpt-tienda'); ?>