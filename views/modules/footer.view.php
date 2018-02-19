<footer>
	<section class="navigate">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-3">
					<h3>ACCESO RAPIDO</h3>
					<ul>
						<?php 
							$item = null;
							$value = null;
							$components = SectionController::ctrShowSections($item, $value) 
						?>
						<?php foreach ($components as $component => $page): ?>
							<li><a href="<?php echo $page['route'] ?>"><?php echo $page['section']; ?></a></li>
						<?php endforeach ?>
					</ul>
				</div>

				<div class="col-6 col-lg-3">
					<h3>LOREM IPSUM</h3>
					<ul>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
					</ul>
				</div>

				<div class="col-6 col-lg-3 margin-bottom-none">
					<h3>LOREM IPSUM</h3>
					<ul>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
					</ul>
				</div>

				<div class="col-6 col-lg-3 margin-bottom-none">
					<h3>LOREM IPSUM</h3>
					<ul>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex align-items-center justify-content-center">
					<a href="<?php echo $Route; ?>"><img src="<?php echo $Route; ?>views/img/logo.png" alt="Designninweb"></a>
					<a href="#"><img src="<?php echo $Route; ?>views/img/fb.png" width="30" height="30" alt="Designninweb Facebooks"></a>
				</div>
				<div class="col-12"><p>Copyright &copy; DIW. Todos Los Derechos Reservados</p></div>
				<a href="https://icons8.com" class="credits">Icon pack by Icons8</a>
			</div>
		</div>
	</section>
</footer>