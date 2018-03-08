<?php $moreAboutUs = SectionController::ctrShowInfo('more'); ?>
<?php $us = $moreAboutUs[0]; ?>
<section class="more-about">
	<div class="container">
		<h2>MAS DE NOSOTROS</h2>
		<div class="row">
			<div class="col-12 col-lg-4">
				<img src="<?php echo $Route; ?>views/img/protect.png">
				<h3>PAGINAS VERIFICADAS</h3>
				<p><?php echo $us['descripcion1']; ?></p>
			</div>

			<div class="col-12 col-lg-4">
				<img src="<?php echo $Route; ?>views/img/database.png">
				<h3>SEGURIDAD DE DATOS</h3>
				<p><?php echo $us['descripcion2']; ?></p>
			</div>

			<div class="col-12 col-lg-4 margin-bottom-none">
				<img src="<?php echo $Route; ?>views/img/support.png">
				<h3>SOPORTE</h3>
				<p><?php echo $us['descripcion3']; ?></p>
			</div>
		</div>
	</div>
</section>