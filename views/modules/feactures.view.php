<?php $feactures = SectionController::ctrShowInfo('feactures'); ?>
<?php $feactures = $feactures[0]; ?>

<section class="feactures">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="feacture height-100">
					<h2><?php echo $feactures['titulo']; ?></h2>
					<span><?php echo $feactures['subtitulo']; ?></span>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="feacture">
					<img src="<?php echo $Route; ?>views/img/management.png">
					<?php 

						$feacture = $feactures['feacture'];
						$feacture = json_decode($feacture, true);
						// $feacture = $feacture[0];

					 ?>
					<p><?php echo $feacture[0]; ?></p>
				</div>

				<div class="feacture">
					<img src="<?php echo $Route; ?>views/img/secure.png">
					<p><?php echo $feacture[1]; ?></p>
				</div>

				<div class="feacture">
					<img src="<?php echo $Route; ?>views/img/migrate.png">
					<p><?php echo $feacture[2]; ?></p>
				</div>
			</div>
			<div class="col-12 col-lg-4 d-none d-lg-block">
				<div class="feacture">
					<img src="<?php echo $Route; ?>views/img/speed.png">
					<p><?php echo $feacture[3]; ?></p>
				</div>

				<div class="feacture">
					<img src="<?php echo $Route; ?>views/img/backups.png">
					<p><?php echo $feacture[4]; ?></p>
				</div>

				<div class="feacture">
					<img src="<?php echo $Route; ?>views/img/server.png">
					<p><?php echo $feacture[5]; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>