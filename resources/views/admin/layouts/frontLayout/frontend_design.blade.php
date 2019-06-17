<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- for Google -->
    <meta name="title" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="canonical" href="" />
    <meta name="copyright" content="Copyright (C) Since 2019 - This Content is owned by original poster" />

    <!-- for Facebook -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset(config('app.favicon')) }}" type="image/x-icon"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/passtrength.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend_css/jquery.mmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/frontend_css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/style.css') }}">
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/frontend_js/owl.carousel.js') }}"></script>

    @include('admin.system.partials.code_head')
    
</head>
<body >

@include('layouts.frontLayout.header_design')

@yield('content')

@include('layouts.frontLayout.footer_design')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend_js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('js/frontend_js/tagsinput.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend_js/emicalc-lib.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend_js/emicalc-main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend_js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/custom.js') }}"></script>

    <script type="text/javascript">
    $(function() {
        $("#PropertyType").change(function() {
            if ($(this).val() == "1001" || $(this).val() == "1002" || $(this).val() == "1012" || $(this).val() == "1014" || $(this).val() == "1016") {
                $("#MapPassed").show();
            } else {
                $("#MapPassed").hide();
            }

            if ($(this).val() == "1001" || $(this).val() == "1002" || $(this).val() == "1005" || $(this).val() == "1012" || $(this).val() == "1013" || $(this).val() == "1014" || $(this).val() == "1016" || $(this).val() == "1017" || $(this).val() == "1018") {
                $("#OpenSides").show();
            } else {
                $("#OpenSides").hide();
            }

            if ($(this).val() == "1001" || $(this).val() == "1002" || $(this).val() == "1005" || $(this).val() == "1012" || $(this).val() == "1013" || $(this).val() == "1014" || $(this).val() == "1016" || $(this).val() == "1017" || $(this).val() == "1018") {
                $("#WidthRoadFacing").show();
            } else {
                $("#WidthRoadFacing").hide();
            }

            // if ($(this).val() == "1001" || $(this).val() == "1014" || $(this).val() == "1016" || $(this).val() == "1017") {
            //     $("#BoundryWall").show();
            // } else {
            //     $("#BoundryWall").hide();
            // }

            if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1018") {
                $("#Bedrooms").show();
            } else {
                $("#Bedrooms").hide();
            }

            if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1011" || $(this).val() == "1018") {
                $("#Bathrooms").show();
            } else {
                $("#Bathrooms").hide();
            }

            if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007") {
                $("#Balconies").show();
            } else {
                $("#Balconies").hide();
            }

            if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011" || $(this).val() == "1013" || $(this).val() == "1018") {
                $("#FurnishStatus").show();
            } else {
                $("#FurnishStatus").hide();
            }

            if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011" || $(this).val() == "1013") {
                $("#FloorNo").show();
            } else {
                $("#FloorNo").hide();
            }

            if ($(this).val() == "1002" || $(this).val() == "1003" || $(this).val() == "1004" || $(this).val() == "1005" || $(this).val() == "1006" || $(this).val() == "1007" || $(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011" || $(this).val() == "1015" || $(this).val() == "1018" || $(this).val() == "1013") {
                $("#TotalFloor").show();
            } else {
                $("#TotalFloor").hide();
            }

            if ($(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010") {
                $("#PWashroom").show();
            } else {
                $("#PWashroom").hide();
            }

            if ($(this).val() == "1008" || $(this).val() == "1009" || $(this).val() == "1010" || $(this).val() == "1011") {
                $("#Cafeteria").show();
            } else {
                $("#Cafeteria").hide();
            }

            if ($(this).val() == "1010" || $(this).val() == "1011") {
                $("#IsRoadFacing").show();
            } else {
                $("#IsRoadFacing").hide();
            }

            if ($(this).val() == "1011") {
                $("#PShowroom").show();
            } else {
                $("#PShowroom").hide();
            }

            if ($(this).val() == "1010" || $(this).val() == "1011") {
                $("#CornerShop").show();
            } else {
                $("#CornerShop").hide();
            }

            if ($(this).val() == "1001" || $(this).val() == "1012" || $(this).val() == "1014" || $(this).val() == "1017") {
                $("#BoundryWall").show();
            } else {
                $("#BoundryWall").hide();
            }

            if ($(this).val() == "1019") {
                $("#AppleTrees").show();
            } else {
                $("#AppleTrees").hide();
            }

        });
    });
    </script>

<script>
    //Homepage search js
$(document).ready(function(){
  $('.search_location').keyup(function(){ 
    var query = $(this).val();
    if(query != ''){
      var _token = $('input[name="_token"]').val();
      
      $.ajax({
        url:"/search",
        method:"POST",
        data:{query:query, _token:_token},
        success:function(data){
          $('#searchlist').fadeIn(); 
          $('#searchlist').html(data);
        }
      });
    }
  });

  $(document).on('click', 'li', function(){ 
    $('#search_name').val($(this).text()); 
    $('#searchlist').fadeOut(); 
  }); 

  $(document).on('click', function(){ 
    $('#searchlist').fadeOut(); 
  });

  $(document).keyup(function(e) {
    if (e.key === "Escape") { 
      $('#searchlist').fadeOut(); 
    }
  });
});
</script>
<script>
// Check User Email
$('#email').blur(function()
{
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(email))
  {    
   $('#error_email').html('<label class="text-danger">Invalid Email</label>');
   $('#email').addClass('has-error');
  }
  else
  {
   $.ajax({
    url:"{{ url('/checkuseremail') }}",
    method:"POST",
    data:{email:email, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_email').html('<label class="text-success">Email Available</label>');
      $('#email').removeClass('has-error');
     }
     else
     {
      $('#error_email').html('<label class="text-danger">Email already exist.</label>');
      $('#email').addClass('has-error');
     }
    }
   })
  }
 });
</script>

<script>
// Check User Phone
$('#phone').blur(function()
{
  var error_phone = '';
  var phone = $('#phone').val();
  var _token = $('input[name="_token"]').val();
//   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(phone))
  {    
   $('#error_phone').html('<label class="text-danger">Invalid Phone</label>');
   $('#phone').addClass('has-error');
  }
  else
  {
   $.ajax({
    url:"{{ url('/checkphone') }}",
    method:"POST",
    data:{phone:phone, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_phone').html('<label class="text-success">Phone Available</label>');
      $('#phone').removeClass('has-error');
     }
     else
     {
      $('#error_phone').html('<label class="text-danger">Phone already exist.</label>');
      $('#phone').addClass('has-error');
     }
    }
   })
  }
 });
</script>

    @include('admin.system.partials.code_footer')

  </body>
</html>