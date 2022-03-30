<?php get_header(); ?>
<div class="limit">
<?php  if(!have_posts()): ?>
  <h2>Sorry, we couldn't find any articles relating to: "<?php echo $_GET['s']; ?>"</h2>
<?php else: ?>
  <h2>Search results for: <?php echo $_GET['s']; ?></h2>
<?php endif; ?>
<?php get_template_part('template-parts/content', 'search'); ?>
</div>
<?php get_footer(); ?>
