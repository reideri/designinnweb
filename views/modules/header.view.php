<header>
	<div class="container">
		<nav>
			<div class="row align-items-center">
				<div class="col-6 col-lg-4">
					<div class="brand">
						<a href="<?php echo $Route; ?>">
							<img src="<?php echo $Route; ?>views/img/logo.png" alt="Logo Designninweb" width="60" class="img-logo">
							<img src="<?php echo $Route; ?>views/img/logo-inverse.png" alt="Logo Designninweb" width="60" class="img-inverse">
						</a>
							<span class="divider">ADVERTISING</span>
					</div>
				</div>

				<div class="col-6 menu-button d-flex justify-content-end">
					<div class="toggle-menu d-flex align-items-center justify-content-center">
						<span class="line-button"></span>
					</div>
				</div>
				<?php 
					$item = null;
					$value = null;
					$sections = SectionController::ctrShowSections($item, $value);
				 ?>
				<div class="col-12 col-lg-8">
					<div class="container">
						<ul>
							<?php foreach ($sections as $section => $option): ?>
								<li><a href="<?php echo $option['route']; ?>"><?php echo $option['section']; ?></a></li>	
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>