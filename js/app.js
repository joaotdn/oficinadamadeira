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
}, new WOW().init());

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();