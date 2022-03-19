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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head() ?>
</head>
<body class="container">
  <header class="header">
    <div class="site-title">
      <h1>Let's make inclusion the norm<br>- everywhere, for everyone, by everyone!</h1>
      <?php echo get_custom_logo(); ?>
    </div>
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
  </header>
  <main class="content">