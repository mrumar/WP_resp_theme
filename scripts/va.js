jQuery.noConflict();

// Google webfonts
WebFontConfig = {
    google: { families: [ 'PT+Sans:400,700,400italic:latin,latin-ext', 'Oranienbaum::latin,latin-ext' ] }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
    })();

VA = function() {
    var html = jQuery('html'), navClass = 'is-nav';

    this.init = function() {
        html.addClass('js');
        if (this.has3dtransforms()) {
            html.addClass('transforms3d');
        };

        html.on('click', '.toggle-nav', this.toggleNav);
        if (this.is_touch_device()) {
            html.on('touchend', '.f-level', this.touchMenuMode);
        }
    }
    this.toggleNav = function(e) {
        html.hasClass(navClass) ? html.removeClass(navClass) : html.addClass(navClass);
    }

    this.has3dtransforms = function() {
        /* from Webinista 
         * Github repo: https://gist.github.com/3626934
         */
        var el = document.createElement('p'), t, has3d, transforms = {
            'WebkitTransform' : '-webkit-transform',
            'OTransform' : '-o-transform',
            'MSTransform' : '-ms-transform',
            'MozTransform' : '-moz-transform',
            'transform' : 'transform'
        };

        document.body.insertBefore(el, document.body.lastChild);

        for (t in transforms) {
            if (el.style[t] !== undefined) {
                el.style[t] = 'matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)';
                has3d = window.getComputedStyle(el).getPropertyValue(transforms[t]);
            }
        }

        if (has3d !== undefined) {
            return has3d !== 'none';
        } else {
            return false;
        }
    }

    this.is_touch_device = function() {
        return !!('ontouchstart' in window);
    }
    this.touchMenuMode = function(e) {
        if (this.nextElementSibling) {
            jQuery(this).parent().toggleClass('ext');
            e.preventDefault();
        }
    }
}
jQuery(function() {
    var va = va || new VA();
    va.init();
});