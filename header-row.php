<?php global $row_number; ?>

<?php if(is_active_sidebar('header-' . $row_number . '-left') 
	  || is_active_sidebar('header-' . $row_number . '-center') 
	  || is_active_sidebar('header-' . $row_number . '-right')): ?> 
	
	<?php if(get_theme_mod('widget-row-' . $row_number . '-width') == 'full'): ?>
		<div id="widget-row-<?php print $row_number; ?>" class="widget-row footer-widget-row">
			<div class="container">
		<?php $endingdiv = '</div></div>'; ?>
	<?php else: ?>
	  	<div id="widget-row-<?php print $row_number; ?>" class="container widget-row header-widget-row">
	  	<?php $endingdiv = '</div>'; ?>
	<?php endif; ?>
			<div class="row">
				<div class="col-xs-12 col-md-<?php echo get_theme_mod('header-' . $row_number . '-left-width', 4); ?>">
			    	<?php dynamic_sidebar('header-' . $row_number . '-left'); ?>
				</div>
				<div class="col-xs-12 col-md-<?php echo get_theme_mod('header-' . $row_number . '-center-width', 4); ?>">
					<?php dynamic_sidebar('header-' . $row_number . '-center'); ?>
				</div>
				<div class="col-xs-12 col-md-<?php echo get_theme_mod('header-' . $row_number . '-right-width', 4); ?>">
					<?php dynamic_sidebar('header-' . $row_number . '-right'); ?>
				</div>
			</div>
	<?php print $endingdiv; ?>
<?php endif; ?>