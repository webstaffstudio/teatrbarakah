<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Teatrbarakah
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $use_black_humb = get_field('black_line_hamburger_menu', get_the_ID()) ?>
<?php $use_second_logo = get_field('use_second_logo_in_header', get_the_ID()) ?>
<?php $black_color_menu_item = get_field('black_color_item_menu', get_the_ID()) ?>
<?php $second_logo = get_field('second_logo', 'option'); ?>
<header class="header">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="header__row <?= $use_second_logo && $second_logo ? 'use-logo-second' : ''; ?>">
					<div class="block-left">
						<a class="header__brand brand" href="<?php echo esc_url(home_url()); ?>">
							<?php if ($use_second_logo && $second_logo) : ?>
								<img src="<?= $second_logo['url'] ?>"
									 alt="<?= $second_logo['alt'] ? $second_logo['alt'] : 'second-logo'?>">
							<?php else: ?>
								<?php if (get_header_image()) : ?>
									<img class="brand__img" src="<?php echo(get_header_image()); ?>"
										 alt="<?php bloginfo('name'); ?>"/>
								<?php
								else :
									bloginfo('name');
								endif;
								?>
						<?php endif; ?>
						</a><!-- /.brand -->
						<button class="btn-burger <?= $use_black_humb ? 'black-line' : ''; ?>">
							<span class="top-line"></span>
							<span class="middle-line"></span>
							<span class="botton-line"></span>
						</button>
						<!-- /.btn-burger -->
					</div>
					<!-- /.block-left -->

					<?php
					if (has_nav_menu('primary')) : ?>

						<div class="mob-nav">
							<?php
							wp_nav_menu(
								[
									'theme_location' => 'primary-mob',
									'menu_id' => 'primary-mob-menu',
									'menu_class' => 'primary-menu-mob',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'walker' => new Teatrbarakah_Navwalker(),
								]
							);
							?>
						</div>
						<!-- /.mob-nav -->

					<?php endif; ?>
					<nav class="header__nav <?= $black_color_menu_item ? 'color-black' : ''; ?>">
						<?php
						if (has_nav_menu('primary')) :
							wp_nav_menu(
								[
									'theme_location' => 'primary',
									'menu_id' => 'primary-menu',
									'menu_class' => 'nav-primary__menu menu dropdown menu',
									'items_wrap' => '<ul id="%1$s" class="%2$s " data-dropdown-menu>%3$s</ul>',
									'walker' => new Teatrbarakah_Navwalker(),
								]
							);
						endif;
						?>
					</nav><!-- /.nav-primary -->

					<div class="header__search">
						<?= get_search_form(); ?>
					</div>
					<!-- /.header__search -->
				</div><!-- /.header__row -->
			</div>
			<!-- /.cell small-12 -->
		</div>
		<!-- /.grid-x grid-padding-x -->
	</div>
	<!-- /.grid-container -->
</header><!-- /.header -->
<main id="content" class="site-content">
