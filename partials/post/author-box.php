<?php
/**
 * The template for displaying author-box on single posts
*/
 if( function_exists( 'get_coauthors' ) ):
?>
<div class="single-post-author-box">
  <h5 class="title"><?php echo $args['headline']; ?></h5>
  <?php $coauthors = get_coauthors(); foreach( $coauthors as $coauthor ): ?>
    <div class="post-author-box">
      <div class="author-avatar">
        <?php echo get_avatar( $coauthor->ID, 150 ); ?>
      </div>
      <div class="author-info">
        <h4 class="author-name"><?php _e( $coauthor->display_name ); ?></h4>
        <div class="author-bio">
          <?php _e( $coauthor->description ); ?>
        </div>
      </div>
    </div>
  <?php endforeach;?>
</div>
<?php endif;?>
