<?php
/**
 * The Template for displaying all single posts
 */
get_header();
?>
<div id="content" class="sobt-single">
  <?php if(have_posts()): while ( have_posts() ): the_post();?>
    <?php get_template_part( 'partials/post/header' );?>
    <div class="container sobt-col-width">
      <div class="post-content sobt-dec-af">
        <?php the_content(); ?>
      </div>
      <?php if( has_tag() ):?>
        <div class="post-tags">
          <h5>Tagged Under:</h5>
          <?php the_tags( '', '', '' ); ?>
        </div>
      <?php endif;?>
      <?php get_template_part( 'partials/post/author-box' );?>
    </div>
  <?php endwhile; endif; ?>
  <?php get_template_part( 'partials/post/related-posts' ); ?>
</div>
<?php get_footer();?>
