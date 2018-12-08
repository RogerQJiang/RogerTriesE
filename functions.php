<?php


function mat_assets() {
  wp_enqueue_style( 'theme_style_reset', get_template_directory_uri()."reset.css" );
  wp_enqueue_style( 'theme_styles', get_stylesheet_uri(), array('theme_style_reset'));
  wp_enqueue_style( 'theme_fonts', '//fonts.google.com/?selection.family=Lato:400,700|Roboto' );
}
add_action( 'wp_enqueue_scripts', 'mat_assets' );


?>
