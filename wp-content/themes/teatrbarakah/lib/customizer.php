<?php
/**
 * Add customizer menus and options here.
 * Learn more about customizer: {@link https://codex.wordpress.org/Theme_Customization_API}
 *
 * @package Teatrbarakah
 */

/**
 * Adds the action and filter hooks to integrate with WordPress.
 */

add_action('customize_register', 'action_customize_register');

/**
 * Adds postMessage support for site title and description, plus a custom Theme Options section.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
 */
function action_customize_register(WP_Customize_Manager $wp_customize)
{
	// do something
}


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

	// Check function exists.
	if (function_exists('acf_add_options_page')) {
		// Add parent.
		$parent = acf_add_options_page(array(
			'page_title' => __('Theme General Settings'),
			'menu_title' => __('Theme Settings'),
			'redirect' => false,
		));
	}
}

add_filter('get_search_form', 'filter_function_name_2865', 10, 2);
function filter_function_name_2865($form, $args)
{
	// filter...
	$form = '<form role="search" method="get" class="search-form" action="' . home_url() . '">
				<input type="search" class="search-field" value="" name="s" />
				<div class="button-search">
				<img src="'.get_template_directory_uri().'/assets/images/search-icon.png" alt="search-icon">
				
				<input type="submit" class="search-submit" value="" />
				</div>
			</form>';
	error_log(print_r($form, true));
	error_log(print_r($args, true));
	return $form;
}
