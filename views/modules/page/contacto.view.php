<section class="header-caracteristicas">
	<div class="header-caracteristica">
		<?php $Route = RouteModel::Route(); ?>
		<img src="<?php echo $Route; ?>views/img/slider/bgContact.png">

		<div class="description">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2>Contacto</h2>
						<p>¡Hablemos de tu Sitio Web o tus Proyectos! Envianos un Mail a traves de nuestro formulario de contacto y nuestros asesores te responderán.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contactForm">
	<div class="container">
		<form action="<?php echo $Route.'contacto'; ?>" method="post" name="contactForm">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<label for="">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="inputs">
					</div>
					<div class="col-12 col-md-4">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" id="inputs">
					</div>

					<div class="col-12 col-md-4">
						<label for="" class="t300">Website (opcional)</label>
						<input type="text" class="form-control" name="website" id="inputs">
					</div>
					<div class="col-12 col-md-6">
						<label for="">Compañia</label>
						<input type="text" class="form-control" name="company" id="inputs">
					</div>
					<div class="col-12 col-md-6">
						<label for="">Telefono</label>
						<input type="text" class="form-control" name="telefono" id="inputs">
					</div>
					<div class="col-12">
						<label for="">Mensaje</label>
						<textarea name="" class="form-control" name="mensaje" id="inputs"></textarea>
					</div>
					<button class="btn btn-primary" id="submit" disabled="">ENVIAR MENSAJE</button>
				</div>
			</div>
		</form>
	</div>
</section>