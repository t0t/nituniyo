<article <?php post_class(); ?>>

	<div class="row">
	
	<header>
	
		<h1 class="entry-title">
	    	<a href="<?php the_permalink(); ?>">
	    		<?php the_title(); ?>
	    	</a>
	    </h1>
	    <h3><?php get_template_part('templates/entry-meta'); ?></h3>
	
	</header>

		<?php if ( has_post_thumbnail()) : ?>

			<?php the_post_thumbnail('medium', array('class' => 'img--rounded')); ?>

		<?php endif; ?>
	</div>

	<div class="entry-summary"><?php the_excerpt(); ?></div>

</article>