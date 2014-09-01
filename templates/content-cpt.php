<section class="bg1">
<?php if( get_field('content_cpt') ): ?>

     <?php while( has_sub_field("content_cpt") ): ?>



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



<?php elseif(get_row_layout() == "sub_heading"): // Layout lista ?>
    
    <h3><?php the_sub_field('subheading'); ?> </h3>


    

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
     
 


<?php elseif(get_row_layout() == "image"): // Imagen grande ?>

    <div class="row">

        <figure>

            <img src="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("caption"); ?>">
            <figcaption><?php the_sub_field("caption"); ?></figcaption>
            
        </figure>

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






    <?php elseif(get_row_layout() == "layout_content_estrecho"): //Layout Content centrado estrecho?>

    <div class="row layout-contenido-estrecho">
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
</section>




<section>

	<h3><?php _e('More', 'roots'); ?> 
    <?php 
$post_type = get_post_type_object( get_post_type($post) );
echo $post_type->label;
?></h3>
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