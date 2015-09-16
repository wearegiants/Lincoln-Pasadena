<div class="gallery">

<?php  $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>

<?php 
   $size = 'large';
   $thumb = $image['sizes'][ $size ];
   $width = $image['sizes'][ $size . '-width' ];
   $height = $image['sizes'][ $size . '-height' ];
?>


<?php if(!$image['caption']): ?>

<div class="gallery--list_item fs-cell fs-all-half fs-contained">
   <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox lightbox_image gallery--zoom" data-lightbox-gallery="gallery">
      <?php if ( wp_is_mobile() ): ?>
      <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php else: ?>
      <img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
   </a>
</div>

<?php else: ?>

<div class="gallery--list_item-wrapper fs-cell fs-all-full fs-contained">

<div class="gallery--list_item fs-cell fs-all-half fs-contained">
   <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox lightbox_image gallery--zoom" data-lightbox-gallery="gallery">
      <?php if ( wp_is_mobile() ): ?>
      <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php else: ?>
      <img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
   </a>
</div>

<div class="gallery--list_item description fs-cell fs-all-half fs-contained">
   <div class="wrapper text-center">
      <?php echo $image['title']; ?>
      <?php echo $image['caption']; ?>
   </div>
   <img src="http://placehold.it/<?php echo $width; ?>x<?php echo $height; ?>/fff/fff" height="<?php echo $height; ?>" width="<?php echo $width; ?>" alt='pixel' class="img-responsive" />
</div>

</div>

<?php endif; ?>

<?php endforeach; ?>
<?php endif; ?>

</div>
<hr class="invisible">