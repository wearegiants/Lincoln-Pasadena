<div class="gallery">

<?php  $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>

<?php 
   $size = 'large';
   $thumb = $image['sizes'][ $size ];
   $width = $image['sizes'][ $size . '-width' ];
   $height = $image['sizes'][ $size . '-height' ];
   if ( $height > $width) {

   $orient = 'tall';

   } else {

   $orient = 'medium';

   }
?>


<?php if(!$image['caption']): ?>

<div class="gallery--list_item fs-cell fs-all-half fs-contained">
   <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox lightbox_image gallery--zoom" data-lightbox-gallery="gallery">
      <span class="gallery--list_item_bg background <?php echo $orient; ?>" data-background-options='{"source":{"0px":"<?php echo $image['sizes']['medium']; ?>","980px":"<?php echo $image['sizes']['large']; ?>"}}'></span>
   </a>
</div>

<?php else: ?>

<div class="gallery--list_item-wrapper fs-cell fs-all-full fs-contained">

<div class="gallery--list_item fs-cell fs-all-half fs-contained">
   <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox lightbox_image gallery--zoom" data-lightbox-gallery="gallery">
      <span class="gallery--list_item_bg background <?php echo $orient; ?>" data-background-options='{"source":{"0px":"<?php echo $image['sizes']['medium']; ?>","980px":"<?php echo $image['sizes']['large']; ?>"}}'></span>
   </a>
</div>

<div class="gallery--list_item description fs-cell fs-all-half fs-contained">
   <div class="wrapper text-center">
      <?php echo $image['title']; ?>
      <?php echo $image['caption']; ?>
   </div>
   <span class="gallery--list_item_bg <?php echo $orient; ?>"></span>
</div>

</div>

<?php endif; ?>

<?php endforeach; ?>
<?php endif; ?>

</div>
<hr class="invisible">