<?php
/*
Template Name: Home
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <?php //get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

<section class="cover"
data-top="background-position: 100% 0%"
data-top-bottom="background-position: 100% 100%"
>
	<div class="row">
		<div class="col__12">
			<div class="well well--large">
				<div class="col__12">
				<h1
				data-top="opacity: 0"
				data-16p-top="opacity: 1"
				>
				A Wordpress Starter theme with love
				</h1>
				</div>
	<div class="col__12"
	data--100-center="transform: rotate(10deg); opacity: 0"
	data-center="transform: rotate(0deg); opacity: 1"
	>
				<a href="/video/" class="btn btn--primary">Look! <i class="icon-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<?php //the_field('h3'); ?>
	<?php 
		$this_post = $post->ID;
		$loop = new WP_Query( array( 
								'post_type' => 'cpt',
								'post__not_in' => array($this_post),
								'category_name' => '' 
								)); 
		?>	
	<dl class="col__4"
	data-bottom="opacity: 0; transform: translateX(10px) rotate(-6deg) scale(0.9)"
	data--80-bottom="opacity: 1; transform: translateX(0px) rotate(0deg) scale(1)">
			
			<dt>Listado de <?php the_title() ?></dt>
				
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	
				<dd class="icon-tick">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?></a>
				</dd>
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</dl>
	
			<dl class="col__4"
			data-bottom="opacity: 0; transform: scale(0.5)"
			data--80-bottom="opacity: 1; transform: scale(1)"
			>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion A</dd>
				<dd class="icon-tick"> Descripcion B</dd>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion D</dd>
			</dl>
				
			<dl class="col__4"
			data--80-bottom="opacity: 0; transform: scale(0.5)"
			data--160-bottom="opacity: 1; transform: scale(1)"
			>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion A</dd>
				<dd class="icon-tick"> Descripcion B</dd>
				<dt>Titulo de un definition list</dt>
				<dd class="icon-tick"> Descripcion D</dd>
			</dl>
</section>

<section class="bg1">
	<div class="well--large">
		<h3>Lorem</h3>
		<h2 class="h1">
			Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
		</h2>
	</div>
	<a href="/home-cpt/" class="btn btn--primary">Look! <i class="icon-arrow-right"></i></a>
</section>

<section>
	<h3 class="h1">Galería</h3>
	<?php
    $images = get_field('galeria');
 
    if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li class="col__3">
                    <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <footer>
                        <p class="descripcion-img">
                            <?php echo $image['caption']; ?>
                        </p>
                    </footer>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>

<section class="bg2">
	<div class="well--large">
		<h3>Lorem</h3>
		<h2 class="h1">
			Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
		</h2>
	</div>
		<a href="/cpt/" class="btn btn--primary"> <i class="icon-code"></i></a>
</section>