    <body>
               <!-- Preloader -->
               <div id="preloader">
                  <div class="clear-loading loading-effect"><img src="{{ asset('images/loading.gif')}}" width="100" alt=""></div>
               </div>
               <!-- Start Navigation -->
               <nav class="navbar navbar-default navbar-sticky bootsnav">
                  <!-- Start Top Search -->
                  <div class="top-search">
                     <div class="container">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                           <input type="text" class="form-control" placeholder="Search">
                           <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> 
                        </div>
                     </div>
                  </div>
                  <!-- End Top Search -->
                  <div class="container">
                     <!-- Start Atribute Navigation -->
                     <div class="attr-nav">
                        <ul>
                           <li class="search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                           <li class="side-menu"><a href="#"><i class="fa fa-2x fa-sign-in"></i></a></li>
                        </ul>
                     </div>
                     <!-- End Atribute Navigation -->
                     <!-- Start Header Navigation -->
                     
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
                        <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/brand/logo-text-black.png')}}" class="logo logo-scrolled" alt=""> </a> 
                     </div>
                     <!-- End Header Navigation -->
                     @include('themes.website.menu.megamenu')
                     <!-- /.navbar-collapse -->

                     <!-- End Header Navigation -->
                     @include('themes.website.menu.sidemenu')
                     <!-- /.navbar-collapse -->
                  </div>
                  @include('themes.website.menu.sidemenu')
 </nav>
               <!-- End Navigation -->