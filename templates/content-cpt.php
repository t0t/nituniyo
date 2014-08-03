<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php //get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-content">
		<?php the_content(); ?>
    </div>

    <footer>
		<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>



<div class="row">

	<h3>Más productos:</h3>
	<?php 
	$this_post = $post->ID;
	$loop5 = new WP_Query( array( 
							'post_type' => 'cpt',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>


	<div class="jcarousel">
		<ul>
			<?php while ($loop5->have_posts()) : $loop5->the_post(); ?>
								
				<li>
				<? if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('thumbnail'); ?>
				</a>
				<?}else {?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="t0theme" class="logo-img">
				<?}?>

						<h3>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<? the_title(); ?>
								</a>
						</h3>
				</li>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</ul>

	</div>

		<!-- Prev/next controls -->

		<a href="#" class="jcarousel-control-prev">
				<span class="icon-arrow-left"></span>
		</a>
		<a href="#" class="jcarousel-control-next">
				<span class="icon-arrow-right"></span>
		</a>
</div>




<!-- borrar si no lo uso -->
				<?php if ( get_field('imagen') ) {?>

					<?php $attachment_id = get_field('imagen');
					$size = "thumbnail";
					$image = wp_get_attachment_image_src( $attachment_id, $size );
					?>
					<img src="<?php echo $image[0]; ?>" class="img-rounded">

				<?php }?>

				<?php if ( has_post_thumbnail()) : ?>

					<?php //the_post_thumbnail('thumbnail', array('class' => 'img-rounded')); ?>

				<?php endif; ?>