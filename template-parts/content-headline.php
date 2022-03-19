<div class="wp-block-columns">
  <?php $accent = 'accent-' . (get_field('headline_background') ?: '3'); ?>
  <div class="wp-block-column headline <?php echo $accent ?>">
    <?php if (get_field('headline')): ?>
      <?php the_field('headline'); ?>
    <?php else: ?>
      <p>
        Inclusion Nudges is a change approach developed in 2013 by <a href="/authors">Lisa Kepinski</a> and <a href="/authors">Tinna C. Nielsen</a> based on our extensive experience as global change makers for inclusion combined with our background in behavioural sciences. <a href="https://forumworkplaceinclusion.org/the-forum-on-workplace-inclusion-2021-diversity-award-winners-announced/" target="_blank" rel="noopener noreferrer">Winds of Change Award Honorable Mention 2021</a>
      </p>
    <?php endif; ?>
  </div>
</div>