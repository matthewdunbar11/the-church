<?php

require_once('wp_bootstrap_navwalker.php');

class The_Church {

	function __construct() {
		add_action( 'wp_head', array($this, 'wp_head') );
		add_action( 'init', array($this, 'init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'customize_register', array($this, 'customize_register' ) );
		

	}
	
	function wp_head() {
		?>
			<style>
				#widget-row-1 {
					background-color: <?php echo get_theme_mod('widget-row-1-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('widget-row-1-color', '#000'); ?>;
				}
				#widget-row-2 {
					background-color: <?php echo get_theme_mod('#widget-row-2-background-color', '#fff'); ?>;
					color:  <?php echo get_theme_mod('#widget-row-2-color', '#000'); ?>;
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
		
		wp_enqueue_style( 'quicksand', 'http://fonts.googleapis.com/css?family=Quicksand:400,700' );		
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
		
		wp_enqueue_style( 'typography', get_stylesheet_directory_uri() . '/css/typography.css' );
		wp_enqueue_style( 'color-settings', get_stylesheet_directory_uri() . '/css/colors.css' );
	}
	
	function customize_register($wp_customize) {
		$easy_customizer = new Easy_Customizer($wp_customize);
		
		$easy_customizer->add_setting('Page Background Color', '#fff', 'Colors', 'color');
		$easy_customizer->add_setting('Widget Row 1 Background Color', '#fff', 'Widget Row 1', 'color');
		$easy_customizer->add_setting('Widget Row 1 Color', '#000', 'Widget Row 1', 'color');
		$easy_customizer->add_setting('Header 1 Left Width', '4', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Header 1 Center Width', '4', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Header 1 Right Width', '4', 'Widget Row 1', 'text');
		$easy_customizer->add_setting('Widget Row 2 Background Color', '#fff', 'Widget Row 2', 'color');
		$easy_customizer->add_setting('Widget Row 2 Color', '#000', 'Widget Row 2', 'color');
		$easy_customizer->add_setting('Header 2 Left Width', '4', 'Widget Row 2', 'text');
		$easy_customizer->add_setting('Header 2 Center Width', '4', 'Widget Row 2', 'text');
		$easy_customizer->add_setting('Header 2 Right Width', '4', 'Widget Row 2', 'text');		
		$easy_customizer->add_setting('Widget Row 2 Background Color', '#fff', 'Colors', 'color');
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