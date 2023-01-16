<div class="sobt-post-list">
  <?php while( have_posts() ) : the_post(); ?>
    <article class="row post-list-item">
      <div class="col-md-4">
        <?php
          $post_id = get_the_ID();
          $permalink = get_the_permalink();
          $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
        ?>
        <div class="orbit-thumbnail-bg sobt-thumbnail-bg" style="background-image: url('<?php _e( $thumbnail[0] );?>');">
          <a href="<?php _e( $permalink );?>"></a>
        </div>
      </div>
      <div class="col-md-8 post-content">
        <div class="post-content-head">
          <?php if( has_category() ):?>
            <div class="post-categories"><?php the_category(', '); ?></div>
          <?php endif;?>
          <h3 class="post-title"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h3>
        </div>
        <p>By <?php
          if ( function_exists('coauthors_posts_links') ) {
            coauthors_posts_links();
          } else { the_author_posts_link(); } ?> on <?php the_time( 'F jS Y' );?></p>
        <div class="post-excerpt"><?php the_excerpt();?></div>
        <a class="read-more" href="<?php _e( $permalink );?>">Read More</a>
      </div>
    </article>
  <?php endwhile; ?>
</div>
