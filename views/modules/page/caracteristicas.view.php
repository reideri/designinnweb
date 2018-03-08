<section class="header-caracteristicas">
	<div class="header-caracteristica">
		<?php $Route = RouteModel::Route(); ?>
		<img src="<?php echo $Route; ?>views/img/slider/bgFeactures.png">

		<div class="description">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2>Caracteristicas</h2>
						<p>Llevamos al rededor de 10 años de experiencia trabajando con tecnologias de gran magnitud. Nos hemos capacitado para saber el como crear el mejor servicio de Dominio y Hosting de hoy.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $caracteristicas = SectionController::ctrShowInfo('caracteristicas'); ?>
<?php $caracteristica = $caracteristicas[0]; ?>

<section class="description-caracteristics">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-10 col-md-6 offset-1 offset-md-0">
				<div class="about-this left-5">
					<img src="<?php echo $Route; ?>views/img/commet.png" alt="">

					<div class="container">
						<h2>Velocidad de arquitectura</h2>
						<p><?php echo $caracteristica['velocidad']; ?></p>

						<div class="row">
							<div class="col-12 col-md-6">
								<ul>
									<li>
										<span class="ti-check"></span>Nginx
									</li>
									<li>
										<span class="ti-check"></span>Bootstrap
									</li>
								</ul>
							</div>

							<div class="col-12 col-md-6">
								<ul>
									<li>
										<span class="ti-check"></span>PHP 7
									</li>
									<li>
										<span class="ti-check"></span>MariaDB
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-10 col-md-6 offset-1 offset-md-0">
				<div class="about-this right-5">
					<img src="<?php echo $Route; ?>views/img/security.png" alt="">

					<div class="container">
						<h2>Alta Seguridad de Conexión</h2>
						<p><?php echo $caracteristica['seguridad']; ?></p>

						<div class="row">
							<div class="col-12 col-md-6">
								<ul>
									<li>
										<span class="ti-check"></span>DDoS
									</li>
									<li>
										<span class="ti-check"></span>Firewalls
									</li>
								</ul>
							</div>

							<div class="col-12 col-md-6">
								<ul>
									<li>
										<span class="ti-check"></span>Monitoreo
									</li>
									<li>
										<span class="ti-check"></span>Soporte SSL
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>

		<div class="row">
			<div class="col-10 col-md-4 offset-1 offset-md-0">
				<div class="more-caracteristics">
					<img src="<?php echo $Route; ?>views/img/infraestructure.png" alt="">

					<div class="container">
						<h2>Nuevas Tecnologias</h2>
						<p><?php echo $caracteristica['tecnologias']; ?></p>
					</div>
				</div>
			</div>

			<div class="col-10 col-md-4 offset-1 offset-md-0">
				<div class="more-caracteristics mr-15">
					<img src="<?php echo $Route; ?>views/img/storage.png" alt="">

					<div class="container">
						<h2>Potente Almacenamiento</h2>
						<p><?php echo $caracteristica['almacenamiento']; ?></p>
					</div>
				</div>
			</div>


			<div class="col-10 col-md-4 offset-1 offset-md-0">
				<div class="more-caracteristics mr-15">
					<img src="<?php echo $Route; ?>views/img/migration.png" alt="">

					<div class="container">
						<h2>Migración de Versiones</h2>
						<p><?php echo $caracteristica['migracion']; ?></p>
					</div>
				</div>
			</div>
		</div>


	</div>
</section>