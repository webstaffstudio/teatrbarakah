<?php
/**
 * Template Name: Fundacja Template
 *
 * @package Teatrbarakah
 */
$fields = get_fields(get_the_ID());
get_header(); ?>

	<section class="section-fundacja">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<?php if ($fields['title_section']) : ?>
					<div class="cell small-12" >
						<h1 class="section-fundacja__title default-title">
							<?= $fields['title_section']; ?>
						</h1>
						<!-- /.section-fundacja__title default-title -->
					</div>
					<!-- /.cell small-12 -->
				<?php endif; ?>
				<?php if (is_array($fields['blocks_text']) && isset($fields['blocks_text'])) : ?>
					<?php
					$iter = 1;
					foreach ($fields['blocks_text'] as $item) : ?>
						<div class="cell small-12 medium-12 large-6">
							<div class="section-fundacja__item <?= $item['background_image'] ? ' has-image ' : ''; ?><?= ($iter % 2) != 0 ? 'left-block' : 'right-block'; ?>
								<?= $item['add_border_bottom'] ? 'border-bot' : '' ?>"
								<?= $item['background_image'] ? 'style="background-image:url(' . $item['background_image']['url'] . ')"' : ''; ?>>
								<?php if ($item['text']) : ?>
									<div class="section-fundacja__item--text">
										<?= $item['text']; ?>
									</div>
									<!-- /.section-fundacja__item--text -->
								<?php endif; ?>
							</div>
							<!-- /.section-fundacja__item -->
						</div>
						<!-- /.cell small-12 medium-12 large-6 -->
					<?php
						$iter++;
					endforeach; ?>

				<?php endif; ?>
			</div>
			<!-- /.grid-x grid-padding-x -->

		</div>
		<!-- /.grid-container -->
	</section>
	<!-- /.section-fundacja -->

<?php
get_footer();
