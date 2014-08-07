

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <h3><?php the_field('h3'); ?></h3>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

	<?php //echo do_shortcode('[gallery link="file" columns="3"]'); ?>
	

    <?php
    $images = get_field('galeria');
 
    if( $images ): ?>

    <div id="carrusel2" class="jcarousel">
        <ul>
            <?php foreach( $images as $image ): ?>
                <li>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <footer>
                        <p class="descripcion-img">
                            <?php echo $image['caption']; ?>
                        </p>
                    </footer>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <!-- Prev/next controls -->
    <!-- Prev/next controls -->
    <a href="#" class="jcarousel-control-prev btn btn--slider">
    <span class="icon-arrow-left"></span></a>
    <a href="#" class="jcarousel-control-next btn btn--slider">
    <span class="icon-arrow-right"></span></a>

    <?php endif; 
    ?>
