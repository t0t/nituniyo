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

    <nav class="post--nav">  
    
        <ul class="pager row">
        
            <li class="previous col__4">
                <?php 
                $previousPost = get_previous_post(true); 
                $previousthumbnail = get_the_post_thumbnail($previousPost->ID, 'mini', array('class' => 'img--rounded') ); echo $previousthumbnail; 
                ?>
                <?php 
                previous_post_link( '%link', '&larr; %title' );
                ?>
            </li>

            <li class="col__4">
                <a href="/home-cpt/">
				&curren; <?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?></a>
            </li>
            
            <li class="next col__4">

                <?php 
                $nextPost = get_next_post(true); 
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'mini', array('class' => 'img--rounded') ); echo $nextthumbnail; 
                ?>
                <?php 
                next_post_link( '%link', '%title &rarr;' );
                ?>

                <?php //if ( has_post_thumbnail()) : ?>
                <?php //endif; ?>

            </li>
      </ul>

  </nav>

   <?php //wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?> <!-- navega entre un post de varias paginas -->

    </footer>
  </article>
<?php endwhile; ?>

<hr>

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
    <a href="#" class="jcarousel-control-prev btn btn--slider">
    <span class="icon-arrow-left"></span></a>
    <a href="#" class="jcarousel-control-next btn btn--slider">
    <span class="icon-arrow-right"></span></a>

</div>
