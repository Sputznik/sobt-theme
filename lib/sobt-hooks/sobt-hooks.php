<?php

/* SHORTCODE TO RETURN THE COAUTHOR LINKS */
add_shortcode( 'sobt_coauthors_links', function(){
  $html = '<div class="coauthors-link">By ';
	if ( function_exists('coauthors_posts_links') ) {
		$html .= coauthors_posts_links( null, null, null, null, false );
	} else {
		$html .= get_the_author_posts_link();
	}

  $html .= '</div>';

  return $html;

} );

/* SHORTCODE TO RETURN THE COAUTHORS */
add_shortcode( 'sobt_coauthors', function( $atts ){
  $args = shortcode_atts( array(
    'prefix'  => 'By'
  ), $atts );

  $html = "<div class='coauthors'>{$args['prefix']} ";
	if ( function_exists('coauthors') ) {
		$html .= coauthors( null, null, null, null, false );
	} else {
		$html .= get_the_author();
	}

  $html .= "</div>";

  return $html;

} );

/* SHORTCODE TO RETURN THE AUTHOR BOX */
add_shortcode( 'sobt_author_box', function( $atts ){
  $args = shortcode_atts( array(
    'headline' => 'About the Author(s)'
  ), $atts );

  ob_start();
  include( SOBT_THEME_PATH . "/partials/post/author-box.php" );
  return ob_get_clean();

} );

// FILTER TO MODIFY NORMAL SITE LOGO
add_filter( 'sp_logo_template', function(){
  return SOBT_THEME_PATH.'/partials/logo.php';
});
