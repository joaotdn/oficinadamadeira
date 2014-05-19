/* =============================================================

    Smooth Scroll v4.5
    Animate scrolling to anchor links, by Chris Ferdinandi.
    http://gomakethings.com

    Additional contributors:
    https://github.com/cferdinandi/smooth-scroll#contributors

    Free to use under the MIT License.
    http://gomakethings.com/mit/

 * ============================================================= */

window.smoothScroll = (function (window, document, undefined) {

    'use strict';

    // Default settings
    // Private {object} variable
    var _defaults = {
        speed: 500,
        easing: 'easeInOutCubic',
        offset: 0,
        updateURL: false,
        callbackBefore: function () {},
        callbackAfter: function () {}
    };

    // Merge default settings with user options
    // Private method
    // Returns an {object}
    var _mergeObjects = function ( original, updates ) {
        for (var key in updates) {
            original[key] = updates[key];
        }
        return original;
    };

    // Calculate the easing pattern
    // Private method
    // Returns a decimal number
    var _easingPattern = function ( type, time ) {
        if ( type == 'easeInQuad' ) return time * time; // accelerating from zero velocity
        if ( type == 'easeOutQuad' ) return time * (2 - time); // decelerating to zero velocity
        if ( type == 'easeInOutQuad' ) return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time; // acceleration until halfway, then deceleration
        if ( type == 'easeInCubic' ) return time * time * time; // accelerating from zero velocity
        if ( type == 'easeOutCubic' ) return (--time) * time * time + 1; // decelerating to zero velocity
        if ( type == 'easeInOutCubic' ) return time < 0.5 ? 4 * time * time * time : (time - 1) * (2 * time - 2) * (2 * time - 2) + 1; // acceleration until halfway, then deceleration
        if ( type == 'easeInQuart' ) return time * time * time * time; // accelerating from zero velocity
        if ( type == 'easeOutQuart' ) return 1 - (--time) * time * time * time; // decelerating to zero velocity
        if ( type == 'easeInOutQuart' ) return time < 0.5 ? 8 * time * time * time * time : 1 - 8 * (--time) * time * time * time; // acceleration until halfway, then deceleration
        if ( type == 'easeInQuint' ) return time * time * time * time * time; // accelerating from zero velocity
        if ( type == 'easeOutQuint' ) return 1 + (--time) * time * time * time * time; // decelerating to zero velocity
        if ( type == 'easeInOutQuint' ) return time < 0.5 ? 16 * time * time * time * time * time : 1 + 16 * (--time) * time * time * time * time; // acceleration until halfway, then deceleration
        return time; // no easing, no acceleration
    };

    // Calculate how far to scroll
    // Private method
    // Returns an integer
    var _getEndLocation = function ( anchor, headerHeight, offset ) {
        var location = 0;
        if (anchor.offsetParent) {
            do {
                location += anchor.offsetTop;
                anchor = anchor.offsetParent;
            } while (anchor);
        }
        location = location - headerHeight - offset;
        if ( location >= 0 ) {
            return location;
        } else {
            return 0;
        }
    };

    // Determine the document's height
    // Private method
    // Returns an integer
    var _getDocumentHeight = function () {
        return Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );
    };

    // Convert data-options attribute into an object of key/value pairs
    // Private method
    // Returns an {object}
    var _getDataOptions = function ( options ) {

        if ( options === null || options === undefined  ) {
            return {};
        } else {
            var settings = {}; // Create settings object
            options = options.split(';'); // Split into array of options

            // Create a key/value pair for each setting
            options.forEach( function(option) {
                option = option.trim();
                if ( option !== '' ) {
                    option = option.split(':');
                    settings[option[0]] = option[1].trim();
                }
            });

            return settings;
        }

    };

    // Update the URL
    // Private method
    // Runs functions
    var _updateURL = function ( anchor, url ) {
        if ( (url === true || url === 'true') && history.pushState ) {
            history.pushState( {pos:anchor.id}, '', anchor );
        }
    };

    // Start/stop the scrolling animation
    // Public method
    // Runs functions
    var animateScroll = function ( toggle, anchor, options, event ) {

        // Options and overrides
        options = _mergeObjects( _defaults, options || {} ); // Merge user options with defaults
        var overrides = _getDataOptions( toggle ? toggle.getAttribute('data-options') : null );
        var speed = parseInt(overrides.speed || options.speed, 10);
        var easing = overrides.easing || options.easing;
        var offset = parseInt(overrides.offset || options.offset, 10);
        var updateURL = overrides.updateURL || options.updateURL;

        // Selectors and variables
        var fixedHeader = document.querySelector('[data-scroll-header]'); // Get the fixed header
        var headerHeight = fixedHeader === null ? 0 : (fixedHeader.offsetHeight + fixedHeader.offsetTop); // Get the height of a fixed header if one exists
        var startLocation = window.pageYOffset; // Current location on the page
        var endLocation = _getEndLocation( document.querySelector(anchor), headerHeight, offset ); // Scroll to location
        var animationInterval; // interval timer
        var distance = endLocation - startLocation; // distance to travel
        var documentHeight = _getDocumentHeight();
        var timeLapsed = 0;
        var percentage, position;

        // Prevent default click event
        if ( toggle && toggle.tagName === 'A' && event ) {
            event.preventDefault();
        }

        // Update URL
        _updateURL(anchor, updateURL);

        // Stop the scroll animation when it reaches its target (or the bottom/top of page)
        // Private method
        // Runs functions
        var _stopAnimateScroll = function (position, endLocation, animationInterval) {
            var currentLocation = window.pageYOffset;
            if ( position == endLocation || currentLocation == endLocation || ( (window.innerHeight + currentLocation) >= documentHeight ) ) {
                clearInterval(animationInterval);
                options.callbackAfter( toggle, anchor ); // Run callbacks after animation complete
            }
        };

        // Loop scrolling animation
        // Private method
        // Runs functions
        var _loopAnimateScroll = function () {
            timeLapsed += 16;
            percentage = ( timeLapsed / speed );
            percentage = ( percentage > 1 ) ? 1 : percentage;
            position = startLocation + ( distance * _easingPattern(easing, percentage) );
            window.scrollTo( 0, Math.floor(position) );
            _stopAnimateScroll(position, endLocation, animationInterval);
        };

        // Set interval timer
        // Private method
        // Runs functions
        var _startAnimateScroll = function () {
            options.callbackBefore( toggle, anchor ); // Run callbacks before animating scroll
            animationInterval = setInterval(_loopAnimateScroll, 16);
        };

        // Reset position to fix weird iOS bug
        // https://github.com/cferdinandi/smooth-scroll/issues/45
        if ( window.pageYOffset === 0 ) {
            window.scrollTo( 0, 0 );
        }

        // Start scrolling animation
        _startAnimateScroll();

    };

    // Initialize Smooth Scroll
    // Public method
    // Runs functions
    var init = function ( options ) {

        // Feature test before initializing
        if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) {

            // Selectors and variables
            options = _mergeObjects( _defaults, options || {} ); // Merge user options with defaults
            var toggles = document.querySelectorAll('[data-scroll]'); // Get smooth scroll toggles

            // When a toggle is clicked, run the click handler
            Array.prototype.forEach.call(toggles, function (toggle, index) {
                toggle.addEventListener('click', animateScroll.bind( null, toggle, toggle.getAttribute('href'), options ), false);
            });

        }

    };

    // Return public methods
    return {
        init: init,
        animateScroll: animateScroll
    };

})(window, document);

/*!
 * jQuery Cycle Lite Plugin
 * http://malsup.com/jquery/cycle/lite/
 * Copyright (c) 2008-2012 M. Alsup
 * Version: 1.7 (20-FEB-2013)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires: jQuery v1.3.2 or later
 */
;(function($) {
"use strict";

var ver = 'Lite-1.7';
var msie = /MSIE/.test(navigator.userAgent);

$.fn.cycle = function(options) {
    return this.each(function() {
        options = options || {};
        
        if (this.cycleTimeout) 
            clearTimeout(this.cycleTimeout);

        this.cycleTimeout = 0;
        this.cyclePause = 0;
        
        var $cont = $(this);
        var $slides = options.slideExpr ? $(options.slideExpr, this) : $cont.children();
        var els = $slides.get();
        if (els.length < 2) {
            if (window.console)
                console.log('terminating; too few slides: ' + els.length);
            return; // don't bother
        }

        // support metadata plugin (v1.0 and v2.0)
        var opts = $.extend({}, $.fn.cycle.defaults, options || {}, $.metadata ? $cont.metadata() : $.meta ? $cont.data() : {});
        var meta = $.isFunction($cont.data) ? $cont.data(opts.metaAttr) : null;
        if (meta)
            opts = $.extend(opts, meta);
            
        opts.before = opts.before ? [opts.before] : [];
        opts.after = opts.after ? [opts.after] : [];
        opts.after.unshift(function(){ opts.busy=0; });
            
        // allow shorthand overrides of width, height and timeout
        var cls = this.className;
        opts.width = parseInt((cls.match(/w:(\d+)/)||[])[1], 10) || opts.width;
        opts.height = parseInt((cls.match(/h:(\d+)/)||[])[1], 10) || opts.height;
        opts.timeout = parseInt((cls.match(/t:(\d+)/)||[])[1], 10) || opts.timeout;

        if ($cont.css('position') == 'static') 
            $cont.css('position', 'relative');
        if (opts.width) 
            $cont.width(opts.width);
        if (opts.height && opts.height != 'auto') 
            $cont.height(opts.height);

        var first = 0;
        $slides.css({position: 'absolute', top:0}).each(function(i) {
            $(this).css('z-index', els.length-i);
        });
        
        $(els[first]).css('opacity',1).show(); // opacity bit needed to handle reinit case
        if (msie) 
            els[first].style.removeAttribute('filter');

        if (opts.fit && opts.width) 
            $slides.width(opts.width);
        if (opts.fit && opts.height && opts.height != 'auto') 
            $slides.height(opts.height);
        if (opts.pause) 
            $cont.hover(function(){this.cyclePause=1;}, function(){this.cyclePause=0;});

        var txFn = $.fn.cycle.transitions[opts.fx];
        if (txFn)
            txFn($cont, $slides, opts);
        
        $slides.each(function() {
            var $el = $(this);
            this.cycleH = (opts.fit && opts.height) ? opts.height : $el.height();
            this.cycleW = (opts.fit && opts.width) ? opts.width : $el.width();
        });

        if (opts.cssFirst)
            $($slides[first]).css(opts.cssFirst);

        if (opts.timeout) {
            // ensure that timeout and speed settings are sane
            if (opts.speed.constructor == String)
                opts.speed = {slow: 600, fast: 200}[opts.speed] || 400;
            if (!opts.sync)
                opts.speed = opts.speed / 2;
            while((opts.timeout - opts.speed) < 250)
                opts.timeout += opts.speed;
        }
        opts.speedIn = opts.speed;
        opts.speedOut = opts.speed;

        opts.slideCount = els.length;
        opts.currSlide = first;
        opts.nextSlide = 1;

        // fire artificial events
        var e0 = $slides[first];
        if (opts.before.length)
            opts.before[0].apply(e0, [e0, e0, opts, true]);
        if (opts.after.length > 1)
            opts.after[1].apply(e0, [e0, e0, opts, true]);
        
        if (opts.click && !opts.next)
            opts.next = opts.click;
        if (opts.next)
            $(opts.next).unbind('click.cycle').bind('click.cycle', function(){return advance(els,opts,opts.rev?-1:1);});
        if (opts.prev)
            $(opts.prev).unbind('click.cycle').bind('click.cycle', function(){return advance(els,opts,opts.rev?1:-1);});

        if (opts.timeout)
            this.cycleTimeout = setTimeout(function() {
                go(els,opts,0,!opts.rev);
            }, opts.timeout + (opts.delay||0));
    });
};

function go(els, opts, manual, fwd) {
    if (opts.busy) 
        return;
    var p = els[0].parentNode, curr = els[opts.currSlide], next = els[opts.nextSlide];
    if (p.cycleTimeout === 0 && !manual) 
        return;

    if (manual || !p.cyclePause) {
        if (opts.before.length)
            $.each(opts.before, function(i,o) { o.apply(next, [curr, next, opts, fwd]); });
        var after = function() {
            if (msie)
                this.style.removeAttribute('filter');
            $.each(opts.after, function(i,o) { o.apply(next, [curr, next, opts, fwd]); });
            queueNext(opts);
        };

        if (opts.nextSlide != opts.currSlide) {
            opts.busy = 1;
            $.fn.cycle.custom(curr, next, opts, after);
        }
        var roll = (opts.nextSlide + 1) == els.length;
        opts.nextSlide = roll ? 0 : opts.nextSlide+1;
        opts.currSlide = roll ? els.length-1 : opts.nextSlide-1;
    } else {
      queueNext(opts);
    }

    function queueNext(opts) {
        if (opts.timeout)
            p.cycleTimeout = setTimeout(function() { go(els,opts,0,!opts.rev); }, opts.timeout);
    }
}

// advance slide forward or back
function advance(els, opts, val) {
    var p = els[0].parentNode, timeout = p.cycleTimeout;
    if (timeout) {
        clearTimeout(timeout);
        p.cycleTimeout = 0;
    }
    opts.nextSlide = opts.currSlide + val;
    if (opts.nextSlide < 0) {
        opts.nextSlide = els.length - 1;
    }
    else if (opts.nextSlide >= els.length) {
        opts.nextSlide = 0;
    }
    go(els, opts, 1, val>=0);
    return false;
}

$.fn.cycle.custom = function(curr, next, opts, cb) {
    var $l = $(curr), $n = $(next);
    $n.css(opts.cssBefore);
    var fn = function() {$n.animate(opts.animIn, opts.speedIn, opts.easeIn, cb);};
    $l.animate(opts.animOut, opts.speedOut, opts.easeOut, function() {
        $l.css(opts.cssAfter);
        if (!opts.sync)
            fn();
    });
    if (opts.sync)
        fn();
};

$.fn.cycle.transitions = {
    fade: function($cont, $slides, opts) {
        $slides.not(':eq(0)').hide();
        opts.cssBefore = { opacity: 0, display: 'block' };
        opts.cssAfter  = { display: 'none' };
        opts.animOut = { opacity: 0 };
        opts.animIn = { opacity: 1 };
    },
    fadeout: function($cont, $slides, opts) {
        opts.before.push(function(curr,next,opts,fwd) {
            $(curr).css('zIndex',opts.slideCount + (fwd === true ? 1 : 0));
            $(next).css('zIndex',opts.slideCount + (fwd === true ? 0 : 1));
        });
        $slides.not(':eq(0)').hide();
        opts.cssBefore = { opacity: 1, display: 'block', zIndex: 1 };
        opts.cssAfter  = { display: 'none', zIndex: 0 };
        opts.animOut = { opacity: 0 };
        opts.animIn = { opacity: 1 };
    }
};

$.fn.cycle.ver = function() { return ver; };

// @see: http://malsup.com/jquery/cycle/lite/
$.fn.cycle.defaults = {
    animIn:        {},
    animOut:       {},
    fx:           'fade',
    after:         null,
    before:        null,
    cssBefore:     {},
    cssAfter:      {},
    delay:         0,
    fit:           0,
    height:       'auto',
    metaAttr:     'cycle',
    next:          null,
    pause:         false,
    prev:          null,
    speed:         1000,
    slideExpr:     null,
    sync:          true,
    timeout:       8000
};

})(jQuery);

$('.sliders').cycle({
    next: '.arrow-right',
    prev: '.arrow-left'
});

$('.list-rooms').cycle();

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

/**
 * Configure preload site
 */
$(document).ready(function() {
    $('body').jpreLoader({
      showPercentage: false,
      loaderVPos: '400px',
      //autoClose: false,
      splashVPos: '202px',
      closeBtnText: ''
    });

    smoothScroll.init();

    var $navFix = $('.menu-info');

    $(window).scroll(function() {
        if($(this).scrollTop() > 310) {
            $navFix.addClass('fixed-menu');
        } else {
            $navFix.removeClass('fixed-menu');
        }
    });

    function activeClass(element,container) {
        $(element).on('click',function() {
            $(this).addClass('active')
            .siblings(element).removeClass('active');
        });
    };

    activeClass('li','.menu-info');

    function countElements(el,cont) {
        $.each($(el,cont), function(i) {
            $(this).text(i + 1);
        });
    };

    countElements('.storage-number','.tips-columns');
    countElements('.caution-number','.tips-columns');

    $.each($('a','.product-titles'), function(i) {
        $(this).attr('href','#panel'+i);
    });

    $('dd:first','.product-titles').attr('class','active');

    $.each($('div','.tabs-content'), function(i) {
        $(this).attr('id','panel'+i);
    });

    $('div:first','.tabs-content').addClass('active');


}, new WOW().init());







