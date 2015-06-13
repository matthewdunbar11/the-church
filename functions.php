<?php

require_once('wp_bootstrap_navwalker.php');
require_once('widgets/nav.php');
require_once('widgets/site_title.php');
require_once('widgets/logo.php');
require_once('widgets/slider.php');
require_once('widgets/social_icons.php');

class The_Church {

	function __construct() {
		add_action( 'wp_head', array($this, 'wp_head') );
		add_action( 'init', array($this, 'init' ) );
		add_action( 'widgets_init', array($this, 'widgets_init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'customize_register', array($this, 'customize_register' ) );
		add_action( 'after_setup_theme', array($this, 'after_setup_theme' ) );

	}
		
	function wp_head() {
		?>
			<style>
				body {
					background-color: <?php echo get_theme_mod('page-background-color', '#fff'); ?>;
				}
				main {
					background-color: <?php echo get_theme_mod('main-container-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('main-container-color', '#000'); ?>;
				}
				#widget-row-1 {
					background-color: <?php echo get_theme_mod('widget-row-1-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('widget-row-1-color', '#000'); ?>;
				}
				#widget-row-2 {
					background-color: <?php echo get_theme_mod('widget-row-2-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('widget-row-2-color', '#000'); ?>;
				}	
				#widget-row-3 {
					background-color: <?php echo get_theme_mod('widget-row-3-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('widget-row-3-color', '#000'); ?>;
				}			
				#footer-widget-row-1 {
					background-color: <?php echo get_theme_mod('footer-widget-row-1-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('footer-widget-row-1-color', '#000'); ?>;
				}
				#footer-widget-row-2 {
					background-color: <?php echo get_theme_mod('footer-widget-row-2-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('footer-widget-row-2-color', '#000'); ?>;
				}	
				#footer-widget-row-3 {
					background-color: <?php echo get_theme_mod('footer-widget-row-3-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('footer-widget-row-3-color', '#000'); ?>;
				}	
				html * {
					font-family: "<?php echo get_theme_mod('body-web-font-name'); ?>";
				}				
				h1, h2, h3, h4, h5, h6, h7 {
					font-family: "<?php echo get_theme_mod('header-web-font-name'); ?>";
				}						

			</style>
		<?php	
		
	}
	
	function init() {
		register_nav_menu( 'primary', 'Primary' );
		
		$this->register_sidebar('Header 1 Left');
		$this->register_sidebar('Header 1 Center');
		$this->register_sidebar('Header 1 Right');
		$this->register_sidebar('Header 2 Left');
		$this->register_sidebar('Header 2 Center');
		$this->register_sidebar('Header 2 Right');
		$this->register_sidebar('Header 3 Left');
		$this->register_sidebar('Header 3 Center');
		$this->register_sidebar('Header 3 Right');
		$this->register_sidebar('Sidebar Left');
		$this->register_sidebar('Sidebar Right');
		$this->register_sidebar('Pre-content');
		$this->register_sidebar('Post-content');
		$this->register_sidebar('Footer 1 Left');
		$this->register_sidebar('Footer 1 Center');
		$this->register_sidebar('Footer 1 Right');
		$this->register_sidebar('Footer 2 Left');
		$this->register_sidebar('Footer 2 Center');
		$this->register_sidebar('Footer 2 Right');
		$this->register_sidebar('Footer 3 Left');
		$this->register_sidebar('Footer 3 Center');
		$this->register_sidebar('Footer 3 Right');		
	}

	function widgets_init() {
		register_widget( 'Bloggo_Nav' );
		register_widget( 'Bloggo_Site_Title' );	
		register_widget( 'Bloggo_Logo' );	
		register_widget( 'Bloggo_Slider' );	
		register_widget( 'Bloggo_Social_Icons' );	
	}
	
	function register_sidebar($name) {
		register_sidebar(array(
			'name' => __($name),
			'id' => sanitize_title($name),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>'			
		));
	}
	
	function wp_enqueue_scripts() {
		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array( 'jquery' ), '3.3.4', true );
		wp_enqueue_script( 'vertical-center', get_stylesheet_directory_uri() . '/js/vertical-center.js', array( 'jquery' ) );
		
		wp_enqueue_style( 'quicksand', '//fonts.googleapis.com/css?family=Quicksand:400,700' );
		wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		
		wp_enqueue_style( sanitize_title(get_theme_mod('header-web-font-name')), get_theme_mod('header-web-font-url') );
		wp_enqueue_style( sanitize_title(get_theme_mod('body-web-font-name')), get_theme_mod('body-web-font-url') );
						
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
		
		wp_enqueue_style( 'typography', get_stylesheet_directory_uri() . '/css/typography.css' );
		wp_enqueue_style( 'color-settings', get_stylesheet_directory_uri() . '/css/colors.css' );
		wp_enqueue_style( 'xs', get_stylesheet_directory_uri() . '/css/xs.css' );
		wp_enqueue_style( 'md', get_stylesheet_directory_uri() . '/css/md.css' );
	}
	
	function customize_register($wp_customize) {
		$easy_customizer = new Easy_Customizer($wp_customize);
		
		$easy_customizer->add_setting('Page Background Color', '#fff', 'Colors', 'color');
		$easy_customizer->add_setting('Main Container Background Color', '#fff', 'Colors', 'color');
		$easy_customizer->add_setting('Main Container Color', '#000', 'Colors', 'color');
		$easy_customizer->add_setting('Logo', '', 'title_tagline', 'image');
		
		$easy_customizer->add_setting('Header Web Font URL', '', 'Fonts', 'text');
		$easy_customizer->add_setting('Header Web Font Name', '', 'Fonts', 'text');
		$easy_customizer->add_setting('Body Web Font URL', '', 'Fonts', 'text');
		$easy_customizer->add_setting('Body Web Font Name', '', 'Fonts', 'text');
		
		$easy_customizer->add_setting('Widget Row 1 Background Color', '#fff', 'Widget Row 1', 'color');
		$easy_customizer->add_setting('Widget Row 1 Color', '#000', 'Widget Row 1', 'color');
		$easy_customizer->add_setting('Widget Row 1 Width', 'full', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Widget Row 1 Container Width', 'full', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Header 1 Left Width', '4', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Header 1 Center Width', '4', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Header 1 Right Width', '4', 'Widget Row 1', 'text');
		
		$easy_customizer->add_setting('Widget Row 2 Background Color', '#fff', 'Widget Row 2', 'color');
		$easy_customizer->add_setting('Widget Row 2 Color', '#000', 'Widget Row 2', 'color');
		$easy_customizer->add_setting('Widget Row 2 Width', 'full', 'Widget Row 2', 'text');
		$easy_customizer->add_setting('Widget Row 2 Container Width', 'full', 'Widget Row 2', 'text');
		$easy_customizer->add_setting('Header 2 Left Width', '4', 'Widget Row 2', 'text');
		$easy_customizer->add_setting('Header 2 Center Width', '4', 'Widget Row 2', 'text');
		$easy_customizer->add_setting('Header 2 Right Width', '4', 'Widget Row 2', 'text');
				
		$easy_customizer->add_setting('Widget Row 3 Background Color', '#fff', 'Widget Row 3', 'color');
		$easy_customizer->add_setting('Widget Row 3 Color', '#000', 'Widget Row 3', 'color');
		$easy_customizer->add_setting('Widget Row 3 Width', 'full', 'Widget Row 3', 'text');
		$easy_customizer->add_setting('Widget Row 3 Container Width', 'full', 'Widget Row 3', 'text');
		$easy_customizer->add_setting('Header 3 Left Width', '4', 'Widget Row 3', 'text');
		$easy_customizer->add_setting('Header 3 Center Width', '4', 'Widget Row 3', 'text');
		$easy_customizer->add_setting('Header 3 Right Width', '4', 'Widget Row 3', 'text');

		$easy_customizer->add_setting('Footer Widget Row 1 Background Color', '#fff', 'Footer Widget Row 1', 'color');
		$easy_customizer->add_setting('Footer Widget Row 1 Color', '#000', 'Footer Widget Row 1', 'color');
		$easy_customizer->add_setting('Footer Widget Row 1 Width', 'full', 'Footer Widget Row 1', 'text');
		$easy_customizer->add_setting('Footer Widget Row 1 Container Width', 'full', 'Footer Widget Row 1', 'text');
		$easy_customizer->add_setting('Footer 1 Left Width', '4', 'Footer Widget Row 1', 'text');
		$easy_customizer->add_setting('Footer 1 Center Width', '4', 'Footer Widget Row 1', 'text');
		$easy_customizer->add_setting('Footer 1 Right Width', '4', 'Footer Widget Row 1', 'text');
		
		$easy_customizer->add_setting('Footer Widget Row 2 Background Color', '#fff', 'Footer Widget Row 2', 'color');
		$easy_customizer->add_setting('Footer Widget Row 2 Color', '#000', 'Footer Widget Row 2', 'color');
		$easy_customizer->add_setting('Footer Widget Row 2 Width', 'full', 'Footer Widget Row 2', 'text');
		$easy_customizer->add_setting('Footer Widget Row 2 Container Width', 'full', 'Footer Widget Row 2', 'text');
		$easy_customizer->add_setting('Footer 2 Left Width', '4', 'Footer Widget Row 2', 'text');
		$easy_customizer->add_setting('Footer 2 Center Width', '4', 'Footer Widget Row 2', 'text');
		$easy_customizer->add_setting('Footer 2 Right Width', '4', 'Footer Widget Row 2', 'text');	
			
		$easy_customizer->add_setting('Footer Widget Row 3 Background Color', '#fff', 'Footer Widget Row 3', 'color');
		$easy_customizer->add_setting('Footer Widget Row 3 Color', '#000', 'Footer Widget Row 3', 'color');
		$easy_customizer->add_setting('Footer Widget Row 3 Width', 'full', 'Footer Widget Row 3', 'text');
		$easy_customizer->add_setting('Footer Widget Row 3 Container Width', 'full', 'Footer Widget Row 3', 'text');
		$easy_customizer->add_setting('Footer 3 Left Width', '4', 'Footer Widget Row 3', 'text');
		$easy_customizer->add_setting('Footer 3 Center Width', '4', 'Footer Widget Row 3', 'text');
		$easy_customizer->add_setting('Footer 3 Right Width', '4', 'Footer Widget Row 3', 'text');						
	}
	
	function after_setup_theme() {
		add_theme_support( 'post-thumbnails' );	
	}
}
new The_Church();

class Easy_Customizer {
	private $wp_customize;
	private $sections = array(
		'title_tagline',
		'colors',
		'header_image',
		'background_image',
		'nav',
		'static_front_page'		
	);
	
	public function __construct($wp_customize) {
		$this->wp_customize = $wp_customize;
	}
	
	public function add_setting($name, $default_value, $section, $type) {
		if(!in_array(sanitize_title($section), $this->sections)) {
			$this->wp_customize->add_section(sanitize_title($section), array(
				'title' => $section
			));	
		}
		
		$this->wp_customize->add_setting( sanitize_title($name) , array(
			'default'     => $default_value,
			'transport'   => 'refresh',
		) );
		
		switch ($type) {
			case 'text':
				$this->wp_customize->add_control(new WP_Customize_Control(
					$this->wp_customize,
					sanitize_title($name),
					array(
						'label' => __($name),
						'section' => sanitize_title($section),
						'settings' => sanitize_title($name),
					)
				));
				break;
			case 'color':
				$this->wp_customize->add_control(new WP_Customize_Color_Control(
					$this->wp_customize,
					sanitize_title($name),
					array(
						'label' => __($name),
						'section' => sanitize_title($section),
						'settings' => sanitize_title($name),
					)
				));				
				break;
			case 'file':
				$this->wp_customize->add_control(new WP_Customize_Upload_Control(
					$this->wp_customize,
					sanitize_title($name),
					array(
						'label' => __($name),
						'section' => sanitize_title($section),
						'settings' => sanitize_title($name),
					)
				));					
				break;
			case 'image':
				$this->wp_customize->add_control(new WP_Customize_Upload_Control(
					$this->wp_customize,
					sanitize_title($name),
					array(
						'label' => __($name),
						'section' => sanitize_title($section),
						'settings' => sanitize_title($name),
               			'context'    => 'your_setting_context' 
					)
				));					
				break;
		}		
	}
}