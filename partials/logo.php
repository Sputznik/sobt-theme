<?php
/**
 * The template for displaying different site logos based on the route
*/

global $sp_customize;

$option = $sp_customize->get_option();

$nav_transparent = sp_is_sticky_nav_transparent();

if( is_page() && $nav_transparent ){
	$logo_template = "logo.php";
} else{
	$logo_template = "logo_sticky.php";
}

include( get_template_directory()."/partials/$logo_template" );
