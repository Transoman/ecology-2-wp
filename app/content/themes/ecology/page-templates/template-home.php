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
      <a href="#" class="btn">Пройти тест</a>
      <span class="btn-descr">Нажмите кнопку, <br>чтобы узнать свою категорию</span>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.client -->

<?php

  // check if the flexible content field has rows of data
  if( have_rows('home_layout') ):

    // loop through the rows of data
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
                          <div class="col-md-6">
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

            <div class="btn-wrap">
              <a href="#" class="btn callback_open">Узнать больше</a>
              <span class="btn-descr">Нажмите кнопку, <br>чтобы узнать больше</span>
            </div>

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
