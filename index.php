<?php get_header(); ?>


<?php
	
	$number_of_sidebars = 0;
	$main_push = 0;
	if(is_active_sidebar('sidebar-left')) {
		$number_of_sidebars++;
		$main_push = 3;
	}
	if(is_active_sidebar('sidebar-right'))
		$number_of_sidebars++;
	
	$main_width = 12 - $number_of_sidebars * 3;
		
?>
	<main class="container">
		<div class="row">
			<div class="col-xs-12 col-md-<?php echo $main_width; ?> col-md-push-<?php echo $main_push;?>">
			<?php	 
				dynamic_sidebar('pre-content');
				
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						the_title();
						the_content();
					} // end while
				} // end if
				
				dynamic_sidebar('post-content');
			?>
			</div>
			<?php if(is_active_sidebar('sidebar-left')): ?>
				<div class="col-xs-12 col-md-3 col-md-pull-<?php echo $main_width; ?>">
					<?php dynamic_sidebar('sidebar-left'); ?>
				</div>
			<?php endif; ?>
			<?php if(is_active_sidebar('sidebar-right')): ?>
				<div class="col-xs-12 col-md-3">
					<?php dynamic_sidebar('sidebar-right'); ?>
				</div>
			<?php endif; ?>		
		</div>
	</main>



<?php get_footer(); ?>