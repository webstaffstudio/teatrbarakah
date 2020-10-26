<?php
/**
 * Template Name: Dyrekcja Template
 * @package Teatrbarakah
 */
$fields = get_fields(get_the_ID());
get_header(); ?>

	<section class="section-dir"
		<?= $fields['background_image_section'] ? 'style="background-image:url(' . $fields['background_image_section']['url'] . ')"' : ''; ?>>
		<div class="section-dir__content">
			<div class="grid-container">
				<div class="grid-padding-x grid-x">
					<div class="cell small-12">
						<?php if ($fields['title_section']) : ?>
							<h1 class="section-dir__content--title default-title">
								<?= $fields['title_section']; ?>
							</h1>
							<!-- /.section-dir__content--title -->
						<?php endif; ?>
					</div>
					<!-- /.cell small-12 -->

					<?php if (is_array($fields['list_dyrekcja']) && isset($fields['list_dyrekcja'])) : ?>
						<?php
					$i = 1;
						foreach ($fields['list_dyrekcja'] as $item) : ?>
							<div class="cell small-12 medium-6 <?= ($i % 2) != 0 ? 'left-block' : 'right-block'; ?> <?= $item['use_border_bottom'] ? 'use-border' : ''; ?>">
								<div class="section-dir__item">
									<?php if ($item['photo']) : ?>
										<div class="section-dir__item--image yellow-block-pos <?= ($i % 2) != 0 ? 'left-yellow-block' : ''; ?>">
											<img src="<?= $item['photo']['url'] ?>"
												 alt="<?= $item['photo']['alt'] ? $item['photo']['alt'] : ''; ?>">
										</div>
										<!-- /.section-dir__item--image -->
									<?php endif; ?>
									<?php if ($item['text']) : ?>
										<div class="section-dir__item--text">
											<?= $item['text']; ?>
										</div>
									<?php endif; ?>
								</div>
								<!-- /.section-dir__item -->
							</div>
							<!-- /.cell small-12 medium-6 -->
						<?php
							$i++;
						endforeach; ?>

					<?php endif; ?>
				</div>
				<!-- /.grid-padding-x grid-x -->
			</div>
			<!-- /.grid-container -->
		</div>
		<!-- /.section-dir__content -->

	</section>
	<!-- /.dir -->

<?php
get_footer();
