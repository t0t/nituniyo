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





    <?php elseif(get_row_layout() == "quote"): //Layout Quotes ?>

    <div class="row">
        <div class="col__12">
            <blockquote><?php the_sub_field("quote"); ?>
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
                    <li class="col__3">
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
        <?php endif; ?>
    </div>




<?php elseif(get_row_layout() == "posts_carrousel"): //Layout Carrusel ?>

    <div id="carrusel" class="row">

        <h3 class="h1"><?php the_sub_field("title"); ?></h3>
        <h3><?php the_sub_field("description"); ?></h3>
        

        <?php if(get_sub_field("repeater")): ?>
        <?php while(has_sub_field("repeater")): ?>  

			<?php //the_sub_field("post") ?>
			
			<?php $post_objects = the_sub_field('post');

			if( $post_objects ): ?>
			    <ul>
			    <?php foreach( $post_objects as $post_object): ?>
			        <li>
			            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
			            <span>Post Object Custom Field: <?php the_field('post', $post_object->ID); ?></span>
			        </li>
			    <?php endforeach; ?>
			    </ul>
			<?php endif;?>

		<?php endwhile; ?>
		<?php endif; ?>

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
                        <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <footer>
                            <small class="descripcion-img">
                                <?php echo $image['caption']; ?>
                            </small>
                        </footer>
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

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>