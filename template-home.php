<?php
/*
Template Name: Home
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

<section class="cover"
	data-top-bottom="background-position: center -700px"
	data-top="background-position: center 0px"
>
	<div class="row">
		<div class="col__12">
			<div class="well well--large">
				<div class="class="col__12"">
				<h1
				data-top-bottom="opacity: 0"
				data--500-bottom-top="opacity: 1"
				>
				A Wordpress Starter theme with love
				</h1>
				</div>
				<div class="col__12">
				<a href="/video/" class="btn btn--primary">Look! <i class="icon-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<div class="row">

	<?php 
		$this_post = $post->ID;
		$loop = new WP_Query( array( 
								'post_type' => 'cpt',
								'post__not_in' => array($this_post),
								'category_name' => '' 
								)); 
		?>	
			<dl class="col__4"
			data-bottom="opacity: 0; transform: scale(0.5w)"
			data--80-bottom="opacity: 1; transform: scale(1)"
			>
				<dt>Listado de <?php the_title() ?></dt>
				
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	
				<dd class="icon-tick">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?></a>
				</dd>
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</dl>
	
			<dl class="col__4"
			data-bottom="opacity: 0; transform: scale(0.5)"
			data--80-bottom="opacity: 1; transform: scale(1)"
			>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion A</dd>
				<dd class="icon-tick"> Descripcion B</dd>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion D</dd>
			</dl>
				
			<dl class="col__4"
			data--80-bottom="opacity: 0; transform: scale(0.5)"
			data--160-bottom="opacity: 1; transform: scale(1)"
			>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion A</dd>
				<dd class="icon-tick"> Descripcion B</dd>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion D</dd>
			</dl>
	
			</div>

</section>