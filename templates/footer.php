<footer class="content-info" role="contentinfo">
  
	<div class="main-footer">
	<div class="row">
		<?php dynamic_sidebar('sidebar-footer'); ?>
		
			
		
				<div class="col__4">
					<?php get_search_form(); ?>
				</div>
		
				<div class="col__4">
					<h6>
					<a class="url" href="#">
						<i class="icon-logo-t0theme"></i> <?php bloginfo('name'); ?>
					</a></h6>
					<address>
						<small>Calle número 13
						La Provincia, 
						12980 Spain
						+44 (0)345 345345</small>
					</address>
				</div>
		
				<div class="col__4">
					<h6>Redes Sociales</h6>
					<a href="https://twitter.com/t0tinspire" target="_blank">
						<i class="icon-twitter"></i>
					</a>
					<a href="https://github.com/t0t" target="_blank">
						<i class="icon-github"></i>
					</a>
				</div>
			
			<p class="creditos" rel="author">
				 
				<small>
					<a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i> Sergio Forés</a> &sdot; <?php bloginfo('name'); ?>
					 <?php echo date('Y'); ?>
				</small>
				 <?php edit_post_link('&oplus; Editar ') ?>&sdot;
				 <?php wp_loginout(); ?>
			</p>
		</div>
		</div>

</footer>

<?php wp_footer(); ?>