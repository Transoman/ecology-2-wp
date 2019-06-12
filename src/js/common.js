'use strict';

global.jQuery = require('jquery');
var svg4everybody = require('svg4everybody'),
  fancybox = require('@fancyapps/fancybox'),
  popup = require('jquery-popup-overlay'),
  tabslet = require('tabslet'),
  SimpleBar = require('simplebar'),
  Swiper = require('swiper'),
  Imask = require('imask');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.nav-list').toggleClass('is-active');
  });

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    onclose: function() {
      $(this).find('label.error').remove();
    }
  });

  var fixedBottomHeader = function() {
    if ($(window).scrollTop() > 120) {
      $('.header__bottom').addClass('fixed');
    }
    else {
      $('.header__bottom').removeClass('fixed');
    }
  };

  var fixedHeader = function() {
    if ($(window).scrollTop() > 120 && $(window).width() < 1200) {
      $('.header').addClass('fixed');
    }
    else {
      $('.header').removeClass('fixed');
    }
  };

  fixedBottomHeader();
  fixedHeader();

  $(window).scroll(function() {
    fixedBottomHeader();
    fixedHeader();
  });

  // Tabs
  $('.services-tabs').tabslet();
  $('.stages-tabs').tabslet();

  // Slider
  new Swiper ('.teams-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1200: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      767: {
        slidesPerView: 1,
        spaceBetween: 30
      }
    }
  });

  var teamSliderInfo = function() {
    $('.teams-slider__link').click(function(e) {
      e.preventDefault();

      $(this).parents('.teams-slider__item').find('.teams-slider__info').addClass('is-active');
    });

    $('.teams-slider__close').click(function(e) {
      e.preventDefault();

      $(this).parent().removeClass('is-active');
    });

  };

  teamSliderInfo();

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .not('[href*="#services-"]')
    .not('[href*="#stage-"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          var offset = null;

          if ($(window).width() > 1199) {
            offset = $('.header__bottom').innerHeight();
          }
          else {
            offset = $('.header').innerHeight();
          }


          $('.nav-list').removeClass('is-active');
          $('.nav-toggle').removeClass('active');

          $('html, body').animate({
            scrollTop: target.offset().top - offset
          }, 1000);
        }
      }
    });

  var inputsPhone = $('input[type="tel"]');
  var maskOptions = {
    mask: '+{7} (000) 000-00-00'
  };

  if (inputsPhone.length) {
    inputsPhone.each(function(i, el) {
      IMask(el, maskOptions);
    });
  }

  // SVG
  svg4everybody({});
});