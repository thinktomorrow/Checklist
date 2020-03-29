$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
  
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  
  if (!Modernizr.input.placeholder) {
    $('[placeholder]').each(function() {
      var $this = $(this),
        placeholderValue = $this.attr('placeholder');
  
      if ($this.val() == '') {
        $this.val(placeholderValue);
        $this.addClass('hasPlaceholderText');
      }
  
      $this.focus(function() {
        if ($this.val() == placeholderValue) {
          $this.val('');
          $this.removeClass('hasPlaceholderText');
        }
      }).blur(function() {
        if ($this.val() == '' || $this.val() == placeholderValue) {
          $this.val(placeholderValue);
          $this.addClass('hasPlaceholderText');
        }
      });
  
      $this.closest('form').submit(function() {
        if ($this.val() == $this.attr('placeholder')) {
          $this.val('');
        }
      });
    });
  }
  
  $(".toggle").click(function(event) {
    $(this).toggleClass('read-less');
    $(this).prev('.more').toggleClass('show');
    event.preventDefault()
  });