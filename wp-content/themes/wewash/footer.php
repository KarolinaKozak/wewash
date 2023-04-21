<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="left-col">
					<?php dynamic_sidebar('footer'); ?>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="right-col">
					<?php dynamic_sidebar('footer2'); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="footer-menu">
					<?php
						wp_nav_menu([
							'menu'            => 'footer-menu',
							'theme_location'  => 'footer-menu',
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()
						]);
					?>
				</div>
			</div>
		</div>
	</div>
	
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
