<header>
    <h1 class="entry-title"><?php the_title(); ?></h2>
    <?php get_template_part('templates/entry-meta'); ?>
</header>



<section id="content">

  <?php if( get_field('content') ): ?>
    <?php while( has_sub_field("content") ): ?>

    <?php if(get_row_layout() == "image"): // Layout imagen ?>

    <div class="row">
        <figure>
            <img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("caption"); ?>">
            <figcaption><?php the_sub_field("caption"); ?></figcaption>
        </figure>
    </div>




    <?php elseif(get_row_layout() == "listas_layout"): // Layout Listas ?>

    <?php if(get_sub_field('listas')): ?>
    <dl class="col__4">

    <dt><?php the_sub_field('titulo'); ?></dt>

    <?php while(has_sub_field('listas')): ?>  

        <?php //if (get_sub_field('lista')): ?>
            <dd><i class="icon-tick"></i> <?php the_sub_field('lista'); ?></dd>
        <?php //endif ?>
    
    <?php endwhile; ?>

    </dl>
    <?php endif; ?> 




    <?php elseif(get_row_layout() == "parrafos"): // Layout parrafos ?>

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


    <?php elseif(get_row_layout() == "quote"): //Layout Quotes?>

    <div class="row">
        <div class="col__12">
            <blockquote>
            <p><?php the_sub_field("quote"); ?></p>
            <small><?php the_sub_field("name"); ?></small>
            </blockquote>
        </div>
    </div>



    <?php elseif(get_row_layout() == "layout_content_estrecho"): //Layout Content centrado estrecho?>

    <div class="row">
        <div class="col__3">
            <?php while(has_sub_field('repeater')): ?>  

            <?php if (get_sub_field("destacado")): ?>
            <h3 class="h1"><?php the_sub_field("destacado"); ?></h3>
            <?php endif ?>

            <?php if (get_sub_field("imagen")): ?>
            <img src="<?php the_sub_field("imagen"); ?>" alt="">
            <?php endif ?>
    
        <?php endwhile; ?>
        </div>
        <div class="col__9">
            <?php the_sub_field("content"); ?>
        </div>
    </div>


    <?php elseif(get_row_layout() == "gallery"): //Layout Gallery ?>

    <div class="row">
        <h3 class="h1"><?php the_sub_field("title"); ?></h3>
        <h3><?php the_sub_field("description"); ?></h3>
    
        <?php
        $images = get_sub_field('gallery');
     
        if( $images ): ?>
    
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li class="col__3">
                        <figure>
                        <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <figcaption><?php echo $image['caption']; ?></figcaption>
                        </figure>
                    </li>
                <?php endforeach; ?>
            </ul>
    
        <?php endif; ?>
    </div>

    <?php //elseif(get_row_layout() == "featured_posts"): ?>

    <?php endif; ?>
    <?php endwhile; ?>

<?php endif; ?>

</section> <!-- #/content -->






<!-- Post nav -->
<?php //post_class(); ?>
<?php while (have_posts()) : the_post(); ?>

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

<?php endwhile; ?>

