<?php
/**
 * Template Name: Home Page Template
 *
 * @package Teatrbarakah
 */
get_header();
$fields = get_fields(get_the_ID());
$fields_opt = get_fields('option');
?>
<?php if (is_array($fields['home_slider']) && isset($fields['home_slider'])) : ?>
	<section class="section-home-slider">
		<div class="section-home-slider__block">
			<?php foreach ($fields['home_slider'] as $item) : ?>
				<?php if ($item['background_image']) : ?>
					<div class="item"
						<?= $item['background_image'] ? 'style="background-image:url(' . $item['background_image']['url'] . ')"' : ''; ?>>
						<div class="container-gallery">
						<div class="block-gallery">
							<?php if (is_array($item['label_group_image']) && isset($item['label_group_image'])) : ?>
							<span class="block-gallery__title"><?php _e('Patroni', THEME_TD); ?></span>
								<?php foreach ($item['label_group_image'] as $image) : ?>
									<?php if ($image) : ?>
										<div class="block-gallery__item">
											<img src="<?= $image['url'] ?>"
												 alt="<?= $image['alt'] ? $image['alt'] : ''; ?>">
										</div>
										<!-- /.block-gallery__item -->
									<?php endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<!-- /.block-gallery -->
						</div>
						<!-- /.container -->
					</div>
					<!-- /.item -->
				<?php endif; ?>

			<?php endforeach; ?>
		</div>
		<!-- /.section-home-slider__block -->
		<?php if ($fields['button_link']) : ?>
			<div class="button-link">
				<a  href="<?= $fields['button_link']['url'] ?>">
					<?= $fields['button_link']['title'] ? $fields['button_link']['title'] : 'Link'; ?>
				</a>
			</div>
			<!-- /.button-link -->
		<?php endif; ?>
		<?php if (is_array($fields_opt['socials_links']) && isset($fields_opt['socials_links'])) : ?>
		<div class="grid-container container-socials">
			<div class="grid-padding-x grid-x">
				<div class="cell small-12">
					<div class="block-socials">
						<?php foreach ($fields_opt['socials_links'] as $item_soc) : ?>
							<?php if ($item_soc['icon']) : ?>
								<a target="_blank" class="item-social" href="<?= $item_soc['link']['url'] ? $item_soc['link']['url'] : ''; ?>">
									<?= $item_soc['icon'] ?>
								</a>
								<!-- /.item-social -->
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<!-- /.block-socials -->
				</div>
				<!-- /.cell small-12 -->
			</div>
			<!-- /.grid-padding-x grid-x -->
		</div>
		<!-- /.grid-container -->

		<?php endif; ?>
	</section>
	<!-- /.section-home-slider -->
<?php endif; ?>
<?php

get_footer();
