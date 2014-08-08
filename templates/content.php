<article <?php post_class(); ?>>
	<div class="col__2">
		<?php if ( has_post_thumbnail()) : ?>

					<?php the_post_thumbnail('mini', array('class' => 'img--rounded')); ?>

				<?php endif; ?>
	</div>
	<div class="col__10"><footer>
			<?php get_template_part('templates/entry-meta'); ?>
		</footer>
	
		<header>
	
		<h1 class="entry-title">
	    	<a href="<?php the_permalink(); ?>">
	    		<?php the_title(); ?>
	    	</a>
	    </h1>
	
		</header></div>

	<div class="entry-summary"><?php //the_excerpt(); ?></div>

</article>