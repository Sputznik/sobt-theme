<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
	$permalink = get_the_permalink();
	$icon_path = SOBT_THEME_URI."/assets/images/quote.svg";
	$prefix 	 = '<span class="decoration" aria-hidden="true">&#8212;&#8212;</span>';
?>
<div class="sobt-thumbnail-bg" style="background-image: url( <?php _e( $thumbnail );?> );">
  <a href="<?php _e( $permalink );?>" class="img-link">
    <div class="post-desc">
			<span class="quote-icon" aria-hidden="true">
				<img src="<?php echo $icon_path; ?>" alt="Quote Icon" />
			</span>
    	<h4 class="title"><?php the_title();?></h4>
			<?php echo do_shortcode("[sobt_coauthors prefix='$prefix']"); ?>
    </div>
  </a>
</div>
