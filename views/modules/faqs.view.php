<?php $faqsIzq = SectionController::ctrShowFaqs(1); ?>
<?php $faqsCen = SectionController::ctrShowFaqs(2); ?>
<?php $faqsDer = SectionController::ctrShowFaqs(3); ?>
<section class="faqs animated fadeIn">
	<div class="container">
		<h2>PREGUNTAS FRECUENTES</h2>
		<div class="row">
			<div class="col-12 col-lg-4">
				<?php foreach ($faqsIzq as $faqIzq => $faqI): ?>
					<div class="question d-flex justify-content-center">
						<div class="box">
							<span class="faqs-box"></span>
						</div>
						<div class="question-box">
							<?php echo $faqI['pregunta']; ?>
						</div>

						<div class="answer">
							<?php echo $faqI['respuesta']; ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>

			<div class="col-12 col-lg-4">
				<?php foreach ($faqsCen as $faqCen => $faqC): ?>
					<div class="question d-flex justify-content-center">
						<div class="box">
							<span class="faqs-box"></span>
						</div>
						<div class="question-box">
							<?php echo $faqC['pregunta']; ?>
						</div>

						<div class="answer">
							<?php echo $faqC['respuesta']; ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>


			<div class="col-12 col-lg-4 margin-bottom-none">
				<?php foreach ($faqsDer as $faqDer => $faqD): ?>
					<div class="question d-flex justify-content-center">
						<div class="box">
							<span class="faqs-box"></span>
						</div>
						<div class="question-box">
							<?php echo $faqD['pregunta']; ?>
						</div>

						<div class="answer">
							<?php echo $faqD['respuesta']; ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>

		</div>
	</div>
</section>