<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="header__top">
      <div class="container">

        <div class="logo header__logo">
          <?php the_custom_logo(); ?>
          <p class="logo__descr">Сопровождение деятельности <br>горнодобывающего предприятия</p>
        </div>

        <div class="phone header__phone">
          <a href="tel:<?php echo preg_replace('![^0-9]+!', '', get_field('phone', 'option')); ?>" class="phone__tel"><?php the_field('phone', 'option'); ?></a>
          <a href="#" class="phone__callback callback_open">Заказать звонок</a>
          <p class="phone__descr">Звонок для всех телефонов РФ бесплатно</p>
        </div>

        <button type="button" class="nav-toggle">
          <span class="nav-toggle__line"></span>
        </button>

      </div>
    </div>
    <!-- /.header__top -->

    <div class="header__bottom">
      <div class="container">

        <nav class="nav">
          <ul class="nav-list">
            <li>
              <a href="#services">Экологическое сопровождение</a>
            </li>
            <li>
              <a href="#services">Оформление водного объекта</a>
            </li>
            <li>
              <a href="#services">Оформление право пользования лицензионным участком</a>
            </li>
            <li>
              <a href="#price">Цена</a>
            </li>
            <li>
              <a href="#teams">О компании</a>
            </li>
          </ul>
        </nav>

      </div>
    </div>

  </header><!-- /.header-->

  <div class="content">