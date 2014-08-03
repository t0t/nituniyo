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


<div class="row">
	<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'post',
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

	</div>

		<!-- Prev/next controls -->
		<a href="#" class="jcarousel-control-prev">
		<span class="icon-arrow-left"></span></a>
		<a href="#" class="jcarousel-control-next">
		<span class="icon-arrow-right"></span></a>
</div>




<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
