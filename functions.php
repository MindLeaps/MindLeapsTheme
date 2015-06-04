<?php 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

function get_kurema_classes() {
	$args = array(
		'post_type' => 'class',
		'numberposts' => -1
	);


	$classes = get_posts($args);
	$ret = array();
	foreach ($classes as $class) {
		$class_data = array();

		$class_data['country'] = get_post_meta($class->ID, 'wpcf-country', TRUE);
		if ($class_data['country'] === 'US') {
			$class_data['country'] = $class_data['country'].'-'.get_post_meta($class->ID, 'wpcf-state', TRUE);
		}

		$class_data['title'] = $class->post_title;
		$class_data['description'] = wpautop($class->post_content);

		array_push($ret, $class_data);

	}

	header('Content-type: application/json');
	header('Access-Control-Allow-Origin: *');
	echo json_encode($ret);
	die();  

}

add_action('wp_ajax_get_kurema_classes', 'get_kurema_classes');
add_action('wp_ajax_nopriv_get_kurema_classes', 'get_kurema_classes');
