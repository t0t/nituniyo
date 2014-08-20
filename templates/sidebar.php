<?php if ( is_singular('cpt') ) :  ?>
  
	


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