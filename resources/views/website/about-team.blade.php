@extends('themes.website.template')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
               <!-- End Navigation -->
         <!-- Banner -->
         <section class="p-0 pos-r  dark-bg">
            <div class="fullbg" data-bg-img="{{ asset('images/pacto/main/bg-2.jpg')}}" ></div>
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-8 col-sm-offset-4 col-md-offset-6">
                     <div class="py-7 pl-7 xs-pl-0 xs-py-5">
                        <div class="heading-block">
                           <h2 class="solid-weight text-uppercase mb-1">Bryce Vaughn</h2>
                           <span>CEO/Founder</span>
                        </div>
                        <p class="lead">Launching an attractive and scalable website quickly and afforadably is important for modern startups — Stack offers massive value without looking ‘bargain-bin’.</p>
                        <div class="social-icons animated mb-4">
                           <ul class="clearfix">
                              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                              <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                        </div>
                        <blockquote class="pullquote pos-center">
                           <p>Design is the fundamental soul of a man-made creation that ends up expressing itself in successive outer layers of the product or service.</p>
                        </blockquote>
                        <p class="text-center m-0"><img src="{{ asset('images/pacto/Signature-white.png')}}" alt="" /></p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Banner -->
         <section class="p-0">
            <div class="container-fluid">
               <!-- BRYCE VAUGHN -->
               <div class="row">
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12"><img class="img-responsive" src="{{ asset('images/pacto/team/member1.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Nick Brew</h3>
                              <span>Marketing Director</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-push-0 col-sm-push-6"><img class="img-responsive" src="{{ asset('images/pacto/team/member2.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-pull-0 col-sm-pull-6">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Jenny Doe</h3>
                              <span>Sales Assistance</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End BRYCE VAUGHN -->
               <!-- Team -->
               <div class="row">
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-push-6"><img class="img-responsive" src="{{ asset('images/pacto/team/member3.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12 col-md-pull-6">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Crow Alex</h3>
                              <span>Art Director</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="row no-gutter">
                        <div class="col-md-6 col-xs-6 col-xx-12 col-sm-push-6"><img class="img-responsive" src="{{ asset('images/pacto/team/member4.jpg')}}" alt="" /></div>
                        <div class="col-md-6 col-xs-6 col-xx-12 col-sm-pull-6">
                           <div class="py-5 pl-5">
                              <h3 class="member-name light-weight mb-1">Ronnie Rice</h3>
                              <span>Developer</span>
                              <p class="lead mt-2">Launching an attractive and scalable website quickly and afforadably is important for modern startups</p>
                              <div class="social-icons animated">
                                 <ul class="clearfix">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Team -->
            </div>
         </section>
@endsection()

@section('scripts')
{{-- expr --}}
@endsection