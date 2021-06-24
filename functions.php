<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */


 // Add Custom CSS & JS

 add_action('wp_enqueue_scripts', 'aob_enqueue_scripts', 999);
 
 function aob_enqueue_scripts() {
     $child_folder = trailingslashit( get_stylesheet_directory_uri() );
     
     wp_enqueue_style( 'aob-style', $child_folder . 'dist/main.css' );
     wp_enqueue_script( 'aob_script', $child_folder . 'dist/main.js', array(), wp_get_theme()->get('Version'), true );
 }