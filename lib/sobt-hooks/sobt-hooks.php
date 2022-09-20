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
add_shortcode( 'sobt_coauthors', function(){
  $html = '<div class="coauthors">By ';
	if ( function_exists('coauthors') ) {
		$html .= coauthors( null, null, null, null, false );
	} else {
		$html .= get_the_author();
	}

  $html .= '</div>';

  return $html;

} );

// FILTER TO MODIFY NORMAL SITE LOGO
add_filter( 'sp_logo_template', function(){
  return SOBT_THEME_PATH.'/partials/logo.php';
});
