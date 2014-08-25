<header>
    <h1 class="entry-title"><?php the_title(); ?></h2>
    <?php get_template_part('templates/entry-meta'); ?>
</header>


<section>
  <?php if( get_field('content') ): ?>

    <?php while( has_sub_field("content") ): ?>

        <?php if(get_row_layout() == "image"): // layout: Text ?>
            <div class="col__12">
                <img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("caption"); ?>">
                <small><?php the_sub_field("caption"); ?></small>
            </div>



    <?php elseif(get_row_layout() == "parrafos"): // layout:Parrafos ?>



    <?php if(get_sub_field('repeater_parrafos')): ?>

    <div class="row">

        <?php while(has_sub_field('repeater_parrafos')): ?>
             

        <?php if (get_sub_field("1parrafo")): ?>
            
        <h1><?php the_sub_field("1parrafo"); ?></h1>
        
        <?php endif ?>

        <?php if (get_sub_field("2parrafos")): ?>
        <div class="col__6">
        <p><?php the_sub_field("2parrafos"); ?></p>
        </div>
        <?php endif ?>

        <?php if (get_sub_field("2parrafos_2")): ?>
        <div class="col__6">
        <p><?php the_sub_field("2parrafos_2"); ?></p>
        </div>
        <?php endif ?>

    
        <?php endwhile; ?>

    </div>

    <?php endif; ?> 


    











        <?php elseif(get_row_layout() == "gallery"): // layout: Gallery ?>

           <div><?php the_sub_field("title"); ?></div>
<?php
    $images = the_sub_field('gallery');
 
    if( $images ): ?>

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

    <?php endif; 
    ?>
            </div>
            <div><?php the_sub_field("description"); ?></div>


        <?php elseif(get_row_layout() == "featured_posts"): // layout: Featured Posts ?>

            <div>
                <h2><?php the_sub_field("title"); ?></h2>
                <?php the_sub_field("content"); ?>

                <?php if(get_sub_field("posts")): ?>
                    <ul>
                    <?php foreach(get_sub_field("posts") as $p): ?>
                        <li><a href="<?php echo get_permalink($p->ID); ?>"><?php echo get_the_title($p->ID); ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>
</section>


<section>

<?php while (have_posts()) : the_post(); ?>
  
  <article <?php post_class(); ?>>
    
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