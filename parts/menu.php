<div class="fs-row">

   <div class="fs-cell fs-lg-half fs-md-half fs-sm-full">

      <div id="menu--regular" class="menu text-center">

         <h4>Breakfast</h4>

         <?php if( have_rows('breakfast', 6) ): ?>
         <?php while ( have_rows('breakfast', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

         <hr class="divider">
         <h4>Sandwiches</h4>

         <?php if( have_rows('sandwiches', 6) ): ?>
         <?php while ( have_rows('sandwiches', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

         <hr class="divider">
         <h4>Bowls & Salads</h4>

         <?php if( have_rows('bowls_salads', 6) ): ?>
         <?php while ( have_rows('bowls_salads', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

         <hr class="divider">
         <h4>Sides</h4>

         <?php if( have_rows('sides', 6) ): ?>
         <?php while ( have_rows('sides', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

      </div>
   </div>

   <div class="fs-cell fs-lg-half fs-md-half fs-sm-full">
      <div id="menu--specials" class="menu text-center bg-color--black  section--small">

         <h4>Specials</h4>
         <?php if( have_rows('specials', 6) ): ?>
         <?php while ( have_rows('specials', 6) ) : the_row(); ?>
         <?php include locate_template('parts/menu-item.php');?>
         <?php endwhile; ?>
         <?php endif; ?>

      </div>
   </div>

</div>