<?php
/**
 * The Template for displaying single posts having category interviews
 */
get_header();
?>
<div class="container single-header sobt-col-width">
  <h1 class="title"><?php the_title(); ?></h1>
  <div class="post-meta">
    <div class="social-share"><?php echo do_shortcode('[addtoany]');?></div>
  </div>
</div>
<div class="container sobt-col-width">
  <div class="post-content sobt-dec-af">
    <?php the_content(); ?>
  </div>
  <?php echo do_shortcode('[sobt_author_box headline="About the Interviewee(s)"]'); ?>
</div>
<?php get_footer();?>
