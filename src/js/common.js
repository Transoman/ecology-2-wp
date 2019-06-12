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
  
  // Quize test
  var startTest = function() {
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    $('.steps__btn--prev').click( function(e) {
      e.preventDefault();
      nextPrev(-1);
    } );

    $('.steps__btn--next').click( function(e) {
      e.preventDefault();

      if ( (currentTab + 1) >  $('.steps__item').length - 1  ) {
        return false;
      }

      nextPrev(1);
    } );

    function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = $('.steps__item');
      x.hide();

      var countStep = x.length;
      var currentStep = n + 1;

      $('.test-progress__count').text(Math.floor((100 / countStep) * currentStep) + '%');
      $('.test-progress__line').css({
        width: Math.floor((100 / countStep) * currentStep) + '%'
      });

      console.log($(x[n]).find('input[type="radio"]:checked'));

      if ($(x[n]).find('input[type="radio"]:checked').length === 0) {
        $('.steps__btn--next').attr('disabled', true);
      }
      else {
        $('.steps__btn--next').attr('disabled', false);
      }

      $(x[n]).css('display', 'block');
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        $('.steps__btn--prev').css('display', 'none');
      } else {
        $('.steps__btn--prev').css('display', 'inline');
      }
      if (n == (x.length - 1)) {
        $('.steps__btn--next').css('display', 'none');
      } else {
        $('.steps__btn--next').css('display', 'inline');
      }
    }

    function nextPrev(n) {

      // This function will figure out which tab to display
      var x = $('.steps__item');

      // Hide the current tab:
      $(x[currentTab]).css('display', 'none');
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form... :
      if (currentTab >= x.length) {
        //...the form gets submitted:
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    $('.test-form__label').click(function() {
      $('.steps__btn--next').attr('disabled', false);
    });

  };

  startTest();

  // SVG
  svg4everybody({});
});