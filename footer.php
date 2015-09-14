</div>

<footer id="footer" class="section bg-color--black">
   <div class="fs-row">
      <div class='fs-cell fs-lg-12 fs-md-6 fs-sm-3'>
         <div id="footer--copyright" class="text-center">
            <?php 
               echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
               echo sprintf( __( ' Site By: %1$s.', 'blankslate' ), '<a href="http://wearegiants.com/">WeAreGiants.</a>' ); 
            ?>
         </div>
      </div>
   </div>
</footer>

</div><!--Wrapper-->
<?php wp_footer(); ?>

</body>
</html>
