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
