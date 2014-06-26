(function($) {
  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  };  
})(jQuery);

$(window).scroll(function(event) {
  
  $(".module").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
     el.addClass("come-in"); 
    } 
    else{
      el.removeClass("come-in");
    }
  });

  $(".text-in").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
     el.addClass("bottom-up"); 
    } 
    else{
      el.removeClass("bottom-up");
    }
  });

  $(".origami").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
     el.addClass("bottom-up"); 
    } 
    else{
      el.removeClass("bottom-up");
    }
  });

  $(".origami:nth-of-type(2)").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
     el.removeClass("bottom-up"); 
     el.addClass("up-bottom"); 
    } 
    else{
      el.removeClass("up-bottom");
    }
  });

  $(".social").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
     el.addClass("up-bottom-no-fade"); 
    } 
    else{
      el.removeClass("up-bottom-no-fade");
    }
  });
  
});
