<?php
/*================================================
#Load the Parent theme style.css file
================================================*/
function dt_enqueue_styles() {
	$parenthandle = 'divi-style'; 
	$theme = wp_get_theme();
	wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
		array(),  // if the parent theme code has a dependency, copy it to here
		$theme->parent()->get('Version')
	);
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get('Version') 
	);
}
add_action( 'wp_enqueue_scripts', 'dt_enqueue_styles' );



/*================================================
# Load custom Contact Form Module
# https://help.elegantthemes.com/en/articles/2865589-moving-contact-form-module-to-child-theme
================================================*/
function divi_custom_contact_form() {
	get_template_part( '/includes/ContactForm' );
	$dcfm = new Custom_ET_Builder_Module_Contact_Form();
	remove_shortcode( 'et_pb_contact_form' );
	add_shortcode( 'et_pb_contact_form', array( $dcfm, '_render' ) );
}
add_action( 'et_builder_ready', 'divi_custom_contact_form' );

function divi_custom_contact_form_class( $classlist ) { 
    // Contact Form Module 'classname' overwrite. 
    $classlist['et_pb_contact_form'] = array( 'classname' => 'Custom_ET_Builder_Module_Contact_Form',); 
    return $classlist; 
} 

add_filter( 'et_module_classes', 'divi_custom_contact_form_class' );