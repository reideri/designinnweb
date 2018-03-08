<?php $services = TemplateController::ctrHosting(); ?>

<section class="services">
	<h2>CONOCE NUESTROS PLANES DE HOSTING</h2>
	<div class="container">
		<div class="row">
			<?php foreach ($services as $service => $host): ?>
				<div class="col-12 col-lg-4">
					<article class="service">
						<h3><?php echo $host['nombre']; ?></h3>
						<span class="price"><?php echo $host['precio'] ?> <small>(Anual)</small></span>
						<div class="feacture">
							<?php $opciones = json_decode($host['caracteristicas'], true); ?>
								<p><?php echo $opciones[0]; ?></p>
								<p><?php echo $opciones[1]; ?></p>
								<p><?php echo $opciones[2]; ?></p>
								<p><?php echo $opciones[3]; ?></p>
						</div>
						<a href="#" class="btn btn-outline-white">DETAILS</a>
					</article>
				</div>			
			<?php endforeach ?>
		</div>
	</div>
</section>