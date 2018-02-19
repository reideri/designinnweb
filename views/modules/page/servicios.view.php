<section class="servicios">
	<h2>Planes</h2>
	<h4>Desde el pequeño al grande</h4>
	<div class="slideshow" id="slide">

		<?php 
		  	$packages = TemplateController::ctrPackages();
	  	?>
		
		<?php foreach ($packages as $package => $pack): ?>
			<div class="options">
			  	<div class="container">
			  		<div class="row">
			  			<div class="col-12">
			  				<h4><?php echo $pack['nombre']; ?></h4>
			  				<h2>$<?php echo number_format($pack['precio']) ?> <small>/yr</small></h2>
			  			</div>
			  			<div class="col-12">
			  				<ul>
			  					<?php 
			  						$JSONpackages = json_decode($pack['caracteristicas'], true);
			  					?>
			  					<?php foreach ($JSONpackages as $JSONpackage => $JSONpack): ?>
			  						<li><?php echo $JSONpack['uno']; ?></li>
			  						<li><?php echo $JSONpack['dos']; ?></li>
			  						<li><?php echo $JSONpack['tres']; ?></li>
			  						<li><?php echo $JSONpack['cuatro']; ?></li>
			  					<?php endforeach ?>
			  					
			  				</ul>
			  			</div>
			  			<div class="col-12">
			  				<a href="#" class="btn btn-outline-gray">GET STARTED</a>
			  			</div>
			  		</div>
			  	</div>
		    </div>
		<?php endforeach ?>

	</div>

	</div>
</section>