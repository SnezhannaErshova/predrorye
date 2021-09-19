$(document).ready(function () {
    // перевод сайта
    setTimeout(function() {
        if($('.language__img_active').attr('data-google-lang') == 'ru') {
            $('.lang-active').addClass('ru');
            $('.lang-active').removeClass('en');
            $('.lang-active').removeClass('cn');
        } else if($('.language__img_active').attr('data-google-lang') =='en') {
            $('.lang-active').addClass('en');
            $('.lang-active').removeClass('ru');
            $('.lang-active').removeClass('cn');
        } else if($('.language__img_active').attr('data-google-lang') =='zh-CN') {
            $('.lang-active').addClass('cn');
            $('.lang-active').removeClass('ru');
            $('.lang-active').removeClass('en');
        }
    }, 1000);
    $('.lang').click(function (){
        $('.lang-list').toggleClass('active');
    })
    //==

    // баннер на главной
    var reviewsSlider = new Swiper('.main-banner .swiper-container', {});
    // отзывы на главной
    var reviewsSlider = new Swiper('.reviews .swiper-container', {
        // cssMode: true,
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".arrows-num",
            type: "fraction",
        },
        navigation: {
            nextEl: '.reviews .swiper-button-next',
            prevEl: '.reviews .swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        }
    });
    //==

    // страница "продукция"
    $('.catalog-item .main-btn').each(function () {
        $(this).click(function (){
            $(this).parents('.catalog-item').toggleClass('active');
            if ($(this).parents('.catalog-item').hasClass('active')) {
                $(this).text('Свернуть');
            } else {
                $(this).text('Подробнее');
            }
        });
    });
    //==

    // страница "контакты"
    let margin = parseInt($('.container').css('margin-left'));
    let padding = parseInt($('.container').css('padding-left'));
    let mainLP = margin + padding + 'px';
    $('.contacts .contacts-left').css('padding-left', mainLP);
    $(window).resize(function () {
        let margin = parseInt($('.container').css('margin-left'));
        let padding = parseInt($('.container').css('padding-left'));
        let mainLP = margin + padding + 'px';
        $('.contacts .contacts-left').css('padding-left', mainLP);
        if($(window).width() <= 768) {
            $('.contacts .contacts-left').css('padding-right', mainLP);
        }
    })
    if($(window).width() <= 768) {
        $('.contacts .contacts-left').css('padding-right', mainLP);
    }
    //==

    // шапка сайта
    jQuery(window).scroll(function () {
        jQuery('header').toggleClass('header-active', jQuery(this).scrollTop() > 150);
    });
    if(jQuery('header').offset().top > 0){
        jQuery('header').addClass('header-active');
    }

    $('.menu-icon').click(function (){
        $(this).toggleClass('menu-open');
        $('.mobile-menu').toggleClass('active');
    })
    if($(window).width() <= 576) {
        $('.info .contacts').addClass('hide');
        $('.mobile-menu .contacts').addClass('show');
    }
    $(window).resize(function () {
        if($(window).width() <= 576) {
            $('.info .contacts').addClass('hide');
            $('.mobile-menu .contacts').addClass('show');
        } else if($(window).width() > 576) {
            $('.info .contacts').removeClass('hide');
            $('.mobile-menu .contacts').removeClass('show');
        }
    })
    //==

    // формы
    jQuery('.afbf_select').select2();
    function isChecked() {
        if ($('.form-block-grey .main-user-consent-request input').is(':checked')){
            $('.form-block-grey .main-user-consent-request').addClass('active');
        } else {
            $('.form-block-grey .main-user-consent-request').removeClass('active');
        }

        if ($('.bottom-form .main-user-consent-request input').is(':checked')){
            $('.bottom-form .main-user-consent-request').addClass('active');
        } else {
            $('.bottom-form .main-user-consent-request').removeClass('active');
        }

        if ($('#modal .main-user-consent-request input').is(':checked')){
            $('#modal .main-user-consent-request').addClass('active');
        } else {
            $('#modal .main-user-consent-request').removeClass('active');
        }
    }
    isChecked();
    $('.main-user-consent-request').click(function () {
        $('.main-user-consent-request-popup-button').click(function () {
            isChecked();
        })
    })
    //==

    // SCROLL TOO
    try {
        jQuery('#get_price').bind("click", function (e) {
            var s = jQuery(this).attr("href");
            var s_ar = s.split("#");
            scrollTo(jQuery("#" + s_ar[1]).offset().top - 200, 800);
            return false;
        });

        function scrollTo(top, speed) {
            jQuery("html, body").animate({
                scrollTop: top + "px"
            }, {
                duration: speed,
                easing: "swing"
            });
        }
    } catch (error) {
        console.log(error)
        console.log("End of try-catch block")
    }
    // end SCROLL TOO

});
