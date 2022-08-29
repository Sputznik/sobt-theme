<?php
/**
 * The template for displaying archive pages
 */
get_header();

$term = get_queried_object();
?>
<div class="container wrapper-margin">
  <div class="row">
    <div class='col-sm-12'>
      <h1 class="text-center text-capitalize page-title">Tagged Under: <?php _e( $term->name );?></h1>
      <div class="orbit-posts-wrapper">
        <?php echo do_shortcode("[orbit_query posts_per_page='9' style='grid3' pagination='1' ]"); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
