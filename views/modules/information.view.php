<?php $works = SectionController::ctrShowInfo('works'); ?>
<?php $work = $works[0]; ?>
<section class="information">
	<h2><?php echo $work['titulo']; ?></h2>
	<h3><?php echo $work['subtitulo']; ?></h3>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4">
				<img src="<?php echo $Route; ?>views/img/relax.png">
				<h3>Inspiracion de diseño</h3>
				<p><?php echo $work['first']; ?></p>
			</div>

			<div class="col-12 col-lg-4">
				<img src="<?php echo $Route; ?>views/img/care.png">
				<h3>Soporte y Cuidado</h3>
				<p><?php echo $work['second']; ?></p>
			</div>

			<div class="col-12 col-lg-4">
				<img src="<?php echo $Route; ?>views/img/powerful.png">
				<h3>Interfaz Amigable y Potente</h3>
				<p><?php echo $work['first']; ?></p>
			</div>
		</div>
	</div>
</section>