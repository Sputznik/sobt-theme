<?php

/*  CONSTANTS */
if( !defined( 'SOBT_THEME_URI' ) ) {
  define( 'SOBT_THEME_URI', get_stylesheet_directory_uri() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/sobt-hooks/sobt-hooks.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }


/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('sobt-css', SOBT_THEME_URI.'/assets/css/main.css', array('sp-core-style'), time() );
}, 99 );
