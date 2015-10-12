<div class="gallery carousel  equal-child">
<?php 
	if ($gallery) {
		$images = $gallery;
	} else {
		$images = get_field('main_gallery'); 
	}
?>
<?php if( $images ): foreach( $images as $image ): ?>

<div class="gallery--slide">
   <img class="img-responsive" src="<?php echo $image['sizes']['gallery-lg']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>