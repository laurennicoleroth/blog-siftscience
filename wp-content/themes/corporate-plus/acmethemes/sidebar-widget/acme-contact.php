<?php
/**
 * Class for adding Contact Section Widget
 *
 * @package AcmeThemes
 * @subpackage Corporat Plus
 * @since 1.0.0
 */
if ( ! class_exists( 'Corporate_plus_contact' ) ) {

    class Corporate_plus_contact extends WP_Widget {
        /*defaults values for fields*/
        private $defaults = array(
            'unique_id'     => '',
            'title'         => '',
            'shortcode'     => ''
        );

        function __construct() {
            parent::__construct(
            /*Base ID of your widget*/
                'corporate_plus_contact',
                /*Widget name will appear in UI*/
                __('AT Contact Section', 'corporate-plus'),
                /*Widget description*/
                array( 'description' => __( 'Show Contact Section.', 'corporate-plus' ), )
            );
        }

        /*Widget Backend*/
        public function form( $instance ) {
            $instance = wp_parse_args( (array) $instance, $this->defaults );
            /*default values*/
            $unique_id = esc_attr( $instance[ 'unique_id' ] );
            $title = esc_attr( $instance[ 'title' ] );
            $shortcode = esc_attr( $instance[ 'shortcode' ] );
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'unique_id' ); ?>"><?php _e( 'Section ID', 'corporate-plus' ); ?>:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'unique_id' ); ?>" name="<?php echo $this->get_field_name( 'unique_id' ); ?>" type="text" value="<?php echo $unique_id; ?>" />
                <br />
                <small><?php _e('Enter a Unique Section ID. You can use this ID in Menu item for enabling One Page Menu.','corporate-plus')?></small>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'corporate-plus' ); ?>:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'shortcode' ); ?>"><?php _e( 'Enter Shortcode', 'corporate-plus' ); ?>:</label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" type="text" value="<?php echo $shortcode; ?>" />
                <small>
                    <?php
                    printf( __( 'Download contact form 7 from %shere%s', 'corporate-plus' ), "<a target='_blank' href='".esc_url( 'https://wordpress.org/plugins/contact-form-7/' )."''>","</a>" );
                    ?>
                </small>
            </p>
            <?php
        }
        /**
         * Function to Updating widget replacing old instances with new
         *
         * @access public
         * @since 1.0
         *
         * @param array $new_instance new arrays value
         * @param array $old_instance old arrays value
         * @return array
         *
         */
        public function update( $new_instance, $old_instance ) {
            $instance = $old_instance;
            $instance[ 'unique_id' ] = sanitize_key( $new_instance[ 'unique_id' ] );
            $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
            $instance[ 'shortcode' ] = wp_kses_post( $new_instance[ 'shortcode' ] );

            return $instance;
        }
        /**
         * Function to Creating widget front-end. This is where the action happens
         *
         * @access public
         * @since 1.0
         *
         * @param array $args widget setting
         * @param array $instance saved values
         * @return array
         *
         */
        public function widget($args, $instance) {
            $corporate_plus_sidebar_id = $args['id'];

            $init_animate_title = '';
            $init_animate_content = '';
            if ( 'corporate-plus-home' == $corporate_plus_sidebar_id ){
                $init_animate_title = "init-animate animated fadeInUp";
                $init_animate_content = "init-animate animated fadeInDown";
            }

            $instance = wp_parse_args( (array) $instance, $this->defaults);

            /*default values*/
            $unique_id = !empty( $instance[ 'unique_id' ] ) ? esc_attr( $instance[ 'unique_id' ] ) : esc_attr( $this->id );
            $title = apply_filters( 'widget_title', !empty( $instance['title'] ) ? $instance['title'] : '', $instance, $this->id_base );
            $shortcode = wp_kses_post( $instance[ 'shortcode' ] );

            echo $args['before_widget'];
            ?>
            <section id="<?php echo $unique_id;?>">
                <div class="featured-section contact-form at-parallax">
                    <div class="at-overlay">
                        <div class="container">
                            <div class="main-title <?php echo esc_attr( $init_animate_title ); ?>">
                                <?php
                                if( !empty( $title ) ) {
                                    echo $args['before_title'] .esc_html( $title ).$args['after_title'];
                                }
                                ?>
                            </div>
                            <div class="<?php echo esc_attr( $init_animate_content ); ?>">
                                <?php echo do_shortcode( $shortcode ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            echo $args['after_widget'];
        }
    } // Class Corporate_plus_contact ends here
}
/**
 * Function to Register and load the widget
 *
 * @since 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'corporate_plus_contact' ) ) :

    function corporate_plus_contact() {
        register_widget( 'Corporate_plus_contact' );
    }
endif;
add_action( 'widgets_init', 'corporate_plus_contact' );