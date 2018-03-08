<?php $Slider = SectionController::ctrShowInfo('slider'); ?>
<?php $Slider = $Slider[0]; ?>
<div class="slider animated fadeIn">
	<img src="<?php echo $Route; ?>/views/img/slider/bgSlider.png" class="img-slider-bg">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 slider-description">
				<h2><?php echo $Slider['titulo']; ?></h2>
				<p><?php echo $Slider['descripcion']; ?> </p>
				<br>
				<a href="<?php echo $Slider['url']; ?>" class="btn btn-outline-white">VER MAS</a>
			</div>
			<div class="col-12 col-lg-6 slider-image">
				<img src="<?php echo $Route; ?>/views/img/slider/smartphone.png">
			</div>
		</div>
	</div>
</div>