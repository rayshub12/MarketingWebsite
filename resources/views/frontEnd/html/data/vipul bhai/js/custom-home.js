$(document).ready(function(){
	fullscreenrResizer();
});

$(window).load(function() {
  var browserwidth = $(window).width();
    if (browserwidth > 560){
    //equalHeight($(".articlesInner, .newsInner"));
	//equalHeight($(".articlesInner1, .newsInner1"));
  }
  if (browserwidth > 767){
    //equalHeight($(".marketTypeWrap li"));
  }
});

$(window).resize(function() {
  var browserwidth = $(window).width();
    fullscreenrResizer();

  if (browserwidth < 768){
    //$(".articlesInner, .newsInner").removeAttr("style")
	//$(".articlesInner1, .newsInner1").removeAttr("style")
  }
  if (browserwidth < 560){
    $(".marketTypeWrap li").removeAttr("style")
  }
});

function fullscreenrResizer(){
  var browserheight = $(window).height();

  $('.bgFull').each(function(index) {
    // Set bg size
    var iwidth=1300, iheight=550;
    var ratio = iheight / iwidth;
    // Get browser window size
    var browserwidth = $(window).width();
    browserheight = $('.slideshow').height();
    // Scale the image
    if ((browserheight/browserwidth) > ratio){
        //$(this).height(browserheight);
        //$(this).width(browserheight / ratio);
    } else {
        //$(this).width(browserwidth);
        //$(this).height(browserwidth * ratio);
    }
    // Center the image
    $(this).css('left', (browserwidth - $(this).width())/2);
    $(this).css('top', (browserheight - $(this).height())/2);
  });
}

function equalHeight(group) {
   tallest = 0;
   group.each(function() {
      thisHeight = $(this).height();
      if(thisHeight > tallest) {
         tallest = thisHeight;
      }
   });
   group.height(tallest);
}


 $(document).ready(function(){
		  $(".dropdown").hover(            
			  function() {
				  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeIn("400");
				  $(this).toggleClass('open'); 					  
				  $("#PrImg").css("display","block")				  
			  },
			  function() {
				  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeOut("400");
				  $(this).toggleClass('open');
				  // $("#industries li ul").css("display","none")					  
				  // $("#industries li:first-child  ul").css("display","block")
				  $("#LIpractic li ul li ul").css("display","none")
				  $("#MarketResearch li ul").css("display","none")					  
				  $("#MarketResearch .ulcls").css("display","block")
			  }
		 );
		 $(document).on("mouseover",".HoverItemFirst",function(){
			 $('.sub-second-nav').hide();
			 $('.clients-img').hide();
			 $(this).find('.sub-second-nav').show();		
		 });
		
		 $(document).on("mouseover",".HoverItemSecond",function(){
			 $('.sub-third-nav').hide();
			 $(this).find('.sub-third-nav').show();
		 });
		 
		 
		 
	});  
	
	
	 $(document).ready(function(){
		  $.ajax({
			 //url: "https://dev1.mnmks.com/guest/guestAPI?isguest=true",
			 url: "https://www.marketsandmarkets.com/PracticeMenu.txt",
			 type: "GET",
			 //data: {username: name},
			 success:function(response){
				  SetList(response);
			  },
			 error: function (msg) {  //alert(msg);
			 },
			 async: false 
		 });

		function SetList(response) {
		
			var parsed = jQuery.parseJSON(response);
			$.each(parsed.mega_trends, function(index, item) {
				   $('#Prlist').append('<li><a href="'+item.url+'"rel="noindex" rel="nofollow"><span>'+item.name+'</span></a></li>');
				   $('#mPrlist').append('<li><a href="'+item.url+'"rel="noindex" rel="nofollow">'+item.name+'</a></li>');
			});
			var strPrInd="";
			var MstrPrInd="";
			$.each(parsed.industry_trends, function(index, item) {
                
			   if(index==0){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Aerospace-and-Defense-1.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
			   MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Aerospace-and-Defense-1.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
			     else if(index==1){
					strPrInd += '<li class="HoverItemFirst"><a href="#"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				 MstrPrInd += '<li class="HoverItemFirst"><a href="#"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==2){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Automotive-and-Transportation-2.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Automotive-and-Transportation-2.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==3){
					strPrInd += '<li class="HoverItemFirst"><a href="#"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="#"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==4){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Chemical-and-Materials-9.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Chemical-and-Materials-9.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==5){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Energy-and-Power-3.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Energy-and-Power-3.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==6){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Food and Beverage-4.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Food and Beverage-4.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==7){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Healthcare-5.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Healthcare-5.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==8){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Information-and-Communication-Technology-6.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Information-and-Communication-Technology-6.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==9){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Packaging-Construction-and-Mining-8.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Packaging-Construction-and-Mining-8.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';}
				else if(index==10){
					strPrInd += '<li class="HoverItemFirst"><a href="#"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="#"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';
				}
				else if(index==11){
					strPrInd += '<li class="HoverItemFirst"><a href="/Industry/Semiconductor-and-Electronics-7.asp"><span>'+item.name+'</span><span> <i class="glyphicon glyphicon-chevron-right"></i></span></a>';
				MstrPrInd += '<li class="HoverItemFirst"><a href="/Industry/Semiconductor-and-Electronics-7.asp"><span>'+item.name+'</span></a><span class="arrowBtn-sub2"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>';
				}
				strPrInd += '<ul class="sub-second-nav">';
				MstrPrInd += '<ul class="sub-second-nav2" style="display:none;>';
				 
				$.each(item.trends, function(index2, item2) {
				   MstrPrInd += '<li class="HoverItemSecond"><a href="'+item2.url+'"rel="noindex" rel="nofollow"><span>'+item2.name+'</span></a></li>';
				   strPrInd += '<li class="HoverItemSecond"><a href="'+item2.url+'"rel="noindex" rel="nofollow"><span>'+item2.name+'</span></a></li>';
				});
				  strPrInd += '</ul></li>';
				  MstrPrInd += '</ul></li>';
			});
			 $('#PrInd').append(strPrInd);
			 $('#mPrInd').append(MstrPrInd);
			 
			// var strindustries="";
			// $.each(parsed.industries, function(index, item) {
			
				// strindustries += '<li class="HoverItemFirst"><a href="'+item.url+'"rel="noindex" rel="nofollow"><span>'+item.name+'</span><span><i class="fa fa-chevron-right"></i> </span></a>';
				// strindustries += '<ul class="sub-second-nav">';
				 
				// $.each(item.sub_industries, function(index2, item2) {

					// strindustries += '<li><a href="'+item2.url+'"rel="noindex" rel="nofollow"><span>'+item2.name+'</span></a></li>';
				  	
				// });
				 // strindustries += '</ul></li>';
				
			// });
			 // $('#industries').append(strindustries);
			
		}
		
		 
		$("li .arrowBtn-sub").click(function(){
			$(this).next().slideToggle(300);
			$(this).find('i').toggleClass('fa-sort-desc').toggleClass('fa-sort-asc');
		});
		
		$(".arrowBtn-sub2").click(function(){
			$(this).next().slideToggle(300);
			$(this).find('i').toggleClass('fa-sort-desc').toggleClass('fa-sort-asc');
		});
		
		/*$(document).on("click", ".level2 .arrowBtn-sub2", function () {alert('hi');
		 //$(".level2 .arrowBtn-sub2").click(function(){
			 $(this).next().slideToggle(300);
			 $(this).find('i').toggleClass('fa-sort-desc').toggleClass('fa-sort-asc');
		 }); */

		
		
		
	});  
	
	
	
    $(document).ready(function(){
		
		function setCookie(name,value,days) {
			var expires = "";
			if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days*24*60*60*1000));
				expires = "; expires=" + date.toUTCString();
			}
			document.cookie = name + "=" + (value || "")  + expires + "; path=/";
		}
		function getCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}
		function eraseCookie(name) {   
			document.cookie = name+'=; Max-Age=-99999999;';  
		}
		
		//$.removeCookie('cookiePrivacy');
		$(".cookieAlert").remove();
		//$('.footerWrap').prepend("<div class='cookieAlert'><div class='left'>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies . <a href='https://www.marketsandmarkets.com/Privacy-12.html'>More info</a>. </div><div class='right'><span id='PrivacyCookieClose'>X</span></div></div>");
		//$('#PrivacyCookieClose').click(function (){
		$("body").on("click", "#PrivacyCookieClose", function(){
			//$.cookie("cookiePrivacy",1);
			setCookie('Privacycookie','true',7);
			$('.cookieAlert').hide(700);
			$('.sliderWrap').css('margin-top',97);
			$('.responsiveButton').css('top',0);
			$('.sliderWrapMob').css('margin-top',70);
			$('.contentWrap').css('margin-top',0);
			//$('.reportpage').css('margin-top',-9);
			
			$('.ReqBoxWrap').css('bottom',0);
		});
		function chkPrivacy(){
			 
			var x = getCookie('Privacycookie');
			if (x) {
			//if (typeof $.cookie('cookiePrivacy') === 'undefined'){
			 //have cookie
			 $('.cookieAlert').hide();
			 $('.sliderWrap').css('margin-top',97);
			 $('.responsiveButton').css('top',0);
			 $('.sliderWrapMob').css('margin-top',70);
			 $('.ReqBoxWrap').css('bottom',0);
				
			} else {
			   //no cookie
			 $('.cookieAlert').show();
			 $('body').prepend("<div class='cookieAlert'><div class='left'>We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies . <a href='https://www.marketsandmarkets.com/Privacy-12.html'>More info</a>. </div><div class='right'><span id='PrivacyCookieClose'>X</span></div></div>");
		
			 //$('.sliderWrap').css('margin-top',150);
			 //$('.sliderWrapMob').css('margin-top',150);
			 
			 //$('.reportpage').css('margin-top',40);
			 $('.ReqBoxWrap').css('bottom',27);
			 
			}
			
			
		}chkPrivacy(); 
	
	
	
	
	        $(".divWrap #chat").hover( 
				function(){  
                 $(".divWrap .chat").show(500);
                 //$(".divWrap #chat").addClass("magTB11");

            },
				function(){
				 $(".divWrap .chat").hide(500);
				 //$(".divWrap #chat").removeClass("magTB11");
            });
            

             $(".divWrap #phone").hover( 
				function(){  
                 $(".divWrap .phone").show(500);
                 //$(".divWrap #phone").addClass("magTB11");

            },
				function(){
				 $(".divWrap .phone").hide(500);
				 //$(".divWrap #phone").removeClass("magTB11");
            });


              $(".divWrap #email").hover( 
				function(){  
                 $(".divWrap .email").show(500);
                // $(".divWrap #email").addClass("magTB11");

            },
				function(){
				 $(".divWrap .email").hide(500);
				 //$(".divWrap #email").removeClass("magTB11");
            });
           
			 
			
			
			$('.dropdown-toggle').dropdown()
			$(".chossDiv").hide();
			$(".singleLic").click(function(){
				$(".chossDiv").toggle();
			});

			$('input[name=optradio]').on('change', function() {
				//alert($('input[name=optradio]:checked').val()); 
				$(".divprice").html('$'+$('input[name=optradio]:checked').val());
				$(".chossDiv").hide();
			});

			
			//Adjesent market code
					
			function getAdajasentMarket(){
				
				if(typeof NewsID != 'undefined')
				{
					$.ajax({
						type: "POST",
						url: "https://www.marketsandmarkets.com/APIRelatedReport.asp?apitype=report&value="+NewsID,
						contentType: "application/json; charset=utf-8",
						dataType: "json",
						success:function(response){ 
							if(response.message == "NoRecord")
								$("#dvADJACENTMARKETS").hide();
							else{
								$("#dvADJACENTMARKETS").show();
								$.each(response.data, function (index, item) {
									//alert('loop');
									$("#ulADJACENTMARKETS").append("<li><a href='/Market-Reports/"+item.customreportname+"-"+item.newsId+".html'>"+item.reportname+"</a></li>");
								});
							}
						},
						error: function(response){
							//alert("error") 
						},
						//crossDomain:true,
						async: false ,
						timeout: 10000
					});
				}
				
			} 
			getAdajasentMarket();
			
			
	
    });
	
	
	