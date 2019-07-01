$(document).ready(function(){

	$('ul.responsive-tabs a').click(function(e) {
    	e.preventDefault();
      	$(this).tab('show');
    });

	$('.icon-search').click(function(){
		$(this).parents(".searchWrap").toggleClass('searchOpen');
	});

	$(document).on('click', '.toggleBtn', function () {
		$(this).parents(".toggleSubMenu").toggleClass('toggleSubMenuOpen');
	});

	$(document).mouseup(function (e) {
	    var searchWrap = $(".searchWrap");
	    if (!searchWrap.is(e.target) && searchWrap.has(e.target).length === 0) {
	        $(".searchWrap").removeClass('searchOpen');
	    }
	});

  $('.accordion-link').on('hover', function(){
  		var headerHeight = $(".headerWrap").outerHeight() + 10;
      $('html,body').animate({scrollTop: $(this).offset().top - headerHeight});
  });

  $('.researchMenu > ul > li > h2 > a').hover(function(event) {
  	event.preventDefault();
  	if(!($(this).hasClass('active'))){
  		$('.researchMenu ul ul').slideUp(900);
	  	$(this).parent().parent().find('ul').slideDown(900);
	  	$('.researchMenu > ul > li > h2 a').removeClass('active');
	  	$(this).addClass('active');
  	}else{
  		//$('.researchMenu ul ul').slideUp(300);
	  	//$(this).removeClass('active');

  	}
  });
});

//$('.responsive-tabs').responsiveTabs({
  //accordionOn: ['xs', 'sm']
//});