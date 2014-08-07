<?php if ( is_singular('cpt') ) :  ?>
  
	<h3>Productos</h3>
	
	<ul>
			
	<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'cpt',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>
	
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>

			<li class="icon-tick">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?></a>
			</li>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

	</ul>


<? else: 

dynamic_sidebar('sidebar-primary'); 

endif; ?>



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