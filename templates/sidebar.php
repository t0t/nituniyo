<?php //if ( is_singular('cpt') ) :  ?>
<? //else: ?>

<!-- dynamic_sidebar('sidebar-primary');  -->
<? //endif; ?>


<section class="bg1">
	<div class="col__4">
		<h3>Pages</h3>
		<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'page',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>

			<dd class="icon-tick">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?></a>
			</dd>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	</div>
	<div class="col__4">
		<h3><?php _e('More', 'roots'); ?> 
    <?php 
$post_type = get_post_type_object( get_post_type($post) );
echo $post_type->label;
?></h3>
		<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => 'cpt',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<? if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('mini'); ?>
				</a>
				<?}else {?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Alt" class="logo-img">
				<?}?>
				<h3>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<? the_title(); ?></a>
				</h3>									
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
	</div>
	
	<div class="col__4">
	<h3>Blog</h3>
	<?php 
	$this_post = $post->ID;
	$loop = new WP_Query( array( 
							'post_type' => '',
							'post__not_in' => array($this_post),
							'category_name' => '' 
							)); 
	?>
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>

			<dd class="icon-tick">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?></a>
			</dd>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

	<h3>Categorías</h3>
	<ul>
		<?php wp_list_categories('title_li'); ?>
	</ul>
	</div>
</section>





<!-- borrar si no lo uso -->
	<?php if ( get_field('imagen') ) {?>

	<?php $attachment_id = get_field('imagen');
		$size = "thumbnail";
		$image = wp_get_attachment_image_src( $attachment_id, $size );?>

	<img src="<?php echo $image[0]; ?>" class="img-rounded">

	<?php }?>

	<?php if ( has_post_thumbnail()) : ?>

		<?php //the_post_thumbnail('thumbnail', array('class' => 'img-rounded')); ?>

	<?php endif; ?>