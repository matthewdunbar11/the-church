		<footer>
			<?php if(get_theme_mod('footer-widget-row-1-width') == 'full'): ?>
			    <div id="footer-widget-row-1">
			      <div class="container">
		  	<?php else: ?>
			  	<div id="footer-widget-row-1" class="container">
		  	<?php endif; ?>
		        <div class="row">
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-1-left-width', 4); ?>">
		            <?php dynamic_sidebar('footer-1-left'); ?>
		          </div>
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-1-center-width', 4); ?>">
		            <?php dynamic_sidebar('footer-1-center'); ?>
		          </div>
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-1-right-width', 4); ?>">
		            <?php dynamic_sidebar('footer-1-right'); ?>
		          </div>
		        </div>
		      </div>
		    </div>
			<?php if(get_theme_mod('footer-widget-row-2-width') == 'full'): ?>
			    <div id="footer-widget-row-2">
			      <div class="container">
		  	<?php else: ?>
			  	<div id="footer-widget-row-2" class="container">
		  	<?php endif; ?>
		        <div class="row">
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-2-left-width', 4); ?>">
		            <?php dynamic_sidebar('footer-2-left'); ?>
		          </div>
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-2-center-width', 4); ?>">
		            <?php dynamic_sidebar('footer-2-center'); ?>
		          </div>
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-2-right-width', 4); ?>">
		            <?php dynamic_sidebar('footer-2-right'); ?>
		          </div>
		        </div>
		      </div>
		    </div>
			<?php if(get_theme_mod('footer-widget-row-3-width') == 'full'): ?>
			    <div id="footer-widget-row-3">
			      <div class="container">
		  	<?php else: ?>
			  	<div id="footer-widget-row-3" class="container">
		  	<?php endif; ?>
		        <div class="row">
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-3-left-width', 4); ?>">
		            <?php dynamic_sidebar('footer-3-left'); ?>
		          </div>
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-3-center-width', 4); ?>">
		            <?php dynamic_sidebar('footer-3-center'); ?>
		          </div>
		          <div class="col-xs-12 col-md-<?php echo get_theme_mod('footer-3-right-width', 4); ?>">
		            <?php dynamic_sidebar('footer-3-right'); ?>
		          </div>
		        </div>
		      </div>
		    </div>  			
			
		</footer>

			<?php wp_footer(); ?>
		</div>	
	</body>
</html>