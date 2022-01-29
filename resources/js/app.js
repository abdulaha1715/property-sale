require('./bootstrap');
require('./lity.min');

import feather from 'feather-icons/dist/feather.min';

feather.replace();

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.$ = window.jQuery = require('jquery');

require('./slick1.8.1.min');

jQuery(window).scroll(function() {
    const $scroll = jQuery(window).scrollTop();

    if($scroll >= 50) {
        jQuery('.sticky-header').addClass('sticky-header-active');
    } else {
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
});

jQuery(document).ready(function() {
    $(".gallery-slider").slick ({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        asNavFor: '.thumbnail-slider',
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });


    $ (".thumbnail-slider").slick ({
        slidesToShow: 10,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        asNavFor: '.gallery-slider',
        centerMode: true,
        focusOnSelect: true,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
});

$(document).on('click', '[data-lightbox]', lity);
