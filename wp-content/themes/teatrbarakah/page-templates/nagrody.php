<?php
/**
 * Template Name: Nagrody Template
 *
 * @package Teatrbarakah
 */
$fields = get_fields(get_the_ID());
get_header(); ?>

	<section class="nagrody-section" <?= $fields['background_image'] ? 'style="background-image:url(' . $fields['background_image']['url'] . ')"' : ''; ?>>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<?php if ($fields['title_section']) : ?>
					<div class="cell small-12">
						<h1 class="nagrody-section__title default-title">
							<?= $fields['title_section']; ?>
						</h1>
					</div>
					<!-- /.cell small-12 -->
				<?php endif; ?>
				<?php if (is_array($fields['list_left_column']) && isset($fields['list_left_column'])) : ?>
					<div class="cell small-12 medium-12 large-6">
						<div class="block-left">
						<?php foreach ($fields['list_left_column'] as $item) : ?>

							<?php if ($item['title']) : ?>
								<span class="nagrody-section__list-title">
									<?= $item['title']; ?>
								</span>
								<!-- /.nagrody-section__list-title -->
							<?php endif; ?>
							<?php if ($item['text']) : ?>
								<div class="nagrody-section__list-text">
									<?= $item['text']; ?>
								</div>
								<!-- /.nagrody-section__list-title -->
							<?php endif; ?>

						<?php endforeach; ?>
						</div>
						<!-- /.block-left -->
					</div>
					<!-- /.cell small-12 medium-6 -->
				<?php endif; ?>

				<?php if (is_array($fields['list_right_column']) && isset($fields['list_right_column'])) : ?>
					<div class="cell small-12 medium-12 large-6">
						<div class="block-right">
						<?php foreach ($fields['list_right_column'] as $item) : ?>

							<?php if ($item['title']) : ?>
								<span class="nagrody-section__list-title">
									<?= $item['title']; ?>
								</span>
								<!-- /.nagrody-section__list-title -->
							<?php endif; ?>
							<?php if ($item['text']) : ?>
								<div class="nagrody-section__list-text">
									<?= $item['text']; ?>
								</div>
								<!-- /.nagrody-section__list-title -->
							<?php endif; ?>

						<?php endforeach; ?>
						</div>
					</div>
					<!-- /.cell small-12 medium-6 -->
				<?php endif; ?>
			</div>
			<!-- /.grid-x grid-padding-x -->
		</div>
		<!-- /.grid-conatiner -->
	</section>
	<!-- /.nagrody-section -->


<?php

get_footer();
