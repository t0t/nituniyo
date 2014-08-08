<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <p><?php the_content(); ?></p>
    </div>

    <footer>

    <nav class="post--nav">  
    
        <ul class="pager row">
        
            <li class="previous col__4">
                <?php 
                $previousPost = get_previous_post(true); 
                $previousThumbnail = get_the_post_thumbnail($previousPost->ID, 'mini', array('class' => 'img--rounded') ); echo $previousthumbnail; 
                ?>
                <?php 
                previous_post_link( '%link', $previousThumbnail ); 
                previous_post_link( '%link', '&larr; %title' );
                ?>
            </li>

            <li class="col__4">
                <!-- <i class="icon-arrow-left"></i> -->
                <a href="/blog/">&curren;
                <?php //echo single_cat_title(); ?> <!-- a Entradas -->
                <?php //$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?>
                </a>
            </li>
            
            <li class="next col__4">

                <?php 
                $nextPost = get_next_post(true); 
                $nextThumbnail = get_the_post_thumbnail($nextPost->ID, 'mini', array('class' => 'img--rounded') ); echo $nextthumbnail; 
                ?>
                <?php 
                next_post_link( '%link', $nextThumbnail ); 
                next_post_link( '%link', '%title &rarr;' );
                ?>

                <?php //if ( has_post_thumbnail()) : ?>
                <?php //endif; ?>

            </li>
      </ul>

  </nav>

   <?php //wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?> <!-- navega entre un post de varias paginas -->

    </footer>

    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
