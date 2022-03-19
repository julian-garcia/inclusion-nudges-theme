<div class="<?php echo get_field('limit_width') ? 'limit' : '' ?>">
  <?php if (!get_field('hide_title')): ?>
  <h1><?php the_title(); ?></h1>
  <?php endif; ?>
  <?php the_content(); ?>
</div>
