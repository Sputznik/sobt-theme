<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
	$permalink = get_the_permalink();
?>
<div class="sobt-thumbnail-bg" style="background-image: url( <?php _e( $thumbnail );?> );">
  <a href="<?php _e( $permalink );?>" class="img-link"></a>
</div>
<?php echo do_shortcode("[sobt_coauthors]"); ?>
<div class="post-desc">
	<h4 class="title sobt-dec-af"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h4>
	<div class="post-excerpt"><?php the_excerpt(); ?></div>
	<div class="read-more"><span class="decoration" aria-hidden="true">&#8212;&#8212;&#8212;</span><a href="<?php _e( $permalink );?>">Read More</a></div>
</div>
