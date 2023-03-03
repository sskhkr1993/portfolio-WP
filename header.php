<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="discription" content="くらきのポートフォリオサイト。Webサイトの制作やご相談などお気軽にお問い合わせください">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('')); ?>" type="image/svg+xml">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="l-wrapper">
  <?php wp_body_open(); ?>
  <!--header-->
  <header class="l-header header">
    <div class="header-logo">
      <div class="header-logo__item">
        <h1 class="header-logo__heading">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo__link"><?php bloginfo('name'); ?></a>
        </h1>
      </div>
    </div>
    <!--menuボタン-->
    <button class="header__button">
      <p class="header__button__text">MENU</p>
      <span class="button--nav"></span>
    </button>
    <!--navi-->
    <?php wp_nav_menu(
      array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'main-nav',
        'menu_class' => 'main-nav__list'
      )
    ); ?>
  </header>