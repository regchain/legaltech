<!DOCTYPE html>
<!-- 
  Template: Pecto - Multipurpose HTML Template Built With Twitter Bootstrap 3.3.7
  
  Version: 1.0.0
  
-->
<!--[if IE 9]> 
  <html lang="en" class="ie9">
  <![endif]-->
  <!--[if !IE]><!-->
    <html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
      <meta charset="utf-8"/>
      <title>LegalTech Indonesia</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <meta content="" name="description"/>
      <meta content="" name="author"/>
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="{{ asset('templates/pacto/css/bootstrap.min.css')}}" />
      <!-- /Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
      <!-- font-awesome -->
      <link href="{{ asset('templates/pacto/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- line icons -->
      <link href="{{ asset('templates/pacto/css/linearicons.css')}}" rel="stylesheet" type="text/css" />
      <!-- simple-line-icons-->
      <link href="{{ asset('templates/pacto/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
      <!-- owl-carousel -->
      <link href="{{ asset('templates/pacto/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('templates/pacto/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
      <!-- shortcodes -->
      <link rel="stylesheet" type="text/css" href="{{ asset('templates/pacto/css/shortcodes.css')}}" />
      <!-- base -->
      <link href="{{ asset('templates/pacto/css/base.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootsnav -->
      <link href="{{ asset('templates/pacto/css/bootsnav.css')}}" rel="stylesheet">
      <!-- Responsive -->
      <link href="{{ asset('templates/pacto/css/responsive.css')}}" rel="stylesheet">
      <!-- Favicon -->
      <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body>
      <!-- Preloader -->
      <div id="preloader">
        <div class="clear-loading loading-effect"><img src="{{ asset('templates/pacto/images/loading.gif')}}" width="100" alt=""></div>
      </div>
      
      <!-- coming-soon -->
      <section class="coming-soon p-0 pos-r">
        <div class="fullbg bg-pos-right " data-bg-img="{{ asset('images/keyboard.jpg')}}" ></div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-8 text-center">
              <div class="py-7 pr-7 xs-pr-0 xs-py-5 coming-block text-center">
                <div class="valign-middle">
                  
                  <span class="label-coming theme-text mb-1">Coming Soon</span>
                  <div class="social-icons color-hover text-center mt-1">
                    <a class="navbar-brand" href="welcome">
                    {{-- <img src="{{ asset('images/brand/logo-text-white.png')}}" class="logo logo-display" alt=""> --}}
                    <img src="{{ asset('images/brand/logo-text-black.png')}}" class="logo logo-scrolled" alt="">
                  </a> 
                    {{-- <ul>
                      <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul> --}}
                  </div>
                  
                  <p><br>...brings the resources of your entire office with you to the courthouse, to client meetings, on an airplane, at a coffee shop, and to your home. 
                    <br>It’s amazing how out-of-the-office time suddenly becomes productive.<br><a href="welcome">Read more...</a></p>
                  <h4 class="text-uppercase mb-0"><i class="icon-envelope-letter icons" aria-hidden="true"></i> Provide your email address!</h4>
                  <p class="mb-2">We will notify you when site is ready :</p>
                  <form role="form" class="search-form">
                    <div class="form-group">
                      <input name="search" class="form-control" placeholder="Notify Me" type="text">
                      <a href="#" class="submit"><i class="icon-magnifier icons" aria-hidden="true"></i></a>
                    </div>
                  </form>
                  <ul class="countdown list-unstyled mb-3">
                    <li>
                      <span class="days theme-text">302</span>
                      <p class="days_ref">Days</p>
                    </li>
                    <li>
                      <span class="hours theme-text">10</span>
                      <p class="hours_ref">Hours</p>
                    </li>
                    <li>
                      <span class="minutes theme-text">42</span>
                      <p class="minutes_ref">Minutes</p>
                    </li>
                    <li>
                      <span class="seconds theme-text">36</span>
                      <p class="seconds_ref">Seconds</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End coming-soon -->
      <!-- jquery  -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/jquery.min.js')}}"></script>
      <!-- bootstrap -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/bootstrap.min.js')}}"></script>
      <!-- appear -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/jquery.appear.js')}}"></script>
      <!-- owl-carousel -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/owl-carousel/owl.carousel.min.js')}}"></script>
      <!-- counter -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/counter/jquery.countTo.js')}}"></script>
      <!-- countdown -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/countdown/jquery.downCount.js')}}"></script>
      <!-- counter -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/jquery.piechart.js')}}"></script>
      <!-- magnific popup -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <!-- isotope -->
      <script src="{{ asset('templates/pacto/js/isotope/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('templates/pacto/js/isotope/imagesLoaded.js')}}"></script>
      <!-- jarallax -->
      <script src="{{ asset('templates/pacto/js/jarallax/jarallax.js')}}"></script>
      <script src="{{ asset('templates/pacto/js/jarallax/jarallax-video.js')}}"></script>
      <!-- Bootsnavs -->
      <script src="{{ asset('templates/pacto/js/bootsnav.js')}}"></script>
      <!-- custom -->
      <script type="text/javascript" src="{{ asset('templates/pacto/js/custom.js')}}"></script>
    </body>
    </html>