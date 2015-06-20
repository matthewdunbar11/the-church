<?php global $row_number; ?>

<?php if(is_active_sidebar('header-' . $row_number . '-left') 
	  || is_active_sidebar('header-' . $row_number . '-center') 
	  || is_active_sidebar('header-' . $row_number . '-right')): ?> 
	
	<?php if(get_theme_mod('widget-row-' . $row_number . '-width') == 'full'): ?>
		<div id="widget-row-<?php print $row_number; ?>" class="widget-row footer-widget-row">
			<div class="container<?php print get_theme_mod('widget-row-' . $row_number . '-container-width') == 'full' ? '-fluid' : ''; ?>">
		<?php $endingdiv = '</div></div>'; ?>
	<?php else: ?>
	  	<div id="widget-row-<?php print $row_number; ?>" class="container widget-row header-widget-row">
	  	<?php $endingdiv = '</div>'; ?>
	<?php endif; ?>
			<div class="row">
				<?php if(get_theme_mod('header-' . $row_number . '-left-width', 4) > 0): ?>
				<div class="col-xs-12 col-md-<?php echo get_theme_mod('header-' . $row_number . '-left-width', 4); ?>">
			    	<?php dynamic_sidebar('header-' . $row_number . '-left'); ?>
				</div>
				<?php endif; ?>
				<?php if(get_theme_mod('header-' . $row_number . '-center-width', 4) > 0): ?>
				<div class="col-xs-12 col-md-<?php echo get_theme_mod('header-' . $row_number . '-center-width', 4); ?>">
					<?php dynamic_sidebar('header-' . $row_number . '-center'); ?>
				</div>
				<?php endif; ?>
				<?php if(get_theme_mod('header-' . $row_number . '-right-width', 4) > 0): ?>				
				<div class="col-xs-12 col-md-<?php echo get_theme_mod('header-' . $row_number . '-right-width', 4); ?>">
					<?php dynamic_sidebar('header-' . $row_number . '-right'); ?>
				</div>
				<?php endif; ?>
			</div>
	<?php print $endingdiv; ?>
<?php endif; ?>