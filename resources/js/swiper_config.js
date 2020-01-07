import Swiper from 'swiper';

$(document).ready(function () {
    var mySwiper = new Swiper('.swiper-container', {
        slidesPerView: 1,

        autoplay: {
            delay: 3000,
        },
        speed: 800,
        autoplayDisableOnInteraction: false,
        // Optional parameters
        // direction: 'vertical',
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 0,
            }
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
});
