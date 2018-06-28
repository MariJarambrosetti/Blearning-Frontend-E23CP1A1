<?php 

	// FUNCION CSS 
	
	
	function dl_enqueue_style_child() {

		/* Register */
		
		wp_register_style('mainStyle', get_theme_file_uri('/assets/css/style.css'),null, null, 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style_child' );

	// FUNCION SCRIPT 

	function dl_enqueue_scripts() {


		wp_register_script('mainJS', get_theme_file_uri('/assets/js/effects.js'), null, null, true);

		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

 ?>


 
 