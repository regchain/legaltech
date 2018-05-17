<?php $__env->startSection('stylesheets'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                  <?php echo $__env->make('layouts.main.menu.sidemenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               </nav>
               <!-- End Navigation -->
               <!-- Banner -->
               <section class="full-height fullscreen bg white-text header-slide">
                  <div class="owl-carousel owl-theme light-arrow" data-items="1" data-md-items="1" data-sm-items="1" data-nav-dots="false" data-nav-arrow="true" data-auto-play="false"  data-space="0">
                     <!-- item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="<?php echo e(asset('templates/pacto/images/consultant/slide1.jpg')); ?>" alt="" /></div>
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
                        <div class="slide-img"><img src="<?php echo e(asset('templates/pacto/images/consultant/slide2.jpg')); ?>" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2 text-center">
                                 <h3 class="title">Simplified Communication</h3>
                                 <div class="slide-content">
                                    <p>A large part of practice management is making sure that queries get answered promptly. Your staff needs constant updates and clarification on matter details. As do your clients.</p>
                                    <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Read More</a>&nbsp;&nbsp; <a href="#" class="btn btn-default btn-radius theme-bg white-text">Purchase Now <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End item -->
                     <!-- item -->
                     <div class="item"  >
                        <div class="slide-img"><img src="<?php echo e(asset('templates/pacto/images/consultant/slide3.jpg')); ?>" alt="" /></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <h3 class="title">Smart Notifications & Reminders</h3>
                                 <div class="slide-content">
                                    <p>Be notified on-time on important events and actions.</p><p> Never again miss a task deliverable or an appointment with our Smart Email or SMS reminders.</p>
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
               
               <!-- End About Us -->
               <!-- Projects -->
               
               <!-- End Projects -->
               <!-- Services --> 
               
               <!-- End Services --> 
               <!-- News --> 
               
               <!-- End News --> 
               <!-- Step --> 
               
               <!-- End Step --> 
               <!-- Customer --> 
               
               <!-- End Customer -->
               <!-- Clients --> 
               
               <!-- End Clients --> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>