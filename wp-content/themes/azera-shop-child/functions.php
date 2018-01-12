<?php 
	 add_action( 'wp_enqueue_scripts', 'azera_child_enqueue_styles' );
	 function azera_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>