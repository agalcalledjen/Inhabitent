<?php
/**
 * Inhabitent Contact Info
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Inhabitent Contact Info
 * @author    Jennifer Lam <lam.jennifer.ky@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/nejmal
 * @copyright 2018 Red Academy
 *
 * @wordpress-plugin
 * Plugin Name:       Inhabitent Contact Info
 * Plugin URI:        https://github.com/nejmal/project-04
 * Description:       A cool widget for contact info.
 * Version:           1.0.0
 * Author:            Jennifer Lam
 * Author URI:        https://github.com/nejmal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// TODO: change 'Widget_Name' to the name of your plugin
class Inhabitent_Contact_Info extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'inhabitent-contact-info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

    // TODO: update description
    // getting constructor from parent class
		parent::__construct(
			$this->get_widget_slug(),
			'Inhabitent Contact Info',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Add the store contact info.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

    // to check it out
    // var_dump($instance);

		if ( ! isset ( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
    $title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
    // ?: terinary operator - similar to if stmt
    // empty( $instance['title'] ) - if instance is empty, ie true, then '' empty string will be set.
    // if not empty, it will get instance['title']
    // apply_filters - adding another filter, able to change instance['title']
    // widget_title is a hook
    // can hook into widget_title and change the instance['title']

    // TODO: other fields go here... copy above line and modify it
    $telephone = empty( $instance['telephone'] ) ? '' : apply_filters( 'telephone', $instance['telephone'] );
    $email = empty( $instance['email'] ) ? '' : apply_filters( 'email', $instance['email'] );
    $address = empty( $instance['address'] ) ? '' : apply_filters( 'address', $instance['address'] );
    $address1 = empty( $instance['address1'] ) ? '' : apply_filters( 'address1', $instance['address1'] );

    // output buffering, code will run later
		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean(); // stored code from ob_start() to until ob_get_clean() which will run it when ob_get_clean() appears. The string is stored in memory ie buffer, cache.
		$widget_string .= $after_widget; 

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance; // lets get what was stored in the database

		$instance['title'] = strip_tags( $new_instance['title'] );
    // TODO: Here is where you update the rest of your widget's old values with the new, incoming values
    $instance['telephone'] = strip_tags( $new_instance['telephone'] );
    $instance['email'] = strip_tags( $new_instance['email'] );
    $instance['address'] = strip_tags( $new_instance['address'] );
    $instance['address1'] = strip_tags( $new_instance['address1'] );

		return $instance; // gets all the new stuff that is just above

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
        'title' => 'Contact Info',
        'telephone' => '',
        'email' => '',
        'address' => '',
        'address1' => ''
			)
		);

		$title = strip_tags( $instance['title'] );
    // TODO: Store the rest of values of the widget in their own variables
    $telephone = strip_tags( $instance['telephone'] );
    $email = strip_tags( $instance['email'] );
    $address = strip_tags( $instance['address'] );
    $address1 = strip_tags( $instance['address1'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
  // class name
  register_widget( 'Inhabitent_Contact_Info' );
});
