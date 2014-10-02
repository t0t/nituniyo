<?php get_template_part('templates/page', 'header'); ?>

<h3><?php echo category_description(); ?></h3>

<section>


<?php if( get_field('content') ): ?>
    <?php while( has_sub_field("content") ): ?>


    <?php if(get_row_layout() == "image"): // Layout imagen ?>

    <div class="row">

        <figure>
            <img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("caption"); ?>">
            <figcaption><?php the_sub_field("caption"); ?></figcaption>
        </figure>
    </div>





<?php elseif(get_row_layout() == "image_banner"): // Layout imagen ideal alargado ?>

<figure class="image-banner">
    <img src="<?php the_sub_field("image"); ?>" alt="imagen">
</figure>






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




    <?php elseif(get_row_layout() == "video_layout"): // Layout Videos ?>

    <?php if(get_sub_field('videos')): ?>
    <?php while(has_sub_field('videos')): ?>  

    <div class="row">

            <?php //if (get_sub_field("video")): ?>
            <?php the_sub_field("video"); ?>
            <?php //endif ?>

            <?php if (get_sub_field("descripcion")): ?>
            <p><?php the_sub_field("descripcion"); ?></p>
            <?php endif ?>

    </div>
    
    <?php endwhile; ?>
    <?php endif; ?> 



    

    <?php elseif(get_row_layout() == "list"): // Layout lista ?>
                

    <?php

    // check if the repeater field has rows of data
    if( have_rows('lista') ):
        // loop through the rows of data
        while ( have_rows('lista') ) : the_row();
            ?>
            <dl class="col__4">
                <dt>xxx<?php the_sub_field('titulo'); ?></dt>
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
                





    <?php elseif(get_row_layout() == "quote"): //Layout Quotes?>

    <div class="row">
        <div class="col__12">
            <blockquote>
            <p><?php the_sub_field("quote"); ?></p>
            <small><?php the_sub_field("name"); ?></small>
            </blockquote>
        </div>
    </div>





    <?php elseif(get_row_layout() == "img_carrousel"): //Layout Carrusel ?>

    <div class="row">

        <h3 class="h1"><?php the_sub_field("title"); ?></h3>
        <h3><?php the_sub_field("description"); ?></h3>
    
        <?php
        $images = get_sub_field('gallery');
     
        if( $images ): ?>
        <div class="jcarousel">
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li class="">
                        <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <footer>
                            <small class="descripcion-img">
                                <?php echo $image['caption']; ?>
                            </small>
                        </footer>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <!-- Prev/next controls -->
    <a href="#" class="btn btn--slider jcarousel-control-prev">
    <i class="icon-arrow-left"></i></a>
    <a href="#" class="btn btn--slider jcarousel-control-next">
    <i class="icon-arrow-right"></i></a>
        <?php endif; ?>
    </div>





<?php elseif(get_row_layout() == "posts_carrousel"): //Layout Carrusel ?>

    <div class="row">

        <h3 class="h1"><?php the_sub_field("title"); ?></h3>
        <h3><?php the_sub_field("description"); ?></h3>

        <?php if(get_sub_field("repeater")): ?>
        <?php while(has_sub_field("repeater")): ?>  
            
            <?php $post_objects = the_sub_field('post_item');

            if( $post_objects ): ?>
                <ul>
                <?php foreach( $post_objects as $post_object): ?>
                    <li>
                        <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
                        <span>Post Object Custom Field: <?php the_field('post_item', $post_object->ID); ?></span>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif;?>

        <?php endwhile; ?>
        <?php endif; ?>


    </div>



<?php elseif(get_row_layout() == "layout_content"): //Layout Content centrado estrecho?>

    <div id="layout-content" class="layout-content">
  
    <?php if (get_sub_field("encabezado")): ?>
        <h3><?php the_sub_field("encabezado"); ?></h3>
    <?php endif ?>
    
    <?php the_sub_field("content"); ?>


  <?php
                $images = get_sub_field('gallery');
             
                if( $images ): ?>
            
                    <ul class="gallery">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <figure>
                                <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="" />
                                </a>
                                <figcaption><?php echo $image['caption']; ?></figcaption>
                                </figure>
                            </li>
                        <?php endforeach; ?>
                    </ul>
            
                <?php endif; ?>

    </div>




       <?php elseif(get_row_layout() == "layout_content_estrecho"): //Layout Content centrado estrecho?>

    <div class="layout-contenido-estrecho">
            
                <?php
                $images = get_sub_field('gallery');
             
                if( $images ): ?>
            
                    <ul class="gallery">
                        <?php foreach( $images as $image ): ?>
                            <li class="gallery__item">
                                <figure>
                                
                                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="" />
                                <figcaption><?php echo $image['caption']; ?></figcaption>
                                </figure>
                            </li>
                        <?php endforeach; ?>
                    </ul>
            
                <?php endif; ?>
    

        <div class="parrafo">

            <?php if (get_sub_field("encabezado")): ?>
                <h3><?php the_sub_field("encabezado"); ?></h3>
            <?php endif ?>
            
            <?php the_sub_field("content"); ?>

            <!-- adjuntar archivos -->
            <?php if( get_field('ficha_tecnica') ): ?>
                <a href="<?php the_field('ficha_tecnica'); ?>" target="_blank" class="btn btn--primary">
                <i class="icon-download"> </i>Ficha técnica</a>
            <?php endif; ?>

            <?php if( get_field('datos_seguridad') ): ?>
                <a href="<?php the_field('datos_seguridad'); ?>" target="_blank" class="datos_seguridad btn btn--primary"><i class="icon-attachment"> </i>Ficha datos de seguridad</a>
            <?php endif; ?>

        </div> <!-- parrafo -->


</div> <!-- contenido estrecho -->







<?php elseif(get_row_layout() == "link_de_pagina"): //Boton muestra?>

   








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








<?php



$loop5 = new WP_Query( array( 
              'post_type' => 'cpt',
              'category_name' => 'antiazulado' 
              )); 

?>

  <div class="jcarousel">
    <ul>
      <?php while ($loop5->have_posts()) : $loop5->the_post(); ?>
                
        <li>
        <? if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('medium'); ?>
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

    </section>

