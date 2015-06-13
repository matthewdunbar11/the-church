<?php
	class Bloggo_Social_Icons extends WP_Widget {
		/**
		 * Sets up the widgets name etc
		 */
		public function __construct() {
			parent::__construct(
				'bloggo_social_icons', // Base ID
				__( 'Social Icons', 'text_domain' ), // Name
				array( 
					'description' => __( 'Social Icons' ), 
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
			echo '<div class="text-center">';

			echo $instance['facebook-url'] <> '' ? '<a class="social-icon" href="' . $instance['facebook-url'] . '"><i class="fa fa-facebook fa-2x"></i></a>' : '';
			echo $instance['twitter-url'] <> '' ? '<a class="social-icon" href="' . $instance['twitter-url'] . '"><i class="fa fa-twitter fa-2x"></i></a>' : '';
			echo $instance['google-url'] <> '' ? '<a class="social-icon" href="' . $instance['google-url'] . '"><i class="fa fa-google-plus fa-2x"></i></a>' : '';
			echo $instance['linkedin-url'] <> '' ? '<a class="social-icon" href="' . $instance['linkedin-url'] . '"><i class="fa fa-linkedin fa-2x"></i></a>' : '';
			echo $instance['youtube-url'] <> '' ? '<a class="social-icon" href="' . $instance['youtube-url'] . '"><i class="fa fa-youtube fa-2x"></i></a>' : '';
			echo $instance['pinterest-url'] <> '' ? '<a class="social-icon" href="' . $instance['pinterest-url'] . '"><i class="fa fa-pinterest fa-2x"></i></a>' : '';
	
			echo '</div>';			
			echo $args['after_widget'];
		}
	
		/**
		 * Outputs the options form on admin
		 *
		 * @param array $instance The widget options
		 */
		public function form( $instance ) {
			$this->add_setting_field($instance, 'Facebook URL');			
			$this->add_setting_field($instance, 'Twitter URL');		
			$this->add_setting_field($instance, 'Google+ URL');		
			$this->add_setting_field($instance, 'LinkedIn URL');		
			$this->add_setting_field($instance, 'YouTube URL');		
			$this->add_setting_field($instance, 'Pinterest URL');
		}
	
		/**
		 * Processing widget options on save
		 *
		 * @param array $new_instance The new options
		 * @param array $old_instance The previous options
		 */
		public function update( $new_instance, $old_instance ) {		
			$instance = array();
			$instance['facebook-url'] = ( ! empty( $new_instance['facebook-url'] ) ) ? strip_tags( $new_instance['facebook-url'] ) : '';
			$instance['twitter-url'] = ( ! empty( $new_instance['twitter-url'] ) ) ? strip_tags( $new_instance['twitter-url'] ) : '';
			$instance['google-url'] = ( ! empty( $new_instance['google-url'] ) ) ? strip_tags( $new_instance['google-url'] ) : '';
			$instance['linkedin-url'] = ( ! empty( $new_instance['linkedin-url'] ) ) ? strip_tags( $new_instance['linkedin-url'] ) : '';'';
			$instance['youtube-url'] = ( ! empty( $new_instance['youtube-url'] ) ) ? strip_tags( $new_instance['youtube-url'] ) : '';
			$instance['pinterest-url'] = ( ! empty( $new_instance['pinterest-url'] ) ) ? strip_tags( $new_instance['pinterest-url'] ) : '';

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