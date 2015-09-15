<div class="gallery">

<?php  $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>

<div class="gallery--listitem fs-cell fs-all-half fs-contained">
   <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox lightbox_image gallery--zoom" data-lightbox-gallery="gallery">
      <?php if ( wp_is_mobile() ): ?>
      <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php else: ?>
      <img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
   </a>
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>
<hr class="invisible">