<?php
  /**
   * Template Name: Главная
   */
  get_header(); ?>

<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'hero' ): ?>

        <section class="hero" style="background-image: url(<?php echo THEME_URL; ?>/images/general/hero.jpg);">
          <div class="container">

            <div class="row">

              <div class="col-lg-7 col-xl-6">
                <div class="hero__content">
                  <?php the_sub_field('content'); ?>
                </div>
              </div>

              <div class="col-lg-5 col-xl-6">
                <div class="hero__video">
                  <a href="<?php echo esc_url(get_sub_field('link_video')); ?>" class="hero__video-btn" data-fancybox>
                    <?php hv_the_icon('play', 'hero__video-btn-icon'); ?>
                    <span>Узнать все <br>за 120 сек.</span>
                  </a>
                </div>

                <div class="hero__calendar-wrap">
                  <h4><span>Хотите избежать штрафов?</span> <br>Сдавайте отчетность вовремя</h4>

                  <p class="hero__calendar">
                    <?php hv_the_icon('calendar', 'hero__calendar-icon'); ?>
                    Персональный календарь <br>отчетности
                  </p>

                  <?php if (get_sub_field('link_calendar')): ?>
                    <div class="btn-wrap">
                      <a href="<?php echo esc_url(get_sub_field('link_calendar')); ?>" class="btn" target="_blank">Скачать Бесплатно</a>
                      <span class="btn-descr">Нажмите кнопку, чтобы БЕСПЛАТНО <br>скачать календарь экологической <br>отчетности</span>
                    </div>
                  <?php endif; ?>
                </div>

              </div>

            </div>


            <span class="hero-scroll">Листайте вниз</span>
          </div>
        </section>


      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="client">
  <div class="container">
    <h2 class="section-title">По степени воздействия на окружающую среду Горнодобывающие предприятия делятся на 2 категории</h2>
    <div class="client__wrap">
      <div class="row">
        <div class="col-lg-6">
          <div class="client__item">
            <img src="<?php echo THEME_URL; ?>/images/content/client-1.png" alt="">
            <div class="client__item-content">
              <p class="client__item-title">Объекты I категории</p>
              <span class="client__item-subtitle">объекты, оказывающие значительное негативное воздействие на окружающую среду</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="client__item">
            <img src="<?php echo THEME_URL; ?>/images/content/client-2.png" alt="">
            <div class="client__item-content">
              <p class="client__item-title">объекты II категории</p>
              <span class="client__item-subtitle">объекты,оказывающие умеренное негативное воздействие на окружающую среду</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="btn-wrap">
      <a href="#" class="btn test_open">Пройти тест</a>
      <span class="btn-descr">Нажмите кнопку, <br>чтобы узнать свою категорию</span>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.client -->

<div class="container">
  <div class="banner-form banner-form--mb120">
    <div class="banner-form__content">
      <blockquote>
        <?php hv_the_icon('auction'); ?>
        <p>Невыполнение или несвоевременное выполнение обязанности по подаче заявки на постановку на государственный учет объектов, оказывающих негативное воздействие на окружающую среду</p>
      </blockquote>

      <div class="banner-form__content-row">
        <p class="banner-form__content-fine">Штраф <span>100 000</span> рублей</p>
        <span class="banner-form__content-article">КоАП РФ Статья 8.46.</span>
      </div>
    </div>

    <div class="banner-form__form">
      <?php echo do_shortcode('[contact-form-7 id="91" title="Форма консультация"]'); ?>
    </div>
  </div>
</div>

<?php

  if( have_rows('home_layout') ):

    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'services' ): ?>

        <section class="services" id="services">
          <div class="container">
            <div class="section-head">
              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <?php if (get_sub_field('descr')): ?>
                <p><?php the_sub_field('descr'); ?></p>
              <?php endif; ?>
            </div>

            <?php if (have_rows('list')): ?>
              <div class="services-tabs">
                <ul class="services-tabs__list">
                  <?php $i = 0; while (have_rows('list')): the_row(); ?>
                    <li>
                      <a href="#services-<?php echo $i++; ?>"><?php the_sub_field('title'); ?></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
                <?php $j = 0; while (have_rows('list')): the_row(); ?>
                  <div class="services-tabs__item" id="services-<?php echo $j++; ?>">
                    <?php if (have_rows('list_item')): ?>
                      <div class="row">
                        <?php while (have_rows('list_item')): the_row(); ?>
                          <div class="col-md-6 col-lg-4">
                            <div class="services-tabs__wrap">
                              <?php echo wp_get_attachment_image(get_sub_field('icon'), 'thumbnail', false, array('class' => 'services-tabs__icon')); ?>
                              <p><?php the_sub_field('text'); ?></p>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>
          <!-- /.container -->
        </section>
        <!-- /.services -->


      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="for-client">
  <div class="container">
    <h2 class="section-title">Комплексное экологическое разрешение (КЭР)</h2>

    <div class="row">

      <div class="col-xl-4">
        <p class="for-client__title">Для кого:</p>

        <div class="for-client__img-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/for-client-1.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-8">

        <p class="for-client__title for-client__title--short">Комплексное экологическое разрешение <br>КЭР содержит:</p>

        <div class="for-client__wrap">
          <div class="blocks blocks--1">
            <div class="blocks__item is-active" style="top: 0; z-index: 5;"></div>
            <div class="blocks__item" style="top: 30px; z-index: 4;"></div>
            <div class="blocks__item" style="top: 60px; z-index: 3;"></div>
            <div class="blocks__item" style="top: 90px; z-index: 2;"></div>
            <div class="blocks__item" style="top: 120px; z-index: 1;"></div>
            <div class="blocks__item" style="top: 150px; z-index: 0;"></div>
          </div>

          <div class="for-client-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Технологические нормативы</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Нормативы допустимых выбросов (далее – НДВ), сбросов (НДС)</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Нормативы допустимых физических воздействий</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Нормативы образования отходов и лимиты на их размещение</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Требования к обращению с отходами производства и потребления</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Согласованную программу производственного экологического контроля</p>
              </div>
            </div>
            <div class="swiper-btn-wrap">
              <div class="swiper-button-prev">
                <?php hv_the_icon('arrow-left'); ?>
                Назад
              </div>
              <div class="swiper-button-next">
                Далле
                <?php hv_the_icon('arrow-right'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<div class="container">
  <div class="download-banner">
    <img src="<?php echo THEME_URL; ?>/images/general/pdf.png" alt="" class="download-banner__icon">
    <p class="download-banner__text">Нажмите кнопку, чтобы БЕСПЛАТНО  скачать инструкцию</p>
    <a href="<?php the_field('instruction', 'option'); ?>" class="btn" target="_blank" download>Скачать Инструкцию</a>
  </div>
</div>

<section class="info">
  <div class="container">
    <h2 class="section-title">Ответственность за отсутствие комплексного <br>экологического разрешения</h2>
    <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2">
        <div class="info-card">
          <h3 class="info-card__title">без разрешения</h3>
          <ul class="info-card__list">
            <li>Штраф 100 000 рублей</li>
            <li>плата НВОС без разрешения: <br>Ежегодно 2 125 000 рублей</li>
          </ul>

          <div class="info-card__total">
            <span>итого:</span>
            <p>2 225 000 рублей</p>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-5 col-md-6">
        <div class="info-card info-card--green">
          <h3 class="info-card__title">С разрешением</h3>
          <ul class="info-card__list">
            <li>Штраф отсуствует</li>
            <li>плата НВОС с разрешением: <br>Ежегодно 80 000 рублей</li>
          </ul>

          <div class="info-card__total">
            <span>итого:</span>
            <p>80 000 рублей</p>
          </div>
        </div>
      </div>
    </div>

    <div class="banner-form banner-form--list">
      <div class="banner-form__content">
        <img src="<?php echo THEME_URL; ?>/images/general/doc.png" alt="">
        <h3>Необходимо оформить КЭР?</h3>
        <p>Нажмите кнопку что бы бесплатно получить консультацию об услуге и мы расскажем:</p>
        <ul>
          <li>Какую документацию необходимо разработать что бы  оформить КЭР ?</li>
          <li>Какие есть подводные камни в оформлении КЭР?</li>
          <li>Сколько будет стоить наша услуга по оформлению КЭР?</li>
        </ul>
      </div>

      <div class="banner-form__form">
        <?php echo do_shortcode('[contact-form-7 id="91" title="Форма консультация"]'); ?>
      </div>
    </div>

  </div>
</section>

<section class="for-client">
  <div class="container">
    <h2 class="section-title">Декларация о воздействии на окружающую среду <br>(ДВОС)</h2>

    <div class="row">

      <div class="col-xl-4">
        <p class="for-client__title">Для кого:</p>

        <div class="for-client__img-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/for-client-2.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-8">

        <p class="for-client__title for-client__title--short">Декларация ДВОС содержит информацию:</p>

        <div class="for-client__wrap">
          <div class="blocks blocks--2">
            <div class="blocks__item is-active" style="top: 0; z-index: 6;"></div>
            <div class="blocks__item" style="top: 30px; z-index: 5;"></div>
            <div class="blocks__item" style="top: 60px; z-index: 4;"></div>
            <div class="blocks__item" style="top: 90px; z-index: 3;"></div>
            <div class="blocks__item" style="top: 120px; z-index: 2;"></div>
            <div class="blocks__item" style="top: 150px; z-index: 1;"></div>
            <div class="blocks__item" style="top: 180px; z-index: 0;"></div>
          </div>

          <div class="for-client-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О видах и объемах производимой продукции (товара)</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>2О реализации природоохранных мероприятий</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Об авариях и инцидентах на предприятии за последние 7 лет, в результате которых возникло негативное воздействие на окружающую среду</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О выбросах загрязняющих веществ в атмосферный воздух</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О сбросах загрязняющих веществ в водоемы</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О массе и объеме образования и размещения отходов</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О программе производственного экологического контроля</p>
              </div>
            </div>
            <div class="swiper-btn-wrap">
              <div class="swiper-button-prev">
                <?php hv_the_icon('arrow-left'); ?>
                Назад
              </div>
              <div class="swiper-button-next">
                Далле
                <?php hv_the_icon('arrow-right'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<div class="container">
  <div class="download-banner">
    <img src="<?php echo THEME_URL; ?>/images/general/pdf-red.png" alt="" class="download-banner__icon">
    <p class="download-banner__text">Нажмите кнопку, чтобы БЕСПЛАТНО  скачать инструкцию</p>
    <a href="<?php the_field('instruction', 'option'); ?>" class="btn" target="_blank" download>Скачать Инструкцию</a>
  </div>
</div>

<section class="info">
  <div class="container">
    <h2 class="section-title">Ответственность за отсутствие декларации</h2>
    <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2">
        <div class="info-card">
          <h3 class="info-card__title">Без декларации</h3>
          <ul class="info-card__list">
            <li>Штраф 80 000 рублей</li>
            <li>плата НВОС без декларации: <br>Ежегодно 187 000 рублей</li>
          </ul>

          <div class="info-card__total">
            <span>итого:</span>
            <p>267 000 рублей</p>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-5 col-md-6">
        <div class="info-card info-card--green">
          <h3 class="info-card__title">С декларацией</h3>
          <ul class="info-card__list">
            <li>Штраф отсуствует</li>
            <li>плата НВОС с декларацией: <br>Ежегодно 7 500 рублей</li>
          </ul>

          <div class="info-card__total">
            <span>итого:</span>
            <p>7 500 рублей</p>
          </div>
        </div>
      </div>
    </div>

    <div class="banner-form banner-form--list">
      <div class="banner-form__content">
        <img src="<?php echo THEME_URL; ?>/images/general/doc-2.png" alt="">
        <h3>Необходимо оформить ДВОС?</h3>
        <p>Нажмите кнопку что бы бесплатно получить консультацию об услуге и мы расскажем:</p>
        <ul>
          <li>Какую документацию необходимо разработать чтобы  оформить ДВОС ?</li>
          <li>Какие есть подводные камни в оформлении ДВОС?</li>
          <li>Сколько будет стоить наша услуга по оформлению ДВОС?</li>
        </ul>
      </div>

      <div class="banner-form__form">
        <?php echo do_shortcode('[contact-form-7 id="91" title="Форма консультация"]'); ?>
      </div>
    </div>

  </div>
</section>

<section class="for-client">
  <div class="container">
    <h2 class="section-title">Программа производственного экологического контроля <br>ПЭК</h2>

    <div class="row">

      <div class="col-xl-4">
        <p class="for-client__title">Для кого:</p>

        <div class="for-client__img-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/for-client-3.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-8">

        <p class="for-client__title for-client__title--short">Программа ПЭК содержит информацию:</p>

        <div class="for-client__wrap">
          <div class="blocks blocks--3">
            <div class="blocks__item is-active" style="top: 0; z-index: 6;"></div>
            <div class="blocks__item" style="top: 30px; z-index: 5;"></div>
            <div class="blocks__item" style="top: 60px; z-index: 4;"></div>
            <div class="blocks__item" style="top: 90px; z-index: 3;"></div>
            <div class="blocks__item" style="top: 120px; z-index: 2;"></div>
            <div class="blocks__item" style="top: 150px; z-index: 1;"></div>
          </div>

          <div class="for-client-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Об инвентаризации выбросов загрязняющих веществ в атмосферный воздух</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О сбросов загрязняющих веществ в окружающую среду и их источников</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>Об инвентаризации отходов производства и потребленияи объектов их размещения</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О подразделениях и (или) должностных лицах, отвечающих за производственный экологический контроль</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О собственных и (или) привлекаемых аккредитованных испытательных лабораториях (центрах)</p>
              </div>
              <div class="for-client-slider__item swiper-slide">
                <img src="<?php echo THEME_URL; ?>/images/content/waste-water.svg" width="70" alt="" class="for-client-slider__icon" data-no-lazy="1">
                <p>О периодичности и методах осуществления производственного экологического контроля, местах отбора проб и методиках (методах) измерений</p>
              </div>
            </div>
            <div class="swiper-btn-wrap">
              <div class="swiper-button-prev">
                <?php hv_the_icon('arrow-left'); ?>
                Назад
              </div>
              <div class="swiper-button-next">
                Далле
                <?php hv_the_icon('arrow-right'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<div class="container">
  <div class="download-banner">
    <img src="<?php echo THEME_URL; ?>/images/general/pdf-blue.png" alt="" class="download-banner__icon">
    <p class="download-banner__text">Нажмите кнопку, чтобы БЕСПЛАТНО  скачать инструкцию</p>
    <a href="<?php the_field('instruction', 'option'); ?>" class="btn" target="_blank" download>Скачать Инструкцию</a>
  </div>
</div>

<section class="eco-control">
  <div class="container">
    <h2 class="section-title">Ответственность за отсутствие программы <br>Производственного Экологического Контроля:</h2>
    <div class="banner-form banner-form--no-bg">
      <div class="banner-form__content">
        <blockquote>
          <?php hv_the_icon('auction'); ?>
          <p>Сокрытие, умышленное искажение или несвоевременное сообщение полной и достоверной информации о состоянии окружающей среды и природных ресурсов, об источниках загрязнения окружающей среды и природных ресурсов или иного вредного воздействия на окружающую среду и природные ресурсы</p>
        </blockquote>

        <div class="banner-form__content-row">
          <p class="banner-form__content-fine">Штраф <span>80 000</span> рублей</p>
          <span class="banner-form__content-article">КоАП РФ Статья 8.5.</span>
        </div>
      </div>
    </div>

    <div class="banner-form banner-form--list">
      <div class="banner-form__content">
        <img src="<?php echo THEME_URL; ?>/images/general/doc-3.png" alt="">
        <h3>Необходимо оформить программу ПЭК?</h3>
        <p>Нажмите кнопку что бы бесплатно получить консультацию об услуге и мы расскажем:</p>
        <ul>
          <li>Какую документацию необходимо разработать чтобы оформить программу ПЭК?</li>
          <li>Какие есть подводные камни в разработке програмы ПЭК?</li>
          <li>Сколько будет стоить наша услуга по разработке программы ПЭК?</li>
        </ul>
      </div>

      <div class="banner-form__form">
        <?php echo do_shortcode('[contact-form-7 id="91" title="Форма консультация"]'); ?>
      </div>
    </div>

  </div>
</section>

<section class="we-can">
  <div class="container">
    <h2 class="section-title">А еще мы можем…</h2>
    
    <div class="we-can__wrap">
      <div class="row">
        <div class="col-lg-6">
          <div class="we-can__item">
            <div class="we-can__icon-wrap">
              <?php hv_the_icon('paper'); ?>
            </div>
            <h3 class="we-can__title">Сдача отчетности</h3>
            <p>Вы всегда можете обратиться к нам за разовой подготовкой и сдачей отчетности. Все подсчитаем, заполним, проверим и отправим в нужную инстанцию</p>
            <a href="#" class="btn callback_open" data-title="Сдача отчетности">Подробнее</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="we-can__item">
            <div class="we-can__icon-wrap">
              <?php hv_the_icon('plants'); ?>
            </div>
            <h3 class="we-can__title">Комплексное экологическое сопровождение</h3>
            <p>Вы всегда можете обратиться к нам за разовой подготовкой и сдачей отчетности. Все подсчитаем, заполним, проверим и отправим в нужную инстанцию</p>
            <a href="#" class="btn callback_open" data-title="Комплексное экологическое сопровождение">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="s-advantages">
  <div class="container">
    <h2 class="section-title">Почему нам можно доверять?</h2>

    <div class="row">
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('credit-card', 'advantages__icon'); ?>
            <span class="advantages__number">01</span>
          </div>
          <h3 class="advantages__title">Начало работы без <br>предоплаты</h3>
          <p>Вы ничем не рискуете платите только после того как увидите первые результаты</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('architecture-and-city', 'advantages__icon'); ?>
            <span class="advantages__number">02</span>
          </div>
          <h3 class="advantages__title">Опыт работы с предприятиями горнодобывающей отрасли</h3>
          <p>В команде работают специалисты с опытом работы на крупнейшых горнодобывающих предприятиях</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('file', 'advantages__icon'); ?>
            <span class="advantages__number">03</span>
          </div>
          <h3 class="advantages__title">Справимся с любым объёмом работы</h3>
          <p>Компания имеет более 10 внештатных проектировщиков что помагает обработать большой поток заказов</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 advantages">
        <div class="advantages__inner">
          <div class="advantages__icon-wrap">
            <?php hv_the_icon('auction', 'advantages__icon'); ?>
            <span class="advantages__number">04</span>
          </div>
          <h3 class="advantages__title">Оплатим ваши штрафы <br>за свой счет</h3>
          <p>Если вы получите штраф по нашей недоработке? Мы его оплатим.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'lab' ): ?>

        <section class="lab">
          <div class="container">
            <div class="section-head">
              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <?php the_sub_field('descr'); ?>
            </div>

            <div class="lab__wrap">
              <div class="lab__img lab__img--1">
                <a href="<?php echo wp_get_attachment_image_url(get_sub_field('img_1'), 'full'); ?>" data-fancybox="group">
                  <?php echo wp_get_attachment_image(get_sub_field('img_1'), 'large'); ?>
                </a>
              </div>
              <div class="lab__img">
                <a href="<?php echo wp_get_attachment_image_url(get_sub_field('img_2'), 'full'); ?>" data-fancybox="group">
                  <?php echo wp_get_attachment_image(get_sub_field('img_2'), 'large'); ?>
                </a>
              </div>
            </div>

          </div>
          <!-- /.container -->
        </section>
        <!-- /.lab -->


      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="stages" style="background-image: url(<?php echo THEME_URL; ?>/images/general/stages-bg.jpg);">
  <div class="container clearfix">
    <div class="stages__wrap">
      <h2 class="section-title">Этапы работы</h2>
      
      <div class="stages-tabs">
        <ul class="stages-tabs__list">
          <li><a href="#stage-1">1. Заявка</a></li>
          <li><a href="#stage-2">2. Оценка объёмов работы</a></li>
          <li><a href="#stage-3">3. Коммерческое предложение</a></li>
          <li><a href="#stage-4">4. Договор</a></li>
          <li>
            <a href="#stage-5">5. Инвентаризация
              <span class="stages-tabs__list-label">Первый авансовый платеж
                <?php hv_the_icon('ruble'); ?>
              </span>
            </a>
          </li>
          <li><a href="#stage-6">6. Разработка Проекта</a></li>
          <li>
            <a href="#stage-7">7. Согласование Проекта <br>с заказчиком
              <span class="stages-tabs__list-label">Второй авансовый платеж
                <?php hv_the_icon('ruble'); ?>
              </span>
            </a>
          </li>
          <li><a href="#stage-8">Согласование проекта с госорганами</a></li>
        </ul>

        <div class="stages-tabs__item" id="stage-1">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('customer-service', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">1. Заявка</h3>
          <p>Оставите заявку и мы вам перезвоним.</p>
          <p>Либо звоните бесплатно по тел. <br><a href="tel:88002506774">8 (800) 250-67-74</a></p>
          <a href="#" class="btn callback_open">Заказать звонок</a>
        </div>

        <div class="stages-tabs__item" id="stage-2">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('checklist', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">2. Оценка объёмов работы</h3>
          <p>На этом этапе мы вышлем вам на электронную почту опросный лист для заполнения</p>
        </div>

        <div class="stages-tabs__item" id="stage-3">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('handshake', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">3. Коммерческое предложение</h3>
          <p>На этом этапе мы готовим КП и согласовываем с вами объёмы и условия работы</p>
        </div>

        <div class="stages-tabs__item" id="stage-4">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('contract', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">4. Договор</h3>
          <p>Готовим договор и подписываем. Оригинал договора направляем курьером за наш счет.</p>
        </div>

        <div class="stages-tabs__item" id="stage-5">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('report', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">5. Инвентаризация</h3>
          <p>Готовим отчет по инвентаризации, согласовываем с вами.</p>
        </div>

        <div class="stages-tabs__item" id="stage-6">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('collective', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">6. Разработка проекта</h3>
        </div>

        <div class="stages-tabs__item" id="stage-7">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('training', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">7. Согласование проекта с заказчиком</h3>
        </div>

        <div class="stages-tabs__item" id="stage-8">
          <div class="stages-tabs__img-wrap">
            <div class="stages-tabs__icon-wrap">
              <?php hv_the_icon('insurance', 'stages-tabs__icon'); ?>
            </div>
          </div>
          <h3 class="stages-tabs__title">8. Получаем разрешительный документ</h3>
          <p>На этом этапе мы через портал гос.услуги либо лично направляем проект на согласование в соответствующие инстанции</p>
        </div>

      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.stages -->

<section class="key">
  <div class="container">
    <div class="section-head">
      <h2 class="section-title">Сделаем все под ключ...</h2>
      <p>Выполним всю работу за вас, вам остаеться только расписаться и поставить печать!</p>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-6 col-xl-7">
        <div class="key__img">
          <img src="<?php echo THEME_URL; ?>/images/content/key.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-xl-5">
        <div class="key__content">
          <div class="key__item">
            <div class="key__number">01</div>
            <h3 class="key__title">Соберем полный пакет документов</h3>
            <p>Вы получаете комплекс документов, состоящих из заявления, гос. пошлины, проектной документации, информации на эл. носителе. Вы делегируете обязанности по разработке и согласованию проектной документации профессионалам, а сами занимаетесь производственными вопросами.</p>
          </div>
          <div class="key__item">
            <div class="key__number">02</div>
            <h3 class="key__title">Мы согласуем для вас проект во всех инстанциях</h3>
            <p>Ответим на все замечания государственных органов и внесем изменения в проект. Это входит в стоимость работ. Мы от начала и до конца контролируем весь процесс согласования документации, самостоятельно работаем с государственными органами.</p>
          </div>
          <div class="key__item">
            <div class="key__number">03</div>
            <h3 class="key__title">Проведем инвентаризацию своими силами</h3>
            <p>При необходимости готовы выехать и  собрать всю необходимую информацию. Вам не придется сидеть в архивах, фондах и обрабатывать большое кол-во документов – мы всё сделаем за вас.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->
</section>
<!-- /.key -->

<section class="cost" id="price">
  <div class="container">
    <h2 class="section-title">Стоимость услуг</h2>

    <div class="row">
      <div class="col-lg-6 col-xl-5">
        <div class="cost__content">
          <div class="cost__item">
            <div class="cost__icon-wrap">
              <?php hv_the_icon('discount', 'cost__icon'); ?>
            </div>
            <h3 class="cost__title">Работаем по среднерыночным ценам</h3>
            <p>Стоимость работ такая же как и у всех. <br>Мы не заламываем цен. <br>Мы не демпингуем</p>
          </div>
          <div class="cost__item">
            <div class="cost__icon-wrap">
              <?php hv_the_icon('card', 'cost__icon'); ?>
            </div>
            <h3 class="cost__title">Никакой предоплаты</h3>
            <p>Сотрудничая с нами, вы застрахованы от обмана. <br>Оплата осуществляется после получения первых результатов работы.</p>
          </div>
          <div class="cost__item">
            <div class="cost__icon-wrap">
              <?php hv_the_icon('check-mark', 'cost__icon'); ?>
            </div>
            <h3 class="cost__title">Прозрачное ценообразование</h3>
            <p>Вы получите Коммерческое предложение <br>в котором каждая цифра будет обоснована <br>и понятна даже школьнику</p>
          </div>
        </div>
      </div>

      <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-2">
        <div class="form-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/cost.png" alt="">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="delivery">
  <div class="container">
    <div class="section-head">
      <h2 class="section-title">Доставка оригиналов документов курьером по всей России</h2>
      <p>в течении 4 дней за наш счет</p>
    </div>

    <div class="delivery__wrap">
      <div class="delivery__img">
        <a href="<?php echo THEME_URL; ?>/images/content/delivery.jpg" data-fancybox>
          <img src="<?php echo THEME_URL; ?>/images/content/delivery-sm.jpg" alt="">

          <div class="delivery__img-text">
            <?php hv_the_icon('zoom'); ?>
            <p>Письмо о <br>сотрудничестве</p>
            <span>Посмотреть</span>
          </div>
        </a>
      </div>
      
      <div class="delivery__map">
        <img src="<?php echo THEME_URL; ?>/images/content/map.png" alt="">
        <div class="delivery__info">
          <div class="delivery__info-text">Сотрудничаем со службой <br>экспресс доставки</div>
          <img src="<?php echo THEME_URL; ?>/images/content/delivery-logo.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.delivery -->

<section class="teams" id="teams">
  <div class="container">
    <h2 class="section-title">Наша команда</h2>

    <?php $teams = get_teams(-1);
    if ($teams->have_posts()): ?>
      <div class="teams-slider swiper-container">
        <div class="swiper-wrapper">
          <?php while ($teams->have_posts()): $teams->the_post(); ?>
            <div class="teams-slider__item swiper-slide">
              <?php the_post_thumbnail('team'); ?>

              <div class="teams-slider__overlay">
                <div class="teams-slider__overlay-group">
                  <h3 class="teams-slider__title"><?php the_title(); ?></h3>
                  <p class="teams-slider__position"><?php the_field('position'); ?></p>
                </div>
                <a href="#" class="teams-slider__link">Узнать больше <?php hv_the_icon('arrow-right', 'teams-slider__link-icon'); ?></a>
              </div>

              <div class="teams-slider__info">
                <button type="button" class="teams-slider__close">
                  <?php hv_the_icon('close', 'teams-slider__close-icon'); ?>
                </button>

                <h3 class="teams-slider__title"><?php the_title(); ?></h3>
                <p class="teams-slider__position"><?php the_field('position'); ?></p>

                <div class="teams-slider__text" data-simplebar>
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="swiper-btn-wrap">
          <div class="swiper-button-prev">
            <?php hv_the_icon('arrow-left'); ?>
            Назад
          </div>
          <div class="swiper-button-next">
            Далле
            <?php hv_the_icon('arrow-right'); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="btn-wrap">
      <a href="#" class="btn">Узнать историю</a>
      <span class="btn-descr">Нажмите кнопку, чтобы узнать <br>историю и опыт компании</span>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.teams -->

<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
    while ( have_rows('home_layout') ) : the_row();

      if( get_row_layout() == 'result' ): ?>

        <section class="result">
          <div class="container">
            <div class="section-head">
              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <?php the_sub_field('descr'); ?>
            </div>

            <div class="result__wrap">
              <div class="result__col result__col--img">
                <img src="<?php echo THEME_URL; ?>/images/content/mock.png" alt="">
              </div>
              <div class="result__col result__col--content">
                <div class="result__text">
                  <?php the_sub_field('text'); ?>
                </div>
              </div>
              <div class="result__col result__col--contact">
                <div class="result__profile">
                  <img src="<?php echo THEME_URL; ?>/images/content/result-img.jpg" alt="">
                  <p>Напишите мне:</p>
                </div>
                <ul class="result__social">
                  <?php if (get_sub_field('whatsapp')): ?>
                    <li class="result__social-item result__social-item--ws">
                      <a href="<?php echo esc_url(get_sub_field('whatsapp')); ?>" target="_blank">
                        <div class="result__social-icon-wrap">
                          <img src="<?php echo THEME_URL; ?>/images/general/whatsapp.svg" width="24" alt="">
                        </div>
                        <span>Whatsapp</span>
                      </a>
                    </li>
                  <?php endif; ?>
                  <?php if (get_sub_field('vk')): ?>
                    <li class="result__social-item result__social-item--vk">
                      <a href="<?php echo esc_url(get_sub_field('vk')); ?>" target="_blank">
                        <div class="result__social-icon-wrap">
                          <img src="<?php echo THEME_URL; ?>/images/general/vk.svg" width="24" alt="">
                        </div>
                        <span>VK</span>
                      </a>
                    </li>
                  <?php endif; ?>
                  <?php if (get_sub_field('direct')): ?>
                    <li class="result__social-item result__social-item--insta">
                      <a href="<?php echo esc_url(get_sub_field('direct')); ?>" target="_blank">
                        <div class="result__social-icon-wrap">
                          <img src="<?php echo THEME_URL; ?>/images/general/instagram.svg" width="24" alt="">
                        </div>
                        <span>Direct</span>
                      </a>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.container -->
        </section>
        <!-- /.result -->

      <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<section class="contact">
  <div class="container">
    <h2 class="section-title">Контакты</h2>

    <div class="row">
      <div class="col-lg-6 col-xl-5">
        <div class="contact__content">
          <h3>Наш адрес:</h3>
          <?php the_field('address', 'option'); ?>
          <p>Позвоните нам по единому номеру или оставьте заявку на сайте.</p>
          <a href="tel:<?php echo preg_replace('![^0-9]+!', '', get_field('phone', 'option')); ?>" class="contact__phone"><?php the_field('phone', 'option'); ?></a>
          <span class="contact__phone-descr">Звонок по России бесплатно</span>
          <p><b>e-mail:</b> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
          <p><b><?php the_field('company_name', 'option'); ?></b></p>
          <p><b>ИНН</b> <?php the_field('inn', 'option'); ?></p>
          <p><b>ОГНИП</b> <?php the_field('ognip', 'option'); ?></p>
        </div>
      </div>

      <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-2">
        <div class="form-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/contact.png" alt="">
          <?php echo do_shortcode('[contact-form-7 id="66" title="Форма вопросов"]'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.contact -->

<?php get_footer(); ?>
