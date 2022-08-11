<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
	$permalink = get_the_permalink();
?>
<div class="sobt-thumbnail-bg" style="background-image: url( <?php _e( $thumbnail );?> );">
  <a href="<?php _e( $permalink );?>" class="img-link"></a>
</div>
<?php echo do_shortcode("[sobt_coauthors_links]"); ?>
<div class="post-desc">
	<h4 class="title sobt-dec-af"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h4>
	<div class="post-excerpt"><?php the_excerpt(); ?></div>
	<p><a class="read-more" href="<?php _e( $permalink );?>"><span class="decoration" aria-hidden="true"></span>Read More</a></p>
</div>
