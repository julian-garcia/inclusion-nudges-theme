<!DOCTYPE html>
<html lang="en">
<head>
  <?php if(is_front_page()): ?>
    <title><?php bloginfo( 'name' ); ?></title>
  <?php else: ?>
    <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
  <?php endif; ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (is_tag()): ?>
  <meta name="description" content="Inclusion Nudges Articles: <?php echo single_tag_title() ?>"/>
  <?php elseif (is_search()): ?>
  <meta name="description" content="Inclusion Nudges search results for: <?php echo $_GET['s'] ?>"/>
  <?php elseif (get_the_excerpt()): ?>
  <meta name="description" content="<?php echo get_the_excerpt() ?>"/>
  <?php endif; ?>
  <meta name="theme-color" content="#FFFFFF" />
  <?php wp_head() ?>
</head>
<body class="container">
  <header class="header no-print">
    <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => 'nav',
          'theme_location' => 'primary',
          'menu_class' => 'menu'
        )
      );
    ?>
    <div class="site-title">
      <div class="small-only">
        <?php echo get_custom_logo(); ?>
      </div>
      <h1>Let's make inclusion the norm<br>- everywhere, for everyone, by everyone!</h1>
      <?php echo get_custom_logo(); ?>
    </div>
    <input type="checkbox" name="mobile" id="mobile" class="mobile-toggle">
    <label for="mobile">&nbsp;</label>
    <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => 'nav',
          'container_class' => 'mobile-menu-container',
          'theme_location' => 'primary',
          'menu_class' => 'mobile-menu'
        )
      );
    ?>
  </header>
  <main class="content">