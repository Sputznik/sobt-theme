<?php
/**
 * The template for displaying single post header.
 */
?>
<div class="container single-header sobt-col-width">
  <h1 class="title"><?php the_title(); ?></h1>
  <div class="excerpt"><?php the_excerpt(); ?></div>
  <div class="post-meta">
    <?php echo do_shortcode("[sobt_coauthors]"); ?>
    <div class="social-share"><?php echo do_shortcode('[addtoany]');?></div>
  </div>
</div>
<?php if( !empty( get_the_post_thumbnail() ) ): $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>
  <div class="featured-img" style="background-image:url( <?php _e( $image_url );?> );" role="img" aria-label="<?php _e( get_the_title( $post->ID ) ); ?>"></div>
<?php endif;?>
