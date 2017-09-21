/* ==========================================================================

    Project: Indret2016
    Author:
    Last updated: @@timestamp

   ========================================================================== */

'use strict';


var Indret2016 = {

  /**
   * Init function
   */
  init: function () {
    Indret2016.menuToggle();
    Indret2016.scrollTo();
    Indret2016.tooltipToggle();
    Indret2016.modal();
    Indret2016.videoModal();
    Indret2016.teamModal();
    Indret2016.quoteModal();
    Indret2016.slideshows();
  },

  /**
   * Example function
   */

  menuToggle: function () {
    var $b = $('body');
    $('.btn-menu').on('click', function () {
      $(this).parent().toggleClass('open-menu');
      $('#mask').toggle();

      if ($('#mask').css('display') === 'block') {
        $(this).css('position', 'fixed');
        $(this).addClass('close-menu');
      } else {
        $(this).css('position', 'absolute');
        $(this).removeClass('close-menu');
      }
    });

    window.onscroll = function () {
      var top = window.pageYOffset || document.documentElement.scrollTop;
      if (top > 1) {
        $('.header').addClass('header--fixed');
      } else {
        $('.header').removeClass('header--fixed');
      }
    };

    window.onresize = function () {
      if (window.innerWidth > 767) {
        $('#navigation').removeClass('open-menu');
        $('#mask').hide();
        $('.btn-menu').removeClass('close-menu');
      }
    };
  },

  scrollTo: function () {
    var $b = $('body');
    function convertToSlug(Text) {
      return Text
        .toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    }

    $('#navigation a').each(function () {
      if ($(this).attr('title')) {
        $(this).attr('data-target', '#' + convertToSlug($(this).attr('title')));
      }
    });

    if (window.location.pathname === '/') {
      $('#navigation a').each(function () {
        if ($(this).attr('title') === 'Go to link') {
          $(this).removeAttr('title');
          $(this).removeAttr('target');
        } else {
          $(this).removeAttr('href');
        }
      });
    }

    $('#navigation [data-target], .scroll-source, .custom-target-link').on('click', function ($ev) {
      var self = $(this),
        target = self.data('target');
      
      if (target !== '#go-to-link') {
        $ev.preventDefault();
        
        var scrollOffset = $(target).offset().top - 62;
        $("html, body").animate({
          scrollTop: scrollOffset
        }, 1200);
        $('#mask').hide();
        $('#navigation').removeClass('open-menu');
        $('.btn-menu').removeClass('close-menu').attr('style', '');
      }
    });

    $('.link-section').on('click', function () {
      var scrollID = $(this).data('target');
      var scrollOffset = $(scrollID).offset().top - 62;
      $("html, body").animate({
        scrollTop: scrollOffset
      }, 1200);
    });
  },

  tooltipToggle: function () {
    $('.business-tile').on('click', function () {
      $('.business-tooltip').hide();
      $(this).find('.business-tooltip').toggle();
    });

    $('.business-tooltip').on('click', function (event) {
      event.stopPropagation();
      $(this).hide();
    });

    if ($(window).width() <= 940) {
      $('.pins-more').on('click', function () {
        $('.pins-tooltip').hide();
        $(this).next().find('.pins-tooltip').show();
      });
      $(document).on('click, touchstart', function(e) {
        var target = e.target;
        if (!$(target).is('.pins-more') ) {
          $('.pins-tooltip').hide();
        }
      });
    }
  },

  modal: function () {
    $('#modal-mask,.modal .modal-close').on('click', function () {
      $('#modal-mask,.modal').hide();
      $('.modal .modal-cont').html('');
      $('.modal').attr('style', '');
    });

    // close gallery modal
    $('.modal-gallery').on('click', '.modal-close', function () {
      $('.modal-gallery').removeClass('modal-open');
      $('body').removeClass('modal-opened');
    });

    // open inspirations modal
    $('.link-inspirations').on('click', function () {
      $('#inspirations-galleri').addClass('modal-open');
      $('body').addClass('modal-opened');
    });
  },

  videoModal: function () {
    $('p[data-video]').on('click', function () {
      var videoSource = $(this).data('video');
      $('#modal-mask,.modal').show();
      $('.modal .modal-cont').html('<div class="video-cont"><iframe width="420" height="315" src="' + videoSource + '?autoplay=1" frameborder="0"></iframe></div>');
      $('.video-cont').parents('.modal').css('width', 'auto').css('height', 'auto');
    });
  },

  teamModal: function () {
    $('.team-member').on('click', function () {
      var teamModal = $(this).children('.team-modal').html();
      $('.modal .modal-cont').html(teamModal);
      $('.modal').show();
    });

    $('.modal').on('click', '.team-next', function () {
      $(this).parents('.team-modal-cont').next('.team-modal-cont').show();
      $(this).parents('.team-modal-cont').hide();
    });

    $('.modal').on('click', '.team-prev', function () {
      $(this).parents('.team-modal-cont').prev('.team-modal-cont').show();
      $(this).parents('.team-modal-cont').hide();
    });
  },

  quoteModal: function () {
    $('.quote-more').on('click', function () {
      var quoteModal = $(this).next().html();
      $('.modal .modal-cont').html(quoteModal);
      $('.modal').show();
    });
  },

  slideshows: function() {
    var quotesSliders = $('.quotes-slider'),
        carousel = $('.carousel'),
        type = 'scrollHorz';
    
    if ($(window).width() > 768) {
      type = 'carousel';
    }

    quotesSliders.cycle({
      fx: type,
      slides: '.quote',
      timeout: 0,
      swipe: true
    });

    carousel.cycle({
      fx: type,
      slides: '> .slide',
      timeout: 0,
      swipe: true
    });

    setTimeout(function() {
      Indret2016.quoteModal();
    }, 500);
  },

  closeButtonSliders: function() {
    var closeBtn = $('#lightbox .lb-closeContainer');
    
  }
};

document.addEventListener('DOMContentLoaded', function () {
  Indret2016.init();
});