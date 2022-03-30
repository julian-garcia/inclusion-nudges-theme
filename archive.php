<?php get_header(); ?>
<div class="wp-block-columns">
  <div class="wp-block-column headline accent-3">
    <h2 style="font-size: 1.4rem; text-align: center; margin: 1rem auto;">
      <?php 
        if ( is_category() ) {
            single_cat_title();
        } elseif ( is_tag() ) {
            single_tag_title();
        } elseif ( is_author() ) {
            echo get_the_author();
        }
      ?>
    </h2>
  </div>
</div>

<div class="limit" style="margin-bottom: 40px">
  <?php  while(have_posts()): the_post(); ?>
  <div style="margin: 3rem 0 3rem">
    <h3 style="margin-bottom: 10px">
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h3>
    <p style="margin: 0">
      <a href="<?php the_permalink() ?>">
      <?php $excerpt = substr( get_the_excerpt(), 0, 120 ); 
        echo substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );?>
      </a>
    </p>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
