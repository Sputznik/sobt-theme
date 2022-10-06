<?php
/**
 * The Template for displaying all single posts
 */
get_header();
?>
<div id="content" class="sobt-single">
  <?php if( have_posts()  ): while( have_posts() ): the_post(); ?>
    <?php
      $single_template = "default";
      if( in_category('interviews') ){ $single_template = "interviews"; }
      get_template_part("partials/post/single-$single_template");
    ?>
  <?php endwhile; endif; ?>
</div>
<?php get_footer();?>
