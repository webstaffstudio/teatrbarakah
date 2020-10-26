<?php
/**
 * Template Name: Barakah Template
 *
 * @package Teatrbarakah
 */
$fields = get_fields(get_the_ID());
get_header(); ?>
	<section class="section-barakah"
		<?= $fields['background_image'] ? 'style="background-image:url(' . $fields['background_image']['url'] . ')"' : ''; ?>>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 large-6">
					<?php if ($fields['hero_title']) : ?>
						<h1 class="section-barakah__title default-title">
							<?= $fields['hero_title']; ?>
						</h1>
					<?php endif; ?>
					<?php if ($fields['hero_text']) : ?>
						<div class="section-barakah__hero-text default-text">
							<?= $fields['hero_text']; ?>
						</div>
						<!-- /.section-barakah__hero-text -->
					<?php endif; ?>
				</div>
				<!-- /.cell small-12 -->
			</div>
			<!-- /.grid-x grid-padding-x -->
		</div>
		<!-- /.grid-container -->
		<?php if (is_array($fields['list_link_to_page']) && isset($fields['list_link_to_page'])) : ?>
			<div class="section-barakah__items">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="cell small-12 medium-6 large-3 top-default-block">
							<div class="item default">
								<div class="item__image">
									<img
										src="<?= get_template_directory_uri() . '/assets/images/placeholder.png' ?>"
										alt="placeholder-image">
								</div>
								<!-- /.item__image -->
							</div>
							<!-- /.item -->
						</div>
						<!-- /.cell small-12 -->
						<?php
						$it = 1;
						foreach ($fields['list_link_to_page'] as $item) : ?>
							<div class="cell small-12 medium-6 large-3">
								<div class="item">
									<?php if ($item['link']) : ?>
										<a href="<?= $item['link']['url'] ?>">
												<span
													class="title-link"><?= $item['link']['title'] ? $item['link']['title'] : ''; ?></span>
											<?php if ($item['image']) : ?>
												<div class="item__image">
													<img src="<?= $item['image']['url'] ?>"
														 alt="<?= $item['image']['alt'] ? $item['image']['alt'] : ''; ?>">
												</div>
												<!-- /.item__image -->
											<?php endif; ?>
										</a>
									<?php endif; ?>
								</div>
								<!-- /.item -->
							</div>
							<!-- /.cell small-12 -->
							<?php if ($it == 3) : ?>
								<div class="cell small-12 medium-6 large-3 default-block">
									<div class="item default">
										<div class="item__image">
											<img
												src="<?= get_template_directory_uri() . '/assets/images/placeholder.png' ?>"
												alt="placeholder-image">
										</div>
										<!-- /.item__image -->
									</div>
									<!-- /.item -->
								</div>
								<!-- /.cell small-12 -->
								<div class="cell small-12 medium-6 large-3 default-block">
									<div class="item default">
										<div class="item__image">
											<img
												src="<?= get_template_directory_uri() . '/assets/images/placeholder.png' ?>"
												alt="placeholder-image">
										</div>
										<!-- /.item__image -->
									</div>
									<!-- /.item -->
								</div>
								<!-- /.cell small-12 -->
							<?php endif; ?>
							<?php
							$it++;
						endforeach; ?>
						<div class="cell small-12 medium-6 large-3 bottom-default-block">
							<div class="item default">
								<div class="item__image">
									<img
										src="<?= get_template_directory_uri() . '/assets/images/placeholder.png' ?>"
										alt="placeholder-image">
								</div>
								<!-- /.item__image -->
							</div>
							<!-- /.item -->
						</div>
						<!-- /.cell small-12 -->
					</div>
					<!-- /.grid-x grid-padding-x -->
				</div>
				<!-- /.grid-container -->
			</div>
			<!-- /.section-barakah__items -->
		<?php endif; ?>
	</section>
	<!-- /.section-barakah -->
<?php
get_footer();
