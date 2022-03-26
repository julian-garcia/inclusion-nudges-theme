<?php get_header(); ?>
<div class="<?php echo get_field('limit_width') ? 'limit' : '' ?>">
  <?php 
    $questions = new WP_Query(array(
      'post_type' => 'testimonial',
      'orderby' => 'rand',
    ));
    while($questions->have_posts() ):
    $questions->the_post(); 
  ?>
    <div class="testimonial-card">
      <p class="quote"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
      <p class="source"><?php echo get_the_title(); ?><br><?php echo get_the_excerpt(); ?></p>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
