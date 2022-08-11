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
