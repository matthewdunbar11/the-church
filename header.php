<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>

	<body>
			<?php if(get_theme_mod('widget-row-1-width') == 'full'): ?>
			    <div id="widget-row-1">
			      <div class="container">
		  	<?php else: ?>
			  	<div id="widget-row-1" class="container">
		  	<?php endif; ?>
        <div class="row">
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-1-left-width', 4); ?>">
            <?php dynamic_sidebar('header-1-left'); ?>
          </div>
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-1-center-width', 4); ?>">
            <?php dynamic_sidebar('header-1-center'); ?>
          </div>
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-1-right-width', 4); ?>">
            <?php dynamic_sidebar('header-1-right'); ?>
          </div>
        </div>
      </div>
    </div>
			<?php if(get_theme_mod('widget-row-2-width') == 'full'): ?>
			    <div id="widget-row-2">
			      <div class="container">
		  	<?php else: ?>
			  	<div id="widget-row-2" class="container">
		  	<?php endif; ?>
        <div class="row">
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-2-left-width', 4); ?>">
            <?php dynamic_sidebar('header-2-left'); ?>
          </div>
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-2-center-width', 4); ?>">
            <?php dynamic_sidebar('header-2-center'); ?>
          </div>
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-2-right-width', 4); ?>">
            <?php dynamic_sidebar('header-2-right'); ?>
          </div>
        </div>
      </div>
    </div>
			<?php if(get_theme_mod('widget-row-3-width') == 'full'): ?>
			    <div id="widget-row-3">
			      <div class="container">
		  	<?php else: ?>
			  	<div id="widget-row-3" class="container">
		  	<?php endif; ?>
        <div class="row">
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-3-left-width', 4); ?>">
            <?php dynamic_sidebar('header-3-left'); ?>
          </div>
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-3-center-width', 4); ?>">
            <?php dynamic_sidebar('header-3-center'); ?>
          </div>
          <div class="col-xs-12 col-md-<?php echo get_theme_mod('header-3-right-width', 4); ?>">
            <?php dynamic_sidebar('header-3-right'); ?>
          </div>
        </div>
      </div>
    </div>  