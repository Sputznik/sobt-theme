<?php
/**
 * The Default Template for displaying all single posts
 */
get_header();
?>
<?php get_template_part( 'partials/post/header' );?>
<div class="container sobt-col-width">
  <?php if( !empty( get_the_post_thumbnail() ) ):?>
    <div class="featured-img"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></div>
  <?php endif;?>
  <div class="post-content sobt-dec-af">
    <?php the_content(); ?>
  </div>
  <?php if( has_tag() ):?>
    <div class="post-tags">
      <h5>Tagged Under:</h5>
      <?php the_tags( '', '', '' ); ?>
    </div>
  <?php endif;?>
  <?php echo do_shortcode("[sobt_author_box]"); ?>
</div>
<?php get_template_part( 'partials/post/related-posts' ); ?>
