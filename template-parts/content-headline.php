<?php if (!get_field('hide_headline')): ?>
<div class="wp-block-columns">
  <?php $accent = 'accent-' . (get_field('headline_background') ?: '3'); ?>
  <div class="wp-block-column headline <?php echo $accent ?>">
    <?php if (get_field('headline')): ?>
      <?php the_field('headline'); ?>
      <?php if(!is_front_page()): ?>
      <p style="top: -32px">
        <a href="/#book-series">
          <img class="books" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/book-series.png" alt="">
        </a>
      </p>
      <?php endif; ?>
    <?php else: ?>
      <p>
        Inclusion Nudges is a change approach developed in 2013 by <a href="/authors#lisa.kepinski@inclusion-institute.com">Lisa Kepinski</a> and <a href="/authors#tinna@movetheelephant.org">Tinna C. Nielsen</a> based on our extensive experience as global change makers for inclusion combined with our background in behavioural sciences. <a href="https://forumworkplaceinclusion.org/the-forum-on-workplace-inclusion-2021-diversity-award-winners-announced/" target="_blank" rel="noopener noreferrer">Winds of Change Award Honorable Mention 2021</a>
        <a href="/#book-series">
          <img class="books" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/book-series.png" alt="">
        </a>
      </p>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>