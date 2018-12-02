/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const app = new Vue({
    el: '#app'
});*/


jQuery(document).ready(function () {
    // SEND FORMS
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery('.send-ajax').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            form.css('opacity', '.5');
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {
                    form.html(data);
                    form.css('opacity', '1');
                },
                error: function () {}
            });
        }
    });

    jQuery('.send').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            form.submit();
        }
    });

    /*
    	Slide to block. Add class "go-to-block" to link or button and data-attribute with target class or id
    	Example: <a href="#" class="go-to-block" data-target=".slide-1">Slide</a>
    */

    jQuery(".go-to-block").click(function () {
        var target = jQuery(this).data('target');
        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top
        }, 400);
    });
    let el = $(".to-top");

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 500) {
            el.css('display', 'block');
            el.addClass("animated");
            el.hover(
                function () {
                    $(this).removeClass("fadeIn");
                    $(this).addClass("shake");
                    $(this).addClass("animated");
                    $(this).addClass("infinite");
                },
                function () {
                    $(this).removeClass("infinite");
                    $(this).removeClass("shake");
                }
            );
        } else {
            el.removeClass('fadeOutUpBig');
            el.addClass('fadeIn');
            el.css('display', 'none');
        }

    });

    el.click(
        function () {
            el.addClass('fadeOutUpBig');
        }
    );

    $(window).scroll(function () {
        animateBars();
        //animateHeader();
    });

    animateBars();
    //animateHeader();


});

function animateBars() {
    var scrollto = $('.skills.top').offset().top - $(window).height() / 1.13;
    if ($(window).scrollTop() >= scrollto) {
        $('.progressbar').each(function () {
            let bar = $(this).find('.bar');
            let label = $(this).find('.label');
            let w_prog = $(this).attr("aria-valuenow");

            bar.css('width', w_prog + "%");
            label.css('left', w_prog - 2.8 + "%");
            label.html(w_prog);
        });
    }
}
