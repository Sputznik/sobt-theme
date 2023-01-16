<?php
/**
 * The template for displaying search results.
 */
	get_header();
	$search_str = get_search_query();
?>

<div class="container wrapper-margin">
	<?php if( have_posts() ) : ?>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-title text-center">
					Search Results <?php if( strlen( trim( $search_str ) ) != 0 ){ printf( esc_html__( 'for: "%s"', 'sobt-theme' ), $search_str ); }?>
				</h1>
			</div>
		</div>
		<?php get_template_part( 'partials/post-list' );?>
		<!-- PAGINATION -->
		<div class="sobt-pagination">
	    <?php
	      the_posts_pagination(
	        array(
	          'mid_size' 	=> 1,
	          'prev_text' => __( '&laquo;' ),
	          'next_text' => __( '&raquo;' )
	        )
	      );
	    ?>
	  </div>
		<?php else : ?>
			<div class="row">
				<div class="col-sm-12">
					<div class="sobt-nothing-found text-center">
						<h2><?php _e( 'Sorry, we couldn’t find any matching results.', 'sobt-theme' ); ?></h2>
						<button data-toggle="modal" data-target="#search-modal">Search Again</button>
					</div>
				</div>
			</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
