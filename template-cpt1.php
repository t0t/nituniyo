<?php
/*
Template Name: CPT
*/
?>

<?php get_template_part('templates/page', 'header'); ?>


<?php //while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
	<section>
	<?php get_template_part('templates/content', 'page'); ?>
	<?php get_template_part('templates/content', 'page-template'); ?>
	</section>
<?php //endwhile; ?>


<section>

	<?php 
		$this_post = $post->ID;
		$loop = new WP_Query( array( 
								'post_type' => 'cpt',
								'post__not_in' => array($this_post),
								'category_name' => '' 
								)); 
		?>	

	<dl>
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


<section>

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
				<?php the_post_thumbnail('medium'); ?>
				</a>
				<?}else {?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Alt" class="logo-img">
				<?}?>
				<h3>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><? the_title(); ?></a>
				</h3>
				<?php //the_excerpt(); ?>
			</li>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</ul>

	</div>

	<!-- Prev/next controls -->
	<a href="#" class="btn btn--slider jcarousel-control-prev">
	<i class="icon-arrow-left"></i></a>
	<a href="#" class="btn btn--slider jcarousel-control-next">
	<i class="icon-arrow-right"></i></a>

</section>
