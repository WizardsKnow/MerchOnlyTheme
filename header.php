<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
		:root {
			--primary-color: <?php the_field('primary_color', 'option'); ?>;
			--secondary-color: <?php the_field('secondary_color', 'option'); ?>;

			--primary-font: 'Open Sans';

			--header-height: <?php the_field('desktop_height', 'option'); ?>px;
			--header-mobile-height: <?php the_field('mobile_height', 'option'); ?>px;

			--logo-width: <?php the_field('width', 'option'); ?>px;
		}
	</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<?php the_custom_logo(); ?>
				<a href="#" id="js-mobile-menu" class="mobile-menu">Menu</a>
				<?php
					$args = [
						'theme_location' => 'header-nav',
						'container' => 'nav',
						'container_id' => 'js-nav',
						'container_class' => 'header-nav',
						'menu_class' => 'header-nav__list'
					];
					wp_nav_menu( $args );
				?>
			</div>
		</div>
		<?php if ( get_field('countdown', 'option') ) : ?>
			<div class="timer">
				<div class="container">
					<div class="timer__wrapper">
						<span><?php the_field('countdown_message', 'option'); ?></span>
						&nbsp;
						<?php echo do_shortcode( '[Wow-Countdowns id=' . get_field('countdown_id', 'option') . ']' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</header>
	<main class="main <?php if ( get_field('countdown', 'option') ) { echo ' main--timer'; } ?>">
		<?php if ( has_header_image() ) : ?>
			<img src="<?php header_image(); ?>" alt="" class="banner">
		<?php endif; ?>
		<div class="container">
