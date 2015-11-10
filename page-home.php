<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php if(get_field('enable_notification')): ?>
<div id="home--notification" class="notification">
   <div class="notification_centered">
      <div class="fs-row">
         <div class="fs-cell fs-lg-9 fs-md-5 fs-sm-3 fs-centered">
            <hr class="invisible">
            <div id="home--notification_content" class="notification--content">
               <a href="#" class="notification--close ss-gizmo ss-delete"></a>
               <div class="fs-cell fs-all-full fs-md-hide fs-sm-hide fs-contained"><img src="<?php the_field('popup_image'); ?>" class="img-responsive" /></div>
               <div class="fs-cell fs-lg-hide fs-md-full fs-sm-3 fs-contained"><img src="<?php the_field('popup_image_mobile'); ?>" class="img-responsive" /></div>
               <?php if(get_field('pop_up_content')): ?>
               <div class="wrapper bg-color--beige"><?php the_field('pop_up_content'); ?></div>
               <?php endif; ?>
            </div>
            <hr class="invisible">
         </div>
      </div>
   </div>
</div>
<?php endif; ?>

<div id="home">
   <div id="home--intro" class="section section--notop">
      <div class="fs-row">
         <div class="fs-cell fs-all-full fs-contained gallery-wrapper equal-parent">
            <div class="fs-cell fs-lg-1 fs-md-hide fs-sm-hide gallery--menu_wrapper fs-padded equal-child">
               <div class="gallery--menu">
                  <a href="#" class="gallery--menu_next gallery--menu_btn"><img src="/assets/img/arrow-up.svg" class="img-responsive" /></a>
                  <a href="#" class="gallery--menu_prev gallery--menu_btn"><img src="/assets/img/arrow-down.svg" class="img-responsive" /></a>
               </div>
            </div>
            <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
               <?php $randoClass =' main '; include locate_template('parts/gallery-carousel.php' ); ?>
            </div>
         </div>
         <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-centered">
            <div id="home--copy" class="text-center">
               <hr class="invisible">
               <?php the_post(); the_content(); ?>
            </div>
         </div>
      </div>
   </div>
   <div id="home--menu" class="section bg-color--beige">
      <img src="/assets/img/icon-1.svg" class="section-icon">
      <div class="fs-row">
         <div class="fs-cell fs-all-full">
            <header><h4 class="title text-center">Menu</h4></header>
         </div>
         <div class="fs-cell fs-lg-9 fs-md-6 fs-sm-3 fs-centered">
            <?php include locate_template('parts/menu.php' );?>
         </div>
      </div>
   </div>

   <div id="home--store" class="section">
      <img src="/assets/img/icon-2.svg" class="section-icon">
      <div class="fs-row">


         <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <header><h4 class="title text-center">Store</h4></header>
            <div class="fs-cell fs-lg-8 fs-lg-push-2 fs-md-4 fs-md-push-1 fs-sm-3 fs-contained">
               <div id="home--copy" class="text-center">
                  <?php the_field('store_teaser'); ?>
                  <hr class="invisible">
               </div>
            </div>
             <div class="gallery-wrapped">
               <div class="fs-cell fs-lg-1 fs-md-hide fs-sm-hide gallery--menu_wrapper fs-padded equal-child">
                  <div class="gallery--menu">
                     <a href="#" class="gallery--menu_next gallery--menu_btn"><img src="/assets/img/arrow-up.svg" class="img-responsive" /></a>
                     <a href="#" class="gallery--menu_prev gallery--menu_btn"><img src="/assets/img/arrow-down.svg" class="img-responsive" /></a>
                  </div>
               </div>
               <?php $randoClass =' notmain '; $gallery = get_field('store_gallery'); include locate_template('parts/gallery-carousel.php' ); ?>
            </div>
         </div>

      </div>
   </div>

   <div id="home--events" class="section  bg-color--beige">
      <img src="/assets/img/icon-3.svg" class="section-icon">
      <div class="fs-row">
         <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <header><h4 class="title text-center">Events</h4></header>
            <div class="fs-cell fs-lg-8 fs-lg-push-2 fs-md-4 fs-md-push-1 fs-sm-3 fs-contained">
               <div id="home--copy" class="text-center">
                  <?php the_field('events_teaser'); ?>
                  <hr class="invisible">
               </div>
            </div>
            <div class="gallery-wrapped">
               <div class="fs-cell fs-lg-1 fs-md-hide fs-sm-hide gallery--menu_wrapper fs-padded equal-child">
                  <div class="gallery--menu">
                     <a href="#" class="gallery--menu_next gallery--menu_btn"><img src="/assets/img/arrow-up.svg" class="img-responsive" /></a>
                     <a href="#" class="gallery--menu_prev gallery--menu_btn"><img src="/assets/img/arrow-down.svg" class="img-responsive" /></a>
                  </div>
               </div>
               <?php $gallery = get_field('events_gallery'); include locate_template('parts/gallery-carousel.php' ); ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>