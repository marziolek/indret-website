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
  init: function() {
    Indret2016.menuToggle();
    Indret2016.scrollTo();
    Indret2016.tooltipToggle();
    Indret2016.modal();
    Indret2016.videoModal();
    Indret2016.teamModal();
    Indret2016.quoteModal();
  },

  /**
   * Example function
   */

  menuToggle: function() {
    $('.btn-menu').on('click', function() {
      $(this).parent().toggleClass('open-menu');
      $('.header').toggleClass('open-menu-header');
      $('#mask').toggle();

      if( $('#mask').css('display') === 'block'  ) {
        $(this).css('position', 'fixed');
        $(this).addClass('close-menu');
      } else {
        $(this).css('position', 'absolute');
        $(this).removeClass('close-menu');
      }
    });

    window.onscroll = function() {
      var top  = window.pageYOffset || document.documentElement.scrollTop;
      if( top > 1) {
        $('.header').addClass('header--fixed');
      } else {
        $('.header').removeClass('header--fixed');
      }
    };

    window.onresize = function() {
      if( window.innerWidth > 767 ) {
        $('#navigation').removeClass('open-menu');
        $('#mask').hide();
        $('.btn-menu').removeClass('close-menu');
      }
    };
  },

  scrollTo: function() {
    function convertToSlug(Text) {
      return Text
      .toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
    }

    $('#navigation a').each(function () {
      if( $(this).attr('title') ) {
        $(this).data('target', '#' + convertToSlug( $(this).attr('title')) );
      }
    });

    if( window.location.pathname === '/' ) {
      $('#navigation a').each(function () {
        if( $(this).attr('title') === 'Go to link' ) {
          $(this).removeAttr('title');
          $(this).removeAttr('target');
        } else {
          $(this).removeAttr('href');
        }
      });
    }

    $('#navigation > ul > li > a,.scroll-source,.link-section').on('click', function() {
      var scrollID = $(this).data('target');
      var scrollOffset = $(scrollID).offset().top - 62;
      $("html, body").animate({
        scrollTop: scrollOffset
      }, 1200);
      $('#mask').hide();
      $('#navigation').removeClass('open-menu');
      $('.btn-menu').removeClass('close-menu').attr('style','');
    });
  },

  tooltipToggle: function() {
    $('.business-tile').on('click', function() {
      $('.business-tooltip').hide();
      $(this).find('.business-tooltip').toggle();
    });

    $('.business-tooltip').on('click', function(event) {
      event.stopPropagation();
      $(this).hide();
    });

    $('.pins-more').on('click', function() {
      $(this).next('.pins-tooltip').toggle();
    });
  },

  modal: function() {
    $('#modal-mask,.modal .modal-close').on('click', function() {
      $('#modal-mask,.modal,.modal-gallery').hide();
      $('.modal .modal-cont').html('');
      $('.modal').attr('style','');
      $('.modal-close').show();
    });

    // close gallery modal
    $('.modal-gallery').on('click','.modal-close', function() {
      $('.modal-gallery').removeClass('modal-open');
    });

    // open billed modal
    $('.link-billed').on('click', function() {
      $('#billed-galleri').addClass('modal-open');
      $('#billed-galleri').show();
      $('.modal-close').show();
    });

    // open inspirations modal
    $('.link-inspirations').on('click', function() {
      $('#inspirations-galleri').addClass('modal-open');
      $('#inspirations-galleri').show();
      $('.modal-close').show();
    });

    // open bolig modal
    $('.link-bolig').on('click', function() {
      $('#bolig-galleri').addClass('modal-open');
      $('#bolig-galleri').show();
      $('.modal-close').show();
    });

    // open erhvervs modal
    $('.link-erhvers').on('click', function() {
      $('#erhvervs-galleri').addClass('modal-open');
      $('#erhvervs-galleri').show();
      $('.modal-close').show();
    });
  },

  videoModal: function() {
    $('p[data-video]').on('click', function() {
      var videoSource = $(this).data('video');
      $('#modal-mask,.modal').show();
      $('.modal .modal-cont').html('<div class="videoWrapper"><iframe width="420" height="315" src="'+videoSource+'?autoplay=1" frameborder="0"></iframe></div>');
      $('.videoWrapper').parents('.modal').css('height','auto');
      $('.modal-close').hide();
    });
  },

  teamModal: function() {
    $('.team-member').on('click', function(){
      var teamModal = $(this).children('.team-modal').html();
      $('.modal .modal-cont').html(teamModal);
      $('.modal').show();
    });

    $('.modal').on('click','.team-next', function(){
      $(this).parents('.team-modal-cont').next('.team-modal-cont').show();
      $(this).parents('.team-modal-cont').hide();
    });

    $('.modal').on('click','.team-prev', function(){
      $(this).parents('.team-modal-cont').prev('.team-modal-cont').show();
      $(this).parents('.team-modal-cont').hide();
    });
  },

  quoteModal: function() {
    $('.quote-more').on('click', function() {
      var quoteModal = $(this).next().html();
      $('.modal .modal-cont').html(quoteModal);
      $('.modal').show();
    });
  }

};

document.addEventListener('DOMContentLoaded', function() {
  Indret2016.init();
});


