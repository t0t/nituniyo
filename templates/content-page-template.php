<?php if( get_field('content_template_pages') ): ?>

     <?php while( has_sub_field("content_template_pages") ): ?>



        <?php if(get_row_layout() == "video"): // Layout Videos ?>

            <?php if(get_sub_field('video_repeater')): ?>
            <?php while(has_sub_field('video_repeater')): ?>  

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








    <?php elseif(get_row_layout() == "sub_heading"): // Layout lista ?>
    
    <h3><?php the_sub_field('subheading'); ?>subheading</h3>






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
     






<?php elseif(get_row_layout() == "layout_content"): //Layout Content ?>

    <div id="layout-content" class="layout-content">
    
    <?php if (get_sub_field("encabezado")): ?>
        <h2><?php the_sub_field("encabezado"); ?></h2>
    <?php endif ?>

    <?php

    // check if the repeater field has rows of data
    if( have_rows('content') ):

        // loop through the rows of data
        while ( have_rows('content') ) : the_row();

            // display a sub field value
            ?>
            
            <h3><?php the_sub_field('encabezado'); ?></h3>
            <?php the_sub_field('content'); ?>
            <div class="parrafo__btn"><!-- adjuntar archivos -->
                        <?php if( get_field('ficha_tecnica') ): ?>
                            <a href="<?php the_field('ficha_tecnica'); ?>" target="_blank" class="btn btn--primary">
                            <i class="icon-download"> </i>Ficha técnica</a>
                        <?php endif; ?>
            
                        <?php if( get_field('datos_seguridad') ): ?>
                            <a href="<?php the_field('datos_seguridad'); ?>" target="_blank" class="datos_seguridad btn btn--primary"><i class="icon-download"> </i>Ficha datos de seguridad</a>
                        <?php endif; ?></div>

            <?

        endwhile;

    else :

        // no rows found

    endif;

    ?>

    </div>




 


        <?php elseif(get_row_layout() == "quote"): //Layout Quotes?>

            <div class="row">
                <div class="col__12">
                    <blockquote>
                    <p><?php the_sub_field("quote"); ?></p>
                    <small><?php the_sub_field("autor"); ?></small>
                    </blockquote>
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




        <?php endif; ?> 
 
    <?php endwhile; ?>

 <?php endif; ?>