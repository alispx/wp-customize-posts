<?php

/**
 * Post Select Customize Control Class
 *
 * @package WordPress
 * @subpackage Customize
 */
class WP_Post_Select_Customize_Control extends WP_Customize_Control {

	/**
	 * @access public
	 * @var string
	 */
	public $type = 'post_select';

	/**
	 * Constructor.
	 *
	 * @uses WP_Customize_Control::__construct()
	 *
	 * @param WP_Customize_Manager $manager
	 * @param string $id
	 * @param array $args
	 */
	public function __construct( $manager, $id, $args = array() ) {
		$this->label = __( 'Select posts:', 'customize-posts' );
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render the control's content.
	 */
	public function render_content() {
		?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<div class="customize-control-content">
			TODO
		</div>
		<?php
	}
}