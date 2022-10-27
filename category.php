<?php
/**
 * The template for displaying category page
 */
get_header();

$category = get_queried_object();

$template = ( $category->slug != 'interviews' ) ? 'grid3' : 'interviews'

?>
<div class="container wrapper-margin">
  <div class="row">
    <div class='col-sm-12'>
      <h1 class="text-center text-capitalize page-title"><?php _e( $category->name );?></h1>
      <div class="orbit-posts-wrapper">
        <?php echo do_shortcode("[orbit_query posts_per_page='-1' style='".$template."' cat='".$category->term_id."']"); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
