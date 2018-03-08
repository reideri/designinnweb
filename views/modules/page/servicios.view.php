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
			  				<?php if ($pack['precio'] == 0): ?>
			  					<h2>COTIZAR</h2>
			  				<?php else: ?>
			  					<h2>$<?php echo number_format($pack['precio']) ?> <small>/yr</small></h2>
			  				<?php endif ?>
			  			</div>
			  			<div class="col-12">
			  				<ul>
			  					<?php 
			  						$JSONpack = $pack['caracteristicas'];
			  						$JSONpack = json_decode($JSONpack, true);
			  					?>
			  						<li><?php echo $JSONpack[0]; ?></li>
			  						<li><?php echo $JSONpack[1]; ?></li>
			  						<li><?php echo $JSONpack[2]; ?></li>
			  						<li><?php echo $JSONpack[3]; ?></li>			  					
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