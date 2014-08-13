<?php
/*
Template Name: Skrollr
*/
?>
<?php //the_field('videoembed1'); ?>



<div 
data-top="opacity: 1;" 
data--300-top="opacity: 0;"
>
	<img src="http://dev.t0theme.sergiofores.net/wp-content/uploads/te0.jpg" alt="" />
</div>

<div id="offset"></div>

<section class="skrollr">
			<?php

		// check if the repeater field has rows of data
		if( have_rows('content') ):

		 	// loop through the rows of data
		    while ( have_rows('content') ) : the_row(); 
		        
		        $img = get_sub_field('img'); 
		        $txt = get_sub_field('txt'); 
		        ?>

		        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" />
		        <?php echo $img['caption'] ?>

		        <?php if( $txt ): ?>
					<p><?php echo $txt; ?></p>
				<?php endif; ?>

		    <? endwhile;

		else : ?>


		<? endif;

	?>
</section>



 