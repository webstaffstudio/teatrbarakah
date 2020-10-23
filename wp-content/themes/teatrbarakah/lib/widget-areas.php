<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Teatrbarakah
 */

/**
 * teatrbarakah_widgets_init
 *
 * @return void
 */
function teatrbarakah_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'teatrbarakah' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'teatrbarakah' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'teatrbarakah_widgets_init' );
