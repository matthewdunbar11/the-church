<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>

	<body>
    <div id="widget-row-1">
      <div class="container">
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
    <div id="widget-row-2">
      <div class="container">
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
    <div class="primary full-width">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1 class="skinny"><?php print get_bloginfo('name'); ?></h1>
          </div>
          <div class="col-xs-12">
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>            
                <?php wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker()
                )); ?>
              </div>
            </nav>
          </div>
      </div>
    </div>
  </div>
  <div class="container">
        