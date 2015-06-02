<?php
	class Bloggo_Logo extends WP_Widget {
		/**
		 * Sets up the widgets name etc
		 */
		public function __construct() {
			parent::__construct(
				'bloggo_logo', // Base ID
				__( 'Logo', 'text_domain' ), // Name
				array( 
					'description' => __( 'Logo' ), 
				) // Args
				
			);
		}
	
		/**
		 * Outputs the content of the widget
		 *
		 * @param array $args
		 * @param array $instance
		 */
		public function widget( $args, $instance ) {
			echo $args['before_widget'];
			//error_log(print_r(get_theme_mod('logo'), true));
			echo $instance['before-tag'] . '<img src="' . get_theme_mod('logo') . '" />' . $instance['after-tag'];
			echo $args['after_widget'];
		}
	
		/**
		 * Outputs the options form on admin
		 *
		 * @param array $instance The widget options
		 */
		public function form( $instance ) {
			$this->add_setting_field($instance, 'Before Tag');			
			$this->add_setting_field($instance, 'After Tag');
		}
	
		/**
		 * Processing widget options on save
		 *
		 * @param array $new_instance The new options
		 * @param array $old_instance The previous options
		 */
		public function update( $new_instance, $old_instance ) {
			
			$instance = array();
			$instance['before-tag'] =  $new_instance['before-tag'];			
			$instance['after-tag'] = $new_instance['after-tag'];

			return $instance;
		}
		
		private function add_setting_field($instance, $title, $default_value = '') {
			$sanitized_title = sanitize_title($title);
			$current_value = ! empty( $instance[$sanitized_title] ) ? $instance[$sanitized_title] : $default_value;
			?>
			<p>
		 		<label for="<?php $this->get_field_id( $sanitized_title ); ?>"><?php _e( $title . ":" ); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( $sanitized_title ); ?>" name="<?php echo $this->get_field_name( $sanitized_title ); ?>" type="text" value="<?php echo esc_attr( $current_value ); ?>">			
			</p>
			<?php	
		}		
		
	}


/*	<label for="<?php echo $this->get_field_id( $sanitized_title ); ?>"><?php _e( $title . ":" ); ?></label>

*/