  window.addEventListener('DOMContentLoaded', function(e) {
    document.querySelector('.nav.hamburguer')
      .addEventListener('click', function() { 
        document.querySelector('.nav.menu').classList.toggle('aberto');
      }, false);
  }, false);

  var vid = document.getElementById("video_target");

  function enableMute(){
    vid.muted == true ? vid.muted = false : vid.muted = true; 
  }

    vid.addEventListener('ended', function(e) {

        // alert('The End');
        // $('.header-video').css({'back'})
        // $('video').css({'display' : 'none'});

        $('video').animate({opacity: '0'}, 2500);
        $('.speaker').css({'display' : 'none'});

        // $('.single').animate({}, 2500);

        // $( ".single" ).animate({opacity: '1'}, 2500);
        // $( ".single-conjunto" ).animate({opacity: '1'}, 4500);

    })

  $(window).ready(function(){

    // $('.single').click(function(){
    //   enableMute();
    // });

    $('.speaker').click(function(){
      enableMute();
    });

    // if ($(window).width() < 750) {
    //   vid.muted = true
    // }

    if ($(window).width() <= 750) {
        // $(".speaker").css({'display' : 'initial'});
    } else if ($(window).width() > 750) {
      vid.autoplay = true;
        // $(".speaker").css({'display' : 'none'});
    }

    $('.caixa-letra-1-linha h2').click(function(){
      if ($(".caixa-letra-1-linha").hasClass("aberto") === true) {
        $(".caixa-letra-1-linha").animate({height: 450}, 400);
      } else {
        $(".caixa-letra-1-linha").animate({height: 55}, 400);
      }      
    });

    $('.caixa-letra-2-linhas h2').click(function() {
      if ($(".caixa-letra-2-linhas").hasClass("aberto") === true) {
        $('.caixa-letra-2-linhas h3').css({'visibility' : 'visible'});
        $(".caixa-letra-2-linhas").animate({height: 1000}, 400);
      } else {
        $(".caixa-letra-2-linhas").animate({height: 85}, 400);
        $('.caixa-letra-2-linhas h3').css({'visibility' : 'hidden'});
      }
    });

    $('.laboratorio-letra h3').click(function() {
      if ($(".laboratorio-letra").hasClass("aberto") === true) {
        $('.laboratorio-letra h4').css({'visibility' : 'visible'});
        $(".laboratorio-letra").animate({height: 1340}, 400);
      } else {
        if ($(window).width() >= 750) {
          $(".laboratorio-letra").animate({height: 70}, 400);
        } else {
          $(".laboratorio-letra").animate({height: 70}, 400);
        }
        // $(".laboratorio-letra").animate({height: 70}, 400);
        $('.laboratorio-letra h4').css({'visibility' : 'hidden'});
      }
    });
    $('.nausea-letra h3').click(function() {
      if ($(".nausea-letra").hasClass("aberto") === true) {
        $(".nausea-letra").animate({height: 1130}, 400);
      } else {
        $(".nausea-letra").animate({height: 60}, 400);
      }
    });
    $('.imovel-letra h3').click(function() {
      if ($(".imovel-letra").hasClass("aberto") === true) {
        $(".imovel-letra").animate({height: 1140}, 400);
      } else {
        $(".imovel-letra").animate({height: 60}, 400);
      }
    });

  });

  // $('.single').click(function(e) {
  // e.preventDefault();

  // $(this).toggleClass('mute');
  // });

  $('#speaker').click(function(e) {
  e.preventDefault();

  $(this).toggleClass('mute');
  });

  $('.caixa-letra-1-linha').click(function(e) {
  e.preventDefault();

  $(this).toggleClass('aberto');
  });

  $('.caixa-letra-2-linhas').click(function(e) {
  e.preventDefault();

  $(this).toggleClass('aberto');
  });

  $('.laboratorio-letra').click(function(e) {
  e.preventDefault();

  $(this).toggleClass('aberto');
  });
  $('.nausea-letra').click(function(e) {
  e.preventDefault();

  $(this).toggleClass('aberto');
  });
  $('.imovel-letra').click(function(e) {
  e.preventDefault();

  $(this).toggleClass('aberto');
  });

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
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
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          // $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            // $target.focus();
          };
        });
      }
    }
  });