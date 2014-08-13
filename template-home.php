<?php
/*
Template Name: Home
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

<div class="row">
	<div class="col__12">
		<div class="well well--large">
			<h1>A Wordpress Starter theme with love</h1>
			<a href="/video/" class="btn btn--primary">Look! <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>

<section class="row">

	<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'cpt',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>	
		<dl class="col__4">
			<dt>Titulo de un definition list</dt>
			<dd class="icon-tick"> Descripcion A</dd>
			<dd class="icon-tick"> Descripcion B</dd>
			<dt>Titulo de un definition list</dt>
			<dd class="icon-tick"> Descripcion D</dd>
		</dl>
			
		<dl class="col__4">
			<dt>Titulo de un definition list</dt>
			<dd class="icon-tick"> Descripcion A</dd>
			<dd class="icon-tick"> Descripcion B</dd>
			<dt>Titulo de un definition list</dt>
			<dd class="icon-tick"> Descripcion D</dd>
		</dl>
	
		<dl class="col__4">
		<dt>Listado de <?php the_title() ?></dt>
			
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>

			<dd class="icon-tick">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?></a>
			</dd>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</dl>

</section>