  function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }
    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });// for Scroll 
	
	$('#ss').css('border','inset 10px #8B0000');
	$('#name').css('border','inset 10px #8B0000');
	$('#message').css('border','inset 10px #8B0000');
	$('#email').css('border','inset 10px #8B0000');
	$('#name22').css('double','inset 8px #00008B');//  Selectors








