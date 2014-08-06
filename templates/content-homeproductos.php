<div class="row">
	<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'cpt',
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
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<? the_title(); ?></a>
					</h3>
					<p><?php //the_excerpt(); ?></p>
					
				</li>
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

		</ul>

	</div>

	<!-- Prev/next controls -->
	<a href="#" class="btn btn--info jcarousel-control-prev">
	<i class="icon-arrow-left"></i></a>
	<a href="#" class="btn btn--info jcarousel-control-next">
	<i class="icon-arrow-right"></i></a>


</div>