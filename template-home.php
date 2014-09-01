<?php
/*
Template Name: Home
*/
?>


<section class="cover"
data-top="background-position: 100% 0%"
data-top-bottom="background-position: 100% 100%"
>
	<div class="row">
		<div class="col__12">
			<div class="well well--large">
				<div class="col__12">

				<h1
				data-top="opacity: 0"
				data-16p-top="opacity: 1"
				>
				A Wordpress Starter theme with love
				</h1>

				<a href="/video/" class="btn btn--primary">Look! <i class="icon-arrow-right"></i></a>

			</div>
		</div>
	</div>
</section>



<section>

<?php //while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-template'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php //endwhile; ?>


	<div class="row">

	<?php 
			$this_post = $post->ID;
			$loop = new WP_Query( array( 
									'post_type' => 'cpt',
									'post__not_in' => array($this_post),
									'category_name' => '' 
									)); 
			?>	
	
		<dl>					
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		
			<dd class="icon-tick">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?></a>
			</dd>
					
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</dl>

	</div>
	
</section>