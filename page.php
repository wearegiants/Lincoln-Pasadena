<?php Themewrangler::setup_page();get_header(); ?>

<div id="page" class="section bg-color--gray">
   
   <header>
      <div class="fs-row">
         <div class="fs-cell fs-all-full text-center">
            <h1><?php the_title(); ?></h1>
         </div>
      </div>
   </header>

   <div id="page--content" class="content">
      <div class="fs-row">

         <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-centered">
            <div id="page--intro" class="text-center">
               <?php the_post(); the_content(); ?>
            </div>
         </div>

         <hr class="invisible">

         <?php if(is_page('menu')): ?>
         <?php include locate_template('parts/menu.php' );?>
         <hr class="invisible">
         <?php endif; ?>

         <?php if(get_field('gallery')): ?>
         <div class="fs-cell fs-all-full">
            <div id="page--gallery" class="gallery text-center">
               <?php include locate_template('parts/gallery-list.php' ); ?>
            </div>
         </div>
         <hr class="invisible">
         <?php endif; ?>

         <?php if(get_field('page_outro')): ?>
         <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-centered">
            <div id="page--outro" class="text-center">
                <?php the_field('page_outro');?>
            </div>
         </div>
         <hr class="invisible">
         <?php endif; ?>

      </div>
   </div>

</div>

<?php get_footer(); ?>