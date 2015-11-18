<?php if(!get_field('display_menu')): ?>
<div class="text-center">
<a href="<?php the_field('menu_file',6); ?>" download class="btn btn-primary ss-gizmo ss-file"><?php the_field('menu_label',6); ?></a>
<hr class="invisible compact">
</div>
<?php endif; ?>

<div class="fs-row equal-parent">

   <div class="fs-cell fs-lg-5 fs-md-half fs-sm-full equal-child">

      <div id="menu--regular" class="menu text-center">
         <div class="accordion">
         <ul class="accordion-wrapper">

         <li class="accordion-item morning">
         <a href="#home--menu" class="accordion-item__question ss-gizmo ss-navigatedown right">Breakfast</a>

         <?php if( have_rows('breakfast', 6) ): ?>
         <div id="menu-breakfast" class="accordion-item__answer">
         <?php while ( have_rows('breakfast', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         </div>
         <?php endif; ?>

         <hr class="divider">
         </li>

         <li class="accordion-item afternoon">
         <a href="#home--menu" class="accordion-item__question ss-gizmo ss-navigatedown right">Sandwiches</a>

         <?php if( have_rows('sandwiches', 6) ): ?>
         <div id="menu--sandwiches" class="accordion-item__answer">
         <?php while ( have_rows('sandwiches', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         </div>
         <?php endif; ?>

         <hr class="divider">
         </li>

         <li class="accordion-item afternoon">
         <a href="#home--menu" class="accordion-item__question ss-gizmo ss-navigatedown right">Bowls & Salads</a>

         <?php if( have_rows('bowls_salads', 6) ): ?>
         <div id="menu--salads" class="accordion-item__answer">
         <?php while ( have_rows('bowls_salads', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         </div>
         <?php endif; ?>

         <hr class="divider">
         </li>

         <li class="accordion-item afternoon">
         <a href="#home--menu" class="accordion-item__question ss-gizmo ss-navigatedown right">Sides</a>

         <?php if( have_rows('sides', 6) ): ?>
         <div id="menu--sides" class="accordion-item__answer">
         <?php while ( have_rows('sides', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         </div>
         <?php endif; ?>

         </li>

         </ul>
         </div>
      </div>
   </div>

   <div class="fs-cell fs-lg-2 fs-md-hide fs-sm-hide">
      <div class="arrow-head"></div>
      <div class="arrow-body equal-child"></div>
      <div class="arrow-tail"></div>
   </div>

   <div class="fs-cell fs-lg-5 fs-md-half fs-sm-full fs-right">
      <div id="menu--specials" class="menu text-center bg-color--black  section--small  equal-child">

         <a href="#" class="accordion-item__question ss-gizmo ss-navigatedown right">Specials</a>
         <?php if( have_rows('specials', 6) ): ?>
         <?php while ( have_rows('specials', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

      </div>
   </div>

</div>