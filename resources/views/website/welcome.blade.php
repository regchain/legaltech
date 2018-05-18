@extends('layouts.main.template')

@section('stylesheets')
    {{-- expr --}}
@endsection

@section('content')
                  @include('layouts.main.menu.sidemenu')
               </nav>
               <!-- End Navigation -->
               <!-- Banner -->
               <section class="full-height fullscreen bg white-text header-slide">
                  <div class="owl-carousel owl-theme light-arrow" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="false" data-nav-arrow="true" data-auto-play="false"  data-space="0">
                     <!-- item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('templates/pacto/images/consultant/slide1.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <h3 class="title">Matter Management</h3>
                                 <div class="slide-content">
                                    <p>Centralize Matter details such as notes, file status, documents, appointments, progress, invoices and tasks. LPMS’ s versatility means that it can adapt to any practice area..</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                     <!-- item -->
                     <div class="item" >
                        <div class="slide-img"><img src="{{ asset('templates/pacto/images/consultant/slide2.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h3 class="title">Analytics Engine</h3>
                                 <div class="slide-content">
                                    <p>A combined Apache Spark and Apache Hadoop service for creating analytics applications</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                     <!-- item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="{{ asset('templates/pacto/images/consultant/slide3.jpg')}}" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <h3 class="title">Decision Optimization</h3>
                                 <div class="slide-content">
                                    <p>A self-service decision environment designed to harness optimization-based support</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                  </div>
               </section>
               <!-- End Banner -->
               <!-- About Us -->
               {{-- <section class="grey-bg section-sm">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6 sm-mb-4">
                           <div class="heading-block">
                              <h2>About Us</h2>
                              <span>A few words about us</span> 
                           </div>
                           <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                           </p>
                           <div class="row">
                              <div class="col-sm-6 xs-mb-4">
                                 <ul class="list desh">
                                    <li>Web Development</li>
                                    <li>Graphic &amp; UI Design</li>
                                    <li>Customer Support</li>
                                    <li>Video Editing</li>
                                    <li>Print Design</li>
                                 </ul>
                              </div>
                              <div class="col-sm-6">
                                 <ul class="list desh">
                                    <li>Website Awards 2015</li>
                                    <li>Future of Web Design 2016</li>
                                    <li>Best In Web 2015</li>
                                    <li>Interactive Art Agency</li>
                                    <li>Innovative Brand 2016</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row mt-2">
                           		<div class="col-md-12 col-sm-8 mb-2"><img src="{{ asset('templates/pacto/images/consultant/image1.jpg')}}" class="img-responsive" alt="" /></div>
                              <div class="col-sm-4 col-xs-4 col-xx-12 sm-mb-2">
                                 <div class="counter text-center">
                                    <div class="counter-info"> <span class="timer theme-text" data-to="2500" data-speed="1000">2500</span>
                                       <label>Trusted clients</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 col-xs-4 col-xx-12 sm-mb-2">
                                 <div class="counter text-center">
                                    <div class="counter-info"> <span class="timer theme-text" data-to="98" data-speed="1000">98</span>
                                       <label>Successful cases</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 col-xs-4 col-xx-12">
                                 <div class="counter text-center">
                                    <div class="counter-info"> <span class="timer theme-text" data-to="7800" data-speed="1000">7800</span>
                                       <label>Billions recovered</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End About Us -->
               <!-- Projects -->
               {{-- <section class="xs-mb-5">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="heading-block text-center">
                              <h2 class="solid-weight">Latest Projects</h2>
                              <span>Tempor incididunt </span> 
                           </div>
                        </div>
                     <div class="col-sm-12">
                        <div class="owl-carousel owl-theme c-theme" data-items="3" data-nav-dots="true"  data-space="40">
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('templates/pacto/images/consultant/image2.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">BRANDING</p>
                              <h5 class="mb-1">Strategy & Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('templates/pacto/images/consultant/image3.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">FINANCE</p>
                              <h5 class="mb-1">Stock Market Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('templates/pacto/images/consultant/image4.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">FINANCE</p>
                              <h5 class="mb-1">Smart Notifications & Reminders </h5>
                              <p class="mb-0">Be notified on-time on important events and actions.</p><p> Never again miss a task deliverable or an appointment with our Smart Email or SMS reminders. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('templates/pacto/images/consultant/image5.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">INVESTMENT</p>
                              <h5 class="mb-1">Venture Capital Investment</h5>
                              <p>The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                           <div class="item">
                              <div class="mb-4"><img src="{{ asset('templates/pacto/images/consultant/image6.jpg')}}" class="img-responsive" alt="what-we-offer" /></div>
                              <p class="mb-0 theme-text solid-weight">BRANDING</p>
                              <h5 class="mb-1">Strategy & Consulting</h5>
                              <p class="mb-0">The clients are mostly the companies dealing with said products or services, but we also enjoy teaming up with other agencies, companies with great ideas. </p>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End Projects -->
               <!-- Services --> 
               {{-- <section class="p-0 pos-r grey-bg">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('templates/pacto/images/consultant/bg1.jpg')}}"></div>
                  <div class="container">
                     <div class="row ">
                        <div class="col-sm-8 col-md-6">
                           <div class="py-7 pr-5 xs-py-4 sm-py-5 sm-pr-4 xs-pr-0 xs-big-mt">
                              <div class="heading-block">
                                 <h2>Services</h2>
                                 <span>A few words about us</span> 
                              </div>
                              <p>Hello, we’re Valdis Agency. Here to solve your tricky design problems and help you tell your story. Click on the objects to find out more</p>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature">
                                       <div class="feature-icon theme-text"> <i class="lnr lnr-briefcase"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">Business Consulting</h4>
                                          <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature">
                                       <div class="feature-icon  theme-text"> <i class="lnr lnr-graduation-hat"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">Lawyer Consulting</h4>
                                          <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-6 col-xx-12 mb-3">
                                    <div class="feature">
                                       <div class="feature-icon  theme-text"> <i class="lnr lnr-bubble"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">Online Consulting</h4>
                                          <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-xx-12">
                                    <div class="feature">
                                       <div class="feature-icon  theme-text"> <i class="lnr lnr-laptop-phone"></i> </div>
                                       <div class="feature-info">
                                          <h4 class="solid-weight">IT Managment</h4>
                                          <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End Services --> 
               <!-- News --> 
               {{-- <section class="section-pb ">
                  <div class="container">
                     <div class="row mb-3">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                           <div class="heading-block">
                              <h2>Recent News</h2>
                              <span>Get updates from us</span>
                              <div class="divider"></div>
                           </div>
                           <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna labore et dolore magna</p>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row no-gutter">
                        <div class="owl-carousel owl-theme c-theme" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-nav-dots="false"  data-space="0">
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <div class="post-overlay theme-bg"></div>
                                    <img class="img-responsive" src="{{ asset('templates/pacto/images/blog/blog1.jpg')}}" alt="" /> 
                                 </div>
                                 <div class="quote-content"> <a href="#">How new financial laws can Drive Innovation</a>
                                    <label>- by John Deo</label>
                                 </div>
                                 <div class="post-details">
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/pacto/images/blog/blog4.jpg')}}" alt="" /> </div>
                                 <div class="post-details">
                                    <span class="categery text-uppercase">LIFESTYLE</span>
                                    <div class="post-date">24<span>NAV 2017</span></div>
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Working from your home?</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/pacto/images/blog/blog2.jpg')}}" alt="" /> </div>
                                 <div class="post-details">
                                    <span class="categery text-uppercase">BUSINESSES</span>
                                    <div class="post-date">20<span>FEB 2017</span></div>
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Time to Tell Our Story</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="post post-over">
                                 <div class="post-image clearfix"> <i class="lnr lnr-picture"></i> <img class="img-responsive" src="{{ asset('templates/pacto/images/blog/blog3.jpg')}}" alt="" /> </div>
                                 <div class="post-details">
                                    <span class="categery text-uppercase">DESIGN</span>
                                    <div class="post-date">27<span>NAV 2017</span></div>
                                    <div class="post-title">
                                       <h3 class="title"><a href="#">Transitions in ux design</a></h3>
                                    </div>
                                    <div class="post-content">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                    </div>
                                    <div class="post-meta"> <a href="#"><i class="fa fa-user"></i> Admin</a> <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>98 Like</a> <a href="#"><i class="fa fa-comments-o"></i>Comments</a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End News --> 
               <!-- Step --> 
               {{-- <section class="grey-bg">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">01.</span>
                              <h3>Make Business Strategy</h3>
                              <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop.</p>
                           </div>
                        </div>
                        <div class="col-sm-4 xs-mb-3">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">02.</span>
                              <h3>Planning</h3>
                              <p>Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="feature-box feature-text1">
                              <span class="step theme-text">03.</span>
                              <h3>Happy Clients</h3>
                              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End Step --> 
               <!-- Customer --> 
               {{-- <section class="pos-r p-0">
                  <div class="fullbg bg-pos-right" data-bg-img="{{ asset('templates/pacto/images/consultant/bg2.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6 py-7 pr-5 xs-py-4 sm-py-5 sm-pr-4 xs-pr-0 xs-big-mt">
                           <div class="heading-block">
                              <h2>Our Valuable Customer Shouts</h2>
                              <span>Limitless possibilities create</span> 
                           </div>
                           <p class="lead">he countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coa</p>
                           <div class="testimonials">
                              <div class="owl-carousel owl-theme c-theme" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="true"  data-space="30">
                                 <div class="item">
                                    <div class="author-description">
                                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                                       <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                       <div class="author-info">
                                          <div class="author-img"><img class="img-responsive" src="{{ asset('templates/pacto/images/testimonials/image1.jpg')}}" alt="" /></div>
                                          <span class="author-name">- John Doe, Company CEO</span> 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="author-description">
                                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                                       <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                       <div class="author-info">
                                          <div class="author-img"><img class="img-responsive" src="{{ asset('templates/pacto/images/testimonials/image1.jpg')}}" alt="" /></div>
                                          <span class="author-name">- John Doe, Company CEO</span> 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="author-description">
                                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                                       <p>The countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river.</p>
                                       <div class="author-info">
                                          <div class="author-img"><img class="img-responsive" src="{{ asset('templates/pacto/images/testimonials/image1.jpg')}}" alt="" /></div>
                                          <span class="author-name">- John Doe, Company CEO</span> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End Customer -->
               <!-- Clients --> 
               {{-- <section class="pos-r p-0">
                  <div class="fullbg bg-left-pos" data-bg-img="{{ asset('templates/pacto/images/consultant/bg3.jpg')}}" ></div>
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-6">
                           <div class="py-7 pl-7 xs-py-4 sm-py-5 sm-pl-5 xs-pl-1 xs-big-mt">
                              <div class="heading-block">
                                 <h2>Our Clients</h2>
                                 <span>Limitless possibilities create</span> 
                              </div>
                              <p  class="lead">Nullam felis sapien, commodo ac posuere non, pretium nec mauris. Ut nibh velit, accumsan at dapibus quis, venenatis ac turpis.</p>
                              <div class="row">
                                 <div class="col-sm-12"><div class="clients line">
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('templates/pacto/images/clients/logo1.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('templates/pacto/images/clients/logo2.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('templates/pacto/images/clients/logo3.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('templates/pacto/images/clients/logo4.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('templates/pacto/images/clients/logo5.png')}}" alt=""></div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xx-12">
                                       <div class="media"><img class="img-responsive" src="{{ asset('templates/pacto/images/clients/logo1.png')}}" alt=""></div>
                                    </div>
                                 </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> --}}
               <!-- End Clients --> 
@endsection()

@section('scripts')
  {{-- expr --}}
@endsection