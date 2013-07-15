<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_action('init','create_logo');
function create_logo(){
        $labels = array(
                'name' => 'Logos',
                'singular_name' => 'Logos',
                'add_new' => 'Add New',
                'add_new_item' => 'Add new logos',
                'edit' => 'Edit',
                'edit_item' => 'Edit logos information',
                'new_item' => 'New Logo',
                'view' => 'View',
                'view_item' => 'View logo details',
                'search_items' => 'Search logos',
                'not_found' => 'No logos found',
                'not_found_in_trash' => 'No logo information found in Trash',
                'parent' => 'Parent'
        );  
        $args = array(
                'labels' => $labels,
                'public' => true,
                'menu_position' => 15, 
                'supports' => array(
                        'title','editor','thumbnail',
                ),  
                'taxonomy' => array(''),
                'has_archive' => true
        );  
        register_post_type('logos',$args);
}
add_action('init','color_select');
function color_select(){
        $labels = array(
                'name' => 'Colors',
                'singular_name' => 'Colors',
                'add_new' => 'Add for another event',
                'add_new_item' => 'Add for another event',
                'edit' => 'Edit',
                'edit_item' => 'Edit event information',
                'new_item' => 'New event',
                'view' => 'View',
                'view_item' => 'View event details',
                'search_items' => 'Search events',
                'not_found' => 'No events found',
                'not_found_in_trash' => 'No event color information found in Trash',
                'parent' => 'Parent'
        );  
        $args = array(
                'labels' => $labels,
                'public' => true,
                'menu_position' => 15, 
                'supports' => array(
                        'title','editor','thumbnail',
                ),  
                'taxonomy' => array(''),
                'has_archive' => true
        );  
        register_post_type('colors',$args);
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_colors',
		'title' => 'Colors',
		'fields' => array (
			array (
				'default_value' => '#ffffff',
				'key' => 'field_51df3629370a0',
				'label' => 'Headings',
				'name' => 'headings',
				'type' => 'color_picker',
				'instructions' => 'Choose the color for the headings',
				'required' => 1,
			),
			array (
				'default_value' => '#ffffff',
				'key' => 'field_51df365f370a1',
				'label' => 'Background',
				'name' => 'background',
				'type' => 'color_picker',
				'instructions' => 'Choose the color for the background',
				'required' => 1,
			),
			array (
				'default_value' => '#ffffff',
				'key' => 'field_51df367f370a2',
				'label' => 'Text',
				'name' => 'textcolor',
				'type' => 'color_picker',
				'instructions' => 'Choose color for text',
				'required' => 1,
			),
			array (
				'default_value' => '#222222',
				'key' => 'field_51e317ae9f301',
				'label' => 'Navigation bar',
				'name' => 'navbar',
				'type' => 'color_picker',
				'instructions' => 'Choose the color for navigation bar',
				'required' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'colors',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_logos',
		'title' => 'Logos',
		'fields' => array (
			array (
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'key' => 'field_51df2f25e509c',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'image',
				'instructions' => 'Upload the Image/logo of the event',
				'required' => 1,
			),
			array (
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'key' => 'field_51df2f9ee509e',
				'label' => 'Footer',
				'name' => 'footer',
				'type' => 'image',
				'instructions' => 'Upload the footer image',
				'required' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'logos',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}


?>
