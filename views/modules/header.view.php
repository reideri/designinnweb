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
					<div class="toggle-menu d-flex align-items-center justify-content-center" id="toggle-menu">
						<span class="line-button"></span>
					</div>
				</div>
				<div class="col-12 col-lg-8" id="menu-links">
					<div class="container">
						<ul>
							<?php 
								$item = null;
								$value = null;
								$sections = SectionController::ctrShowSections($item, $value); 
							?>
							<?php foreach ($sections as $section => $li): ?>
								<?php if ($li['section'] == 'NONE'): ?>
									<?php continue; ?>
								<?php endif ?>
								<li><a href="<?php echo $li['route']; ?>"><?php echo $li['section']; ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>