<section><?php while (have_posts()) : the_post(); ?>
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
                
                $prevPost = get_previous_post();
                
                if($prevPost) 
            {
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'mini', array('class' => 'img--rounded') );
                previous_post_link('%link', "$prevthumbnail &larr; %title"); 
            } 
            ?>
            </li>

             <li class="col__4">
                <a href="/home-cpt/">
                &curren; <?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?></a>
            </li>

            <li class="col__4">
            
            <?php

                $nextPost = get_next_post();

                if($nextPost) 
            {
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'mini', array('class' => 'img--rounded'));  
                next_post_link('%link', "$nextthumbnail &rarr; %title"); 
            }
            ?>
            </li>
      </ul>

  </nav>

   <?php //wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?> <!-- navega entre un post de varias paginas -->

    </footer>

    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
</section>