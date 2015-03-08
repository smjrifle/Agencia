<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	/*$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';*/

	$options = array();

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

//general
	$options[] = array(
		'name' => __('General', 'options_check'),
		'type' => 'heading' );

	$options[] = array(
		'name' => __('Footer Address', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'footer-address',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => __('Google Analytics', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'google-analytics',
		'std' => '',
		'type' => 'textarea');

//for social
	$options[] = array(
		'name' => __('Social', 'options_check'),
		'type' => 'heading' );
	$options[] = array(
		'name' => __('Facebook Page', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'facebook-page',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Twitter Page', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'twitter-page',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Instagram Page', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'instagram-page',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Youtube Page', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'youtube-page',
		'std' => '',
		'type' => 'text');

//for home page
	$options[] = array(
		'name' => __('Home Page', 'options_check'),
		'type' => 'heading' );

//image 1
	$options[] = array(
		'name' => __('Promo 1', 'options_check'),
		'desc' => __('Upload image of 270px X 285px', 'options_check'),
		'id' => 'image-1',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Promo 1 Caption', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'caption-1',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => __('Promo 1 Link', 'options_check'),
		'desc' => __('', 'options_check'),
		'id' => 'link-1',
		'std' => '',
		'type' => 'text');
//image 1

//image 2
$options[] = array(
	'name' => __('Promo 2', 'options_check'),
	'desc' => __('Upload image ', 'options_check'),
	'id' => 'image-2',
	'type' => 'upload');
$options[] = array(
	'name' => __('Promo 2 Caption', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'caption-2',
	'std' => '',
	'type' => 'textarea');
$options[] = array(
	'name' => __('Promo 2 Link', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'link-2',
	'std' => '',
	'type' => 'text');
//image 2

//image 3
$options[] = array(
	'name' => __('Promo 3', 'options_check'),
	'desc' => __('Upload image ', 'options_check'),
	'id' => 'image-3',
	'type' => 'upload');
$options[] = array(
	'name' => __('Promo 3 Caption', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'caption-3',
	'std' => '',
	'type' => 'textarea');
$options[] = array(
	'name' => __('Promo 3 Link', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'link-3',
	'std' => '',
	'type' => 'text');
//image 3

//image 4
$options[] = array(
	'name' => __('Promo 4', 'options_check'),
	'desc' => __('Upload image ', 'options_check'),
	'id' => 'image-4',
	'type' => 'upload');
$options[] = array(
	'name' => __('Promo 4 Caption', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'caption-4',
	'std' => '',
	'type' => 'textarea');
$options[] = array(
	'name' => __('Promo 4 Link', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'link-4',
	'std' => '',
	'type' => 'text');
//image 4

	return $options;
}