<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
	$permalink = get_the_permalink();
?>
<div class="sobt-thumbnail-bg" style="background-image: url( <?php _e( $thumbnail );?> );">
  <a href="<?php _e( $permalink );?>" class="img-link">
    <!-- <div class="post-desc"> -->
    	<!-- <h4 class="title"><?php //the_title();?></h4> -->
      <?php //echo do_shortcode("[sobt_coauthors]"); ?>
    <!-- </div> -->
  </a>
</div>
