<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<div id="home--notification" class="notification">
   <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
         <div id="home--notification_content" class="notification--content">
            <div class="wrapper">
               Hey Girl
            </div>
         </div>
      </div>
   </div>
</div>

<div id="home">
   <div id="home--intro" class="section section--notop">
      <div class="fs-row">
         <div class="fs-cell fs-all-full">
            <?php include locate_template('parts/gallery-carousel.php' ); ?>
            <hr class="invisible">
         </div>
         <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-centered">
            <div id="home--copy" class="text-center">
               <?php the_post(); the_content(); ?>
            </div>
         </div>
      </div>
   </div>
   <div id="home--menu" class="section bg-color--grey">
      <div class="fs-row">
         <div class="fs-cell fs-all-full">
            <header><h4 class="title text-center">Menu</h4></header>
         </div>
         <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <?php include locate_template('parts/menu.php' );?>
         </div>
      </div>
   </div>
   <div id="home--store" class="section">
      <div class="fs-row">
         <div class="fs-cell fs-all-full">
            <header><h4 class="title text-center">Store</h4></header>
         </div>
      </div>
   </div>
   <div id="home--events" class="section">
      <div class="fs-row">
         <div class="fs-cell fs-all-full">
            <header><h4 class="title text-center">Events</h4></header>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>