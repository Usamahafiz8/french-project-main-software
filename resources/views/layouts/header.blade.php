<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">   
   <title>@yield('title')</title>
   
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/formstyle.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif"/>
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
   media="screen">
   <link rel="stylesheet" href="{{asset('css/wizard.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
   @yield('tablestyling')
   @yield('tablescript')
</head>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         <div class="container" style="padding:2px !important;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="{{asset('images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{asset('avatars/')}}/{{auth()->user()->avatar }}" class="rounded-circle" width="70" height="30">
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              </ul>
          </div>
               
            </nav>
         </div>
      </div>
      
   </div>
   <!--header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h6 class="services_taital"><span style="color: #54ba9e">Relevé d’évaluation thermique </span>d’une maison individuelle</h6>
         <div class="services_section_2">
          
            @yield('contentdata')
            
       
         </div>
      </div>
   </div>
   <!-- services section end -->
   
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>
   <script src="{{asset('js/dynamictable.js')}}"></script>
    <script src="{{asset('js/wizard.js')}}"></script>
    <script src="{{asset('js/ajaxcalls.js')}}"></script>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
   <!-- <script src="{{asset('js/plugin.js')}}"></script> -->
   <!-- sidebar -->
   <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('js/owl.carousel.js')}}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>