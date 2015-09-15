</div>

<footer id="footer" class="section bg-color--black">
   <div class="fs-row">
      <div class='fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-centered'>
         <div id="footer--contact" class="text-center">
            <div class="fs-row">
               <div class="fs-cell fs-all-full"><?php the_field('contact_intro', 14); ?></div>
               <hr  class="fs-cell fs-all-full fs-md-hide fs-sm-hide invisible">
               <hr  class="fs-cell fs-lg-hide fs-md-full fs-sm-full divider">
               <div class="fs-cell fs-lg-5 fs-md-full fs-sm-3"><?php the_field('general_hours', 14); ?></div>
               <hr  class="fs-cell fs-lg-hide fs-md-full fs-sm-full divider">
               <div class="fs-cell fs-lg-2 fs-md-hide fs-sm-hide">&nbsp;</div>
               <div class="fs-cell fs-lg-5 fs-md-full fs-sm-3"><?php the_field('contact_info', 14); ?></div>
               <hr  class="fs-cell fs-all-full fs-md-hide fs-sm-hide invisible">
               <hr  class="fs-cell fs-lg-hide fs-md-full fs-sm-full divider">
               <div class="fs-cell fs-lg-5 fs-md-full fs-sm-3 fs-centered"><?php the_field('address', 14); ?></div>
            </div>
         </div>
         <div id="footer--copyright" class="text-center">
            <hr class="divider">
            <?php 
               echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
               echo sprintf( __( ' Site By: %1$s', 'blankslate' ), '<a href="http://wearegiants.com/">WeAreGiants.</a>' ); 
            ?>
         </div>
      </div>
   </div>
</footer>

</div><!--Wrapper-->
<?php wp_footer(); ?>

</body>
</html>
