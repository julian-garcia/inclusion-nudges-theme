<div class="limit post article">
  <h1><?php the_title(); ?></h1>
  <?php if (get_field('authors')): ?>
    <p class="authors"> By
    <?php 
      $authors = get_field("authors");
      foreach( $authors as $author => $auth): 
        echo '<a href="/authors#' . $auth['user_email'] . '">' . $auth['display_name'] . '</a>';
        if ($author !== array_key_last($authors)) { echo ', '; }
        if ($author === array_key_last($authors) && get_field('external_author_name')) { 
          echo ', '; 
        }
      endforeach;
    ?>
  <?php endif; ?>
  <?php if (get_field('external_author_name')): ?>
    <?php if (!get_field('authors')): ?> <p class="authors"> By <?php endif; ?>
    <?php if (get_field('external_author_link')) { 
      echo '<a href="' . get_field('external_author_link') . '" target="_blank">' . get_field('external_author_name') . '</a>';
    } else {
      echo get_field('external_author_name');
    }?>
  <?php endif; ?>
  </p>
  <p class="has-text-align-center">
    <?php the_post_thumbnail(); ?>
  </p>
  <p>
    <img class="read-icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/eye.png" alt="">
    <?php echo floor(str_word_count(get_the_content()) / 250); ?> minute read
  <p>
  <?php the_content(); ?>
  <div class="social-share no-print">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="noreferrer">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/facebook-dark.svg" alt="">
    </a>
    <a href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&amp;url=<?php echo get_the_permalink(); ?>" target="_blank" rel="noreferrer">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/twitter-dark.svg" alt="">
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_the_permalink(); ?>" target="_blank" rel="noreferrer">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/linkedin-dark.svg" alt="">
    </a>
    <a href="mailto:?&amp;subject=<?php echo get_the_title(); ?>&amp;body=<?php echo get_the_permalink(); ?>" target="_blank" rel="noreferrer">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/email-dark.svg" alt="">
    </a>
    <a onclick="window.print();">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/print.svg" alt="">
    </a>
    <a title="See all blog posts" href="/blog">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/back.svg" alt="">
    </a>
  </div>
</div>
