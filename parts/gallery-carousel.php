<div class="gallery">

<?php  $images = get_field('gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>

<div class="gallery--slide">
   <img class="img-responsive" src="<?php echo $image['sizes']['gallery-lg']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>