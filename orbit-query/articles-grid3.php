<div id="<?php _e( $atts['id'] );?>" class="sobt-grid sobt-grid-3" data-target="article.post-card" data-url="<?php _e( $atts['url'] );?>">
	<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
    <article class="post-card">
      <?php get_template_part( 'partials/orbit/post-card' );?>
    </article>
	<?php endwhile;?>
</div>
