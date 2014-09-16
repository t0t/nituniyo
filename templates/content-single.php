<section>

  <?php if( get_field('content_posts') ): ?>
    <?php while( has_sub_field("content_posts") ): ?>




    <?php if(get_row_layout() == "image"): // Layout imagen ?>

    <div class="row">

        <figure>
            <img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("caption"); ?>">
            <figcaption><?php the_sub_field("caption"); ?></figcaption>
        </figure>

    </div>




  <?php elseif(get_row_layout() == "list"): // Layout lista ?>
                
<div class="row">

<?php

// check if the repeater field has rows of data
if( have_rows('lista') ):

    // loop through the rows of data
    while ( have_rows('lista') ) : the_row();
        ?>
        <dl class="col__4">
            <dt><?php the_sub_field('titulo'); ?></dt>
            <?php while(has_sub_field('item_repeater')): ?>  
                     
            <dd><i class="icon-tick"></i> <?php the_sub_field('item'); ?></dd>
                                    
            <?php endwhile; ?>
            </dl>
        <?
    endwhile;

else :

    // no rows found

endif;

?>
                
</div>



<?php elseif(get_row_layout() == "sub_heading"): // Layout lista ?>
    
    <h3><?php the_sub_field('subheading'); ?> </h3>



    

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

    <div class="row layout-contenido-estrecho">

        <div class="col__3">

            
             <h3 class="h1"><?php the_sub_field("title"); ?></h3>
                <h3><?php the_sub_field("description"); ?></h3>
            
                <?php
                $images = get_sub_field('gallery');
             
                if( $images ): ?>
            
                    <ul class="gallery">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <figure>
                                <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />
                                </a>
                                <figcaption><?php echo $image['caption']; ?></figcaption>
                                </figure>
                            </li>
                        <?php endforeach; ?>
                    </ul>
            
                <?php endif; ?>


            <?php while(has_sub_field('repeater')): ?>  
            <?php if (get_sub_field("imagen")): ?>
            <img src="<?php the_sub_field("imagen"); ?>" alt="">
            <?php endif ?>
            <?php if (get_sub_field("destacado")): ?>
            <small><?php the_sub_field("destacado"); ?></small>
            <?php endif ?>
            <?php endwhile; ?>
    
        </div>

        <div class="col__9">

        <?php if (get_sub_field("encabezado")): ?>
            <h3><?php the_sub_field("encabezado"); ?></h3>
        <?php endif ?>
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
            
                    <ul class="gallery">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <figure>
                                <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />
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
                <a href="/blog/">
                <i class="icon-house"></i>
                <?php //$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?>
                </a>
            </li>

            <li class="col__4">
            
            <?php

                $nextPost = get_next_post();

                if($nextPost) 
            {
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'mini', array('class' => 'img--circle'));  
                next_post_link('%link', "%title &rarr; $nextthumbnail"); 
            }
            ?>
            </li>
      </ul>

  </nav>

   <?php //wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?> <!-- navega entre un post de varias paginas -->

<?php endwhile; ?>

