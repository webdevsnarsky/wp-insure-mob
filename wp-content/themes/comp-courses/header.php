<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comp-courses</title>
  <?php
  wp_head();
  ?>
</head>

<body>
  <header class="header">
    <div class="header__wrap">
      <div class="header__logo logo">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
          echo '<a href="index.php"><img src="' . esc_url($logo[0]) . '" alt="comp-courses" class="logo__image"></a>';
        }
        ?>
      </div>
      <div class="header__box">
        <div class="header__inner">

          <?php
          wp_nav_menu([
            'theme_location'  => 'primary',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'header__nav',
            'container_id'    => '',
            'menu_class'      => 'header__menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]);
          ?>
        </div>
      </div>
      <button class="header__button button">Зайти в кабинет</button>
      <div class="header__hamburger hamburger">
        <span class="hamburger__line"></span>
      </div>
    </div>
  </header>