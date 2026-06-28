<?php
/**
 * Header template.
 *
 * @package Greenline_Projects
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav>
	<div class="nav-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( greenline_media( 'GREENLINE-PROJECTS-LOGO-1.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		</a>
	</div>
	<button class="hamburger" type="button" aria-label="<?php esc_attr_e( 'Toggle menu', 'greenline-projects' ); ?>" aria-expanded="false" aria-controls="navLinks">
		<span class="hamburger-lines" aria-hidden="true"><span></span><span></span><span></span></span>
		<span class="hamburger-close" aria-hidden="true"><i class="fas fa-times"></i></span>
	</button>
	<ul class="nav-links" id="navLinks">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo esc_attr( trim( greenline_nav_active( 'home' ) ) ); ?>"><i class="fas fa-home"></i> Home</a></li>
		<li><a href="<?php echo esc_url( greenline_page_link( 'about', 'about' ) ); ?>" class="<?php echo esc_attr( trim( greenline_nav_active( 'about' ) ) ); ?>"><i class="fas fa-user"></i> About</a></li>
		<li><a href="<?php echo esc_url( greenline_page_link( 'installations', 'services' ) ); ?>" class="<?php echo esc_attr( trim( greenline_nav_active( 'installations' ) ) ); ?>"><i class="fas fa-tools"></i> Installations</a></li>
		<li><a href="<?php echo esc_url( greenline_page_link( 'contact', 'contact' ) ); ?>" class="<?php echo esc_attr( trim( greenline_nav_active( 'contact' ) ) ); ?>"><i class="fas fa-headset"></i> Contact</a></li>
		<li><a href="<?php echo esc_url( greenline_page_link( 'shop', 'shop' ) ); ?>" class="<?php echo esc_attr( trim( greenline_nav_active( 'shop' ) ) ); ?>"><i class="fas fa-shopping-cart"></i> Shop!</a></li>
	</ul>
</nav>
