<?php
/**
 * Template Name: Infrastruktura Template
 *
 * @package Teatrbarakah
 */
$fields = get_fields(get_the_ID());
get_header(); ?>

	<section class="infrastr-section">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<?php if ($fields['title_section']) : ?>
					<div class="cell small-12">
						<h1 class="infrastr-section__title default-title">
							<?= $fields['title_section']; ?>
						</h1>
					</div>
					<!-- /.cell small-12 -->
				<?php endif; ?>
				<?php if (is_array($fields['blocks_text_image']) && isset($fields['blocks_text_image'])) : ?>
						<?php foreach ($fields['blocks_text_image'] as $item) :
							$border = '';
							if ($item['border'] === 'bottom') {
								$border = 'border-bottom';
							} elseif ($item['border'] === 'top') {
								$border = 'border-top';
							}
							?>
							<?php if ($item['image_left']) : ?>
							<div class="cell small-12 medium-12 large-6 desk">
								<?php if ($item['image']) : ?>
									<div class="infrastr-section__img yellow-block-pos image-left">
										<img src="<?= $item['image']['url'] ?>"
											 alt="<?= $item['image']['alt'] ? $item['image']['alt'] : ''; ?>">
									</div>
									<!-- /.infrastr-section__img -->
								<?php endif; ?>
							</div>
							<!-- /.cell small-12 medium-12 large-6 -->
							<div class="cell small-12 medium-12 large-6 desk">
								<?php if ($item['text']) : ?>
									<div class="infrastr-section__text text-right-pos
									<?= $border; ?>">
										<div class="block">
											<?= $item['text'] ?>
										</div>
									</div>
									<!-- /.infrastr-text -->
								<?php endif; ?>
							</div>
							<!-- /.cell small-12 medium-12 large-6 -->
						<?php else : ?>

							<div class="cell small-12 medium-12 large-6 desk">
								<?php if ($item['text']) : ?>
									<div class="infrastr-section__text text-left-pos <?= $border; ?>">
										<div class="block">
											<?= $item['text'] ?>
										</div>
									</div>
									<!-- /.infrastr-text -->
								<?php endif; ?>
							</div>
							<!-- /.cell small-12 medium-12 large-6 -->
							<div class="cell small-12 medium-12 large-6 desk">
								<?php if ($item['image']) : ?>
									<div class="infrastr-section__img yellow-block-pos image-right">
										<img src="<?= $item['image']['url'] ?>"
											 alt="<?= $item['image']['alt'] ? $item['image']['alt'] : ''; ?>">
									</div>
									<!-- /.infrastr-section__img -->
								<?php endif; ?>
							</div>
							<!-- /.cell small-12 medium-12 large-6 -->
						<?php endif; ?>
						<?php endforeach; ?>


						<?php foreach ($fields['blocks_text_image'] as $item) :?>
							<div class="cell small-12 medium-12 large-6 mob">
								<?php if ($item['text']) : ?>
									<div class="infrastr-section__text text-left-pos">
										<div class="block">
											<?= $item['text'] ?>
										</div>
									</div>
									<!-- /.infrastr-text -->
								<?php endif; ?>
							</div>
							<!-- /.cell small-12 medium-12 large-6 -->
							<div class="cell small-12 medium-12 large-6 mob">
								<?php if ($item['image']) : ?>
									<div class="infrastr-section__img yellow-block-pos image-right">
										<img src="<?= $item['image']['url'] ?>"
											 alt="<?= $item['image']['alt'] ? $item['image']['alt'] : ''; ?>">
									</div>
									<!-- /.infrastr-section__img -->
								<?php endif; ?>
							</div>
							<!-- /.cell small-12 medium-12 large-6 -->
						<?php endforeach; ?>

				<?php endif; ?>
			</div>
			<!-- /.grid-x grid-padding-x -->
		</div>
		<!-- /.grid-container -->
	</section>
	<!-- /.infrastr-section -->

<?php

get_footer();
