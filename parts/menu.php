<div class="fs-row">

   <div class="fs-cell fs-lg-half fs-md-half fs-sm-full">

      <div id="menu--regular" class="menu text-center">
         <div class="accordion">
         <ul class="accordion-wrapper">

         <li class="accordion-item morning">
         <a href="#home--menu" class="accordion-item__question">Breakfast</a>

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
         <a href="#home--menu" class="accordion-item__question">Sandwiches</a>

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
         <a href="#home--menu" class="accordion-item__question">Bowls & Salads</a>

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
         <a href="#home--menu" class="accordion-item__question">Sides</a>

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

   <div class="fs-cell fs-lg-half fs-md-half fs-sm-full">
      <div id="menu--specials" class="menu text-center bg-color--black  section--small">

         <a href="#" class="accordion-item__question">Specials</a>
         <?php if( have_rows('specials', 6) ): ?>
         <?php while ( have_rows('specials', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

      </div>
   </div>

</div>