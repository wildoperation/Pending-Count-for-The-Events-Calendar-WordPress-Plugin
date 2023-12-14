<?php
namespace WOPECTEC;

/**
 * Adds counter to The Event Calendar's admin menu.
 */
class Admin {
	/**
	 * The post type of TEC events.
	 *
	 * @var string
	 */
	private $tec_post_type;

	/**
	 * __construct
	 */
	public function __construct() {
		if ( is_admin() && class_exists( 'Tribe__Events__Main' ) ) {

			try {
				$constant_reflex = new \ReflectionClassConstant( 'Tribe__Events__Main', 'POSTTYPE' );
				$tec_post_type   = $constant_reflex->getValue();
			} catch ( \ReflectionException $e ) {
				$tec_post_type = null;
			}

			if ( $tec_post_type !== null ) {
				$this->tec_post_type = $tec_post_type;
				add_action( 'admin_menu', array( &$this, 'count_pending' ) );
			}
		}
	}

	/**
	 * Count pending events and filter the menu item.
	 */
	public function count_pending() {
		global $menu;

		$menu_item = wp_list_filter(
			$menu,
			array( 2 => 'edit.php?post_type=' . $this->tec_post_type )
		);

		if ( ! empty( $menu_item ) ) {
			$menu_item_position = key( $menu_item );

			$args = array(
				'posts_per_page' => 100,
				'post_type'      => $this->tec_post_type,
				'post_status'    => array( 'pending' ),
			);

			$count = count( get_posts( $args ) );

			if ( $count > 99 ) {
				$count = '> 99';
			}

			if ( $count > 0 ) {
				$menu[ $menu_item_position ][0] .= ' <span class="awaiting-mod">' . $count . '</span>';
			}
		}
	}
}
