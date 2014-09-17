<footer class="content-info" role="contentinfo">
  
	<div class="main-footer">
		<div class="row">
			<?php dynamic_sidebar('sidebar-footer'); ?>
						
				<div class="col__4">
					<?php get_search_form(); ?>
				</div>
			
				<div class="col__4">
					<h6><a class="url" href="/">
					<i class="icon-logo-t0theme"></i> <?php bloginfo('name'); ?> S.L.</a></h6>
					<address>
C/Morella Km 0,7 12500 Vinaròs Castellón
T. (+34) 964 40 18 64
F. (+34) 964 40 08 46
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
			</div>
		</div>
			<aside class="creditos" rel="author"> 
				<small>
					 <?php bloginfo('name'); ?>
					 <?php echo date('Y'); ?>
				</small>
				 <?php edit_post_link('&oplus; Editar ') ?>&sdot;
				 <?php wp_loginout(); ?>
				 &sdot; <a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i></a>
			</aside>
</footer>

<?php wp_footer(); ?>