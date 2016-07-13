var $ = jQuery;
var windowWidth = $(window).innerWidth();

$(window).resize(function() {
  windowWidth = $(window).innerWidth();
});

$(function() {
  if ( $('body').hasClass('home') ) {
    if ( $('#post6').attr('id') === undefined ) {
      $('body').css({ 'height' : '1000px' });
    } else if ( $('#post11').attr('id') === undefined ) {
      $('body').css({ 'height' : '1650px' });
    } else if ( $('#post16').attr('id') === undefined ) {
      $('body').css({ 'height' : '2200px' });
    } else {
      $('body').css({ 'height' : '3200px' });
    }
  }


  if ( windowWidth > 943 ) {
    $('.portfolio-image').toggle(function() {
      $(this).children('img').css({ 'width' : '400px' }).addClass('active');
      $(this).children('.image-caption').css({ 'opacity' : 1 });
    }, function () {
      $(this).children('img').css({ 'width' : '250px' }).removeClass('active');
      $(this).children('.image-caption').css({ 'opacity' : 0 });
    })
  }
});