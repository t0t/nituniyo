<?php
/*
Template Name: Blog
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


	<?php //while (have_posts()) : the_post(); ?>
	<?php //get_template_part('templates/page', 'header'); ?>

	<section>

  		<?php get_template_part('templates/content', 'page-template'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

	</section>

	<?php //endwhile; ?>


<section>
	<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'post',
							'posts_per_page' => '',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>

	<div class="jcarousel">

		<ul>
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
									
				<li>

				<? if ( has_post_thumbnail() ) { ?>
					
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('thumbnail'); ?>
				</a>
					
				<?}else {?>
					
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Nanos i Gegants" class="logo-img">
					<?}?>

					<h3>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><? the_title(); ?></a>
					</h3>
					<p><?php //the_excerpt(); ?></p>

				</li>
					
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</ul>

	</div> <!-- /carrousel -->

		<!-- Prev/next controls -->
		<a href="#" class="btn btn--slider jcarousel-control-prev">
		<i class="icon-arrow-left"></i></a>
		<a href="#" class="btn btn--slider jcarousel-control-next">
		<i class="icon-arrow-right"></i></a>

</section>



<section>

	<?php 
	$this_post = $post->ID;
	$loop2 = new WP_Query( array( 
				'post_type' => 'post',
				'posts_per_page' => '',
				'post__not_in' => array($this_post),
				'category_name' => '' 
				)); 
	?>
	
	<!-- Listado de posts -->

	<?php while ($loop2->have_posts()) : $loop2->the_post(); ?>

	<article class="h-entry row">

		<div id="entrada" class="entry-content">

			<figure>

			<? if ( has_post_thumbnail() ) { ?>
							
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('medium', array('class' => 'img--rounded')); ?>
				</a>
											
			<?}else {?>
				
				<!-- Cargame esta imagen por defecto -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Alt" class="logo-img" height="155px">
			
			<?}?>
			
			</figure>

				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><? the_title(); ?>
					</a>
				</h1>
			
			<a href="<?php the_permalink(); ?>" class="btn btn--primary">Look! <i class="icon-arrow-right"></i></a>

		</div>

	</article>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</section>
