<?php

require_once('wp_bootstrap_navwalker.php');

class The_Church {

	function __construct() {
		add_action( 'init', array($this, 'init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );

	}

	function init() {
		register_nav_menu( 'primary', 'Primary' );
	}

	function wp_enqueue_scripts() {
		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array( 'jquery' ), '3.3.4', true );
		
		wp_enqueue_style( 'quicksand', 'http://fonts.googleapis.com/css?family=Quicksand:400,700' );		
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
		
		wp_enqueue_style( 'typography', get_stylesheet_directory_uri() . '/css/typography.css' );
		wp_enqueue_style( 'color-settings', get_stylesheet_directory_uri() . '/css/colors.css' );
	}

}
new The_Church();