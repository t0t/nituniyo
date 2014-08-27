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

			<div class="entry-summary">
		
			<h2><?php the_field('h3'); ?></h2>
			<small><?php get_template_part('templates/entry-meta'); ?></small>
			
			</div>

		</div>

	</article>

